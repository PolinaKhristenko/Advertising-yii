<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id ID
 * @property string $title Заголовок статьи
 * @property string $link Ссылка на статью
 * @property string $sub_title Подзаголовок статьи
 * @property string $image Изображение статьи
 * @property string $content Контент статьи
 * @property string $date Дата создания статьи
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'link', 'sub_title', 'image', 'content'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['title', 'link', 'image'], 'string', 'max' => 255],
            [['sub_title'], 'string', 'max' => 1023],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок статьи',
            'link' => 'Ссылка на статью',
            'sub_title' => 'Подзаголовок статьи',
            'image' => 'Изображение статьи',
            'content' => 'Контент статьи',
            'date' => 'Дата создания статьи',
        ];
    }
}
