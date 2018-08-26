<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movie".
 *
 * @property string $id
 * @property string $name_en
 * @property string $name_mm
 * @property string $genre_id
 * @property string $rating_id
 * @property int $duration
 * @property string $released
 * @property string $awards_eng
 * @property string $awards_mm
 * @property string $storyline_eng
 * @property string $storyline_mm
 * @property string $language_eng
 * @property string $language_mm
 * @property string $director_eng
 * @property string $director_mm
 * @property string $writer_eng
 * @property string $writer_mm
 * @property string $cast_eng
 * @property string $cast_mm
 * @property int $status
 * @property string $poster
 * @property string $trailer
 * @property string $fullvideo
 *
 * @property Genre $genre
 * @property Rating $rating
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_en', 'name_mm', 'genre_id', 'rating_id', 'duration', 'awards_eng', 'awards_mm', 'storyline_eng', 'storyline_mm', 'language_eng', 'language_mm', 'director_eng', 'director_mm', 'writer_eng', 'writer_mm', 'cast_eng', 'cast_mm', 'status', 'poster', 'trailer', 'fullvideo'], 'required'],
            [['genre_id', 'rating_id', 'duration', 'status'], 'integer'],
            [['released'], 'safe'],
            [['awards_eng', 'awards_mm', 'storyline_eng', 'storyline_mm', 'cast_eng', 'cast_mm'], 'string'],
            [['name_en', 'language_eng', 'language_mm', 'director_eng', 'director_mm', 'writer_eng', 'writer_mm'], 'string', 'max' => 80],
            [['name_mm', 'poster', 'trailer', 'fullvideo'], 'string', 'max' => 255],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
            [['rating_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rating::className(), 'targetAttribute' => ['rating_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_mm' => Yii::t('app', 'Name Mm'),
            'genre_id' => Yii::t('app', 'Genre ID'),
            'rating_id' => Yii::t('app', 'Rating ID'),
            'duration' => Yii::t('app', 'Duration'),
            'released' => Yii::t('app', 'Released'),
            'awards_eng' => Yii::t('app', 'Awards Eng'),
            'awards_mm' => Yii::t('app', 'Awards Mm'),
            'storyline_eng' => Yii::t('app', 'Storyline Eng'),
            'storyline_mm' => Yii::t('app', 'Storyline Mm'),
            'language_eng' => Yii::t('app', 'Language Eng'),
            'language_mm' => Yii::t('app', 'Language Mm'),
            'director_eng' => Yii::t('app', 'Director Eng'),
            'director_mm' => Yii::t('app', 'Director Mm'),
            'writer_eng' => Yii::t('app', 'Writer Eng'),
            'writer_mm' => Yii::t('app', 'Writer Mm'),
            'cast_eng' => Yii::t('app', 'Cast Eng'),
            'cast_mm' => Yii::t('app', 'Cast Mm'),
            'status' => Yii::t('app', 'Status'),
            'poster' => Yii::t('app', 'Poster'),
            'trailer' => Yii::t('app', 'Trailer'),
            'fullvideo' => Yii::t('app', 'Fullvideo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRating()
    {
        return $this->hasOne(Rating::className(), ['id' => 'rating_id']);
    }
}
