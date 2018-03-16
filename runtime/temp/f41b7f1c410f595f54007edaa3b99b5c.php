<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"F:\wamp\www\mall\master\public/../application/index\view\index\goodsItem.html";i:1519649822;}*/ ?>
 <?php echo widget("Cate/indexHeader"); ?>
<script>
    var proBuy_id = 10000064;
    var orderapi_host = "//cn.orderapi.mi.com";
    var ref_goods = "2172800006";
</script>
<!-- 导航 -->
<div id="J_proHeader">
    <div class="xm-product-box">
        <div class="nav-bar" id="J_headNav">
            <div class="container J_navSwitch">
                <h2 class="J_proName"><?php echo $data['name']; ?></h2>
                <div class="con">
                    <div class="right">
                        <a href="#">概述</a>
                        <span class="separator">|</span>
                        <a href="#">参数</a>
                        <span class="separator">|</span>
                        <a href="#">F码通道</a>
                        <span class="separator">|</span>
                        <a href="#">用户评价</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="xm-buyBox" id="J_buyBox">
    <div class="box clearfix">
        <div class="login-notic J_notic" style="display: none;">
            <!-- 未登录提示 -->
            <div class="container">
                为方便您购买，请提前登录
                <a href="https://order.mi.com/site/login?redirectUrl=https://item.mi.com/product/10000064.html" class="J_proLogin" data-stat-id="9a32f0664826259e"
                    onclick="_msq.push(['trackEvent', '0680aa307a5b09be-9a32f0664826259e', 'javascript:void0', 'pcpid', '']);">立即登录</a>
                <a href="javascript:void(0);" class="iconfont J_proLoginClose" data-stat-id="bf260f8db02261f6" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-bf260f8db02261f6', 'javascript:void0', 'pcpid', '']);"></a>
            </div>
        </div>
    
        <div class="pro-choose-main container clearfix">
            <div id="big" >
                <img src="<?php echo $data['pic']; ?>" alt="">
            </div>
            <div class="pro-view span10">
                <!-- 左侧轮播图 -->
                <div class="J_imgload imgload hide" ></div>
                <div id="J_img"  class="img-con" style="left: 147.6px; margin-top: 0px;">
                    <div class="ui-wrapper" style="max-width: 100%;">
                        <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 560px;">
                            <div id="J_sliderView" class="sliderWrap" style="width: auto; position: relative;">
                                <img data-src="//i8.mifile.cn/a1/pms_1502273537.38376222!560x560.jpg" class="slider done" style="float: none; list-style: outside none none; position: absolute; width: 560px; z-index: 50; display: block;"
                                    src="<?php echo $data['pic']; ?>" >
                            </div>
                            
                        </div>

        <script>
                var big = document.getElementById('big');
                var small = document.getElementById('J_img');
                small.onmousemove = function (e) {
                        var e = e || event;
                        //获取鼠标在图片上的相对坐标
                        var t=document.body.scrollTop;
                        var x = e.clientX - Math.round($(small).offset().left);
                        var y = e.clientY - Math.round($(small).offset().top) + t;

                        document.title="X:"+x +"Y:"+y;
                            big.scrollTop = y  - 150;
                            big.scrollLeft = x  - 150;
                        big.style.display = 'block';
                    }
                    small.onmouseout = function () {
                        big.style.display = "none";
                    }
        </script>

                        <div class="ui-controls ui-has-pager ui-has-controls-direction" style="display: none;">
                            <div class="ui-pager ui-default-pager">
                                <div class="ui-pager-item">
                                    <a href="" data-slide-index="0" class="ui-pager-link active">1</a>
                                </div>
                            </div>
                            <div class="ui-controls-direction">
                                <a class="ui-prev disabled" href="">上一张</a>
                                <a class="ui-next disabled" href="">下一张</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pro-info span10">
                <h1 class="pro-title J_proName"><?php echo $data['name']; ?></h1>
                <!-- 提示 -->
                <p class="sale-desc" id="J_desc">
                    <font color="#ff4a00"> 马上购买 直降1毛钱 </font> <?php echo $data['des']; ?></p>
                <!-- 选择第一级别 -->
                <span class="pro-price J_proPrice"><?php echo $data['price']; ?>元 </span>
                <div class="pro-book hide J_proBook">
                    <div class="pro-book-head">
                        预售
                        <span class="time J_bookTime"></span>
                    </div>
                    <div class="pro-book-con">
                        预付款
                        <span class="pro-book-price">￥
                            <em class="J_bookPrice"></em>
                        </span>
                        <span class="pro-book-rule J_bookRuleTips hide">预售规则
                            <em class="icon J_bookRule">?</em>
                        </span>
                    </div>
                    <div class="pro-book-rule-con J_bookRuleCon hide">
                        <em>
                            <i></i>
                        </em>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="pro-book hide J_proOrder">
                    <div class="pro-book-head">
                        限时预约
                        <span class="time J_orderTime"></span>
                    </div>
                    <div class="pro-book-con">
                        <span class="pro-book-price">￥
                            <em class="J_orderPrice"></em>
                        </span>
                        <span class="pro-order-count J_orderCount hide"></span>
                    </div>
                </div>
                <div class="loading J_load hide">
                    <div class="loader"></div>
                </div>
                <div class="J_saleWrap sale-wrap hide">
                    <!-- 优惠券 -->
                    <div class="J_couponWrap coupon-wrap hide">
                        <span class="coupon-tag">优惠券</span>
                        <span class="coupon-name J_couponName"></span>
                        <a class="J_getCouponList" href="javascript:void(0);" data-stat-id="b8e58db2c9ef764d" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-b8e58db2c9ef764d', 'javascript:void0', 'pcpid', '']);">立即领取</a>
                    </div>
                    <!-- 4g -->
                    <div class="J_flowWrap flow-wrap hide">

                    </div>
                </div>

                <!-- 主体 -->
                <div class="J_main">
                    <!-- 产品版本 -->
                    <div class="list-wrap" id="J_list">
                        <div class="pro-choose pro-choose-col2 J_step" data-index="0">
                            <div class="step-title" data-name="选择版本"> 版本 </div>
                            <ul class="step-list step-one clearfix">
                                <li class="btn btn-biglarge active" data-name="4GB+32GB" data-price="1299元  " data-index="0" data-value="4GB+32GB">
                                    <a href="javascript:void(0);">
                                        <span class="name">
                                            <?php if($data['size'] == 'big'): ?> 大 <?php elseif($data['size'] == 'medium'): ?> 中 <?php else: ?> 小 <?php endif; ?>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="pro-choose pro-choose-col2 J_step" data-index="1">
                            <div class="step-title" data-name="选择颜色"> 颜色 </div>
                            <ul class="step-list step-one clearfix">
                                <li class="btn btn-biglarge active" data-name="4GB+32GB" data-price="1299元  " data-index="0" data-value="4GB+32GB">
                                    <a href="javascript:void(0);">
                                        <span class="name">
                                            <?php if($data['color'] == 'white'): ?> 白色 <?php elseif($data['color'] == 'black'): ?> 黑色 <?php else: ?> 金色 <?php endif; ?>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- 电视会员服务块 -->
                    <!--             <div class="pro-choose hide" id="J_mitvMemberty">
                        <div class="step-title">
                            选择会员服务 <a href="">了解会员卡 &gt;</a>
                        </div>
                    </div> -->
                    <div id="J_relation" class="hide"></div>
                    <!-- 上面安装服务 -->
                    <!--                    <div class="pro-choose list-choose hide" id="J_install">
                        <div class="step-title">
                            可选 上门安装服务
                        </div>
                        <div class="list-box">
                            <a class="iconfont J_extend" href="javascript:void(0);">&#xe61b;</a>
                            <p class="list-tips J_listTips">搭配手机一起购买，<span>最多省 <span class="J_salePrice">39</span>元</span></p>
                            <div class="list-desc J_listDescBox hide">
                                <p class="tips">已选择 <span class="J_listNum">0</span> 款配件 <a href="javascript:void(0);" class="J_listDelete">移除</a></p>
                                <p class="desc"></p>
                                <p class="price"></p>
                            </div>
                        </div>
                        <div class="list">

                        </div>
                    </div> -->
                    <!-- 已选择的产品 -->
                    <div class="pro-list" id="J_proList">
                        <ul>
                            <li><?php echo $data['name']; if($data['color'] == 'white'): ?> 白色 <?php elseif($data['color'] == 'black'): ?> 黑色 <?php else: ?> 金色 <?php endif; ?>
                                <span> <?php echo $data['price']; ?>元</span>
                            </li>
                            <li class="totlePrice"> 总价 ：<?php echo $data['price']; ?>元 </li>
                        </ul>
                    </div>
                    <!-- 购买按钮 -->
                    <ul class="btn-wrap clearfix" id="J_buyBtnBox">
                        <li>
                            <!-- <a href="javascript:void(0);" class="btn btn-primary  btn-biglarge J_proBuyBtn" data-type="common" data-isbigtap="false"
                                data-name="加入购物车">加入购物车</a> -->
                                <form action="/order/car" method="past">
                                    <input type="hidden" name="goods_id" value="<?php echo $data['id']; ?>">
                                    <input type="hidden" name="num" value="1">
                                    <input type="submit" class="btn btn-primary btn-biglarge J_proBuyBtn" value="加入购物车" >
                                </form>
                        </li>
                    </ul>
                    <div class="pro-policy" id="J_policy">
                        <i class="iconfont support"></i>
                        <i class="iconfont nosupport hide"></i>
                        <span class="J_tips ">支持7天无理由退货</span>
                    </div>
                </div>
                <!-- 获取商品失败 -->
                <div class="error hide J_error">
                    <h3>有点小问题，请点击按钮刷新重试</h3>
                    <a href="javascript:void(0)" class="btn btn-primary J_reload" data-stat-id="f2b772adbfa4aeeb" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-f2b772adbfa4aeeb', 'javascript:void0', 'pcpid', '']);">刷新</a>
                </div>
            </div>
        </div>
        <!-- 预售流程 -->
        <div class="pro-infomation" id="J_proInfo">
            <div class="pro-book-flow container hide" id="J_bookFlow">
                <span class="book-name">预售流程</span>
                <ul class="clearfix">
                    <li class="item01">
                        <span class="icon icon1"></span>
                        <div>
                            <span class="item-name">1.支付预付款</span>
                            <span class="item-infor"></span>
                        </div>
                    </li>
                    <li class="item02">
                        <span class="icon icon2"></span>
                        <div>
                            <span class="item-name">2.支付尾款
                                <em>（在我的订单完成）</em>
                            </span>
                            <span class="item-infor"></span>
                        </div>
                    </li>
                    <li class="item03">
                        <span class="icon icon3"></span>
                        <div>
                            <span class="item-name">3.商品发货</span>
                            <span class="item-infor"></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="infor-con">
                <div class="section is-visible preload">
                    <div class="container">
                        <h3>包装清单 </h3>
                        <div class="con">
                            <img data-src="//i8.mifile.cn/b2c-mimall-media/662cfd8f575e8a0cb4b35244fd54bdcd.jpg" class="slider done" src="/static/index/goodsItem/img/662cfd8f575e8a0cb4b35244fd54bdcd.jpg">
                        </div>
                    </div>
                </div>
                <div class="section preload is-visible">
                    <div class="container">
                        <h3>满嘴跑火车

                        </h3>
                        <div class="con">
                            <img data-src="//i8.mifile.cn/b2c-mimall-media/913dbcde8a3e02bded640b3cd12837a9.png" class="slider done" src="/static/index/goodsItem/img/913dbcde8a3e02bded640b3cd12837a9.png">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- 到货通知设置成功弹窗 -->
<div class="modal modal-setRemind modal-hide fade" id="J_setRemindModal">
    <span class="close iconfont" data-dismiss="modal">
        <i class="iconfont"></i>
    </span>
    <div class="modal-body">
        <h4>到货通知设置成功!</h4>
        <p>
            请下载小米商城App ，开启通知功能
            <br> 产品开售前，我们会通知您。
        </p>
        <img src="/static/index/goodsItem/img/apdownload-phone-code.png" alt="">
        <span class="btn btn-primary" data-dismiss="modal">我知道了</span>
    </div>
</div>

<!-- 收货地址选择 -->

<div class="modal modal-hide fade modal-choose-regions" id="J_modalChooseRegions">
    <span data-dismiss="modal" aria-hidden="true" class="close">
        <i class="iconfont"></i>
    </span>
    <div class="modal-body pro-choose-regions">
        <div class="J_chooseRegionsBox" data-type="search">
            <div class="search-address-wrapper" id="J_searchAddressWrapper">
                <div class="search-section">
                    <i class="icon icon-search iconfont"></i>
                    <input class="search-input" id="J_searchRegionsInput" placeholder="输入街道、乡镇、小区或商圈名称" autocomplete="off" type="text">
                    <span class="icon icon-del iconfont hide" id="J_searchRegionsInputClear">×</span>
                </div>
                <div class="switch-type">
                    <a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="select" data-stat-id="bf0335d1f268c62e" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-bf0335d1f268c62e', 'javascript:void0', 'pcpid', '']);">手动选择地址&gt;</a>
                </div>

                <div class="loading">
                    <div class="loader"></div>
                </div>

                <!-- 我的收货地址 -->
                <div class="my-address hide" id="J_myAddress">
                    <div class="title">我的收货地址</div>
                    <div class="no-login " id="J_noLogin">
                        现在
                        <a href="https://order.mi.com/site/login?redirectUrl=https://item.mi.com/product/10000064.html" data-stat-id="344afcef2577b97c"
                            onclick="_msq.push(['trackEvent', '0680aa307a5b09be-344afcef2577b97c', '#', 'pcpid', '']);">登录</a>，可根据收货地址快速定位
                    </div>
                    <div class="list-wrapper">
                        <ul class="list clearfix"></ul>
                    </div>
                </div>

                <!-- 附近商圈 -->
                <div class="nearby-address hide" id="J_nearbyAddress">
                    <div class="title">附近商圈</div>
                    <ul class="list clearfix"></ul>
                </div>

                <!-- 搜索列表 -->
                <div class="search-address hide" id="J_searchAdress">
                    <ul class="list clearfix"></ul>
                </div>

                <div class="no-result hide" id="J_noSearchResult">
                    没有找到这个地方，
                    <a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="select" data-stat-id="4fe3a645194c5244" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-4fe3a645194c5244', 'javascript:void0', 'pcpid', '']);">手动选择&gt;</a>
                </div>
            </div>
        </div>
        <div class="J_chooseRegionsBox chooseRegionsBox hide" data-type="select">
            <div class="select-address-wrapper" id="J_selectAddressWrapper">
                <div class="select-box clearfix" id="J_selectWrapper">
                    <div class="select-first select-item J_select" data-init-txt="选择省份/自治区">选择省份/自治区</div>
                    <div class="select-item J_select hide" data-init-txt="选择城市/地区"></div>
                    <div class="select-item J_select hide" data-init-txt="选择区县"></div>
                    <div class="select-last select-item J_select hide" data-init-txt="选择配送区域"></div>
                </div>
                <div class="options-box">
                    <ul class="options-list J_optionsWrapper clearfix">
                        <li class="option J_option" data-value="2" data-txt="北京">北京 </li>
                        <li class="option J_option" data-value="3" data-txt="天津">天津 </li>
                        <li class="option J_option" data-value="4" data-txt="河北">河北 </li>
                        <li class="option J_option" data-value="5" data-txt="山西">山西 </li>
                        <li class="option J_option" data-value="6" data-txt="内蒙古">内蒙古 </li>
                        <li class="option J_option" data-value="7" data-txt="辽宁">辽宁 </li>
                        <li class="option J_option" data-value="8" data-txt="吉林">吉林 </li>
                        <li class="option J_option" data-value="9" data-txt="黑龙江">黑龙江 </li>
                        <li class="option J_option" data-value="10" data-txt="上海">上海 </li>
                        <li class="option J_option" data-value="11" data-txt="江苏">江苏 </li>
                        <li class="option J_option" data-value="12" data-txt="浙江">浙江 </li>
                        <li class="option J_option" data-value="13" data-txt="安徽">安徽 </li>
                        <li class="option J_option" data-value="14" data-txt="福建">福建 </li>
                        <li class="option J_option" data-value="15" data-txt="江西">江西 </li>
                        <li class="option J_option" data-value="16" data-txt="山东">山东 </li>
                        <li class="option J_option" data-value="17" data-txt="河南">河南 </li>
                        <li class="option J_option" data-value="18" data-txt="湖北">湖北 </li>
                        <li class="option J_option" data-value="19" data-txt="湖南">湖南 </li>
                        <li class="option J_option" data-value="20" data-txt="广东">广东 </li>
                        <li class="option J_option" data-value="21" data-txt="广西">广西 </li>
                        <li class="option J_option" data-value="22" data-txt="海南">海南 </li>
                        <li class="option J_option" data-value="23" data-txt="重庆">重庆 </li>
                        <li class="option J_option" data-value="24" data-txt="四川">四川 </li>
                        <li class="option J_option" data-value="25" data-txt="贵州">贵州 </li>
                        <li class="option J_option" data-value="26" data-txt="云南">云南 </li>
                        <li class="option J_option" data-value="27" data-txt="西藏">西藏 </li>
                        <li class="option J_option" data-value="28" data-txt="陕西">陕西 </li>
                        <li class="option J_option" data-value="29" data-txt="甘肃">甘肃 </li>
                        <li class="option J_option" data-value="30" data-txt="青海">青海 </li>
                        <li class="option J_option" data-value="31" data-txt="宁夏">宁夏 </li>
                        <li class="option J_option" data-value="32" data-txt="新疆">新疆 </li>
                    </ul>
                    <ul class="options-list J_optionsWrapper clearfix hide"></ul>
                    <ul class="options-list J_optionsWrapper clearfix hide"></ul>
                    <ul class="options-list J_optionsWrapper clearfix hide"></ul>
                </div>
            </div>
            <div class="switch-type">
                <a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="search" data-stat-id="bb8501ba5f208c78" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-bb8501ba5f208c78', 'javascript:void0', 'pcpid', '']);">地址不好找，直接搜一搜&gt;</a>
            </div>
        </div>
    </div>
</div>

<!-- 地址初始化模板 -->
<script id="J_addressTmp" type="text/x-dot-template">
    <div class="user-default-address hide" id="J_userDefaultAddress">
        <i class="iconfont iconfont-location">&#xe90b;</i>
        <div>
            <div class="address-info">

            </div>
            <span class="switch-choose-regions" id="J_switchChooseRegions">
            修改
            </span>
        </div>

        <div class="product-status" id="J_productStatus" >
            <span class="init">正在加载...</span>
            <span class="sale">有现货</span>
            <span class="over">该地区暂时缺货</span>
            <span class="no">暂时无法送达</span>
            <span class="pre">预售商品</span>
            <span class="book">预售商品</span>
            <span class="nohasAddress"></span>
            <span class="time"></span>
        </div>
    </div>
</script>

<script type="text/javascript">
    //设置图片大小
    var getImage = function (image, size) {
        if (typeof image === 'string') {
            var type = image.substr(-4, 4);
            var path = image.substring(0, image.length - 4);
            if (type == 'jpeg') {
                type = image.substr(-5, 5);
                path = image.substring(0, image.length - 5);
            }
            return path + '!' + size + 'x' + size + type;
        }
    }
</script>


<div id="J_rulePresales" class="modal fade modal-rule modal-hide ">
    <div class="modal-header">
        <a class="close" data-dismiss="modal" data-stat-id="64e9ac951d743352" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-64e9ac951d743352', '', 'pcpid', '']);">
            <i class="iconfont"></i>
        </a>
        <h3>预售规则</h3>
    </div>
    <div class="modal-body">
        <p>包含预售商品的订单将在您成功支付后，按提示时间发货。如预售订单含有其他商品，将与预售商品一起发货，但小米商城保留提前发货的权利，具体发货时间请参考预售页面提示。</p>
        <p>预售订单退换货流程同正常订单一致。</p>
    </div>
</div>

<div id="J_couponModal" class="modal fade modal-coupon modal-hide">
    <a class="close" data-dismiss="modal" data-stat-id="f0003aaa4708a4b7" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-f0003aaa4708a4b7', '', 'pcpid', '']);">
        <i class="iconfont"></i>
    </a>
    <div class="modal-body">
        <div class="list hide">
            <h3>领取优惠券</h3>
            <p class="tips">优惠券数量有限，先到先得</p>
            <div class="con">
                <ul></ul>
            </div>
        </div>
        <div class="result hide">
            <div class="con succ hide">
                <i class="iconfont"></i>
                <h3>领取成功</h3>
                <p>可以前往 个人中心 - 我的优惠券 查看详情</p>
            </div>
            <div class="con fail hide">
                <i class="iconfont"></i>
                <h3>领取失败</h3>
                <p>优惠券已经被领完，或者您领取的数量已经达到上限</p>
            </div>
            <div class="con over hide">
                <i class="iconfont"></i>
                <h3>您已领取过了</h3>
                <p>可以前往 个人中心 - 我的优惠券 查看详情</p>
            </div>
            <a href="javascript:void(0);" class="J_getCouponReturn" data-stat-id="fe79a9bc75eaef9c" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-fe79a9bc75eaef9c', 'javascript:void0', 'pcpid', '']);">返回 &gt;</a>
        </div>
    </div>
</div>

<div id="J_orderModal" class="modal fade modal-order modal-hide">
    <a class="close" data-dismiss="modal" data-stat-id="da6f2e970d504ff1" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-da6f2e970d504ff1', '', 'pcpid', '']);">
        <i class="iconfont"></i>
    </a>
    <div class="modal-body">
    </div>
</div>
<div id="J_orderModalSucc" class="modal fade modal-order-succ modal-hide">
    <a class="close" data-dismiss="modal" data-stat-id="80601bc68859a26b" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-80601bc68859a26b', '', 'pcpid', '']);">
        <i class="iconfont"></i>
    </a>
    <div class="modal-body">
        <i></i>
        <h3>预约成功</h3>
        <a class="btn btn-primary btn-biglarge" data-dismiss="modal" data-stat-id="4a807795b079a7d5" onclick="_msq.push(['trackEvent', '0680aa307a5b09be-4a807795b079a7d5', '', 'pcpid', '']);">确定</a>
    </div>
</div>
<div id="J_orderPrize" class="modal fade modal-order-prize modal-hide">
    <div class="modal-body">

    </div>
</div>
<!-- 放大镜效果 -->

<?php echo widget("Cate/footer"); ?>