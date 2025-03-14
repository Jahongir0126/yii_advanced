<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var \backend\modules\product\models\Delivery[] $delivery */

$this->title = 'Delivery list';
$this->params['breadcrumbs'][]= $this->title;
?>


<div>
    <div class="d-flex justify-content-between align-items-center">
    <h1><?= Html::encode($this->title) ?> </h1>
        <?= Html::a('Create delivery',['delivery/create-delivery'],['class'=>'btn btn-primary']) ?>
    </div>



    <table class="table table-bordered">
        <thread>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Delivery Product</th>
                <th>Delivery type</th>
                <th>Created date</th>
                <th>Action</th>

            </tr>
        </thread>
        <tbody>
        <?php foreach ($delivery  as $item): ?>
        <tr>
            <td> <?= Html::encode($item->id) ?></td>
            <td> <?= Html::encode($item->name) ?></td>
            <td> <?= Html::encode($item->delivery_product) ?></td>
            <td> <?= Html::encode($item->type) ?></td>
            <td> <?= Html::encode($item->created_at) ?></td>
                <td> <?= Html::a(
                        'Update',
                        ['delivery/update-delivery', 'id'=>$item->id],
                        ['class'=>'btn btn-warning']) ?>

                     <?= Html::a(
                            'Delete',
                            ['delivery/delete-delivery','id'=>$item->id],
                            ['class'=>'btn btn-danger','data'=>['confirm'=>'Are you sure to delete delivery','method'=>'post',
                        ]
                     ]) ?>
                </td>
        </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
</div>