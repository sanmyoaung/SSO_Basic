<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_mm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'released')->textInput() ?>

    <?= $form->field($model, 'awards_eng')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'awards_mm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'storyline_eng')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'storyline_mm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'language_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_mm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'director_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'director_mm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'writer_eng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'writer_mm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cast_eng')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cast_mm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'poster')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trailer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullvideo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
