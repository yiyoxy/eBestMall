<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/1/8 16:38
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('frontend\assets\AppAsset')) {
        frontend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    $this->registerMetaTag(['name' => 'keywords', 'content' => 'eBestMall, 网上商城, 网店系统, 多用户商城, 分销系统, B2B2C商城系统, 微信分销系统, 行业ERP']);
    $this->registerMetaTag(['name' => 'description', 'content' => 'eBestMall是国内电子商务系统及服务解决方案新创品牌.为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。'], 'description');

    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="renderer" content="webkit">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <!--Begin Header Begin-->
    <div class="soubg">
        <div class="sou">
            <!--Begin 所在收货地区 Begin-->
    	<span class="s_city_b">
        	<span class="fl">送货至：</span>
            <span class="s_city">
            	<span>中国</span>
                <div class="s_city_bg">
                    <div class="s_city_t"></div>
                    <div class="s_city_c">
                        <h2>请选择所在的收货地区</h2>
                        <table border="0" class="c_tab" style="width:235px; margin-top:10px;" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>A</th>
                                <td class="c_h"><span>安徽</span><span>澳门</span></td>
                            </tr>
                            <tr>
                                <th>B</th>
                                <td class="c_h"><span>北京</span></td>
                            </tr>
                            <tr>
                                <th>C</th>
                                <td class="c_h"><span>重庆</span></td>
                            </tr>
                            <tr>
                                <th>F</th>
                                <td class="c_h"><span>福建</span></td>
                            </tr>
                            <tr>
                                <th>G</th>
                                <td class="c_h"><span>广东</span><span>广西</span><span>贵州</span><span>甘肃</span></td>
                            </tr>
                            <tr>
                                <th>H</th>
                                <td class="c_h"><span>河北</span><span>河南</span><span>黑龙江</span><span>海南</span><span>湖北</span><span>湖南</span></td>
                            </tr>
                            <tr>
                                <th>J</th>
                                <td class="c_h"><span>江苏</span><span>吉林</span><span>江西</span></td>
                            </tr>
                            <tr>
                                <th>L</th>
                                <td class="c_h"><span>辽宁</span></td>
                            </tr>
                            <tr>
                                <th>N</th>
                                <td class="c_h"><span>内蒙古</span><span>宁夏</span></td>
                            </tr>
                            <tr>
                                <th>Q</th>
                                <td class="c_h"><span>青海</span></td>
                            </tr>
                            <tr>
                                <th>S</th>
                                <td class="c_h"><span>上海</span><span>山东</span><span>山西</span><span class="c_check">四川</span><span>陕西</span></td>
                            </tr>
                            <tr>
                                <th>T</th>
                                <td class="c_h"><span>台湾</span><span>天津</span></td>
                            </tr>
                            <tr>
                                <th>X</th>
                                <td class="c_h"><span>西藏</span><span>香港</span><span>新疆</span></td>
                            </tr>
                            <tr>
                                <th>Y</th>
                                <td class="c_h"><span>云南</span></td>
                            </tr>
                            <tr>
                                <th>Z</th>
                                <td class="c_h"><span>浙江</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </span>
        </span>
            <!--End 所在收货地区 End-->
        <span class="fr">
        	<span class="fl"><a href="Login.html">你好，请登录</a>&nbsp; <a href="Regist.html" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="#">我的订单</a>&nbsp;|</span>
        	<span class="ss">
            	<div class="ss_list">
                    <a href="#">收藏夹</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">我的收藏夹</a></li>
                                <li><a href="#">我的收藏夹</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ss_list">
                    <a href="#">客户服务</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ss_list">
                    <a href="#">网站导航</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">网站导航</a></li>
                                <li><a href="#">网站导航</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="static/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
        </div>
    </div>
    <div class="top">
        <div class="logo"><a href="<?=Yii::$app->homeUrl?>"><img src="static/images/logo.png" /></a></div>
        <div class="search">
            <form>
                <input type="text" value="" class="s_ipt" />
                <input type="submit" value="搜索" class="s_btn" />
            </form>
            <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
        </div>
        <div class="i_car">
            <div class="car_t">购物车 [ <span>3</span> ]</div>
            <div class="car_bg">
                <!--Begin 购物车未登录 Begin-->
                <div class="un_login">还未登录！<a href="Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
                <!--End 购物车未登录 End-->
                <!--Begin 购物车已登录 Begin-->
                <ul class="cars">
                    <li>
                        <div class="img"><a href="#"><img src="static/images/car1.jpg" width="58" height="58" /></a></div>
                        <div class="name"><a href="#">法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只</a></div>
                        <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img src="static/images/car2.jpg" width="58" height="58" /></a></div>
                        <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                        <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img src="static/images/car2.jpg" width="58" height="58" /></a></div>
                        <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                        <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                    </li>
                </ul>
                <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span></div>
                <div class="price_a"><a href="#">去购物车结算</a></div>
                <!--End 购物车已登录 End-->
            </div>
        </div>
    </div>
    <!--End Header End-->

    <!--Begin Menu Begin-->
    <div class="menu_bg">
        <div class="menu">
            <!--Begin 商品分类详情 Begin-->
            <div class="nav">
                <div class="nav_t">全部商品分类</div>
                <div class="leftNav none">
                    <ul>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav1.png" /></span>
                                <span class="fl">进口食品、生鲜</span>
                            </div>
                            <div class="zj">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav2.png" /></span>
                                <span class="fl">食品、饮料、酒</span>
                            </div>
                            <div class="zj" style="top:-40px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力2</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav3.png" /></span>
                                <span class="fl">母婴、玩具、童装</span>
                            </div>
                            <div class="zj" style="top:-80px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力3</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav4.png" /></span>
                                <span class="fl">家居、家庭清洁、纸品</span>
                            </div>
                            <div class="zj" style="top:-120px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力4</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav5.png" /></span>
                                <span class="fl">美妆、个人护理、洗护</span>
                            </div>
                            <div class="zj" style="top:-160px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力5</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav6.png" /></span>
                                <span class="fl">女装、内衣、中老年</span>
                            </div>
                            <div class="zj" style="top:-200px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力6</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav7.png" /></span>
                                <span class="fl">鞋靴、箱包、腕表配饰</span>
                            </div>
                            <div class="zj" style="top:-240px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力7</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav8.png" /></span>
                                <span class="fl">男装、运动</span>
                            </div>
                            <div class="zj" style="top:-280px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力8</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav9.png" /></span>
                                <span class="fl">手机、小家电、电脑</span>
                            </div>
                            <div class="zj" style="top:-320px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力9</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="static/images/nav10.png" /></span>
                                <span class="fl">礼品、充值</span>
                            </div>
                            <div class="zj" style="top:-360px;">
                                <div class="zj_l">
                                    <div class="zj_l_c">
                                        <h2>零食 / 糖果 / 巧克力10</h2>
                                        <a href="#">坚果</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">巧克力</a>|
                                        <a href="#">口香糖</a>|<a href="#">海苔</a>|<a href="#">鱼干</a>|<a href="#">蜜饯</a>|<a href="#">红枣</a>|
                                        <a href="#">蜜饯</a>|<a href="#">红枣</a>|<a href="#">牛肉干</a>|<a href="#">蜜饯</a>|
                                    </div>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="static/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="static/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End 商品分类详情 End-->
            <ul class="menu_r">
                <li><a href="Index.html">首页</a></li>
                <li><a href="Food.html">美食</a></li>
                <li><a href="Fresh.html">生鲜</a></li>
                <li><a href="HomeDecoration.html">家居</a></li>
                <li><a href="SuitDress.html">女装</a></li>
                <li><a href="MakeUp.html">美妆</a></li>
                <li><a href="Digital.html">数码</a></li>
                <li><a href="GroupBuying.html">团购</a></li>
            </ul>
            <div class="m_ad">春节送好礼！</div>
        </div>
    </div>
    <!--End Menu End-->

    <!--Begin Content Begin-->
    <div class="w">
        <div class="content">
            <!-- Crumbs Nav -->
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>

            <!-- Main Content -->
            <?= $content ?>
        </div>

        <!--Begin Footer Begin -->
        <div class="b_btm_bg bg_color">
            <div class="b_btm">
                <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="72"><img src="static/images/b1.png" width="62" height="62" /></td>
                        <td><h2>正品保障</h2>正品行货  放心购买</td>
                    </tr>
                </table>
                <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="72"><img src="static/images/b2.png" width="62" height="62" /></td>
                        <td><h2>满39包邮</h2>满39包邮 免运费</td>
                    </tr>
                </table>
                <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="72"><img src="static/images/b3.png" width="62" height="62" /></td>
                        <td><h2>天天特惠</h2>天天特惠 畅选无忧</td>
                    </tr>
                </table>
                <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="72"><img src="static/images/b4.png" width="62" height="62" /></td>
                        <td><h2>准时送达</h2>收货时间由你做主</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="b_nav">
            <dl>
                <dt><a href="#">新手上路</a></dt>
                <dd><a href="#">售后流程</a></dd>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">订购方式</a></dd>
                <dd><a href="#">隐私声明</a></dd>
                <dd><a href="#">推荐分享说明</a></dd>
            </dl>
            <dl>
                <dt><a href="#">配送与支付</a></dt>
                <dd><a href="#">货到付款区域</a></dd>
                <dd><a href="#">配送支付查询</a></dd>
                <dd><a href="#">支付方式说明</a></dd>
            </dl>
            <dl>
                <dt><a href="#">会员中心</a></dt>
                <dd><a href="#">资金管理</a></dd>
                <dd><a href="#">我的收藏</a></dd>
                <dd><a href="#">我的订单</a></dd>
            </dl>
            <dl>
                <dt><a href="#">服务保证</a></dt>
                <dd><a href="#">退换货原则</a></dd>
                <dd><a href="#">售后服务保证</a></dd>
                <dd><a href="#">产品质量保证</a></dd>
            </dl>
            <dl>
                <dt><a href="#">联系我们</a></dt>
                <dd><a href="#">网站故障报告</a></dd>
                <dd><a href="#">购物咨询</a></dd>
                <dd><a href="#">投诉与建议</a></dd>
            </dl>
            <div class="b_tel_bg">
                <a href="#" class="b_sh1">新浪微博</a>
                <a href="#" class="b_sh2">腾讯微博</a>
                <p>
                    服务热线：<br />
                    <span>400-000-0000</span>
                </p>
            </div>
            <div class="b_er">
                <div class="b_er_c"><img src="static/images/er.gif" width="118" height="118" /></div>
                <img src="static/images/ss.png" />
            </div>
        </div>
        <div class="btmbg">
            <div class="btm">
                备案/许可证编号：备ICP备00000000号 www.hongyuvip.com   Copyright © 2015-2018 eBestMall商城 All Rights Reserved. 复制必究 , Technical Support: HongYuKeJi <br />
                <img src="static/images/b_1.gif" width="98" height="33" /><img src="static/images/b_2.gif" width="98" height="33" /><img src="static/images/b_3.gif" width="98" height="33" /><img src="static/images/b_4.gif" width="98" height="33" /><img src="static/images/b_5.gif" width="98" height="33" /><img src="static/images/b_6.gif" width="98" height="33" />
            </div>
        </div>
        <!--End Footer End -->
    </div>
    <!--End Content End-->
    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>