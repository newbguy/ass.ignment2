<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-list-form container">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="col-md-6">

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="col-md-3">

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="col-md-3">

    <?= $form->field($model, 'dob')->textInput()->widget(\yii\jui\DatePicker::classname()) ?>
    </div>
    
    <div class="col-md-6">

    <?= $form->field($model, 'experience')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="col-md-6">

    <?= $form->field($model, 'industry')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="col-md-6">

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'about')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'pic')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'ptitle')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'clevel')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'comlevel')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'olevel')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'jlevel')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'phone')->textInput() ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="form-group col-md-12">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-block btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
