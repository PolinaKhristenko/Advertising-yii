<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Article';
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
                    <li><a class="_nav__item active" href="<?= Url::to('/site/blog')?>"> Блог</a></li>
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
        <h1 class="article__title"><?= $article['title']?></h1>

        <section class="article">
            <div class="article__body">
                <img class="article__img" src="<?= Url::to([$article['image']])?>" />
                <p class="article__txt"><?= $article['content']?></p>

                    <div class="article__arrows">
                        <a class="article__arrow">
                            <img src="<?= Url::to(['src/article-arrow-left.svg']) ?>" alt="Стрелка влево" />
                        </a>

                        <a class="article__arrow">
                            <img src="<?= Url::to(['src/article-arrow-right.svg']) ?>" alt="Стрелка влево" />
                        </a>
                    </div>
            </div>

            <div class="article__others">
                <h5 class="article__others-title">Другие посты</h5>

                <?php foreach ($blog as $k => $v): ?>
                    <?php if ($article['id'] !== $v['id']): ?>
                        <div class="blog__body">
                            <div class="blog__item">
                                <a href="<?= Url::to(['article', 'link' => $v['link']])?>" class="blog__img"><img src="<?= Url::to([$v['image']]) ?>" alt="Фотография к посту"/></a>
                                <h3 class="blog__title"><?= $v['title'] ?></h3> 
                                <p class="blog__txt"><?= $v['sub_title'] ?></p>
                                <a class="blog__open" href="<?= Url::to(['article', 'link' => $v['link']])?>" > 
                                    <p class="blog__open-txt">Открыть пост</p>
                                    <img class="blog__open-img" src="<?= Url::to(['src/arrow-blog.svg'])?>" alt="Стрелка для перехода к посту"/>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>


<footer>

</footer>



