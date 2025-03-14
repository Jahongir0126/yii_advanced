<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var \backend\modules\product\models\ProductDetails $productDetails */

$this->title = 'Add product details';
$this->params['breadcrumbs'][]=['label'=>'Products details',
    'url'=>['/product-details']];
$this->params['breadcrumbs'][]= $this->title;
?>


<div class="product-detail-create">
    <?php $form = ActiveForm::begin();?>

   <h1><?= Html::encode($this->title) ?></h1>

    <div class="product-form">
        <?= $form->field($productDetails, 'product_id')->hiddenInput()->label(false) ?>
        <?= $form->field($productDetails,'brand')->textInput(['maxlength'=>true])  ?>
        <?= $form->field($productDetails,'material')->textInput(['maxlength'=>true])  ?>
        <?= $form->field($productDetails,'color')->textInput(['maxlength'=>true])  ?>

        <div class="form-group">
            <?= Html::submitButton('Save',['class'=>' my-3 btn btn-success']) ?>
        </div>
        <?php ActiveForm::end();?>
    </div>
</div>

