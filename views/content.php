<?php

/* @var $this yii\web\View */

$this->title = 'address ::: user office ::: foodclub';
?>
<div class="center_box cb">
    <div class="uo_tabs cf">
        <a href="#"><span>profile</a>
        <a href="#"><span>Reviews</span></a>
        <a href="#"><span>orders</span></a>
        <a href="#" class="active"><span>My Address</span></a>
        <a href="#"><span>Settings</span></a>
    </div>
    <div class="page_content bg_gray">
        <div class="uo_header">
            <div class="wrapper cf">
                <div class="wbox ava">
                    <figure><img src="web/imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
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

                        <form action="" method="">
                            <div class="field">
                                <label>Name *</label>
                                <input type="text" value="" palceholder="" class="vl_empty" />
                            </div>
                            <div class="field">
                                <label>Your city *</label>
                                <select class="vl_empty">
                                    <option class="plh"></option>
                                    <option value="1">City 1</option>
                                    <option value="2">City 2</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Your area *</label>
                                <select>
                                    <option class="plh"></option>
                                    <option>Area 1</option>
                                    <option>Area 2</option>
                                </select>
                            </div>

                            <div class="field">
                                <label>Street</label>
                                <input type="text" value="" palceholder="" class="vl_empty" />
                            </div>
                            <div class="field">
                                <label>House # </label>
                                <input type="text" value="" palceholder="House Name / Number" />
                            </div>

                            <div class="field">
                                <label class="pos_top">Additional information</label>
                                <textarea></textarea>
                            </div>

                            <div class="field">
                                <input type="submit" value="add address" class="green_btn" />
                            </div>
                        </form>
                    </div>

                    <div class="r_col">
                        <h2>My Addresses</h2>

                        <div class="uo_adr_list">
                            <div class="item">
                                <h3>HOME Address</h3>
                                <p>Dubai, Business Bay Area, Sheikh Zayed Road, Single </p>
                                <div class="actbox">
                                    <a href="#" class="bcross"></a>
                                </div>
                            </div>
                            <div class="item">
                                <h3>Work Address</h3>
                                <p>Dubai, Business Bay Area, Sheikh Zayed Road, Single<br/>Business Tower, Suite 2204</p>
                                <div class="actbox">
                                    <a href="#" class="bcross"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
