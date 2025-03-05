<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Product[] $products */

$this->title = 'Product list';
$this->params['breadcrumbs'][]= $this->title;
?>


<div>
    <div class="d-flex justify-content-between align-items-center">
    <h1><?= Html::encode($this->title) ?> </h1>
        <?= Html::a('Create Product',['product/create','class'=>'btn btn-primary']) ?>
    </div>



    <table class="table table-bordered">
        <thread>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Created date</th>
                <th>Action</th>

            </tr>
        </thread>
        <tbody>
        <?php foreach ($products  as $product): ?>
        <tr>
            <td> <?= Html::encode($product->id) ?></td>
            <td> <?= Html::encode($product->name) ?></td>
            <td> <?= Html::encode($product->price) ?></td>
            <td> <?= Html::encode($product->description) ?></td>
            <td> <?= Html::encode($product->created_at) ?></td>
                <td> <?= Html::a('Update',['product/update', 'id'=>
                    $product->id], [
                            'class'=>'btn btn-warning'
                    ]) ?>
                    <?= Html::a('Delete',['product/delete','id'=>$product->id],[
                            'class'=>'btn btn-danger',
                        'data'=>[
                                'confirm'=>'Are you sure to delete product',
                            'method'=>'post',
                        ]
                    ]) ?>
                </td>
        </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
</div>