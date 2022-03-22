<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;




AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body>
    <div class="wrapper">
        <?php $this->beginBody() ?>
        <?= $content ?>
        <?php $this->endBody() ?>   


        <!-- Бургер навигация для всех страниц -->


        <section class="nav__mobile">
            <a class="nav__close">&times;</a>
            <div class="nav__mobile-body">
                <ul class="nav__mobile-list">
                    <li><a class="mobile__item" href="<?= Url::to('/site/index') ?>">Алгоритм</a></li>
                    <li><a class="mobile__item">Бизнес - партнеры</a></li>
                    <li><a class="mobile__item">Отзывы</a></li>
                    <li><a class="mobile__item">Сравнение</a></li>
                    <li><a class="mobile__item" href="<?= Url::to('/site/blog') ?>">Блог</a></li>
                </ul>
            </div>
        </section>


        <!-- Футер форма -->
        
        <?php if(Yii::$app->controller->action->id !== 'article'):?>
            <div class="container">
                <div id="form1__message"></div>
                <footer class="footer">
                    <div class="footer__left">
                        <h2 class="footer__title">бесплатный аудит социальных сетей за 9 минут</h2>
                        <p class="footer__txt">проведите простой тест-драйв нашей работы и получите ценные советы по продвижению вашего бренда</p>
                    </div>

                    <div class="footer__right">
                        <?= Html::beginForm('', 'post', ['class' => 'footer__form', 'id' => 'form1']) ?>
                            <div class="footer__up">
                                <input type="text" placeholder="название проекта" name="project-name" required/>
                                <input type="phone" placeholder="+7(999)999-99-99" name="phone" required/>
                            </div>
                            <div class="footer__down">
                                <input type="email" placeholder="e-mail" name="email" required/>
                                <button class="footer__btn" type="submit" >Получить</button>
                            </div>
                        <?= Html::endForm();?>
                    </div>
                </footer>
            </div>

        <?php endif ?>


        <!-- Модальное окно форма -->

        <section class="modal">
            <div class="modal__window">
                <a class="modal__close">&times;</a>
                <h5 class="subtitle">Для получения бесплатного аудита, заполните, пожалуйста, Ваши контактные данные</h5>

                <?= Html::beginForm('', 'post', ['class' => 'modal__form', 'id' => 'form2']) ?>
                            <label for="phone">Номер телефона:</label>
                            <input id="phone" type="phone" placeholder="+7(999)999-99-99" name="phone" required/>

                            <label for="name">Имя:</label>
                            <input id="name" type="text" placeholder="Иванов Иван Иванович" name="name" required/>

                            <label for="email">Электронная почта:</label>
                            <input type="email" placeholder="e-mail" name="email" required/>

                            <button class="modal__btn" type="submit">Получить</button>
                <?= Html::endForm();?>
            </div>

            <div class="thanks__modal">
                <a class="modal__close">&times;</a>
                    <h5 class="subtitle white">Благодарим за заявку!</h5>
                    <p class="thanks__txt">Ожидайте звонка</p>
                    <img src="<?= Url::to(['src/logo.svg']) ?>" alt="Логотип" height="300px"/>
                </div>
        </section>
    </div>
</body>
</html>
<?php $this->endPage();
