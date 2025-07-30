document.addEventListener('DOMContentLoaded', () => {
    const state = {
        currentSlide: 0,
        selectedKitId: null,
        selectedKit: null,
        currentQuestionIndex: 0,
        isLightboxOpen: false,
        lightboxImages: [],
        currentLightboxIndex: 0,
        touchStartX: 0,
        touchEndX: 0,
        sessionId: generateSessionId(),
        quizAnswers: [],
        estimatedAge: null,
        estimatedGender: null,
        relationshipStatus: null,
        purchaseFrequency: null,
        preferenceProfile: null,
        sessionStartTime: null,
    };

    // МИНИМАЛЬНАЯ аналитика - только возраст+пол+товар при заполнении формы
    const sendAnalytics = (data) => {
        // Отправляем только если есть все критичные данные
        if (!state.estimatedAge || !state.estimatedGender || !state.selectedKitId) {
            return; // Не отправляем если нет полных данных
        }

        const analyticsData = {
            product_id: state.selectedKitId,
            age: state.estimatedAge,
            gender: state.estimatedGender
        };

        // Отправляем данные на сервер
        fetch('analytics.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(analyticsData)
        }).catch(err => console.log('Analytics error:', err));
    };

    // Генерация ID сессии
    function generateSessionId() {
        return Date.now().toString(36) + Math.random().toString(36).substr(2);
    }

    // Определение возраста и пола на основе прямых ответов квиза
    const analyzeQuizAnswers = () => {
        if (state.quizAnswers.length < 7) return;
        
        const answers = state.quizAnswers;
        
        // Возраст (вопрос 3, индекс 3)
        const ageAnswerIndex = answers[3];
        const ageRanges = ["18-24", "25-34", "35-44", "45-54", "55+"];
        state.estimatedAge = ageRanges[ageAnswerIndex] || "unknown";
        
        // Пол (вопрос 4, индекс 4)
        const genderAnswerIndex = answers[4];
        const genders = ["female", "male", "non-binary", "prefer_not_to_say"];
        state.estimatedGender = genders[genderAnswerIndex] || "unknown";
        
        // Семейный статус (вопрос 5, индекс 5)
        const relationshipIndex = answers[5];
        const relationshipStatuses = ["single", "in_relationship", "married", "complicated", "prefer_not_to_say"];
        state.relationshipStatus = relationshipStatuses[relationshipIndex] || "unknown";
        
        // Частота покупок (вопрос 6, индекс 6)
        const frequencyIndex = answers[6];
        const frequencies = ["first_time", "rarely", "occasionally", "regularly", "often"];
        state.purchaseFrequency = frequencies[frequencyIndex] || "unknown";
        
        // Профиль предпочтений на основе первых 3 вопросов
        const preferenceScore = answers[0] + answers[1] + answers[2];
        if (preferenceScore <= 3) {
            state.preferenceProfile = "conservative";
        } else if (preferenceScore <= 6) {
            state.preferenceProfile = "moderate";
        } else if (preferenceScore <= 9) {
            state.preferenceProfile = "adventurous";
        } else {
            state.preferenceProfile = "bold";
        }
    };

    const carouselContainer = document.getElementById('carousel-container');
    const carouselSlider = document.getElementById('carousel-slider');
    const prevButton = document.getElementById('prev-slide');
    const nextButton = document.getElementById('next-slide');
    const indicatorsContainer = document.getElementById('slide-indicators');

    const sections = {
        carousel: document.getElementById('carousel-container'),
        quiz: document.getElementById('quiz-container'),
        form: document.getElementById('form-container'),
        thankYou: document.getElementById('thank-you-screen'),
    };

    const popupOverlay = document.getElementById('popup-overlay');
    const popupContent = document.getElementById('popup-content');
    const closePopupButton = document.getElementById('close-popup');

    const lightboxOverlay = document.getElementById('lightbox-overlay');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeLightboxButton = document.getElementById('close-lightbox');
    const prevLightboxButton = document.getElementById('prev-lightbox');
    const nextLightboxButton = document.getElementById('next-lightbox');
    
    const orderForm = document.getElementById('form');
    const sub4Input = document.getElementById('sub4');
    const sub5Input = document.getElementById('sub5');
    const selectedKitDisplay = document.getElementById('selected-kit-display');

    const renderStars = (rating) => {
        let starsHTML = '';
        for (let i = 0; i < 5; i++) {
            const starClass = i < rating ? 'text-gold-light fill-current' : 'text-gray-600';
            starsHTML += `<i data-lucide="star" class="w-4 h-4 ${starClass}"></i>`;
        }
        return `<div class="flex items-center gap-1">${starsHTML}</div>`;
    };

    const renderReview = (review) => {
        const hasPhoto = review.photo && review.photo !== 'placeholder';
        const photoUrl = hasPhoto ? review.photo : (review.photo === 'placeholder' ? 'https://placehold.co/120x120/1a1a1a/d4af37?text=Foto' : null);

        const photoHTML = photoUrl ? `<img src="${photoUrl}" alt="Recensione di ${review.name}" class="review-photo" loading="lazy">` : '';
        const cardClass = photoUrl ? 'review-card-with-photo' : '';

        return `
            <div class="review-card ${cardClass}">
                ${photoHTML}
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-2">
                        <p class="font-semibold text-white text-base">${review.name}</p>
                        ${renderStars(review.rating)}
                    </div>
                    <p class="text-gray-400 text-base italic leading-relaxed">"${review.text}"</p>
                </div>
            </div>
        `;
    };

    const renderCarousel = () => {
        carouselSlider.innerHTML = window.products.map(product => {
            const storedReviews = JSON.parse(localStorage.getItem(`reviews-product-${product.id}`) || '[]');
            const allReviews = [...product.reviews, ...storedReviews];

            return `
            <div class="slide">
                <div class="absolute inset-0 bg-cover bg-center transition-all duration-700 ease-in-out" style="background-image: url('${product.mainImage}');">
                    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
                </div>
                <div class="slide-content-wrapper">
                    <div class="slide-content-inner">
                        <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 text-shadow-gold">${product.name}</h2>
                        <p class="text-gold-light font-serif text-lg mb-6">${product.tagline}</p>

                        <div class="grid grid-cols-3 sm:grid-cols-4 gap-2 mb-6">
                            ${product.thumbnails.map((thumb, index) => `
                                <img src="${thumb}" alt="Miniatura ${product.name}" class="product-image rounded-lg cursor-pointer h-24 w-full object-cover border-2 border-transparent hover:border-gold-light transition-all" data-product-id="${product.id}" data-thumb-index="${index}" loading="lazy">
                            `).join('')}
                        </div>
                        
                        <div class="flex items-center gap-4 mb-6">
                            <span class="text-gold-light text-4xl font-serif font-bold">${product.price}</span>
                            <span class="text-gray-400 line-through text-xl">${product.originalPrice}</span>
                        </div>

                        <p class="text-gray-300 mb-8 max-w-prose text-base lg:text-lg leading-relaxed">${product.description}</p>

                        <button data-kit-id="${product.id}" class="select-kit-btn w-full sm:w-auto bg-gold-dark hover:bg-gold-light text-black font-bold py-3 px-6 rounded-lg transition-all duration-300 mb-8 text-lg">
                            Scegli & Inizia il Quiz
                        </button>

                        <div class="space-y-4">
                            <details class="details-marker p-4 rounded-lg">
                                <summary class="flex justify-between items-center cursor-pointer text-gold-light font-semibold text-lg">
                                    <span>Cosa Troverai Dentro</span>
                                    <i data-lucide="plus" class="w-5 h-5 transition-transform icon-plus flex-shrink-0"></i>
                                </summary>
                                <ul class="mt-4 space-y-3 text-gray-300 list-disc list-inside text-base leading-relaxed">
                                    ${product.details.map(item => `<li>${item}</li>`).join('')}
                                </ul>
                            </details>
                            <details class="details-marker p-4 rounded-lg">
                                <summary class="flex justify-between items-center cursor-pointer text-gold-light font-semibold text-lg">
                                    <span>Consigli per l'Uso</span>
                                    <i data-lucide="plus" class="w-5 h-5 transition-transform icon-plus flex-shrink-0"></i>
                                </summary>
                                 <div class="mt-4 space-y-3 text-gray-300 text-base leading-relaxed">${product.usageTips}</div>
                            </details>
                            <details class="details-marker p-4 rounded-lg">
                                <summary class="flex justify-between items-center cursor-pointer text-gold-light font-semibold text-lg">
                                    <span>Dettagli Tecnici</span>
                                    <i data-lucide="plus" class="w-5 h-5 transition-transform icon-plus flex-shrink-0"></i>
                                </summary>
                                 <div class="mt-4 space-y-3 text-gray-300 text-base leading-relaxed">${product.specs}</div>
                            </details>
                            <details class="details-marker p-4 rounded-lg border-t-2 border-gold-dark/50 pt-4 mt-4">
                                <summary class="flex justify-between items-center cursor-pointer text-gold-light font-semibold text-lg">
                                    <span><i data-lucide="sparkles" class="inline-block w-5 h-5 mr-2"></i>Perché vendiamo set intimi a soli 2 euro?</span>
                                    <i data-lucide="plus" class="w-5 h-5 transition-transform icon-plus flex-shrink-0"></i>
                                </summary>
                                <div class="mt-4 space-y-4 text-gray-300 text-base leading-relaxed">
                                    <div class="bg-gradient-to-r from-gold-dark/10 to-gold-light/10 p-4 rounded-lg border-l-4 border-gold-dark">
                                        <h4 class="font-semibold text-gold-light text-lg mb-2"></h4>
                                        <p class="text-sm sm:text-base">Capiamo che possa sembrare sospetto: prodotti premium di <strong>Viagra, Durex, Lovehoney, Loveboxxx e Lelo</strong> quasi gratis? Ma abbiamo una spiegazione chiara.</p>
                                    </div>
                                    
                                    <div class="space-y-3">
                                        <p class="text-sm sm:text-base">Il nostro sito è una <strong>piattaforma chiusa per il testing di prodotti</strong>. Vi si accede solo tramite link riservato da parte dei dipendenti dei negozi partner, dei loro amici, familiari o partecipanti invitati. L'obiettivo è raccogliere feedback onesti da utenti reali.</p>
                                        
                                        <p class="text-sm sm:text-base">Collaboriamo con grandi marchi che stanno per lanciare nuovi prodotti o migliorare le proprie linee. Invece di investire in pubblicità, distribuiscono una quantità limitata di set al prezzo simbolico di <strong>2 euro</strong>. Non si tratta di una svendita né di fondi di magazzino, ma di una scelta consapevole per migliorare la qualità.</p>
                                    </div>
                                    
                                    <div class="bg-gray-800/50 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gold-light mb-3 text-base sm:text-lg">Come funziona:</h4>
                                        <ol class="list-decimal list-inside space-y-2 text-sm sm:text-base text-gray-300">
                                            <li><strong>Quiz iniziale:</strong> Compili un quiz per confermare interesse e idoneità all'iniziativa.</li>
                                            <li><strong>Scelta del set:</strong> Scegli uno dei set disponibili e lo acquisti a soli 2 euro.</li>
                                            <li><strong>Prova del prodotto:</strong> Ricevi il set e lo utilizzi per circa un mese.</li>
                                            <li><strong>Feedback finale:</strong> Dopo un mese, ti invieremo un link per compilare un questionario anonimo in cui ci racconti com'è andata, cosa ti è piaciuto, cosa può essere migliorato. Se ti è mancato qualcosa nel set, fallo sapere — sarà molto utile!</li>
                                        </ol>
                                        <p class="mt-3 text-sm text-gray-400">Bastano meno di 5 minuti. Il tuo feedback aiuterà noi e i marchi coinvolti a perfezionare i prodotti prima del lancio ufficiale su larga scala.</p>
                                    </div>
                                    
                                    <div class="bg-yellow-900/20 border border-yellow-600/30 p-4 rounded-lg">
                                        <div class="flex items-start space-x-3">
                                            <span class="text-yellow-400 text-xl">⚠️</span>
                                            <div>
                                                <p class="font-semibold text-yellow-300 text-sm sm:text-base">Importante:</p>
                                                <p class="text-sm sm:text-base text-yellow-100 mt-1"><strong>Un partecipante = un solo set.</strong> È possibile partecipare una sola volta.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-sm sm:text-base text-gray-400 italic">
                                        <p>Il prezzo simbolico di 2 euro serve per evitare abusi da parte di rivenditori o negozi, così un'unica organizzazione non può acquistare tutto lo stock. L'obiettivo è ottenere opinioni da persone diverse, non accumulare scorte per la rivendita.</p>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-serif text-2xl text-gold-light mb-4">Le Voci dei Nostri Clienti</h3>
                            <div class="space-y-4" id="reviews-list-${product.id}">
                                ${allReviews.map(review => renderReview(review)).join('')}
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-serif text-2xl text-gold-light mb-4">Lascia la tua recensione</h3>
                            <form class="review-form space-y-4" data-product-id="${product.id}" action="javascript:void(0)">
                                <input type="text" name="name" class="form-input" placeholder="Il tuo nome" required>
                                <textarea name="text" class="form-input" rows="3" placeholder="La tua esperienza..." required></textarea>
                                <div class="flex items-center justify-between">
                                    <div class="rating-stars">
                                        <input type="radio" id="star5-${product.id}" name="rating" value="5"><label for="star5-${product.id}"><i data-lucide="star" class="w-6 h-6"></i></label>
                                        <input type="radio" id="star4-${product.id}" name="rating" value="4"><label for="star4-${product.id}"><i data-lucide="star" class="w-6 h-6"></i></label>
                                        <input type="radio" id="star3-${product.id}" name="rating" value="3"><label for="star3-${product.id}"><i data-lucide="star" class="w-6 h-6"></i></label>
                                        <input type="radio" id="star2-${product.id}" name="rating" value="2"><label for="star2-${product.id}"><i data-lucide="star" class="w-6 h-6"></i></label>
                                        <input type="radio" id="star1-${product.id}" name="rating" value="1"><label for="star1-${product.id}"><i data-lucide="star" class="w-6 h-6"></i></label>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div id="photo-preview-container-${product.id}" class="photo-preview-container hidden"></div>
                                        <label class="cursor-pointer text-gold-light hover:text-white transition-colors">
                                            <i data-lucide="camera" class="w-6 h-6"></i>
                                            <input type="file" name="photo" class="hidden" accept="image/*">
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="w-full bg-gold-dark hover:bg-gold-light text-black font-bold py-2 px-4 rounded-lg transition-all duration-300">Invia Recensione</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        `}).join('');

        indicatorsContainer.innerHTML = window.products.map((_, index) => `
            <div class="w-2.5 h-2.5 bg-white/30 rounded-full transition-all duration-300 cursor-pointer" data-slide-to="${index}"></div>
        `).join('');

        lucide.createIcons();
        addEventListeners();
        updateCarouselUI();
    };

    const updateCarouselUI = () => {
        carouselSlider.style.transform = `translateX(-${state.currentSlide * 100}%)`;
        document.querySelectorAll('.slide').forEach((slide, index) => {
            slide.classList.toggle('active-slide', index === state.currentSlide);
        });
        document.querySelectorAll('#slide-indicators > div').forEach((indicator, index) => {
            indicator.classList.toggle('active-indicator', index === state.currentSlide);
        });
    };
    
    const showNextSlide = () => {
        const oldSlide = state.currentSlide;
        state.currentSlide = (state.currentSlide + 1) % window.products.length;
        updateCarouselUI();
        
        // Аналитика убрана
    };

    const showPrevSlide = () => {
        const oldSlide = state.currentSlide;
        state.currentSlide = (state.currentSlide - 1 + window.products.length) % window.products.length;
        updateCarouselUI();
        
        // Аналитика убрана
    };

    const handleReviewSubmit = (e) => {
        e.preventDefault();
        const form = e.target;
        const productId = form.dataset.productId;
        const name = form.elements.name.value;
        const text = form.elements.text.value;
        const rating = form.elements.rating.value;
        const photoFile = form.elements.photo.files[0];

        // Проверяем рейтинг вручную (убрали required из HTML)
        if (!rating) {
            alert('Seleziona un punteggio da 1 a 5 stelle');
            return;
        }

        const newReview = { name, text, rating: parseInt(rating), photo: null, date: new Date().toISOString() };

        const processAndStoreReview = () => {
            const storedReviews = JSON.parse(localStorage.getItem(`reviews-product-${productId}`) || '[]');
            storedReviews.push(newReview);
            localStorage.setItem(`reviews-product-${productId}`, JSON.stringify(storedReviews));
            
            const reviewsList = document.getElementById(`reviews-list-${productId}`);
            reviewsList.insertAdjacentHTML('beforeend', renderReview(newReview));
            lucide.createIcons();
            form.reset();
            const previewContainer = document.getElementById(`photo-preview-container-${productId}`);
            previewContainer.innerHTML = '';
            previewContainer.classList.add('hidden');
        };

        if (photoFile) {
            const reader = new FileReader();
            reader.onload = (e) => {
                newReview.photo = e.target.result;
                processAndStoreReview();
            };
            reader.readAsDataURL(photoFile);
        } else {
            processAndStoreReview();
        }
    };

    const handlePhotoPreview = (e) => {
        const file = e.target.files[0];
        if (!file) return;

        const productId = e.target.closest('form').dataset.productId;
        const previewContainer = document.getElementById(`photo-preview-container-${productId}`);
        
        const reader = new FileReader();
        reader.onload = (e) => {
            previewContainer.innerHTML = `
                <img src="${e.target.result}" class="photo-preview" alt="Anteprima foto" loading="lazy">
                <button type="button" class="remove-photo-btn text-white">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            `;
            previewContainer.classList.remove('hidden');
            lucide.createIcons();

            previewContainer.querySelector('.remove-photo-btn').addEventListener('click', () => {
                e.target.value = ''; 
                previewContainer.innerHTML = '';
                previewContainer.classList.add('hidden');
            });
        };
        reader.readAsDataURL(file);
    };

    const addEventListeners = () => {
        document.querySelectorAll('.select-kit-btn').forEach(button => {
            button.addEventListener('click', () => {
                state.selectedKitId = button.dataset.kitId;
                state.selectedKit = window.products.find(p => p.id === state.selectedKitId);
                state.currentQuestionIndex = 0;
                
                // Аналитика убрана - записываем только при заполнении формы
                
                renderQuiz();
                showSection('quiz');
                window.scrollTo(0, 0);
            });
        });
        
        document.querySelectorAll('.product-image').forEach(img => {
            img.addEventListener('click', (e) => {
                e.stopPropagation();
                const productId = img.dataset.productId;
                const thumbIndex = parseInt(img.dataset.thumbIndex, 10);
                openLightbox(productId, thumbIndex);
            });
        });

        document.querySelectorAll('.review-form').forEach(form => {
            form.addEventListener('submit', handleReviewSubmit); // Включил обработку для имитации
            form.querySelector('input[type="file"]').addEventListener('change', handlePhotoPreview);
            
            // Останавливаем всплытие touch/click событий чтобы не мешать слайдеру
            form.addEventListener('touchstart', (e) => e.stopPropagation());
            form.addEventListener('touchmove', (e) => e.stopPropagation());
            form.addEventListener('touchend', (e) => e.stopPropagation());
            form.addEventListener('click', (e) => e.stopPropagation());
            
            // Также для всех инпутов внутри формы
            form.querySelectorAll('input, textarea, button, label').forEach(el => {
                el.addEventListener('touchstart', (e) => e.stopPropagation());
                el.addEventListener('touchmove', (e) => e.stopPropagation());
                el.addEventListener('touchend', (e) => e.stopPropagation());
                el.addEventListener('click', (e) => e.stopPropagation());
            });
        });
    };

    const renderSelectedKit = () => {
        if (!state.selectedKit) return;
        selectedKitDisplay.innerHTML = `
            <div class="flex items-center gap-4">
                <img src="${state.selectedKit.mainImage}" alt="${state.selectedKit.name}" class="w-16 h-16 object-cover rounded-lg" loading="lazy">
                <div>
                    <h3 class="text-gold-light font-semibold text-lg">${state.selectedKit.name}</h3>
                    <p class="text-gray-400">${state.selectedKit.price}</p>
                </div>
            </div>`;
        sub4Input.value = state.selectedKit.name;
        sub5Input.value = location.origin + '/lander/flow1/' + state.selectedKit.mainImage;
    };

    const renderQuiz = () => {
        const questionData = window.quizData.questions[state.currentQuestionIndex];
        if (!questionData) {
            // Квиз завершен
            analyzeQuizAnswers();
            // Аналитика убрана
            
            renderSelectedKit();
            showSection('form');
            window.scrollTo(0, 0);
            return;
        }
        
        // Аналитика убрана

        const progress = ((state.currentQuestionIndex + 1) / window.quizData.questions.length) * 100;

        sections.quiz.innerHTML = `
            <div class="w-full max-w-2xl mx-auto text-center">
                <div class="mb-8">
                    <p class="text-gold-light mb-2">Domanda ${state.currentQuestionIndex + 1} di ${window.quizData.questions.length}</p>
                    <div class="w-full bg-gray-700 rounded-full h-2.5">
                        <div class="bg-gold-light h-2.5 rounded-full" style="width: ${progress}%"></div>
                    </div>
                </div>
                <h2 class="font-serif text-3xl lg:text-4xl text-white mb-8">${questionData.question}</h2>
                <div class="space-y-4">
                    ${questionData.answers.map((answer, i) => `
                        <button class="quiz-option" data-answer-index="${i}">${answer}</button>
                    `).join('')}
                </div>
            </div>`;
        document.querySelectorAll('.quiz-option').forEach((button, index) => {
            button.addEventListener('click', () => handleQuizAnswer(index));
        });
    };
    
    const handleQuizAnswer = (answerIndex) => {
        // Сохраняем ответ
        state.quizAnswers.push(answerIndex);
        
        // Аналитика убрана
        
        state.currentQuestionIndex++;
        renderQuiz();
    };

    const showSection = (sectionKey) => {
        Object.keys(sections).forEach(key => {
            const isTarget = key === sectionKey;
            sections[key].classList.toggle('section-active', isTarget);
            sections[key].classList.toggle('section-hidden', !isTarget);
        });
        document.body.style.overflow = (sectionKey === 'carousel') ? 'hidden' : 'auto';
    };
    
    const updateLightboxImage = () => {
        if (state.lightboxImages.length === 0) return;
        lightboxImage.src = state.lightboxImages[state.currentLightboxIndex];
    };

    const showNextLightboxImage = () => {
        state.currentLightboxIndex = (state.currentLightboxIndex + 1) % state.lightboxImages.length;
        updateLightboxImage();
    };

    const showPrevLightboxImage = () => {
        state.currentLightboxIndex = (state.currentLightboxIndex - 1 + state.lightboxImages.length) % state.lightboxImages.length;
        updateLightboxImage();
    };

    const openLightbox = (productId, thumbIndex) => {
        if(state.isLightboxOpen) return;
        const product = window.products.find(p => p.id === productId);
        if (!product) return;
        
        state.isLightboxOpen = true;
        state.lightboxImages = product.thumbnails;
        state.currentLightboxIndex = thumbIndex;
        
        updateLightboxImage();
        lightboxOverlay.classList.remove('opacity-0', 'pointer-events-none');
        lucide.createIcons();
    };

    const closeLightbox = () => {
        state.isLightboxOpen = false;
        lightboxOverlay.classList.add('opacity-0', 'pointer-events-none');
    };
    
    const handleCarouselSwipe = (e) => {
        // Проверяем, был ли клик на интерактивном элементе
        const target = e.target;
        const isInteractive = target.closest(".details-marker") || target.closest(".select-kit-btn") || target.closest(".product-image");
        if (isInteractive) {
            return; // Игнорируем свайп, если клик был на интерактивном элементе
        }

        const diff = state.touchEndX - state.touchStartX;
        const threshold = 50;
        if (diff > threshold) {
            showPrevSlide();
        } else if (diff < -threshold) {
            showNextSlide();
        }
    };
    
    const handleLightboxSwipe = () => {
        const diff = state.touchEndX - state.touchStartX;
        const threshold = 50;
        if (diff > threshold) {
            showPrevLightboxImage();
        } else if (diff < -threshold) {
            showNextLightboxImage();
        }
    };

    const showPopup = () => {
        popupOverlay.classList.remove('opacity-0', 'pointer-events-none');
        setTimeout(() => popupContent.classList.remove('opacity-0', 'scale-95'), 10);
        
        // Аналитика убрана
    };

    const closePopup = () => {
        popupContent.classList.add('opacity-0', 'scale-95');
        setTimeout(() => popupOverlay.classList.add('opacity-0', 'pointer-events-none'), 300);
        
        // Аналитика убрана
    };

    nextButton.addEventListener('click', showNextSlide);
    prevButton.addEventListener('click', showPrevSlide);
    indicatorsContainer.addEventListener('click', (e) => {
        if (e.target.dataset.slideTo) {
            const oldSlide = state.currentSlide;
            state.currentSlide = parseInt(e.target.dataset.slideTo, 10);
            updateCarouselUI();
            
            // Аналитика убрана
        }
    });
    
    carouselSlider.addEventListener("touchstart", (e) => {
        state.touchStartX = e.touches[0].clientX;
    }, { passive: true });
    carouselSlider.addEventListener("touchmove", (e) => {
        state.touchEndX = e.touches[0].clientX;
    }, { passive: true });
    carouselSlider.addEventListener("touchend", handleCarouselSwipe);
    
    closeLightboxButton.addEventListener('click', closeLightbox);
    lightboxOverlay.addEventListener('click', (e) => e.target === lightboxOverlay && closeLightbox());
    nextLightboxButton.addEventListener('click', showNextLightboxImage);
    prevLightboxButton.addEventListener('click', showPrevLightboxImage);
    lightboxImage.addEventListener('touchstart', e => state.touchStartX = e.touches[0].clientX, { passive: true });
    lightboxImage.addEventListener('touchmove', e => state.touchEndX = e.touches[0].clientX, { passive: true });
    lightboxImage.addEventListener('touchend', handleLightboxSwipe);

    closePopupButton.addEventListener('click', closePopup);
    
    // Убрал обработчик - форма должна отправляться на api.php как задумано
    // orderForm теперь работает нормально с action="api.php"

    // Все события отслеживания убраны

    // Функция определения текущей секции
    const getCurrentSection = () => {
        if (sections.quiz.classList.contains('section-active')) return 'quiz';
        if (sections.form.classList.contains('section-active')) return 'form';
        if (sections.thankYou.classList.contains('section-active')) return 'thank_you';
        return 'carousel';
    };

    // ЕДИНСТВЕННОЕ событие аналитики - начало заполнения формы
    let formStarted = false;
    if (orderForm) {
        orderForm.addEventListener('input', () => {
            if (!formStarted) {
                formStarted = true;
                sendAnalytics(); // Отправляем возраст+пол+товар
            }
        });
    }

    // Инициализация
    state.sessionStartTime = Date.now();
    
    // Аналитика убрана - только при заполнении формы
    renderCarousel();
    
    setTimeout(showPopup, 1500);
});
