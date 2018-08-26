<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Movies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Movie'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_en',
            'name_mm',
            'genre_id',
            'rating_id',
            //'duration',
            //'released',
            //'awards_eng:ntext',
            //'awards_mm:ntext',
            //'storyline_eng:ntext',
            //'storyline_mm:ntext',
            //'language_eng',
            //'language_mm',
            //'director_eng',
            //'director_mm',
            //'writer_eng',
            //'writer_mm',
            //'cast_eng:ntext',
            //'cast_mm:ntext',
            //'status',
            //'poster',
            //'trailer',
            //'fullvideo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
