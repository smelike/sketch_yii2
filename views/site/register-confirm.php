<?php
use yii\helpers\Html;
use yii\bootstrap\Alert;
?>
<?= Alert::widget([
    'options' => [
        'class' => 'alert-info'
    ],
    'body' => 'Register Successfully!'
])?>
<!-- 
<div class="container">
    <h2>Congrats, your account has register successfully.</h2>
    <div>Name:<span><?= Html::encode($model->name) ?></span></div>
    <div>Email:<span><?= Html::encode($model->email) ?></span></div>
</div> -->