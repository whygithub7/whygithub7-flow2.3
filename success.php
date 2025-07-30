<?php
error_reporting(0); // Remove for debug
?><?php // Default AlterCPA success page

// All the available languages
$lang = [
	'ru'	=> [
		'thank_you'					=> 'СПАСИБО!',
		'your_order_received'		=> 'Ваш заказ получен!',
		'not_turn_phone'			=> 'Пожалуйста, не выключайте мобильный телефон!',
		'order_received'			=> 'Оформление заказа',
		'purchase_finalized'		=> 'Подтверждение заказа',
		'delivered_paid'			=> 'Доставка и оплата',
		'text_purchase_finalized'	=> 'Мы хотели бы связаться с вами по телефону, чтобы завершить вашу покупку. Это очень важно, потому что таким образом мы сможем предоставить вам всю необходимую информацию и ответить на любые вопросы, которые у вас могут возникнуть.',
		'form_order_information'	=> 'Информация о заказе',
		'form_order_number'			=> 'Номер заказа:',
		'form_name'					=> 'Имя:',
		'form_date'					=> 'Дата:',
		'form_phone'				=> 'Телефон:',
		'products'					=> 'Товары:',
		'icon_result'				=> 'Гарантия результата или возврат средств в течение 365 дней',
		'icon_effectiveness'		=> 'Безопасность и эффективность продукта клинически доказаны',
		'contest'					=> 'КОНКУРС',
		'Want_to_get_an_iphone'		=> 'Хотите выиграть iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Все, что вам нужно сделать, это купить полный курс, т.е. 3 упаковки продукта, и вы можете выиграть один из 30 iPhone 15 Pro!',
		'your_email'				=> 'Введите email',
		'participate'				=> 'Участвовать',
		'hurry_up'					=> 'СПЕШИТЕ',
		'the_draw_just'				=> 'розыгрыш всего через 2 недели!',
	],
	'en'	=> [
		'thank_you'					=> 'THANK YOU!',
		'your_order_received'		=> 'Your order has been received!',
		'not_turn_phone'			=> 'Please do not turn off your cell phone!',
		'order_received'			=> 'Order Received',
		'purchase_finalized'		=> 'Purchase Finalized',
		'delivered_paid'			=> 'Delivered & paid',
		'text_purchase_finalized'	=> 'We would like to contact you by phone to finalize your purchase. This is very important, because this way we will be able to give you all the necessary information and answer any questions you may have.',
		'form_order_information'	=> 'Order information',
		'form_order_number'			=> 'Order number:',
		'form_name'					=> 'Name:',
		'form_date'					=> 'Date:',
		'form_phone'				=> 'Phone:',
		'products'					=> 'Products:',
		'icon_result'				=> 'Result guarantee or refund within 365 days',
		'icon_effectiveness'		=> 'The safety and effectiveness of the product is clinically proven',
		'contest'					=> 'CONTEST',
		'Want_to_get_an_iphone'		=> 'Want to get an iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'All you have to do is buy a full treatment, i.n. 3 packs of the product  and you could win one of up to 30 iPhone 15 Pro!',
		'your_email'				=> 'Your email',
		'participate'				=> 'Participate',
		'hurry_up'					=> 'HURRY UP',
		'the_draw_just'				=> 'the draw in just 2 weeks!',
	],
	'uk'	=> [
		'thank_you'					=> 'ДЯКУЄМО!',
		'your_order_received'		=> 'Ваше замовлення отримано!!',
		'not_turn_phone'			=> 'Будь ласка, не вимикайте мобільний телефон!',
		'order_received'			=> 'Замовлення отримано',
		'purchase_finalized'		=> 'Покупка підтверджена',
		'delivered_paid'			=> 'Доставлено та оплачено',
		'text_purchase_finalized'	=> 'Ми хотіли б зв\'язатися з вами по телефону, щоб завершити вашу покупку. Це дуже важливо, оскільки таким чином ми зможемо надати вам всю необхідну інформацію та відповісти на будь-які питання, які у вас можуть виникнути.',
		'form_order_information'	=> 'Інформація про замовлення',
		'form_order_number'			=> 'Номер замовлення:',
		'form_name'					=> 'Ім\'я:',
		'form_date'					=> 'Дата:',
		'form_phone'				=> 'Телефон:',
		'products'					=> 'Товари:',
		'icon_result'				=> 'Гарантія результату або повернення коштів протягом 365 днів',
		'icon_effectiveness'		=> 'Безпека та ефективність продукту клінічно доведена',
		'contest'					=> 'КОНКУРС',
		'Want_to_get_an_iphone'		=> 'Хочете виграти iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Все, що вам потрібно зробити, це купити повний курс, тобто 3 упаковки продукту, і ви можете виграти один із 30 iPhone 15 Pro!',
		'your_email'				=> 'Your email',
		'participate'				=> 'Брати участь',
		'hurry_up'					=> 'ПОСПІШАЙТЕ',
		'the_draw_just'				=> 'розіграш вже через 2 тижні!',
	],
    'es'	=> [
		'thank_you'					=> '¡GRACIAS!',
		'your_order_received'		=> '¡Hemos recibido tu pedido!',
		'not_turn_phone'			=> 'Por favor, no apagues tu teléfono celular.',
		'order_received'			=> 'Pedido recibido',
		'purchase_finalized'		=> 'Compra finalizada',
		'delivered_paid'			=> 'Entregado y pagado',
		'text_purchase_finalized'	=> 'Nos gustaría ponernos en contacto contigo por teléfono para finalizar tu compra. Esto es muy importante, porque de esta manera podremos proporcionarte toda la información necesaria y responder a cualquier pregunta que puedas tener.',
		'form_order_information'	=> 'Información del pedido',
		'form_order_number'			=> 'Número de pedido:',
		'form_name'					=> 'Nombre:',
		'form_date'					=> 'Fecha:',
		'form_phone'				=> 'Teléfono:',
		'products'					=> 'Productos:',
		'icon_result'				=> 'Garantía de resultado o reembolso en un plazo de 365 días',
		'icon_effectiveness'		=> 'La seguridad y eficacia del producto están clínicamente probadas',
		'contest'					=> 'CONCURSO',
		'Want_to_get_an_iphone'		=> '¿Quieres ganar un iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Todo lo que tienes que hacer es comprar un tratamiento completo, es decir, 3 paquetes del producto, ¡y podrías ganar uno de los hasta 30 iPhone 15 Pro!',
		'your_email'				=> 'Tu correo electrónico',
		'participate'				=> 'Participar',
		'hurry_up'					=> '¡APRISA!',
		'the_draw_just'				=> '¡El sorteo es en solo 2 semanas!',
    ],
    'fr'	=> [
		'thank_you'					=> 'MERCI !',
		'your_order_received'		=> 'Votre commande a été reçue!',
		'not_turn_phone'			=> 'Veuillez ne pas éteindre votre téléphone portable!',
		'order_received'			=> 'Commande reçue',
		'purchase_finalized'		=> 'Achat finalisé',
		'delivered_paid'			=> 'Livré et payé',
		'text_purchase_finalized'	=> 'Nous aimerions vous contacter par téléphone pour finaliser votre achat. C\'est très important, car de cette manière, nous pourrons vous fournir toutes les informations nécessaires et répondre à toutes les questions que vous pourriez avoir.',
		'form_order_information'	=> 'Informations sur la commande',
		'form_order_number'			=> 'Numéro de commande:',
		'form_name'					=> 'Nom:',
		'form_date'					=> 'Date:',
		'form_phone'				=> 'Téléphone:',
		'products'					=> 'Produits:',
		'icon_result'				=> 'Garantie de résultat ou remboursement dans les 365 jours',
		'icon_effectiveness'		=> 'La sécurité et l\'efficacité du produit sont cliniquement prouvées',
		'contest'					=> 'CONCOURS',
		'Want_to_get_an_iphone'		=> 'Envie de gagner un iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Tout ce que vous avez à faire, c\'est d\'acheter un traitement complet, c\'est-à-dire 3 paquets du produit, et vous pourriez gagner l\'un des 30 iPhone 15 Pro !',
		'your_email'				=> 'Votre adresse e-mail',
		'participate'				=> 'Participer',
		'hurry_up'					=> 'DÉPÊCHEZ-VOUS',
		'the_draw_just'				=> 'Le tirage au sort dans seulement 2 semaines !',
    ],
    'pt'	=> [
		'thank_you'					=> 'OBRIGADO!',
		'your_order_received'		=> 'Seu pedido foi recebido!',
		'not_turn_phone'			=> 'Por favor, não desligue o seu celular!',
		'order_received'			=> 'Pedido Recebido',
		'purchase_finalized'		=> 'Compra Finalizada',
		'delivered_paid'			=> 'Entregue e pago',
		'text_purchase_finalized'	=> 'Gostaríamos de entrar em contato com você por telefone para finalizar sua compra. Isso é muito importante, pois dessa forma poderemos fornecer todas as informações necessárias e responder a quaisquer perguntas que você possa ter.',
		'form_order_information'	=> 'Informações do Pedido',
		'form_order_number'			=> 'Número do pedido:',
		'form_name'					=> 'Nome:',
		'form_date'					=> 'Data:',
		'form_phone'				=> 'Telefone:',
		'products'					=> 'Produtos:',
		'icon_result'				=> 'Garantia de resultado ou reembolso em até 365 dias',
		'icon_effectiveness'		=> 'A segurança e eficácia do produto são clinicamente comprovadas',
		'contest'					=> 'CONCURSO',
		'Want_to_get_an_iphone'		=> 'Quer ganhar um iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Tudo o que você precisa fazer é comprar um tratamento completo, ou seja, 3 pacotes do produto, e você poderá ganhar um dos até 30 iPhone 15 Pro!',
		'your_email'				=> 'Seu e-mail',
		'participate'				=> 'Participar',
		'hurry_up'					=> 'SE APRESSE',
		'the_draw_just'				=> 'O sorteio acontecerá em apenas 2 semanas!',
     ],
	'de'	=> [
		'thank_you'					=> 'DANKE!',
		'your_order_received'		=> 'Ihre Bestellung wurde erhalten!',
		'not_turn_phone'			=> 'Bitte schalten Sie Ihr Mobiltelefon nicht aus!',
		'order_received'			=> 'Bestellung erhalten',
		'purchase_finalized'		=> 'Kauf abgeschlossen',
		'delivered_paid'			=> 'Geliefert und bezahlt',
		'text_purchase_finalized'	=> 'Wir möchten Sie gerne telefonisch kontaktieren, um Ihren Kauf abzuschließen. Dies ist sehr wichtig, denn auf diese Weise können wir Ihnen alle notwendigen Informationen geben und alle Fragen beantworten, die Sie haben könnten.',
		'form_order_information'	=> 'Bestellinformationen',
		'form_order_number'			=> 'Bestellnummer:',
		'form_name'					=> 'Name:',
		'form_date'					=> 'Datum:',
		'form_phone'				=> 'Telefon:',
		'products'					=> 'Produkte:',
		'icon_result'				=> 'Ergebnisgarantie oder Rückerstattung innerhalb von 365 Tagen',
		'icon_effectiveness'		=> 'Die Sicherheit und Wirksamkeit des Produkts sind klinisch nachgewiesen',
		'contest'					=> 'GEWINNSPIEL',
		'Want_to_get_an_iphone'		=> 'Möchten Sie ein iPhone 15 Pro gewinnen?',
		'buy_packs_noemail'			=> 'Alles, was Sie tun müssen, ist, eine volle Behandlung zu kaufen, d.h. 3 Packungen des Produkts, und Sie könnten eines von bis zu 30 iPhone 15 Pro gewinnen!',
		'your_email'				=> 'Ihre E-Mail',
		'participate'				=> 'Teilnehmen',
		'hurry_up'					=> 'BEEILUNG',
		'the_draw_just'				=> 'Die Ziehung erfolgt in nur 2 Wochen!',
	],
  'ar'	=> [
		'thank_you'					=> 'شكرًا لك!',
		'your_order_received'		=> 'تم استلام طلبك!',
		'not_turn_phone'			=> 'يرجى عدم إيقاف هاتفك المحمول!',
		'order_received'			=> 'الطلب تم استلامه',
		'purchase_finalized'		=> 'الشراء تمت الموافقة عليه',
		'delivered_paid'			=> 'تم التسليم والدفع',
		'text_purchase_finalized'	=> 'نود التواصل معك عبر الهاتف لاستكمال عملية الشراء. هذا أمر مهم جدًا، لأنه بهذه الطريقة سنكون قادرين على تزويدك بجميع المعلومات الضرورية والإجابة على أي أسئلة قد تكون لديك.',
		'form_order_information'	=> 'معلومات الطلب',
		'form_order_number'			=> 'رقم الطلب:',
		'form_name'					=> 'الاسم:',
		'form_date'					=> 'التاريخ:',
		'form_phone'				=> 'الهاتف:',
		'products'					=> 'المنتجات:',
		'icon_result'				=> 'ضمان النتيجة أو استرداد الأموال في غضون 365 يومًا',
		'icon_effectiveness'		=> 'تمت مصادقة أمان وفعالية المنتج سريرياً',
		'contest'					=> 'مسابقة',
		'Want_to_get_an_iphone'		=> 'ترغب في الحصول على iPhone 15 Pro؟',
		'buy_packs_noemail'			=> 'كل ما عليك فعله هو شراء علاج كامل، أي 3 حزم من المنتج، ويمكنك الفوز بواحدة من ما يصل إلى 30 iPhone 15 Pro!',
		'your_email'				=> 'عنوان بريدك الإلكتروني',
		'participate'				=> 'المشاركة',
		'hurry_up'					=> 'عجلوا',
		'the_draw_just'				=> 'السحب خلال 2 أسبوع فقط!',
	],
	'hi'	=> [
		'thank_you'					=> 'धन्यवाद!',
		'your_order_received'		=> 'आपका ऑर्डर प्राप्त हो गया है!',
		'not_turn_phone'			=> 'ककृपया अपने मोबाइल फ़ोन को बंद न करें!',
		'order_received'			=> 'ऑर्डर प्राप्त हुआ',
		'purchase_finalized'		=> 'क्रय समाप्त हो गया',
		'delivered_paid'			=> 'पहुंचाया और भुगतान किया गया',
		'text_purchase_finalized'	=> 'हम आपसे फ़ोन पर संपन्न करना चाहेंगे ताकि आपका ख़रीदारी समाप्त किया जा सके। यह बहुत महत्वपूर्ण है, क्योंकि इस तरीके से हम आपको सभी आवश्यक जानकारी प्रदान कर सकेंगे और आपके पास किसी भी प्रश्न का उत्तर दे सकेंगे।',
		'form_order_information'	=> 'आर्डर जानकारी',
		'form_order_number'			=> 'आर्डर नंबर:',
		'form_name'					=> 'ननाम:',
		'form_date'					=> 'तारीख:',
		'form_phone'				=> 'फ़ोन:',
		'products'					=> 'उत्पाद:',
		'icon_result'				=> '365 दिनों के भीतर परिणाम की गारंटी या वापसी',
		'icon_effectiveness'		=> 'उत्पाद की सुरक्षा और प्रभावना क्लिनिकली प्रमाणित है',
		'contest'					=> 'प्रतियोगिता',
		'Want_to_get_an_iphone'		=> 'कक्या आप iPhone 15 Pro जीतना चाहेंगे?',
		'buy_packs_noemail'			=> 'आपको बस एक पूरी चिकित्सा कोर्स, यानी उत्पाद की 3 पैकेज ख़रीदना है, और आप 30 iPhone 15 Pro में से एक जीत सकते हैं!',
		'your_email'				=> 'आपका ईमेल',
		'participate'				=> 'भाग लें',
		'hurry_up'					=> 'जल्दी करो',
		'the_draw_just'				=> 'केवल 2 हफ़्तों में खींचाव!',
	],
	'bn'	=> [
		'thank_you'					=> 'ধন্যবাদ!',
		'your_order_received'		=> 'আপনার অর্ডার গৃহীত হয়েছে!',
		'not_turn_phone'			=> 'দয়া করে আপনার মোবাইল ফোন বন্ধ করবেন না!',
		'order_received'			=> 'অর্ডার গৃহীত',
		'purchase_finalized'		=> 'ক্রয় সম্পন্ন',
		'delivered_paid'			=> 'প্রেরিত এবং পরিশোধিত',
		'text_purchase_finalized'	=> 'আমরা আপনার ক্রয় সম্পন্ন করতে আপনার সাথে টেলিফোনে যোগাযোগ করতে চাই। এটি খুব গুরুত্বপূর্ণ কারণ, এর মাধ্যমে আমরা আপনাকে সমস্ত প্রয়োজনীয় তথ্য দেওয়ার সম্ভাবনা এবং আপনার কোনও প্রশ্নের উত্তর দিতে পারব।',
		'form_order_information'	=> 'অর্ডার তথ্য',
		'form_order_number'			=> 'অর্ডার নম্বর:',
		'form_name'					=> 'নাম:',
		'form_date'					=> 'তারিখ:',
		'form_phone'				=> 'ফোন:',
		'products'					=> 'পণ্য:',
		'icon_result'				=> '৩৬৫ দিনের মধ্যে ফল বা প্রত্যর্পণ গ্যারান্টি',
		'icon_effectiveness'		=> 'পণ্যের নিরাপত্তা এবং কার্যক্ষমতা ক্লিনিকালি প্রমাণিত',
		'contest'					=> 'প্রতিযোগিতা',
		'Want_to_get_an_iphone'		=> 'আপনি কি একটি iPhone 15 Pro পেতে চান?',
		'buy_packs_noemail'			=> 'এটি সম্পূর্ণ চিকিৎসা, অর্থাৎ প্রোডাক্টের ৩ প্যাকেট কেনার প্রয়োজন, এবং আপনি আপনার ইমেল ঠিকানা প্রবেশ করে, আর প্রাপ্ত হতে পারেন একটি iPhone 15 Pro মধ্যে ৩০ টির মধ্যে একটি জিততে!',
		'your_email'				=> 'আপনার ইমেল',
		'participate'				=> 'অংশগ্রহণ করুন',
		'hurry_up'					=> 'ঝড়ু',
		'the_draw_just'				=> 'মাত্র ২ সপ্তাহে টির ড্রা!',
	],
	'zh'	=> [
		'thank_you'					=> '谢谢!',
		'your_order_received'		=> '我们已收到您的订单！',
		'not_turn_phone'			=> '请不要关闭手机！',
		'order_received'			=> '订单已接收',
		'purchase_finalized'		=> '购买已完成',
		'delivered_paid'			=> '已交付并已付款',
		'text_purchase_finalized'	=> '我们希望通过电话与您联系，以完成您的购买。这非常重要，因为这样我们将能够为您提供所有必要的信息并回答您可能有的任何问题。',
		'form_order_information'	=> '订单信息',
		'form_order_number'			=> '订单编号：',
		'form_name'					=> '姓名：',
		'form_date'					=> '日期：',
		'form_phone'				=> '电话：',
		'products'					=> '产品：',
		'icon_result'				=> '365天内的结果保证或退款',
		'icon_effectiveness'		=> '产品的安全性和有效性经临床验证',
		'contest'					=> '比赛',
		'Want_to_get_an_iphone'		=> '想要获得 iPhone 15 Pro 吗？',
		'buy_packs_noemail'			=> '您只需购买完整的治疗，即产品的 3 个包装，您就有机会赢得多达 30 部 iPhone 15 Pro 中的一部！',
		'your_email'				=> '您的电子邮件',
		'participate'				=> '参加',
		'hurry_up'					=> '赶快',
		'the_draw_just'				=> '只剩下 2 周就要抽奖了！',
	],
  'sr'	=> [
		'thank_you'					=> 'HVALA!',
		'your_order_received'		=> 'Vaša narudžba je primljena!',
		'not_turn_phone'			=> 'Molimo vas da ne isključujete svoj mobilni telefon!',
		'order_received'			=> 'Narudžba primljena',
		'purchase_finalized'		=> 'Kupovina završena',
		'delivered_paid'			=> 'Isporučeno i plaćeno',
		'text_purchase_finalized'	=> 'Željeli bismo vas kontaktirati telefonom kako bismo završili vašu kupovinu. Ovo je vrlo važno jer ćemo vam na taj način moći pružiti sve potrebne informacije i odgovoriti na sva pitanja koja možda imate.',
		'form_order_information'	=> 'Podaci o narudžbi',
		'form_order_number'			=> 'Broj narudžbe:',
		'form_name'					=> 'Ime:',
		'form_date'					=> 'Datum:',
		'form_phone'				=> 'Telefon:',
		'products'					=> 'Proizvodi:',
		'icon_result'				=> 'Garancija rezultata ili povrat novca u roku od 365 dana',
		'icon_effectiveness'		=> 'Sigurnost i učinkovitost proizvoda su klinički dokazani',
		'contest'					=> 'NAGRADNA IGRA',
		'Want_to_get_an_iphone'		=> 'Želite li osvojiti iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Sve što trebate učiniti je kupiti puni tretman, tj. 3 paketa proizvoda i možda osvojiti jedan od do 30 iPhone 15 Pro!',
		'your_email'				=> 'Vaša email adresa',
		'participate'				=> 'Učestvovati',
		'hurry_up'					=> 'POŽURITE',
		'the_draw_just'				=> 'Izvlačenje za samo 2 sedmice!',
	],
  'sh'	=> [
		'thank_you'					=> 'HVALA!',
		'your_order_received'		=> 'Vaša narudžba je primljena!',
		'not_turn_phone'			=> 'Molimo vas da ne isključujete svoj mobilni telefon!',
		'order_received'			=> 'Narudžba primljena',
		'purchase_finalized'		=> 'Kupovina završena',
		'delivered_paid'			=> 'Isporučeno i plaćeno',
		'text_purchase_finalized'	=> 'Željeli bismo vas kontaktirati telefonom kako bismo završili vašu kupovinu. Ovo je vrlo važno jer ćemo vam na taj način moći pružiti sve potrebne informacije i odgovoriti na sva pitanja koja možda imate.',
		'form_order_information'	=> 'Podaci o narudžbi',
		'form_order_number'			=> 'Broj narudžbe:',
		'form_name'					=> 'Ime:',
		'form_date'					=> 'Datum:',
		'form_phone'				=> 'Telefon:',
		'products'					=> 'Proizvodi:',
		'icon_result'				=> 'Garancija rezultata ili povrat novca u roku od 365 dana',
		'icon_effectiveness'		=> 'Sigurnost i učinkovitost proizvoda su klinički dokazani',
		'contest'					=> 'NAGRADNA IGRA',
		'Want_to_get_an_iphone'		=> 'Želite li osvojiti iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Sve što trebate učiniti je kupiti puni tretman, tj. 3 paketa proizvoda i možda osvojiti jedan od do 30 iPhone 15 Pro!',
		'your_email'				=> 'Vaša email adresa',
		'participate'				=> 'Učestvovati',
		'hurry_up'					=> 'POŽURITE',
		'the_draw_just'				=> 'Izvlačenje za samo 2 sedmice!',
	],
	'hr'	=> [
		'thank_you'					=> 'HVALA!',
		'your_order_received'		=> 'Vaša narudžba je primljena!',
		'not_turn_phone'			=> 'Molimo vas da ne isključujete svoj mobilni telefon!',
		'order_received'			=> 'Narudžba primljena',
		'purchase_finalized'		=> 'Kupovina završena',
		'delivered_paid'			=> 'Isporučeno i plaćeno',
		'text_purchase_finalized'	=> 'Željeli bismo vas kontaktirati telefonom kako bismo završili vašu kupovinu. Ovo je vrlo važno jer ćemo vam na taj način moći pružiti sve potrebne informacije i odgovoriti na sva pitanja koja možda imate.',
		'form_order_information'	=> 'Podaci o narudžbi',
		'form_order_number'			=> 'Broj narudžbe:',
		'form_name'					=> 'Ime:',
		'form_date'					=> 'Datum:',
		'form_phone'				=> 'Telefon:',
		'products'					=> 'Proizvodi:',
		'icon_result'				=> 'Garancija rezultata ili povrat novca u roku od 365 dana',
		'icon_effectiveness'		=> 'Sigurnost i učinkovitost proizvoda su klinički dokazani',
		'contest'					=> 'NAGRADNA IGRA',
		'Want_to_get_an_iphone'		=> 'Želite li osvojiti iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Sve što trebate učiniti je kupiti puni tretman, tj. 3 paketa proizvoda i možda osvojiti jedan od do 30 iPhone 15 Pro!',
		'your_email'				=> 'Vaša email adresa',
		'participate'				=> 'Učestvovati',
		'hurry_up'					=> 'POŽURITE',
		'the_draw_just'				=> 'Izvlačenje za samo 2 sedmice!',
	],
	'sq'	=> [
		'thank_you'					=> 'FALËNDERIM!',
		'your_order_received'		=> 'Porosia juaj është pranuar!',
		'not_turn_phone'			=> 'Ju lutemi mos e fikni celularin tuaj!',
		'order_received'			=> 'Porosia është pranuar',
		'purchase_finalized'		=> 'Blerja është finalizuar',
		'delivered_paid'			=> 'E dorëzuar dhe e paguar',
		'text_purchase_finalized'	=> 'Dëshironim të kontaktojmë me ju nëpërmjet telefonit për të finalizuar blerjen tuaj. Kjo është shumë e rëndësishme, sepse kështu ne do të jemi në gjendje t\'ju japim të gjitha informacionet e nevojshme dhe t\'ju përgjigjemi në çdo pyetje që mund të keni.',
		'form_order_information'	=> 'Informacioni i porosisë',
		'form_order_number'			=> 'Numri i porosisë:',
		'form_name'					=> 'Emri:',
		'form_date'					=> 'Data:',
		'form_phone'				=> 'Telefoni:',
		'products'					=> 'Produktet:',
		'icon_result'				=> 'Gj garantohet rezultati ose rimbursimi brenda 365 ditëve',
		'icon_effectiveness'		=> 'Siguria dhe efikasiteti i produktit është provuar klinikisht',
		'contest'					=> 'KONKURSI',
		'Want_to_get_an_iphone'		=> 'Dëshironi të fitoni një iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Të gjitha që duhet të bëni është të blini një trajtim të plotë, pra 3 paketa të produktit, dhe mund të fitoni një nga 30 iPhone 15 Pro!',
		'your_email'				=> 'Adresa juaj e email-it',
		'participate'				=> 'Merrni pjesë',
		'hurry_up'					=> 'NGAÇMOHUNI',
		'the_draw_just'				=> 'Tjera vetëm në 2 javë!',
	],
	'ms'	=> [
		'thank_you'					=> 'TERIMA KASIH!',
		'your_order_received'		=> 'Pesanan anda telah diterima!',
		'not_turn_phone'			=> 'Tolong jangan matikan telefon bimbit anda!',
		'order_received'			=> 'Pesanan Diterima',
		'purchase_finalized'		=> 'Pembelian Dimuktamadkan',
		'delivered_paid'			=> 'Dihantar & dibayar',
		'text_purchase_finalized'	=> 'Kami ingin menghubungi anda melalui telefon untuk memuktamadkan pembelian anda. Ini sangat penting, kerana dengan cara ini kami akan dapat memberi anda semua maklumat yang diperlukan dan menjawab sebarang soalan yang anda ada.',
		'form_order_information'	=> 'Maklumat pesanan',
		'form_order_number'			=> 'Nombor pesanan:',
		'form_name'					=> 'Nama:',
		'form_date'					=> 'Tarikh:',
		'form_phone'				=> 'Telefon:',
		'products'					=> 'Produk:',
		'icon_result'				=> 'Jaminan keputusan atau bayaran balik dalam masa 365 hari',
		'icon_effectiveness'		=> 'Keselamatan dan keberkesanan produk terbukti secara klinikal',
		'contest'					=> 'PERTANDINGAN',
		'Want_to_get_an_iphone'		=> 'Ingin mendapatkan iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Apa yang anda perlu lakukan ialah membeli rawatan penuh, i.n. 3 pek produk dan anda boleh memenangi satu daripada sehingga 30 iPhone 15 Pro!',
		'your_email'				=> 'Emel anda',
		'participate'				=> 'Menyertai',
		'hurry_up'					=> 'CEPAT',
		'the_draw_just'				=> 'cabutan dalam masa 2 minggu sahaja!',
	],
	'it'	=> [
		'thank_you'					=> 'GRAZIE!',
		'your_order_received'		=> 'Il vostro ordine è stato ricevuto!',
		'not_turn_phone'			=> 'Non spegnete il cellulare!',
		'order_received'			=> 'Ordine ricevuto',
		'purchase_finalized'		=> 'Acquisto finalizzato',
		'delivered_paid'			=> 'Consegnato e pagato',
		'text_purchase_finalized'	=> 'Vorremmo contattarvi telefonicamente per finalizzare il vostro acquisto. È molto importante, perché in questo modo saremo in grado di fornirvi tutte le informazioni necessarie e di rispondere a tutte le vostre domande.',
		'form_order_information'	=> 'Informazioni sugli ordini',
		'form_order_number'			=> 'Numero di ordine:',
		'form_name'					=> 'Nome:',
		'form_date'					=> 'Data:',
		'form_phone'				=> 'Telefono:',
		'products'					=> 'Prodotti:',
		'icon_result'				=> 'Garanzia di risultato o rimborso entro 365 giorni',
		'icon_effectiveness'		=> 'La sicurezza e di efficacia del prodotto è clinicamente provata',
		'contest'					=> 'CONCORSO',
		'Want_to_get_an_iphone'		=> 'Volete acquistare un iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Basta acquistare un trattamento completo, cioè 3 confezioni di prodotto, per vincere uno dei 30 iPhone 15 Pro in palio!',
		'your_email'				=> 'Il tuo indirizzo e-mail',
		'participate'				=> 'Partecipare',
		'hurry_up'					=> 'AFFRETTATEVI',
		'the_draw_just'				=> 'il sorteggio in sole 2 settimane!',
	],
	'id'	=> [
		'thank_you'					=> 'TERIMA KASIH!',
		'your_order_received'		=> 'Pesanan Anda telah diterima!',
		'not_turn_phone'			=> 'Tolong jangan matikan ponsel Anda!',
		'order_received'			=> 'Pesanan Diterima',
		'purchase_finalized'		=> 'Pembelian Selesai',
		'delivered_paid'			=> 'Dikirim & dibayar',
		'text_purchase_finalized'	=> 'Kami ingin menghubungi Anda melalui telepon untuk menyelesaikan pembelian Anda. Hal ini sangat penting, karena dengan demikian kami dapat memberikan semua informasi yang diperlukan dan menjawab semua pertanyaan yang Anda miliki.',
		'form_order_information'	=> 'Informasi pemesanan',
		'form_order_number'			=> 'Nomor pesanan:',
		'form_name'					=> 'Nama:',
		'form_date'					=> 'Tanggal:',
		'form_phone'				=> 'Telepon:',
		'products'					=> 'Produk:',
		'icon_result'				=> 'Jaminan hasil atau pengembalian dana dalam 365 hari',
		'icon_effectiveness'		=> 'Keamanan dan keefektifan produk terbukti secara klinis',
		'contest'					=> 'KONTES',
		'Want_to_get_an_iphone'		=> 'Ingin mendapatkan iPhone 15 Pro?',
		'buy_packs_noemail'			=> 'Anda hanya perlu membeli perawatan lengkap, yaitu 3 paket produk dan Anda bisa memenangkan salah satu dari hingga 30 iPhone 15 Pro!',
		'your_email'				=> 'Email Anda',
		'participate'				=> 'Berpartisipasi',
		'hurry_up'					=> 'CEPAT',
		'the_draw_just'				=> 'pengundian hanya dalam waktu 2 minggu!',
	],
	'tr'	=> [
		'thank_you'					=> 'TEŞEKKÜRLER!',
		'your_order_received'		=> 'Siparişiniz alındı!',
		'not_turn_phone'			=> 'Lütfen cep telefonunuzu kapatmayın!',
		'order_received'			=> 'Alınan Sipariş',
		'purchase_finalized'		=> 'Satın Alma Kesinleşti',
		'delivered_paid'			=> 'Teslim edildi ve ödendi',
		'text_purchase_finalized'	=> 'Satın alma işleminizi tamamlamak için sizinle telefonla iletişime geçmek istiyoruz. Bu çok önemli, çünkü bu şekilde size gerekli tüm bilgileri verebilecek ve sorularınızı yanıtlayabileceğiz.',
		'form_order_information'	=> 'Sipariş bilgileri',
		'form_order_number'			=> 'Sipariş numarası:',
		'form_name'					=> 'İsim:',
		'form_date'					=> 'Tarih:',
		'form_phone'				=> 'Telefon:',
		'products'					=> 'Ürünler:',
		'icon_result'				=> 'Sonuç garantisi veya 365 gün içinde para iadesi',
		'icon_effectiveness'		=> 'Ürünün güvenliği ve etkinliği klinik olarak kanıtlanmıştır',
		'contest'					=> 'YARIŞMA',
		'Want_to_get_an_iphone'		=> 'iPhone 15 Pro almak ister misiniz?',
		'buy_packs_noemail'			=> 'Tek yapmanız gereken tam bir bakım, yani 3 paket ürün satın almak ve 30 adede kadar iPhone 15 Pro birini kazanabilirsiniz!',
		'your_email'				=> 'E-mail adresiniz',
		'participate'				=> 'Katılmak',
		'hurry_up'					=> 'ACELE EDİN',
		'the_draw_just'				=> 'sadece 2 hafta içinde çekiliş!',
	],
	'uz'	=> [
		'thank_you'					=> 'RAHMAT!',
		'your_order_received'		=> 'Buyurtmangiz qabul qilindi!',
		'not_turn_phone'			=> 'Iltimos, mobil telefoningizni o\'chirmang!',
		'order_received'			=> 'Buyurtma qabul qilindi',
		'purchase_finalized'		=> 'Sotib olish yakunlandi',
		'delivered_paid'			=> 'Yetkazib berilgan va to\'langan',
		'text_purchase_finalized'	=> 'Xaridingizni yakunlash uchun siz bilan telefon orqali bog\'lanmoqchimiz. Bu juda muhim, chunki shu tarzda biz sizga barcha kerakli ma\'lumotlarni taqdim eta olamiz va sizda bo\'lgan barcha savollarga javob beramiz.',
		'form_order_information'	=> 'Buyurtma haqida ma\'lumot',
		'form_order_number'			=> 'Buyurtma raqami:',
		'form_name'					=> 'Nomi:',
		'form_date'					=> 'Sana:',
		'form_phone'				=> 'Telefon:',
		'products'					=> 'Mahsulotlar:',
		'icon_result'				=> 'Natija kafolati yoki 365 kun ichida pulni qaytarish',
		'icon_effectiveness'		=> 'Mahsulotning xavfsizligi va samaradorligi klinik jihatdan tasdiqlangan',
		'contest'					=> 'TANLOV',
		'Want_to_get_an_iphone'		=> 'iPhone 15 Pro ni olishni xohlaysizmi?',
		'buy_packs_noemail'			=> 'Bajarishingiz kerak bo\'lgan yagona narsa - to\'liq davolanishni sotib olish, i.n. Mahsulotning 3 ta toʻplami va siz 30 tagacha iPhone 15 Prodan birini yutib olishingiz mumkin!',
		'your_email'				=> 'Sizning elektron manzilingiz',
		'participate'				=> 'Ishtirok eting',
		'hurry_up'					=> 'SHOSHILMOQ',
		'the_draw_just'				=> 'atigi 2 hafta ichida qur\'a!',
	],					
];

// Get all the possible languages
$langs = [];
$ll = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
foreach ( $ll as $l ) if ( $l = trim( $l ) ) {
	$l = strtolower(substr( $l, 0, 2 ));
	$langs[$l] = $l;
}

// Prepare language and URL
$langs = array_values( $langs );
foreach ( $langs as $li ) if ( $l = $lang[$li] ) break;
$url = isset($_GET['url']) ? filter_var( $_GET['url'], FILTER_SANITIZE_URL ) : false;

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=375">
<title><?= $l['thank_you']; ?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="icon" href="https://thank.cf2.tech/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400;1,500&display=swap" rel="stylesheet">
<style>
html, body{margin:0px auto;font-family: 'Epilogue', sans-serif;font-size:16px;color:#000;line-height:1.2;font-weight:400;background:#fff;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-text-size-adjust:none;}
form{border:0;margin:0}
img{max-width:100%;}
input,textarea,button,select,label,fieldset{outline:0;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-text-size-adjust:none;}
input::-ms-clear{display:none;}
input:invalid{box-shadow:none;}
.clear,.cr{clear:both;}
.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}
.close:focus,.close:hover{color:#000;text-decoration:none;opacity:.75}
.close:not(:disabled):not(.disabled){cursor:pointer}
button.close{padding:0;background-color:transparent;border:0;-webkit-appearance:none}
.modal-open{overflow:hidden}
.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;outline:0}
.modal-open .modal{overflow-x:hidden;overflow-y:auto}
.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}
.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out, -webkit-transform .3s ease-out;-webkit-transform:translate(0, -25%);transform:translate(0, -25%)}
.modal.show .modal-dialog{-webkit-transform:translate(0, 0);transform:translate(0, 0)}
.modal-dialog-centered{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;min-height:calc(100% - (.5rem * 2))}
.modal-content{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0, 0, 0, .2);border-radius:.3rem;outline:0}
.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}
.modal-backdrop.fade{opacity:0}
.modal-backdrop.show{opacity:.5}
.modal-header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:1rem;border-bottom:1px solid #e9ecef;border-top-left-radius:.3rem;border-top-right-radius:.3rem}
.modal-header .close{padding:1rem;margin:-1rem -1rem -1rem auto}
.modal-title{margin-bottom:0;line-height:1.5}
.modal-body{position:relative;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}
.modal-footer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;padding:1rem;border-top:1px solid #e9ecef}
.modal-footer>:not(:first-child){margin-left:.25rem}
.modal-footer>:not(:last-child){margin-right:.25rem}
.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}
@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}
.modal-dialog-centered{min-height:calc(100% - (1.75rem * 2))}
.modal-sm{max-width:300px}}
@media (min-width:992px){.modal-lg{max-width:800px}}
.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000;display:none;}
.modal-backdrop.show{background: var(--pop-up-bg, rgba(118, 160, 109, 0.60)); backdrop-filter: blur(13px);opacity: 1;}
.modal .modal-dialog{width:100%;max-width:565px;top:50%;height:auto;padding:0px;margin:-207px auto 0px auto;}
.modal .modal-content{border-radius:20px;border:0px;}
.modal .modal-header{display:block;padding:40px;border:0;text-align:center;}
.modal h3{font-size: 40px; font-style: normal; font-weight: 800; line-height: 140%;max-width:400px;margin:0px auto;}
.modal b{display:block;margin:20px auto;font-size: 24px; font-style: normal; font-weight: 700; line-height: normal;}
.modal p{font-size: 16px; font-style: normal; font-weight: 400; line-height: 140%;}
.modal #close{position:static;display:inline-block;margin:20px auto 0px;cursor:pointer;text-align:center;min-width: 162px;border-radius: 20px;background: var(--light-green, #E9F7E6);font-size: 16px; font-style: normal; font-weight: 700; line-height: normal;height: auto; padding: 21px 29px;}
.hide{display:none;}
.btn7{display:block;width:90%;max-width:280px;height:50px;line-height:50px;padding:0 15px;margin:10px auto 0px auto;background:#ffd324;color:#000;border-radius:10px;text-decoration:none; border:0;outline:0;cursor:pointer;font-size:19px;font-weight:700;}
.btn7:hover,a.btn7:hover, a.btn7:active{background:#ecc321;color:#000;}
.title{font-size:64px;font-style:normal;font-weight:900;line-height:normal;text-transform:uppercase;margin-top:20px;margin-bottom:0px;}
section{overflow:hidden;min-height:100vh;}
.container{position:relative;width:calc(100% - 30px) !important;max-width:1200px !important;height:100%;margin:0px auto !important;padding:20px 0px 0px;text-align:center;display:flex;flex-wrap: wrap; align-content: flex-start;justify-content:space-between;}
.sc1{width:100%;max-width:526px;padding-top:0px;zoom:0.97;}
.sc1:before{content:'';position:absolute;top:50%;left:50%;background:url(https://thank.cf2.tech/line.png);width:2px;height:587px;margin-top:-293px;background-size:100%;background-repeat:no-repeat;}
.sc2{width:100%;max-width:526px;zoom:0.97;}
.t1{margin:20px auto 20px;font-size:24px;font-style:normal;font-weight:700;line-height:normal;}
.t2{margin:0px auto 20px;font-size:18px;font-style:normal;font-weight:700;line-height:140%;}
.t3{display:flex;align-items:center;justify-content:center;font-size:14px;font-style:normal;font-weight:700;line-height:normal;}
.t3 div{display:flex;align-items:center;justify-content:center;flex-flow:column;max-width:120px;padding:10px;border-radius: 20px; background: var(--light-green, #E9F7E6);}
.t3 img{margin:0px 24px;}
.t3 div img{display:block;margin:0px auto 8px;}
.t4{max-width:415px;margin:20px auto 20px;font-size: 16px; font-style: normal; font-weight: 400; line-height: 140%;}
.t5{border-radius: 20px; background: var(--light-green, #E9F7E6);padding: 24px 36px;}
.t51{margin:0px auto 20px;text-align:center;font-size: 18px; font-style: normal; font-weight: 700; line-height: 140%;}
.t52 div{padding-bottom:14px;margin-bottom:14px;display:flex;align-items: flex-start; align-self: stretch;justify-content:space-between;border-bottom:1px solid rgba(0,0,0, 0.5);font-family: Epilogue; font-size: 14px; font-style: normal; font-weight: 400; line-height:1;}
.t52 div:last-child{border-bottom:0px;padding-bottom:0px;margin-bottom:0px;}
.t52 div b{font-size: 14px; font-style: normal; font-weight: 700; line-height: normal;}
.t6{margin:20px auto 10px;font-size: 18px; font-style: normal; font-weight: 700; line-height: 140%;text-align:left;}
.t7{display:flex;align-items: flex-start;align-items:center; align-self: stretch;justify-content:space-between;font-size: 16px; font-style: normal; font-weight: 700; line-height: normal;text-align:left;padding-bottom:8px;border-bottom:1px solid rgba(0,0,0, 0.5);}
.t7 span{display:flex;align-items:center;justify-content:space-between;}
.t7 s{margin-right:6px;font-size: 16px; font-style: normal; font-weight: 700; line-height: normal;color:#7e7e7e;}
.t7 b{margin-left:6px;font-size: 24px; font-style: normal; font-weight: 700; line-height: normal;}
.t8{margin:20px auto 0px;display:flex;align-items:center;justify-content:space-between;}
.t8 div{display:flex;align-items:center;justify-content:space-between;width:46%;text-align:left;font-size: 13px; font-style: normal; font-weight: 400; line-height: 130%;}
.t8 div:nth-child(2){width:53%;}
.t8 div img{margin-right:10px;}
.t9{margin:20px auto 0px;font-size: 24px; font-style: normal; font-weight: 700; line-height: normal;}
.t10{max-width:415px;margin:20px auto 20px;font-size: 16px; font-style: normal; font-weight: 400; line-height: 140%;}
.t11{margin:30px auto 8px;font-size: 64px; font-style: normal; font-weight: 600; line-height: normal; text-transform: uppercase;}
.t12{font-size: 24px; font-style: normal; font-weight: 700; line-height: normal;}
.t13{display:none;}
.sc2 form{margin:0px auto;display:flex;align-items:center;justify-content:space-between;}
.sc2 form div{position:relative;}
.sc2 form div img{position:absolute;top:50%;left:20px;margin-top:-11px;cursor:text;z-index:1;}
.sc2 form input{width:70%;width: 269px; height: 60px; padding: 0px 29px 0px 53px;border-radius: 20px; border: 2px solid var(--light-green, #E9F7E6); background-color: var(--white, #FFF);outline:none;font-size: 14px; font-style: normal; font-weight: 400; line-height: 120%;}
.sc2 form input[type="submit"]{width:auto;min-width:162px;border-radius: 20px; background: var(--light-green, #E9F7E6);font-size: 16px; font-style: normal; font-weight: 700; line-height: normal;margin-left:10px;cursor:pointer;padding:0px 29px;}
@media screen and (min-device-height:990px) and (min-device-width:1180px){body{overflow-y:auto;}}
@media screen and (min-device-width:1180px){
body{min-width:1200px !important;overflow-x:auto !important;}
.container:before{content:'';position:absolute;top:500px;right:-50px;background:url(https://thank.cf2.tech/f.png);width:630px;height:455px;background-size:contain;background-repeat:no-repeat;z-index:0;}
}
@media screen and (max-device-width:1240px){
.sc1:before{display:none;}
}


@media screen and (max-device-width:1180px){
body{min-width:375px !important;}
section{width:100%;margin:0px auto !important;max-width:526px;}
section .container{padding:0px 0px;display:block;width:calc(100% - 30px) !important;}
.title{font-size:40px;margin-top:24px;}
.sc1{float:none;width:100%;padding-top:25px;border-bottom:2px solid #E9F7E6;zoom:1;}
.sc1:before{display:none;}
.sc2{float:none;width:100%;padding-top:45px;zoom:1;}
.t1{font-size:18px;}
.t2{font-size:16px;}
.t3{font-size:12px;font-weight:500;margin:0px auto;}
.t3 div{max-width:74px;padding:12px 8px;border-radius: 20px; background: var(--light-green, #E9F7E6);}
.t3 img{margin:0px auto;height:16px;}
.t3 div img{display:block;margin:0px auto 8px;height:32px;}
.t4{font-size:14px;max-width:325px;}
.t5{padding:16px 24px;}
.t51{font-size:16px;}
.t52 div{font-size:14px;line-height:110%;}
.t6{font-size:16px;text-align:center;}
.t7{display:block;font-size:14px;text-align:center;border:0px !important;}
.t7 span{display:flex;align-items:center;justify-content:center;margin-top:16px;}
.t7 b{font-size:18px;}
.t8{display:block;}
.t8 div{width:100%;margin:0px auto 16px;;max-width:300px;font-size:14px;}
.t8 div:nth-child(2){width:300px;}
.t9{font-size:18px;}
.t10{font-size:14px;max-width:325px;}
.t11{font-size:40px;}
.t12{font-size:18px;}
.t13{display:block;position:relative;margin-top:24px;line-height:0;}
.t13:before{display:none;}
.sc2 form{margin:0px auto;display:block;}
.sc2 form .input1{width:300px;margin:0px auto;}
.sc2 form input{width:224px;height:48px;padding:0px 29px 0px 43px;}
.sc2 form div img{left:18px;margin-top:-8px;height:16px;cursor:text;z-index:1;}
.sc2 form input[type="submit"]{min-width:209px;font-size:14px;margin:20px auto 10px;}
.modal .modal-dialog{width:calc(100% - 20px);}
.modal .modal-content{border-radius:20px;border:0px;}
.modal .modal-header{padding:40px 20px;}
.modal h3{font-size:32px;}
.modal b{font-size:16px;}
.modal p{font-size:14px;}
.modal #close{font-size:14px; padding:16px 29px;}
}
</style>
<?php if ( isset($_GET["url"]) && $_GET["url"] ) : ?><meta http-equiv="refresh" content="3; url=<?=$_GET["url"];?>" /><?php endif; ?>
</head>
<body>

<?php if ( $url ) : ?>

  <!-- Блок спиннера и кнопки, показывается если GET-параметр url задан -->
  <style type="text/css">
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    .spinner-button-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh; 
    }
    .lds-roller-scope {
      position: relative;
      width: 80px;
      height: 80px;
      margin-bottom: 20px; 
    }
    .lds-roller-scope div {
      animation: lds-roller-scope 1.2s cubic-bezier(.5,0,.5,1) infinite;
      transform-origin: 40px 40px;
      position: absolute;
    }
    .lds-roller-scope div:after {
      content: " ";
      display: block;
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #292;
      margin: -4px 0 0 -4px;
      position: absolute;
    }
    .lds-roller-scope div:nth-child(1) { animation-delay: -0.036s; }
    .lds-roller-scope div:nth-child(1):after { top: 63px; left: 63px; }
    .lds-roller-scope div:nth-child(2) { animation-delay: -0.072s; }
    .lds-roller-scope div:nth-child(2):after { top: 68px; left: 56px; }
    .lds-roller-scope div:nth-child(3) { animation-delay: -0.108s; }
    .lds-roller-scope div:nth-child(3):after { top: 71px; left: 48px; }
    .lds-roller-scope div:nth-child(4) { animation-delay: -0.144s; }
    .lds-roller-scope div:nth-child(4):after { top: 72px; left: 40px; }
    .lds-roller-scope div:nth-child(5) { animation-delay: -0.18s; }
    .lds-roller-scope div:nth-child(5):after { top: 71px; left: 32px; }
    .lds-roller-scope div:nth-child(6) { animation-delay: -0.216s; }
    .lds-roller-scope div:nth-child(6):after { top: 68px; left: 24px; }
    .lds-roller-scope div:nth-child(7) { animation-delay: -0.252s; }
    .lds-roller-scope div:nth-child(7):after { top: 63px; left: 17px; }
    .lds-roller-scope div:nth-child(8) { animation-delay: -0.288s; }
    .lds-roller-scope div:nth-child(8):after { top: 56px; left: 12px; }
    @keyframes lds-roller-scope {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    /* Стили для зеленой кнопки со стрелкой */
    .green-button {
      display: inline-block;
      background: #28a745;
      padding: 12px 20px;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      border: none;
      font-size: 24px;
      line-height: 1;
      cursor: pointer;
      transition: background 0.3s;
    }
    .green-button:hover {
      background: #218838;
    }
  </style>
  <div class="spinner-button-container">
    <div class="lds-roller-scope">
      <div></div><div></div><div></div><div></div>
      <div></div><div></div><div></div><div></div>
    </div>
    <!-- Зеленая кнопка со стрелкой (код HTML сущности &#8594; = →) -->
    <a href="<?= $url; ?>" class="green-button" title="go">&#8594;</a>
  </div>

<?php else : ?>

<!-- ============================= Site blocks  ============================= -->
<section>
<div class="container">
<div class="sc1">
<img src="https://thank.cf2.tech/f1.png" />
<h1 class="title"><?= $l['thank_you']; ?></h1>
<div class="t1"><?= $l['your_order_received']; ?></div>
<div class="t2"><?= $l['not_turn_phone']; ?></div>

<div class="t3">
<div class="t31"><img src="https://thank.cf2.tech/f2.svg" /><?= $l['order_received']; ?></div>
<img src="https://thank.cf2.tech/arrow.svg" />
<div class="t32"><img src="https://thank.cf2.tech/f3.svg" /><?= $l['purchase_finalized']; ?></div>
<img src="https://thank.cf2.tech/arrow.svg" />
<div class="t33"><img src="https://thank.cf2.tech/f4.svg" /><?= $l['delivered_paid']; ?></div>
</div>
<div class="t4"><?= $l['text_purchase_finalized']; ?></div>
<div class="t5">
<div class="t51"><?= $l['form_order_information']; ?></div>
<div class="t52">
<div><?= $l['form_order_number']; ?> <b><span id="num"></span></b></div>
<div><?= $l['form_date']; ?> <b><span id="date"></span></b></div>
</div>
</div>
<div class="t6"><?= $l['products']; ?></div>
<div class="t7">1 x IT - NEPTUNE - €1.95 <span><s>19.50 eur</s> | <b>1.95 eur</b></span></div>
<div class="t8">
<div><img src="https://thank.cf2.tech/f5.png" /><?= $l['icon_result']; ?></div>
<div><img src="https://thank.cf2.tech/f6.png" /><?= $l['icon_effectiveness']; ?></div>
</div>
</div>
<div class="sc2">
<img src="https://thank.cf2.tech/f7.png" />
<h2 class="title"><?= $l['contest']; ?></h2>
<div class="t9"><?= $l['Want_to_get_an_iphone']; ?></div>
<div class="t10"><?= $l['buy_packs_noemail']; ?></div> 
<div class="t11"><?= $l['hurry_up']; ?></div>
<div class="t12"><?= $l['the_draw_just']; ?></div>
</div>
</div>
<div class="t13"><img src="https://thank.cf2.tech/f.png" /></div>
</section>
<!-- ============================= /// ============================= -->

<!-- ============================= Scripts ============================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Generating a random number for an order ID -->
<script>
  function generateRandomNumber(min, max) {
    const random = Math.floor(Math.random() * (max - min + 1)) + min;
    document.getElementById("num").innerHTML = random;
  }

  function generateTodayDate() {
    const date = new Date();

    const formattedDate = date.toLocaleDateString("ru", {
      day: "2-digit",
      month: "2-digit",
      year: "numeric",
    });

    document.getElementById("date").innerHTML = formattedDate;
  }

  window.onload = () => {
    generateRandomNumber(100000, 1000000);
    generateTodayDate();
  };
</script>

<!-- ============================= /// ============================= -->

<?php endif; ?>


</body>
</html>