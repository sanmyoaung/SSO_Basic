<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Movies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_en',
            'name_mm',
            'genre_id',
            'rating_id',
            'duration',
            'released',
            'awards_eng:ntext',
            'awards_mm:ntext',
            'storyline_eng:ntext',
            'storyline_mm:ntext',
            'language_eng',
            'language_mm',
            'director_eng',
            'director_mm',
            'writer_eng',
            'writer_mm',
            'cast_eng:ntext',
            'cast_mm:ntext',
            'status',
            'poster',
            'trailer',
            'fullvideo',
        ],
    ]) ?>

</div>
