<?php


/** @var yii\web\View $this */
/** @var backend\models\Product $model */

use \yii\helpers\Html;
use \yii\widgets\ActiveForm;

$this->title='Product update';
$this->params['breadcrumbs'][] = ['label' => 'Продукты', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Обновить';

?>

<div class="product-update">

    <h1><? Html::encode($this->title) ?> </h1>

    <div class="product-form">
        <?php $form=ActiveForm::begin(); ?>

            <?= $form->field($model,'name')->textInput(['maxlength'=>true])  ?>
            <?= $form->field($model,'price')->textInput(['type'=>'number','step'=>'0.1'])  ?>
            <?= $form->field($model,'description')->textarea(['ros'=>6])  ?>

            <div class="form-group">
                <?= Html::submitButton('Save',['class'=>' my-3 btn btn-success']) ?>
            </div>
            <?php ActiveForm::end();?>

    </div>



</div>
