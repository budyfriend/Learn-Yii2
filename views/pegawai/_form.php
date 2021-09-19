<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'jenis_kelamin')->dropDownList(
        ['male' => 'Laki-laki', 'female' => 'Perempuan']
    ); ?>

    <?php // $form->field($model, 'id_jabatan')->textInput() 
    ?>

    <?php
    $dataPost = ArrayHelper::map(\app\models\Jabatan::find()
        ->asArray()
        ->all(), 'id_jabatan', 'jabatan');

    echo $form->field($model, 'id_jabatan')
        ->dropDownList(
            $dataPost,
            ['id_jabatan' => 'jabatan']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>