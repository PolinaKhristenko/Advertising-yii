<?php

/** @var yii\web\View $this */

use SebastianBergmann\CodeCoverage\Util;
use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile("//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
$this->registerCssFile("//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css");

$this->registerJsFile("//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", ['depends' => [\yii\web\JqueryAsset::class]]);

$js =<<< JS

$(document).ready(function() {

    
    // Sliders

    $('.slider1').slick({
        centerMode: true,
        variableWidth: true,
        slidesToShow: 1,
        dots: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                    }
                }
            ],
    });

    $('.slider2').slick({
        slidesToShow: 1,
        dots: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                    }
                },
            ],
    });

});

JS;

$this->registerJs($js);

$this->title = 'Home';
?>



    <header class="header">
        <div class="header__mask">
            <div class='container'>
                <section class="header__body">
                    <a class="header__burger show768">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="24" height="2" fill="white"/>
                        <rect y="11" width="24" height="2" fill="white"/>
                        <rect y="22" width="24" height="2" fill="#FF6969"/>
                        </svg>
                    </a>
                    <div class='header__left'>
                        <img src="<?= Url::to(['src/logo.svg'])?>" style="width: 456px; height: 548px" alt="Декоративный узор" />
                    </div>
                    <div class="header__right">
                        <img src="<?= Url::to(['src/decoration-mobile.svg']) ?>" class="header__modile-decor show576" />
                        <div class='header__audit'>
                            <a class="modal__trigger"><h3 class="header__audit-txt">бесплатный аудит</h3></a>
                        </div>
                        <nav class="nav">
                            <ul class="nav__body">
                                <li><a class="nav__item active">Алгоритм</a></li>
                                <li><a class="nav__item">Бизнес - партнеры</a></li>
                                <li><a class="nav__item">Отзывы</a></li>
                                <li><a class="nav__item">Сравнение</a></li>
                                <li><a class="nav__item" href="<?= Url::to('/site/blog') ?>">Блог</a></li>
                            </ul>
                            <div class="nav__lang">
                                <a style="color: #FF6969;
                                    border-right: 1px solid #fff;
                                    padding-right: 5px;">ru</a>
                                <a style=" padding-left: 5px">eng</a>
                            </div>
                        </nav>
                        <div class='title__body'>
                            <h1 class="header__title">продвижение через рекомендации <br> Key Opinion Leaders</h1>
                            <h3 class="header__subtitle">наш конкурент - это маркетинг, а не другие АГЕНТСТВА</h3>
                        </div>
                    </div>
                    <div class="header__decoration">
                        <img src="<?= Url::to(['src/decoration.svg']) ?>" alt="Декоративный узор" />
                    </div>
                </section>
            </div>
        </div>
    </header>

    
    <main class="main">
        <div class="container">
            <section class="numbers">
                <div class="numbers__body">
                    <div class="numbers__fade show576"><img src="<?= Url::to(['src/little-fade.svg'])?>" alt="Высветленная область"/></div>
                    <div class="numbers-item up" >
                        <h3 class="numbers-title">3000+</h3>
                        <div class="red-line"></div>
                        <p class="numbers-sub">лидеров мнений, готовых порекомендовать продукт своей аудитории</p>
                    </div>

                    <div class="numbers-item down">
                        <h3 class="numbers-title">89%</h3>
                        <div class="red-line"></div>
                        <p class="numbers-sub">покупателей доверяют отзывам принимая решение о покупке</p>
                    </div>

                    <div class="numbers-item up">
                        <h3 class="numbers-title">25 млн+</h3>
                        <div class="red-line"></div>
                        <p class="numbers-sub">потенциальных юзеров, инвесторов, адвокатов бренда</p>
                    </div>

                    <div class="numbers-item down">
                        <h3 class="numbers-title">7х</h3>
                        <div class="red-line"></div>
                        <p class="numbers-sub">окупаемость influencer marketing выше, чем в традиционной рекламе</p>
                    </div>
                </div>
            </section>

            <section class="algorithm">

                <div class="algorithm__title">
                    <div class="title-line hide576" style="margin-right: 32px"></div>
                    <h2 class="title">Алгоритм</h2>
                    <div class="title-line show576" style="margin-left: 25px"></div>

                    
                </div>

                <div class="algorithm__body">

                    <div class="algorithm__item">
                        <p class="algorithm__num">1</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL plan</h3>
                                <p class="algorithm__describe">
                                разбираем ваш бизнес, ставим цели рекламной кампании, утверждаем бюджет и показатели
                                </p>
                        </div>
                    </div>

                    <div class="algorithm__item">
                        <p class="algorithm__num">2</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL benchmark</h3>
                                <p class="algorithm__describe">
                                вручную анализируем аккаунты влияния для максимизации ROI от каждого вложенного доллара в продвижение 
                                </p>
                            </div>
                    </div>

                    <div class="algorithm__item">
                        <p class="algorithm__num">3</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL communication</h3>
                                <p class="algorithm__describe">
                                коммуницируем в доверительной атмосфере с KOLs (создаём позитивный имидж клиента), 
                                утверждаем оптимальные форматы упоминаний и сроки
                                </p>
                            </div>
                    </div>


                    <div class="algorithm__item">
                        <p class="algorithm__num">4</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL map</h3>
                                <p class="algorithm__describe">
                                вы получаете наиболее релевантных Лидеров Мнений для вашего сегмента рынка в Telegram, Twitter, YouTube, Instagram, TikTok
                                </p>
                            </div>
                    </div>


                    <div class="algorithm__item">
                        <p class="algorithm__num">5</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL content</h3>
                                <p class="algorithm__describe">
                                нейрокопирайтинг (создаём убедительный рекламный контент - текст, графика, анимация)
                                </p>
                            </div>
                    </div>

                    <div class="algorithm__item">
                        <p class="algorithm__num">6</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL management</h3>
                                <p class="algorithm__describe">
                                контролируем своевременный выход рекламных интеграций
                                </p>
                            </div>
                    </div>

                    <div class="algorithm__item">
                        <p class="algorithm__num">7</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL report</h3>
                                <p class="algorithm__describe">
                                предоставляем отчёт об охвате, активностях и переходах на целевую страницу
                                </p>
                            </div>
                    </div>

                    <div class="algorithm__item">
                        <p class="algorithm__num">8</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL metrics</h3>
                                <p class="algorithm__describe">
                                оцениваем эффективность рекламной кампании
                                </p>
                            </div>
                    </div>

                    <div class="algorithm__item">
                        <p class="algorithm__num">9</p>
                            <div class="algorithm__txt">
                                <h3 class="algorithm__sub">KOL data</h3>
                                <p class="algorithm__describe">
                                выявляем точки роста на базе полученных данных для дальнейшего маркетинга (эффективные месседжи, блоги, платформы)
                                </p>
                            </div>
                    </div>
                </div>
            </section>

            <section class="partners">
                <div class="partners__title">
                    <div class="title-line hide576" style="margin-right: 20px"></div>
                    <h2 class="title partners__title-extra">Партнеры</h2>
                    <div class="title-line show576" style="margin-left: 25px"></div>
                </div>

                <div class="partners__body">

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner1.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner2.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner3.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner4.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner5.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner6.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>
                        
                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner7.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner8.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner9.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner10.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner11.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner12.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner13.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner14.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner15.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner16.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                    <div class="partners__item">
                        <img src="<?= Url::to(['src/partner17.svg']) ?>" alt="Бизнес-партнёр" />
                    </div>

                </div>
            </section>
        </div>

            <section class="cases">
                <div class="cases__title">
                    <div class="title-lines-2 hide576" style="margin:0 54px;"></div>
                    <h2 class="title">Кейсы</h2>
                    <div class="title-lines-2 hide576" style="margin:0 54px;"></div>
                    <div class="title-line show576" style="margin-left: 25px"></div>
                    
                </div>

                <img class="slider__shadow-left" src="<?= Url::to(['src/slider-shadow-left.svg']) ?>" alt="Высветленная часть" />
                <img class="slider__shadow-right" src="<?= Url::to(['src/slider-shadow-right.svg']) ?>" alt="Высветленная часть" />

                <div class="slider1">
                    <div class="cases__body">
                    <img class="slider__icon" src="<?= Url::to(['src/slider-icon.svg']) ?>" alt="Логотип" />
                        <h3 class="cases__sub">AliumSwap</h3>
                        <p class="cases__txt">Decentralized AMM Exchange with multi-blockchain option and NFTs</p>

                        <div class="cases__statictics">
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+46% подписчиков</p>
                            </div>
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+1602 целевых перехода на сайт</p>
                            </div>
                        </div>

                        <div class="cases__down">
                            <div class="cases__down-item">
                                <p class="cases__down-sub">сроки</p>
                                <p class="cases__down-txt">9 дней</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Услуга</p>
                                <p class="cases__down-txt">Influencer Marketing</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Цель</p>
                                <p class="cases__down-txt">Привлечь инвесторов к покупке токена на пресейле</p>
                            </div>
                        </div>
                    </div>

                    <div class="cases__body">
                    <img class="slider__icon" src="<?= Url::to(['src/slider-icon.svg']) ?>" alt="Логотип" />
                        <h3 class="cases__sub">AliumSwap</h3>
                        <p class="cases__txt">Decentralized AMM Exchange with multi-blockchain option and NFTs</p>

                        <div class="cases__statictics">
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+46% подписчиков</p>
                            </div>
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+1602 целевых перехода на сайт</p>
                            </div>
                        </div>

                        <div class="cases__down">
                            <div class="cases__down-item">
                                <p class="cases__down-sub">сроки</p>
                                <p class="cases__down-txt">9 дней</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Услуга</p>
                                <p class="cases__down-txt">Influencer Marketing</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Цель</p>
                                <p class="cases__down-txt">Привлечь инвесторов к покупке токена на пресейле</p>
                            </div>
                        </div>
                    </div>

                    <div class="cases__body">
                        <h3 class="cases__sub">AliumSwap</h3>
                        <img class="slider__icon" src="<?= Url::to(['src/slider-icon.svg']) ?>" alt="Логотип" />
                        <p class="cases__txt">Decentralized AMM Exchange with multi-blockchain option and NFTs</p>

                        <div class="cases__statictics">
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+46% подписчиков</p>
                            </div>
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+1602 целевых перехода на сайт</p>
                            </div>
                        </div>

                        <div class="cases__down">
                            <div class="cases__down-item">
                                <p class="cases__down-sub">сроки</p>
                                <p class="cases__down-txt">9 дней</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Услуга</p>
                                <p class="cases__down-txt">Influencer Marketing</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Цель</p>
                                <p class="cases__down-txt">Привлечь инвесторов к покупке токена на пресейле</p>
                            </div>
                        </div>
                    </div>


                    <div class="cases__body">
                        <img class="slider__icon" src="<?= Url::to(['src/slider-icon.svg']) ?>" alt="Логотип" />
                        <h3 class="cases__sub">AliumSwap</h3>
                        <p class="cases__txt">Decentralized AMM Exchange with multi-blockchain option and NFTs</p>

                        <div class="cases__statictics">
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+46% подписчиков</p>
                            </div>
                            <div class="cases__statictics-item">
                                <img src="<?= Url::to(['src/arrow-green.svg']) ?>" alt="Стрелка вверх" />
                                <p>+1602 целевых перехода на сайт</p>
                            </div>
                        </div>

                        <div class="cases__down">
                            <div class="cases__down-item">
                                <p class="cases__down-sub">сроки</p>
                                <p class="cases__down-txt">9 дней</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Услуга</p>
                                <p class="cases__down-txt">Influencer Marketing</p>
                            </div>
                            <div class="cases__down-item">
                                <p class="cases__down-sub">Цель</p>
                                <p class="cases__down-txt">Привлечь инвесторов к покупке токена на пресейле</p>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

        <div class="container">
            <section class="reviews">
                    <div class="reviews__title">
                        <h2 class="title">отзывы</h2>
                        <div class="title-line" style="margin-left: 30px;"></div>
                    </div>
                <div class="slider2">
                    <div class="reviews__body">
                        <p class="reviews__txt">
                        I would definitely recommend this contractor, as I have worked with him in the past and he proven to be an expert in lead generating and content creation. He obviously has solid negotiation skills and is adept in digital marketing, since he managed to get me the best rates. And since he coordinated everyone involved for me, I reckon his team leading skills are also up to par.
                        </p>
                        <div class="reviews__person">
                            <img class="reviews__img" src="<?= Url::to(['src/person-review.png']) ?>" alt="Фото человека, оставившего отзыв" />
                            <div class="reviews__info">
                                <p class="review__name">Andy Fox</p>
                                <p class="review__who">Founder of X10.Agency. Worked with 50+ blockchain/DeFi/STO projects. CBDO/CMO. Awarded as the Author of The Year at HackerNoon (Bitcoin category)</p>
                            </div>
                        </div>
                    </div>

                    <div class="reviews__body">
                        <p class="reviews__txt">
                        I would definitely recommend this contractor, as I have worked with him in the past and he proven to be an expert in lead generating and content creation. He obviously has solid negotiation skills and is adept in digital marketing, since he managed to get me the best rates. And since he coordinated everyone involved for me, I reckon his team leading skills are also up to par.
                        </p>
                        <div class="reviews__person">
                            <img class="reviews__img" src="<?= Url::to(['src/person-review.png']) ?>" alt="Фото человека, оставившего отзыв" />
                            <div class="reviews__info">
                                <p class="review__name">Andy Fox</p>
                                <p class="review__who">Founder of X10.Agency. Worked with 50+ blockchain/DeFi/STO projects. CBDO/CMO. Awarded as the Author of The Year at HackerNoon (Bitcoin category)</p>
                            </div>
                        </div>
                    </div>

                    <div class="reviews__body">
                        <p class="reviews__txt">
                        I would definitely recommend this contractor, as I have worked with him in the past and he proven to be an expert in lead generating and content creation. He obviously has solid negotiation skills and is adept in digital marketing, since he managed to get me the best rates. And since he coordinated everyone involved for me, I reckon his team leading skills are also up to par.
                        </p>
                        <div class="reviews__person">
                            <img class="reviews__img" src="<?= Url::to(['src/person-review.png']) ?>" alt="Фото человека, оставившего отзыв" />
                            <div class="reviews__info">
                                <p class="review__name">Andy Fox</p>
                                <p class="review__who">Founder of X10.Agency. Worked with 50+ blockchain/DeFi/STO projects. CBDO/CMO. Awarded as the Author of The Year at HackerNoon (Bitcoin category)</p>
                            </div>
                        </div>
                    </div>

                    <div class="reviews__body">
                        <p class="reviews__txt">
                        I would definitely recommend this contractor, as I have worked with him in the past and he proven to be an expert in lead generating and content creation. He obviously has solid negotiation skills and is adept in digital marketing, since he managed to get me the best rates. And since he coordinated everyone involved for me, I reckon his team leading skills are also up to par.
                        </p>
                        <div class="reviews__person">
                            <img class="reviews__img" src="<?= Url::to(['src/person-review.png']) ?>" alt="Фото человека, оставившего отзыв" />
                            <div class="reviews__info">
                                <p class="review__name">Andy Fox</p>
                                <p class="review__who">Founder of X10.Agency. Worked with 50+ blockchain/DeFi/STO projects. CBDO/CMO. Awarded as the Author of The Year at HackerNoon (Bitcoin category)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section class="compare">
                <div class="compare__title">
                    <div class="title-line hide576" style="margin-right: 30px;"></div>
                    <h2 class="title">Сравнение</h2>
                    <div class="title-line show576" style="margin-left: 25px"></div>
                </div>

                <div class="compare__body">
                    <img class="compare__img-3" src="<?= Url::to(['src/decoration-mobile-small.svg'])?>" alt="Декоративный узор" />
                    <div class="compare__col1">
                        <img class="compare__img-1" src="<?= Url::to(['src/decoration2.svg']) ?>" alt="Декоративный узор" />
                        <div class="compare__item back1">
                            <h5 class="compare__sub">Ваш сотрудник</h5>
                            <ul class="compare__txt">
                                <li class="compare__point">непрофильность</li>
                                <li class="compare__point">нет опыта</li>
                                <li class="compare__point">плохое качество аккаунтов</li>
                            </ul>
                        </div>
                    </div>

                    <div class="compare__col2">
                        <div class="compare__up">
                            <div class="compare__item back2">
                                <h5 class="compare__sub">фрилансер</h5>
                                <ul class="compare__txt">
                                    <li class="compare__point">многозадачность</li>
                                    <li class="compare__point">нет знаний/инструментария</li>
                                    <li class="compare__point">слабая мотивация</li>
                                </ul>
                            </div>

                            <div class="compare__item back3" >
                                <h5 class="compare__sub">платформа</h5>
                                <ul class="compare__txt">
                                    <li class="compare__point">большое количество ботов</li>
                                    <li class="compare__point">сложный интерфейс</li>
                                    <li class="compare__point">риск слива бюджета</li>
                                </ul>
                            </div>

                        </div>
                        <div class="compare__down">
                            <h5 class="compare__down-title">
                            KOL.PROMO
                            </h5>

                            <p class="compare__down-txt exclamation">
                            предоставляем результат, о котором договорились
                            </p>
                            
                            <br>

                            <p class="compare__down-txt">
                            головную боль (процесс привлечения ваших новых клиентов,
                            время, платный софт, люди) - оставьте нам
                            </p>

                            <img class="compare__img-2" src="<?= Url::to(['src/decoration3.svg']) ?>" alt="Декоративный узор" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="blog">
                <div class="blog__header">
                    <div class="title-lines-2 hide576" style="margin: 0 50px;"></div>
                    <h2 class="title">Блог</h2>
                    <div class="title-lines-2 hide576" style="margin: 0 50px;"></div>
                    <div class="title-line show576" style="margin-left: 25px"></div>
                    
                </div>

                <div class="blog__posts">
                
                <?php foreach ($blog as $k => $v): ?>

                    <div class="blog__body">
                        <div class="blog__item">
                            <a href="<?= Url::to(['article', 'link' => $v['link']])?>" class="blog__img"><img src="<?= Url::to([$v['image']]) ?>" alt="Фотография к посту"/></a>
                            <h3 class="blog__title"><?= $v['title'] ?></h3> 
                            <p class="blog__txt"><?= $v['sub_title'] ?></p>
                            <a class="blog__open" href="<?= Url::to(['article', 'link' => $v['link']])?>" > <!-- Ссылка  -->
                                <p class="blog__open-txt">Открыть пост</p>
                                <img class="blog__open-img" src="<?= Url::to(['src/arrow-blog.svg'])?>" alt="Стрелка для перехода к посту"/>
                            </a>
                        </div>
                    </div>


                    <?php endforeach; ?>
                </div>


                <a class="blog__all" href="<?= Url::to('/site/blog') ?>">
                <p class="blog__all-txt">Посмотреть все</p>
                </a>
            </section>
        </div>
    </main>