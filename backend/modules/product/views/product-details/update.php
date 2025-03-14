<?php


/** @var yii\web\View $this */
/** @var \backend\modules\product\models\ProductDetails $productDetails */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title='Product detail update';
$this->params['breadcrumbs'][] = ['label' => 'Product details', 'url' => ['/product-details']];
$this->params['breadcrumbs'][] = 'Update';

?>

<div class="product-update">

    <h1><?= Html::encode($this->title) ?> </h1>

    <div class="product-form">
        <?php $form=ActiveForm::begin(); ?>
        <?= $form->field($productDetails,'brand')->textInput(['maxlength'=>true])  ?>
        <?= $form->field($productDetails,'material')->textInput(['maxlength'=>true])  ?>
        <?= $form->field($productDetails,'color')->textInput(['maxlength'=>true])  ?>


            <div class="form-group">
                <?= Html::submitButton('Save',['class'=>' my-3 btn btn-success']) ?>
            </div>
            <?php ActiveForm::end();?>

    </div>



</div>
