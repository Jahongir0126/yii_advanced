<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var \backend\modules\product\models\Delivery $model */

$this->title = 'Add delivery';
$this->params['breadcrumbs'][]=['label'=>'Delivery', 'url'=>['get-delivery']];
$this->params['breadcrumbs'][]= $this->title;
?>

<div class="product-create">
    <?php $form = ActiveForm::begin();?>

   <h1><?= Html::encode($this->title) ?></h1>

    <div class="product-form">

        <?= $form->field($model,'name')->textInput(['maxlength'=>true])  ?>
        <?= $form->field($model,'delivery_product')->textInput(['maxlength'=>true])  ?>
        <?= $form->field($model,'type')->textInput()  ?>

        <div class="form-group">
            <?= Html::submitButton('Save',['class'=>' my-3 btn btn-success']) ?>
        </div>
        <?php ActiveForm::end();?>
    </div>
</div>

