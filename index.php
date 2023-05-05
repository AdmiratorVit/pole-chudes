<?php
$ref = '662eeeb9c3101791';
$all_get_params = $_SERVER['QUERY_STRING'];
$servname = isset($_SERVER['HTTP_HOST']);
$termtext = isset($_GET['utm_term']);
$promo = isset($_GET['promo']);
if (strpos($termtext, 'auto')) {
    $termtext = '';
}
$mode = file_get_contents('mode.txt');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Курсовые работы на заказ. Выполнение курсовых на заказ быстро, качественно, недорого</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="keywords" content="курсовые работы на заказ, заказать курсовую работу">
    <meta name="description"
          content="Помощь в выполнении курсовых работ. Опытные авторы с профессиональной подготовкой окажут консультацию в написании курсовых работ на заказ недорого, быстро, качественно">
    <meta property="og:description"
          content="Помощь в выполнении курсовых работ. Опытные авторы с профессиональной подготовкой окажут консультацию в написании курсовых работ на заказ недорого, быстро, качественно">
    <meta property="og:image" content="/assets/images/logo_vk.jpg">
    <meta property="og:image:secure_url" content="/assets/images/logo_vk.jpg">
    <meta property="og:title" content="Заказать курсовую работу недорого: купить курсач, курсовик">

    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="./css/wheel.css">
    <link rel="stylesheet" href="css/ablanding.bundle.css@7142.css">
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P3JWCCV');</script>
    <!-- End Google Tag Manager -->


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Автор24",
            "url": "https://author24.ru",
            "logo": {
                "@type": "ImageObject",
                "url": "https://author24.ru/assets/img/logo_invert.png",
                "width": 115,
                "height": 41
            },
            "email": "support@author24.ru",
            "telephone": "8-800-775-03-30"
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Product",
            "name": "Курсовая работа",
            "url": "https://author24.ru/kursovaya-rabota/",
            "description": "Помощь в выполнении курсовых работ. Опытные авторы с профессиональной подготовкой окажут консультацию в написании курсовых работ на заказ недорого, быстро, качественно",
            "brand": "Автор24",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "RUB",
                "price": "600",
                "availability": "http://schema.org/InStock",
                "seller": {
                    "@type": "Organization",
                    "name": "Автор24"
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "bestRating": "5",
                "worstRating": "1",
                "ratingCount": "51088"
            }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Как работает гарантия?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Гарантийный срок на нашем сервисе 20 дней. В период работы над заданием и гарантии деньги заморожены на ресурсе.</p><p>В течение гарантийного срока ты можешь дать свои замечания для дальнейших правок или запросить перерасчет, если работа выполнена некорректно и ты хочешь вернуть деньги назад.</p><p>После истечения гарантийного срока заказ считается выполненным и оплата автоматически переводится исполнителю.</p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Сколько стоит выполнение работы?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>На сервисе не существует установленных цен, они зависят от сложности работы, срока сдачи и опыта эксперта. Ты всегда можешь предложить свою цену и обсудить варианты с исполнителем.</p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Как оплатить в рассрочку?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Предоплата доступна при ставке от 500 до 7000 рублей.</p><p>Чтобы использовать предоплату, зайди на страницу заказа и рядом со ставкой эксперта нажми кнопку «нанять», выбери пункт «по частям», выбери способ оплаты и нажми кнопку «перейти к оплате».</p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Какая комиссия для заказчика?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Комиссия заказчика фиксированная и составляет 35% от ставки автора.</p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Как выбрать исполнителя для работы?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Чтобы выбрать эксперта, зайди на страницу заказа и рядом с интересующей ставкой нажимай кнопку «нанять». Далее выбери способ и тип оплаты и нажми кнопку «перейти к оплате».</p><p>После этого останется ввести данные карты, с которой планируется оплата и ввести код из смс на странице банка.</p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Как заказать работу у определенного автора?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Если хочешь заказать работу у знакомого эксперта, нужно зайти в завершенный заказ, и нажать на аватар эксперта. Ты попадешь на страницу профиля, где под аватаром можно будет нажать кнопку ‘заказать у автора’.</p><p>Размещай задание и жди реакции эксперта – он получит уведомление оставит свое предложение, если будет заинтересован в работе.</p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Как изменить срок сдачи?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<p>Чтобы изменить срок сдачи работы, тебе нужно зайти в заказ с полной версии сайта. После этого нажми на кнопку «детали заказа» и выбери «срок сдачи». Откроется календарь, и ты сможешь выбрать подходящую дату.</p><p>Учти, что если заказ уже в работе, то изменить срок можно только на более поздний.</p>"
                    }
                }
            ]
        }
    </script>


    <input type="hidden" id="utmSource" value="<?php echo isset($_GET['utm_source']); ?>">
    <input type="hidden" id="utmmedium" value="<?php echo isset($_GET['utm_medium']); ?>">
    <input type="hidden" id="utmcampaign" value="<?php echo isset($_GET['utm_campaign']); ?>">
    <input type="hidden" id="utmcontent" value="<?php echo isset($_GET['utm_content']); ?>">
    <input type="hidden" id="utmterm" value="<?php echo isset($_GET['utm_term']); ?>">
    <input type="hidden" id="subid" value="<?php echo isset($_GET['subid']); ?>">
    <input type="hidden" id="mode" value="<?php echo $mode ?>">

    <script type="text/javascript">
        !function () {
            let t;
            let utms = utmSource.value;
            let utmm = utmmedium.value;
            let utmc = utmcampaign.value;
            let utmco = utmcontent.value;
            let utmt = utmterm.value;
            let usid = subid.value;
            //var usid10 = sid10.value;
            try {
                for (t = 0; 10 > t; ++t) history.pushState({}, "", "");
                onpopstate = function (t) {
                    t.state && location.replace("https://<?php echo $servname;?>/popov/?utm_source=" + utms + "&utm_medium=" + utmm + "&utm_campaign=" + utmc + "&utm_content=" + utmco + "&utm_term=" + utmt + "&subid=" + usid + "")
                }
            } catch (o) {
            }
        }();
    </script>
</head>

<body class="template-base">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3JWCCV"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="layout-1">
    <div class="layout-1-header">
        <div class="layout-1-header__logo">
            <a href="https://author24.ru/?<?php if (empty($_GET['ref'])) {
                echo 'ref=' . $ref . '&';
            }
            echo $all_get_params; ?>">
                <img
                    class="layout-1-header__logo-img"
                    src="img/ablanding/logo--main.svg"
                    alt="author24 logo"
                >
            </a>
            <div class="layout-1-header__logo-text">— помогаем учиться</div>
        </div>
        <div class="layout-1-header__nav">

            <a
                class="layout-1-header__nav-btn layout-1-header__nav-btn--no-border"
                target="_blank"
                href="https://a24.biz/?<?php if (empty($_GET['ref'])) {
                    echo 'ref=' . $ref . '&';
                }
                echo $all_get_params; ?>"

            >
                Регистрация
            </a>


            <a
                class="layout-1-header__nav-btn"
                target="_blank"
                href="https://a24.biz/?<?php if (empty($_GET['ref'])) {
                    echo 'ref=' . $ref . '&';
                }
                echo $all_get_params; ?>"
            >
                Личный кабинет
            </a>
        </div>
        <a class="layout-1-header__user" href="https://a24.biz/?<?php if (empty($_GET['ref'])) {
            echo 'ref=' . $ref . '&';
        }
        echo $all_get_params; ?>" aria-label="Личный кабинет"></a>
    </div>
    <div class="layout-1__main">
        <div class="layout-1__pictures">
            <picture class="layout-1__img-box">
                <source media="(min-width: 769px)" srcset="./img/img-hero.webp" type="image/webp">
                <source media="(min-width: 769px)" srcset="./images/img-hero.png" type="image/png">
                <source media="(min-width: 320px)"
                        srcset="./images/img-hero-mobile@1x.webp 1x, ./images/img-hero-mobile@2x.webp 2x"
                        type="image/webp">
                <source media="(min-width: 320px)"
                        srcset="./images/img-hero-mobile@1x.png 1x, ./images/img-hero-mobile@2x.png 2x"
                        type="image/webp">
                <img class="layout-1__img" src="img/ablanding/img-hero-mobile@1x.png" alt="Парень в шляпе">
            </picture>

            <div class="layout-1__sale-img">
                <img src="img/ablanding/layout-1-sale.png" alt="Скидка 100 рублей на первый заказ">
            </div>
        </div>
        <div class="layout-1__info">
            <h1 class="layout-1__title title-1">Заказать курсовую,&nbsp;&nbsp;дипломную или другую работу</h1>
            <div class="layout-1__subtitle">
                У&nbsp;нас можно
                заказать любую студенческую работу или отчет напрямую у&nbsp;любого из&nbsp;72&nbsp;000&nbsp;авторов,
                все они&nbsp;&mdash; преподаватели и&nbsp;эксперты
                своего предмета
            </div>
            <div class="layout-1__text">
                Всё легко: с&nbsp;вас тема работы, с&nbsp;нас подбор лучших исполнителей,
                гарантия успешной сделки и&nbsp;анонимность
            </div>
            <div class="layout-1-parametr">
                <div class="layout-1-parametr__item">
                    <img
                        class="layout-1-parametr__i"
                        src="img/ablanding/i-ruble.svg"
                        alt="ruble"
                    >
                    <div class="layout-1-parametr__note">
                        минимальные
                        <br>
                        цены
                    </div>
                </div>
                <div class="layout-1-parametr__item">
                    <img
                        class="layout-1-parametr__i"
                        src="img/ablanding/i-shield--big.svg"
                        alt="shield"
                    >
                    <div class="layout-1-parametr__note">
                        Заказы защищены
                        <br>
                        гарантией
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form
        action="https://a24.biz/order/unregOrderShortForm/?<?php if (empty($_GET['ref'])) {
            echo 'ref=' . $ref . '&';
        }
        echo $all_get_params; ?>"
        method="post"
        id="main-form"
        onsubmit=""
        class="layout-1-form"
        data-js="orderForm"
        novalidate
    >
        <input type="hidden" name="pageId" value="65">
        <input type="hidden" name="type_id" value="2">
        <input type="hidden" name="category_id" value="0">
        <input type="hidden" name="discountForUser" value="true">
        <input type="hidden" name="fromLanding" value="true">

        <div class="layout-1-form__input-wrapper layout-1-form__input-wrapper--theme">
            <label
                for="main-form-theme-input"
                class="layout-1-form__input-title layout-1-form__input-title--theme"
            >
                Тема работы
            </label>
            <input
                class="layout-1-form__input-input layout-1-form__input-input--theme"
                name="title"
                id="main-form-theme-input"
                placeholder="Введи тему работы сюда"
                value="<?php echo $termtext; ?>"
                required
            >
            <span class="error-message error-message--theme">
                Необходимо заполнить
            </span>
        </div>

        <div class="layout-1-form__input-wrapper layout-1-form__input-wrapper--email">
            <label for="main-form-email-input"
                   class="layout-1-form__input-title layout-1-form__input-title--email"
            >
                Твой email
            </label>

            <input
                type="email"
                class="layout-1-form__input-input"
                name="email"
                id="input-email"
                placeholder="example@email.com"
            >

            <input type="text" name="promocode" placeholder="Введи промокод" value="<?php echo $promo; ?>" hidden>
            <span class="error-message">
                Введите корректный email
            </span>
        </div>

        <button
            type="submit"
            class="layout-1-form__btn btn-big"
            id="submit-button"
            data-js="submitBtn"
        >
            Узнать стоимость
        </button>

        <div class="layout-1-form__policy">
            <input
                type="checkbox"
                class="layout-1-form__checkbox visually-hidden"
                id="main-form-checkbox"
                required
            >
            <label
                for="main-form-checkbox"
                class="layout-1-form__checkbox--custom custom-checkbox"
                data-js="customCheckbox"
            >
            </label>

            <span
                class="layout-1-form__text"
                data-js="policyText"
            >
                        Согласен(а) с условиями
                        <a
                            href="https://author24.ru/info/confidentiality/?<?php if (empty($_GET['ref'])) {
                                echo 'ref=' . $ref . '&';
                            }
                            echo $all_get_params; ?>"
                            class="layout-1-form__link"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            политики конфиденциальности
                        </a>
                            и
                        <a
                            href="https://author24.ru/info/license/?<?php if (empty($_GET['ref'])) {
                                echo 'ref=' . $ref . '&';
                            }
                            echo $all_get_params; ?>"
                            class="layout-1-form__link"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            пользовательского соглашения
                        </a>
                        .
                    </span>
        </div>

        <span class="layout-1-form__hint">
            Это быстро и бесплатно
        </span>
        <div class="wpWrapper">
            <div id="wheelPreview"></div>
            <div id="arrowP"></div>
            <div id="backArrowP"></div>
            <div id="wheelPreviewShaddow"></div>
        </div>
        <div class="modalWrapper">
            <div id="modalLuck" class="hidden">

                <div class="wpWrapper">
                    <div id="wheel"></div>
                    <div id="arrowPBig"></div>
                    <div id="backArrowPBig"></div>
                    <div id="wheelShaddowBig"></div>
                </div>
                <div id="modalTryRotate">
                    <div class="closeBtn"><img src="/img/close.svg" alt=""></div>
                    <div class="modalTitle">Испытай удачу, студент!</div>
                    <div class="modalText">Вращай колесо фортуны и получи до 1 000 рублей на свои заказы!</div>
                    <button class="modalButton" type="button">Крутить барабан</button>
                </div>
                <div id="modalWin" class="hidden">
                    <div class="closeBtn"><img src="/img/close.svg" alt=""></div>
                    <div class="modalTitle">Куда отправить приз?</div>
                    <input
                        type="email"
                        class="layout-1-form__input-input"
                        name="email"
                        id="input-email-forPrize"
                        placeholder="example@email.com"
                    >
                    <button id="sendPrize" class="modalButton" type="button">Отправить приз</button>
                </div>
            </div>
        </div>
    </form>
    <div class="layout-1-parametr layout-1-parametr--mobile">
        <div class="layout-1-parametr__item">
            <img
                class="layout-1-parametr__i"
                src="img/ablanding/i-ruble.svg"
                alt="ruble"
            >
            <div class="layout-1-parametr__note">
                минимальные
                <br>
                цены
            </div>
        </div>
        <div class="layout-1-parametr__item">
            <img
                class="layout-1-parametr__i"
                src="img/ablanding/i-shield--big.svg"
                alt="shield"
            >
            <div class="layout-1-parametr__note">
                Заказы защищены
                <br>
                гарантией
            </div>
        </div>
    </div>
    <div class="layout-1-video">
        <div class="layout-1-video__decor-button-volume-increase"></div>
        <div class="layout-1-video__decor-button-volume-decrease"></div>
        <div class="layout-1-video__decor-button-power"></div>
        <div class="layout-1-video__screen">
            <div class="layout-1-video__screen-camera"></div>
            <iframe
                class="layout-1-video__iframe"
                data-src="https://www.youtube.com/embed/hISQjwfd42s"
                data-lazy
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen=""
            ></iframe>
        </div>
    </div>

    <p class="layout-1-video__info-text">
        Посмотри видео, почему нам стоит доверять
    </p>
</div>

<div class="header-alt" id="header-alt">
    <div class="header-alt__logo">
        <img
            class="header-alt__logo-img"
            src="img/ablanding/logo--main-dark.svg"
            width="171"
            height="42"
            alt="Автор24"
        >
        <div class="header-alt__logo-text">
            — помогаем учиться
        </div>
    </div>

    <form
        action="https://a24.biz/order/unregOrderShortForm/?<?php if (empty($_GET['ref'])) {
            echo 'ref=' . $ref . '&';
        }
        echo $all_get_params; ?>"
        method="post"
        id="header-form"
        onsubmit="ym(88597593,'reachGoal','valid_email')"
        class="header-alt__form"
        data-js="orderForm"
        novalidate
    >
        <input type="hidden" name="pageId" value="65">
        <input type="hidden" name="type_id" value="2">
        <input type="hidden" name="category_id" value="0">
        <input type="hidden" name="discountForUser" value="true">
        <input type="hidden" name="fromLanding" value="true">


        <input type="text" name="promocode" placeholder="Введи промокод" value="<?php echo $promo; ?>" hidden>

        <input
            type="text"
            class="header-alt__form-input"
            name="title"
            id="sticky-form-theme-input"
            aria-label="Тема твоей работы"
            placeholder="Тема твоей работы"
            data-js="stickyHeaderFormInput"
        >
        <input
            type="email"
            class="header-alt__form-input"
            name="email"
            id="sticky-form-email-input"
            aria-label="Твой email"
            placeholder="Твой email"
            data-js="stickyHeaderFormInput"
        >

        <div class="header-alt__form-policy">
            <input
                class="header-alt__form-checkbox visually-hidden"
                type="checkbox"
                id="sticky-header-checkbox"
                required
            >
            <label
                for="sticky-header-checkbox"
                class="header-alt__form-checkbox--custom custom-checkbox"
                data-js="customCheckbox"
            >
            </label>
            <span
                class="header-alt__form-text"
                data-js="policyText"
            >
                    Согласен(а) с условиями
                    <a
                        href="https://author24.ru/info/confidentiality/?<?php if (empty($_GET['ref'])) {
                            echo 'ref=' . $ref . '&';
                        }
                        echo $all_get_params; ?>"
                        class="header-alt__form-link"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        политики конфиденциальности
                    </a>
                        и
                    <a
                        href="https://author24.ru/info/license/?<?php if (empty($_GET['ref'])) {
                            echo 'ref=' . $ref . '&';
                        }
                        echo $all_get_params; ?>"
                        class="header-alt__form-link"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        пользовательского соглашения
                    </a>
                    .
                </span>
        </div>

        <button
            class="header-alt__form-button btn-big btn-big--min"
            data-js="submitBtn"
        >
            Узнать стоимость
        </button>
        <span class="header-alt__form-hint">
            Это быстро и бесплатно
        </span>
    </form>
    <img
        class="header-alt__sale"
        src="img/ablanding/layout-1-sale.png"
        alt="sale"
    >
</div>

<section class="howItWorks">
    <h2 class="howItWorks__heading" style="margin-top: 30px;">Как это работает</h2>
    <div class="howItWorks__stepsWrapper">
        <div class="howItWorks__steps howItWorks__steps_desktop">
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/login.svg"
                    alt="Регистрируешься"
                >
                <div class="howItWorks__stepText">Регистрируешься</div>
            </div>
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/draw.svg"
                    alt="Описываешь, в чем нужна помощь"
                >
                <div class="howItWorks__stepText">Описываешь, в чем<br> нужна помощь</div>
            </div>
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/people.svg"
                    alt="Выбираешь эксперта"
                >
                <div class="howItWorks__stepText">Выбираешь<br>эксперта</div>
            </div>
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/signs.svg"
                    alt="Получаешь готовую работу и 20-дневную гарантию"
                >
                <div class="howItWorks__stepText">Получаешь готовую работу и 20-дневную гарантию</div>
            </div>
        </div>
        <div class="howItWorks__steps howItWorks__steps_mobile" data-js="howItWorksSlider">
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/login.svg"
                    alt="Регистрируешься"
                >
                <div class="howItWorks__stepText">Регистрируешься</div>
            </div>
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/draw.svg"
                    alt="Описываешь, в чем нужна помощь"
                >
                <div class="howItWorks__stepText">Описываешь, в чем<br> нужна помощь</div>
            </div>
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/people.svg"
                    alt="Выбираешь эксперта"
                >
                <div class="howItWorks__stepText">Выбираешь<br>эксперта</div>
            </div>
            <div class="howItWorks__step">
                <img
                    class="howItWorks__stepImg"
                    src="img/ablanding/signs.svg"
                    alt="Получаешь готовую работу и 20-дневную гарантию"
                >
                <div class="howItWorks__stepText">Получаешь готовую работу и 20-дневную гарантию</div>
            </div>
        </div>
        <div class="howItWorks__stepsDots" data-js="howItWorksSliderDots"></div>
    </div>
    <div class="howItWorks__wrapper">
        <div class="howItWorks__info">
            <div class="howItWorks__warranty warranty">
                <h3 class="warranty__heading">Гарантия, зачем она нужна?</h3>
                <ul class="warranty__list">
                    <li class="warranty__listItem">
                        <svg width="71" height="72" viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="files-and-folders">
                                <path id="Path"
                                      d="M57.6875 72H13.3125C5.95956 72 0 65.9565 0 58.5V13.5C0 6.0435 5.95956 0 13.3125 0H57.6875C65.0404 0 71 6.0435 71 13.5V58.5C71 65.9565 65.0404 72 57.6875 72Z"
                                      fill="#F5E6FE"/>
                                <path id="Path_2"
                                      d="M35.8333 20.9992H34.123C33.6073 19.2757 31.96 18 30 18C28.04 18 26.3903 19.2757 25.877 20.9992H24.1667C23.5297 20.9992 23 21.51 23 22.1242V24.3742C23 25.8142 24.2297 27 25.723 27H34.277C35.7703 27 37 25.8142 37 24.3742V22.1242C37 21.51 36.4703 20.9992 35.8333 20.9992Z"
                                      fill="#D9A4FC"/>
                                <path id="Shape" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M38.9565 23H38.5881V24.8743C38.5881 27.1535 36.7792 28.9985 34.5446 28.9985H26.4554C24.2208 28.9985 22.4119 27.1535 22.4119 24.8743V23H22.0435C19.8089 23 18 24.845 18 27.1242V45.8735C18 48.155 19.8089 50 22.0435 50H35.6608C35.7049 48.1257 36.1307 46.355 36.8675 44.7507H23.5149C22.9126 44.7507 22.4119 44.24 22.4119 43.6257C22.4119 43.0115 22.9126 42.5007 23.5149 42.5007H37.4851C37.6903 42.5007 37.8822 42.5615 38.0432 42.665C39.3072 40.82 41.0146 39.3193 43 38.3V27.1242C43 24.845 41.1911 23 38.9565 23ZM37.4851 39.875H23.5149C22.9126 39.875 22.4119 39.3643 22.4119 38.75C22.4119 38.1357 22.9126 37.625 23.5149 37.625H37.4851C38.0874 37.625 38.5881 38.1357 38.5881 38.75C38.5881 39.3643 38.0896 39.875 37.4851 39.875ZM23.5149 34.9993H37.4851C38.0896 34.9993 38.5881 34.4908 38.5881 33.8743C38.5881 33.26 38.0874 32.7493 37.4851 32.7493H23.5149C22.9126 32.7493 22.4119 33.26 22.4119 33.8743C22.4119 34.4885 22.9126 34.9993 23.5149 34.9993Z"
                                      fill="#BE63F9"/>
                                <g id="Group">
                                    <path id="Path_3"
                                          d="M39.5421 54C38.7167 54 38.046 53.3217 38.046 52.4868V49.8393C38.046 44.002 42.7406 39.2515 48.5141 39.2515H51.504C52.3294 39.2515 53 39.9298 53 40.7647C53 41.5995 52.3294 42.2779 51.504 42.2779H48.5141C44.3914 42.2779 41.0382 45.6695 41.0382 49.8393V52.4868C41.0382 53.3239 40.3675 54 39.5421 54Z"
                                          fill="#D9A4FC"/>
                                    <path id="Path_4"
                                          d="M47.0179 46.4386C46.8138 46.4386 46.6097 46.3955 46.4146 46.3115C45.8718 46.071 45.5219 45.5266 45.5219 44.9276V36.6085C45.5219 36.0095 45.8718 35.4651 46.4146 35.2246C46.9551 34.9841 47.5876 35.0885 48.0273 35.4946L52.5133 39.653C52.825 39.9366 53 40.3427 53 40.7669C53 41.1912 52.825 41.595 52.5155 41.8831L48.0295 46.0415C47.7491 46.3002 47.3858 46.4386 47.0179 46.4386Z"
                                          fill="#D9A4FC"/>
                                </g>
                            </g>
                        </svg>
                        <span>Студент получает работу от Автора</span>
                    </li>
                    <li class="warranty__listItem">
                        <svg width="71" height="72" viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="smiley">
                                <path id="Path"
                                      d="M57.6875 72H13.3125C5.95956 72 0 65.9565 0 58.5V13.5C0 6.0435 5.95956 0 13.3125 0H57.6875C65.0404 0 71 6.0435 71 13.5V58.5C71 65.9565 65.0404 72 57.6875 72Z"
                                      fill="#FFCCEA"/>
                                <path id="Shape" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M18 36C18 26.0708 26.0708 18 36 18C45.9292 18 54 26.0708 54 36C54 45.9292 45.9292 54 36 54C26.0708 54 18 45.9292 18 36ZM24.8108 40.5C26.4893 45.2407 30.9757 48.42 36 48.42C41.0243 48.42 45.5108 45.2407 47.1938 40.5C47.313 40.1557 47.2523 39.78 47.043 39.4807C46.8315 39.1815 46.4872 39.0015 46.1272 39.0015H25.8773C25.5173 39.0015 25.1708 39.1815 24.9615 39.4807C24.75 39.78 24.6915 40.1557 24.8108 40.5ZM29.25 32.2493C30.0758 32.2493 30.7507 31.5743 30.7507 30.7485C30.7507 30.1342 31.2615 29.6235 31.8757 29.6235C32.49 29.6235 33.0007 30.1342 33.0007 30.7485C33.0007 32.8185 31.32 34.4993 29.25 34.4993C27.18 34.4993 25.4992 32.8185 25.4992 30.7485C25.4992 30.1342 26.01 29.6235 26.6243 29.6235C27.2385 29.6235 27.7493 30.1342 27.7493 30.7485C27.7493 31.5743 28.4242 32.2493 29.25 32.2493ZM44.2508 30.7485C44.2508 31.5743 43.5758 32.2493 42.75 32.2493C41.9242 32.2493 41.2493 31.5743 41.2493 30.7485C41.2493 30.1342 40.7385 29.6235 40.1243 29.6235C39.51 29.6235 38.9993 30.1342 38.9993 30.7485C38.9993 32.8185 40.68 34.4993 42.75 34.4993C44.82 34.4993 46.5008 32.8185 46.5008 30.7485C46.5008 30.1342 45.99 29.6235 45.3758 29.6235C44.7615 29.6235 44.2508 30.1342 44.2508 30.7485Z"
                                      fill="#F75DB8"/>
                            </g>
                        </svg>
                        <span>После доработок преподаватель принимает работу и студент доволен</span>
                    </li>
                    <li class="warranty__listItem">
                        <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Group 11">
                                <g id="money (1)">
                                    <path id="Path"
                                          d="M57.6875 71H13.3125C5.95964 71 0 65.0404 0 57.6875V13.3125C0 5.95964 5.95964 0 13.3125 0H57.6875C65.0404 0 71 5.95964 71 13.3125V57.6875C71 65.0404 65.0404 71 57.6875 71Z"
                                          fill="#FFF9DD"/>
                                </g>
                                <circle id="Oval" cx="35.5" cy="35.5" r="17.5" fill="#FFD304"/>
                                <path id="&#226;&#130;&#189;" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M34.0441 41.1966V44H31.2469V41.1966H29V39.0997H31.2469V37.208H29V35.1111H31.2469V28.0456C31.6685 28.0456 32.452 28.0355 33.2802 28.0247C34.2085 28.0127 35.1928 28 35.7866 28C40.5326 28 42 30.0513 42 32.6724C42 35.4074 39.9594 37.208 36.1534 37.208H34.0441V39.0997H37.8042V41.1966H34.0441ZM34 35H36.0276C37.6866 35 39 34.4924 39 33.0508C39 31.5685 37.9631 31 36.0507 31C35.5146 31 34.8587 31.0176 34.1574 31.0364C34.1052 31.0378 34.0527 31.0392 34 31.0406V35Z"
                                      fill="white"/>
                            </g>
                        </svg>
                        <span>И только после этого эксперт получит свою оплату</span>
                    </li>
                </ul>
            </div>
            <table class="howItWorks__info-table info-table">
                <tr>
                    <td class="info-table__col-1">
                        Техподдержка
                    </td>
                    <td class="info-table__col-2">
                        24/7
                    </td>
                </tr>
                <tr>
                    <td class="info-table__col-1">
                        Гарантия
                    </td>
                    <td class="info-table__col-2">
                        20 дней
                    </td>
                </tr>
                <tr>
                    <td class="info-table__col-1">
                        Эксперт
                    </td>
                    <td class="info-table__col-2">
                        выбираете сами
                    </td>
                </tr>
                <tr>
                    <td class="info-table__col-1">
                        Цена
                    </td>
                    <td class="info-table__col-2">
                        назначаете сами
                    </td>
                </tr>
                <tr>
                    <td class="info-table__col-1">
                        Средний срок выполнения
                    </td>
                    <td class="info-table__col-2">
                        7 дней
                    </td>
                </tr>
                <tr>
                    <td class="info-table__col-1">
                        Оригинальность
                    </td>
                    <td class="info-table__col-2">
                        от 95%
                    </td>
                </tr>
                <tr>
                    <td class="info-table__col-1">
                        Доработки
                    </td>
                    <td class="info-table__col-2">
                        бесплатно
                    </td>
                </tr>
            </table>
        </div>
        <div class="howItWorks__faq faq">
            <h3 class="faq__heading">Частые вопросы</h3>
            <div class="faq__accordion accordion">
                <div class="accordion__item" data-js="accordionItem">
                    <h4 class="accordion__itemHeading">Как работает гарантия?</h4>
                    <p class="accordion__itemText">
                        <span>Гарантийный срок на нашем сервисе 20 дней. В период работы над заданием и гарантии деньги заморожены на ресурсе.</span>
                        <span>В течение гарантийного срока ты можешь дать свои замечания для дальнейших правок или запросить перерасчет, если работа выполнена некорректно и ты хочешь вернуть деньги назад.</span>
                        <span>После истечения гарантийного срока заказ считается выполненным и оплата автоматически переводится исполнителю.</span>
                    </p>
                    <button
                        class="accordion__toggleBtn"
                        type="button"
                        data-js="accordionToggleBtn"
                        aria-label="Расскрыть текст"
                    >
                        <svg width="16" height="10" viewBox="0 0 16 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.32787 9.16048L14.8977 2.69427C15.0498 2.54471 15.1335 2.34507 15.1335 2.13219C15.1335 1.91932 15.0498 1.71968 14.8977 1.57012L14.414 1.09393C14.0988 0.784068 13.5865 0.784068 13.2718 1.09393L7.75486 6.52376L2.23179 1.0879C2.07972 0.938348 1.87699 0.855774 1.66082 0.855774C1.44441 0.855774 1.24168 0.938348 1.08949 1.0879L0.605897 1.5641C0.453822 1.71377 0.370044 1.91329 0.370044 2.12617C0.370044 2.33904 0.453822 2.53869 0.605897 2.68824L7.18172 9.16048C7.33428 9.31039 7.53797 9.39272 7.75449 9.39225C7.97186 9.39272 8.17543 9.31039 8.32787 9.16048Z"/>
                        </svg>
                    </button>
                </div>
                <div class="accordion__item" data-js="accordionItem">
                    <h4 class="accordion__itemHeading">Сколько стоит выполнение работы?</h4>
                    <p class="accordion__itemText">
                        <span>На сервисе не существует установленных цен, они зависят от сложности работы, срока сдачи и опыта эксперта. Ты всегда можешь предложить свою цену и обсудить варианты с исполнителем.</span>
                    </p>
                    <button
                        class="accordion__toggleBtn"
                        type="button"
                        data-js="accordionToggleBtn"
                        aria-label="Расскрыть текст"
                    >
                        <svg width="16" height="10" viewBox="0 0 16 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.32787 9.16048L14.8977 2.69427C15.0498 2.54471 15.1335 2.34507 15.1335 2.13219C15.1335 1.91932 15.0498 1.71968 14.8977 1.57012L14.414 1.09393C14.0988 0.784068 13.5865 0.784068 13.2718 1.09393L7.75486 6.52376L2.23179 1.0879C2.07972 0.938348 1.87699 0.855774 1.66082 0.855774C1.44441 0.855774 1.24168 0.938348 1.08949 1.0879L0.605897 1.5641C0.453822 1.71377 0.370044 1.91329 0.370044 2.12617C0.370044 2.33904 0.453822 2.53869 0.605897 2.68824L7.18172 9.16048C7.33428 9.31039 7.53797 9.39272 7.75449 9.39225C7.97186 9.39272 8.17543 9.31039 8.32787 9.16048Z"/>
                        </svg>
                    </button>
                </div>
                <div class="accordion__item" data-js="accordionItem">
                    <h4 class="accordion__itemHeading">Как оплатить в рассрочку?</h4>
                    <p class="accordion__itemText">
                        <span>Предоплата доступна при ставке от 500 до 7000 рублей.</span>
                        <span>Чтобы использовать предоплату, зайди на страницу заказа и рядом со ставкой эксперта нажми кнопку «нанять», выбери пункт «по частям», выбери способ оплаты и нажми кнопку «перейти к оплате».</span>
                    </p>
                    <button
                        class="accordion__toggleBtn"
                        type="button"
                        data-js="accordionToggleBtn"
                        aria-label="Расскрыть текст"
                    >
                        <svg width="16" height="10" viewBox="0 0 16 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.32787 9.16048L14.8977 2.69427C15.0498 2.54471 15.1335 2.34507 15.1335 2.13219C15.1335 1.91932 15.0498 1.71968 14.8977 1.57012L14.414 1.09393C14.0988 0.784068 13.5865 0.784068 13.2718 1.09393L7.75486 6.52376L2.23179 1.0879C2.07972 0.938348 1.87699 0.855774 1.66082 0.855774C1.44441 0.855774 1.24168 0.938348 1.08949 1.0879L0.605897 1.5641C0.453822 1.71377 0.370044 1.91329 0.370044 2.12617C0.370044 2.33904 0.453822 2.53869 0.605897 2.68824L7.18172 9.16048C7.33428 9.31039 7.53797 9.39272 7.75449 9.39225C7.97186 9.39272 8.17543 9.31039 8.32787 9.16048Z"/>
                        </svg>
                    </button>
                </div>
                <div class="accordion__item" data-js="accordionItem">
                    <h4 class="accordion__itemHeading">Какая комиссия для заказчика?</h4>
                    <p class="accordion__itemText">
                        <span>Комиссия заказчика фиксированная и составляет 35% от ставки автора.</span>
                    </p>
                    <button
                        class="accordion__toggleBtn"
                        type="button"
                        data-js="accordionToggleBtn"
                        aria-label="Расскрыть текст"
                    >
                        <svg width="16" height="10" viewBox="0 0 16 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.32787 9.16048L14.8977 2.69427C15.0498 2.54471 15.1335 2.34507 15.1335 2.13219C15.1335 1.91932 15.0498 1.71968 14.8977 1.57012L14.414 1.09393C14.0988 0.784068 13.5865 0.784068 13.2718 1.09393L7.75486 6.52376L2.23179 1.0879C2.07972 0.938348 1.87699 0.855774 1.66082 0.855774C1.44441 0.855774 1.24168 0.938348 1.08949 1.0879L0.605897 1.5641C0.453822 1.71377 0.370044 1.91329 0.370044 2.12617C0.370044 2.33904 0.453822 2.53869 0.605897 2.68824L7.18172 9.16048C7.33428 9.31039 7.53797 9.39272 7.75449 9.39225C7.97186 9.39272 8.17543 9.31039 8.32787 9.16048Z"/>
                        </svg>
                    </button>
                </div>
                <div class="accordion__item" data-js="accordionItem">
                    <h4 class="accordion__itemHeading">Как выбрать исполнителя для работы?</h4>
                    <p class="accordion__itemText">
                        <span>Чтобы выбрать эксперта, зайди на страницу заказа и рядом с интересующей ставкой нажимай кнопку «нанять». Далее выбери способ и тип оплаты и нажми кнопку «перейти к оплате».</span>
                        <span>После этого останется ввести данные карты, с которой планируется оплата и ввести код из смс на странице банка.</span>

                    </p>
                    <button
                        class="accordion__toggleBtn"
                        type="button"
                        data-js="accordionToggleBtn"
                        aria-label="Расскрыть текст"
                    >
                        <svg width="16" height="10" viewBox="0 0 16 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.32787 9.16048L14.8977 2.69427C15.0498 2.54471 15.1335 2.34507 15.1335 2.13219C15.1335 1.91932 15.0498 1.71968 14.8977 1.57012L14.414 1.09393C14.0988 0.784068 13.5865 0.784068 13.2718 1.09393L7.75486 6.52376L2.23179 1.0879C2.07972 0.938348 1.87699 0.855774 1.66082 0.855774C1.44441 0.855774 1.24168 0.938348 1.08949 1.0879L0.605897 1.5641C0.453822 1.71377 0.370044 1.91329 0.370044 2.12617C0.370044 2.33904 0.453822 2.53869 0.605897 2.68824L7.18172 9.16048C7.33428 9.31039 7.53797 9.39272 7.75449 9.39225C7.97186 9.39272 8.17543 9.31039 8.32787 9.16048Z"/>
                        </svg>
                    </button>
                </div>
                <div class="accordion__item" data-js="accordionItem">
                    <h4 class="accordion__itemHeading">Как заказать работу у определенного автора?</h4>
                    <p class="accordion__itemText">
                        <span>Если хочешь заказать работу у знакомого эксперта, нужно зайти в завершенный заказ, и нажать на аватар эксперта. Ты попадешь на страницу профиля, где под аватаром можно будет нажать кнопку ‘заказать у автора’.</span>
                        <span>Размещай задание и жди реакции эксперта – он получит уведомление оставит свое предложение, если будет заинтересован в работе.</span>
                    </p>
                    <button
                        class="accordion__toggleBtn"
                        type="button"
                        data-js="accordionToggleBtn"
                        aria-label="Расскрыть текст"
                    >
                        <svg width="16" height="10" viewBox="0 0 16 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.32787 9.16048L14.8977 2.69427C15.0498 2.54471 15.1335 2.34507 15.1335 2.13219C15.1335 1.91932 15.0498 1.71968 14.8977 1.57012L14.414 1.09393C14.0988 0.784068 13.5865 0.784068 13.2718 1.09393L7.75486 6.52376L2.23179 1.0879C2.07972 0.938348 1.87699 0.855774 1.66082 0.855774C1.44441 0.855774 1.24168 0.938348 1.08949 1.0879L0.605897 1.5641C0.453822 1.71377 0.370044 1.91329 0.370044 2.12617C0.370044 2.33904 0.453822 2.53869 0.605897 2.68824L7.18172 9.16048C7.33428 9.31039 7.53797 9.39272 7.75449 9.39225C7.97186 9.39272 8.17543 9.31039 8.32787 9.16048Z"/>
                        </svg>
                    </button>
                </div>
                <div class="accordion__item" data-js="accordionItem">
                    <h4 class="accordion__itemHeading">Как изменить срок сдачи?</h4>
                    <p class="accordion__itemText">
                        <span>Чтобы изменить срок сдачи работы, тебе нужно зайти в заказ с полной версии сайта. После этого нажми на кнопку «детали заказа» и выбери «срок сдачи». Откроется календарь, и ты сможешь выбрать подходящую дату.</span>
                        <span>Учти, что если заказ уже в работе, то изменить срок можно только на более поздний.</span>
                    </p>
                    <button
                        class="accordion__toggleBtn"
                        type="button"
                        data-js="accordionToggleBtn"
                        aria-label="Расскрыть текст"
                    >
                        <svg width="16" height="10" viewBox="0 0 16 10" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.32787 9.16048L14.8977 2.69427C15.0498 2.54471 15.1335 2.34507 15.1335 2.13219C15.1335 1.91932 15.0498 1.71968 14.8977 1.57012L14.414 1.09393C14.0988 0.784068 13.5865 0.784068 13.2718 1.09393L7.75486 6.52376L2.23179 1.0879C2.07972 0.938348 1.87699 0.855774 1.66082 0.855774C1.44441 0.855774 1.24168 0.938348 1.08949 1.0879L0.605897 1.5641C0.453822 1.71377 0.370044 1.91329 0.370044 2.12617C0.370044 2.33904 0.453822 2.53869 0.605897 2.68824L7.18172 9.16048C7.33428 9.31039 7.53797 9.39272 7.75449 9.39225C7.97186 9.39272 8.17543 9.31039 8.32787 9.16048Z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="experts">
    <h2 class="experts__heading title-2">
        Топ экспертов
    </h2>

    <div class="experts__content">
        <div class="experts__content-heading title-3">72&nbsp;000 экспертов ждут твоего задания</div>
        <div class="experts__content-category text--min">Топ экспертов</div>

        <div class="experts__controls">
            <button class="experts__slider-btn experts__slider-btn--prev" type="button" aria-label="Предыдущий эксперт">
                <svg width="8" height="12" viewBox="0 0 8 12" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.502365 6.00941C0.501909 6.20933 0.583242 6.40308 0.732246 6.55702L5.72966 11.6909C5.89931 11.8656 6.1431 11.9755 6.40739 11.9964C6.67168 12.0172 6.93482 11.9474 7.13893 11.8021C7.34305 11.6569 7.4714 11.4482 7.49577 11.2219C7.52014 10.9957 7.43852 10.7704 7.26887 10.5957L2.79118 6.00941L7.10895 1.42315C7.19197 1.33563 7.25397 1.23492 7.29139 1.12682C7.3288 1.01872 7.34089 0.905356 7.32695 0.793242C7.31302 0.681128 7.27334 0.572476 7.2102 0.473533C7.14706 0.374588 7.0617 0.287303 6.95903 0.216692C6.85626 0.138332 6.7357 0.0789861 6.60489 0.0423708C6.47408 0.00575538 6.33585 -0.00733857 6.19886 0.00390715C6.06187 0.0151529 5.92907 0.050496 5.80877 0.107724C5.68848 0.164953 5.58328 0.242833 5.49978 0.336484L0.672278 5.47035C0.546827 5.62872 0.487003 5.81852 0.502365 6.00941Z"/>
                </svg>
            </button>

            <button class="experts__slider-btn experts__slider-btn--next" type="button" aria-label="Следующий эксперт">
                <svg width="8" height="13" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path
                        d="M7.498 6.49c0-.2-.081-.393-.23-.547L2.27.809a1.061 1.061 0 0 0-.677-.305A1.118 1.118 0 0 0 .86.698a.827.827 0 0 0-.357.58.777.777 0 0 0 .227.626L5.21 6.491.89 11.077a.823.823 0 0 0-.182.296.738.738 0 0 0 .08.654.904.904 0 0 0 .252.256c.103.079.223.138.354.175a1.16 1.16 0 0 0 .796-.066.973.973 0 0 0 .31-.228L7.327 7.03a.766.766 0 0 0 .17-.54Z"/>
                </svg>
            </button>
        </div>

        <div class="experts__cards" data-js="expertsSlider">
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.biz/assets/img/avatars/size176x176/240/1010672.jpg?1615296034"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    yulya1985
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education"></div>

                <div class="expert-card__category">Бухгалтерский учёт</div>

                <div class="expert-card__price">От 400 ₽</div>

                <div class="expert-card__info">
                    Выполнено 3525
                    работ,
                    срок сдачи: 100% вовремя
                    , отвечает в течение 15 минут
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.biz/assets/img/avatars/size176x176/92/493660.jpg?1496688567"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Stark83
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education">Юридический ВУЗ 2005, Юридический, выпускник</div>

                <div class="expert-card__category">Право и юриспруденция</div>

                <div class="expert-card__price">От 500 ₽</div>

                <div class="expert-card__info">
                    Выполнено 2357
                    работ,
                    срок сдачи: 100% вовремя
                    , отвечает в течение 1 часа
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.biz/assets/img/avatars/size176x176/129/658049.jpg?1589826580"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    user658049
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education"></div>

                <div class="expert-card__category">Математика и вычислительная техника</div>

                <div class="expert-card__price">От 500 ₽</div>

                <div class="expert-card__info">
                    Выполнено 1120
                    работ,
                    срок сдачи: 100% вовремя
                    , отвечает в течение 40 минут
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.cloud/assets/img/avatars/size176x176/11/2746891.jpg?1624707990"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Наталья О.
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education"></div>

                <div class="expert-card__category">Строительство и инженерное дело</div>

                <div class="expert-card__price">От 400 ₽</div>

                <div class="expert-card__info">
                    Выполнено 1860
                    работ,
                    срок сдачи: 100% вовремя
                    , отвечает в течение 45 минут
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.cloud/assets/img/avatars/size176x176/19/58387.jpg?1615297478"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Анна А.
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education"></div>

                <div class="expert-card__category">Инженер технолог</div>

                <div class="expert-card__price">От 600 ₽</div>

                <div class="expert-card__info">
                    Выполнено 4318
                    работ,
                    срок сдачи: 100% вовремя
                    , отвечает в течение 1 часа
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.biz/assets/img/avatars/size176x176/231/912359.jpg?1615296629"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Роман А.
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education">преподаватель</div>

                <div class="expert-card__category">Машиностроение (авиа-ракетостроение)</div>

                <div class="expert-card__price">От 400 ₽</div>

                <div class="expert-card__info">
                    Выполнено 690
                    работ,
                    срок сдачи: 99% вовремя
                    , отвечает в течение 25 минут
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.biz/assets/img/avatars/size176x176/195/193987.jpg?1615383459"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Alexandra2113
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education"></div>

                <div class="expert-card__category">Клиническая фармакология</div>

                <div class="expert-card__price">От 600 ₽</div>

                <div class="expert-card__info">
                    Выполнено 2469
                    работ,
                    срок сдачи: 97% вовремя
                    , отвечает в течение 2 минут
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="img/avatars/size176x176/185/23225.jpg@1641924602"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Сергей А.
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education"></div>

                <div class="expert-card__category">Высшая математика</div>

                <div class="expert-card__price">От 500 ₽</div>

                <div class="expert-card__info">
                    Выполнено 1410
                    работ,
                    срок сдачи: 83% вовремя
                    , отвечает в течение 15 минут
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.biz/assets/img/avatars/size176x176/213/782549.jpg?1615295896"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Myletaz
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education">преподаватель</div>

                <div class="expert-card__category">Право и юриспруденция</div>

                <div class="expert-card__price">От 500 ₽</div>

                <div class="expert-card__info">
                    Выполнено 2677
                    работ,
                    срок сдачи: 100% вовремя
                    , отвечает в течение 20 минут
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
            <div class="experts__card expert-card" data-js="expertCard">
                <div class="expert-card__avatar-box">
                    <img
                        class="expert-card__img"
                        src="https://a24.cloud/assets/img/avatars/size176x176/156/1035676.jpg?1630417791"
                        alt="Аватар эксперта"
                    >
                    <span class="expert-card__rating" aria-label="Рейтинг эксперта">
                        5
                    </span>
                </div>

                <div class="expert-card__name">
                    Анна А.
                </div>

                <div class="expert-card__medals">
                    <figure class="expert-card__medal expert-card__medal--top">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/top-10-medal-icon.png"
                            alt="Входит в ТОП-10 экспертов по своему предмету"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Экперт входит в ТОП-10 по своему предмету
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--verified">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/verified-medal-icon.svg"
                            alt="Проверенный автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт проверен администрацией Автор24
                        </figcaption>
                    </figure>

                    <figure class="expert-card__medal expert-card__medal--skilled">
                        <img
                            class="expert-card__medal-img"
                            src="img/ablanding/skilled-medal-icon.svg"
                            alt="Опытный и зарекомендовавший себя автор"
                            width="24"
                            height="24"
                        >
                        <figcaption class="expert-card__medal-hint">
                            Эксперт - зарекомендовал себя и выполнил более 100 работ с хорошим рейтингом
                        </figcaption>
                    </figure>
                </div>

                <div class="expert-card__education">преподаватель</div>

                <div class="expert-card__category">Нефтегазовое дело</div>

                <div class="expert-card__price">От 600 ₽</div>

                <div class="expert-card__info">
                    Выполнено 629
                    работ,
                    срок сдачи: 100% вовремя
                    , отвечает в течение 1 часа
                </div>

                <button
                    class="expert-card__btn"
                    type="button"
                    data-btn="scrollToMainForm"
                >
                    Пригласить эксперта
                </button>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="reviews__intro">
        <h2 class="title-2 reviews__heading">
            Отзывы студентов
        </h2>
        <div class="reviews__meta-box">
            <div class="reviews__meta reviews__meta--wink">
                <img class="reviews__meta-img" src="images/emoji/winking-face.png" alt="Подмигивающий смайл">
                <div class="reviews__meta-number">4.9</div>
                <div class="reviews__meta-text">средняя оценка</div>
            </div>
            <div class="reviews__meta reviews__meta--love">
                <img class="reviews__meta-img" src="images/emoji/loving-face.png" alt="Влюбленный смайл">
                <div class="reviews__meta-number">51088</div>
                <div class="reviews__meta-text">
                    положительных отзывов
                </div>
            </div>
        </div>
    </div>
    <div class="reviews__slider-box">
        <div class="reviews__slider">
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        barv1n
                        ( 18 лет. ВолГАУ )
                    </div>
                    <div class="review-card__head-date">08-07-2022, 21:09</div>
                </div>
                <div class="review-card__text">Заказывала у эксперта 2 работы, обе оценены отлично, спасибо большое за
                    Ваш труд, все выполнено на качественном уровне)!
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4.2</div>
                    </div>
                </div>
            </div>
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        havaalbosh41
                        ( 18 лет. ВолгГТУ )
                    </div>
                    <div class="review-card__head-date">14-07-2022, 14:13</div>
                </div>
                <div class="review-card__text">Сделала заказ на курсовую работу, оперативно все получила! Замечаний по
                    работе не было! Сдано на 5!
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4.3</div>
                    </div>
                </div>
            </div>
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        klcustomer
                        ( 20 лет. Дальрыбвтуз )
                    </div>
                    <div class="review-card__head-date">10-07-2022, 13:39</div>
                </div>
                <div class="review-card__text">Вежливый автор, работу выполнила оч быстро . Получила три и то сама
                    исправляла многое . Нормативные документы в курсовой, которые упоминались устарели давно . Я бы
                    заказала ещё у автора что то , но что нибудь полегче типо практики , за скорость +
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4</div>
                    </div>
                </div>
            </div>
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        konvikm90
                        ( 22 года. КубГТУ )
                    </div>
                    <div class="review-card__head-date">17-07-2022, 08:50</div>
                </div>
                <div class="review-card__text">СОВЕТУЮ, заказываю работу не в первый раз, работу выполнил даже раньше,
                    чем надо было))))).
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4.2</div>
                    </div>
                </div>
            </div>
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        lazarevmg36
                        ( 18 лет. НГСХА )
                    </div>
                    <div class="review-card__head-date">16-07-2022, 04:25</div>
                </div>
                <div class="review-card__text">В целом очень даже хорошо выполнен заказ, правда некоторые мелочи
                    пришлось доработать самой, но это не критично и заняло минут 10. Советую
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4.1</div>
                    </div>
                </div>
            </div>
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        rich79
                        ( 20 лет. НИУ МГСУ )
                    </div>
                    <div class="review-card__head-date">18-07-2022, 08:10</div>
                </div>
                <div class="review-card__text">Вежливый автор, по любым вопросам идет на встречу. если произошло
                    недопонимание, то всегда исправляет как надо заказчику. В работе приводит актуальную литературу.
                    Хорошая грамотность.
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4.1</div>
                    </div>
                </div>
            </div>
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        trioterty
                        ( 18 лет. ПензГТУ )
                    </div>
                    <div class="review-card__head-date">26-07-2022, 15:42</div>
                </div>
                <div class="review-card__text">Заказала курсовую работу 6 мая, срок был до 18 мая , автор выполнил точно
                    в срок, без задержек, преподавателю понравилось оформление и качество выполнения. Рекомендую!!
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4.6</div>
                    </div>
                </div>
            </div>
            <div class="reviews__slide review-card">
                <div class="review-card__head">
                    <div class="review-card__head-name">
                        VeryCyxapuk
                        ( 18 лет. СамГУПС )
                    </div>
                    <div class="review-card__head-date">13-07-2022, 07:25</div>
                </div>
                <div class="review-card__text">Очень хорошие работы. Эксперт выполняет все точно и качественно. не
                    первый раз заказываю работы. Советую. за отчеты 100 баллов ставят.
                </div>
                <div class="review-card__footer">
                    <div class="review-card__footer-status">
                        <img
                            class="review-card__footer-status-img"
                            src="images/emoji/star-eyes.png"
                            alt="Радостный смайлик"
                        >
                        <div class="review-card__footer-status-text">Положительно</div>
                    </div>
                    <div class="review-card__footer-rating">
                        <div class="review-card__footer-rating-text">Общая оценка</div>
                        <div class="review-card__footer-rating-property">4.2</div>
                    </div>
                </div>
            </div>
        </div>
        <button class="reviews__slider-arrow reviews__slider-arrow--prev" type="button"
                aria-label="Предыдущий отзыв"></button>
        <button class="reviews__slider-arrow reviews__slider-arrow--next" type="button"
                aria-label="Следующий отзыв"></button>
    </div>

    <div class="reviews__pagination-bullets" aria-hidden="true"></div>

    <footer class="review-services">
        <a
            class="review-services__link"
            href="https://www.yell.ru/moscow/com/author24_11875679/"
            target="_blank"
            rel='noopener noreferrer nofollow'
        >
            <svg aria-hidden="true">
                <use href="./img/sprite.svg#yell"/>
            </svg>
            <span class="reviews-services__link-text">yell: 4.7</span>
        </a>
        <a
            class="review-services__link"
            href="https://irecommend.ru/content/internet-birzha-avtor-24-author24ru"
            target="_blank"
            rel='noopener noreferrer nofollow'
        >
            <svg aria-hidden="true">
                <use href="./img/sprite.svg#irecommend"/>
            </svg>
            <span class="reviews-services__link-text">irecommend: 4.3</span>
        </a>
        <a
            class="review-services__link"
            href="https://g.page/r/CRTtcJACzwuzEAE"
            target="_blank"
            rel='noopener noreferrer nofollow'
        >
            <svg aria-hidden="true">
                <use href="./img/sprite.svg#google"/>
            </svg>
            <span class="reviews-services__link-text">google: 4.8</span>
        </a>
    </footer>
</section>

<div class="layout-5">
    <img class="layout-5__dots" data-lazy data-src="./images/decor-dots.svg" src="index.php">
    <img class="layout-5__waves" data-lazy data-src="./images/decor-waves.svg" src="index.php">
    <h2 class="layout-5__title title-2">Видео-отзывы</h2>
    <div class="layout-5__grid-wrap">
        <div class="layout-5__grid">
            <div data-btnok="0" class="layout-5__grid-item btn-ok" data-js="videoBox">
                <video class="layout-5__grid-item-video" id="video-1" data-js="video" data-lazy
                       data-src="./images/4.jpg" controls poster="index.php" preload="none">
                    <source src="landing-video/video-1.mp4" type='video/mp4'>
                </video>
                <div class="layout-5__grid-item-info" data-js="videoPreview">
                    <div class="layout-5__grid-item-info-btn"></div>
                    <div class="layout-5__grid-item-info-text">Автор24 помогает мне зарабатывать , не отвлекаясь от
                        учебного процесса
                    </div>
                </div>
            </div>
            <div data-btnok="1" class="layout-5__grid-item btn-ok" data-js="videoBox">
                <video class="layout-5__grid-item-video" id="video-2" data-js="video" data-lazy
                       data-src="./images/1.jpg" controls poster="index.php" preload="none">
                    <source src="landing-video/video-2.mp4" type='video/mp4'>
                </video>
                <div class="layout-5__grid-item-info" data-js="videoPreview">
                    <div class="layout-5__grid-item-info-btn"></div>
                    <div class="layout-5__grid-item-info-text">Автор24 помогает мне зарабатывать , не отвлекаясь от
                        учебного процесса
                    </div>
                </div>
            </div>
            <div data-btnok="2" class="layout-5__grid-item btn-ok" data-js="videoBox">
                <video class="layout-5__grid-item-video" id="video-3" data-js="video" data-lazy
                       data-src="./images/3.jpg" controls poster="index.php" preload="none">
                    <source src="landing-video/video-3.mp4" type='video/mp4'>
                </video>
                <div class="layout-5__grid-item-info" data-js="videoPreview">
                    <div class="layout-5__grid-item-info-btn"></div>
                    <div class="layout-5__grid-item-info-text">Автор24 помогает мне зарабатывать , не отвлекаясь от
                        учебного процесса
                    </div>
                </div>
            </div>
            <div data-btnok="3" class="layout-5__grid-item btn-ok" data-js="videoBox">
                <video class="layout-5__grid-item-video" id="video-4" data-js="video" data-lazy
                       data-src="./images/2.jpg" controls poster="index.php" preload="none">
                    <source src="landing-video/video-4.mp4" type='video/mp4'>
                </video>
                <div class="layout-5__grid-item-info" data-js="videoPreview">
                    <div class="layout-5__grid-item-info-btn"></div>
                    <div class="layout-5__grid-item-info-text">Автор24 помогает мне зарабатывать , не отвлекаясь от
                        учебного процесса
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-5-grid-dots"></div>
    </div>
    <div class="layout-5__note">Оставь заявку и выбери лучшего автора на основании отзывов</div>
    <div class="layout-5__btn-wrap"><a class="layout-5__btn btn-big" href="index.php#">Разместить заказ</a></div>
</div>

<div class="layout-6">
    <h2 class="layout-6__title title-2">Готовые работы, которые <a href="index.php#">можно купить</a></h2>
    <div class="layout-6-slider-wrap">
        <div class="layout-6-slider-decor-1"></div>
        <div class="layout-6-slider-decor-2"></div>
        <div class="layout-6-slider">
            <div class="layout-6-slider__slide">
                <div class="layout-6-slider__slide-rating">
                    <span>4+</span> получена<br>оценка
                </div>
                <div class="layout-6-slider__slide-info">
                    <div data-js="slideTitle" class="layout-6-slider__slide-info-title title-4">Учет основных средств
                        курсовая Бухгалтерский учет и анализ
                    </div>
                    <div class="layout-6-slider__slide-info-footer">
                        <div class="layout-6-slider__slide-info-footer-text">
                            Курсовая работа,
                            43 страницы
                        </div>
                        <div class="layout-6-slider__slide-info-footer-row">
                            <div class="layout-6-slider__slide-info-footer-expert">
                                <img class="layout-6-slider__slide-info-footer-expert-avatar"
                                     src="img/avatars/size40x40/240/1010672.jpg@1615296034">
                                <div class="layout-6-slider__slide-info-footer-expert-info">
                                    <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                    <div class="layout-6-slider__slide-info-footer-expert-info-name">Юлия Г.</div>
                                </div>
                            </div>
                            <div class="layout-6-slider__slide-info-footer-price">1100 ₽</div>
                        </div>
                    </div>
                </div>
                <div class="layout-6-slider__slide-info-footer layout-6-slider__slide-info-footer--mobile">
                    <div class="layout-6-slider__slide-info-footer-text">
                        Курсовая работа,
                        43 страницы
                    </div>
                    <div class="layout-6-slider__slide-info-footer-row">
                        <div class="layout-6-slider__slide-info-footer-expert">
                            <img class="layout-6-slider__slide-info-footer-expert-avatar" data-lazy
                                 data-src="https://author24.ru/assets/img/avatars/size40x40/240/1010672.jpg?1615296034"
                                 src="index.php">
                            <div class="layout-6-slider__slide-info-footer-expert-info">
                                <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                <div class="layout-6-slider__slide-info-footer-expert-info-name">Юлия Г.</div>
                            </div>
                        </div>
                        <div class="layout-6-slider__slide-info-footer-price">1100 ₽</div>
                    </div>
                </div>
            </div>
            <div class="layout-6-slider__slide">
                <div class="layout-6-slider__slide-rating">
                    <span>4+</span> получена<br>оценка
                </div>
                <div class="layout-6-slider__slide-info">
                    <div data-js="slideTitle" class="layout-6-slider__slide-info-title title-4">Бухгалтерский учет
                        основных средств курсовая по бух учету
                    </div>
                    <div class="layout-6-slider__slide-info-footer">
                        <div class="layout-6-slider__slide-info-footer-text">
                            Курсовая работа,
                            40 страниц
                        </div>
                        <div class="layout-6-slider__slide-info-footer-row">
                            <div class="layout-6-slider__slide-info-footer-expert">
                                <img class="layout-6-slider__slide-info-footer-expert-avatar"
                                     src="https://a24.biz/assets/img/avatars/size40x40/19/58387.jpg?1615297478">
                                <div class="layout-6-slider__slide-info-footer-expert-info">
                                    <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                    <div class="layout-6-slider__slide-info-footer-expert-info-name">Анна Ф.</div>
                                </div>
                            </div>
                            <div class="layout-6-slider__slide-info-footer-price">1100 ₽</div>
                        </div>
                    </div>
                </div>
                <div class="layout-6-slider__slide-info-footer layout-6-slider__slide-info-footer--mobile">
                    <div class="layout-6-slider__slide-info-footer-text">
                        Курсовая работа,
                        40 страниц
                    </div>
                    <div class="layout-6-slider__slide-info-footer-row">
                        <div class="layout-6-slider__slide-info-footer-expert">
                            <img class="layout-6-slider__slide-info-footer-expert-avatar" data-lazy
                                 data-src="https://a24.biz/assets/img/avatars/size40x40/19/58387.jpg?1615297478"
                                 src="index.php">
                            <div class="layout-6-slider__slide-info-footer-expert-info">
                                <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                <div class="layout-6-slider__slide-info-footer-expert-info-name">Анна Ф.</div>
                            </div>
                        </div>
                        <div class="layout-6-slider__slide-info-footer-price">1100 ₽</div>
                    </div>
                </div>
            </div>
            <div class="layout-6-slider__slide">
                <div class="layout-6-slider__slide-rating">
                    <span>4+</span> получена<br>оценка
                </div>
                <div class="layout-6-slider__slide-info">
                    <div data-js="slideTitle" class="layout-6-slider__slide-info-title title-4">Бухгалтерский учет
                        основных средств курсовая
                    </div>
                    <div class="layout-6-slider__slide-info-footer">
                        <div class="layout-6-slider__slide-info-footer-text">
                            Курсовая работа,
                            36 страниц
                        </div>
                        <div class="layout-6-slider__slide-info-footer-row">
                            <div class="layout-6-slider__slide-info-footer-expert">
                                <img class="layout-6-slider__slide-info-footer-expert-avatar"
                                     src="img/avatars/size40x40/132/49796.jpg@1615311486">
                                <div class="layout-6-slider__slide-info-footer-expert-info">
                                    <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                    <div class="layout-6-slider__slide-info-footer-expert-info-name">Максим И.</div>
                                </div>
                            </div>
                            <div class="layout-6-slider__slide-info-footer-price">1350 ₽</div>
                        </div>
                    </div>
                </div>
                <div class="layout-6-slider__slide-info-footer layout-6-slider__slide-info-footer--mobile">
                    <div class="layout-6-slider__slide-info-footer-text">
                        Курсовая работа,
                        36 страниц
                    </div>
                    <div class="layout-6-slider__slide-info-footer-row">
                        <div class="layout-6-slider__slide-info-footer-expert">
                            <img class="layout-6-slider__slide-info-footer-expert-avatar" data-lazy
                                 data-src="https://author24.ru/assets/img/avatars/size40x40/132/49796.jpg?1615311486"
                                 src="index.php">
                            <div class="layout-6-slider__slide-info-footer-expert-info">
                                <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                <div class="layout-6-slider__slide-info-footer-expert-info-name">Максим И.</div>
                            </div>
                        </div>
                        <div class="layout-6-slider__slide-info-footer-price">1350 ₽</div>
                    </div>
                </div>
            </div>
            <div class="layout-6-slider__slide">
                <div class="layout-6-slider__slide-rating">
                    <span>4+</span> получена<br>оценка
                </div>
                <div class="layout-6-slider__slide-info">
                    <div data-js="slideTitle" class="layout-6-slider__slide-info-title title-4">УЧЁТ ФИНАНСОВЫХ
                        РЕЗУЛЬТАТОВ ОТ ПРОЧИХ ОПЕРАЦИЙ
                    </div>
                    <div class="layout-6-slider__slide-info-footer">
                        <div class="layout-6-slider__slide-info-footer-text">
                            Курсовая работа,
                            30 страниц
                        </div>
                        <div class="layout-6-slider__slide-info-footer-row">
                            <div class="layout-6-slider__slide-info-footer-expert">
                                <img class="layout-6-slider__slide-info-footer-expert-avatar"
                                     src="img/avatars/size40x40/216/1409240.jpg@1615383747">
                                <div class="layout-6-slider__slide-info-footer-expert-info">
                                    <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                    <div class="layout-6-slider__slide-info-footer-expert-info-name">scient1a</div>
                                </div>
                            </div>
                            <div class="layout-6-slider__slide-info-footer-price">1350 ₽</div>
                        </div>
                    </div>
                </div>
                <div class="layout-6-slider__slide-info-footer layout-6-slider__slide-info-footer--mobile">
                    <div class="layout-6-slider__slide-info-footer-text">
                        Курсовая работа,
                        30 страниц
                    </div>
                    <div class="layout-6-slider__slide-info-footer-row">
                        <div class="layout-6-slider__slide-info-footer-expert">
                            <img class="layout-6-slider__slide-info-footer-expert-avatar" data-lazy
                                 data-src="https://author24.ru/assets/img/avatars/size40x40/216/1409240.jpg?1615383747"
                                 src="index.php">
                            <div class="layout-6-slider__slide-info-footer-expert-info">
                                <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                <div class="layout-6-slider__slide-info-footer-expert-info-name">scient1a</div>
                            </div>
                        </div>
                        <div class="layout-6-slider__slide-info-footer-price">1350 ₽</div>
                    </div>
                </div>
            </div>
            <div class="layout-6-slider__slide">
                <div class="layout-6-slider__slide-rating">
                    <span>4+</span> получена<br>оценка
                </div>
                <div class="layout-6-slider__slide-info">
                    <div data-js="slideTitle" class="layout-6-slider__slide-info-title title-4">Учет кассовых операций и
                        подотчетных сумм курсовая
                    </div>
                    <div class="layout-6-slider__slide-info-footer">
                        <div class="layout-6-slider__slide-info-footer-text">
                            Курсовая работа,
                            45 страниц
                        </div>
                        <div class="layout-6-slider__slide-info-footer-row">
                            <div class="layout-6-slider__slide-info-footer-expert">
                                <img class="layout-6-slider__slide-info-footer-expert-avatar"
                                     src="img/avatars/size40x40/51/33843.jpg@1601482773">
                                <div class="layout-6-slider__slide-info-footer-expert-info">
                                    <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                    <div class="layout-6-slider__slide-info-footer-expert-info-name">Татьяна К.</div>
                                </div>
                            </div>
                            <div class="layout-6-slider__slide-info-footer-price">1150 ₽</div>
                        </div>
                    </div>
                </div>
                <div class="layout-6-slider__slide-info-footer layout-6-slider__slide-info-footer--mobile">
                    <div class="layout-6-slider__slide-info-footer-text">
                        Курсовая работа,
                        45 страниц
                    </div>
                    <div class="layout-6-slider__slide-info-footer-row">
                        <div class="layout-6-slider__slide-info-footer-expert">
                            <img class="layout-6-slider__slide-info-footer-expert-avatar" data-lazy
                                 data-src="https://author24.ru/assets/img/avatars/size40x40/51/33843.jpg?1601482773"
                                 src="index.php">
                            <div class="layout-6-slider__slide-info-footer-expert-info">
                                <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                <div class="layout-6-slider__slide-info-footer-expert-info-name">Татьяна К.</div>
                            </div>
                        </div>
                        <div class="layout-6-slider__slide-info-footer-price">1150 ₽</div>
                    </div>
                </div>
            </div>
            <div class="layout-6-slider__slide">
                <div class="layout-6-slider__slide-rating">
                    <span>4+</span> получена<br>оценка
                </div>
                <div class="layout-6-slider__slide-info">
                    <div data-js="slideTitle" class="layout-6-slider__slide-info-title title-4">Учет основных средств
                        курсовая работа по бух учету
                    </div>
                    <div class="layout-6-slider__slide-info-footer">
                        <div class="layout-6-slider__slide-info-footer-text">
                            Курсовая работа,
                            36 страниц
                        </div>
                        <div class="layout-6-slider__slide-info-footer-row">
                            <div class="layout-6-slider__slide-info-footer-expert">
                                <img class="layout-6-slider__slide-info-footer-expert-avatar"
                                     src="img/avatars/size40x40/250/55034.jpg@1579862015">
                                <div class="layout-6-slider__slide-info-footer-expert-info">
                                    <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                    <div class="layout-6-slider__slide-info-footer-expert-info-name">Ирина М.</div>
                                </div>
                            </div>
                            <div class="layout-6-slider__slide-info-footer-price">1100 ₽</div>
                        </div>
                    </div>
                </div>
                <div class="layout-6-slider__slide-info-footer layout-6-slider__slide-info-footer--mobile">
                    <div class="layout-6-slider__slide-info-footer-text">
                        Курсовая работа,
                        36 страниц
                    </div>
                    <div class="layout-6-slider__slide-info-footer-row">
                        <div class="layout-6-slider__slide-info-footer-expert">
                            <img class="layout-6-slider__slide-info-footer-expert-avatar" data-lazy
                                 data-src="https://author24.ru/assets/img/avatars/size40x40/250/55034.jpg?1579862015"
                                 src="index.php">
                            <div class="layout-6-slider__slide-info-footer-expert-info">
                                <div class="layout-6-slider__slide-info-footer-expert-info-type">Эксперт</div>
                                <div class="layout-6-slider__slide-info-footer-expert-info-name">Ирина М.</div>
                            </div>
                        </div>
                        <div class="layout-6-slider__slide-info-footer-price">1100 ₽</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-6-slider-arrow layout-6-slider-arrow--prev"></div>
        <div class="layout-6-slider-arrow layout-6-slider-arrow--next"></div>
        <div class="layout-6-slider-dots"></div>
    </div>
    <div class="layout-6__note">Нужно сэкономить? Зарегистрируйся и скачай готовую работу</div>
    <div class="layout-6__btn-wrap"><a class="layout-6__btn btn" href="index.php#">скачать работу</a></div>
</div>

<div class="layout-7">
    <div class="layout-7__inner">
        <h2>Выполнение курсовых на заказ &ndash; качественные услуги опытных авторов по выгодным ценам</h2>
        <p>Курсовые работы &ndash; большинство студентов боятся их, как огня. Ведь, не сдав вовремя курсовую работу или
            получив неудовлетворительную оценку, вы рискуете не попасть на следующий курс обучения. Никому не хочется
            проходить через всю эту волокиту с беготней за преподавателем, бесконечными правками, пересдачами и т.д.
            Чтобы написать качественную курсовую, необходимо перелопатить уйму теоретического материала, провести
            собственное исследование, да еще и оформить все это грамотно, с учетом действующих нормативов.</p>
        <p>И хорошо, если подготовкой курсовой вы начали заниматься заблаговременно и с данной дисциплиной у вас все
            ладится. А если нет? Если вы по болезни или по другим причинам пропустили много занятий? Если вам приходится
            совмещать учебу и работу, так что свободного времени и сил катастрофически не хватает? Отличное решение для
            таких случаев &ndash; заказать курсовую работу у профессионалов в данной сфере.</p>
        <p>На этом сайте вас ждет штат опытных исполнителей, каждый из которых имеет как минимум одно высшее
            образование. В большинстве своем наши авторы &ndash; это преподаватели колледжей и вузов с многолетним
            стажем. Заказать курсовую работу у них &ndash; значит получить гарантированно грамотный, уникальный (что
            немаловажно) материал с максимальным раскрытием темы, с опорой на актуальные источники, правильно
            оформленный. Стоимость услуг будет оправдана тем, что вы сэкономите собственное время и нервы на посиделки в
            библиотеке или дома за учебниками, конспектами, интернет-ресурсами, чертежами и т.д. Словом, если вас
            интересует выполнение курсовых на заказ, лучшие авторы и профессиональный сервис ждут именно здесь!</p>
        <h2>Как заказать курсовую работу на Автор24?</h2>
        <p>Просто дайте знать, что вам нужна курсовая на заказ, отправив заявку. Совсем скоро на нее откликнутся
            исполнители, компетентные в данной сфере, дисциплине и теме. Вы сможете самостоятельно выбрать подходящего
            автора, просмотрев его портфолио, рейтинг, отзывы, примеры работ.</p>
        <p>На &laquo;Автор24&raquo; вы можете воспользоваться следующими услугами:</p>
        <ul>
            <li>заказать написание курсовой работы &laquo;под ключ&raquo;;</li>
            <li>заказать срочную доработку курсовой;</li>
            <li>заказать подготовку только аналитической части курсовой работы;</li>
            <li>получить компетентную консультацию по предмету;</li>
            <li>проверить качество готовой работы.</li>
        </ul>
        <p>Следует отметить, что качество выполнения задания автором зависит не только от его опыта, мастерства и
            профессиональной подготовки, но и от того, насколько подробно вы опишете, какая именно курсовая работа на
            заказ нужна. Например, некоторые преподаватели больше внимания обращают на теоретический блок, другие
            &ndash; на практическую часть, собственное исследование, проект студента, третьи &ndash; на тонкости
            оформления, четвертые &ndash; на актуальность использованных источников и т.д. Обязательно укажите в заявке
            не только тему, но и подобные нюансы, чтобы курсовая на заказ получилась не просто типовым материалом, а
            уникальным проектом, &laquo;заточенным&raquo; под конкретно вашего руководителя. В таком случае вы сможете
            рассчитывать на высокий балл и хорошую репутацию в глазах преподавателя.</p>
        <h2>Курсовая на заказ: преимущества сотрудничества с нами и нашими авторами</h2>
        <ul>
            <li>Высокое качество работ. Выполнение курсовых работ на заказ нашими авторами &ndash; это комплексный и
                индивидуальный подход, полное раскрытие темы, грамотное оформление, подготовка к защите. При
                необходимости в проекты в кратчайшие сроки вносятся нужные коррективы. И каждая работа перед отправкой
                заказчику проходит многоступенчатую проверку на уникальность.
            </li>
            <li>Четкое соблюдение сроков. Наши исполнители работают не только качественно, но и быстро, ведь, как
                правило, большинству студентов курсовая на заказ нужна срочно, как говорится, сдать нужно было &laquo;еще
                вчера&raquo;. И если вы заказываете проект на определенный день и час, будьте уверены, что именно тогда
                он и будет готов.
            </li>
            <li>Адекватные цены. Курсовая работа на заказ может стоить по-разному, все зависит от сложности дисциплины и
                темы, сроков, индивидуальных требований студента. Но цены на этом сайте всегда полностью обоснованные,
                без завышений, посреднических комиссий и прочих сборов.
            </li>
        </ul>
        <p>Итак, чтобы заказать курсовую работу на Автор24, оставляйте заявку и ждите откликов наших авторов. При
            необходимости можете обратиться за бесплатной консультацией к нашим менеджерам &ndash; они онлайн
            практически круглосуточно.</p>
        <h2>Сколько стоит написание курсовой?</h2>
        <p>Высокий уровень подготовки, ответственность, добросовестность авторов биржи дают положительные результаты в
            написании учебных работ. Каждый день, по отзывам и рекомендациям знакомых, одногруппников, сокурсников на
            интернет-биржу обращаются более 100 новых заказчиков. Авторы, имея колоссальный опыт в написании курсовых
            работ, помогли огромному количеству студентов по всей России. Приступить к работе зарегистрированный автор
            может только после того, как пройдет строгую аттестацию, где подтвердит свой уровень компетентности и
            профессионализма. При этом цена готовой курсовой будет гораздо ниже, чем на аналогичных сервисах.</p>
        <p>На стоимость курсовой работы будет влиять рейтинг автора, на котором остановил свой выбор студент и ставки.
            Таким образом, обратившись на интернет-биржу &laquo;Автор24&raquo; у студента есть возможность не только
            получить профессиональную помощь в написании курсовой работы, но и легко вложиться в рамки своего
            бюджета.</p>
    </div>
</div>


<div class="layout-8">
    <h2 class="layout-8__title title-2">Другие предметы</h2>
    <div class="layout-8__grid">
        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🧠</span>
            </span>
            <span class="layout-8__grid-item-note">Курсовая работа на тему проектирование агрегатного участка</span>
        </a>

        <a class="layout-8__grid-item" href="#">
                            <span class="layout-8__grid-item-circle">
                                <span class="layout-8__grid-item-i">🙌</span>
                            </span>
            <span class="layout-8__grid-item-note">Дипломные работы по физике</span>
        </a>
        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🧠</span>
            </span>
            <span class="layout-8__grid-item-note">Заказать отчет по производственной практике</span>
        </a>
        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🙌</span>
            </span>
            <span class="layout-8__grid-item-note">Эссе по финансовому менеджменту</span>
        </a>
        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🤑</span>
            </span>
            <span class="layout-8__grid-item-note">Решение интегралов</span>
        </a>
        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🤩</span>
            </span>
            <span class="layout-8__grid-item-note">Заказать учебную работу</span>
        </a>
        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🙌</span>
            </span>
            <span class="layout-8__grid-item-note">Написание самостоятельной работы на заказ</span>
        </a>


        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🧠</span>
            </span>
            <span class="layout-8__grid-item-note">Написание студенческих работ</span>
        </a>


        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🤩</span>
            </span>
            <span class="layout-8__grid-item-note">Аннотация на английском</span>
        </a>

        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🧠</span>
            </span>
            <span class="layout-8__grid-item-note">Сравнительный анализ на тему причины раздробленности и смутного времени</span>
        </a>


        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🙌</span>
            </span>
            <span class="layout-8__grid-item-note">Курсовые работы по страхованию</span>
        </a>
        <a class="layout-8__grid-item" href="#">
            <span class="layout-8__grid-item-circle">
                <span class="layout-8__grid-item-i">🧠</span>
            </span>
            <span class="layout-8__grid-item-note">Курсовые работы по геометрии</span>
        </a>
        <!--                 <a class="layout-8__grid-item" href="#">
                    <span class="layout-8__grid-item-circle">
                        <span class="layout-8__grid-item-i">🤩</span>
                    </span>
                    <span class="layout-8__grid-item-note">Курсовая работа на тему русское письмо и его эволюция</span>
                </a> -->
    </div>
</div>
<div class="layout-9">
    <h2 class="layout-9__title title-2">Другие типы работ</h2>
    <div class="layout-9__grid">
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Д</span>
            <span class="layout-9__grid-item-note">Дипломная работа</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">К</span>
            <span class="layout-9__grid-item-note">Курсовая работа</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Р</span>
            <span class="layout-9__grid-item-note">Реферат</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">О</span>
            <span class="layout-9__grid-item-note">Отчёт по практике</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">С</span>
            <span class="layout-9__grid-item-note">Статья</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Д</span>
            <span class="layout-9__grid-item-note">Доклад</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Р</span>
            <span class="layout-9__grid-item-note">Рецензия</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">К</span>
            <span class="layout-9__grid-item-note">Контрольная работа</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Р</span>
            <span class="layout-9__grid-item-note">Решение задач</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Б</span>
            <span class="layout-9__grid-item-note">Бизнес-план</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Э</span>
            <span class="layout-9__grid-item-note">Эссе</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Ч</span>
            <span class="layout-9__grid-item-note">Чертёж</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">С</span>
            <span class="layout-9__grid-item-note">Сочинения</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">П</span>
            <span class="layout-9__grid-item-note">Перевод</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">П</span>
            <span class="layout-9__grid-item-note">Презентации</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Д</span>
            <span class="layout-9__grid-item-note">Другое</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">К</span>
            <span class="layout-9__grid-item-note">Копирайтинг</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">Л</span>
            <span class="layout-9__grid-item-note">Лабораторная работа</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">М</span>
            <span class="layout-9__grid-item-note">Маркетинговое исследование</span>
        </a>
        <a class="layout-9__grid-item" href="#">
            <span class="layout-9__grid-item-circle">В</span>
            <span class="layout-9__grid-item-note">Выпускная квалификационная работа</span>
        </a>
    </div>
</div>


<footer class="footer">
    <div class="footer-main">
        <div class="l-wrap">
            <div class="footer-main__inner">
                <div class="footer-main__info footer-info">
                    <a class="footer-info__number" href="tel:8-800-775-03-30">8-800-775-03-30</a>
                    <p class="footer-info__shedule">Работаем по будням с 10:00 до 20:00 по Мск</p>
                    <a class="footer-info__support"
                       href="https://author24.ru/cdn-cgi/l/email-protection#eb989e9b9b84999fab8a9e9f838499d9dfc5999e"><span
                            class="__cf_email__" data-cfemail="493a3c3939263b3d09283c3d21263b7b7d673b3c">[email&#160;protected]</span></a>
                    <div class="footer-info__download-app-links">
                        <div class="footer-info__download-app-links">
                            <a class="download-app-link" href="https://app.adjust.com/1tyi11c">
                                <div class="download-app-link__ico">
                                    <svg width="113" height="32" viewBox="0 0 113 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M48.3104 16.4289C50.5657 16.4289 52.0524 18.2117 52.0524 20.9655C52.0524 23.727 50.5744 25.5011 48.344 25.5011C47.1911 25.5614 46.1051 24.9576 45.548 23.9464H45.5058V28.3479H43.6818V16.5219H45.4474V17.9999H45.4809C46.0628 16.9951 47.1499 16.3915 48.3104 16.4289ZM58.091 16.4289C60.3463 16.4289 61.833 18.2117 61.833 20.9655C61.833 23.727 60.355 25.5011 58.1245 25.5011C56.9716 25.5614 55.8857 24.9576 55.3286 23.9464H55.2864V28.3479H53.4623V16.5219H55.2279V17.9999H55.2614C55.8433 16.9951 56.9304 16.3915 58.091 16.4289ZM71.186 13.0166C73.7615 13.0166 75.5271 14.4611 75.5865 16.564H73.7452C73.635 15.3477 72.6295 14.6135 71.1601 14.6135C69.6908 14.6135 68.6853 15.3563 68.6853 16.4375C68.6853 17.2992 69.3275 17.8062 70.8985 18.1944L72.2413 18.5241C74.7421 19.1155 75.7811 20.1201 75.7811 21.9028C75.7811 24.1831 73.9647 25.6113 71.0758 25.6113C68.3728 25.6113 66.5478 24.2167 66.4299 22.0121L68.2971 22.0122C68.4323 23.2209 69.6064 24.0145 71.211 24.0145C72.7484 24.0145 73.8545 23.2208 73.8545 22.131C73.8545 21.185 73.1874 20.6185 71.6078 20.2303L70.0282 19.8498C67.7901 19.3092 66.751 18.2625 66.751 16.564C66.751 14.4611 68.5837 13.0166 71.186 13.0166ZM86.6007 16.4126C89.1772 16.4126 90.8162 18.1695 90.8162 20.9655C90.8162 23.7691 89.1858 25.5184 86.6007 25.5184C84.0165 25.5184 82.3862 23.7691 82.3862 20.9655C82.3862 18.1696 84.0329 16.4126 86.6007 16.4126ZM101.371 16.4126C103.83 16.4126 105.376 18.1015 105.376 20.7959V21.4208H99.0995V21.531C99.0409 22.1926 99.2694 22.8474 99.7268 23.329C100.184 23.8106 100.826 24.0725 101.49 24.048C102.375 24.131 103.21 23.6227 103.542 22.7982L105.274 22.7982C105.029 24.4113 103.458 25.5184 101.448 25.5184C98.8628 25.5184 97.2583 23.7864 97.2583 21.0077C97.2583 18.2204 98.8714 16.4126 101.371 16.4126ZM79.7177 14.4189V16.5219H81.4075V17.9664H79.7177V22.8653C79.7177 23.6263 80.056 23.981 80.7989 23.981C80.9995 23.9775 81.1997 23.9634 81.3989 23.9387V25.3746C81.0649 25.437 80.7254 25.4653 80.3857 25.4589C78.5866 25.4589 77.885 24.7832 77.885 23.0598V17.9664H76.5929V16.5219H77.885V14.4189H79.7177ZM38.1484 13.2198L42.5489 25.4082H40.5475L39.4328 22.1138H34.7869L33.6712 25.4082H31.7034L36.1039 13.2198H38.1484ZM96.2394 16.4289C96.4496 16.4282 96.6592 16.451 96.8643 16.497V18.2031C96.599 18.122 96.3221 18.0848 96.0448 18.0929C95.5085 18.0711 94.9896 18.2848 94.6241 18.6779C94.2587 19.071 94.0833 19.6041 94.1441 20.1374V25.4082H92.32V16.5219H94.0597V18.0344H94.1019C94.3445 17.0607 95.2367 16.3906 96.2394 16.4289ZM20.6193 9.20826C22.1859 9.25728 23.6376 10.0421 24.5366 11.326C23.118 12.1982 22.2451 13.7362 22.2236 15.4013C22.2257 17.2852 23.3539 18.9853 25.0889 19.7191C24.7552 20.8031 24.2522 21.8275 23.5986 22.7544L23.4162 23.0253C22.5912 24.2386 21.6996 25.3521 20.3395 25.3742C18.92 25.407 18.443 24.5389 16.8149 24.5389C15.1715 24.5389 14.6631 25.3505 13.3017 25.407C11.9104 25.4585 10.8472 24.0054 9.93743 22.7046C8.11908 20.048 6.70317 15.218 8.6014 11.9315C9.49279 10.3297 11.1594 9.31328 12.9916 9.25409C14.3841 9.22544 15.6772 10.1945 16.5334 10.1945C17.3733 10.1945 18.9711 9.03526 20.6193 9.20826ZM86.6007 17.9156C85.1227 17.9156 84.2447 19.0562 84.2447 20.9655C84.2447 22.8911 85.1227 24.0145 86.6007 24.0145C88.0787 24.0145 88.9577 22.8911 88.9577 20.9655C88.9577 19.0476 88.0787 17.9156 86.6007 17.9156ZM47.8293 17.9836C46.4356 17.9836 45.4982 19.1913 45.4982 20.9655C45.4982 22.756 46.4356 23.9551 47.8293 23.9551C49.2478 23.9551 50.1776 22.7809 50.1776 20.9655C50.1776 19.1664 49.2478 17.9836 47.8293 17.9836ZM57.6098 17.9836C56.2161 17.9836 55.2787 19.1913 55.2787 20.9655C55.2787 22.756 56.2161 23.9551 57.6098 23.9551C59.0284 23.9551 59.9581 22.7809 59.9581 20.9655C59.9581 19.1664 59.0284 17.9836 57.6098 17.9836ZM37.1353 15.2471H37.0845L35.2681 20.5936H38.9507L37.1353 15.2471ZM101.371 17.8906C100.771 17.8871 100.195 18.1233 99.7698 18.5468C99.3448 18.9703 99.1066 19.546 99.1081 20.146H103.551C103.584 19.5515 103.368 18.9702 102.954 18.5421C102.54 18.114 101.966 17.8778 101.371 17.8906ZM54.0101 5.59444L55.1181 9.10496H55.1871L56.2913 5.59444H57.2163L55.5686 10.1967C55.191 11.2721 54.7731 11.6172 53.8721 11.6172C53.7992 11.6172 53.5922 11.609 53.5107 11.5971V10.8461C53.6051 10.8581 53.7002 10.8635 53.7954 10.8624C54.1802 10.8909 54.5247 10.625 54.5947 10.2456L54.6599 10.0304L53.0602 5.59444H54.0101ZM50.5144 5.52115C51.6388 5.52112 52.349 6.39767 52.349 7.80236C52.349 9.20656 51.6388 10.087 50.5231 10.087C49.9639 10.1251 49.4333 9.83555 49.163 9.34459H49.0939V11.4835H48.2217V5.59445H49.0614V6.32486H49.1265C49.4014 5.81743 49.9375 5.50695 50.5144 5.52115ZM35.8043 4.01532C36.9574 4.01532 37.7693 4.66086 37.7693 5.59013C37.7748 6.23166 37.3315 6.78988 36.7053 6.92964V6.99865C37.4552 7.03192 38.0373 7.66479 38.0079 8.41484C37.9541 8.93808 37.6918 9.41758 37.2803 9.74517C36.8687 10.0728 36.3426 10.2208 35.8206 10.156C35.2974 10.2273 34.7677 10.083 34.353 9.75629C33.9382 9.42954 33.674 8.94833 33.6209 8.423H34.4941C34.5468 8.98324 35.0615 9.34463 35.8206 9.34463C36.5797 9.34463 37.0753 8.93871 37.0753 8.36648C37.0753 7.78611 36.6085 7.42858 35.7928 7.42858H34.9848V6.63347H35.7679C36.0404 6.6674 36.3147 6.58585 36.5245 6.40853C36.7342 6.23121 36.8602 5.97427 36.8721 5.69989C36.8721 5.15977 36.4657 4.81088 35.7765 4.81088C35.4975 4.77189 35.2146 4.84734 34.992 5.02008C34.7694 5.19282 34.6261 5.44819 34.5947 5.72816H33.7349C33.7648 5.21966 34.0046 4.74643 34.397 4.42164C34.7894 4.09684 35.2992 3.94967 35.8043 4.01532ZM74.165 5.50913C75.3948 5.50913 76.1376 6.3493 76.1376 7.73715V8.04151H73.0167V8.09039C72.9888 8.41843 73.1007 8.74302 73.3248 8.98415C73.549 9.22527 73.8646 9.36052 74.1938 9.35654C74.6202 9.40753 75.0352 9.19586 75.2443 8.82073L76.0849 8.82076C75.8396 9.65435 75.0327 10.1928 74.1688 10.0994C73.5795 10.115 73.0131 9.87068 72.62 9.43138C72.2268 8.99208 72.0466 8.40217 72.1272 7.81816C72.0488 7.23254 72.2283 6.64168 72.6192 6.19868C73.0102 5.75567 73.5742 5.50409 74.165 5.50913ZM59.7141 5.50917C60.7647 5.50917 61.3657 5.98411 61.3657 6.73078C61.3758 7.15928 61.0849 7.53649 60.6679 7.63561V7.70462C61.1665 7.76894 61.5381 8.19632 61.5324 8.69906C61.5324 9.53923 60.8174 10.0951 59.7256 10.0951C58.7604 10.0951 57.9764 9.65275 57.8959 8.7599H58.7643C58.8496 9.14956 59.2148 9.35273 59.7256 9.35273C60.3065 9.35273 60.6631 9.09681 60.6631 8.69904C60.6631 8.27299 60.3429 8.06979 59.7256 8.06979H59.0643V7.39213H59.7141C60.2413 7.39213 60.5097 7.18941 60.5097 6.81991C60.5097 6.49546 60.25 6.24769 59.7141 6.24769C59.2263 6.24769 58.8697 6.45473 58.8131 6.80363H57.9726C58.1033 5.96961 58.8778 5.39391 59.7141 5.50917ZM40.9773 5.50915C42.0854 5.50915 42.7103 6.06076 42.7103 6.99435V10.0141H41.8697V9.393H41.8007C41.5155 9.84658 41.0084 10.1117 40.4732 10.0869C40.098 10.126 39.7238 10.0044 39.4431 9.75243C39.1624 9.50042 39.0014 9.14143 39 8.76422C39 7.96866 39.5933 7.51002 40.6438 7.44484L41.841 7.37583V6.99435C41.841 6.52755 41.5333 6.26397 40.9361 6.26397C40.4492 6.26397 40.1128 6.44273 40.015 6.7552H39.1706C39.2597 5.99607 39.9748 5.50915 40.9773 5.50915ZM47.0629 5.59444V6.32861L45.0251 6.32866V10.0141H44.1529V5.59444H47.0629ZM63.6531 5.59444V8.63434H63.7221L65.7589 5.59444H66.6235V10.0141H65.7589V6.95793H65.6938L63.6531 10.0141H62.7885V5.59444H63.6531ZM81.7755 5.59444C82.6401 5.59444 83.1471 6.03248 83.1471 6.71827C83.1499 7.16673 82.8386 7.556 82.4005 7.65185V7.72086C82.9365 7.75472 83.352 8.20267 83.3455 8.73975C83.3455 9.51086 82.7656 10.0141 81.7956 10.0141H79.7828V5.59444H81.7755ZM71.3863 5.59449V6.32866H69.9945V10.0141H69.1213V6.32866H67.7296V5.59449H71.3863ZM41.841 8.01707L40.7616 8.08607C40.153 8.12681 39.8769 8.33385 39.8769 8.72347C39.8769 9.12125 40.222 9.35273 40.6965 9.35273C40.9774 9.38117 41.2578 9.2944 41.4736 9.11227C41.6893 8.93014 41.8219 8.66825 41.841 8.38656V8.01707ZM81.5723 8.04965H80.6474V9.34459H81.6816C82.1973 9.34459 82.4733 9.11695 82.4733 8.69904C82.4733 8.2567 82.1609 8.04965 81.5723 8.04965ZM50.271 6.3047C49.5368 6.3047 49.0777 6.88076 49.0777 7.8062C49.0777 8.72732 49.5368 9.30386 50.2672 9.30386C51.01 9.30386 51.4519 8.73977 51.4519 7.80236C51.4519 6.86878 51.01 6.3047 50.271 6.3047ZM20.6364 4.03507C20.7315 5.27592 20.3391 6.50494 19.5425 7.46113C18.7698 8.42228 17.5988 8.97591 16.3656 8.96321C16.2872 7.75808 16.691 6.5712 17.4882 5.66398C18.2955 4.74448 19.4195 4.16288 20.6364 4.03507ZM81.6087 6.26395H80.6474V7.40839H81.5119C82.0391 7.40839 82.2912 7.20567 82.2912 6.83186C82.2912 6.48728 82.0717 6.26395 81.6087 6.26395ZM74.1612 6.2515C73.8563 6.24735 73.5627 6.36666 73.3472 6.5823C73.1316 6.79794 73.0124 7.09157 73.0167 7.39643H75.2481C75.2704 7.09664 75.1651 6.80137 74.9581 6.58335C74.7511 6.36532 74.4617 6.24482 74.1612 6.2515Z"
                                              fill="#7D2AEB"/>
                                    </svg>
                                </div>
                            </a>
                            <a class="download-app-link"
                               href="https://play.google.com/store/apps/details?id=com.idevspro.author.customers">
                                <div
                                    class="download-app-link__ico">
                                    <svg width="113" height="32" viewBox="0 0 113 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M64.9699 17.9632C65.8781 17.9632 66.5985 18.3723 66.9734 18.8249H67.0307V18.1963H68.6172V25.1242C68.6172 27.9736 66.9591 29.1429 64.9985 29.1429C63.1534 29.1429 62.043 27.8865 61.6251 26.8632L63.0809 26.2491C63.3404 26.8777 63.9749 27.6234 64.9985 27.6234C66.2531 27.6234 67.0307 26.8342 67.0307 25.3573V24.8022H66.9734C66.5985 25.2703 65.8781 25.6794 64.9699 25.6794C63.0666 25.6794 61.3226 23.9984 61.3226 21.8358C61.3226 19.6577 63.0666 17.9632 64.9699 17.9632ZM4.86467 2.40471C4.91066 2.39718 4.95583 2.39887 4.99934 2.40877C5.03927 2.41554 5.07977 2.42699 5.12028 2.44342L15.8303 8.0202L20.6679 10.8408C20.6964 10.8479 20.7243 10.8579 20.7512 10.8715L25.7547 13.8066C26.0028 13.9743 26.1682 14.2258 26.1682 14.5193C26.1682 14.8129 26.0028 15.1064 25.7547 15.2322L20.8474 18.1109C20.8193 18.1352 20.7872 18.1551 20.7512 18.1673L20.7058 18.2126C20.6502 18.2663 20.6106 18.2931 20.5444 18.2931L20.5377 18.2928L15.8303 21.0605L5.12028 27.0986C5.03755 27.1405 4.99624 27.1405 4.91352 27.1405C4.83079 27.1405 4.74812 27.1405 4.70676 27.0986C4.58272 27.0147 4.5 26.8889 4.5 26.7212V2.82074C4.5 2.66887 4.56805 2.51739 4.70361 2.45888C4.75269 2.42955 4.80706 2.41143 4.86467 2.40471ZM102.602 18.1899L104.589 23.1067H104.646L106.56 18.1899H108.417L103.826 28.8843H102.084L103.783 25.0616L100.804 18.1899H102.602ZM5.32703 3.78517V25.6968L16.6929 14.5559L5.32703 3.78517ZM17.3171 15.1503L15.0033 17.4085L7.47096 24.7917L15.4168 20.3478L19.8597 17.7615L17.3171 15.1503ZM75.8393 17.9632C77.8141 17.9632 78.7805 19.5561 79.0973 20.4179L79.27 20.857L74.1812 22.9906C74.5704 23.7644 75.1762 24.159 76.0263 24.159C76.8772 24.159 77.4687 23.7354 77.9009 23.0922L79.1984 23.9694C78.7805 24.5981 77.7712 25.6794 76.0263 25.6794C73.8644 25.6794 72.2501 23.9839 72.2501 21.8213C72.2501 19.5262 73.8787 17.9632 75.8393 17.9632ZM38.5549 13.695C40.357 13.695 41.6393 14.4117 42.6057 15.3469L41.4666 16.5017C40.7749 15.844 39.8381 15.3324 38.5549 15.3324C36.1765 15.3324 34.3161 17.2755 34.3161 19.6876C34.3161 22.0989 36.1765 24.042 38.5549 24.042C40.0967 24.042 40.9763 23.4142 41.5391 22.8445C41.9999 22.3764 42.3024 21.7042 42.4178 20.7835H38.5549V19.147H43.9891C44.0473 19.4391 44.0759 19.7892 44.0759 20.1693C44.0759 21.3976 43.7439 22.9171 42.6773 23.9984C41.6393 25.0952 40.3132 25.6794 38.5549 25.6794C35.2969 25.6794 32.5578 22.9906 32.5578 19.6876C32.5578 16.3847 35.2969 13.695 38.5549 13.695ZM48.4686 17.9632C50.5732 17.9632 52.2886 19.5851 52.2886 21.8213C52.2886 24.042 50.5732 25.6794 48.4686 25.6794C46.3631 25.6794 44.6477 24.042 44.6477 21.8213C44.6477 19.5851 46.3631 17.9632 48.4686 17.9632ZM56.802 17.9632C58.9066 17.9632 60.622 19.5851 60.622 21.8213C60.622 24.042 58.9066 25.6794 56.802 25.6794C54.6974 25.6794 52.982 24.042 52.982 21.8213C52.982 19.5851 54.6974 17.9632 56.802 17.9632ZM97.2925 17.9423C99.2065 17.9423 100.688 19.0653 100.688 21.0792V25.4263H99.0768V24.5509H99.0195C98.6303 25.1496 98.0119 25.6603 96.889 25.6603C95.4215 25.6603 94.1114 24.6824 94.1114 23.1648C94.1114 21.5019 95.7382 20.612 97.3355 20.612C98.1274 20.612 98.7743 20.8742 99.0768 21.0493V20.9332C99.0625 19.9988 98.1846 19.4736 97.3211 19.4736C96.7019 19.4736 96.1123 19.6786 95.7955 20.3054L94.3137 19.6786C94.8318 18.482 96.0836 17.9423 97.2925 17.9423ZM93.1907 14.105V25.4453H91.5209V14.105H93.1907ZM86.9305 14.105C88.781 14.105 90.6002 15.463 90.6002 17.6266C90.6002 19.7901 88.781 21.1491 86.9305 21.1491H84.5986V25.4453H82.9298V14.105H86.9305ZM71.443 14.1041V25.4453H69.7706V14.1041H71.443ZM65.114 19.4826C63.9606 19.4826 62.995 20.4769 62.995 21.8358C62.995 23.1802 63.9606 24.159 65.114 24.159C66.2531 24.159 67.1461 23.1802 67.1461 21.8358C67.1461 20.4769 66.2531 19.4826 65.114 19.4826ZM48.4686 19.4826C47.3152 19.4826 46.3201 20.4324 46.3201 21.8213C46.3201 23.1947 47.3152 24.159 48.4686 24.159C49.6211 24.159 50.6161 23.1947 50.6161 21.8213C50.6161 20.4324 49.6211 19.4826 48.4686 19.4826ZM56.802 19.4826C55.6486 19.4826 54.6536 20.4324 54.6536 21.8213C54.6536 23.1947 55.6486 24.159 56.802 24.159C57.9554 24.159 58.9496 23.1947 58.9496 21.8213C58.9496 20.4324 57.9554 19.4826 56.802 19.4826ZM97.5511 21.9836C96.7315 21.9836 95.7812 22.3193 95.7812 23.1947C95.7812 23.8805 96.5435 24.1572 97.0912 24.1572C98.0549 24.1572 98.947 23.4133 99.0768 22.3628C98.6303 22.1442 98.2858 21.9836 97.5511 21.9836ZM75.8965 19.4536C75.0464 19.4536 73.8644 20.2138 73.9074 21.7042L77.3094 20.2718C77.1224 19.7892 76.5605 19.4536 75.8965 19.4536ZM86.9735 15.6835H84.5986V19.5706H86.9735C88.2217 19.5706 88.9304 18.5056 88.9304 17.6266C88.9304 16.7312 88.2217 15.6835 86.9735 15.6835ZM20.6291 11.7951L17.9353 14.5617L20.6138 17.3125L25.3412 14.5614L20.6291 11.7951ZM7.39857 4.60524L12.3361 9.27812L17.317 13.9726L18.4401 12.8191L19.8828 11.3327L15.4168 8.73304L7.39857 4.60524Z"
                                              fill="#7D2AEB"/>
                                        <path
                                            d="M37.9829 8.6969C37.487 9.07916 36.8775 9.27546 36.2679 9.27546C34.7905 9.27546 33.7677 8.24231 33.7677 6.73392C33.7677 5.16354 34.7802 4.19239 36.1233 4.19239C36.8465 4.19239 37.3217 4.38869 37.7556 4.67797L38.3239 3.7378C37.8486 3.30388 37.0634 3.00427 36.1233 3.00427C33.7367 3.00427 32.4246 4.6573 32.4246 6.73392C32.4246 8.98618 33.9433 10.4636 36.1543 10.4636C37.0944 10.4636 38.0139 10.133 38.4685 9.64739L37.9829 8.6969Z"
                                            fill="#7D2AEB"/>
                                        <path
                                            d="M39.7318 10.3499H41.0025V6.62028L43.9573 10.3499H45.569L42.4076 6.48597L45.3831 3.11792H43.854L41.0025 6.54796V3.11792H39.7318V10.3499Z"
                                            fill="#7D2AEB"/>
                                        <path
                                            d="M45.6828 10.3499H46.9639L47.7181 8.5006H50.8072L51.5614 10.3499H52.9149L49.8567 3.09726H48.7409L45.6828 10.3499ZM49.2679 4.73995L50.3217 7.31248H48.2037L49.2679 4.73995Z"
                                            fill="#7D2AEB"/>
                                        <path
                                            d="M58.1786 3.11792H56.9078V6.22768C56.5462 6.47564 56.0813 6.6926 55.5234 6.6926C54.8105 6.6926 54.2526 6.36199 54.2526 5.20487V3.11792H52.9818V5.56647C52.9818 7.29182 54.0873 7.88071 55.1824 7.88071C55.9573 7.88071 56.5669 7.63276 56.9078 7.38481V10.3499H58.1786V3.11792Z"
                                            fill="#7D2AEB"/>
                                        <path
                                            d="M59.253 10.3499H60.5341L61.2882 8.5006H64.3774L65.1315 10.3499H66.485L63.4269 3.09726H62.3111L59.253 10.3499ZM62.838 4.73995L63.8918 7.31248H61.7738L62.838 4.73995Z"
                                            fill="#7D2AEB"/>
                                        <path
                                            d="M66.0337 4.30603H68.3789V10.3499H69.6497V4.30603H71.9949V3.11792H66.0337V4.30603Z"
                                            fill="#7D2AEB"/>
                                        <path
                                            d="M75.0911 6.73392C75.9796 6.73392 76.5788 7.09552 76.5788 7.91171C76.5788 8.80021 76.0002 9.18248 75.0704 9.18248C74.8224 9.18248 74.5951 9.16181 74.3679 9.15148V6.78558C74.6571 6.75459 74.9051 6.73392 75.0911 6.73392ZM74.3679 3.11792H73.0971V10.3499C73.5207 10.3499 74.2335 10.3706 74.9258 10.3706C76.8474 10.3706 77.9219 9.40977 77.9219 7.88071C77.9219 6.46531 77.0644 5.54581 75.1944 5.54581C74.9981 5.54581 74.6881 5.55614 74.3679 5.59747V3.11792Z"
                                            fill="#7D2AEB"/>
                                        <path
                                            d="M81.5822 10.3396C82.0058 10.3706 82.9356 10.3913 83.5968 10.3913C85.1259 10.3913 86.283 9.70938 86.283 8.22165C86.283 7.26083 85.7251 6.71326 85.0122 6.53763V6.51696C85.6321 6.22768 86.0454 5.70078 86.0454 4.87426C86.0454 3.87211 85.3945 3.08692 83.6691 3.08692C82.9459 3.08692 81.9851 3.11792 81.5822 3.13858V10.3396ZM83.7518 7.24016C84.5473 7.24016 85.0122 7.55011 85.0122 8.15966C85.0122 8.84154 84.5473 9.20314 83.6898 9.20314C83.3282 9.20314 83.0286 9.17214 82.853 9.15148V7.24016H83.7518ZM83.6485 4.27504C84.3304 4.27504 84.7849 4.58498 84.7849 5.17388C84.7849 5.83509 84.2994 6.1347 83.7105 6.1347H82.853V4.30603C83.0803 4.28537 83.3592 4.27504 83.6485 4.27504Z"
                                            fill="#7D2AEB"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="footer-main__nav footer-nav">
                    <div class="footer-nav__item">
                        <div class="footer-nav-list__title">Поддержка</div>
                        <ul class="footer-nav-list">
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://telegram.me/author24_bot"
                                    target="_blank"
                                >
                                    Telegram
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://vk.com/author24official"
                                    target="_blank"
                                >
                                    Вконтакте
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="viber://pa?chatURI=author24"
                                    target="_blank"
                                >
                                    Viber
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a class="footer-nav-list__item-link"
                                   href="https://author24.ru/cdn-cgi/l/email-protection#96e5e3e6e6f9e4e2d6f7e3e2fef9e4a4a2b8e4e3">Email</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav__item">
                        <div class="footer-nav-list__title">Информация</div>
                        <ul class="footer-nav-list">
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://support.author24.ru/article/33901"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Оплата заказа
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://support.author24.ru/article/33902"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Оплата в рассрочку
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://support.author24.ru/article/7438"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Безопасная сделка
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://support.author24.ru/article/7412"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Комиссия
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/info/help/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Помощь
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/info/license/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Пользовательское соглашение
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/info/confidentiality/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Политика конфиденциальности
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav__item">
                        <div class="footer-nav-list__title">Основные направления</div>
                        <ul class="footer-nav-list">
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/experts/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Работа онлайн-экспертом
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/agency/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Агентствам
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.edugram.com/landing/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Партнерская программа
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/customer-partners/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Заработок для студентов
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://spravochnick.ru/"
                                >
                                    Справочник статей
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24shop.ru/"
                                >
                                    Магазин работ
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24referat.ru/"
                                >
                                    База рефератов
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav__item">
                        <div class="footer-nav-list__title">О компании</div>
                        <ul class="footer-nav-list">
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/s/otzyvy/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Отзывы об Автор24
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/authors/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Топ экспертов
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://selfhelp.author24.ru/"
                                >
                                    Психологическая помощь
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/team/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Вакансии
                                </a>
                            </li>
                            <li class="footer-nav-list__item">
                                <a
                                    class="footer-nav-list__item-link"
                                    href="https://author24.ru/contacts/?<?php if (empty($_GET['ref'])) {
                                        echo 'ref=' . $ref . '&';
                                    }
                                    echo $all_get_params; ?>"
                                >
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-sub">
        <div class="l-wrap">
            <div class="footer-sub__inner">
                <div class="footer-sub__copyright">© 2012 — 2022 Author24 Все права защищены</div>
                <div class="footer-sub-banks">
                    <div class="footer-sub-banks__title">Мы принимаем:</div>
                    <ul class="footer-sub-banks__list">
                        <li class="footer-sub-banks__list-item">
                            <img
                                class="footer-sub-banks__img"
                                src="img/payment-icon/mastercard.svg"
                                alt="MasterCard"
                            ></li>
                        <li class="footer-sub-banks__list-item">
                            <img class="footer-sub-banks__img"
                                 src="img/payment-icon/visa.svg"
                                 alt="VISA"
                            ></li>
                        <li class="footer-sub-banks__list-item">
                            <img class="footer-sub-banks__img"
                                 src="img/payment-icon/mir.svg"
                                 alt="МИР"
                            ></li>
                        <li class="footer-sub-banks__list-item">
                            <img class="footer-sub-banks__img"
                                 src="img/payment-icon/qiwi.svg"
                                 alt="Qiwi"
                            ></li>
                        <li class="footer-sub-banks__list-item">
                            <img class="footer-sub-banks__img"
                                 src="img/payment-icon/sbp.svg"
                                 alt="SBP"
                            ></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script data-cfasync="false" src="scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script>
    window.baseDomain = 'https://a24.biz/';
    window.socialAuthLink = {
        vk: 'https://oauth.vk.com/authorize?client_id=6418415&redirect_uri=https://a24.biz/auth/vk&response_type=code&display=popup&scope=email',
        fb: 'https://www.facebook.com/dialog/oauth?client_id=356424602502727&redirect_uri=https://a24.biz/auth/fb&response_type=code&scope=email',
        gp: 'https://accounts.google.com/o/oauth2/auth?client_id=293271209377-qa23icc3qmekbnjcb7gnavddg7dnneme.apps.googleusercontent.com&redirect_uri=https://a24.biz/auth/google&response_type=code&scope=https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile'
    };
</script>
<div class="signup" data-js="signup-wrapper" data-role="modal-wrapper">
    <div class="signup__desk">
        <svg class="signup__cross" data-js="close">
            <use href="./images/sprite.svg#cross"/>
        </svg>
        <div class="signup__title">
            Регистрация
            <span class="signup__titleCust chosen" data-js="signup-customer">как заказчик</span>
            <span class="signup__titlePerf" data-js="signup-performer">как автор</span>
        </div>
        <div class="signup__content">
            <div class="signup__role">
                <div class="signup__roleCustomer chosen" data-js="signup-role" data-role="customer"
                     data-ref-key="<?php echo $ref; ?>">
                    <div class="signup__roleCustomerIco"></div>
                    <span class="signup__roleTitle">Заказчик</span>
                </div>
                <div class="signup__rolePerformer" data-js="signup-role" data-role="performer"
                     data-ref-key="<?php echo $ref; ?>">
                    <div class="signup__rolePerformerIco"></div>
                    <span class="signup__roleTitle">Автор</span>
                </div>
            </div>

            <form class="signup__form" action="https://a24.biz/reg/customer/?<?php if (empty($_GET['ref'])) {
                echo 'ref=' . $ref . '&';
            }
            echo $all_get_params; ?>" onsubmit="ym(88597593,'reachGoal','valid_email')" method="post"
                  data-js="signup_form">
                <input type="hidden" name="refererKey" value="<?php echo $ref; ?>">
                <div class="signup__formTriangle" data-js="signup-triangle"></div>
                <div class="signup__field">
                    <svg class="signup__ico">
                        <use href="./images/sprite.svg#login"/>
                    </svg>
                    <input class="signup__input" type="text" name="nickname" maxlength="50" placeholder="Логин">
                    <div class="signup__nickTip" data-js="nick-tooltip">
                        Обращаем Ваше внимание - ЛОГИН (НИКНЕЙМ) является псевдонимом для работы на сайте и не должен
                        совпадать с любыми контактными данными пользователя, такими как ФИО, эл. почта, телефон и
                        другими.
                    </div>
                    <div class="signup__nickSuggestions" data-js="nick-suggestions-wrapper">
                        Такой ник уже занят. Придумайте новый или выберите из предложенных вариантов:
                        <div class="signup__nickSuggestionsList" data-js="nick-suggestions"></div>
                    </div>
                </div>
                <div class="signup__field">
                    <svg class="signup__ico">
                        <use href="./images/sprite.svg#mail"/>
                    </svg>
                    <input class="signup__input" type="email" name="email" placeholder="Email">
                </div>
                <div class="signup__field">
                    <svg class="signup__ico">
                        <use href="./images/sprite.svg#password"/>
                    </svg>


                    <input type="text" name="promocode" placeholder="Введи промокод" value="<?php echo $promo; ?>"
                           hidden>

                    <input
                        class="signup__input"
                        type="password"
                        name="password"
                        maxlength="20"
                        id="password"
                        placeholder="Пароль"
                    >
                </div>
                <div class="signup__field">
                    <svg class="signup__ico">
                        <use href="./images/sprite.svg#password"/>
                    </svg>
                    <input
                        class="signup__input"
                        type="password"
                        name="password_confirm"
                        maxlength="20"
                        data-js="pass_check_confirm"
                        placeholder="Пароль повторно"
                    >
                </div>
                <div class="signup__policy">
                    <input class="signup__policyInput" type="checkbox" name="license" checked>
                    <svg class="signup__policyIco">
                        <use href="./images/sprite.svg#policy-check"/>
                    </svg>
                    <span>Я принимаю <a href="https://a24.biz/info/license/"
                                        target="_blank">пользовательское соглашение</a></span>
                </div>
                <button class="signup__button" type="submit" data-js="signup_send">
                    зарегистрироваться
                </button>
            </form>
        </div>
        <div class="signup__social">
            <div class="signSocial__title">Авторизуйтесь через соцсети</div>
            <div class="signSocial__btns">
                <div class="signSocial__btn" data-js="vk-login">
                    <svg class="signSocial__ico">
                        <use href="./images/sprite.svg#vk"/>
                    </svg>
                </div>
                <div class="signSocial__btn" data-js="gp-login">
                    <svg class="signSocial__ico">
                        <use href="./images/sprite.svg#ggl"/>
                    </svg>
                </div>
            </div>
        </div>
        <a class="signup__deskBottom" href="https://a24.biz/">
            Уже зарегистрированы?
            <span>войти</span>
        </a>
    </div>
</div>
<div class="popup-wrapper" id="abPopup" data-js="ab-popup-wrapper" data-role="modal-wrapper">
    <div class="popup popup-1">
        <svg class="popup__cross" data-js="close">
            <use href="./images/sprite.svg#cross"/>
        </svg>
        <div class="popup-1__inner">
            <div class="popup-1__row">
                <!--                 <div class="popup-1__col-2"> -->
                <div class="popup-1__col-1">
                    <div class="popup-1__item">
                        <div class="popup-1__circle">
                            <div class="popup-1__circle-i">✍️</div>
                        </div>
                        <div class="popup-1__title">Узнать стоимость</div>
                    </div>
                </div>
                <div class="popup-1__col-1">
                    <div class="popup-1__info">
                        <div class="popup-1__info-text">
                            Укажите email, и мы пришлем точную стоимость указаной вами работы
                            <span id="popup-theme"></span>
                        </div>
                    </div>
                    <form action="https://a24.biz/order/unregOrderShortForm/?<?php if (empty($_GET['ref'])) {
                        echo 'ref=' . $ref . '&';
                    }
                    echo $all_get_params; ?>" method="post" onsubmit="ym(88597593,'reachGoal','valid_email')"
                          class="popup-1__form" novalidate="novalidate">
                        <input type="hidden" name="pageId" value="65">
                        <input type="hidden" name="type_id" value="2">
                        <input type="hidden" name="category_id" value="0">
                        <input type="hidden" name="discountForUser" value="true">
                        <input type="hidden" name="title">


                        <input type="text" name="promocode" placeholder="Введи промокод" value="<?php echo $promo; ?>"
                               hidden>


                        <div class="popup-1__group-input">
                            <input class="popup-1__form-input" placeholder="Ваш email" name="email">
                        </div>
                        <button class="popup-1__form-btn btn-big btn-big--min">рассчитать стоимость работы</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/wheel.js"></script>
<script src="js/ablanding.bundle.js@7142"></script>

<div style="visibility: hidden; overflow: hidden; position: absolute; left:-9999px; width: 0; height: 0"><img
        src="https://a24.biz/pixel/?ref=662eeeb9c3101791" height="1" width="1"/></div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(88597593, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/88597593" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>