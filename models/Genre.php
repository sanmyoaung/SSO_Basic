<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property string $id
 * @property string $genre_eng
 * @property string $genre_mm
 *
 * @property Movie[] $movies
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_eng', 'genre_mm'], 'required'],
            [['genre_eng'], 'string', 'max' => 40],
            [['genre_mm'], 'string', 'max' => 80],
            [['genre_eng'], 'unique'],
            [['genre_mm'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'genre_eng' => Yii::t('app', 'Genre Eng'),
            'genre_mm' => Yii::t('app', 'Genre Mm'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movie::className(), ['genre_id' => 'id']);
    }
}
