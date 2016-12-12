<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserList */

$this->title = 'Create User List';
$this->params['breadcrumbs'][] = ['label' => 'User Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
