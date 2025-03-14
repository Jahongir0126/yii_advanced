<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var \backend\modules\product\actions\ProductDetails\GetProductDetailsAction[] $productDetails */

$this->title = 'Product Detail list';
$this->params['breadcrumbs'][] = $this->title;
?>


<div>
    <div class="d-flex justify-content-between align-items-center">
        <h1><?= Html::encode($this->title) ?> </h1>
    </div>


    <table class="table table-bordered">
        <thread>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Material</th>
                <th>Color</th>
                <th>Created date</th>
                <th>Created by</th>
                <th>Action</th>

            </tr>
        </thread>
        <tbody>
        <?php if (is_array($productDetails) || $productDetails instanceof \Traversable): ?>

            <?php foreach ($productDetails as $productD): ?>
                <tr>
                    <td> <?= Html::encode($productD->id) ?></td>
                    <td> <?= $productD->product ? Html::encode(
                            $productD->product->name)
                            : 'Products not found' ?></td>
                    <td> <?= Html::encode($productD->brand) ?></td>
                    <td> <?= Html::encode($productD->material ) ?></td>
                    <td> <?= Html::encode($productD->color ) ?></td>
                    <td> <?= Html::encode($productD->created_at) ?></td>
                    <td> <?= Html::encode($productD->created_by ) ?></td>
                    <td> <?= Html::a(
                            'Update',
                            ['product-details/update-product-details', 'id' => $productD->id],
                            ['class' => 'btn btn-warning']) ?>

                        <?= Html::a(
                            'Delete',
                            ['product-details/delete-product-details', 'id' => $productD->id],
                            ['class' => 'btn btn-danger', 'data' => ['confirm' => 'Are you sure to delete product detail', 'method' => 'post',
                            ]
                            ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        <?php else: ?>
            <tr>
                <td colspan="8">No product details found.</td>
            </tr>
        <?php endif; ?>

        </tbody>

    </table>
</div>