<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rating".
 *
 * @property string $id
 * @property string $rating_eng
 * @property string $rating_mm
 *
 * @property Movie[] $movies
 */
class Rating extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rating_eng', 'rating_mm'], 'required'],
            [['rating_eng'], 'string', 'max' => 40],
            [['rating_mm'], 'string', 'max' => 80],
            [['rating_eng'], 'unique'],
            [['rating_mm'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'rating_eng' => Yii::t('app', 'Rating Eng'),
            'rating_mm' => Yii::t('app', 'Rating Mm'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movie::className(), ['rating_id' => 'id']);
    }
}
