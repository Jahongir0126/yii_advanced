<?php


/** @var yii\web\View $this */
/** @var \backend\modules\product\models\Delivery $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title='Product update';
$this->params['breadcrumbs'][] = ['label' => 'Delivery','url'=>['get-delivery']];
$this->params['breadcrumbs'][] = 'Update';

?>

<div class="product-update">

    <h1><?= Html::encode($this->title) ?> </h1>

    <div class="product-form">
        <?php $form=ActiveForm::begin(); ?>

            <?= $form->field($model,'name')->textInput(['maxlength'=>true])  ?>
            <?= $form->field($model,'delivery_product')->textInput(['maxlength'=>true])  ?>
            <?= $form->field($model,'type')->textInput()  ?>

            <div class="form-group">
                <?= Html::submitButton('Save',['class'=>' my-3 btn btn-success']) ?>
            </div>
            <?php ActiveForm::end();?>

    </div>



</div>
