<?php
use yii\helpers\Html;
?>

<div class="uo_adr_list">
    <div class="item">
        <h3><?= Html::encode($model->name) ?></h3>
        <p>
            <?= Html::encode($model->city->name . ", " . $model->area->name . ", " . $model->street .
            ", " . $model->house) ?>
        </p>
        <p>
            <?= Html::encode($model->add_info) ?>
        </p>
        <div class="actbox">
            <?= Html::a('', ['delete', 'id' => $model->id], [
                'class' => 'bcross',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ]
            ]); ?>
        </div>
    </div>
</div>
