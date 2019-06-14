<?php

use yii\widgets\Pjax;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AddressesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\Addresses */

$this->title = 'address ::: user office ::: foodclub';
?>
<div class="center_box cb">
    <div class="uo_tabs cf">
        <a href="#"><span>profile</span></a>
        <a href="#"><span>Reviews</span></a>
        <a href="#"><span>orders</span></a>
        <a href="#" class="active"><span>My Address</span></a>
        <a href="#"><span>Settings</span></a>
    </div>
    <div class="page_content bg_gray">
        <div class="uo_header">
            <div class="wrapper cf">
                <div class="wbox ava">
                    <figure><img src="../web/imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
                </div>
                <div class="main_info">
                    <h1>Helena Afrassiabi</h1>
                    <div class="midbox">
                        <h4>560 points</h4>
                        <div class="info_nav">
                            <a href="#">Get Free Points</a>
                            <span class="sepor"></span>
                            <a href="#">Win iPad</a>
                        </div>
                    </div>
                    <div class="stat">
                        <div class="item">
                            <div class="num">30</div>
                            <div class="title">total orders</div>
                        </div>
                        <div class="item">
                            <div class="num">14</div>
                            <div class="title">total reviews</div>
                        </div>
                        <div class="item">
                            <div class="num">0</div>
                            <div class="title">total gifts</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uo_body">
            <div class="wrapper">
                <div class="uofb cf">
                    <div class="l_col adrs">
                        <h2>Add New Address</h2>
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]); ?>
                    </div>
                    <div class="r_col">
                        <h2>My Addresses</h2>
                            <?php Pjax::begin(['id' => 'addresses']); ?>
                                <?= ListView::widget([
                                    'dataProvider' => $dataProvider,
                                    'itemView' => '_addresses',
                                    'summary' => false,
                                    'options'=> [
                                        'data-pjax' => 1
                                    ],
                                ]); ?>
                            <?php Pjax::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>