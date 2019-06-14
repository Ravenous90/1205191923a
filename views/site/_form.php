<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\Cities;
use app\models\Areas;

/* @var $this yii\web\View */
/* @var $model app\models\Addresses */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$this->registerJs(
    '$("document").ready(function(){
            $("#new_address").on("pjax:end", function() {
            $.pjax.reload({container:"#addresses"});  //Reload GridView
        });
    });'
    );
?>

<?php
$cities = Cities::find()->all();
$citiesList = ArrayHelper::map($cities,'id','name');
$areas = Areas::find()->all();
$areasList = ArrayHelper::map($areas,'id','name');

$mainParam = ['options' =>
                ['class' => 'field']
             ];
$cityParam = ['class'=>'', 'prompt'=>''];

$areasCitiesIds = ArrayHelper::map($areas,'id','city_id');
$areaParam = [];
foreach ($areasCitiesIds as $index => $value){
    $areaParam[$index] = ['data-city-id' => $value];
}
?>
<?php Pjax::begin(['id' => 'new_address']); ?>
<?php
$this->registerJs(
    "$('document').ready(function(){
        $('#addresses-area_id').empty();
           $('#addresses-city_id').change(function () {
           $('#addresses-area_id').empty();
            var val = $(this).val();
            var areas = " . json_encode($areasCitiesIds) . ";
            var areasNames = " . json_encode($areasList) . ";
            $.each(areas,function(index, value) {
                if (value == val) {
                    $('#addresses-area_id').append('<option value=' + index + '>' + areasNames[index] + '</option>');
                }
            });
            });
    });", View::POS_READY
);
?>
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
        <?= $form->field($model, 'name', $mainParam)->textInput(['maxlength' => true, 'class' => 'field'])->label('Name *') ?>
        <?= $form->field($model, 'city_id', $mainParam)
                 ->dropDownList($citiesList, $cityParam)
                 ->label('Your city *'); ?>
        <?= $form->field($model, 'area_id', $mainParam)
                 ->dropDownList($areasList, ['class'=>'', 'prompt'=>'','options' => $areaParam])
                 ->label('Your area *'); ?>
        <?= $form->field($model, 'street', $mainParam)->textInput(['maxlength' => true])->label('Street') ?>
        <?= $form->field($model, 'house', $mainParam)->textInput(['maxlength' => true])->label('House #') ?>
        <?= $form->field($model, 'add_info', $mainParam)->textarea(['rows' => 6])->label('Additional information') ?>
    <div class="field">
        <?= Html::submitButton('add address', ['class' => 'green_btn']) ?>
    </div>
    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>