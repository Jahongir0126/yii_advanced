<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var \backend\modules\product\models\Product $products */

$this->title = 'Add product';
$this->params['breadcrumbs'][]=['label'=>'Products',
    'url'=>['/product']];
$this->params['breadcrumbs'][]= $this->title;
?>


<div class="product-create">
    <?php $form = ActiveForm::begin();?>

   <h1><?= Html::encode($this->title) ?></h1>

    <div class="product-form">
        <?= $form->field($products, 'delivery_id')->dropDownList($deliveryOptions, [
            'prompt' => 'Выберите бренд доставки',
        ]) ?>
        <?= $form->field($products,'name')->textInput(['maxlength'=>true])  ?>
        <?= $form->field($products,'price')->textInput(['type'=>'number','step'=>'0.1'])  ?>
        <?= $form->field($products,'description')->textarea(['ros'=>6])  ?>

        <div class="form-group">
            <?= Html::submitButton('Save',['class'=>' my-3 btn btn-success']) ?>
        </div>
        <?php ActiveForm::end();?>
    </div>
</div>

