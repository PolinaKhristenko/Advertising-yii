<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Blog';
?>  

<header>
    <div class="container">
        <div class="_header__body">
            <a class="header__burger show768">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="2" fill="#272727"/>
                <rect y="11" width="24" height="2" fill="#272727"/>
                <rect y="22" width="24" height="2" fill="#FF6969"/>
                </svg>
            </a>
            <nav class="_nav">
                <ul class="_nav__body">
                    <li><a class="_nav__item" href="<?= Url::to('/site/index') ?>">Алгоритм</a></li>
                    <li><a class="_nav__item">Бизнес - партнеры</a></li>
                    <li><a class="_nav__item">Отзывы</a></li>
                    <li><a class="_nav__item">Сравнение</a></li>
                    <li><a class="_nav__item active" href="/">Блог</a></li>
                </ul>
            </nav>
            <div class='_header__audit'>
                <a class="modal__trigger"><h3 class="header__audit-txt">бесплатный аудит</h3></a>
            </div>
        </div>
    </div>
</header>

<main class="main">
    <div class="container">
            <section class="blog">
                <div class="_blog__header">
                    <h1 class="title" style="margin-right: 30px;">Блог</h1>
                    <div class="title-line"></div>
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
            </section>
        </div>

    
    <div class="container">
        <div class="blog__pages">
            <a href="" class="blog__arrow-left">

            </a>

            <ul class="blog__pages-ul">
                <li><a href="" class="blog__pages-dot pages-active"></a></li>
                <li><a href="" class="blog__pages-dot"></a></li>
                <li><a href="" class="blog__pages-dot"></a></li>
                <li><a href="" class="blog__pages-dot"></a></li>
            </ul>

            <a href="" class="blog__arrow-right">

            </a>
        </div>
    </div>
</main>
