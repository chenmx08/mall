<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\wamp\www\mall\master\public/../application/index\view\index\index.html";i:1519630496;}*/ ?>

     <?php echo widget("Cate/header"); ?>
<div class="home-hero-container container">
    <div class="home-hero">
        <div class="home-hero-slider">
            <div class="ui-wrapper" style="max-width: 100%;">
                <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
                    <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">

                        <!-- 这里是放轮播图的div -->
                        <?php if(is_array($carousel) || $carousel instanceof \think\Collection || $carousel instanceof \think\Paginator): if( count($carousel)==0 ) : echo "" ;else: foreach($carousel as $key=>$car_vo): ?>
                        <div class="slide exposure loaded" style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 0; display: none;">
                            <a href="" data-stat-aid="AA19519" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19519+2_15_3_70', 'https://item.mi.com/product/6222.html', 'pcpid', '31pchometop_slide003001#rid=3747069be44eda681710c6202dfe6d0b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030335.3&amp;adm=4778']);">
                                <img src="<?php echo $car_vo['url']; ?>">
                            </a>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>

                <div class="ui-controls ui-has-pager ui-has-controls-direction">

                    <div class="ui-controls-direction">
                        <!-- <a class="ui-prev" href="" data-stat-id="ad34778ec64de2bb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ad34778ec64de2bb', '', 'pcpid', '']);">上一张</a>
                        <a class="ui-next" href="" data-stat-id="012e47433fd216e2" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-012e47433fd216e2', '', 'pcpid', '']);">下一张</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- 轮播图结束 -->

        <div class="home-hero-sub row">
            <div class="span4">
                <ul class="home-channel-list clearfix">
                    <li class="exposure top left">
                        <a href="https://www.mi.com/compare/" data-stat-aid="AA13424" data-stat-pid="2_44_1_250" data-log_code="31pchomesix_small_icon001003#rid=532cafee96c1ddf03ddde6a8ea32ae66&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.1&amp;adm=2227"
                            target="_blank" data-stat-id="AA13424+2_44_1_250" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13424+2_44_1_250', '//www.mi.com/compare/', 'pcpid', '31pchomesix_small_icon001003#rid=532cafee96c1ddf03ddde6a8ea32ae66&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.1&amp;adm=2227']);">
                            <i class="iconfont"></i>选购手机</a>
                    </li>
                    <li class="exposure top">
                        <a href="http://qiye.mi.com/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" data-log_code="31pchomesix_small_icon002003#rid=3df0f0e8953b14f37245356aff85815c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.2&amp;adm=613"
                            target="_blank" data-stat-id="AA10868+2_44_2_251" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10868+2_44_2_251', 'http://qiye.mi.com/', 'pcpid', '31pchomesix_small_icon002003#rid=3df0f0e8953b14f37245356aff85815c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.2&amp;adm=613']);">
                            <i class="iconfont"></i>企业团购</a>
                    </li>
                    <li class="exposure top">
                        <a href="https://order.mi.com/f" data-stat-aid="AA17703" data-stat-pid="2_44_3_252" data-log_code="31pchomesix_small_icon003003#rid=be3e2f9faa08a7b6c632225036912b19&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.3&amp;adm=616"
                            target="_blank" data-stat-id="AA17703+2_44_3_252" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17703+2_44_3_252', '//order.mi.com/f', 'pcpid', '31pchomesix_small_icon003003#rid=be3e2f9faa08a7b6c632225036912b19&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.3&amp;adm=616']);">
                            <i class="iconfont"></i>F码通道</a>
                    </li>
                    <li class="exposure left">
                        <a href="https://www.mi.com/micard" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" data-log_code="31pchomesix_small_icon004003#rid=320d873fddb5984d653278afc2f01ab8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.4&amp;adm=862"
                            target="_blank" data-stat-id="AA11244+2_44_4_253" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11244+2_44_4_253', 'https://www.mi.com/micard', 'pcpid', '31pchomesix_small_icon004003#rid=320d873fddb5984d653278afc2f01ab8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.4&amp;adm=862']);">
                            <i class="iconfont"></i>米粉卡</a>
                    </li>
                    <li class="exposure ">
                        <a href="https://huanxin.mi.com/" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" data-log_code="31pchomesix_small_icon005003#rid=a478e443515a2cf6634c0beb961c01e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.5&amp;adm=1386"
                            target="_blank" data-stat-id="AA12084+2_44_5_254" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12084+2_44_5_254', '//huanxin.mi.com', 'pcpid', '31pchomesix_small_icon005003#rid=a478e443515a2cf6634c0beb961c01e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.5&amp;adm=1386']);">
                            <i class="iconfont"></i>以旧换新</a>
                    </li>
                    <li class="exposure ">
                        <a href="http://recharge.10046.mi.com/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" data-log_code="31pchomesix_small_icon006003#rid=6b75acd7f8f706c9b79d6eda54a838e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.6&amp;adm=617"
                            target="_blank" data-stat-id="AA10871+2_44_6_255" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10871+2_44_6_255', 'http://recharge.10046.mi.com/', 'pcpid', '31pchomesix_small_icon006003#rid=6b75acd7f8f706c9b79d6eda54a838e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030363.6&amp;adm=617']);">
                            <i class="iconfont"></i>话费充值</a>
                    </li>
                </ul>
            </div>
            <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                <ul class="home-promo-list clearfix">
                    <li class="first">
                        <a class="item exposure" href="https://item.mi.com/product/10000064.html" data-stat-aid="AA19569" data-stat-pid="2_16_1_77"
                            data-log_code="31pchomethree_line001002#rid=c8241ed26db98b333b52cb327753a667&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030336.1&amp;adm=4761"
                            target="_blank" data-stat-id="AA19569+2_16_1_77" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19569+2_16_1_77', 'https://item.mi.com/product/10000064.html', 'pcpid', '31pchomethree_line001002#rid=c8241ed26db98b333b52cb327753a667&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030336.1&amp;adm=4761']);">
                            <img alt="小米5X 全系直降100-蓝" src="/static/index/index/img/xmad_15163283793196_jxzQc.jpg" srcset="//i1.mifile.cn/a4/xmad_15163283815756_JotNm.jpg 2x">
                        </a>
                    </li>
                    <li>
                        <a class="item exposure" href="https://item.mi.com/product/10000068.html" data-stat-aid="AA19527" data-stat-pid="2_16_2_78"
                            data-log_code="31pchomethree_line002002#rid=d2cb466e0344e87d5cc3557001fc78c4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030336.2&amp;adm=4678"
                            target="_blank" data-stat-id="AA19527+2_16_2_78" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19527+2_16_2_78', 'https://item.mi.com/product/10000068.html', 'pcpid', '31pchomethree_line002002#rid=d2cb466e0344e87d5cc3557001fc78c4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030336.2&amp;adm=4678']);">
                            <img alt="红米Note 5A高配-直降100" src="/static/index/index/img/xmad_15167186369518_wtfqM.jpg" srcset="//i1.mifile.cn/a4/xmad_15167186425841_aUSZB.jpg 2x">
                        </a>
                    </li>
                    <li>
                        <a class="item exposure" href="https://www.mi.com/electric-toothbrush/" data-stat-aid="AA19572" data-stat-pid="2_16_3_79"
                            data-log_code="31pchomethree_line003002#rid=75192e899135528b927c1d191c94ed39&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030336.3&amp;adm=4716"
                            target="_blank" data-stat-id="AA19572+2_16_3_79" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19572+2_16_3_79', 'https://www.mi.com/electric-toothbrush/', 'pcpid', '31pchomethree_line003002#rid=75192e899135528b927c1d191c94ed39&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030336.3&amp;adm=4716']);">
                            <img alt="声波电动牙刷" src="/static/index/index/img/xmad_1515151060201_EhQzc.jpg" srcset="//i1.mifile.cn/a4/xmad_15151510631612_prkMN.jpg 2x">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- 816 热门商品推荐位 -->
    <!--  816 热门商品推荐 END-->
    <div class="home-star-goods xm-carousel-container" id="J_homeStar">
        <div class="xm-plain-box">
            <div class="box-hd">
                <h2 class="title">小米明星单品</h2>
                <!-- <h2 class="title">祝大家圣诞快乐！一起来唱圣诞歌吧  (＾O＾☆♪ ) </h2> -->
                <div class="more">
                    
                </div>
            </div>
            <div class="box-bd">
                <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                    <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList" style="width: 2480px; margin-left: -1240px; transition: margin-left 0.5s ease 0s;">
                        <li class="rainbow-item-1">
                            <a class="thumb exposure" href="https://item.mi.com/product/10000070.html" data-stat-aid="AA19467" data-stat-pid="2_17_1_80"
                                data-log_code="31pchomestar001004#rid=ab3a39a6164f34b7e21ab1e14df164c2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.1&amp;pid=1173500015&amp;adm=4532"
                                target="_blank" data-stat-id="AA19467+2_17_1_80" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19467+2_17_1_80', 'https://item.mi.com/product/10000070.html', 'pcpid', '31pchomestar001004#rid=ab3a39a6164f34b7e21ab1e14df164c2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.1&amp;pid=1173500015&amp;adm=4532']);">
                                <img src="/static/index/index/img/xmad_15117763019255_STRfj.png" srcset="//i1.mifile.cn/a4/xmad_15117763039715_jXbCQ.png 2x"
                                    alt="小米MIX 2">
                            </a>
                            <h3 class="title">
                                <a href="https://item.mi.com/product/10000070.html" data-stat-aid="AA19467" data-stat-pid="2_17_1_80" data-log_code="31pchomestar001004#rid=ab3a39a6164f34b7e21ab1e14df164c2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.1&amp;pid=1173500015&amp;adm=4532"
                                    target="_blank" data-stat-id="AA19467+2_17_1_80" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19467+2_17_1_80', 'https://item.mi.com/product/10000070.html', 'pcpid', '31pchomestar001004#rid=ab3a39a6164f34b7e21ab1e14df164c2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.1&amp;pid=1173500015&amp;adm=4532']);">小米MIX 2</a>
                            </h3>
                            <p class="desc">全面屏2.0，5.99"大屏</p>
                            <p class="price">3299元起</p>
                        </li>
                        <li class="rainbow-item-2">
                            <a class="thumb exposure" href="https://item.mi.com/product/6874.html" data-stat-aid="AA19528" data-stat-pid="2_17_2_81"
                                data-log_code="31pchomestar002004#rid=d4193868014218500b2056c1e6303fb8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.2&amp;pid=1173800019&amp;adm=4591"
                                target="_blank" data-stat-id="AA19528+2_17_2_81" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19528+2_17_2_81', 'https://item.mi.com/product/6874.html', 'pcpid', '31pchomestar002004#rid=d4193868014218500b2056c1e6303fb8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.2&amp;pid=1173800019&amp;adm=4591']);">
                                <img src="/static/index/index/img/xmad_15125569508853_uWAIK.png" srcset="//i1.mifile.cn/a4/xmad_15125569539761_YeIBb.png 2x"
                                    alt="红米5A">
                            </a>
                            <h3 class="title">
                                <a href="https://item.mi.com/product/6874.html" data-stat-aid="AA19528" data-stat-pid="2_17_2_81" data-log_code="31pchomestar002004#rid=d4193868014218500b2056c1e6303fb8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.2&amp;pid=1173800019&amp;adm=4591"
                                    target="_blank" data-stat-id="AA19528+2_17_2_81" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19528+2_17_2_81', 'https://item.mi.com/product/6874.html', 'pcpid', '31pchomestar002004#rid=d4193868014218500b2056c1e6303fb8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.2&amp;pid=1173800019&amp;adm=4591']);">红米5A</a>
                            </h3>
                            <p class="desc">8天超长待机，137g轻巧机身</p>
                            <p class="price">599元</p>
                        </li>
                        <li class="rainbow-item-3">
                            <a class="thumb exposure" href="https://item.mi.com/product/10000041.html" data-stat-aid="AA19560" data-stat-pid="2_17_3_82"
                                data-log_code="31pchomestar003004#rid=8f634899f1d9b01021074c757a4c47cd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.3&amp;pid=1174200054&amp;adm=4573"
                                target="_blank" data-stat-id="AA19560+2_17_3_82" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19560+2_17_3_82', 'https://item.mi.com/product/10000041.html', 'pcpid', '31pchomestar003004#rid=8f634899f1d9b01021074c757a4c47cd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.3&amp;pid=1174200054&amp;adm=4573']);">
                                <img src="/static/index/index/img/xmad_15123817163201_wHrqD.png" srcset="//i1.mifile.cn/a4/xmad_15123817195974_GkwgP.png 2x"
                                    alt="小米6">
                            </a>
                            <h3 class="title">
                                <a href="https://item.mi.com/product/10000041.html" data-stat-aid="AA19560" data-stat-pid="2_17_3_82" data-log_code="31pchomestar003004#rid=8f634899f1d9b01021074c757a4c47cd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.3&amp;pid=1174200054&amp;adm=4573"
                                    target="_blank" data-stat-id="AA19560+2_17_3_82" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19560+2_17_3_82', 'https://item.mi.com/product/10000041.html', 'pcpid', '31pchomestar003004#rid=8f634899f1d9b01021074c757a4c47cd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.3&amp;pid=1174200054&amp;adm=4573']);">小米6</a>
                            </h3>
                            <p class="desc">变焦双摄，4 轴防抖</p>
                            <p class="price">2299元起</p>
                        </li>
                        <li class="rainbow-item-4">
                            <a class="thumb exposure" href="https://item.mi.com/1173300019.html" data-stat-aid="AA18439" data-stat-pid="2_17_4_83" data-log_code="31pchomestar004004#rid=a505c033a65e83b2d644482c0ba72acc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.4&amp;pid=2173300008&amp;adm=3703"
                                target="_blank" data-stat-id="AA18439+2_17_4_83" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18439+2_17_4_83', '//item.mi.com/1173300019.html', 'pcpid', '31pchomestar004004#rid=a505c033a65e83b2d644482c0ba72acc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.4&amp;pid=2173300008&amp;adm=3703']);">
                                <img src="/static/index/index/img/pms_1503909150.png" srcset="//i1.mifile.cn/a1/pms_1503909150.67293503!220x220.png 2x" alt="小米电视4A 43英寸 标准版">
                            </a>
                            <h3 class="title">
                                <a href="https://item.mi.com/1173300019.html" data-stat-aid="AA18439" data-stat-pid="2_17_4_83" data-log_code="31pchomestar004004#rid=a505c033a65e83b2d644482c0ba72acc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.4&amp;pid=2173300008&amp;adm=3703"
                                    target="_blank" data-stat-id="AA18439+2_17_4_83" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18439+2_17_4_83', '//item.mi.com/1173300019.html', 'pcpid', '31pchomestar004004#rid=a505c033a65e83b2d644482c0ba72acc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.4&amp;pid=2173300008&amp;adm=3703']);">小米电视4A 43英寸 标准版</a>
                            </h3>
                            <p class="desc">全高清HDR 四核高性能处理器 </p>
                            <p class="price">1999元</p>
                        </li>
                        <li class="rainbow-item-5">
                            <a class="thumb exposure" href="https://item.mi.com/product/10000032.html" data-stat-aid="AA17079" data-stat-pid="2_17_5_84"
                                data-log_code="31pchomestar005004#rid=64f45ecb97eec5cf6d1330355c976c13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.5&amp;adm=2457"
                                target="_blank" data-stat-id="AA17079+2_17_5_84" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17079+2_17_5_84', '//item.mi.com/product/10000032.html', 'pcpid', '31pchomestar005004#rid=64f45ecb97eec5cf6d1330355c976c13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.5&amp;adm=2457']);">
                                <img src="/static/index/index/img/725a37e3-78b7-4298-8098-c40097bf179d.png" srcset="//i1.mifile.cn/a4/073b5ddc-9117-4668-adbe-878c928a79da 2x"
                                    alt="小米笔记本">
                            </a>
                            <h3 class="title">
                                <a href="https://item.mi.com/product/10000032.html" data-stat-aid="AA17079" data-stat-pid="2_17_5_84" data-log_code="31pchomestar005004#rid=64f45ecb97eec5cf6d1330355c976c13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.5&amp;adm=2457"
                                    target="_blank" data-stat-id="AA17079+2_17_5_84" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17079+2_17_5_84', '//item.mi.com/product/10000032.html', 'pcpid', '31pchomestar005004#rid=64f45ecb97eec5cf6d1330355c976c13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.5&amp;adm=2457']);">小米笔记本</a>
                            </h3>
                            <p class="desc">更轻更薄，像杂志一样随身携带</p>
                            <p class="price">3599元起</p>
                        </li>
                        <li class="rainbow-item-6">
                            <a class="thumb exposure" href="https://www.mi.com/shouhuan2/" data-stat-aid="AA18956" data-stat-pid="2_17_6_85" data-log_code="31pchomestar006004#rid=909cfe3f87d27ab1932b5ce3389e99e5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.6&amp;pid=2163900001&amp;adm=2038"
                                target="_blank" data-stat-id="AA18956+2_17_6_85" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18956+2_17_6_85', '//www.mi.com/shouhuan2/', 'pcpid', '31pchomestar006004#rid=909cfe3f87d27ab1932b5ce3389e99e5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.6&amp;pid=2163900001&amp;adm=2038']);">
                                <img src="/static/index/index/img/6ef55907-bbed-49be-a2bb-be0821b5f7b8.png" srcset="//i1.mifile.cn/a4/858c77b0-4a70-411f-bb1e-9b600c5897a6 2x"
                                    alt="小米手环 2">
                            </a>
                            <h3 class="title">
                                <a href="https://www.mi.com/shouhuan2/" data-stat-aid="AA18956" data-stat-pid="2_17_6_85" data-log_code="31pchomestar006004#rid=909cfe3f87d27ab1932b5ce3389e99e5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.6&amp;pid=2163900001&amp;adm=2038"
                                    target="_blank" data-stat-id="AA18956+2_17_6_85" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18956+2_17_6_85', '//www.mi.com/shouhuan2/', 'pcpid', '31pchomestar006004#rid=909cfe3f87d27ab1932b5ce3389e99e5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.6&amp;pid=2163900001&amp;adm=2038']);">小米手环 2</a>
                            </h3>
                            <p class="desc">OLED 显示屏幕，升级计步算法</p>
                            <p class="price">149元</p>
                        </li>
                        <li class="rainbow-item-7">
                            <a class="thumb exposure" href="https://www.mi.com/water2/" data-stat-aid="AA18946" data-stat-pid="2_17_7_86" data-log_code="31pchomestar007004#rid=e710a5d6ac1e68c6ca82e1a5ddb8f8d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.7&amp;pid=2160800022&amp;adm=1808"
                                target="_blank" data-stat-id="AA18946+2_17_7_86" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18946+2_17_7_86', '//www.mi.com/water2/', 'pcpid', '31pchomestar007004#rid=e710a5d6ac1e68c6ca82e1a5ddb8f8d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.7&amp;pid=2160800022&amp;adm=1808']);">
                                <img src="/static/index/index/img/T1KvdjBX_v1RXrhCrK.jpg" srcset="//i1.mifile.cn/a4/T14iKgBXZv1RXrhCrK.jpg 2x" alt="小米净水器 厨下式">
                            </a>
                            <h3 class="title">
                                <a href="https://www.mi.com/water2/" data-stat-aid="AA18946" data-stat-pid="2_17_7_86" data-log_code="31pchomestar007004#rid=e710a5d6ac1e68c6ca82e1a5ddb8f8d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.7&amp;pid=2160800022&amp;adm=1808"
                                    target="_blank" data-stat-id="AA18946+2_17_7_86" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18946+2_17_7_86', '//www.mi.com/water2/', 'pcpid', '31pchomestar007004#rid=e710a5d6ac1e68c6ca82e1a5ddb8f8d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.7&amp;pid=2160800022&amp;adm=1808']);">小米净水器 厨下式</a>
                            </h3>
                            <p class="desc">直出纯净水，隐藏式安装</p>
                            <p class="price">1999元</p>
                        </li>
                        <li class="rainbow-item-8">
                            <a class="thumb exposure" href="https://www.mi.com/earphonepro/" data-stat-aid="AA18966" data-stat-pid="2_17_8_87" data-log_code="31pchomestar008004#rid=4c52d2e1f285fecb935d571a8c714b65&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.8&amp;pid=2164300008&amp;adm=3683"
                                target="_blank" data-stat-id="AA18966+2_17_8_87" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18966+2_17_8_87', '//www.mi.com/earphonepro/', 'pcpid', '31pchomestar008004#rid=4c52d2e1f285fecb935d571a8c714b65&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.8&amp;pid=2164300008&amp;adm=3683']);">
                                <img src="/static/index/index/img/302f2608-655a-489c-a0c5-a3b9172defd1.png" srcset="//i1.mifile.cn/a4/302f2608-655a-489c-a0c5-a3b9172defd1 2x"
                                    alt="小米圈铁耳机Pro">
                            </a>
                            <h3 class="title">
                                <a href="https://www.mi.com/earphonepro/" data-stat-aid="AA18966" data-stat-pid="2_17_8_87" data-log_code="31pchomestar008004#rid=4c52d2e1f285fecb935d571a8c714b65&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.8&amp;pid=2164300008&amp;adm=3683"
                                    target="_blank" data-stat-id="AA18966+2_17_8_87" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18966+2_17_8_87', '//www.mi.com/earphonepro/', 'pcpid', '31pchomestar008004#rid=4c52d2e1f285fecb935d571a8c714b65&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.8&amp;pid=2164300008&amp;adm=3683']);">小米圈铁耳机Pro</a>
                            </h3>
                            <p class="desc">独创双动圈+动铁，三单元发声</p>
                            <p class="price">149元</p>
                        </li>
                        <li class="rainbow-item-9">
                            <a class="thumb exposure" href="https://www.mi.com/roomrobot/" data-stat-aid="AA18958" data-stat-pid="2_17_9_88" data-log_code="31pchomestar009004#rid=65257424be493558a5af973b5ac44d5f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.9&amp;pid=2163400004&amp;adm=2615"
                                target="_blank" data-stat-id="AA18958+2_17_9_88" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18958+2_17_9_88', '//www.mi.com/roomrobot/', 'pcpid', '31pchomestar009004#rid=65257424be493558a5af973b5ac44d5f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.9&amp;pid=2163400004&amp;adm=2615']);">
                                <img src="/static/index/index/img/848def18-47d9-4ca0-8822-c2ac61b83779.png" srcset="//i1.mifile.cn/a4/d70bc596-524b-4a05-996b-ceccc072fc5e 2x"
                                    alt="米家扫地机器人">
                            </a>
                            <h3 class="title">
                                <a href="https://www.mi.com/roomrobot/" data-stat-aid="AA18958" data-stat-pid="2_17_9_88" data-log_code="31pchomestar009004#rid=65257424be493558a5af973b5ac44d5f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.9&amp;pid=2163400004&amp;adm=2615"
                                    target="_blank" data-stat-id="AA18958+2_17_9_88" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18958+2_17_9_88', '//www.mi.com/roomrobot/', 'pcpid', '31pchomestar009004#rid=65257424be493558a5af973b5ac44d5f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.9&amp;pid=2163400004&amp;adm=2615']);">米家扫地机器人</a>
                            </h3>
                            <p class="desc">爱干净，高效完成清扫任务</p>
                            <p class="price">1699元</p>
                        </li>
                        <li class="rainbow-item-10">
                            <a class="thumb exposure" href="https://www.mi.com/miwifi3/" data-stat-aid="AA19048" data-stat-pid="2_17_10_89" data-log_code="31pchomestar010004#rid=e0c5f9494dddaaaf7259ce605c0ac318&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.10&amp;pid=2161200063&amp;adm=3664"
                                target="_blank" data-stat-id="AA19048+2_17_10_89" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19048+2_17_10_89', '//www.mi.com/miwifi3/', 'pcpid', '31pchomestar010004#rid=e0c5f9494dddaaaf7259ce605c0ac318&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.10&amp;pid=2161200063&amp;adm=3664']);">
                                <img src="/static/index/index/img/de35852a-1be5-4ef5-846f-dcdd2efcfea6.png" srcset="//i1.mifile.cn/a4/de35852a-1be5-4ef5-846f-dcdd2efcfea6 2x"
                                    alt="小米路由器3">
                            </a>
                            <h3 class="title">
                                <a href="https://www.mi.com/miwifi3/" data-stat-aid="AA19048" data-stat-pid="2_17_10_89" data-log_code="31pchomestar010004#rid=e0c5f9494dddaaaf7259ce605c0ac318&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.10&amp;pid=2161200063&amp;adm=3664"
                                    target="_blank" data-stat-id="AA19048+2_17_10_89" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19048+2_17_10_89', '//www.mi.com/miwifi3/', 'pcpid', '31pchomestar010004#rid=e0c5f9494dddaaaf7259ce605c0ac318&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030337.10&amp;pid=2161200063&amp;adm=3664']);">小米路由器3</a>
                            </h3>
                            <p class="desc">更快更强，不止四天线</p>
                            <p class="price">149元</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-main home-main">
    <div class="container">
        <div id="homeelec" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="false">
            <div class="box-hd">
                <h2 class="title">家电</h2>
                <!-- <h2 class="title">冲破大风雪，我们坐在雪橇上  (๑•̀ㅂ•́)و✧ </h2> -->
                <div class="more J_brickNav">
                    <ul class="tab-list J_brickTabSwitch" data-tab-target="homeelec-content">
                        <li class="tab-active">热门</li>
                        <li>电视影音</li>
                        <li>电脑</li>
                        <li>家居</li>
                    </ul>
                </div>
            </div>
            <div class="box-bd J_brickBd">
                <div class="row">
                    <div class="span4 span-first">
                        <ul class="brick-promo-list clearfix">
                            <li class="brick-item brick-item-l">
                                <a href="https://www.mi.com/water2/" class="exposure" data-stat-aid="AA19532" data-stat-pid="2_52_1_298" data-log_code="31pchomehomeelec_left001011#rid=97a627c819e993ce9811ced6f0904223&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030368.1&amp;adm=3488"
                                    target="_blank" data-stat-id="AA19532+2_52_1_298" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19532+2_52_1_298', '//www.mi.com/water2/', 'pcpid', '31pchomehomeelec_left001011#rid=97a627c819e993ce9811ced6f0904223&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030368.1&amp;adm=3488']);">
                                    <img src="/static/index/index/img/xmad_14950222431232_Twnyl.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="span16">
                        <div id="homeelec-content" class="tab-container">
                            <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                <li class="brick-item brick-item-m" data-gid="1172700040">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172700040.html" data-stat-aid="AA18423" data-stat-pid="2_53_1_299" target="_blank"
                                            data-log_code="31pchomehomeelec_right_0001012#rid=d5ec390276211c174ad47d0b284df5fe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.1&amp;pid=1172700040&amp;adm=4112"
                                            data-stat-id="AA18423+2_53_1_299" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18423+2_53_1_299', '//item.mi.com/1172700040.html', 'pcpid', '31pchomehomeelec_right_0001012#rid=d5ec390276211c174ad47d0b284df5fe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.1&amp;pid=1172700040&amp;adm=4112']);">
                                            <img src="/static/index/index/img/pms_1500287084.jpg" alt="小米电视4A 32英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172700040.html" data-stat-aid="AA18423" data-stat-pid="2_53_1_299" data-log_code="31pchomehomeelec_right_0001012#rid=d5ec390276211c174ad47d0b284df5fe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.1&amp;pid=1172700040&amp;adm=4112"
                                            target="_blank" data-stat-id="AA18423+2_53_1_299" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18423+2_53_1_299', '//item.mi.com/1172700040.html', 'pcpid', '31pchomehomeelec_right_0001012#rid=d5ec390276211c174ad47d0b284df5fe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.1&amp;pid=1172700040&amp;adm=4112']);">小米电视4A 32英寸</a>
                                    </h3>
                                    <p class="desc">64位四核处理器 / 1GB+4GB大内存</p>
                                    <p class="price">
                                        <span class="num">999</span>元
                                        <del>
                                            <span class="num">1199</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172700040.html" data-stat-aid="AA18423" data-stat-pid="2_53_1_299" data-log_code="31pchomehomeelec_right_0001012#rid=d5ec390276211c174ad47d0b284df5fe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.1&amp;pid=1172700040&amp;adm=4112"
                                            target="_blank" data-stat-id="AA18423+2_53_1_299" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18423+2_53_1_299', '//item.mi.com/1172700040.html', 'pcpid', '31pchomehomeelec_right_0001012#rid=d5ec390276211c174ad47d0b284df5fe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.1&amp;pid=1172700040&amp;adm=4112']);">
                                            <span class="review">小米电视太给力了，抢购产品杠杠的，听说客服妹子都特别...</span>
                                            <span class="author"> 来自于 不吃肉的虎 的评价
                                                <span class="date" data-date="1501638797"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1173300020">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173300020.html" data-stat-aid="AA18457" data-stat-pid="2_53_2_300" target="_blank"
                                            data-log_code="31pchomehomeelec_right_0002012#rid=6942c0d30f37fd14b185acdced724044&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.2&amp;pid=1173300020&amp;adm=3878"
                                            data-stat-id="AA18457+2_53_2_300" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18457+2_53_2_300', '//item.mi.com/1173300020.html', 'pcpid', '31pchomehomeelec_right_0002012#rid=6942c0d30f37fd14b185acdced724044&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.2&amp;pid=1173300020&amp;adm=3878']);">
                                            <img src="/static/index/index/img/pms_1503909218.png" alt="小米电视4A 49英寸 标准版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173300020.html" data-stat-aid="AA18457" data-stat-pid="2_53_2_300" data-log_code="31pchomehomeelec_right_0002012#rid=6942c0d30f37fd14b185acdced724044&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.2&amp;pid=1173300020&amp;adm=3878"
                                            target="_blank" data-stat-id="AA18457+2_53_2_300" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18457+2_53_2_300', '//item.mi.com/1173300020.html', 'pcpid', '31pchomehomeelec_right_0002012#rid=6942c0d30f37fd14b185acdced724044&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.2&amp;pid=1173300020&amp;adm=3878']);">小米电视4A 49英寸 标准版</a>
                                    </h3>
                                    <p class="desc">2GB+8GB 大储存 / 全高清HDR</p>
                                    <p class="price">
                                        <span class="num">2199</span>元
                                        <del>
                                            <span class="num">2399</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9.2折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173300020.html" data-stat-aid="AA18457" data-stat-pid="2_53_2_300" data-log_code="31pchomehomeelec_right_0002012#rid=6942c0d30f37fd14b185acdced724044&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.2&amp;pid=1173300020&amp;adm=3878"
                                            target="_blank" data-stat-id="AA18457+2_53_2_300" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18457+2_53_2_300', '//item.mi.com/1173300020.html', 'pcpid', '31pchomehomeelec_right_0002012#rid=6942c0d30f37fd14b185acdced724044&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.2&amp;pid=1173300020&amp;adm=3878']);">
                                            <span class="review">电视终于到家！外形满意，屏幕清楚，功能齐全，尤其是会...</span>
                                            <span class="author"> 来自于 烟草 的评价
                                                <span class="date" data-date="1512034273"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172300011">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172300022.html" data-stat-aid="AA19345" data-stat-pid="2_53_3_301" target="_blank"
                                            data-log_code="31pchomehomeelec_right_0003012#rid=c4b81ae0d6ea55873c930b59b1b2da98&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.3&amp;pid=2172300011&amp;adm=4699"
                                            data-stat-id="AA19345+2_53_3_301" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19345+2_53_3_301', '//item.mi.com/1172300022.html', 'pcpid', '31pchomehomeelec_right_0003012#rid=c4b81ae0d6ea55873c930b59b1b2da98&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.3&amp;pid=2172300011&amp;adm=4699']);">
                                            <img src="/static/index/index/img/pms_1496997930.jpg" alt="13.3&quot;小米笔记本Air i5 8G 256G MX150 银色" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172300022.html" data-stat-aid="AA19345" data-stat-pid="2_53_3_301" data-log_code="31pchomehomeelec_right_0003012#rid=c4b81ae0d6ea55873c930b59b1b2da98&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.3&amp;pid=2172300011&amp;adm=4699"
                                            target="_blank" data-stat-id="AA19345+2_53_3_301" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19345+2_53_3_301', '//item.mi.com/1172300022.html', 'pcpid', '31pchomehomeelec_right_0003012#rid=c4b81ae0d6ea55873c930b59b1b2da98&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.3&amp;pid=2172300011&amp;adm=4699']);">13.3"小米笔记本Air i5 8G 256G MX150 银色</a>
                                    </h3>
                                    <p class="desc"></p>
                                    <p class="price">
                                        <span class="num">5199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172300022.html" data-stat-aid="AA19345" data-stat-pid="2_53_3_301" data-log_code="31pchomehomeelec_right_0003012#rid=c4b81ae0d6ea55873c930b59b1b2da98&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.3&amp;pid=2172300011&amp;adm=4699"
                                            target="_blank" data-stat-id="AA19345+2_53_3_301" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19345+2_53_3_301', '//item.mi.com/1172300022.html', 'pcpid', '31pchomehomeelec_right_0003012#rid=c4b81ae0d6ea55873c930b59b1b2da98&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.3&amp;pid=2172300011&amp;adm=4699']);">
                                            <span class="review">刚收到 物流非常快。 第一次买笔记本电脑。就选中小...</span>
                                            <span class="author"> 来自于 。会痛的石头 的评价
                                                <span class="date" data-date="1513140873"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173600001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173600022.html" data-stat-aid="AA19344" data-stat-pid="2_53_4_302" target="_blank"
                                            data-log_code="31pchomehomeelec_right_0004012#rid=34d0a96f3425a13936a1df51853088a8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.4&amp;pid=2173600001&amp;adm=4698"
                                            data-stat-id="AA19344+2_53_4_302" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19344+2_53_4_302', '//item.mi.com/1173600022.html', 'pcpid', '31pchomehomeelec_right_0004012#rid=34d0a96f3425a13936a1df51853088a8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.4&amp;pid=2173600001&amp;adm=4698']);">
                                            <img src="/static/index/index/img/pms_1505897517.jpg" alt="15.6&quot;小米笔记本Pro i7 16G MX150 深空灰" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173600022.html" data-stat-aid="AA19344" data-stat-pid="2_53_4_302" data-log_code="31pchomehomeelec_right_0004012#rid=34d0a96f3425a13936a1df51853088a8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.4&amp;pid=2173600001&amp;adm=4698"
                                            target="_blank" data-stat-id="AA19344+2_53_4_302" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19344+2_53_4_302', '//item.mi.com/1173600022.html', 'pcpid', '31pchomehomeelec_right_0004012#rid=34d0a96f3425a13936a1df51853088a8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.4&amp;pid=2173600001&amp;adm=4698']);">15.6"小米笔记本Pro i7 16G MX150 深空灰</a>
                                    </h3>
                                    <p class="desc"></p>
                                    <p class="price">
                                        <span class="num">6999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173600022.html" data-stat-aid="AA19344" data-stat-pid="2_53_4_302" data-log_code="31pchomehomeelec_right_0004012#rid=34d0a96f3425a13936a1df51853088a8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.4&amp;pid=2173600001&amp;adm=4698"
                                            target="_blank" data-stat-id="AA19344+2_53_4_302" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19344+2_53_4_302', '//item.mi.com/1173600022.html', 'pcpid', '31pchomehomeelec_right_0004012#rid=34d0a96f3425a13936a1df51853088a8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.4&amp;pid=2173600001&amp;adm=4698']);">
                                            <span class="review">我就是小米专业户 听说小米客服个个都貌美如花 我...</span>
                                            <span class="author"> 来自于 jiic 的评价
                                                <span class="date" data-date="1510641459"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2180500002">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1180500002.html" data-stat-aid="AA19562" data-stat-pid="2_53_5_303" target="_blank"
                                            data-log_code="31pchomehomeelec_right_0005012#rid=20790f00d5247e9b6d72b17d6f0aeffe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.5&amp;pid=2180500002&amp;adm=4790"
                                            data-stat-id="AA19562+2_53_5_303" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19562+2_53_5_303', '//item.mi.com/1180500002.html', 'pcpid', '31pchomehomeelec_right_0005012#rid=20790f00d5247e9b6d72b17d6f0aeffe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.5&amp;pid=2180500002&amp;adm=4790']);">
                                            <img src="/static/index/index/img/pms_1517214417.jpg" alt="飞利浦智睿蜡烛灯泡 水晶版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1180500002.html" data-stat-aid="AA19562" data-stat-pid="2_53_5_303" data-log_code="31pchomehomeelec_right_0005012#rid=20790f00d5247e9b6d72b17d6f0aeffe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.5&amp;pid=2180500002&amp;adm=4790"
                                            target="_blank" data-stat-id="AA19562+2_53_5_303" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19562+2_53_5_303', '//item.mi.com/1180500002.html', 'pcpid', '31pchomehomeelec_right_0005012#rid=20790f00d5247e9b6d72b17d6f0aeffe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.5&amp;pid=2180500002&amp;adm=4790']);">飞利浦智睿蜡烛灯泡 水晶版</a>
                                    </h3>
                                    <p class="desc">亮度色温可调，十年使用寿命</p>
                                    <p class="price">
                                        <span class="num">59</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-new">新品</div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173100001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173100005.html" data-stat-aid="AA19412" data-stat-pid="2_53_6_304" target="_blank"
                                            data-log_code="31pchomehomeelec_right_0006012#rid=49b24f5aed05c35977bae14788d0cb8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.6&amp;pid=2173100001&amp;adm=4091"
                                            data-stat-id="AA19412+2_53_6_304" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19412+2_53_6_304', '//item.mi.com/1173100005.html', 'pcpid', '31pchomehomeelec_right_0006012#rid=49b24f5aed05c35977bae14788d0cb8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.6&amp;pid=2173100001&amp;adm=4091']);">
                                            <img src="/static/index/index/img/pms_1504498936.jpg" alt="米家电水壶" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173100005.html" data-stat-aid="AA19412" data-stat-pid="2_53_6_304" data-log_code="31pchomehomeelec_right_0006012#rid=49b24f5aed05c35977bae14788d0cb8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.6&amp;pid=2173100001&amp;adm=4091"
                                            target="_blank" data-stat-id="AA19412+2_53_6_304" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19412+2_53_6_304', '//item.mi.com/1173100005.html', 'pcpid', '31pchomehomeelec_right_0006012#rid=49b24f5aed05c35977bae14788d0cb8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.6&amp;pid=2173100001&amp;adm=4091']);">米家电水壶</a>
                                    </h3>
                                    <p class="desc">一杯水，是一家人的安心</p>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173100005.html" data-stat-aid="AA19412" data-stat-pid="2_53_6_304" data-log_code="31pchomehomeelec_right_0006012#rid=49b24f5aed05c35977bae14788d0cb8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.6&amp;pid=2173100001&amp;adm=4091"
                                            target="_blank" data-stat-id="AA19412+2_53_6_304" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19412+2_53_6_304', '//item.mi.com/1173100005.html', 'pcpid', '31pchomehomeelec_right_0006012#rid=49b24f5aed05c35977bae14788d0cb8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.6&amp;pid=2173100001&amp;adm=4091']);">
                                            <span class="review">已经爱上小米了，怎么办</span>
                                            <span class="author"> 来自于 磊 的评价
                                                <span class="date" data-date="1511958130"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164300024">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/airpro/" data-stat-aid="AA19534" data-stat-pid="2_53_7_305" target="_blank"
                                            data-log_code="31pchomehomeelec_right_0007012#rid=1d7f15e499950a63a585321c49765355&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.7&amp;pid=2164300024&amp;adm=3708"
                                            data-stat-id="AA19534+2_53_7_305" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19534+2_53_7_305', 'https://www.mi.com/airpro/', 'pcpid', '31pchomehomeelec_right_0007012#rid=1d7f15e499950a63a585321c49765355&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.7&amp;pid=2164300024&amp;adm=3708']);">
                                            <img src="/static/index/index/img/xmad_14972549116226_tZpod.png" alt="米家空气净化器Pro" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/airpro/" data-stat-aid="AA19534" data-stat-pid="2_53_7_305" data-log_code="31pchomehomeelec_right_0007012#rid=1d7f15e499950a63a585321c49765355&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.7&amp;pid=2164300024&amp;adm=3708"
                                            target="_blank" data-stat-id="AA19534+2_53_7_305" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19534+2_53_7_305', 'https://www.mi.com/airpro/', 'pcpid', '31pchomehomeelec_right_0007012#rid=1d7f15e499950a63a585321c49765355&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.7&amp;pid=2164300024&amp;adm=3708']);">米家空气净化器Pro</a>
                                    </h3>
                                    <p class="desc">限量赠59元插线板</p>
                                    <p class="price">
                                        <span class="num">1499</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/airpro/" data-stat-aid="AA19534" data-stat-pid="2_53_7_305" data-log_code="31pchomehomeelec_right_0007012#rid=1d7f15e499950a63a585321c49765355&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.7&amp;pid=2164300024&amp;adm=3708"
                                            target="_blank" data-stat-id="AA19534+2_53_7_305" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19534+2_53_7_305', 'https://www.mi.com/airpro/', 'pcpid', '31pchomehomeelec_right_0007012#rid=1d7f15e499950a63a585321c49765355&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.7&amp;pid=2164300024&amp;adm=3708']);">
                                            <span class="review">外观很漂亮，有个显示屏，好高大尚，睡眠模式非常安静！</span>
                                            <span class="author"> 来自于 嘉仁宫 的评价
                                                <span class="date" data-date="1511094999"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2154000002">
                                    <div class="figure figure-img">
                                        <a href="https://www.mi.com/micamera/" class="exposure" data-stat-aid="AA17492" data-stat-pid="2_53_8_306" data-log_code="31pchomehomeelec_right_0008012#rid=ed530bdfcb85c7ca8ec505d0b8ac173f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.8&amp;pid=2154000002&amp;adm=2141"
                                            target="_blank" data-stat-id="AA17492+2_53_8_306" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17492+2_53_8_306', '//www.mi.com/micamera/', 'pcpid', '31pchomehomeelec_right_0008012#rid=ed530bdfcb85c7ca8ec505d0b8ac173f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.8&amp;pid=2154000002&amp;adm=2141']);">
                                            <img src="/static/index/index/img/pms_1468806372.jpg" alt="小白摄像机" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/micamera/" class="exposure" data-stat-aid="AA17492" data-stat-pid="2_53_8_306" data-log_code="31pchomehomeelec_right_0008012#rid=ed530bdfcb85c7ca8ec505d0b8ac173f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.8&amp;pid=2154000002&amp;adm=2141"
                                            target="_blank" data-stat-id="AA17492+2_53_8_306" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17492+2_53_8_306', '//www.mi.com/micamera/', 'pcpid', '31pchomehomeelec_right_0008012#rid=ed530bdfcb85c7ca8ec505d0b8ac173f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030369.8&amp;pid=2154000002&amp;adm=2141']);">小白摄像机</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">399</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/p/1995.html" target="_blank" data-stat-id="e3e1d2968d9ab1ea" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e3e1d2968d9ab1ea', 'https://www.mi.com/p/1995.html', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/p/1995.html" target="_blank" data-stat-id="b594452702798e3c" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-b594452702798e3c', 'https://www.mi.com/p/1995.html', 'pcpid', '']);">浏览更多
                                        <small>热门</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2173300010">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173300021.html" data-stat-aid="AA18458" data-stat-pid="2_54_1_307" target="_blank"
                                            data-log_code="31pchomehomeelec_right_1001013#rid=bba2522667a4ed539965c5df76ff8fb9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.1&amp;pid=2173300010&amp;adm=3644"
                                            data-stat-id="AA18458+2_54_1_307" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18458+2_54_1_307', '//item.mi.com/1173300021.html', 'pcpid', '31pchomehomeelec_right_1001013#rid=bba2522667a4ed539965c5df76ff8fb9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.1&amp;pid=2173300010&amp;adm=3644']);">
                                            <img src="/static/index/index/img/pms_1503909300.png" alt="小米电视4A 55英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173300021.html" data-stat-aid="AA18458" data-stat-pid="2_54_1_307" data-log_code="31pchomehomeelec_right_1001013#rid=bba2522667a4ed539965c5df76ff8fb9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.1&amp;pid=2173300010&amp;adm=3644"
                                            target="_blank" data-stat-id="AA18458+2_54_1_307" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18458+2_54_1_307', '//item.mi.com/1173300021.html', 'pcpid', '31pchomehomeelec_right_1001013#rid=bba2522667a4ed539965c5df76ff8fb9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.1&amp;pid=2173300010&amp;adm=3644']);">小米电视4A 55英寸</a>
                                    </h3>
                                    <p class="desc">4K高清HDR / 真四核64位高性能处理器</p>
                                    <p class="price">
                                        <span class="num">2899</span>元
                                        <del>
                                            <span class="num">2999</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9.7折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173300021.html" data-stat-aid="AA18458" data-stat-pid="2_54_1_307" data-log_code="31pchomehomeelec_right_1001013#rid=bba2522667a4ed539965c5df76ff8fb9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.1&amp;pid=2173300010&amp;adm=3644"
                                            target="_blank" data-stat-id="AA18458+2_54_1_307" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18458+2_54_1_307', '//item.mi.com/1173300021.html', 'pcpid', '31pchomehomeelec_right_1001013#rid=bba2522667a4ed539965c5df76ff8fb9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.1&amp;pid=2173300010&amp;adm=3644']);">
                                            <span class="review">大气，比手机都薄，朋友见了都问哪里买的</span>
                                            <span class="author"> 来自于 韩猛 的评价
                                                <span class="date" data-date="1510885496"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174100035">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174100036.html" data-stat-aid="AA19423" data-stat-pid="2_54_2_308" target="_blank"
                                            data-log_code="31pchomehomeelec_right_1002013#rid=f63e4c204deddf59c900bdcd44d6513f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.2&amp;pid=2174100035&amp;adm=4732"
                                            data-stat-id="AA19423+2_54_2_308" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19423+2_54_2_308', '//item.mi.com/1174100036.html', 'pcpid', '31pchomehomeelec_right_1002013#rid=f63e4c204deddf59c900bdcd44d6513f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.2&amp;pid=2174100035&amp;adm=4732']);">
                                            <img src="/static/index/index/img/pms_1510111588.jpg" alt="小米电视4 55英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174100036.html" data-stat-aid="AA19423" data-stat-pid="2_54_2_308" data-log_code="31pchomehomeelec_right_1002013#rid=f63e4c204deddf59c900bdcd44d6513f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.2&amp;pid=2174100035&amp;adm=4732"
                                            target="_blank" data-stat-id="AA19423+2_54_2_308" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19423+2_54_2_308', '//item.mi.com/1174100036.html', 'pcpid', '31pchomehomeelec_right_1002013#rid=f63e4c204deddf59c900bdcd44d6513f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.2&amp;pid=2174100035&amp;adm=4732']);">小米电视4 55英寸</a>
                                    </h3>
                                    <p class="desc">4.9mm 极超薄机身 / 2GB+8GB 大内存空间</p>
                                    <p class="price">
                                        <span class="num">4499</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174100036.html" data-stat-aid="AA19423" data-stat-pid="2_54_2_308" data-log_code="31pchomehomeelec_right_1002013#rid=f63e4c204deddf59c900bdcd44d6513f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.2&amp;pid=2174100035&amp;adm=4732"
                                            target="_blank" data-stat-id="AA19423+2_54_2_308" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19423+2_54_2_308', '//item.mi.com/1174100036.html', 'pcpid', '31pchomehomeelec_right_1002013#rid=f63e4c204deddf59c900bdcd44d6513f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.2&amp;pid=2174100035&amp;adm=4732']);">
                                            <span class="review">装了还可以，真的很薄！物流说15天给你发，就绝不14...</span>
                                            <span class="author"> 来自于 1246055826 的评价
                                                <span class="date" data-date="1512218060"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1172700040">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172700040.html" data-stat-aid="AA19187" data-stat-pid="2_54_3_309" target="_blank"
                                            data-log_code="31pchomehomeelec_right_1003013#rid=c6642e521ea5f812c2080e2ada1756d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.3&amp;pid=1172700040&amp;adm=4613"
                                            data-stat-id="AA19187+2_54_3_309" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19187+2_54_3_309', '//item.mi.com/1172700040.html', 'pcpid', '31pchomehomeelec_right_1003013#rid=c6642e521ea5f812c2080e2ada1756d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.3&amp;pid=1172700040&amp;adm=4613']);">
                                            <img src="/static/index/index/img/pms_1500287084.jpg" alt="小米电视4A 32英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172700040.html" data-stat-aid="AA19187" data-stat-pid="2_54_3_309" data-log_code="31pchomehomeelec_right_1003013#rid=c6642e521ea5f812c2080e2ada1756d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.3&amp;pid=1172700040&amp;adm=4613"
                                            target="_blank" data-stat-id="AA19187+2_54_3_309" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19187+2_54_3_309', '//item.mi.com/1172700040.html', 'pcpid', '31pchomehomeelec_right_1003013#rid=c6642e521ea5f812c2080e2ada1756d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.3&amp;pid=1172700040&amp;adm=4613']);">小米电视4A 32英寸</a>
                                    </h3>
                                    <p class="desc">64位四核处理器 / 1GB+4GB大内存 </p>
                                    <p class="price">
                                        <span class="num">999</span>元
                                        <del>
                                            <span class="num">1199</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172700040.html" data-stat-aid="AA19187" data-stat-pid="2_54_3_309" data-log_code="31pchomehomeelec_right_1003013#rid=c6642e521ea5f812c2080e2ada1756d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.3&amp;pid=1172700040&amp;adm=4613"
                                            target="_blank" data-stat-id="AA19187+2_54_3_309" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19187+2_54_3_309', '//item.mi.com/1172700040.html', 'pcpid', '31pchomehomeelec_right_1003013#rid=c6642e521ea5f812c2080e2ada1756d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.3&amp;pid=1172700040&amp;adm=4613']);">
                                            <span class="review">我们家都觉得很kiang（不懂了吧，汕尾话！优秀！！）</span>
                                            <span class="author"> 来自于 罗罗翔 的评价
                                                <span class="date" data-date="1510534510"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170900025">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mitv4A/65/" data-stat-aid="AA18461" data-stat-pid="2_54_4_310" target="_blank"
                                            data-log_code="31pchomehomeelec_right_1004013#rid=e248580e5def2ee3cc436cb2c9a90d2a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.4&amp;pid=2170900025&amp;adm=3833"
                                            data-stat-id="AA18461+2_54_4_310" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18461+2_54_4_310', '//www.mi.com/mitv4A/65/', 'pcpid', '31pchomehomeelec_right_1004013#rid=e248580e5def2ee3cc436cb2c9a90d2a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.4&amp;pid=2170900025&amp;adm=3833']);">
                                            <img src="/static/index/index/img/pms_1490077569.png" alt="小米电视4A 65英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mitv4A/65/" data-stat-aid="AA18461" data-stat-pid="2_54_4_310" data-log_code="31pchomehomeelec_right_1004013#rid=e248580e5def2ee3cc436cb2c9a90d2a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.4&amp;pid=2170900025&amp;adm=3833"
                                            target="_blank" data-stat-id="AA18461+2_54_4_310" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18461+2_54_4_310', '//www.mi.com/mitv4A/65/', 'pcpid', '31pchomehomeelec_right_1004013#rid=e248580e5def2ee3cc436cb2c9a90d2a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.4&amp;pid=2170900025&amp;adm=3833']);">小米电视4A 65英寸</a>
                                    </h3>
                                    <p class="desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                    <p class="price">
                                        <span class="num">4999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mitv4A/65/" data-stat-aid="AA18461" data-stat-pid="2_54_4_310" data-log_code="31pchomehomeelec_right_1004013#rid=e248580e5def2ee3cc436cb2c9a90d2a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.4&amp;pid=2170900025&amp;adm=3833"
                                            target="_blank" data-stat-id="AA18461+2_54_4_310" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18461+2_54_4_310', '//www.mi.com/mitv4A/65/', 'pcpid', '31pchomehomeelec_right_1004013#rid=e248580e5def2ee3cc436cb2c9a90d2a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.4&amp;pid=2170900025&amp;adm=3833']);">
                                            <span class="review">不错 不错 值得购买</span>
                                            <span class="author"> 来自于 笨笨不不喔~ 的评价
                                                <span class="date" data-date="1495729477"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1173300019">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173300019.html" data-stat-aid="AA19188" data-stat-pid="2_54_5_311" target="_blank"
                                            data-log_code="31pchomehomeelec_right_1005013#rid=55785a33e1e9cf021047c8f3998b51e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.5&amp;pid=1173300019&amp;adm=4615"
                                            data-stat-id="AA19188+2_54_5_311" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19188+2_54_5_311', '//item.mi.com/1173300019.html', 'pcpid', '31pchomehomeelec_right_1005013#rid=55785a33e1e9cf021047c8f3998b51e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.5&amp;pid=1173300019&amp;adm=4615']);">
                                            <img src="/static/index/index/img/pms_1503909150.png" alt="小米电视4A 43英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173300019.html" data-stat-aid="AA19188" data-stat-pid="2_54_5_311" data-log_code="31pchomehomeelec_right_1005013#rid=55785a33e1e9cf021047c8f3998b51e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.5&amp;pid=1173300019&amp;adm=4615"
                                            target="_blank" data-stat-id="AA19188+2_54_5_311" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19188+2_54_5_311', '//item.mi.com/1173300019.html', 'pcpid', '31pchomehomeelec_right_1005013#rid=55785a33e1e9cf021047c8f3998b51e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.5&amp;pid=1173300019&amp;adm=4615']);">小米电视4A 43英寸</a>
                                    </h3>
                                    <p class="desc">全高清屏 / 人工智能语音 / 大存储</p>
                                    <p class="price">
                                        <span class="num">1999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173300019.html" data-stat-aid="AA19188" data-stat-pid="2_54_5_311" data-log_code="31pchomehomeelec_right_1005013#rid=55785a33e1e9cf021047c8f3998b51e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.5&amp;pid=1173300019&amp;adm=4615"
                                            target="_blank" data-stat-id="AA19188+2_54_5_311" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19188+2_54_5_311', '//item.mi.com/1173300019.html', 'pcpid', '31pchomehomeelec_right_1005013#rid=55785a33e1e9cf021047c8f3998b51e2&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.5&amp;pid=1173300019&amp;adm=4615']);">
                                            <span class="review">漂亮的很，，放在客厅的感觉不错。关键是电视节目全，我...</span>
                                            <span class="author"> 来自于 王如意 的评价
                                                <span class="date" data-date="1502414944"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1173800001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173800001.html" data-stat-aid="AA19315" data-stat-pid="2_54_6_312" target="_blank"
                                            data-log_code="31pchomehomeelec_right_1006013#rid=488b330de40812a21ca255e01e687ad6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.6&amp;pid=1173800001&amp;adm=4680"
                                            data-stat-id="AA19315+2_54_6_312" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19315+2_54_6_312', '//item.mi.com/1173800001.html', 'pcpid', '31pchomehomeelec_right_1006013#rid=488b330de40812a21ca255e01e687ad6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.6&amp;pid=1173800001&amp;adm=4680']);">
                                            <img src="/static/index/index/img/pms_1509694019.png" alt="小米电视4C 43英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173800001.html" data-stat-aid="AA19315" data-stat-pid="2_54_6_312" data-log_code="31pchomehomeelec_right_1006013#rid=488b330de40812a21ca255e01e687ad6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.6&amp;pid=1173800001&amp;adm=4680"
                                            target="_blank" data-stat-id="AA19315+2_54_6_312" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19315+2_54_6_312', '//item.mi.com/1173800001.html', 'pcpid', '31pchomehomeelec_right_1006013#rid=488b330de40812a21ca255e01e687ad6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.6&amp;pid=1173800001&amp;adm=4680']);">小米电视4C 43英寸</a>
                                    </h3>
                                    <p class="desc">人工智能 / 全高清屏幕 / 大内存</p>
                                    <p class="price">
                                        <span class="num">1799</span>元
                                        <del>
                                            <span class="num">2099</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173800001.html" data-stat-aid="AA19315" data-stat-pid="2_54_6_312" data-log_code="31pchomehomeelec_right_1006013#rid=488b330de40812a21ca255e01e687ad6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.6&amp;pid=1173800001&amp;adm=4680"
                                            target="_blank" data-stat-id="AA19315+2_54_6_312" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19315+2_54_6_312', '//item.mi.com/1173800001.html', 'pcpid', '31pchomehomeelec_right_1006013#rid=488b330de40812a21ca255e01e687ad6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.6&amp;pid=1173800001&amp;adm=4680']);">
                                            <span class="review">物美价廉非常的好</span>
                                            <span class="author"> 来自于 1277395111 的评价
                                                <span class="date" data-date="1516788279"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1172200007">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172200007.html" data-stat-aid="AA19073" data-stat-pid="2_54_7_313" target="_blank"
                                            data-log_code="31pchomehomeelec_right_1007013#rid=8c36d7bfafcbc6e1a9ac56cb9928deaa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.7&amp;pid=1172200007&amp;adm=3469"
                                            data-stat-id="AA19073+2_54_7_313" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19073+2_54_7_313', '//item.mi.com/1172200007.html', 'pcpid', '31pchomehomeelec_right_1007013#rid=8c36d7bfafcbc6e1a9ac56cb9928deaa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.7&amp;pid=1172200007&amp;adm=3469']);">
                                            <img src="/static/index/index/img/pms_1499072633.jpg" alt="小米盒子3 增强版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172200007.html" data-stat-aid="AA19073" data-stat-pid="2_54_7_313" data-log_code="31pchomehomeelec_right_1007013#rid=8c36d7bfafcbc6e1a9ac56cb9928deaa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.7&amp;pid=1172200007&amp;adm=3469"
                                            target="_blank" data-stat-id="AA19073+2_54_7_313" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19073+2_54_7_313', '//item.mi.com/1172200007.html', 'pcpid', '31pchomehomeelec_right_1007013#rid=8c36d7bfafcbc6e1a9ac56cb9928deaa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.7&amp;pid=1172200007&amp;adm=3469']);">小米盒子3 增强版</a>
                                    </h3>
                                    <p class="desc">高端 4K 网络机顶盒</p>
                                    <p class="price">
                                        <span class="num">399</span>元
                                        <del>
                                            <span class="num">449</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172200007.html" data-stat-aid="AA19073" data-stat-pid="2_54_7_313" data-log_code="31pchomehomeelec_right_1007013#rid=8c36d7bfafcbc6e1a9ac56cb9928deaa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.7&amp;pid=1172200007&amp;adm=3469"
                                            target="_blank" data-stat-id="AA19073+2_54_7_313" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19073+2_54_7_313', '//item.mi.com/1172200007.html', 'pcpid', '31pchomehomeelec_right_1007013#rid=8c36d7bfafcbc6e1a9ac56cb9928deaa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.7&amp;pid=1172200007&amp;adm=3469']);">
                                            <span class="review">小米盒子3增强版</span>
                                            <span class="author"> 来自于 洪升亨 的评价
                                                <span class="date" data-date="1516349061"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2164600007">
                                    <div class="figure figure-img">
                                        <a href="https://www.mi.com/mibox3s/" class="exposure" data-stat-aid="AA19074" data-stat-pid="2_54_8_314" data-log_code="31pchomehomeelec_right_1008013#rid=72b810af8bbb4c11b5f323637a136b51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.8&amp;pid=2164600007&amp;adm=3629"
                                            target="_blank" data-stat-id="AA19074+2_54_8_314" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19074+2_54_8_314', '//www.mi.com/mibox3s/', 'pcpid', '31pchomehomeelec_right_1008013#rid=72b810af8bbb4c11b5f323637a136b51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.8&amp;pid=2164600007&amp;adm=3629']);">
                                            <img src="/static/index/index/img/pms_1479190789.jpg" alt="小米盒子3s" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mibox3s/" class="exposure" data-stat-aid="AA19074" data-stat-pid="2_54_8_314" data-log_code="31pchomehomeelec_right_1008013#rid=72b810af8bbb4c11b5f323637a136b51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.8&amp;pid=2164600007&amp;adm=3629"
                                            target="_blank" data-stat-id="AA19074+2_54_8_314" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19074+2_54_8_314', '//www.mi.com/mibox3s/', 'pcpid', '31pchomehomeelec_right_1008013#rid=72b810af8bbb4c11b5f323637a136b51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030370.8&amp;pid=2164600007&amp;adm=3629']);">小米盒子3s</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">299</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/p/1995.html" target="_blank" data-stat-id="0214c5b5d813c6c2" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-0214c5b5d813c6c2', '//www.mi.com/p/1995.html', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/p/1995.html" target="_blank" data-stat-id="db762e448e6da42a" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-db762e448e6da42a', '//www.mi.com/p/1995.html', 'pcpid', '']);">浏览更多
                                        <small>电视影音</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2175200001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1175200003.html" data-stat-aid="AA19346" data-stat-pid="2_55_1_315" target="_blank"
                                            data-log_code="31pchomehomeelec_right_2001014#rid=e5e7927feacbd4c590af05a11d6a1d08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.1&amp;pid=2175200001&amp;adm=4700"
                                            data-stat-id="AA19346+2_55_1_315" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19346+2_55_1_315', '//item.mi.com/1175200003.html', 'pcpid', '31pchomehomeelec_right_2001014#rid=e5e7927feacbd4c590af05a11d6a1d08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.1&amp;pid=2175200001&amp;adm=4700']);">
                                            <img src="/static/index/index/img/pms_1514387870.jpg" alt="12.5&quot;小米笔记本Air M3 4G 128G 银色" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1175200003.html" data-stat-aid="AA19346" data-stat-pid="2_55_1_315" data-log_code="31pchomehomeelec_right_2001014#rid=e5e7927feacbd4c590af05a11d6a1d08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.1&amp;pid=2175200001&amp;adm=4700"
                                            target="_blank" data-stat-id="AA19346+2_55_1_315" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19346+2_55_1_315', '//item.mi.com/1175200003.html', 'pcpid', '31pchomehomeelec_right_2001014#rid=e5e7927feacbd4c590af05a11d6a1d08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.1&amp;pid=2175200001&amp;adm=4700']);">12.5"小米笔记本Air M3 4G 128G 银色</a>
                                    </h3>
                                    <p class="desc"></p>
                                    <p class="price">
                                        <span class="num">3599</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1175200003.html" data-stat-aid="AA19346" data-stat-pid="2_55_1_315" data-log_code="31pchomehomeelec_right_2001014#rid=e5e7927feacbd4c590af05a11d6a1d08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.1&amp;pid=2175200001&amp;adm=4700"
                                            target="_blank" data-stat-id="AA19346+2_55_1_315" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19346+2_55_1_315', '//item.mi.com/1175200003.html', 'pcpid', '31pchomehomeelec_right_2001014#rid=e5e7927feacbd4c590af05a11d6a1d08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.1&amp;pid=2175200001&amp;adm=4700']);">
                                            <span class="review">好棒好喜欢，办公轻便</span>
                                            <span class="author"> 来自于 安妮海大星 的评价
                                                <span class="date" data-date="1517128439"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172300011">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172300022.html" data-stat-aid="AA17348" data-stat-pid="2_55_2_316" target="_blank"
                                            data-log_code="31pchomehomeelec_right_2002014#rid=8739638763edc3e2854b665977a23b82&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.2&amp;pid=2172300011&amp;adm=3777"
                                            data-stat-id="AA17348+2_55_2_316" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17348+2_55_2_316', '//item.mi.com/1172300022.html', 'pcpid', '31pchomehomeelec_right_2002014#rid=8739638763edc3e2854b665977a23b82&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.2&amp;pid=2172300011&amp;adm=3777']);">
                                            <img src="/static/index/index/img/pms_1496997930.jpg" alt="小米笔记本Air13.3英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172300022.html" data-stat-aid="AA17348" data-stat-pid="2_55_2_316" data-log_code="31pchomehomeelec_right_2002014#rid=8739638763edc3e2854b665977a23b82&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.2&amp;pid=2172300011&amp;adm=3777"
                                            target="_blank" data-stat-id="AA17348+2_55_2_316" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17348+2_55_2_316', '//item.mi.com/1172300022.html', 'pcpid', '31pchomehomeelec_right_2002014#rid=8739638763edc3e2854b665977a23b82&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.2&amp;pid=2172300011&amp;adm=3777']);">小米笔记本Air13.3英寸</a>
                                    </h3>
                                    <p class="desc">第7代CPU 2G独显 指纹解锁</p>
                                    <p class="price">
                                        <span class="num">5199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172300022.html" data-stat-aid="AA17348" data-stat-pid="2_55_2_316" data-log_code="31pchomehomeelec_right_2002014#rid=8739638763edc3e2854b665977a23b82&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.2&amp;pid=2172300011&amp;adm=3777"
                                            target="_blank" data-stat-id="AA17348+2_55_2_316" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17348+2_55_2_316', '//item.mi.com/1172300022.html', 'pcpid', '31pchomehomeelec_right_2002014#rid=8739638763edc3e2854b665977a23b82&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.2&amp;pid=2172300011&amp;adm=3777']);">
                                            <span class="review">太美了！太太太太美了！特别符合我的气质！哈哈哈哈哈哈哈</span>
                                            <span class="author"> 来自于 1138253788 的评价
                                                <span class="date" data-date="1510584940"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2162900002">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1162900002.html" data-stat-aid="AA17349" data-stat-pid="2_55_3_317" target="_blank"
                                            data-log_code="31pchomehomeelec_right_2003014#rid=58e3d8c3406d41e397739661f48c0b13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.3&amp;pid=2162900002&amp;adm=3830"
                                            data-stat-id="AA17349+2_55_3_317" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17349+2_55_3_317', '//item.mi.com/1162900002.html', 'pcpid', '31pchomehomeelec_right_2003014#rid=58e3d8c3406d41e397739661f48c0b13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.3&amp;pid=2162900002&amp;adm=3830']);">
                                            <img src="/static/index/index/img/pms_1469583247.jpg" alt="小米笔记本Air 13.3英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1162900002.html" data-stat-aid="AA17349" data-stat-pid="2_55_3_317" data-log_code="31pchomehomeelec_right_2003014#rid=58e3d8c3406d41e397739661f48c0b13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.3&amp;pid=2162900002&amp;adm=3830"
                                            target="_blank" data-stat-id="AA17349+2_55_3_317" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17349+2_55_3_317', '//item.mi.com/1162900002.html', 'pcpid', '31pchomehomeelec_right_2003014#rid=58e3d8c3406d41e397739661f48c0b13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.3&amp;pid=2162900002&amp;adm=3830']);">小米笔记本Air 13.3英寸</a>
                                    </h3>
                                    <p class="desc">Intel 酷睿i5 处理器 独立显卡</p>
                                    <p class="price">
                                        <span class="num">4999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1162900002.html" data-stat-aid="AA17349" data-stat-pid="2_55_3_317" data-log_code="31pchomehomeelec_right_2003014#rid=58e3d8c3406d41e397739661f48c0b13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.3&amp;pid=2162900002&amp;adm=3830"
                                            target="_blank" data-stat-id="AA17349+2_55_3_317" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17349+2_55_3_317', '//item.mi.com/1162900002.html', 'pcpid', '31pchomehomeelec_right_2003014#rid=58e3d8c3406d41e397739661f48c0b13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.3&amp;pid=2162900002&amp;adm=3830']);">
                                            <span class="review">重要的事情说3遍 超爱 超爱 超爱客服妹子</span>
                                            <span class="author"> 来自于 随遇而安 的评价
                                                <span class="date" data-date="1481718439"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171300003">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mibookair-12/" data-stat-aid="AA17350" data-stat-pid="2_55_4_318" target="_blank"
                                            data-log_code="31pchomehomeelec_right_2004014#rid=cc571c8d30f92aeb1424beca128cc8c6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.4&amp;pid=2171300003&amp;adm=3467"
                                            data-stat-id="AA17350+2_55_4_318" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17350+2_55_4_318', '//www.mi.com/mibookair-12/', 'pcpid', '31pchomehomeelec_right_2004014#rid=cc571c8d30f92aeb1424beca128cc8c6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.4&amp;pid=2171300003&amp;adm=3467']);">
                                            <img src="/static/index/index/img/pms_1490604807.jpg" alt="小米笔记本Air 12.5英寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mibookair-12/" data-stat-aid="AA17350" data-stat-pid="2_55_4_318" data-log_code="31pchomehomeelec_right_2004014#rid=cc571c8d30f92aeb1424beca128cc8c6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.4&amp;pid=2171300003&amp;adm=3467"
                                            target="_blank" data-stat-id="AA17350+2_55_4_318" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17350+2_55_4_318', '//www.mi.com/mibookair-12/', 'pcpid', '31pchomehomeelec_right_2004014#rid=cc571c8d30f92aeb1424beca128cc8c6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.4&amp;pid=2171300003&amp;adm=3467']);">小米笔记本Air 12.5英寸</a>
                                    </h3>
                                    <p class="desc">更轻更薄，像杂志一样随身携带</p>
                                    <p class="price">
                                        <span class="num">3999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mibookair-12/" data-stat-aid="AA17350" data-stat-pid="2_55_4_318" data-log_code="31pchomehomeelec_right_2004014#rid=cc571c8d30f92aeb1424beca128cc8c6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.4&amp;pid=2171300003&amp;adm=3467"
                                            target="_blank" data-stat-id="AA17350+2_55_4_318" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17350+2_55_4_318', '//www.mi.com/mibookair-12/', 'pcpid', '31pchomehomeelec_right_2004014#rid=cc571c8d30f92aeb1424beca128cc8c6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.4&amp;pid=2171300003&amp;adm=3467']);">
                                            <span class="review">外形真的超赞，散热也很好啊，只是一直没找到256GB...</span>
                                            <span class="author"> 来自于 鬭鏺鑶銎 的评价
                                                <span class="date" data-date="1500740142"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171100009">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mouse-2/" data-stat-aid="AA15922" data-stat-pid="2_55_5_319" target="_blank"
                                            data-log_code="31pchomehomeelec_right_2005014#rid=f8c45679c24824ca2f434df33562e5c8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.5&amp;pid=2171100009&amp;adm=3470"
                                            data-stat-id="AA15922+2_55_5_319" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15922+2_55_5_319', '//www.mi.com/mouse-2/', 'pcpid', '31pchomehomeelec_right_2005014#rid=f8c45679c24824ca2f434df33562e5c8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.5&amp;pid=2171100009&amp;adm=3470']);">
                                            <img src="/static/index/index/img/pms_1490595812.png" alt="小米无线鼠标" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mouse-2/" data-stat-aid="AA15922" data-stat-pid="2_55_5_319" data-log_code="31pchomehomeelec_right_2005014#rid=f8c45679c24824ca2f434df33562e5c8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.5&amp;pid=2171100009&amp;adm=3470"
                                            target="_blank" data-stat-id="AA15922+2_55_5_319" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15922+2_55_5_319', '//www.mi.com/mouse-2/', 'pcpid', '31pchomehomeelec_right_2005014#rid=f8c45679c24824ca2f434df33562e5c8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.5&amp;pid=2171100009&amp;adm=3470']);">小米无线鼠标</a>
                                    </h3>
                                    <p class="desc">耐脏亲肤涂层，人体工学设计</p>
                                    <p class="price">
                                        <span class="num">69</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mouse-2/" data-stat-aid="AA15922" data-stat-pid="2_55_5_319" data-log_code="31pchomehomeelec_right_2005014#rid=f8c45679c24824ca2f434df33562e5c8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.5&amp;pid=2171100009&amp;adm=3470"
                                            target="_blank" data-stat-id="AA15922+2_55_5_319" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15922+2_55_5_319', '//www.mi.com/mouse-2/', 'pcpid', '31pchomehomeelec_right_2005014#rid=f8c45679c24824ca2f434df33562e5c8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.5&amp;pid=2171100009&amp;adm=3470']);">
                                            <span class="review">小巧轻便，灵敏度高，小米的至爱，只是小米6几次都抢不...</span>
                                            <span class="author"> 来自于 出租房在线 的评价
                                                <span class="date" data-date="1499394636"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164100007">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mouse/" data-stat-aid="AA15923" data-stat-pid="2_55_6_320" target="_blank" data-log_code="31pchomehomeelec_right_2006014#rid=f6b733f351d88b097697815e7900e8bf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.6&amp;pid=2164100007&amp;adm=3466"
                                            data-stat-id="AA15923+2_55_6_320" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15923+2_55_6_320', '//www.mi.com/mouse/', 'pcpid', '31pchomehomeelec_right_2006014#rid=f6b733f351d88b097697815e7900e8bf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.6&amp;pid=2164100007&amp;adm=3466']);">
                                            <img src="/static/index/index/img/pms_1478248566.jpg" alt="小米便携鼠标" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mouse/" data-stat-aid="AA15923" data-stat-pid="2_55_6_320" data-log_code="31pchomehomeelec_right_2006014#rid=f6b733f351d88b097697815e7900e8bf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.6&amp;pid=2164100007&amp;adm=3466"
                                            target="_blank" data-stat-id="AA15923+2_55_6_320" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15923+2_55_6_320', '//www.mi.com/mouse/', 'pcpid', '31pchomehomeelec_right_2006014#rid=f6b733f351d88b097697815e7900e8bf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.6&amp;pid=2164100007&amp;adm=3466']);">小米便携鼠标</a>
                                    </h3>
                                    <p class="desc">轻薄便携，铝合金外壳 +ABS 材质</p>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mouse/" data-stat-aid="AA15923" data-stat-pid="2_55_6_320" data-log_code="31pchomehomeelec_right_2006014#rid=f6b733f351d88b097697815e7900e8bf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.6&amp;pid=2164100007&amp;adm=3466"
                                            target="_blank" data-stat-id="AA15923+2_55_6_320" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15923+2_55_6_320', '//www.mi.com/mouse/', 'pcpid', '31pchomehomeelec_right_2006014#rid=f6b733f351d88b097697815e7900e8bf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.6&amp;pid=2164100007&amp;adm=3466']);">
                                            <span class="review">外形时尚，触感细腻。不错不错</span>
                                            <span class="author"> 来自于 陈钢 的评价
                                                <span class="date" data-date="1504405713"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171300013">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/keyboard/" data-stat-aid="AA15909" data-stat-pid="2_55_7_321" target="_blank"
                                            data-log_code="31pchomehomeelec_right_2007014#rid=55760df2d758908024ea343a747f0963&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.7&amp;pid=2171300013&amp;adm=3465"
                                            data-stat-id="AA15909+2_55_7_321" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15909+2_55_7_321', '//www.mi.com/keyboard/', 'pcpid', '31pchomehomeelec_right_2007014#rid=55760df2d758908024ea343a747f0963&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.7&amp;pid=2171300013&amp;adm=3465']);">
                                            <img src="/static/index/index/img/pms_1490702347.png" alt="悦米机械键盘" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/keyboard/" data-stat-aid="AA15909" data-stat-pid="2_55_7_321" data-log_code="31pchomehomeelec_right_2007014#rid=55760df2d758908024ea343a747f0963&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.7&amp;pid=2171300013&amp;adm=3465"
                                            target="_blank" data-stat-id="AA15909+2_55_7_321" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15909+2_55_7_321', '//www.mi.com/keyboard/', 'pcpid', '31pchomehomeelec_right_2007014#rid=55760df2d758908024ea343a747f0963&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.7&amp;pid=2171300013&amp;adm=3465']);">悦米机械键盘</a>
                                    </h3>
                                    <p class="desc">铝合金机身，TTC红轴，87 键</p>
                                    <p class="price">
                                        <span class="num">289</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/keyboard/" data-stat-aid="AA15909" data-stat-pid="2_55_7_321" data-log_code="31pchomehomeelec_right_2007014#rid=55760df2d758908024ea343a747f0963&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.7&amp;pid=2171300013&amp;adm=3465"
                                            target="_blank" data-stat-id="AA15909+2_55_7_321" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15909+2_55_7_321', '//www.mi.com/keyboard/', 'pcpid', '31pchomehomeelec_right_2007014#rid=55760df2d758908024ea343a747f0963&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.7&amp;pid=2171300013&amp;adm=3465']);">
                                            <span class="review">手感不错，分量感也很足，只是接口位置不太满意，如果左...</span>
                                            <span class="author"> 来自于 严冬 的评价
                                                <span class="date" data-date="1494811832"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2163000004">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1163000011.html" class="exposure" data-stat-aid="AA15907" data-stat-pid="2_55_8_322" data-log_code="31pchomehomeelec_right_2008014#rid=7559aaf5cfd75d61bb2509a2f5ed5806&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.8&amp;pid=2163000004&amp;adm=3464"
                                            target="_blank" data-stat-id="AA15907+2_55_8_322" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15907+2_55_8_322', '//item.mi.com/1163000011.html', 'pcpid', '31pchomehomeelec_right_2008014#rid=7559aaf5cfd75d61bb2509a2f5ed5806&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.8&amp;pid=2163000004&amp;adm=3464']);">
                                            <img src="/static/index/index/img/pms_1469523170.jpg" alt="多功能转接器" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1163000011.html" class="exposure" data-stat-aid="AA15907" data-stat-pid="2_55_8_322" data-log_code="31pchomehomeelec_right_2008014#rid=7559aaf5cfd75d61bb2509a2f5ed5806&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.8&amp;pid=2163000004&amp;adm=3464"
                                            target="_blank" data-stat-id="AA15907+2_55_8_322" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15907+2_55_8_322', '//item.mi.com/1163000011.html', 'pcpid', '31pchomehomeelec_right_2008014#rid=7559aaf5cfd75d61bb2509a2f5ed5806&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030371.8&amp;pid=2163000004&amp;adm=3464']);">多功能转接器</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">149</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/p/2074.html" target="_blank" data-stat-id="7a4cb27ff2fc9fa9" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-7a4cb27ff2fc9fa9', 'https://www.mi.com/p/2074.html', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/p/2074.html" target="_blank" data-stat-id="14d9b775a5a0fc6b" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-14d9b775a5a0fc6b', 'https://www.mi.com/p/2074.html', 'pcpid', '']);">浏览更多
                                        <small>电脑</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2161400001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/kettle/" data-stat-aid="AA17561" data-stat-pid="2_56_1_323" target="_blank"
                                            data-log_code="31pchomehomeelec_right_3001015#rid=63661acf91687ff3cba891b16bee8432&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.1&amp;pid=2161400001&amp;adm=1959"
                                            data-stat-id="AA17561+2_56_1_323" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17561+2_56_1_323', '//www.mi.com/kettle/', 'pcpid', '31pchomehomeelec_right_3001015#rid=63661acf91687ff3cba891b16bee8432&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.1&amp;pid=2161400001&amp;adm=1959']);">
                                            <img src="/static/index/index/img/pms_1465366178.jpg" alt="米家恒温电水壶" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/kettle/" data-stat-aid="AA17561" data-stat-pid="2_56_1_323" data-log_code="31pchomehomeelec_right_3001015#rid=63661acf91687ff3cba891b16bee8432&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.1&amp;pid=2161400001&amp;adm=1959"
                                            target="_blank" data-stat-id="AA17561+2_56_1_323" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17561+2_56_1_323', '//www.mi.com/kettle/', 'pcpid', '31pchomehomeelec_right_3001015#rid=63661acf91687ff3cba891b16bee8432&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.1&amp;pid=2161400001&amp;adm=1959']);">米家恒温电水壶</a>
                                    </h3>
                                    <p class="desc">水温智能控制，304 不锈钢内胆</p>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/kettle/" data-stat-aid="AA17561" data-stat-pid="2_56_1_323" data-log_code="31pchomehomeelec_right_3001015#rid=63661acf91687ff3cba891b16bee8432&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.1&amp;pid=2161400001&amp;adm=1959"
                                            target="_blank" data-stat-id="AA17561+2_56_1_323" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17561+2_56_1_323', '//www.mi.com/kettle/', 'pcpid', '31pchomehomeelec_right_3001015#rid=63661acf91687ff3cba891b16bee8432&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.1&amp;pid=2161400001&amp;adm=1959']);">
                                            <span class="review">小米的东西真的有毒，我都买了10几款了，忍不住啊妹妹</span>
                                            <span class="author"> 来自于 ●_●)老白"²º¹7 的评价
                                                <span class="date" data-date="1511130540"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172800014">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/flashlight/" data-stat-aid="AA18874" data-stat-pid="2_56_2_324" target="_blank"
                                            data-log_code="31pchomehomeelec_right_3002015#rid=5692f7ceab85f7b20d8af5a8fde30c62&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.2&amp;pid=2172800014&amp;adm=4450"
                                            data-stat-id="AA18874+2_56_2_324" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18874+2_56_2_324', '//www.mi.com/flashlight/', 'pcpid', '31pchomehomeelec_right_3002015#rid=5692f7ceab85f7b20d8af5a8fde30c62&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.2&amp;pid=2172800014&amp;adm=4450']);">
                                            <img src="/static/index/index/img/pms_1506417289.jpg" alt="小米随身手电筒" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/flashlight/" data-stat-aid="AA18874" data-stat-pid="2_56_2_324" data-log_code="31pchomehomeelec_right_3002015#rid=5692f7ceab85f7b20d8af5a8fde30c62&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.2&amp;pid=2172800014&amp;adm=4450"
                                            target="_blank" data-stat-id="AA18874+2_56_2_324" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18874+2_56_2_324', '//www.mi.com/flashlight/', 'pcpid', '31pchomehomeelec_right_3002015#rid=5692f7ceab85f7b20d8af5a8fde30c62&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.2&amp;pid=2172800014&amp;adm=4450']);">小米随身手电筒</a>
                                    </h3>
                                    <p class="desc">11 挡调光，随心而亮</p>
                                    <p class="price">
                                        <span class="num">79</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/flashlight/" data-stat-aid="AA18874" data-stat-pid="2_56_2_324" data-log_code="31pchomehomeelec_right_3002015#rid=5692f7ceab85f7b20d8af5a8fde30c62&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.2&amp;pid=2172800014&amp;adm=4450"
                                            target="_blank" data-stat-id="AA18874+2_56_2_324" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18874+2_56_2_324', '//www.mi.com/flashlight/', 'pcpid', '31pchomehomeelec_right_3002015#rid=5692f7ceab85f7b20d8af5a8fde30c62&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.2&amp;pid=2172800014&amp;adm=4450']);">
                                            <span class="review">高颜值的手电筒，很赞，更赞的是买到了小爱同学，永远相...</span>
                                            <span class="author"> 来自于 长安 的评价
                                                <span class="date" data-date="1516002917"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2163400004">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/roomrobot/" data-stat-aid="AA18721" data-stat-pid="2_56_3_325" target="_blank"
                                            data-log_code="31pchomehomeelec_right_3003015#rid=3c28a6884a316421481edf88f11ecf5b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.3&amp;pid=2163400004&amp;adm=2428"
                                            data-stat-id="AA18721+2_56_3_325" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18721+2_56_3_325', '//www.mi.com/roomrobot/', 'pcpid', '31pchomehomeelec_right_3003015#rid=3c28a6884a316421481edf88f11ecf5b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.3&amp;pid=2163400004&amp;adm=2428']);">
                                            <img src="/static/index/index/img/pms_1472609961.jpg" alt="米家扫地机器人" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/roomrobot/" data-stat-aid="AA18721" data-stat-pid="2_56_3_325" data-log_code="31pchomehomeelec_right_3003015#rid=3c28a6884a316421481edf88f11ecf5b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.3&amp;pid=2163400004&amp;adm=2428"
                                            target="_blank" data-stat-id="AA18721+2_56_3_325" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18721+2_56_3_325', '//www.mi.com/roomrobot/', 'pcpid', '31pchomehomeelec_right_3003015#rid=3c28a6884a316421481edf88f11ecf5b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.3&amp;pid=2163400004&amp;adm=2428']);">米家扫地机器人</a>
                                    </h3>
                                    <p class="desc">智能路径规划，扫得干净扫得快</p>
                                    <p class="price">
                                        <span class="num">1699</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/roomrobot/" data-stat-aid="AA18721" data-stat-pid="2_56_3_325" data-log_code="31pchomehomeelec_right_3003015#rid=3c28a6884a316421481edf88f11ecf5b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.3&amp;pid=2163400004&amp;adm=2428"
                                            target="_blank" data-stat-id="AA18721+2_56_3_325" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18721+2_56_3_325', '//www.mi.com/roomrobot/', 'pcpid', '31pchomehomeelec_right_3003015#rid=3c28a6884a316421481edf88f11ecf5b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.3&amp;pid=2163400004&amp;adm=2428']);">
                                            <span class="review">请问客服，下面3人哪个是我媳妇儿？</span>
                                            <span class="author"> 来自于 126417387 的评价
                                                <span class="date" data-date="1487796127"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2160900010">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/air2/" data-stat-aid="AA17544" data-stat-pid="2_56_4_326" target="_blank" data-log_code="31pchomehomeelec_right_3004015#rid=c37be39de57bc3290a7de11d185dd715&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.4&amp;pid=2160900010&amp;adm=2067"
                                            data-stat-id="AA17544+2_56_4_326" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17544+2_56_4_326', '//www.mi.com/air2/', 'pcpid', '31pchomehomeelec_right_3004015#rid=c37be39de57bc3290a7de11d185dd715&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.4&amp;pid=2160900010&amp;adm=2067']);">
                                            <img src="/static/index/index/img/T1zBYgBCWv1RXrhCrK220x220.jpg" alt="小米空气净化器2" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/air2/" data-stat-aid="AA17544" data-stat-pid="2_56_4_326" data-log_code="31pchomehomeelec_right_3004015#rid=c37be39de57bc3290a7de11d185dd715&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.4&amp;pid=2160900010&amp;adm=2067"
                                            target="_blank" data-stat-id="AA17544+2_56_4_326" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17544+2_56_4_326', '//www.mi.com/air2/', 'pcpid', '31pchomehomeelec_right_3004015#rid=c37be39de57bc3290a7de11d185dd715&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.4&amp;pid=2160900010&amp;adm=2067']);">小米空气净化器2</a>
                                    </h3>
                                    <p class="desc">10分钟，房间空气焕然一新</p>
                                    <p class="price">
                                        <span class="num">699</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/air2/" data-stat-aid="AA17544" data-stat-pid="2_56_4_326" data-log_code="31pchomehomeelec_right_3004015#rid=c37be39de57bc3290a7de11d185dd715&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.4&amp;pid=2160900010&amp;adm=2067"
                                            target="_blank" data-stat-id="AA17544+2_56_4_326" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17544+2_56_4_326', '//www.mi.com/air2/', 'pcpid', '31pchomehomeelec_right_3004015#rid=c37be39de57bc3290a7de11d185dd715&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.4&amp;pid=2160900010&amp;adm=2067']);">
                                            <span class="review">万水千山总是情，给你满分行不行？</span>
                                            <span class="author"> 来自于 1117599502 的评价
                                                <span class="date" data-date="1483267097"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161200066">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/dianfanbao/" data-stat-aid="AA17545" data-stat-pid="2_56_5_327" target="_blank"
                                            data-log_code="31pchomehomeelec_right_3005015#rid=e906631711dd908ecd95e1213140be4d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.5&amp;pid=2161200066&amp;adm=1819"
                                            data-stat-id="AA17545+2_56_5_327" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17545+2_56_5_327', '//www.mi.com/dianfanbao/', 'pcpid', '31pchomehomeelec_right_3005015#rid=e906631711dd908ecd95e1213140be4d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.5&amp;pid=2161200066&amp;adm=1819']);">
                                            <img src="/static/index/index/img/T1OVC_ByY_1RXrhCrK220x220.jpg" alt="米家压力IH电饭煲" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/dianfanbao/" data-stat-aid="AA17545" data-stat-pid="2_56_5_327" data-log_code="31pchomehomeelec_right_3005015#rid=e906631711dd908ecd95e1213140be4d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.5&amp;pid=2161200066&amp;adm=1819"
                                            target="_blank" data-stat-id="AA17545+2_56_5_327" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17545+2_56_5_327', '//www.mi.com/dianfanbao/', 'pcpid', '31pchomehomeelec_right_3005015#rid=e906631711dd908ecd95e1213140be4d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.5&amp;pid=2161200066&amp;adm=1819']);">米家压力IH电饭煲</a>
                                    </h3>
                                    <p class="desc">智能烹饪，灰铸铁粉体涂层内胆</p>
                                    <p class="price">
                                        <span class="num">999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/dianfanbao/" data-stat-aid="AA17545" data-stat-pid="2_56_5_327" data-log_code="31pchomehomeelec_right_3005015#rid=e906631711dd908ecd95e1213140be4d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.5&amp;pid=2161200066&amp;adm=1819"
                                            target="_blank" data-stat-id="AA17545+2_56_5_327" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17545+2_56_5_327', '//www.mi.com/dianfanbao/', 'pcpid', '31pchomehomeelec_right_3005015#rid=e906631711dd908ecd95e1213140be4d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.5&amp;pid=2161200066&amp;adm=1819']);">
                                            <span class="review">中国人终于可以不要到国外去买电饭煲了！坐在家里点点手...</span>
                                            <span class="author"> 来自于 姚士祥 的评价
                                                <span class="date" data-date="1484800489"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172100015">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172100033.html" data-stat-aid="AA16361" data-stat-pid="2_56_6_328" target="_blank"
                                            data-log_code="31pchomehomeelec_right_3006015#rid=e11f70d191d2f2775c931af8d997c146&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.6&amp;pid=2172100015&amp;adm=3655"
                                            data-stat-id="AA16361+2_56_6_328" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16361+2_56_6_328', '//item.mi.com/1172100033.html', 'pcpid', '31pchomehomeelec_right_3006015#rid=e11f70d191d2f2775c931af8d997c146&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.6&amp;pid=2172100015&amp;adm=3655']);">
                                            <img src="/static/index/index/img/pms_1496647119.jpg" alt="飞利浦智睿球泡灯" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172100033.html" data-stat-aid="AA16361" data-stat-pid="2_56_6_328" data-log_code="31pchomehomeelec_right_3006015#rid=e11f70d191d2f2775c931af8d997c146&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.6&amp;pid=2172100015&amp;adm=3655"
                                            target="_blank" data-stat-id="AA16361+2_56_6_328" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16361+2_56_6_328', '//item.mi.com/1172100033.html', 'pcpid', '31pchomehomeelec_right_3006015#rid=e11f70d191d2f2775c931af8d997c146&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.6&amp;pid=2172100015&amp;adm=3655']);">飞利浦智睿球泡灯</a>
                                    </h3>
                                    <p class="desc">自由调节亮度，Wi-Fi随时操控</p>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172100033.html" data-stat-aid="AA16361" data-stat-pid="2_56_6_328" data-log_code="31pchomehomeelec_right_3006015#rid=e11f70d191d2f2775c931af8d997c146&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.6&amp;pid=2172100015&amp;adm=3655"
                                            target="_blank" data-stat-id="AA16361+2_56_6_328" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16361+2_56_6_328', '//item.mi.com/1172100033.html', 'pcpid', '31pchomehomeelec_right_3006015#rid=e11f70d191d2f2775c931af8d997c146&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.6&amp;pid=2172100015&amp;adm=3655']);">
                                            <span class="review">忠诚米粉来了，这能换个客服美女吗？</span>
                                            <span class="author"> 来自于 郭先生 的评价
                                                <span class="date" data-date="1511259004"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172100004">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mjsmartlamp/" data-stat-aid="AA16393" data-stat-pid="2_56_7_329" target="_blank"
                                            data-log_code="31pchomehomeelec_right_3007015#rid=d0d8d80d23fbb93f2d68e482c9e12860&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.7&amp;pid=2172100004&amp;adm=1971"
                                            data-stat-id="AA16393+2_56_7_329" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16393+2_56_7_329', '//www.mi.com/mjsmartlamp/', 'pcpid', '31pchomehomeelec_right_3007015#rid=d0d8d80d23fbb93f2d68e482c9e12860&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.7&amp;pid=2172100004&amp;adm=1971']);">
                                            <img src="/static/index/index/img/pms_1495520422.jpg" alt="米家 LED 智能台灯" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mjsmartlamp/" data-stat-aid="AA16393" data-stat-pid="2_56_7_329" data-log_code="31pchomehomeelec_right_3007015#rid=d0d8d80d23fbb93f2d68e482c9e12860&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.7&amp;pid=2172100004&amp;adm=1971"
                                            target="_blank" data-stat-id="AA16393+2_56_7_329" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16393+2_56_7_329', '//www.mi.com/mjsmartlamp/', 'pcpid', '31pchomehomeelec_right_3007015#rid=d0d8d80d23fbb93f2d68e482c9e12860&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.7&amp;pid=2172100004&amp;adm=1971']);">米家 LED 智能台灯</a>
                                    </h3>
                                    <p class="desc">无可视频闪，四种场景优化调光</p>
                                    <p class="price">
                                        <span class="num">169</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mjsmartlamp/" data-stat-aid="AA16393" data-stat-pid="2_56_7_329" data-log_code="31pchomehomeelec_right_3007015#rid=d0d8d80d23fbb93f2d68e482c9e12860&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.7&amp;pid=2172100004&amp;adm=1971"
                                            target="_blank" data-stat-id="AA16393+2_56_7_329" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16393+2_56_7_329', '//www.mi.com/mjsmartlamp/', 'pcpid', '31pchomehomeelec_right_3007015#rid=d0d8d80d23fbb93f2d68e482c9e12860&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.7&amp;pid=2172100004&amp;adm=1971']);">
                                            <span class="review">666高端大气</span>
                                            <span class="author"> 来自于 你是？ 的评价
                                                <span class="date" data-date="1510818708"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2171200006">
                                    <div class="figure figure-img">
                                        <a href="https://www.mi.com/yeelight-ceilinglamp/" class="exposure" data-stat-aid="AA16424" data-stat-pid="2_56_8_330" data-log_code="31pchomehomeelec_right_3008015#rid=2b14effce721684624f36b567a203a83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.8&amp;pid=2171200006&amp;adm=3295"
                                            target="_blank" data-stat-id="AA16424+2_56_8_330" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16424+2_56_8_330', '//www.mi.com/yeelight-ceilinglamp/', 'pcpid', '31pchomehomeelec_right_3008015#rid=2b14effce721684624f36b567a203a83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.8&amp;pid=2171200006&amp;adm=3295']);">
                                            <img src="/static/index/index/img/pms_1490756071.png" alt="Yeelight LED 吸顶灯" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/yeelight-ceilinglamp/" class="exposure" data-stat-aid="AA16424" data-stat-pid="2_56_8_330" data-log_code="31pchomehomeelec_right_3008015#rid=2b14effce721684624f36b567a203a83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.8&amp;pid=2171200006&amp;adm=3295"
                                            target="_blank" data-stat-id="AA16424+2_56_8_330" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16424+2_56_8_330', '//www.mi.com/yeelight-ceilinglamp/', 'pcpid', '31pchomehomeelec_right_3008015#rid=2b14effce721684624f36b567a203a83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030372.8&amp;pid=2171200006&amp;adm=3295']);">Yeelight LED 吸顶灯</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">379</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/smart/" target="_blank" data-stat-id="1194cd4619917c77" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-1194cd4619917c77', 'https://www.mi.com/smart/', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/smart/" target="_blank" data-stat-id="4b80c917faedd215" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4b80c917faedd215', 'https://www.mi.com/smart/', 'pcpid', '']);">浏览更多
                                        <small>家居</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="false">
            <div class="box-hd">
                <h2 class="title">智能</h2>
                <!-- <h2 class="title">冲破大风雪，我们坐在雪橇上  (๑•̀ㅂ•́)و✧ </h2> -->
                <div class="more J_brickNav">
                    <ul class="tab-list J_brickTabSwitch" data-tab-target="smart-content">
                        <li class="tab-active">热门</li>
                        <li>出行</li>
                        <li>健康</li>
                        <li>酷玩</li>
                        <li>路由器</li>
                    </ul>
                </div>
            </div>
            <div class="box-bd J_brickBd">
                <div class="row">
                    <div class="span4 span-first">
                        <ul class="brick-promo-list clearfix">
                            <li class="brick-item brick-item-m">
                                <a href="https://item.mi.com/1163400033.html" class="exposure" data-stat-aid="AA19533" data-stat-pid="2_18_1_90" data-log_code="31pchomesmart_left001016#rid=237b5a1788670c1ea6570894b7272e8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030338.1&amp;pid=2163400004&amp;adm=4582"
                                    target="_blank" data-stat-id="AA19533+2_18_1_90" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19533+2_18_1_90', '//item.mi.com/1163400033.html', 'pcpid', '31pchomesmart_left001016#rid=237b5a1788670c1ea6570894b7272e8c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030338.1&amp;pid=2163400004&amp;adm=4582']);">
                                    <img src="/static/index/index/img/xmad_15123939053142_dFlAw.jpg" alt="">
                                </a>
                            </li>
                            <li class="brick-item brick-item-m">
                                <a href="https://www.mi.com/thermometer/" class="exposure" data-stat-aid="AA19517" data-stat-pid="2_18_2_91" data-log_code="31pchomesmart_left002016#rid=c174967d34305fe93508f581e2e0bd36&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030338.2&amp;pid=2173600004&amp;adm=4775"
                                    target="_blank" data-stat-id="AA19517+2_18_2_91" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19517+2_18_2_91', 'https://www.mi.com/thermometer/', 'pcpid', '31pchomesmart_left002016#rid=c174967d34305fe93508f581e2e0bd36&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030338.2&amp;pid=2173600004&amp;adm=4775']);">
                                    <img src="/static/index/index/img/xmad_15167083667254_xXTHV.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="span16">
                        <div id="smart-content" class="tab-container">
                            <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                <li class="brick-item brick-item-m" data-gid="2172600002">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/laser-projection/" data-stat-aid="AA19501" data-stat-pid="2_19_1_92" target="_blank"
                                            data-log_code="31pchomesmart_right_0001017#rid=41131b1824226cb6af00de95ed3a9c83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.1&amp;pid=2172600002&amp;adm=4545"
                                            data-stat-id="AA19501+2_19_1_92" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19501+2_19_1_92', 'https://www.mi.com/laser-projection/', 'pcpid', '31pchomesmart_right_0001017#rid=41131b1824226cb6af00de95ed3a9c83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.1&amp;pid=2172600002&amp;adm=4545']);">
                                            <img src="/static/index/index/img/pms_1498624482.jpg" alt="米家激光投影电视" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/laser-projection/" data-stat-aid="AA19501" data-stat-pid="2_19_1_92" data-log_code="31pchomesmart_right_0001017#rid=41131b1824226cb6af00de95ed3a9c83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.1&amp;pid=2172600002&amp;adm=4545"
                                            target="_blank" data-stat-id="AA19501+2_19_1_92" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19501+2_19_1_92', 'https://www.mi.com/laser-projection/', 'pcpid', '31pchomesmart_right_0001017#rid=41131b1824226cb6af00de95ed3a9c83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.1&amp;pid=2172600002&amp;adm=4545']);">米家激光投影电视</a>
                                    </h3>
                                    <p class="desc">150 英寸超大投影尺寸</p>
                                    <p class="price">
                                        <span class="num">9999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/laser-projection/" data-stat-aid="AA19501" data-stat-pid="2_19_1_92" data-log_code="31pchomesmart_right_0001017#rid=41131b1824226cb6af00de95ed3a9c83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.1&amp;pid=2172600002&amp;adm=4545"
                                            target="_blank" data-stat-id="AA19501+2_19_1_92" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19501+2_19_1_92', 'https://www.mi.com/laser-projection/', 'pcpid', '31pchomesmart_right_0001017#rid=41131b1824226cb6af00de95ed3a9c83&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.1&amp;pid=2172600002&amp;adm=4545']);">
                                            <span class="review">满意的商品和满意的服务。（图为晚上投墙面效果）</span>
                                            <span class="author"> 来自于 硕鼠 的评价
                                                <span class="date" data-date="1514942591"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172400010">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/scooterplus/" data-stat-aid="AA19036" data-stat-pid="2_19_2_93" target="_blank"
                                            data-log_code="31pchomesmart_right_0002017#rid=46052d00ab7d581ac82b817c79590fb3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.2&amp;pid=2172400010&amp;adm=3764"
                                            data-stat-id="AA19036+2_19_2_93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19036+2_19_2_93', '//www.mi.com/scooterplus/', 'pcpid', '31pchomesmart_right_0002017#rid=46052d00ab7d581ac82b817c79590fb3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.2&amp;pid=2172400010&amp;adm=3764']);">
                                            <img src="/static/index/index/img/pms_1498643144.png" alt="九号平衡车 Plus" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/scooterplus/" data-stat-aid="AA19036" data-stat-pid="2_19_2_93" data-log_code="31pchomesmart_right_0002017#rid=46052d00ab7d581ac82b817c79590fb3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.2&amp;pid=2172400010&amp;adm=3764"
                                            target="_blank" data-stat-id="AA19036+2_19_2_93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19036+2_19_2_93', '//www.mi.com/scooterplus/', 'pcpid', '31pchomesmart_right_0002017#rid=46052d00ab7d581ac82b817c79590fb3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.2&amp;pid=2172400010&amp;adm=3764']);">九号平衡车 Plus</a>
                                    </h3>
                                    <p class="desc">35km超长续航，一键自动跟随</p>
                                    <p class="price">
                                        <span class="num">3499</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/scooterplus/" data-stat-aid="AA19036" data-stat-pid="2_19_2_93" data-log_code="31pchomesmart_right_0002017#rid=46052d00ab7d581ac82b817c79590fb3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.2&amp;pid=2172400010&amp;adm=3764"
                                            target="_blank" data-stat-id="AA19036+2_19_2_93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19036+2_19_2_93', '//www.mi.com/scooterplus/', 'pcpid', '31pchomesmart_right_0002017#rid=46052d00ab7d581ac82b817c79590fb3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.2&amp;pid=2172400010&amp;adm=3764']);">
                                            <span class="review">很好，上去就学会，爱小米太久，从第一个小米手机，就没...</span>
                                            <span class="author"> 来自于 小董冠洁 的评价
                                                <span class="date" data-date="1514429443"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2162100003">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mitu/" data-stat-aid="AA19037" data-stat-pid="2_19_3_94" target="_blank" data-log_code="31pchomesmart_right_0003017#rid=ffab0666f1f0a374ca8769716ff46759&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.3&amp;pid=2162100003&amp;adm=2273"
                                            data-stat-id="AA19037+2_19_3_94" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19037+2_19_3_94', '//www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_0003017#rid=ffab0666f1f0a374ca8769716ff46759&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.3&amp;pid=2162100003&amp;adm=2273']);">
                                            <img src="/static/index/index/img/pms_1464615180.jpg" alt="米兔智能故事机" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mitu/" data-stat-aid="AA19037" data-stat-pid="2_19_3_94" data-log_code="31pchomesmart_right_0003017#rid=ffab0666f1f0a374ca8769716ff46759&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.3&amp;pid=2162100003&amp;adm=2273"
                                            target="_blank" data-stat-id="AA19037+2_19_3_94" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19037+2_19_3_94', '//www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_0003017#rid=ffab0666f1f0a374ca8769716ff46759&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.3&amp;pid=2162100003&amp;adm=2273']);">米兔智能故事机</a>
                                    </h3>
                                    <p class="desc">微信远程互动，智能语音交互</p>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mitu/" data-stat-aid="AA19037" data-stat-pid="2_19_3_94" data-log_code="31pchomesmart_right_0003017#rid=ffab0666f1f0a374ca8769716ff46759&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.3&amp;pid=2162100003&amp;adm=2273"
                                            target="_blank" data-stat-id="AA19037+2_19_3_94" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19037+2_19_3_94', '//www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_0003017#rid=ffab0666f1f0a374ca8769716ff46759&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.3&amp;pid=2162100003&amp;adm=2273']);">
                                            <span class="review">儿子挺喜欢的，每天晚上睡觉的时候必须听</span>
                                            <span class="author"> 来自于 魔头 的评价
                                                <span class="date" data-date="1484630206"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161400001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/kettle/" data-stat-aid="AA19038" data-stat-pid="2_19_4_95" target="_blank" data-log_code="31pchomesmart_right_0004017#rid=2bd98addae79f53683ac5faf2a0ee408&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.4&amp;pid=2161400001&amp;adm=1959"
                                            data-stat-id="AA19038+2_19_4_95" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19038+2_19_4_95', '//www.mi.com/kettle/', 'pcpid', '31pchomesmart_right_0004017#rid=2bd98addae79f53683ac5faf2a0ee408&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.4&amp;pid=2161400001&amp;adm=1959']);">
                                            <img src="/static/index/index/img/pms_1465366178.jpg" alt="米家恒温电水壶" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/kettle/" data-stat-aid="AA19038" data-stat-pid="2_19_4_95" data-log_code="31pchomesmart_right_0004017#rid=2bd98addae79f53683ac5faf2a0ee408&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.4&amp;pid=2161400001&amp;adm=1959"
                                            target="_blank" data-stat-id="AA19038+2_19_4_95" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19038+2_19_4_95', '//www.mi.com/kettle/', 'pcpid', '31pchomesmart_right_0004017#rid=2bd98addae79f53683ac5faf2a0ee408&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.4&amp;pid=2161400001&amp;adm=1959']);">米家恒温电水壶</a>
                                    </h3>
                                    <p class="desc">水温智能控制，304 不锈钢内胆</p>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/kettle/" data-stat-aid="AA19038" data-stat-pid="2_19_4_95" data-log_code="31pchomesmart_right_0004017#rid=2bd98addae79f53683ac5faf2a0ee408&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.4&amp;pid=2161400001&amp;adm=1959"
                                            target="_blank" data-stat-id="AA19038+2_19_4_95" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19038+2_19_4_95', '//www.mi.com/kettle/', 'pcpid', '31pchomesmart_right_0004017#rid=2bd98addae79f53683ac5faf2a0ee408&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.4&amp;pid=2161400001&amp;adm=1959']);">
                                            <span class="review">小米的东西真的有毒，我都买了10几款了，忍不住啊妹妹</span>
                                            <span class="author"> 来自于 ●_●)老白"²º¹7 的评价
                                                <span class="date" data-date="1511130540"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173700036">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173700028.html" data-stat-aid="AA19552" data-stat-pid="2_19_5_96" target="_blank"
                                            data-log_code="31pchomesmart_right_0005017#rid=a6792017e0b5dcac7487a569a6f41e63&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258"
                                            data-stat-id="AA19552+2_19_5_96" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19552+2_19_5_96', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_0005017#rid=a6792017e0b5dcac7487a569a6f41e63&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258']);">
                                            <img src="/static/index/index/img/pms_1506733860.jpg" alt="车载空气净化器(USB车充版)" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173700028.html" data-stat-aid="AA19552" data-stat-pid="2_19_5_96" data-log_code="31pchomesmart_right_0005017#rid=a6792017e0b5dcac7487a569a6f41e63&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258"
                                            target="_blank" data-stat-id="AA19552+2_19_5_96" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19552+2_19_5_96', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_0005017#rid=a6792017e0b5dcac7487a569a6f41e63&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258']);">车载空气净化器(USB车充版)</a>
                                    </h3>
                                    <p class="desc">高效净化车内空气</p>
                                    <p class="price">
                                        <span class="num">389</span>元
                                        <del>
                                            <span class="num">449</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173700028.html" data-stat-aid="AA19552" data-stat-pid="2_19_5_96" data-log_code="31pchomesmart_right_0005017#rid=a6792017e0b5dcac7487a569a6f41e63&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258"
                                            target="_blank" data-stat-id="AA19552+2_19_5_96" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19552+2_19_5_96', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_0005017#rid=a6792017e0b5dcac7487a569a6f41e63&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258']);">
                                            <span class="review">真正的米粉</span>
                                            <span class="author"> 来自于 段海清 的评价
                                                <span class="date" data-date="1511576670"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170600012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mj-carcorder/" data-stat-aid="AA19352" data-stat-pid="2_19_6_97" target="_blank"
                                            data-log_code="31pchomesmart_right_0006017#rid=a44eeb83fdd95582e4d639b6f029a567&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.6&amp;pid=2170600012&amp;adm=3127"
                                            data-stat-id="AA19352+2_19_6_97" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19352+2_19_6_97', '//www.mi.com/mj-carcorder/', 'pcpid', '31pchomesmart_right_0006017#rid=a44eeb83fdd95582e4d639b6f029a567&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.6&amp;pid=2170600012&amp;adm=3127']);">
                                            <img src="/static/index/index/img/pms_1488338229.jpg" alt="米家行车记录仪" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mj-carcorder/" data-stat-aid="AA19352" data-stat-pid="2_19_6_97" data-log_code="31pchomesmart_right_0006017#rid=a44eeb83fdd95582e4d639b6f029a567&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.6&amp;pid=2170600012&amp;adm=3127"
                                            target="_blank" data-stat-id="AA19352+2_19_6_97" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19352+2_19_6_97', '//www.mi.com/mj-carcorder/', 'pcpid', '31pchomesmart_right_0006017#rid=a44eeb83fdd95582e4d639b6f029a567&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.6&amp;pid=2170600012&amp;adm=3127']);">米家行车记录仪</a>
                                    </h3>
                                    <p class="desc">晚上能拍清车牌的行车记录仪</p>
                                    <p class="price">
                                        <span class="num">349</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mj-carcorder/" data-stat-aid="AA19352" data-stat-pid="2_19_6_97" data-log_code="31pchomesmart_right_0006017#rid=a44eeb83fdd95582e4d639b6f029a567&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.6&amp;pid=2170600012&amp;adm=3127"
                                            target="_blank" data-stat-id="AA19352+2_19_6_97" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19352+2_19_6_97', '//www.mi.com/mj-carcorder/', 'pcpid', '31pchomesmart_right_0006017#rid=a44eeb83fdd95582e4d639b6f029a567&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.6&amp;pid=2170600012&amp;adm=3127']);">
                                            <span class="review">自从买了小米行车记录仪，妈妈再也不用担心我被碰瓷了。...</span>
                                            <span class="author"> 来自于 韩晓东 的评价
                                                <span class="date" data-date="1498971624"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161800001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/ihealth2/" data-stat-aid="AA18297" data-stat-pid="2_19_7_98" target="_blank"
                                            data-log_code="31pchomesmart_right_0007017#rid=66cb3fd9d90609804621665b2a1d1328&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.7&amp;pid=2161800001&amp;adm=3438"
                                            data-stat-id="AA18297+2_19_7_98" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18297+2_19_7_98', '//www.mi.com/ihealth2/', 'pcpid', '31pchomesmart_right_0007017#rid=66cb3fd9d90609804621665b2a1d1328&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.7&amp;pid=2161800001&amp;adm=3438']);">
                                            <img src="/static/index/index/img/T1HQA_BCd_1RXrhCrK220x220.jpg" alt="米家iHealth血压计" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/ihealth2/" data-stat-aid="AA18297" data-stat-pid="2_19_7_98" data-log_code="31pchomesmart_right_0007017#rid=66cb3fd9d90609804621665b2a1d1328&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.7&amp;pid=2161800001&amp;adm=3438"
                                            target="_blank" data-stat-id="AA18297+2_19_7_98" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18297+2_19_7_98', '//www.mi.com/ihealth2/', 'pcpid', '31pchomesmart_right_0007017#rid=66cb3fd9d90609804621665b2a1d1328&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.7&amp;pid=2161800001&amp;adm=3438']);">米家iHealth血压计</a>
                                    </h3>
                                    <p class="desc">爸妈上手就会用的智能血压计</p>
                                    <p class="price">
                                        <span class="num">399</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/ihealth2/" data-stat-aid="AA18297" data-stat-pid="2_19_7_98" data-log_code="31pchomesmart_right_0007017#rid=66cb3fd9d90609804621665b2a1d1328&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.7&amp;pid=2161800001&amp;adm=3438"
                                            target="_blank" data-stat-id="AA18297+2_19_7_98" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18297+2_19_7_98', '//www.mi.com/ihealth2/', 'pcpid', '31pchomesmart_right_0007017#rid=66cb3fd9d90609804621665b2a1d1328&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.7&amp;pid=2161800001&amp;adm=3438']);">
                                            <span class="review">客服妹妹，我这样算米粉吗？</span>
                                            <span class="author"> 来自于 李洪雁 的评价
                                                <span class="date" data-date="1480471832"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2164400025">
                                    <div class="figure figure-img">
                                        <a href="https://www.mi.com/mivr/" class="exposure" data-stat-aid="AA15977" data-stat-pid="2_19_8_99" data-log_code="31pchomesmart_right_0008017#rid=85548188b70f79343d8b7ee5580bafc4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.8&amp;pid=2164400025&amp;adm=2797"
                                            target="_blank" data-stat-id="AA15977+2_19_8_99" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15977+2_19_8_99', '//www.mi.com/mivr/', 'pcpid', '31pchomesmart_right_0008017#rid=85548188b70f79343d8b7ee5580bafc4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.8&amp;pid=2164400025&amp;adm=2797']);">
                                            <img src="/static/index/index/img/pms_1477985364.jpg" alt="小米VR眼镜" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mivr/" class="exposure" data-stat-aid="AA15977" data-stat-pid="2_19_8_99" data-log_code="31pchomesmart_right_0008017#rid=85548188b70f79343d8b7ee5580bafc4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.8&amp;pid=2164400025&amp;adm=2797"
                                            target="_blank" data-stat-id="AA15977+2_19_8_99" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15977+2_19_8_99', '//www.mi.com/mivr/', 'pcpid', '31pchomesmart_right_0008017#rid=85548188b70f79343d8b7ee5580bafc4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030339.8&amp;pid=2164400025&amp;adm=2797']);">小米VR眼镜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">299</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/smart/" target="_blank" data-stat-id="5c9d7b9a44c11113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5c9d7b9a44c11113', '//www.mi.com/smart/', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/smart/" target="_blank" data-stat-id="4f01e512d879f5be" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4f01e512d879f5be', '//www.mi.com/smart/', 'pcpid', '']);">浏览更多
                                        <small>热门</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2170600006">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/scooter2/" data-stat-aid="AA17853" data-stat-pid="2_50_1_282" target="_blank"
                                            data-log_code="31pchomesmart_right_1001018#rid=855790d9e9084277b23b7daf8c593f70&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834"
                                            data-stat-id="AA17853+2_50_1_282" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17853+2_50_1_282', '//www.mi.com/scooter2/', 'pcpid', '31pchomesmart_right_1001018#rid=855790d9e9084277b23b7daf8c593f70&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834']);">
                                            <img src="/static/index/index/img/pms_1488272686.jpg" alt="小米米家电动滑板车" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/scooter2/" data-stat-aid="AA17853" data-stat-pid="2_50_1_282" data-log_code="31pchomesmart_right_1001018#rid=855790d9e9084277b23b7daf8c593f70&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834"
                                            target="_blank" data-stat-id="AA17853+2_50_1_282" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17853+2_50_1_282', '//www.mi.com/scooter2/', 'pcpid', '31pchomesmart_right_1001018#rid=855790d9e9084277b23b7daf8c593f70&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834']);">小米米家电动滑板车</a>
                                    </h3>
                                    <p class="desc">极简几何设计，1 分钟轻松上手</p>
                                    <p class="price">
                                        <span class="num">1999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/scooter2/" data-stat-aid="AA17853" data-stat-pid="2_50_1_282" data-log_code="31pchomesmart_right_1001018#rid=855790d9e9084277b23b7daf8c593f70&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834"
                                            target="_blank" data-stat-id="AA17853+2_50_1_282" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17853+2_50_1_282', '//www.mi.com/scooter2/', 'pcpid', '31pchomesmart_right_1001018#rid=855790d9e9084277b23b7daf8c593f70&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834']);">
                                            <span class="review">听说客服妹纸漂亮，妹纸约吗！</span>
                                            <span class="author"> 来自于 郑武 的评价
                                                <span class="date" data-date="1492333207"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2162400039">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mibicycle/" data-stat-aid="AA16931" data-stat-pid="2_50_2_283" target="_blank"
                                            data-log_code="31pchomesmart_right_1002018#rid=b52348465590e31be3a01194d97241a1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283"
                                            data-stat-id="AA16931+2_50_2_283" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16931+2_50_2_283', '//www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_1002018#rid=b52348465590e31be3a01194d97241a1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283']);">
                                            <img src="/static/index/index/img/2b69b930-a2fd-4d09-a46a-8690cb79f764.jpg" alt="电助力折叠自行车" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mibicycle/" data-stat-aid="AA16931" data-stat-pid="2_50_2_283" data-log_code="31pchomesmart_right_1002018#rid=b52348465590e31be3a01194d97241a1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283"
                                            target="_blank" data-stat-id="AA16931+2_50_2_283" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16931+2_50_2_283', '//www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_1002018#rid=b52348465590e31be3a01194d97241a1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283']);">电助力折叠自行车</a>
                                    </h3>
                                    <p class="desc">力矩传感电助力，折叠便携设计</p>
                                    <p class="price">
                                        <span class="num">2999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mibicycle/" data-stat-aid="AA16931" data-stat-pid="2_50_2_283" data-log_code="31pchomesmart_right_1002018#rid=b52348465590e31be3a01194d97241a1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283"
                                            target="_blank" data-stat-id="AA16931+2_50_2_283" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16931+2_50_2_283', '//www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_1002018#rid=b52348465590e31be3a01194d97241a1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283']);">
                                            <span class="review">车子很轻，男人拎着没压力，女人稍微有些吃力。各个部位...</span>
                                            <span class="author"> 来自于 寂寞独自凉 的评价
                                                <span class="date" data-date="1473696682"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170800018">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mj-interphone/" data-stat-aid="AA17068" data-stat-pid="2_50_3_284" target="_blank"
                                            data-log_code="31pchomesmart_right_1003018#rid=918f2ae60372c274b7569d18630391f8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.3&amp;pid=2170800018&amp;adm=3138"
                                            data-stat-id="AA17068+2_50_3_284" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17068+2_50_3_284', '//www.mi.com/mj-interphone/', 'pcpid', '31pchomesmart_right_1003018#rid=918f2ae60372c274b7569d18630391f8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.3&amp;pid=2170800018&amp;adm=3138']);">
                                            <img src="/static/index/index/img/pms_1488449975.jpg" alt="小米米家对讲机" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mj-interphone/" data-stat-aid="AA17068" data-stat-pid="2_50_3_284" data-log_code="31pchomesmart_right_1003018#rid=918f2ae60372c274b7569d18630391f8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.3&amp;pid=2170800018&amp;adm=3138"
                                            target="_blank" data-stat-id="AA17068+2_50_3_284" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17068+2_50_3_284', '//www.mi.com/mj-interphone/', 'pcpid', '31pchomesmart_right_1003018#rid=918f2ae60372c274b7569d18630391f8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.3&amp;pid=2170800018&amp;adm=3138']);">小米米家对讲机</a>
                                    </h3>
                                    <p class="desc">8天超长待机，位置共享，FM收音机</p>
                                    <p class="price">
                                        <span class="num">249</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mj-interphone/" data-stat-aid="AA17068" data-stat-pid="2_50_3_284" data-log_code="31pchomesmart_right_1003018#rid=918f2ae60372c274b7569d18630391f8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.3&amp;pid=2170800018&amp;adm=3138"
                                            target="_blank" data-stat-id="AA17068+2_50_3_284" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17068+2_50_3_284', '//www.mi.com/mj-interphone/', 'pcpid', '31pchomesmart_right_1003018#rid=918f2ae60372c274b7569d18630391f8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.3&amp;pid=2170800018&amp;adm=3138']);">
                                            <span class="review">白色蓝色是一对，怎么可能少了白色对讲机？设置简单，易...</span>
                                            <span class="author"> 来自于 冉冉升起 的评价
                                                <span class="date" data-date="1503455456"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173700036">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173700028.html" data-stat-aid="AA17077" data-stat-pid="2_50_4_285" target="_blank"
                                            data-log_code="31pchomesmart_right_1004018#rid=278ece92654be3bffea10f0bf49f5da6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156"
                                            data-stat-id="AA17077+2_50_4_285" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17077+2_50_4_285', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_1004018#rid=278ece92654be3bffea10f0bf49f5da6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156']);">
                                            <img src="/static/index/index/img/pms_1506733860.jpg" alt="米家车载空气净化器（USB车充版） 灰色" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173700028.html" data-stat-aid="AA17077" data-stat-pid="2_50_4_285" data-log_code="31pchomesmart_right_1004018#rid=278ece92654be3bffea10f0bf49f5da6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156"
                                            target="_blank" data-stat-id="AA17077+2_50_4_285" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17077+2_50_4_285', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_1004018#rid=278ece92654be3bffea10f0bf49f5da6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156']);">米家车载空气净化器（USB车充版） 灰色</a>
                                    </h3>
                                    <p class="desc">双风机循环气流，高效净化车内空气</p>
                                    <p class="price">
                                        <span class="num">389</span>元
                                        <del>
                                            <span class="num">449</span>元</del>
                                    </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-saleoff"> 享9折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173700028.html" data-stat-aid="AA17077" data-stat-pid="2_50_4_285" data-log_code="31pchomesmart_right_1004018#rid=278ece92654be3bffea10f0bf49f5da6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156"
                                            target="_blank" data-stat-id="AA17077+2_50_4_285" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17077+2_50_4_285', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_1004018#rid=278ece92654be3bffea10f0bf49f5da6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156']);">
                                            <span class="review">有米，真好！</span>
                                            <span class="author"> 来自于 邦国际 的评价
                                                <span class="date" data-date="1511492050"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164300004">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/hmwatch/" data-stat-aid="AA16605" data-stat-pid="2_50_5_286" target="_blank"
                                            data-log_code="31pchomesmart_right_1005018#rid=45b8207f36d0ba1f05c643dc1a69f83c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486"
                                            data-stat-id="AA16605+2_50_5_286" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16605+2_50_5_286', '//www.mi.com/hmwatch/', 'pcpid', '31pchomesmart_right_1005018#rid=45b8207f36d0ba1f05c643dc1a69f83c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486']);">
                                            <img src="/static/index/index/img/pms_1478761096.jpg" alt="Amazfit 运动手表" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/hmwatch/" data-stat-aid="AA16605" data-stat-pid="2_50_5_286" data-log_code="31pchomesmart_right_1005018#rid=45b8207f36d0ba1f05c643dc1a69f83c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486"
                                            target="_blank" data-stat-id="AA16605+2_50_5_286" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16605+2_50_5_286', '//www.mi.com/hmwatch/', 'pcpid', '31pchomesmart_right_1005018#rid=45b8207f36d0ba1f05c643dc1a69f83c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486']);">Amazfit 运动手表</a>
                                    </h3>
                                    <p class="desc">蓝牙听歌，运动心率，智能通知提醒</p>
                                    <p class="price">
                                        <span class="num">799</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/hmwatch/" data-stat-aid="AA16605" data-stat-pid="2_50_5_286" data-log_code="31pchomesmart_right_1005018#rid=45b8207f36d0ba1f05c643dc1a69f83c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486"
                                            target="_blank" data-stat-id="AA16605+2_50_5_286" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16605+2_50_5_286', '//www.mi.com/hmwatch/', 'pcpid', '31pchomesmart_right_1005018#rid=45b8207f36d0ba1f05c643dc1a69f83c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486']);">
                                            <span class="review">漂亮得一塌糊涂的，客服妹妹能不能约？我敢说手表比妹子...</span>
                                            <span class="author"> 来自于 CAT.LI 的评价
                                                <span class="date" data-date="1500637228"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171200008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/yi-camera-m1/" data-stat-aid="AA17034" data-stat-pid="2_50_6_287" target="_blank"
                                            data-log_code="31pchomesmart_right_1006018#rid=7aea70bc69b0dddf803874c6f774bd92&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728"
                                            data-stat-id="AA17034+2_50_6_287" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17034+2_50_6_287', '//www.mi.com/yi-camera-m1/', 'pcpid', '31pchomesmart_right_1006018#rid=7aea70bc69b0dddf803874c6f774bd92&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728']);">
                                            <img src="/static/index/index/img/pms_1496730880.jpg" alt="小蚁微单相机M1双镜头套机" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/yi-camera-m1/" data-stat-aid="AA17034" data-stat-pid="2_50_6_287" data-log_code="31pchomesmart_right_1006018#rid=7aea70bc69b0dddf803874c6f774bd92&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728"
                                            target="_blank" data-stat-id="AA17034+2_50_6_287" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17034+2_50_6_287', '//www.mi.com/yi-camera-m1/', 'pcpid', '31pchomesmart_right_1006018#rid=7aea70bc69b0dddf803874c6f774bd92&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728']);">小蚁微单相机M1双镜头套机</a>
                                    </h3>
                                    <p class="desc">2016 万有效像素，4K视频录制</p>
                                    <p class="price">
                                        <span class="num">2999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/yi-camera-m1/" data-stat-aid="AA17034" data-stat-pid="2_50_6_287" data-log_code="31pchomesmart_right_1006018#rid=7aea70bc69b0dddf803874c6f774bd92&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728"
                                            target="_blank" data-stat-id="AA17034+2_50_6_287" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17034+2_50_6_287', '//www.mi.com/yi-camera-m1/', 'pcpid', '31pchomesmart_right_1006018#rid=7aea70bc69b0dddf803874c6f774bd92&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728']);">
                                            <span class="review">作为全球首发第一批小米用户，这么多年过去了，拿起小米...</span>
                                            <span class="author"> 来自于 195527338 的评价
                                                <span class="date" data-date="1503572800"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171200009">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mj-panorama-camera/" data-stat-aid="AA19205" data-stat-pid="2_50_7_288" target="_blank"
                                            data-log_code="31pchomesmart_right_1007018#rid=255853cd7c643387f684121c0eaa699a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582"
                                            data-stat-id="AA19205+2_50_7_288" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19205+2_50_7_288', '//www.mi.com/mj-panorama-camera/', 'pcpid', '31pchomesmart_right_1007018#rid=255853cd7c643387f684121c0eaa699a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582']);">
                                            <img src="/static/index/index/img/pms_1491312153.jpg" alt="米家全景相机套装" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mj-panorama-camera/" data-stat-aid="AA19205" data-stat-pid="2_50_7_288" data-log_code="31pchomesmart_right_1007018#rid=255853cd7c643387f684121c0eaa699a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582"
                                            target="_blank" data-stat-id="AA19205+2_50_7_288" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19205+2_50_7_288', '//www.mi.com/mj-panorama-camera/', 'pcpid', '31pchomesmart_right_1007018#rid=255853cd7c643387f684121c0eaa699a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582']);">米家全景相机套装</a>
                                    </h3>
                                    <p class="desc">2388万有效像素 / 3.5K视频录制 </p>
                                    <p class="price">
                                        <span class="num">1699</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mj-panorama-camera/" data-stat-aid="AA19205" data-stat-pid="2_50_7_288" data-log_code="31pchomesmart_right_1007018#rid=255853cd7c643387f684121c0eaa699a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582"
                                            target="_blank" data-stat-id="AA19205+2_50_7_288" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19205+2_50_7_288', '//www.mi.com/mj-panorama-camera/', 'pcpid', '31pchomesmart_right_1007018#rid=255853cd7c643387f684121c0eaa699a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582']);">
                                            <span class="review">太棒了 摸起来相当舒坦 效果棒棒的 很清晰 大爱 小...</span>
                                            <span class="author"> 来自于 123456 的评价
                                                <span class="date" data-date="1501904872"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2171200010">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1171200026.html" class="exposure" data-stat-aid="AA16256" data-stat-pid="2_50_8_289" data-log_code="31pchomesmart_right_1008018#rid=25e003d2c346917ff594cae25c9ba008&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487"
                                            target="_blank" data-stat-id="AA16256+2_50_8_289" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16256+2_50_8_289', '//item.mi.com/1171200026.html', 'pcpid', '31pchomesmart_right_1008018#rid=25e003d2c346917ff594cae25c9ba008&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487']);">
                                            <img src="/static/index/index/img/pms_1492509229.jpg" alt="米家车载空气净化器滤芯" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1171200026.html" class="exposure" data-stat-aid="AA16256" data-stat-pid="2_50_8_289" data-log_code="31pchomesmart_right_1008018#rid=25e003d2c346917ff594cae25c9ba008&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487"
                                            target="_blank" data-stat-id="AA16256+2_50_8_289" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16256+2_50_8_289', '//item.mi.com/1171200026.html', 'pcpid', '31pchomesmart_right_1008018#rid=25e003d2c346917ff594cae25c9ba008&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487']);">米家车载空气净化器滤芯</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">59</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/smart/" target="_blank" data-stat-id="5c9d7b9a44c11113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5c9d7b9a44c11113', '//www.mi.com/smart/', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/smart/" target="_blank" data-stat-id="abb4e721bf975a58" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-abb4e721bf975a58', '//www.mi.com/smart/', 'pcpid', '']);">浏览更多
                                        <small>出行</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2153900026">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1153900039.html" data-stat-aid="AA18720" data-stat-pid="2_48_1_266" target="_blank"
                                            data-log_code="31pchomesmart_right_2001019#rid=ddff2b91f7b349f9c675568b9aee8a51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.1&amp;pid=2153900026&amp;adm=904"
                                            data-stat-id="AA18720+2_48_1_266" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18720+2_48_1_266', '//item.mi.com/1153900039.html', 'pcpid', '31pchomesmart_right_2001019#rid=ddff2b91f7b349f9c675568b9aee8a51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.1&amp;pid=2153900026&amp;adm=904']);">
                                            <img src="/static/index/index/img/T1oVx_BjCv1RXrhCrK.jpg" alt="iHealth智能血压计（蓝牙版）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1153900039.html" data-stat-aid="AA18720" data-stat-pid="2_48_1_266" data-log_code="31pchomesmart_right_2001019#rid=ddff2b91f7b349f9c675568b9aee8a51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.1&amp;pid=2153900026&amp;adm=904"
                                            target="_blank" data-stat-id="AA18720+2_48_1_266" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18720+2_48_1_266', '//item.mi.com/1153900039.html', 'pcpid', '31pchomesmart_right_2001019#rid=ddff2b91f7b349f9c675568b9aee8a51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.1&amp;pid=2153900026&amp;adm=904']);">iHealth智能血压计（蓝牙版）</a>
                                    </h3>
                                    <p class="desc">送给父母的健康礼物</p>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1153900039.html" data-stat-aid="AA18720" data-stat-pid="2_48_1_266" data-log_code="31pchomesmart_right_2001019#rid=ddff2b91f7b349f9c675568b9aee8a51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.1&amp;pid=2153900026&amp;adm=904"
                                            target="_blank" data-stat-id="AA18720+2_48_1_266" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18720+2_48_1_266', '//item.mi.com/1153900039.html', 'pcpid', '31pchomesmart_right_2001019#rid=ddff2b91f7b349f9c675568b9aee8a51&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.1&amp;pid=2153900026&amp;adm=904']);">
                                            <span class="review">蛮不错的，使用起来很方便！买了两个，一个送爸妈！一个...</span>
                                            <span class="author"> 来自于 Destiny-C.C 的评价
                                                <span class="date" data-date="1481122960"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170800017">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/scale2/" data-stat-aid="AA18719" data-stat-pid="2_48_2_267" target="_blank"
                                            data-log_code="31pchomesmart_right_2002019#rid=269ad8c1958d6a5c4b5b7d64b98fc650&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.2&amp;pid=2170800017&amp;adm=3225"
                                            data-stat-id="AA18719+2_48_2_267" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18719+2_48_2_267', '//www.mi.com/scale2/', 'pcpid', '31pchomesmart_right_2002019#rid=269ad8c1958d6a5c4b5b7d64b98fc650&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.2&amp;pid=2170800017&amp;adm=3225']);">
                                            <img src="/static/index/index/img/pms_1487831386.jpg" alt="小米体脂秤" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/scale2/" data-stat-aid="AA18719" data-stat-pid="2_48_2_267" data-log_code="31pchomesmart_right_2002019#rid=269ad8c1958d6a5c4b5b7d64b98fc650&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.2&amp;pid=2170800017&amp;adm=3225"
                                            target="_blank" data-stat-id="AA18719+2_48_2_267" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18719+2_48_2_267', '//www.mi.com/scale2/', 'pcpid', '31pchomesmart_right_2002019#rid=269ad8c1958d6a5c4b5b7d64b98fc650&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.2&amp;pid=2170800017&amp;adm=3225']);">小米体脂秤</a>
                                    </h3>
                                    <p class="desc">简约纤薄，隐藏式 LED 显示屏</p>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/scale2/" data-stat-aid="AA18719" data-stat-pid="2_48_2_267" data-log_code="31pchomesmart_right_2002019#rid=269ad8c1958d6a5c4b5b7d64b98fc650&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.2&amp;pid=2170800017&amp;adm=3225"
                                            target="_blank" data-stat-id="AA18719+2_48_2_267" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18719+2_48_2_267', '//www.mi.com/scale2/', 'pcpid', '31pchomesmart_right_2002019#rid=269ad8c1958d6a5c4b5b7d64b98fc650&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.2&amp;pid=2170800017&amp;adm=3225']);">
                                            <span class="review">客服妹纸，过来称下今天胖了十斤还是二十斤</span>
                                            <span class="author"> 来自于 追逐 的评价
                                                <span class="date" data-date="1503258894"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2151100003">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/scale/" data-stat-aid="AA16602" data-stat-pid="2_48_3_268" target="_blank" data-log_code="31pchomesmart_right_2003019#rid=b8060b2c0b409e482f31c9951415ac72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579"
                                            data-stat-id="AA16602+2_48_3_268" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16602+2_48_3_268', '//www.mi.com/scale/', 'pcpid', '31pchomesmart_right_2003019#rid=b8060b2c0b409e482f31c9951415ac72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579']);">
                                            <img src="/static/index/index/img/T1sWd_B7VT1RXrhCrK220x220.jpg" alt="小米体重秤" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/scale/" data-stat-aid="AA16602" data-stat-pid="2_48_3_268" data-log_code="31pchomesmart_right_2003019#rid=b8060b2c0b409e482f31c9951415ac72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579"
                                            target="_blank" data-stat-id="AA16602+2_48_3_268" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16602+2_48_3_268', '//www.mi.com/scale/', 'pcpid', '31pchomesmart_right_2003019#rid=b8060b2c0b409e482f31c9951415ac72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579']);">小米体重秤</a>
                                    </h3>
                                    <p class="desc">100克，喝杯水都可感知的精准</p>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/scale/" data-stat-aid="AA16602" data-stat-pid="2_48_3_268" data-log_code="31pchomesmart_right_2003019#rid=b8060b2c0b409e482f31c9951415ac72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579"
                                            target="_blank" data-stat-id="AA16602+2_48_3_268" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16602+2_48_3_268', '//www.mi.com/scale/', 'pcpid', '31pchomesmart_right_2003019#rid=b8060b2c0b409e482f31c9951415ac72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579']);">
                                            <span class="review">祝小米产品销量和品质犹如我体重一直再提升!，唉不说了...</span>
                                            <span class="author"> 来自于 鸭儿瑞安斯 的评价
                                                <span class="date" data-date="1509246195"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170800016">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mj-camera-1080p/" data-stat-aid="AA15969" data-stat-pid="2_48_4_269" target="_blank"
                                            data-log_code="31pchomesmart_right_2004019#rid=a1c64852af2f490f7aebed87efe73a4b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.4&amp;pid=2170800016&amp;adm=3132"
                                            data-stat-id="AA15969+2_48_4_269" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15969+2_48_4_269', '//www.mi.com/mj-camera-1080p/', 'pcpid', '31pchomesmart_right_2004019#rid=a1c64852af2f490f7aebed87efe73a4b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.4&amp;pid=2170800016&amp;adm=3132']);">
                                            <img src="/static/index/index/img/pms_1488190122.jpg" alt="米家智能摄像机 1080P" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mj-camera-1080p/" data-stat-aid="AA15969" data-stat-pid="2_48_4_269" data-log_code="31pchomesmart_right_2004019#rid=a1c64852af2f490f7aebed87efe73a4b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.4&amp;pid=2170800016&amp;adm=3132"
                                            target="_blank" data-stat-id="AA15969+2_48_4_269" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15969+2_48_4_269', '//www.mi.com/mj-camera-1080p/', 'pcpid', '31pchomesmart_right_2004019#rid=a1c64852af2f490f7aebed87efe73a4b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.4&amp;pid=2170800016&amp;adm=3132']);">米家智能摄像机 1080P</a>
                                    </h3>
                                    <p class="desc">10米红外夜视范围，双向语音沟通</p>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mj-camera-1080p/" data-stat-aid="AA15969" data-stat-pid="2_48_4_269" data-log_code="31pchomesmart_right_2004019#rid=a1c64852af2f490f7aebed87efe73a4b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.4&amp;pid=2170800016&amp;adm=3132"
                                            target="_blank" data-stat-id="AA15969+2_48_4_269" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15969+2_48_4_269', '//www.mi.com/mj-camera-1080p/', 'pcpid', '31pchomesmart_right_2004019#rid=a1c64852af2f490f7aebed87efe73a4b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.4&amp;pid=2170800016&amp;adm=3132']);">
                                            <span class="review">用来做店里的监控，很清晰，特别是夜视功能很强大。</span>
                                            <span class="author"> 来自于 舞雨伦比 的评价
                                                <span class="date" data-date="1496036198"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161800001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/ihealth2/" data-stat-aid="AA16416" data-stat-pid="2_48_5_270" target="_blank"
                                            data-log_code="31pchomesmart_right_2005019#rid=79cf29dd0f662eb978e12322d0dcdb6f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.5&amp;pid=2161800001&amp;adm=3438"
                                            data-stat-id="AA16416+2_48_5_270" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16416+2_48_5_270', '//www.mi.com/ihealth2/', 'pcpid', '31pchomesmart_right_2005019#rid=79cf29dd0f662eb978e12322d0dcdb6f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.5&amp;pid=2161800001&amp;adm=3438']);">
                                            <img src="/static/index/index/img/T1HQA_BCd_1RXrhCrK220x220.jpg" alt="米家iHealth血压计" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/ihealth2/" data-stat-aid="AA16416" data-stat-pid="2_48_5_270" data-log_code="31pchomesmart_right_2005019#rid=79cf29dd0f662eb978e12322d0dcdb6f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.5&amp;pid=2161800001&amp;adm=3438"
                                            target="_blank" data-stat-id="AA16416+2_48_5_270" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16416+2_48_5_270', '//www.mi.com/ihealth2/', 'pcpid', '31pchomesmart_right_2005019#rid=79cf29dd0f662eb978e12322d0dcdb6f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.5&amp;pid=2161800001&amp;adm=3438']);">米家iHealth血压计</a>
                                    </h3>
                                    <p class="desc">爸妈上手就会用的智能血压计</p>
                                    <p class="price">
                                        <span class="num">399</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/ihealth2/" data-stat-aid="AA16416" data-stat-pid="2_48_5_270" data-log_code="31pchomesmart_right_2005019#rid=79cf29dd0f662eb978e12322d0dcdb6f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.5&amp;pid=2161800001&amp;adm=3438"
                                            target="_blank" data-stat-id="AA16416+2_48_5_270" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16416+2_48_5_270', '//www.mi.com/ihealth2/', 'pcpid', '31pchomesmart_right_2005019#rid=79cf29dd0f662eb978e12322d0dcdb6f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.5&amp;pid=2161800001&amp;adm=3438']);">
                                            <span class="review">客服妹妹，我这样算米粉吗？</span>
                                            <span class="author"> 来自于 李洪雁 的评价
                                                <span class="date" data-date="1480471832"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164300025">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/pmdetec/" data-stat-aid="AA15972" data-stat-pid="2_48_6_271" target="_blank"
                                            data-log_code="31pchomesmart_right_2006019#rid=ab221b58063b85476292209e9b20f7c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643"
                                            data-stat-id="AA15972+2_48_6_271" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15972+2_48_6_271', '//www.mi.com/pmdetec/', 'pcpid', '31pchomesmart_right_2006019#rid=ab221b58063b85476292209e9b20f7c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643']);">
                                            <img src="/static/index/index/img/pms_1477980865.jpg" alt="米家PM2.5检测仪" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/pmdetec/" data-stat-aid="AA15972" data-stat-pid="2_48_6_271" data-log_code="31pchomesmart_right_2006019#rid=ab221b58063b85476292209e9b20f7c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643"
                                            target="_blank" data-stat-id="AA15972+2_48_6_271" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15972+2_48_6_271', '//www.mi.com/pmdetec/', 'pcpid', '31pchomesmart_right_2006019#rid=ab221b58063b85476292209e9b20f7c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643']);">米家PM2.5检测仪</a>
                                    </h3>
                                    <p class="desc">一体黑 OLED 屏，智能联动</p>
                                    <p class="price">
                                        <span class="num">399</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/pmdetec/" data-stat-aid="AA15972" data-stat-pid="2_48_6_271" data-log_code="31pchomesmart_right_2006019#rid=ab221b58063b85476292209e9b20f7c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643"
                                            target="_blank" data-stat-id="AA15972+2_48_6_271" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15972+2_48_6_271', '//www.mi.com/pmdetec/', 'pcpid', '31pchomesmart_right_2006019#rid=ab221b58063b85476292209e9b20f7c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643']);">
                                            <span class="review">颜值太高了，数值也太高了，放了个屁而已，至于吗</span>
                                            <span class="author"> 来自于 雨过 的评价
                                                <span class="date" data-date="1480680146"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164000002">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1164000002.html" data-stat-aid="AA15973" data-stat-pid="2_48_7_272" target="_blank"
                                            data-log_code="31pchomesmart_right_2007019#rid=d142f7005db1dc1bc0016e6df9d483bb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476"
                                            data-stat-id="AA15973+2_48_7_272" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15973+2_48_7_272', '//item.mi.com/1164000002.html', 'pcpid', '31pchomesmart_right_2007019#rid=d142f7005db1dc1bc0016e6df9d483bb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476']);">
                                            <img src="/static/index/index/img/pms_1476425102.jpg" alt="空气净化器滤芯" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164000002.html" data-stat-aid="AA15973" data-stat-pid="2_48_7_272" data-log_code="31pchomesmart_right_2007019#rid=d142f7005db1dc1bc0016e6df9d483bb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476"
                                            target="_blank" data-stat-id="AA15973+2_48_7_272" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15973+2_48_7_272', '//item.mi.com/1164000002.html', 'pcpid', '31pchomesmart_right_2007019#rid=d142f7005db1dc1bc0016e6df9d483bb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476']);">空气净化器滤芯</a>
                                    </h3>
                                    <p class="desc">高效净化，可吸入颗粒物、甲醛</p>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164000002.html" data-stat-aid="AA15973" data-stat-pid="2_48_7_272" data-log_code="31pchomesmart_right_2007019#rid=d142f7005db1dc1bc0016e6df9d483bb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476"
                                            target="_blank" data-stat-id="AA15973+2_48_7_272" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15973+2_48_7_272', '//item.mi.com/1164000002.html', 'pcpid', '31pchomesmart_right_2007019#rid=d142f7005db1dc1bc0016e6df9d483bb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476']);">
                                            <span class="review">还真是不错，自己买了一个小风扇放上去了，然后做了一个...</span>
                                            <span class="author"> 来自于 yqlyql 的评价
                                                <span class="date" data-date="1483788316"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2152800032">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1152800035.html" class="exposure" data-stat-aid="AA15975" data-stat-pid="2_48_8_273" data-log_code="31pchomesmart_right_2008019#rid=bc9b05dc931870e4f50e5464e02df2aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595"
                                            target="_blank" data-stat-id="AA15975+2_48_8_273" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15975+2_48_8_273', '//item.mi.com/1152800035.html', 'pcpid', '31pchomesmart_right_2008019#rid=bc9b05dc931870e4f50e5464e02df2aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595']);">
                                            <img src="/static/index/index/img/T1KzbQBvbT1RXrhCrK.jpg" alt="小米水质TDS检测笔" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1152800035.html" class="exposure" data-stat-aid="AA15975" data-stat-pid="2_48_8_273" data-log_code="31pchomesmart_right_2008019#rid=bc9b05dc931870e4f50e5464e02df2aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595"
                                            target="_blank" data-stat-id="AA15975+2_48_8_273" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15975+2_48_8_273', '//item.mi.com/1152800035.html', 'pcpid', '31pchomesmart_right_2008019#rid=bc9b05dc931870e4f50e5464e02df2aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595']);">小米水质TDS检测笔</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">39</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/smart/" target="_blank" data-stat-id="5c9d7b9a44c11113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5c9d7b9a44c11113', '//www.mi.com/smart/', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/smart/" target="_blank" data-stat-id="78709430d40c929c" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-78709430d40c929c', '//www.mi.com/smart/', 'pcpid', '']);">浏览更多
                                        <small>健康</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2172300005">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/rover/" data-stat-aid="AA19123" data-stat-pid="2_51_1_290" target="_blank" data-log_code="31pchomesmart_right_3001020#rid=04e5f76d0ec1780468aad04d1f06e835&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805"
                                            data-stat-id="AA19123+2_51_1_290" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19123+2_51_1_290', 'https://www.mi.com/rover/', 'pcpid', '31pchomesmart_right_3001020#rid=04e5f76d0ec1780468aad04d1f06e835&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805']);">
                                            <img src="/static/index/index/img/pms_1499048837.jpg" alt="米兔积木机器人 履带机甲" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/rover/" data-stat-aid="AA19123" data-stat-pid="2_51_1_290" data-log_code="31pchomesmart_right_3001020#rid=04e5f76d0ec1780468aad04d1f06e835&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805"
                                            target="_blank" data-stat-id="AA19123+2_51_1_290" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19123+2_51_1_290', 'https://www.mi.com/rover/', 'pcpid', '31pchomesmart_right_3001020#rid=04e5f76d0ec1780468aad04d1f06e835&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805']);">米兔积木机器人 履带机甲</a>
                                    </h3>
                                    <p class="desc">履带底盘，智能操控，百变拼插</p>
                                    <p class="price">
                                        <span class="num">499</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/rover/" data-stat-aid="AA19123" data-stat-pid="2_51_1_290" data-log_code="31pchomesmart_right_3001020#rid=04e5f76d0ec1780468aad04d1f06e835&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805"
                                            target="_blank" data-stat-id="AA19123+2_51_1_290" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19123+2_51_1_290', 'https://www.mi.com/rover/', 'pcpid', '31pchomesmart_right_3001020#rid=04e5f76d0ec1780468aad04d1f06e835&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805']);">
                                            <span class="review">之前买了机器人，儿子拼好了却发现机器人能倒着开。于是...</span>
                                            <span class="author"> 来自于 106392013 的评价
                                                <span class="date" data-date="1514073424"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2162100003">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mitu/" data-stat-aid="AA17175" data-stat-pid="2_51_2_291" target="_blank" data-log_code="31pchomesmart_right_3002020#rid=1c708af4fc5486acbe5347f3808a4156&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273"
                                            data-stat-id="AA17175+2_51_2_291" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17175+2_51_2_291', '//www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_3002020#rid=1c708af4fc5486acbe5347f3808a4156&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273']);">
                                            <img src="/static/index/index/img/pms_1464615180.jpg" alt="米兔智能故事机" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mitu/" data-stat-aid="AA17175" data-stat-pid="2_51_2_291" data-log_code="31pchomesmart_right_3002020#rid=1c708af4fc5486acbe5347f3808a4156&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273"
                                            target="_blank" data-stat-id="AA17175+2_51_2_291" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17175+2_51_2_291', '//www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_3002020#rid=1c708af4fc5486acbe5347f3808a4156&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273']);">米兔智能故事机</a>
                                    </h3>
                                    <p class="desc">微信远程互动，智能语音交互</p>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mitu/" data-stat-aid="AA17175" data-stat-pid="2_51_2_291" data-log_code="31pchomesmart_right_3002020#rid=1c708af4fc5486acbe5347f3808a4156&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273"
                                            target="_blank" data-stat-id="AA17175+2_51_2_291" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17175+2_51_2_291', '//www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_3002020#rid=1c708af4fc5486acbe5347f3808a4156&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273']);">
                                            <span class="review">儿子挺喜欢的，每天晚上睡觉的时候必须听</span>
                                            <span class="author"> 来自于 魔头 的评价
                                                <span class="date" data-date="1484630206"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2162400039">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mibicycle/" data-stat-aid="AA19063" data-stat-pid="2_51_3_292" target="_blank"
                                            data-log_code="31pchomesmart_right_3003020#rid=303aac787713629f8edef048d360e41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031"
                                            data-stat-id="AA19063+2_51_3_292" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19063+2_51_3_292', '//www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_3003020#rid=303aac787713629f8edef048d360e41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031']);">
                                            <img src="/static/index/index/img/31ae6df6-b672-491e-ab95-7b83a965c694.png" alt="米家骑记电助力折叠自行车" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mibicycle/" data-stat-aid="AA19063" data-stat-pid="2_51_3_292" data-log_code="31pchomesmart_right_3003020#rid=303aac787713629f8edef048d360e41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031"
                                            target="_blank" data-stat-id="AA19063+2_51_3_292" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19063+2_51_3_292', '//www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_3003020#rid=303aac787713629f8edef048d360e41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031']);">米家骑记电助力折叠自行车</a>
                                    </h3>
                                    <p class="desc">力矩传感电助力，折叠便携设计</p>
                                    <p class="price">
                                        <span class="num">2999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mibicycle/" data-stat-aid="AA19063" data-stat-pid="2_51_3_292" data-log_code="31pchomesmart_right_3003020#rid=303aac787713629f8edef048d360e41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031"
                                            target="_blank" data-stat-id="AA19063+2_51_3_292" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19063+2_51_3_292', '//www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_3003020#rid=303aac787713629f8edef048d360e41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031']);">
                                            <span class="review">好玩，安装好方便</span>
                                            <span class="author"> 来自于 江思毅 的评价
                                                <span class="date" data-date="1476233233"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164800012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/wangguan/" data-stat-aid="AA15948" data-stat-pid="2_51_4_293" target="_blank"
                                            data-log_code="31pchomesmart_right_3004020#rid=0ed9d29319c544c76dd25d0cd60cf2d7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482"
                                            data-stat-id="AA15948+2_51_4_293" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15948+2_51_4_293', '//www.mi.com/wangguan/', 'pcpid', '31pchomesmart_right_3004020#rid=0ed9d29319c544c76dd25d0cd60cf2d7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482']);">
                                            <img src="/static/index/index/img/pms_1480474019.jpg" alt="米家多功能网关" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/wangguan/" data-stat-aid="AA15948" data-stat-pid="2_51_4_293" data-log_code="31pchomesmart_right_3004020#rid=0ed9d29319c544c76dd25d0cd60cf2d7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482"
                                            target="_blank" data-stat-id="AA15948+2_51_4_293" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15948+2_51_4_293', '//www.mi.com/wangguan/', 'pcpid', '31pchomesmart_right_3004020#rid=0ed9d29319c544c76dd25d0cd60cf2d7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482']);">米家多功能网关</a>
                                    </h3>
                                    <p class="desc">米家智能配件控制中心</p>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/wangguan/" data-stat-aid="AA15948" data-stat-pid="2_51_4_293" data-log_code="31pchomesmart_right_3004020#rid=0ed9d29319c544c76dd25d0cd60cf2d7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482"
                                            target="_blank" data-stat-id="AA15948+2_51_4_293" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15948+2_51_4_293', '//www.mi.com/wangguan/', 'pcpid', '31pchomesmart_right_3004020#rid=0ed9d29319c544c76dd25d0cd60cf2d7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482']);">
                                            <span class="review">求男票求男票，只要男票</span>
                                            <span class="author"> 来自于 情风 的评价
                                                <span class="date" data-date="1491359409"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170300008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1170300012.html" data-stat-aid="AA17206" data-stat-pid="2_51_5_294" target="_blank"
                                            data-log_code="31pchomesmart_right_3005020#rid=d77c36fe86bde63d7bc33f03a2829252&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.5&amp;pid=2170300008&amp;adm=3669"
                                            data-stat-id="AA17206+2_51_5_294" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17206+2_51_5_294', '//item.mi.com/1170300012.html', 'pcpid', '31pchomesmart_right_3005020#rid=d77c36fe86bde63d7bc33f03a2829252&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.5&amp;pid=2170300008&amp;adm=3669']);">
                                            <img src="/static/index/index/img/pms_1487824962.jpg" alt="小米无人机4K版套装" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1170300012.html" data-stat-aid="AA17206" data-stat-pid="2_51_5_294" data-log_code="31pchomesmart_right_3005020#rid=d77c36fe86bde63d7bc33f03a2829252&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.5&amp;pid=2170300008&amp;adm=3669"
                                            target="_blank" data-stat-id="AA17206+2_51_5_294" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17206+2_51_5_294', '//item.mi.com/1170300012.html', 'pcpid', '31pchomesmart_right_3005020#rid=d77c36fe86bde63d7bc33f03a2829252&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.5&amp;pid=2170300008&amp;adm=3669']);">小米无人机4K版套装</a>
                                    </h3>
                                    <p class="desc">探索触手可及的新视角</p>
                                    <p class="price">
                                        <span class="num">2999</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1170300012.html" data-stat-aid="AA17206" data-stat-pid="2_51_5_294" data-log_code="31pchomesmart_right_3005020#rid=d77c36fe86bde63d7bc33f03a2829252&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.5&amp;pid=2170300008&amp;adm=3669"
                                            target="_blank" data-stat-id="AA17206+2_51_5_294" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17206+2_51_5_294', '//item.mi.com/1170300012.html', 'pcpid', '31pchomesmart_right_3005020#rid=d77c36fe86bde63d7bc33f03a2829252&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.5&amp;pid=2170300008&amp;adm=3669']);">
                                            <span class="review">室内不是稳定，建议不要在室内起飞</span>
                                            <span class="author"> 来自于 1162576972 的评价
                                                <span class="date" data-date="1488801217"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172300001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mtwatch-2/" data-stat-aid="AA18465" data-stat-pid="2_51_6_295" target="_blank"
                                            data-log_code="31pchomesmart_right_3006020#rid=f7ca72c8040b5d010e4722128235d3d8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761"
                                            data-stat-id="AA18465+2_51_6_295" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18465+2_51_6_295', 'https://www.mi.com/mtwatch-2/', 'pcpid', '31pchomesmart_right_3006020#rid=f7ca72c8040b5d010e4722128235d3d8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761']);">
                                            <img src="/static/index/index/img/pms_1498526059.jpg" alt="米兔儿童电话手表2" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mtwatch-2/" data-stat-aid="AA18465" data-stat-pid="2_51_6_295" data-log_code="31pchomesmart_right_3006020#rid=f7ca72c8040b5d010e4722128235d3d8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761"
                                            target="_blank" data-stat-id="AA18465+2_51_6_295" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18465+2_51_6_295', 'https://www.mi.com/mtwatch-2/', 'pcpid', '31pchomesmart_right_3006020#rid=f7ca72c8040b5d010e4722128235d3d8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761']);">米兔儿童电话手表2</a>
                                    </h3>
                                    <p class="desc">AMOLED高清彩屏，6 天超长续航</p>
                                    <p class="price">
                                        <span class="num">399</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mtwatch-2/" data-stat-aid="AA18465" data-stat-pid="2_51_6_295" data-log_code="31pchomesmart_right_3006020#rid=f7ca72c8040b5d010e4722128235d3d8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761"
                                            target="_blank" data-stat-id="AA18465+2_51_6_295" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18465+2_51_6_295', 'https://www.mi.com/mtwatch-2/', 'pcpid', '31pchomesmart_right_3006020#rid=f7ca72c8040b5d010e4722128235d3d8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761']);">
                                            <span class="review">货以收到，感觉还可以，功能方便。没装卡是不是过一段时...</span>
                                            <span class="author"> 来自于 1324723682 的评价
                                                <span class="date" data-date="1510678638"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170800015">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/radio-plus/" data-stat-aid="AA15950" data-stat-pid="2_51_7_296" target="_blank"
                                            data-log_code="31pchomesmart_right_3007020#rid=bac678252aa9cc58e8ae2b28c2db7b08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.7&amp;pid=2170800015&amp;adm=3484"
                                            data-stat-id="AA15950+2_51_7_296" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15950+2_51_7_296', '//www.mi.com/radio-plus/', 'pcpid', '31pchomesmart_right_3007020#rid=bac678252aa9cc58e8ae2b28c2db7b08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.7&amp;pid=2170800015&amp;adm=3484']);">
                                            <img src="/static/index/index/img/pms_1489563242.jpg" alt="小米网络收音机增强版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/radio-plus/" data-stat-aid="AA15950" data-stat-pid="2_51_7_296" data-log_code="31pchomesmart_right_3007020#rid=bac678252aa9cc58e8ae2b28c2db7b08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.7&amp;pid=2170800015&amp;adm=3484"
                                            target="_blank" data-stat-id="AA15950+2_51_7_296" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15950+2_51_7_296', '//www.mi.com/radio-plus/', 'pcpid', '31pchomesmart_right_3007020#rid=bac678252aa9cc58e8ae2b28c2db7b08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.7&amp;pid=2170800015&amp;adm=3484']);">小米网络收音机增强版</a>
                                    </h3>
                                    <p class="desc">蓝牙 Wi-Fi 双无线，专业扬声器</p>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/radio-plus/" data-stat-aid="AA15950" data-stat-pid="2_51_7_296" data-log_code="31pchomesmart_right_3007020#rid=bac678252aa9cc58e8ae2b28c2db7b08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.7&amp;pid=2170800015&amp;adm=3484"
                                            target="_blank" data-stat-id="AA15950+2_51_7_296" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15950+2_51_7_296', '//www.mi.com/radio-plus/', 'pcpid', '31pchomesmart_right_3007020#rid=bac678252aa9cc58e8ae2b28c2db7b08&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.7&amp;pid=2170800015&amp;adm=3484']);">
                                            <span class="review">还可以，连上WiFi就可以自动播放了，挺好！！！</span>
                                            <span class="author"> 来自于 plum006 的评价
                                                <span class="date" data-date="1511103986"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2154000002">
                                    <div class="figure figure-img">
                                        <a href="https://www.mi.com/micamera/" class="exposure" data-stat-aid="AA17236" data-stat-pid="2_51_8_297" data-log_code="31pchomesmart_right_3008020#rid=556bd6236821f14cde05a9ad6e3c80d4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.8&amp;pid=2154000002&amp;adm=2141"
                                            target="_blank" data-stat-id="AA17236+2_51_8_297" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17236+2_51_8_297', '//www.mi.com/micamera/', 'pcpid', '31pchomesmart_right_3008020#rid=556bd6236821f14cde05a9ad6e3c80d4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.8&amp;pid=2154000002&amp;adm=2141']);">
                                            <img src="/static/index/index/img/pms_1468806372.jpg" alt="小白摄像机" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/micamera/" class="exposure" data-stat-aid="AA17236" data-stat-pid="2_51_8_297" data-log_code="31pchomesmart_right_3008020#rid=556bd6236821f14cde05a9ad6e3c80d4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.8&amp;pid=2154000002&amp;adm=2141"
                                            target="_blank" data-stat-id="AA17236+2_51_8_297" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17236+2_51_8_297', '//www.mi.com/micamera/', 'pcpid', '31pchomesmart_right_3008020#rid=556bd6236821f14cde05a9ad6e3c80d4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030367.8&amp;pid=2154000002&amp;adm=2141']);">小白摄像机</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">399</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/smart/" target="_blank" data-stat-id="5c9d7b9a44c11113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5c9d7b9a44c11113', '//www.mi.com/smart/', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/smart/" target="_blank" data-stat-id="03ad15912c15a6e6" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-03ad15912c15a6e6', '//www.mi.com/smart/', 'pcpid', '']);">浏览更多
                                        <small>酷玩</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2161200063">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/miwifi3/" data-stat-aid="AA15814" data-stat-pid="2_49_1_274" target="_blank"
                                            data-log_code="31pchomesmart_right_4001021#rid=9da51c4237190ccb5dd54399511d9869&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.1&amp;pid=2161200063&amp;adm=2398"
                                            data-stat-id="AA15814+2_49_1_274" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15814+2_49_1_274', '//www.mi.com/miwifi3/', 'pcpid', '31pchomesmart_right_4001021#rid=9da51c4237190ccb5dd54399511d9869&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.1&amp;pid=2161200063&amp;adm=2398']);">
                                            <img src="/static/index/index/img/376f5f19-d1f5-4f87-8ef9-38e86891bc87" alt="小米路由器3" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/miwifi3/" data-stat-aid="AA15814" data-stat-pid="2_49_1_274" data-log_code="31pchomesmart_right_4001021#rid=9da51c4237190ccb5dd54399511d9869&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.1&amp;pid=2161200063&amp;adm=2398"
                                            target="_blank" data-stat-id="AA15814+2_49_1_274" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15814+2_49_1_274', '//www.mi.com/miwifi3/', 'pcpid', '31pchomesmart_right_4001021#rid=9da51c4237190ccb5dd54399511d9869&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.1&amp;pid=2161200063&amp;adm=2398']);">小米路由器3</a>
                                    </h3>
                                    <p class="desc">四天线设计，更快更强</p>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-postfree">免邮费</div>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/miwifi3/" data-stat-aid="AA15814" data-stat-pid="2_49_1_274" data-log_code="31pchomesmart_right_4001021#rid=9da51c4237190ccb5dd54399511d9869&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.1&amp;pid=2161200063&amp;adm=2398"
                                            target="_blank" data-stat-id="AA15814+2_49_1_274" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15814+2_49_1_274', '//www.mi.com/miwifi3/', 'pcpid', '31pchomesmart_right_4001021#rid=9da51c4237190ccb5dd54399511d9869&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.1&amp;pid=2161200063&amp;adm=2398']);">
                                            <span class="review">从14年第一部小米手机 到15年毕业米4 16年的米...</span>
                                            <span class="author"> 来自于 Jason Duan 的评价
                                                <span class="date" data-date="1514201986"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2163000001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/miwifi3c/" data-stat-aid="AA15815" data-stat-pid="2_49_2_275" target="_blank"
                                            data-log_code="31pchomesmart_right_4002021#rid=c9832726cd293b18fc4d23e70a13fc1b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.2&amp;pid=2163000001&amp;adm=2648"
                                            data-stat-id="AA15815+2_49_2_275" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15815+2_49_2_275', '//www.mi.com/miwifi3c/', 'pcpid', '31pchomesmart_right_4002021#rid=c9832726cd293b18fc4d23e70a13fc1b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.2&amp;pid=2163000001&amp;adm=2648']);">
                                            <img src="/static/index/index/img/pms_1470288129.png" alt="小米路由器3C" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/miwifi3c/" data-stat-aid="AA15815" data-stat-pid="2_49_2_275" data-log_code="31pchomesmart_right_4002021#rid=c9832726cd293b18fc4d23e70a13fc1b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.2&amp;pid=2163000001&amp;adm=2648"
                                            target="_blank" data-stat-id="AA15815+2_49_2_275" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15815+2_49_2_275', '//www.mi.com/miwifi3c/', 'pcpid', '31pchomesmart_right_4002021#rid=c9832726cd293b18fc4d23e70a13fc1b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.2&amp;pid=2163000001&amp;adm=2648']);">小米路由器3C</a>
                                    </h3>
                                    <p class="desc">APP智能控制，安全防蹭网</p>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-postfree">免邮费</div>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/miwifi3c/" data-stat-aid="AA15815" data-stat-pid="2_49_2_275" data-log_code="31pchomesmart_right_4002021#rid=c9832726cd293b18fc4d23e70a13fc1b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.2&amp;pid=2163000001&amp;adm=2648"
                                            target="_blank" data-stat-id="AA15815+2_49_2_275" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15815+2_49_2_275', '//www.mi.com/miwifi3c/', 'pcpid', '31pchomesmart_right_4002021#rid=c9832726cd293b18fc4d23e70a13fc1b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.2&amp;pid=2163000001&amp;adm=2648']);">
                                            <span class="review">很满意，信号很好，我在卧室隔了一面墙大概有5米左右，...</span>
                                            <span class="author"> 来自于 Autumn-sun 的评价
                                                <span class="date" data-date="1479032000"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164700008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1164700010.html" data-stat-aid="AA15816" data-stat-pid="2_49_3_276" target="_blank"
                                            data-log_code="31pchomesmart_right_4003021#rid=5c68a7b71f693c6b522be507155d8d14&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427"
                                            data-stat-id="AA15816+2_49_3_276" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15816+2_49_3_276', '//item.mi.com/1164700010.html', 'pcpid', '31pchomesmart_right_4003021#rid=5c68a7b71f693c6b522be507155d8d14&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427']);">
                                            <img src="/static/index/index/img/pms_1481188619.jpg" alt="小米WiFi放大器 2" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164700010.html" data-stat-aid="AA15816" data-stat-pid="2_49_3_276" data-log_code="31pchomesmart_right_4003021#rid=5c68a7b71f693c6b522be507155d8d14&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427"
                                            target="_blank" data-stat-id="AA15816+2_49_3_276" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15816+2_49_3_276', '//item.mi.com/1164700010.html', 'pcpid', '31pchomesmart_right_4003021#rid=5c68a7b71f693c6b522be507155d8d14&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427']);">小米WiFi放大器 2</a>
                                    </h3>
                                    <p class="desc">适配主流路由器，两步完成设置</p>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164700010.html" data-stat-aid="AA15816" data-stat-pid="2_49_3_276" data-log_code="31pchomesmart_right_4003021#rid=5c68a7b71f693c6b522be507155d8d14&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427"
                                            target="_blank" data-stat-id="AA15816+2_49_3_276" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15816+2_49_3_276', '//item.mi.com/1164700010.html', 'pcpid', '31pchomesmart_right_4003021#rid=5c68a7b71f693c6b522be507155d8d14&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427']);">
                                            <span class="review">一直至爱小米</span>
                                            <span class="author"> 来自于 我爱小米 的评价
                                                <span class="date" data-date="1512467072"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170900001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/miwifihd/" data-stat-aid="AA17207" data-stat-pid="2_49_4_277" target="_blank"
                                            data-log_code="31pchomesmart_right_4004021#rid=51be2da3ebc7e9d0e57b05c480746edb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136"
                                            data-stat-id="AA17207+2_49_4_277" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17207+2_49_4_277', '//www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4004021#rid=51be2da3ebc7e9d0e57b05c480746edb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136']);">
                                            <img src="/static/index/index/img/pms_1488268224.jpg" alt="小米路由器 HD" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/miwifihd/" data-stat-aid="AA17207" data-stat-pid="2_49_4_277" data-log_code="31pchomesmart_right_4004021#rid=51be2da3ebc7e9d0e57b05c480746edb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136"
                                            target="_blank" data-stat-id="AA17207+2_49_4_277" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17207+2_49_4_277', '//www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4004021#rid=51be2da3ebc7e9d0e57b05c480746edb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136']);">小米路由器 HD</a>
                                    </h3>
                                    <p class="desc">4x4全向性天线，802.11ac wave2</p>
                                    <p class="price">
                                        <span class="num">1299</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/miwifihd/" data-stat-aid="AA17207" data-stat-pid="2_49_4_277" data-log_code="31pchomesmart_right_4004021#rid=51be2da3ebc7e9d0e57b05c480746edb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136"
                                            target="_blank" data-stat-id="AA17207+2_49_4_277" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17207+2_49_4_277', '//www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4004021#rid=51be2da3ebc7e9d0e57b05c480746edb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136']);">
                                            <span class="review">优点：好，很好，非常好。网速也行，50兆用它有点小马...</span>
                                            <span class="author"> 来自于 兰陵王 的评价
                                                <span class="date" data-date="1489807207"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171300015">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/plc/" data-stat-aid="AA17208" data-stat-pid="2_49_5_278" target="_blank" data-log_code="31pchomesmart_right_4005021#rid=299e34d7c5455c24b72f080780903e8a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883"
                                            data-stat-id="AA17208+2_49_5_278" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17208+2_49_5_278', '//www.mi.com/plc/', 'pcpid', '31pchomesmart_right_4005021#rid=299e34d7c5455c24b72f080780903e8a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883']);">
                                            <img src="/static/index/index/img/pms_1491009389.jpg" alt="小米WiFi电力猫" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/plc/" data-stat-aid="AA17208" data-stat-pid="2_49_5_278" data-log_code="31pchomesmart_right_4005021#rid=299e34d7c5455c24b72f080780903e8a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883"
                                            target="_blank" data-stat-id="AA17208+2_49_5_278" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17208+2_49_5_278', '//www.mi.com/plc/', 'pcpid', '31pchomesmart_right_4005021#rid=299e34d7c5455c24b72f080780903e8a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883']);">小米WiFi电力猫</a>
                                    </h3>
                                    <p class="desc">有插座的地方 就有WiFi</p>
                                    <p class="price">
                                        <span class="num">249</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/plc/" data-stat-aid="AA17208" data-stat-pid="2_49_5_278" data-log_code="31pchomesmart_right_4005021#rid=299e34d7c5455c24b72f080780903e8a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883"
                                            target="_blank" data-stat-id="AA17208+2_49_5_278" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17208+2_49_5_278', '//www.mi.com/plc/', 'pcpid', '31pchomesmart_right_4005021#rid=299e34d7c5455c24b72f080780903e8a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883']);">
                                            <span class="review">客服妹子，我女朋友过生日，希望能得到一首藏头诗谢谢，...</span>
                                            <span class="author"> 来自于 踮起脚尖 的评价
                                                <span class="date" data-date="1513845792"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170300007">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/miwifihd/" data-stat-aid="AA17209" data-stat-pid="2_49_6_279" target="_blank"
                                            data-log_code="31pchomesmart_right_4006021#rid=cd604531455bcdeea50ea4a330105cb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134"
                                            data-stat-id="AA17209+2_49_6_279" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17209+2_49_6_279', '//www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4006021#rid=cd604531455bcdeea50ea4a330105cb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134']);">
                                            <img src="/static/index/index/img/pms_1488268195.jpg" alt="小米路由器 Pro" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/miwifihd/" data-stat-aid="AA17209" data-stat-pid="2_49_6_279" data-log_code="31pchomesmart_right_4006021#rid=cd604531455bcdeea50ea4a330105cb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134"
                                            target="_blank" data-stat-id="AA17209+2_49_6_279" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17209+2_49_6_279', '//www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4006021#rid=cd604531455bcdeea50ea4a330105cb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134']);">小米路由器 Pro</a>
                                    </h3>
                                    <p class="desc">全新金属机身设计，AC2600双频</p>
                                    <p class="price">
                                        <span class="num">499</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/miwifihd/" data-stat-aid="AA17209" data-stat-pid="2_49_6_279" data-log_code="31pchomesmart_right_4006021#rid=cd604531455bcdeea50ea4a330105cb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134"
                                            target="_blank" data-stat-id="AA17209+2_49_6_279" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17209+2_49_6_279', '//www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4006021#rid=cd604531455bcdeea50ea4a330105cb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134']);">
                                            <span class="review">这是我见过最有格调，最有态度，也是最有内涵的路由器，...</span>
                                            <span class="author"> 来自于 benny 的评价
                                                <span class="date" data-date="1488634363"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171900023">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1171900014.html" data-stat-aid="AA16527" data-stat-pid="2_49_7_280" target="_blank"
                                            data-log_code="31pchomesmart_right_4007021#rid=468183be90b1395696c074591b8369f6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699"
                                            data-stat-id="AA16527+2_49_7_280" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16527+2_49_7_280', '//item.mi.com/1171900014.html', 'pcpid', '31pchomesmart_right_4007021#rid=468183be90b1395696c074591b8369f6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699']);">
                                            <img src="/static/index/index/img/pms_1496289112.jpg" alt="小米路由器3G" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1171900014.html" data-stat-aid="AA16527" data-stat-pid="2_49_7_280" data-log_code="31pchomesmart_right_4007021#rid=468183be90b1395696c074591b8369f6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699"
                                            target="_blank" data-stat-id="AA16527+2_49_7_280" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16527+2_49_7_280', '//item.mi.com/1171900014.html', 'pcpid', '31pchomesmart_right_4007021#rid=468183be90b1395696c074591b8369f6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699']);">小米路由器3G</a>
                                    </h3>
                                    <p class="desc">双核全千兆设计，USB 3.0</p>
                                    <p class="price">
                                        <span class="num">249</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1171900014.html" data-stat-aid="AA16527" data-stat-pid="2_49_7_280" data-log_code="31pchomesmart_right_4007021#rid=468183be90b1395696c074591b8369f6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699"
                                            target="_blank" data-stat-id="AA16527+2_49_7_280" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16527+2_49_7_280', '//item.mi.com/1171900014.html', 'pcpid', '31pchomesmart_right_4007021#rid=468183be90b1395696c074591b8369f6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699']);">
                                            <span class="review">太棒了，网速超快！(家里100兆宽带) 欢迎客服妹子...</span>
                                            <span class="author"> 来自于 你懂的！ 的评价
                                                <span class="date" data-date="1501304612"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2150500004">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1150500009.html" class="exposure" data-stat-aid="AA15820" data-stat-pid="2_49_8_281" data-log_code="31pchomesmart_right_4008021#rid=5e5615d54cec0776cb21d77ce56714f9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520"
                                            target="_blank" data-stat-id="AA15820+2_49_8_281" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15820+2_49_8_281', '//item.mi.com/1150500009.html', 'pcpid', '31pchomesmart_right_4008021#rid=5e5615d54cec0776cb21d77ce56714f9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520']);">
                                            <img src="/static/index/index/img/T13y_vBgJT1RXrhCrK220x220.jpg" alt="小米千兆网线" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1150500009.html" class="exposure" data-stat-aid="AA15820" data-stat-pid="2_49_8_281" data-log_code="31pchomesmart_right_4008021#rid=5e5615d54cec0776cb21d77ce56714f9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520"
                                            target="_blank" data-stat-id="AA15820+2_49_8_281" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15820+2_49_8_281', '//item.mi.com/1150500009.html', 'pcpid', '31pchomesmart_right_4008021#rid=5e5615d54cec0776cb21d77ce56714f9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520']);">小米千兆网线</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">14.9</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://www.mi.com/smart/" target="_blank" data-stat-id="5c9d7b9a44c11113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5c9d7b9a44c11113', '//www.mi.com/smart/', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://www.mi.com/smart/" target="_blank" data-stat-id="777c16ca557bfc07" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-777c16ca557bfc07', '//www.mi.com/smart/', 'pcpid', '']);">浏览更多
                                        <small>路由器</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="match" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="true"
            data-region-stat="1" data-log_codes="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.0&amp;page=home;reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7676&amp;bid=3038463.1&amp;page=home;reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home;reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.3&amp;page=home;reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=1732&amp;bid=3038463.4&amp;page=home;reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038463.5&amp;page=home;reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7607&amp;bid=3038463.6&amp;page=home;reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3016&amp;bid=3038463.7&amp;page=home;31pchomematch_right_1001024#rid=7979b1708c149b7ac266947529000693&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.1&amp;pid=2165000002&amp;adm=2866;31pchomematch_right_1002024#rid=1154778b9e81d5e042240c5f25042bb7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.2&amp;pid=2161800006&amp;adm=1913;31pchomematch_right_1003024#rid=0c02377c353222dc8958a1dc80a9f3aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.3&amp;pid=2164300008&amp;adm=3683;31pchomematch_right_1004024#rid=66c519bf13e63ceadc35e8e79c41327c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.4&amp;pid=2160800017&amp;adm=1929;31pchomematch_right_1005024#rid=9056176a3c1dc10a1740e93d59861fed&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.5&amp;pid=2154300023&amp;adm=1796;31pchomematch_right_1006024#rid=b651860d887b760dbadd29171b8742c7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.6&amp;pid=2173600010&amp;adm=4154;31pchomematch_right_1007024#rid=aba57e8829482f19392f5d44a8ba026a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.7&amp;pid=1163100008&amp;adm=3062;31pchomematch_right_1008024#rid=5ffff4391686fd3c1ea1bc6511ac434d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.8&amp;pid=2153800019&amp;adm=2663;31pchomematch_right_2001025#rid=305258c044858fdb8be0b368ca2a8caa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845;31pchomematch_right_2002025#rid=c9d3d06d42d5bcc7e517db0cf27536af&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160;31pchomematch_right_2003025#rid=5b875b1eb113678cb8849a211faf7cf3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32;31pchomematch_right_2004025#rid=8ddf4d043791a2bd35928c47d9c40c1a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.4&amp;pid=2173600008&amp;adm=4160;31pchomematch_right_2005025#rid=439445dcedf9dd26653f86802440079a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844;31pchomematch_right_2006025#rid=b9a729c64c644abcd8a0b906d0f1a9e0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577;31pchomematch_right_2007025#rid=051bc11a3c4e0f2e54aec36de7f5ae6d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.7&amp;pid=1162900044&amp;adm=2848;31pchomematch_right_2008025#rid=9f49ce6caf61c091b7a47e0b6605d60c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662;31pchomematch_right_3001026#rid=71e0144226112c9f0885974c560cc41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.1&amp;pid=2174400007&amp;adm=4461;31pchomematch_right_3002026#rid=054731a8582df6ed3adbbe1b4e68ce2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165;31pchomematch_right_3003026#rid=eb4c112b6b9c113946433b59be650e60&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141;31pchomematch_right_3004026#rid=4a5f3a0f114b3f15ac910fc8be07adc3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.4&amp;pid=1171600025&amp;adm=3347;31pchomematch_right_3005026#rid=9fa828ad53f913fe6e8dc338ee81defe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.5&amp;pid=2161200012&amp;adm=1799;31pchomematch_right_3006026#rid=6c21e9f736496c203a487007e4d81c18&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.6&amp;pid=2174100029&amp;adm=3217;31pchomematch_right_3007026#rid=2ef3a7f60252e57f4c6eb1a1449925bd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.7&amp;pid=2154400016&amp;adm=1223;31pchomematch_right_3008026#rid=4f89dd58a6f3bacc87e0e8397d989b50&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.8&amp;pid=2174400006&amp;adm=4462">
            <div class="box-hd">
                <h2 class="title">搭配</h2>
                <!-- <h2 class="title">快奔驰过田野，我们欢笑又歌唱   φ(゜▽゜*)♪</h2> -->
                <div class="more J_brickNav">
                    <ul class="tab-list J_brickTabSwitch" data-tab-target="match-content">
                        <li class="tab-active">热门</li>
                        <li>耳机音箱</li>
                        <li>电源</li>
                        <li>电池存储卡</li>
                    </ul>
                </div>
            </div>
            <div class="box-bd J_brickBd">
                <div class="row">
                    <div class="span4 span-first">
                        <ul class="brick-promo-list clearfix">
                            <li class="brick-item brick-item-m">
                                <a href="https://www.mi.com/sportearphone/" class="exposure" data-stat-aid="AA19554" data-stat-pid="2_20_1_100" data-log_code="31pchomematch_left001022#rid=ca90171e0de5323dd07d8dfff3807f72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030340.1&amp;adm=4044"
                                    target="_blank" data-stat-id="AA19554+2_20_1_100" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19554+2_20_1_100', '//www.mi.com/sportearphone/', 'pcpid', '31pchomematch_left001022#rid=ca90171e0de5323dd07d8dfff3807f72&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030340.1&amp;adm=4044']);">
                                    <img src="/static/index/index/img/xmad_15034816547397_TKBOF.jpg" alt="">
                                </a>
                            </li>
                            <li class="brick-item brick-item-m">
                                <a href="https://www.mi.com/earphonepro/" class="exposure" data-stat-aid="AA19571" data-stat-pid="2_20_2_101" data-log_code="31pchomematch_left002022#rid=a4dbf37344097ba6d0e9d424600b12ce&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030340.2&amp;pid=2164300008&amp;adm=2729"
                                    target="_blank" data-stat-id="AA19571+2_20_2_101" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19571+2_20_2_101', '//www.mi.com/earphonepro/', 'pcpid', '31pchomematch_left002022#rid=a4dbf37344097ba6d0e9d424600b12ce&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030340.2&amp;pid=2164300008&amp;adm=2729']);">
                                    <img src="/static/index/index/img/afd3f68d-13d8-4177-8c6f-da56fc45abaf.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="span16">
                        <div id="match-content" class="tab-container">
                            <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                <li class="brick-item brick-item-m" data-gid="2175000001">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1175000002.html" data-log_code="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.0&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="0" data-stat-text="新小米移动电源2 (10000mAh)" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="新小米移动电源2(10000mAh)" data-stat-id="新小米移动电源2(10000mAh)+stat_首页.搭配热门_0_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-新小米移动电源210000mAh+stat_首页.搭配热门_0_1_1', '//item.mi.com/1175000002.html', 'pcpid', 'reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.0&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1513857241.jpg" alt="新小米移动电源2 (10000mAh)" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1175000002.html" data-log_code="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.0&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="0" data-stat-text="新小米移动电源2 (10000mAh)" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="新小米移动电源2(10000mAh)" data-stat-id="新小米移动电源2(10000mAh)+stat_首页.搭配热门_0_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-新小米移动电源210000mAh+stat_首页.搭配热门_0_1_1', '//item.mi.com/1175000002.html', 'pcpid', 'reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.0&amp;page=home']);">
                                            新小米移动电源2 (10000mAh) </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">79</span>元 </p>
                                    <p class="rank">2983人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1175000002.html" data-log_code="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.0&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="0" data-stat-text="新小米移动电源2 (10000mAh)" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="新小米移动电源2(10000mAh)" data-stat-id="新小米移动电源2(10000mAh)+stat_首页.搭配热门_0_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-新小米移动电源210000mAh+stat_首页.搭配热门_0_1_1', '//item.mi.com/1175000002.html', 'pcpid', 'reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.0&amp;page=home']);">
                                            <span class="review">有两种移动电源，一种叫小米移动电源，一种叫其他移动电...</span>
                                            <span class="author"> 来自于 Gemkeyu 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2180400001">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1180400001.html" data-log_code="reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7676&amp;bid=3038463.1&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="1" data-stat-text="ZMI双模智能充电器+充电宝" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="ZMI双模智能充电器+充电宝" data-stat-id="ZMI双模智能充电器+充电宝+stat_首页.搭配热门_1_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ZMI双模智能充电器+充电宝+stat_首页.搭配热门_1_1_1', '//item.mi.com/1180400001.html', 'pcpid', 'reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7676&amp;bid=3038463.1&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1516600938.jpg" alt="ZMI双模智能充电器+充电宝" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1180400001.html" data-log_code="reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7676&amp;bid=3038463.1&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="1" data-stat-text="ZMI双模智能充电器+充电宝" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="ZMI双模智能充电器+充电宝" data-stat-id="ZMI双模智能充电器+充电宝+stat_首页.搭配热门_1_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ZMI双模智能充电器+充电宝+stat_首页.搭配热门_1_1_1', '//item.mi.com/1180400001.html', 'pcpid', 'reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7676&amp;bid=3038463.1&amp;page=home']);">
                                            ZMI双模智能充电器+充电宝 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">109</span>元 </p>
                                    <p class="rank">134人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1180400001.html" data-log_code="reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7676&amp;bid=3038463.1&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="1" data-stat-text="ZMI双模智能充电器+充电宝" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="ZMI双模智能充电器+充电宝" data-stat-id="ZMI双模智能充电器+充电宝+stat_首页.搭配热门_1_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ZMI双模智能充电器+充电宝+stat_首页.搭配热门_1_1_1', '//item.mi.com/1180400001.html', 'pcpid', 'reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7676&amp;bid=3038463.1&amp;page=home']);">
                                            <span class="review">怎么连条数据线呢？</span>
                                            <span class="author"> 来自于 美有的約定 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173600008">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1173600040.html" data-log_code="reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源2C 20000mAh" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源2C20000mAh" data-stat-id="小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1', '//item.mi.com/1173600040.html', 'pcpid', 'reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1505264799.jpg" alt="小米移动电源2C 20000mAh" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173600040.html" data-log_code="reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源2C 20000mAh" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源2C20000mAh" data-stat-id="小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1', '//item.mi.com/1173600040.html', 'pcpid', 'reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home']);">
                                            小米移动电源2C 20000mAh </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元 </p>
                                    <p class="rank">1.4万人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173600040.html" data-log_code="reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源2C 20000mAh" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源2C20000mAh" data-stat-id="小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1', '//item.mi.com/1173600040.html', 'pcpid', 'reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home']);">
                                            <span class="review">自从入了小米这个坑，再也不能自拔了，现在我也是一个米...</span>
                                            <span class="author"> 来自于 Chang远 Li 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164900009">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1164900021.html" data-log_code="reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.3&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="3" data-stat-text="小米移动电源10000mAh高配版" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_3_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源10000mAh高配版+stat_首页.搭配热门_3_1_1', '//item.mi.com/1164900021.html', 'pcpid', 'reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.3&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1481269289.jpg" alt="小米移动电源10000mAh高配版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164900021.html" data-log_code="reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.3&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="3" data-stat-text="小米移动电源10000mAh高配版" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_3_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源10000mAh高配版+stat_首页.搭配热门_3_1_1', '//item.mi.com/1164900021.html', 'pcpid', 'reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.3&amp;page=home']);">
                                            小米移动电源10000mAh高配版 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank">2万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164900021.html" data-log_code="reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.3&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="3" data-stat-text="小米移动电源10000mAh高配版" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_3_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源10000mAh高配版+stat_首页.搭配热门_3_1_1', '//item.mi.com/1164900021.html', 'pcpid', 'reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.3&amp;page=home']);">
                                            <span class="review">据说我今年能脱单</span>
                                            <span class="author"> 来自于 诺 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2180300067">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1180300052.html" data-log_code="reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=1732&amp;bid=3038463.4&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="4" data-stat-text="小米移动电源5000mAh" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米移动电源5000mAh" data-stat-id="小米移动电源5000mAh+stat_首页.搭配热门_4_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源5000mAh+stat_首页.搭配热门_4_1_1', '//item.mi.com/1180300052.html', 'pcpid', 'reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=1732&amp;bid=3038463.4&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1516347548.jpg" alt="小米移动电源5000mAh" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1180300052.html" data-log_code="reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=1732&amp;bid=3038463.4&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="4" data-stat-text="小米移动电源5000mAh" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米移动电源5000mAh" data-stat-id="小米移动电源5000mAh+stat_首页.搭配热门_4_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源5000mAh+stat_首页.搭配热门_4_1_1', '//item.mi.com/1180300052.html', 'pcpid', 'reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=1732&amp;bid=3038463.4&amp;page=home']);">
                                            小米移动电源5000mAh </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank">10.9万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1180300052.html" data-log_code="reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=1732&amp;bid=3038463.4&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="4" data-stat-text="小米移动电源5000mAh" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米移动电源5000mAh" data-stat-id="小米移动电源5000mAh+stat_首页.搭配热门_4_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源5000mAh+stat_首页.搭配热门_4_1_1', '//item.mi.com/1180300052.html', 'pcpid', 'reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=1732&amp;bid=3038463.4&amp;page=home']);">
                                            <span class="review">有史以来斟酌最久的评论...2017开始喜欢雷军，喜...</span>
                                            <span class="author"> 来自于 1319380263 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2165100005">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1165100005.html" data-log_code="reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038463.5&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="5" data-stat-text="小米活塞耳机 清新版" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米活塞耳机清新版" data-stat-id="小米活塞耳机清新版+stat_首页.搭配热门_5_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米活塞耳机清新版+stat_首页.搭配热门_5_1_1', '//item.mi.com/1165100005.html', 'pcpid', 'reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038463.5&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1482321218.jpg" alt="小米活塞耳机 清新版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1165100005.html" data-log_code="reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038463.5&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="5" data-stat-text="小米活塞耳机 清新版" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米活塞耳机清新版" data-stat-id="小米活塞耳机清新版+stat_首页.搭配热门_5_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米活塞耳机清新版+stat_首页.搭配热门_5_1_1', '//item.mi.com/1165100005.html', 'pcpid', 'reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038463.5&amp;page=home']);">
                                            小米活塞耳机 清新版 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">29</span>元 </p>
                                    <p class="rank">9.1万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1165100005.html" data-log_code="reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038463.5&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="5" data-stat-text="小米活塞耳机 清新版" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米活塞耳机清新版" data-stat-id="小米活塞耳机清新版+stat_首页.搭配热门_5_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米活塞耳机清新版+stat_首页.搭配热门_5_1_1', '//item.mi.com/1165100005.html', 'pcpid', 'reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038463.5&amp;page=home']);">
                                            <span class="review">库伦旗第一位米粉。棒棒棒棒棒棒棒，棒棒棒棒棒棒棒棒棒...</span>
                                            <span class="author"> 来自于 安仔 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2180200004">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1180200004.html" data-log_code="reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7607&amp;bid=3038463.6&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="6" data-stat-text="小米移动电源2 (5000mAh版)" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米移动电源2(5000mAh版)" data-stat-id="小米移动电源2(5000mAh版)+stat_首页.搭配热门_6_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源25000mAh版+stat_首页.搭配热门_6_1_1', '//item.mi.com/1180200004.html', 'pcpid', 'reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7607&amp;bid=3038463.6&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1515404353.jpg" alt="小米移动电源2 (5000mAh版)" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1180200004.html" data-log_code="reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7607&amp;bid=3038463.6&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="6" data-stat-text="小米移动电源2 (5000mAh版)" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米移动电源2(5000mAh版)" data-stat-id="小米移动电源2(5000mAh版)+stat_首页.搭配热门_6_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源25000mAh版+stat_首页.搭配热门_6_1_1', '//item.mi.com/1180200004.html', 'pcpid', 'reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7607&amp;bid=3038463.6&amp;page=home']);">
                                            小米移动电源2 (5000mAh版) </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank">209人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1180200004.html" data-log_code="reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7607&amp;bid=3038463.6&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="6" data-stat-text="小米移动电源2 (5000mAh版)" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米移动电源2(5000mAh版)" data-stat-id="小米移动电源2(5000mAh版)+stat_首页.搭配热门_6_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源25000mAh版+stat_首页.搭配热门_6_1_1', '//item.mi.com/1180200004.html', 'pcpid', 'reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7607&amp;bid=3038463.6&amp;page=home']);">
                                            <span class="review">第一次买小米的移动电源，轻便小巧颜值高</span>
                                            <span class="author"> 来自于 Terence Wu 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2155000004">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1155000010.html" data-log_code="reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3016&amp;bid=3038463.7&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="7" data-stat-text="彩虹7号电池（10粒装）" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_7_1_1" data-stat-aid="彩虹7号电池（10粒装）" data-stat-id="彩虹7号电池（10粒装）+stat_首页.搭配热门_7_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-彩虹7号电池10粒装+stat_首页.搭配热门_7_1_1', '//item.mi.com/1155000010.html', 'pcpid', 'reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3016&amp;bid=3038463.7&amp;page=home']);">
                                            <img src="/static/index/index/img/T178EjBjVT1RXrhCrK.jpg" alt="彩虹7号电池（10粒装）" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1155000010.html" data-log_code="reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3016&amp;bid=3038463.7&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="7" data-stat-text="彩虹7号电池（10粒装）" target="_blank"
                                            data-stat-pid="stat_首页.搭配热门_7_1_1" data-stat-aid="彩虹7号电池（10粒装）" data-stat-id="彩虹7号电池（10粒装）+stat_首页.搭配热门_7_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-彩虹7号电池10粒装+stat_首页.搭配热门_7_1_1', '//item.mi.com/1155000010.html', 'pcpid', 'reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3016&amp;bid=3038463.7&amp;page=home']);">彩虹7号电池（10粒装）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">9.9</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/dapei" target="_blank" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="null+stat_首页.搭配热门_undefined_undefined"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.搭配热门_undefined_undefined', '//list.mi.com/dapei', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/dapei" target="_blank" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="null+stat_首页.搭配热门_undefined_undefined"
                                        onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.搭配热门_undefined_undefined', '//list.mi.com/dapei', 'pcpid', '']);">浏览更多
                                        <small>热门</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2165000002">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/headphone2/" data-stat-aid="AA14527" data-stat-pid="2_22_1_110" target="_blank"
                                            data-log_code="31pchomematch_right_1001024#rid=7979b1708c149b7ac266947529000693&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.1&amp;pid=2165000002&amp;adm=2866"
                                            data-stat-id="AA14527+2_22_1_110" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14527+2_22_1_110', '//www.mi.com/headphone2/', 'pcpid', '31pchomematch_right_1001024#rid=7979b1708c149b7ac266947529000693&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.1&amp;pid=2165000002&amp;adm=2866']);">
                                            <img src="/static/index/index/img/pms_1482301662.jpg" alt="小米头戴式耳机 轻松版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/headphone2/" data-stat-aid="AA14527" data-stat-pid="2_22_1_110" data-log_code="31pchomematch_right_1001024#rid=7979b1708c149b7ac266947529000693&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.1&amp;pid=2165000002&amp;adm=2866"
                                            target="_blank" data-stat-id="AA14527+2_22_1_110" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14527+2_22_1_110', '//www.mi.com/headphone2/', 'pcpid', '31pchomematch_right_1001024#rid=7979b1708c149b7ac266947529000693&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.1&amp;pid=2165000002&amp;adm=2866']);">小米头戴式耳机 轻松版</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank">3515人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/headphone2/" data-stat-aid="AA14527" data-stat-pid="2_22_1_110" data-log_code="31pchomematch_right_1001024#rid=7979b1708c149b7ac266947529000693&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.1&amp;pid=2165000002&amp;adm=2866"
                                            target="_blank" data-stat-id="AA14527+2_22_1_110" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14527+2_22_1_110', '//www.mi.com/headphone2/', 'pcpid', '31pchomematch_right_1001024#rid=7979b1708c149b7ac266947529000693&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.1&amp;pid=2165000002&amp;adm=2866']);">
                                            <span class="review">，物流超快，不到一天就到了， 听着耳机里的告白气球，...
                                            </span>
                                            <span class="author"> 来自于 甘振 的评价
                                                <span class="date" data-date="1490063024"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161800006">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1161800009.html" data-stat-aid="AA13763" data-stat-pid="2_22_2_111" target="_blank"
                                            data-log_code="31pchomematch_right_1002024#rid=1154778b9e81d5e042240c5f25042bb7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.2&amp;pid=2161800006&amp;adm=1913"
                                            data-stat-id="AA13763+2_22_2_111" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13763+2_22_2_111', '//item.mi.com/1161800009.html', 'pcpid', '31pchomematch_right_1002024#rid=1154778b9e81d5e042240c5f25042bb7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.2&amp;pid=2161800006&amp;adm=1913']);">
                                            <img src="/static/index/index/img/T1SkV_BCd_1RXrhCrK220x220.jpg" alt="小米胶囊耳机" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1161800009.html" data-stat-aid="AA13763" data-stat-pid="2_22_2_111" data-log_code="31pchomematch_right_1002024#rid=1154778b9e81d5e042240c5f25042bb7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.2&amp;pid=2161800006&amp;adm=1913"
                                            target="_blank" data-stat-id="AA13763+2_22_2_111" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13763+2_22_2_111', '//item.mi.com/1161800009.html', 'pcpid', '31pchomematch_right_1002024#rid=1154778b9e81d5e042240c5f25042bb7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.2&amp;pid=2161800006&amp;adm=1913']);">小米胶囊耳机</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">69</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1161800009.html" data-stat-aid="AA13763" data-stat-pid="2_22_2_111" data-log_code="31pchomematch_right_1002024#rid=1154778b9e81d5e042240c5f25042bb7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.2&amp;pid=2161800006&amp;adm=1913"
                                            target="_blank" data-stat-id="AA13763+2_22_2_111" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13763+2_22_2_111', '//item.mi.com/1161800009.html', 'pcpid', '31pchomematch_right_1002024#rid=1154778b9e81d5e042240c5f25042bb7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.2&amp;pid=2161800006&amp;adm=1913']);">
                                            <span class="review">第三条线了，第一条水洗了，第二条，老鼠咬了，一个耳机...</span>
                                            <span class="author"> 来自于 1159253780 的评价
                                                <span class="date" data-date="1512987673"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164300008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/earphonepro/" data-stat-aid="AA17369" data-stat-pid="2_22_3_112" target="_blank"
                                            data-log_code="31pchomematch_right_1003024#rid=0c02377c353222dc8958a1dc80a9f3aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.3&amp;pid=2164300008&amp;adm=3683"
                                            data-stat-id="AA17369+2_22_3_112" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17369+2_22_3_112', '//www.mi.com/earphonepro/', 'pcpid', '31pchomematch_right_1003024#rid=0c02377c353222dc8958a1dc80a9f3aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.3&amp;pid=2164300008&amp;adm=3683']);">
                                            <img src="/static/index/index/img/302f2608-655a-489c-a0c5-a3b9172defd1.png" alt="小米圈铁耳机Pro" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/earphonepro/" data-stat-aid="AA17369" data-stat-pid="2_22_3_112" data-log_code="31pchomematch_right_1003024#rid=0c02377c353222dc8958a1dc80a9f3aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.3&amp;pid=2164300008&amp;adm=3683"
                                            target="_blank" data-stat-id="AA17369+2_22_3_112" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17369+2_22_3_112', '//www.mi.com/earphonepro/', 'pcpid', '31pchomematch_right_1003024#rid=0c02377c353222dc8958a1dc80a9f3aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.3&amp;pid=2164300008&amp;adm=3683']);">小米圈铁耳机Pro</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank">3.5万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/earphonepro/" data-stat-aid="AA17369" data-stat-pid="2_22_3_112" data-log_code="31pchomematch_right_1003024#rid=0c02377c353222dc8958a1dc80a9f3aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.3&amp;pid=2164300008&amp;adm=3683"
                                            target="_blank" data-stat-id="AA17369+2_22_3_112" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17369+2_22_3_112', '//www.mi.com/earphonepro/', 'pcpid', '31pchomematch_right_1003024#rid=0c02377c353222dc8958a1dc80a9f3aa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.3&amp;pid=2164300008&amp;adm=3683']);">
                                            <span class="review">客服美眉 来一起听音乐</span>
                                            <span class="author"> 来自于 我们的时光 的评价
                                                <span class="date" data-date="1513336796"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2160800017">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/littleaudio/" data-stat-aid="AA13970" data-stat-pid="2_22_4_113" target="_blank"
                                            data-log_code="31pchomematch_right_1004024#rid=66c519bf13e63ceadc35e8e79c41327c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.4&amp;pid=2160800017&amp;adm=1929"
                                            data-stat-id="AA13970+2_22_4_113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13970+2_22_4_113', '//www.mi.com/littleaudio/', 'pcpid', '31pchomematch_right_1004024#rid=66c519bf13e63ceadc35e8e79c41327c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.4&amp;pid=2160800017&amp;adm=1929']);">
                                            <img src="/static/index/index/img/T1LqYgBCWv1RXrhCrK220x220.jpg" alt="小米随身蓝牙音箱" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/littleaudio/" data-stat-aid="AA13970" data-stat-pid="2_22_4_113" data-log_code="31pchomematch_right_1004024#rid=66c519bf13e63ceadc35e8e79c41327c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.4&amp;pid=2160800017&amp;adm=1929"
                                            target="_blank" data-stat-id="AA13970+2_22_4_113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13970+2_22_4_113', '//www.mi.com/littleaudio/', 'pcpid', '31pchomematch_right_1004024#rid=66c519bf13e63ceadc35e8e79c41327c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.4&amp;pid=2160800017&amp;adm=1929']);">小米随身蓝牙音箱</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">69</span>元 </p>
                                    <p class="rank">2.7万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/littleaudio/" data-stat-aid="AA13970" data-stat-pid="2_22_4_113" data-log_code="31pchomematch_right_1004024#rid=66c519bf13e63ceadc35e8e79c41327c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.4&amp;pid=2160800017&amp;adm=1929"
                                            target="_blank" data-stat-id="AA13970+2_22_4_113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13970+2_22_4_113', '//www.mi.com/littleaudio/', 'pcpid', '31pchomematch_right_1004024#rid=66c519bf13e63ceadc35e8e79c41327c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.4&amp;pid=2160800017&amp;adm=1929']);">
                                            <span class="review">厉害了我的小米～妹子我做首诗 我来上两句～你来下...</span>
                                            <span class="author"> 来自于 小涛 的评价
                                                <span class="date" data-date="1497848966"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2154300023">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/yinxiang/" data-stat-aid="AA12798" data-stat-pid="2_22_5_114" target="_blank"
                                            data-log_code="31pchomematch_right_1005024#rid=9056176a3c1dc10a1740e93d59861fed&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.5&amp;pid=2154300023&amp;adm=1796"
                                            data-stat-id="AA12798+2_22_5_114" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12798+2_22_5_114', '//www.mi.com/yinxiang/', 'pcpid', '31pchomematch_right_1005024#rid=9056176a3c1dc10a1740e93d59861fed&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.5&amp;pid=2154300023&amp;adm=1796']);">
                                            <img src="/static/index/index/img/T1Tfd_BjAv1RXrhCrK220x220.jpg" alt="小米小钢炮蓝牙音箱2" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/yinxiang/" data-stat-aid="AA12798" data-stat-pid="2_22_5_114" data-log_code="31pchomematch_right_1005024#rid=9056176a3c1dc10a1740e93d59861fed&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.5&amp;pid=2154300023&amp;adm=1796"
                                            target="_blank" data-stat-id="AA12798+2_22_5_114" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12798+2_22_5_114', '//www.mi.com/yinxiang/', 'pcpid', '31pchomematch_right_1005024#rid=9056176a3c1dc10a1740e93d59861fed&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.5&amp;pid=2154300023&amp;adm=1796']);">小米小钢炮蓝牙音箱2</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元 </p>
                                    <p class="rank">3.2万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/yinxiang/" data-stat-aid="AA12798" data-stat-pid="2_22_5_114" data-log_code="31pchomematch_right_1005024#rid=9056176a3c1dc10a1740e93d59861fed&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.5&amp;pid=2154300023&amp;adm=1796"
                                            target="_blank" data-stat-id="AA12798+2_22_5_114" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12798+2_22_5_114', '//www.mi.com/yinxiang/', 'pcpid', '31pchomematch_right_1005024#rid=9056176a3c1dc10a1740e93d59861fed&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.5&amp;pid=2154300023&amp;adm=1796']);">
                                            <span class="review">我已经凑齐七样小米的产品，我的愿望是娶个小米客户妹子...</span>
                                            <span class="author"> 来自于 梁方惠 的评价
                                                <span class="date" data-date="1499250782"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173600010">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173600044.html" data-stat-aid="AA18119" data-stat-pid="2_22_6_115" target="_blank"
                                            data-log_code="31pchomematch_right_1006024#rid=b651860d887b760dbadd29171b8742c7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.6&amp;pid=2173600010&amp;adm=4154"
                                            data-stat-id="AA18119+2_22_6_115" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18119+2_22_6_115', '//item.mi.com/1173600044.html', 'pcpid', '31pchomematch_right_1006024#rid=b651860d887b760dbadd29171b8742c7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.6&amp;pid=2173600010&amp;adm=4154']);">
                                            <img src="/static/index/index/img/pms_1504840066.jpg" alt="1MORE好声音入耳式耳机 金色" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173600044.html" data-stat-aid="AA18119" data-stat-pid="2_22_6_115" data-log_code="31pchomematch_right_1006024#rid=b651860d887b760dbadd29171b8742c7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.6&amp;pid=2173600010&amp;adm=4154"
                                            target="_blank" data-stat-id="AA18119+2_22_6_115" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18119+2_22_6_115', '//item.mi.com/1173600044.html', 'pcpid', '31pchomematch_right_1006024#rid=b651860d887b760dbadd29171b8742c7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.6&amp;pid=2173600010&amp;adm=4154']);">1MORE好声音入耳式耳机 金色</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元 </p>
                                    <p class="rank">3766人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173600044.html" data-stat-aid="AA18119" data-stat-pid="2_22_6_115" data-log_code="31pchomematch_right_1006024#rid=b651860d887b760dbadd29171b8742c7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.6&amp;pid=2173600010&amp;adm=4154"
                                            target="_blank" data-stat-id="AA18119+2_22_6_115" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18119+2_22_6_115', '//item.mi.com/1173600044.html', 'pcpid', '31pchomematch_right_1006024#rid=b651860d887b760dbadd29171b8742c7&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.6&amp;pid=2173600010&amp;adm=4154']);">
                                            <span class="review">音质很好，外观也很好看，听说买东西可以召唤客服妹子，...</span>
                                            <span class="author"> 来自于 1228825920 的评价
                                                <span class="date" data-date="1494128655"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1163100008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1163100008.html" data-stat-aid="AA17509" data-stat-pid="2_22_7_116" target="_blank"
                                            data-log_code="31pchomematch_right_1007024#rid=aba57e8829482f19392f5d44a8ba026a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.7&amp;pid=1163100008&amp;adm=3062"
                                            data-stat-id="AA17509+2_22_7_116" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17509+2_22_7_116', '//item.mi.com/1163100008.html', 'pcpid', '31pchomematch_right_1007024#rid=aba57e8829482f19392f5d44a8ba026a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.7&amp;pid=1163100008&amp;adm=3062']);">
                                            <img src="/static/index/index/img/pms_1470619266.jpg" alt="小米米兔音箱" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1163100008.html" data-stat-aid="AA17509" data-stat-pid="2_22_7_116" data-log_code="31pchomematch_right_1007024#rid=aba57e8829482f19392f5d44a8ba026a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.7&amp;pid=1163100008&amp;adm=3062"
                                            target="_blank" data-stat-id="AA17509+2_22_7_116" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17509+2_22_7_116', '//item.mi.com/1163100008.html', 'pcpid', '31pchomematch_right_1007024#rid=aba57e8829482f19392f5d44a8ba026a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.7&amp;pid=1163100008&amp;adm=3062']);">小米米兔音箱</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">2572人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1163100008.html" data-stat-aid="AA17509" data-stat-pid="2_22_7_116" data-log_code="31pchomematch_right_1007024#rid=aba57e8829482f19392f5d44a8ba026a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.7&amp;pid=1163100008&amp;adm=3062"
                                            target="_blank" data-stat-id="AA17509+2_22_7_116" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17509+2_22_7_116', '//item.mi.com/1163100008.html', 'pcpid', '31pchomematch_right_1007024#rid=aba57e8829482f19392f5d44a8ba026a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.7&amp;pid=1163100008&amp;adm=3062']);">
                                            <span class="review">此时此刻的米兔已经嗨的不行了，已经驾驭不了了，帽子都...</span>
                                            <span class="author"> 来自于 雷兄叫我叫我叫我中的 的评价
                                                <span class="date" data-date="1487600333"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2153800019">
                                    <div class="figure figure-img">
                                        <a href="https://www.mi.com/pocketaudio/" class="exposure" data-stat-aid="AA14089" data-stat-pid="2_22_8_117" data-log_code="31pchomematch_right_1008024#rid=5ffff4391686fd3c1ea1bc6511ac434d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.8&amp;pid=2153800019&amp;adm=2663"
                                            target="_blank" data-stat-id="AA14089+2_22_8_117" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14089+2_22_8_117', '//www.mi.com/pocketaudio/', 'pcpid', '31pchomematch_right_1008024#rid=5ffff4391686fd3c1ea1bc6511ac434d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.8&amp;pid=2153800019&amp;adm=2663']);">
                                            <img src="/static/index/index/img/T1MDK_B_YT1RXrhCrK220x220.jpg" alt="小米蓝牙音箱" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/pocketaudio/" class="exposure" data-stat-aid="AA14089" data-stat-pid="2_22_8_117" data-log_code="31pchomematch_right_1008024#rid=5ffff4391686fd3c1ea1bc6511ac434d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.8&amp;pid=2153800019&amp;adm=2663"
                                            target="_blank" data-stat-id="AA14089+2_22_8_117" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14089+2_22_8_117', '//www.mi.com/pocketaudio/', 'pcpid', '31pchomematch_right_1008024#rid=5ffff4391686fd3c1ea1bc6511ac434d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030342.8&amp;pid=2153800019&amp;adm=2663']);">小米蓝牙音箱</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/17" target="_blank" data-stat-id="011a5fa7bd5f92be" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-011a5fa7bd5f92be', '//list.mi.com/17', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/17" target="_blank" data-stat-id="c4bb81a3662df722" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-c4bb81a3662df722', '//list.mi.com/17', 'pcpid', '']);">浏览更多
                                        <small>耳机音箱</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2164900010">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/batterytwins/" data-stat-aid="AA17446" data-stat-pid="2_23_1_118" target="_blank"
                                            data-log_code="31pchomematch_right_2001025#rid=305258c044858fdb8be0b368ca2a8caa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845"
                                            data-stat-id="AA17446+2_23_1_118" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17446+2_23_1_118', '//www.mi.com/batterytwins/', 'pcpid', '31pchomematch_right_2001025#rid=305258c044858fdb8be0b368ca2a8caa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845']);">
                                            <img src="/static/index/index/img/pms_1481273468.jpg" alt="小米移动电源10000mAh高配版" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/batterytwins/" data-stat-aid="AA17446" data-stat-pid="2_23_1_118" data-log_code="31pchomematch_right_2001025#rid=305258c044858fdb8be0b368ca2a8caa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845"
                                            target="_blank" data-stat-id="AA17446+2_23_1_118" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17446+2_23_1_118', '//www.mi.com/batterytwins/', 'pcpid', '31pchomematch_right_2001025#rid=305258c044858fdb8be0b368ca2a8caa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845']);">小米移动电源10000mAh高配版</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank">1.9万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/batterytwins/" data-stat-aid="AA17446" data-stat-pid="2_23_1_118" data-log_code="31pchomematch_right_2001025#rid=305258c044858fdb8be0b368ca2a8caa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845"
                                            target="_blank" data-stat-id="AA17446+2_23_1_118" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17446+2_23_1_118', '//www.mi.com/batterytwins/', 'pcpid', '31pchomematch_right_2001025#rid=305258c044858fdb8be0b368ca2a8caa&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845']);">
                                            <span class="review">感观相当精致；以手把触，薄且潤又不失于轻浮；试之功效...</span>
                                            <span class="author"> 来自于 906890283 的评价
                                                <span class="date" data-date="1482845569"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173600008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_2_119" target="_blank"
                                            data-log_code="31pchomematch_right_2002025#rid=c9d3d06d42d5bcc7e517db0cf27536af&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160"
                                            data-stat-id="AA18189+2_23_2_119" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_2_119', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2002025#rid=c9d3d06d42d5bcc7e517db0cf27536af&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160']);">
                                            <img src="/static/index/index/img/pms_1505264799_002.jpg" alt="小米移动电源2C 20000mAh" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_2_119" data-log_code="31pchomematch_right_2002025#rid=c9d3d06d42d5bcc7e517db0cf27536af&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160"
                                            target="_blank" data-stat-id="AA18189+2_23_2_119" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_2_119', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2002025#rid=c9d3d06d42d5bcc7e517db0cf27536af&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160']);">小米移动电源2C 20000mAh</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元 </p>
                                    <p class="rank">1.3万人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_2_119" data-log_code="31pchomematch_right_2002025#rid=c9d3d06d42d5bcc7e517db0cf27536af&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160"
                                            target="_blank" data-stat-id="AA18189+2_23_2_119" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_2_119', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2002025#rid=c9d3d06d42d5bcc7e517db0cf27536af&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160']);">
                                            <span class="review">给小米6和mix2充电。很耐用。还能给手机快充！！</span>
                                            <span class="author"> 来自于 。 的评价
                                                <span class="date" data-date="1512717801"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2144800001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/dianyuan5000/" data-stat-aid="AA10703" data-stat-pid="2_23_3_120" target="_blank"
                                            data-log_code="31pchomematch_right_2003025#rid=5b875b1eb113678cb8849a211faf7cf3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32"
                                            data-stat-id="AA10703+2_23_3_120" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10703+2_23_3_120', '//www.mi.com/dianyuan5000/', 'pcpid', '31pchomematch_right_2003025#rid=5b875b1eb113678cb8849a211faf7cf3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32']);">
                                            <img src="/static/index/index/img/T1pZbvBTET1RXrhCrK220x220.jpg" alt="小米移动电源5000mAh" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/dianyuan5000/" data-stat-aid="AA10703" data-stat-pid="2_23_3_120" data-log_code="31pchomematch_right_2003025#rid=5b875b1eb113678cb8849a211faf7cf3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32"
                                            target="_blank" data-stat-id="AA10703+2_23_3_120" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10703+2_23_3_120', '//www.mi.com/dianyuan5000/', 'pcpid', '31pchomematch_right_2003025#rid=5b875b1eb113678cb8849a211faf7cf3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32']);">小米移动电源5000mAh</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank">10.9万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/dianyuan5000/" data-stat-aid="AA10703" data-stat-pid="2_23_3_120" data-log_code="31pchomematch_right_2003025#rid=5b875b1eb113678cb8849a211faf7cf3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32"
                                            target="_blank" data-stat-id="AA10703+2_23_3_120" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10703+2_23_3_120', '//www.mi.com/dianyuan5000/', 'pcpid', '31pchomematch_right_2003025#rid=5b875b1eb113678cb8849a211faf7cf3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32']);">
                                            <span class="review">上次评论的不回复，是客服MM的太匆忙，还是MM客服的...</span>
                                            <span class="author"> 来自于 Tianwin 的评价
                                                <span class="date" data-date="1480578802"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173600008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_4_121" target="_blank"
                                            data-log_code="31pchomematch_right_2004025#rid=8ddf4d043791a2bd35928c47d9c40c1a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.4&amp;pid=2173600008&amp;adm=4160"
                                            data-stat-id="AA18189+2_23_4_121" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_4_121', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2004025#rid=8ddf4d043791a2bd35928c47d9c40c1a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.4&amp;pid=2173600008&amp;adm=4160']);">
                                            <img src="/static/index/index/img/pms_1505264799_002.jpg" alt="小米移动电源2C 20000mAh" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_4_121" data-log_code="31pchomematch_right_2004025#rid=8ddf4d043791a2bd35928c47d9c40c1a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.4&amp;pid=2173600008&amp;adm=4160"
                                            target="_blank" data-stat-id="AA18189+2_23_4_121" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_4_121', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2004025#rid=8ddf4d043791a2bd35928c47d9c40c1a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.4&amp;pid=2173600008&amp;adm=4160']);">小米移动电源2C 20000mAh</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元 </p>
                                    <p class="rank">1.3万人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_4_121" data-log_code="31pchomematch_right_2004025#rid=8ddf4d043791a2bd35928c47d9c40c1a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.4&amp;pid=2173600008&amp;adm=4160"
                                            target="_blank" data-stat-id="AA18189+2_23_4_121" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_4_121', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2004025#rid=8ddf4d043791a2bd35928c47d9c40c1a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.4&amp;pid=2173600008&amp;adm=4160']);">
                                            <span class="review">给小米6和mix2充电。很耐用。还能给手机快充！！</span>
                                            <span class="author"> 来自于 。 的评价
                                                <span class="date" data-date="1512717801"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2163900008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/battery2/" data-stat-aid="AA14453" data-stat-pid="2_23_5_122" target="_blank"
                                            data-log_code="31pchomematch_right_2005025#rid=439445dcedf9dd26653f86802440079a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844"
                                            data-stat-id="AA14453+2_23_5_122" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14453+2_23_5_122', '//www.mi.com/battery2/', 'pcpid', '31pchomematch_right_2005025#rid=439445dcedf9dd26653f86802440079a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844']);">
                                            <img src="/static/index/index/img/pms_1476688190.jpg" alt="10000mAh小米移动电源2" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/battery2/" data-stat-aid="AA14453" data-stat-pid="2_23_5_122" data-log_code="31pchomematch_right_2005025#rid=439445dcedf9dd26653f86802440079a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844"
                                            target="_blank" data-stat-id="AA14453+2_23_5_122" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14453+2_23_5_122', '//www.mi.com/battery2/', 'pcpid', '31pchomematch_right_2005025#rid=439445dcedf9dd26653f86802440079a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844']);">10000mAh小米移动电源2</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">79</span>元 </p>
                                    <p class="rank">6.8万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/battery2/" data-stat-aid="AA14453" data-stat-pid="2_23_5_122" data-log_code="31pchomematch_right_2005025#rid=439445dcedf9dd26653f86802440079a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844"
                                            target="_blank" data-stat-id="AA14453+2_23_5_122" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14453+2_23_5_122', '//www.mi.com/battery2/', 'pcpid', '31pchomematch_right_2005025#rid=439445dcedf9dd26653f86802440079a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844']);">
                                            <span class="review">哇，难受，刚刚评价了5C叫客服妹妹帮我写一个“张馨艺...</span>
                                            <span class="author"> 来自于 再远也要追上你Y 的评价
                                                <span class="date" data-date="1496400901"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164400030">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1164400032.html" data-stat-aid="AA17510" data-stat-pid="2_23_6_123" target="_blank"
                                            data-log_code="31pchomematch_right_2006025#rid=b9a729c64c644abcd8a0b906d0f1a9e0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577"
                                            data-stat-id="AA17510+2_23_6_123" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17510+2_23_6_123', '//item.mi.com/1164400032.html', 'pcpid', '31pchomematch_right_2006025#rid=b9a729c64c644abcd8a0b906d0f1a9e0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577']);">
                                            <img src="/static/index/index/img/pms_1478070969.jpg" alt="小米二合一数据线" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164400032.html" data-stat-aid="AA17510" data-stat-pid="2_23_6_123" data-log_code="31pchomematch_right_2006025#rid=b9a729c64c644abcd8a0b906d0f1a9e0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577"
                                            target="_blank" data-stat-id="AA17510+2_23_6_123" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17510+2_23_6_123', '//item.mi.com/1164400032.html', 'pcpid', '31pchomematch_right_2006025#rid=b9a729c64c644abcd8a0b906d0f1a9e0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577']);">小米二合一数据线</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19.9</span>元 </p>
                                    <p class="rank">1.6万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164400032.html" data-stat-aid="AA17510" data-stat-pid="2_23_6_123" data-log_code="31pchomematch_right_2006025#rid=b9a729c64c644abcd8a0b906d0f1a9e0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577"
                                            target="_blank" data-stat-id="AA17510+2_23_6_123" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17510+2_23_6_123', '//item.mi.com/1164400032.html', 'pcpid', '31pchomematch_right_2006025#rid=b9a729c64c644abcd8a0b906d0f1a9e0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577']);">
                                            <span class="review">小是小，火力好。短是短，emmm下句怎么说来着？</span>
                                            <span class="author"> 来自于 敬·真我 的评价
                                                <span class="date" data-date="1499825679"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1162900044">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1162900044.html" data-stat-aid="AA14457" data-stat-pid="2_23_7_124" target="_blank"
                                            data-log_code="31pchomematch_right_2007025#rid=051bc11a3c4e0f2e54aec36de7f5ae6d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.7&amp;pid=1162900044&amp;adm=2848"
                                            data-stat-id="AA14457+2_23_7_124" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14457+2_23_7_124', '//item.mi.com/1162900044.html', 'pcpid', '31pchomematch_right_2007025#rid=051bc11a3c4e0f2e54aec36de7f5ae6d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.7&amp;pid=1162900044&amp;adm=2848']);">
                                            <img src="/static/index/index/img/pms_1469410847.jpg" alt="USB Type-C充电套装" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1162900044.html" data-stat-aid="AA14457" data-stat-pid="2_23_7_124" data-log_code="31pchomematch_right_2007025#rid=051bc11a3c4e0f2e54aec36de7f5ae6d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.7&amp;pid=1162900044&amp;adm=2848"
                                            target="_blank" data-stat-id="AA14457+2_23_7_124" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14457+2_23_7_124', '//item.mi.com/1162900044.html', 'pcpid', '31pchomematch_right_2007025#rid=051bc11a3c4e0f2e54aec36de7f5ae6d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.7&amp;pid=1162900044&amp;adm=2848']);">USB Type-C充电套装</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">15</span>元 </p>
                                    <p class="rank"></p>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2155200004">
                                    <div class="figure figure-img">
                                        <a href="https://www.mi.com/chaxianban2/" class="exposure" data-stat-aid="AA14646" data-stat-pid="2_23_8_125" data-log_code="31pchomematch_right_2008025#rid=9f49ce6caf61c091b7a47e0b6605d60c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662"
                                            target="_blank" data-stat-id="AA14646+2_23_8_125" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14646+2_23_8_125', '//www.mi.com/chaxianban2/', 'pcpid', '31pchomematch_right_2008025#rid=9f49ce6caf61c091b7a47e0b6605d60c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662']);">
                                            <img src="/static/index/index/img/T13mDQBjCT1RXrhCrK.jpg" alt="小米智能插线板" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/chaxianban2/" class="exposure" data-stat-aid="AA14646" data-stat-pid="2_23_8_125" data-log_code="31pchomematch_right_2008025#rid=9f49ce6caf61c091b7a47e0b6605d60c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662"
                                            target="_blank" data-stat-id="AA14646+2_23_8_125" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14646+2_23_8_125', '//www.mi.com/chaxianban2/', 'pcpid', '31pchomematch_right_2008025#rid=9f49ce6caf61c091b7a47e0b6605d60c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662']);">小米智能插线板</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">69</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/11" target="_blank" data-stat-id="6bc9ce071ec9169e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-6bc9ce071ec9169e', '//list.mi.com/11', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/11" target="_blank" data-stat-id="e8a0c2565255291b" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e8a0c2565255291b', '//list.mi.com/11', 'pcpid', '']);">浏览更多
                                        <small>电源</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2174400007">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174400012.html" data-stat-aid="AA18885" data-stat-pid="2_24_1_126" target="_blank"
                                            data-log_code="31pchomematch_right_3001026#rid=71e0144226112c9f0885974c560cc41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.1&amp;pid=2174400007&amp;adm=4461"
                                            data-stat-id="AA18885+2_24_1_126" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18885+2_24_1_126', '//item.mi.com/1174400012.html', 'pcpid', '31pchomematch_right_3001026#rid=71e0144226112c9f0885974c560cc41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.1&amp;pid=2174400007&amp;adm=4461']);">
                                            <img src="/static/index/index/img/pms_1509356199.jpg" alt="SanDisk 32GB存储卡（U3, 100MB/s）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174400012.html" data-stat-aid="AA18885" data-stat-pid="2_24_1_126" data-log_code="31pchomematch_right_3001026#rid=71e0144226112c9f0885974c560cc41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.1&amp;pid=2174400007&amp;adm=4461"
                                            target="_blank" data-stat-id="AA18885+2_24_1_126" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18885+2_24_1_126', '//item.mi.com/1174400012.html', 'pcpid', '31pchomematch_right_3001026#rid=71e0144226112c9f0885974c560cc41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.1&amp;pid=2174400007&amp;adm=4461']);">SanDisk 32GB存储卡（U3, 100MB/s）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元 </p>
                                    <p class="rank">526人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174400012.html" data-stat-aid="AA18885" data-stat-pid="2_24_1_126" data-log_code="31pchomematch_right_3001026#rid=71e0144226112c9f0885974c560cc41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.1&amp;pid=2174400007&amp;adm=4461"
                                            target="_blank" data-stat-id="AA18885+2_24_1_126" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18885+2_24_1_126', '//item.mi.com/1174400012.html', 'pcpid', '31pchomematch_right_3001026#rid=71e0144226112c9f0885974c560cc41e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.1&amp;pid=2174400007&amp;adm=4461']);">
                                            <span class="review">速度相当快 好评</span>
                                            <span class="author"> 来自于 305 的评价
                                                <span class="date" data-date="1514177036"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1170100002">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1170100002.html" data-stat-aid="AA15225" data-stat-pid="2_24_2_127" target="_blank"
                                            data-log_code="31pchomematch_right_3002026#rid=054731a8582df6ed3adbbe1b4e68ce2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165"
                                            data-stat-id="AA15225+2_24_2_127" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15225+2_24_2_127', '//item.mi.com/1170100002.html', 'pcpid', '31pchomematch_right_3002026#rid=054731a8582df6ed3adbbe1b4e68ce2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165']);">
                                            <img src="/static/index/index/img/pms_1484034162.jpg" alt="小米USB充电器（2口）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1170100002.html" data-stat-aid="AA15225" data-stat-pid="2_24_2_127" data-log_code="31pchomematch_right_3002026#rid=054731a8582df6ed3adbbe1b4e68ce2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165"
                                            target="_blank" data-stat-id="AA15225+2_24_2_127" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15225+2_24_2_127', '//item.mi.com/1170100002.html', 'pcpid', '31pchomematch_right_3002026#rid=054731a8582df6ed3adbbe1b4e68ce2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165']);">小米USB充电器（2口）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">39</span>元
                                        <del>
                                            <span class="num">49</span>元</del>
                                    </p>
                                    <p class="rank">1.9万人评价</p>
                                    <div class="flag flag-saleoff"> 享8折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1170100002.html" data-stat-aid="AA15225" data-stat-pid="2_24_2_127" data-log_code="31pchomematch_right_3002026#rid=054731a8582df6ed3adbbe1b4e68ce2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165"
                                            target="_blank" data-stat-id="AA15225+2_24_2_127" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15225+2_24_2_127', '//item.mi.com/1170100002.html', 'pcpid', '31pchomematch_right_3002026#rid=054731a8582df6ed3adbbe1b4e68ce2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165']);">
                                            <span class="review">非常好用，充电还快，非常喜欢， 客服妹子，小哥单...</span>
                                            <span class="author"> 来自于 1051379173 的评价
                                                <span class="date" data-date="1508746647"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2154300020">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" target="_blank"
                                            data-log_code="31pchomematch_right_3003026#rid=eb4c112b6b9c113946433b59be650e60&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141"
                                            data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid', '31pchomematch_right_3003026#rid=eb4c112b6b9c113946433b59be650e60&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141']);">
                                            <img src="/static/index/index/img/T1xxVTBghv1RXrhCrK220x220.jpg" alt="彩虹5号电池（10粒装）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" data-log_code="31pchomematch_right_3003026#rid=eb4c112b6b9c113946433b59be650e60&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141"
                                            target="_blank" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid', '31pchomematch_right_3003026#rid=eb4c112b6b9c113946433b59be650e60&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141']);">彩虹5号电池（10粒装）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">9.9</span>元 </p>
                                    <p class="rank">12万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" data-log_code="31pchomematch_right_3003026#rid=eb4c112b6b9c113946433b59be650e60&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141"
                                            target="_blank" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid', '31pchomematch_right_3003026#rid=eb4c112b6b9c113946433b59be650e60&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141']);">
                                            <span class="review">简直是太精致了，像艺术品一样，都不舍得用了，求客服妹...</span>
                                            <span class="author"> 来自于 徐玉明 的评价
                                                <span class="date" data-date="1501663985"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1171600025">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1171600025.html" data-stat-aid="AA15601" data-stat-pid="2_24_4_129" target="_blank"
                                            data-log_code="31pchomematch_right_3004026#rid=4a5f3a0f114b3f15ac910fc8be07adc3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.4&amp;pid=1171600025&amp;adm=3347"
                                            data-stat-id="AA15601+2_24_4_129" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15601+2_24_4_129', '//item.mi.com/1171600025.html', 'pcpid', '31pchomematch_right_3004026#rid=4a5f3a0f114b3f15ac910fc8be07adc3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.4&amp;pid=1171600025&amp;adm=3347']);">
                                            <img src="/static/index/index/img/pms_1492658221.jpg" alt="睿米一分二点烟器" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1171600025.html" data-stat-aid="AA15601" data-stat-pid="2_24_4_129" data-log_code="31pchomematch_right_3004026#rid=4a5f3a0f114b3f15ac910fc8be07adc3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.4&amp;pid=1171600025&amp;adm=3347"
                                            target="_blank" data-stat-id="AA15601+2_24_4_129" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15601+2_24_4_129', '//item.mi.com/1171600025.html', 'pcpid', '31pchomematch_right_3004026#rid=4a5f3a0f114b3f15ac910fc8be07adc3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.4&amp;pid=1171600025&amp;adm=3347']);">睿米一分二点烟器</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">79</span>元 </p>
                                    <p class="rank">1728人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1171600025.html" data-stat-aid="AA15601" data-stat-pid="2_24_4_129" data-log_code="31pchomematch_right_3004026#rid=4a5f3a0f114b3f15ac910fc8be07adc3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.4&amp;pid=1171600025&amp;adm=3347"
                                            target="_blank" data-stat-id="AA15601+2_24_4_129" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15601+2_24_4_129', '//item.mi.com/1171600025.html', 'pcpid', '31pchomematch_right_3004026#rid=4a5f3a0f114b3f15ac910fc8be07adc3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.4&amp;pid=1171600025&amp;adm=3347']);">
                                            <span class="review">很好用的，这样又多了几个充电插头</span>
                                            <span class="author"> 来自于 762033970 的评价
                                                <span class="date" data-date="1512638688"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161200012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/chongdianqi4kou/" data-stat-aid="AA14296" data-stat-pid="2_24_5_130" target="_blank"
                                            data-log_code="31pchomematch_right_3005026#rid=9fa828ad53f913fe6e8dc338ee81defe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.5&amp;pid=2161200012&amp;adm=1799"
                                            data-stat-id="AA14296+2_24_5_130" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14296+2_24_5_130', '//www.mi.com/chongdianqi4kou/', 'pcpid', '31pchomematch_right_3005026#rid=9fa828ad53f913fe6e8dc338ee81defe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.5&amp;pid=2161200012&amp;adm=1799']);">
                                            <img src="/static/index/index/img/T1vFEjBbWT1RXrhCrK220x220.jpg" alt="小米USB充电器（4口）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/chongdianqi4kou/" data-stat-aid="AA14296" data-stat-pid="2_24_5_130" data-log_code="31pchomematch_right_3005026#rid=9fa828ad53f913fe6e8dc338ee81defe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.5&amp;pid=2161200012&amp;adm=1799"
                                            target="_blank" data-stat-id="AA14296+2_24_5_130" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14296+2_24_5_130', '//www.mi.com/chongdianqi4kou/', 'pcpid', '31pchomematch_right_3005026#rid=9fa828ad53f913fe6e8dc338ee81defe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.5&amp;pid=2161200012&amp;adm=1799']);">小米USB充电器（4口）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">59</span>元
                                        <del>
                                            <span class="num">69</span>元</del>
                                    </p>
                                    <p class="rank">1.6万人评价</p>
                                    <div class="flag flag-saleoff"> 享9折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/chongdianqi4kou/" data-stat-aid="AA14296" data-stat-pid="2_24_5_130" data-log_code="31pchomematch_right_3005026#rid=9fa828ad53f913fe6e8dc338ee81defe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.5&amp;pid=2161200012&amp;adm=1799"
                                            target="_blank" data-stat-id="AA14296+2_24_5_130" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14296+2_24_5_130', '//www.mi.com/chongdianqi4kou/', 'pcpid', '31pchomematch_right_3005026#rid=9fa828ad53f913fe6e8dc338ee81defe&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.5&amp;pid=2161200012&amp;adm=1799']);">
                                            <span class="review">外观质感都不错！很喜欢</span>
                                            <span class="author"> 来自于 罪因 的评价
                                                <span class="date" data-date="1472012805"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174100029">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174100030.html" data-stat-aid="AA15348" data-stat-pid="2_24_6_131" target="_blank"
                                            data-log_code="31pchomematch_right_3006026#rid=6c21e9f736496c203a487007e4d81c18&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.6&amp;pid=2174100029&amp;adm=3217"
                                            data-stat-id="AA15348+2_24_6_131" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15348+2_24_6_131', '//item.mi.com/1174100030.html', 'pcpid', '31pchomematch_right_3006026#rid=6c21e9f736496c203a487007e4d81c18&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.6&amp;pid=2174100029&amp;adm=3217']);">
                                            <img src="/static/index/index/img/pms_1507877361.jpg" alt="小米USB充电器快充版（18W）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174100030.html" data-stat-aid="AA15348" data-stat-pid="2_24_6_131" data-log_code="31pchomematch_right_3006026#rid=6c21e9f736496c203a487007e4d81c18&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.6&amp;pid=2174100029&amp;adm=3217"
                                            target="_blank" data-stat-id="AA15348+2_24_6_131" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15348+2_24_6_131', '//item.mi.com/1174100030.html', 'pcpid', '31pchomematch_right_3006026#rid=6c21e9f736496c203a487007e4d81c18&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.6&amp;pid=2174100029&amp;adm=3217']);">小米USB充电器快充版（18W）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">29.9</span>元 </p>
                                    <p class="rank">2133人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174100030.html" data-stat-aid="AA15348" data-stat-pid="2_24_6_131" data-log_code="31pchomematch_right_3006026#rid=6c21e9f736496c203a487007e4d81c18&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.6&amp;pid=2174100029&amp;adm=3217"
                                            target="_blank" data-stat-id="AA15348+2_24_6_131" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15348+2_24_6_131', '//item.mi.com/1174100030.html', 'pcpid', '31pchomematch_right_3006026#rid=6c21e9f736496c203a487007e4d81c18&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.6&amp;pid=2174100029&amp;adm=3217']);">
                                            <span class="review">客服妹子你说这个怎么样呢</span>
                                            <span class="author"> 来自于 两颗星星 的评价
                                                <span class="date" data-date="1514204309"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2154400016">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1154400043.html" data-stat-aid="AA12671" data-stat-pid="2_24_7_132" target="_blank"
                                            data-log_code="31pchomematch_right_3007026#rid=2ef3a7f60252e57f4c6eb1a1449925bd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.7&amp;pid=2154400016&amp;adm=1223"
                                            data-stat-id="AA12671+2_24_7_132" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12671+2_24_7_132', '//item.mi.com/1154400043.html', 'pcpid', '31pchomematch_right_3007026#rid=2ef3a7f60252e57f4c6eb1a1449925bd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.7&amp;pid=2154400016&amp;adm=1223']);">
                                            <img src="/static/index/index/img/T142A_BXEv1RXrhCrK220x220.jpg" alt="小米车载充电器" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1154400043.html" data-stat-aid="AA12671" data-stat-pid="2_24_7_132" data-log_code="31pchomematch_right_3007026#rid=2ef3a7f60252e57f4c6eb1a1449925bd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.7&amp;pid=2154400016&amp;adm=1223"
                                            target="_blank" data-stat-id="AA12671+2_24_7_132" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12671+2_24_7_132', '//item.mi.com/1154400043.html', 'pcpid', '31pchomematch_right_3007026#rid=2ef3a7f60252e57f4c6eb1a1449925bd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.7&amp;pid=2154400016&amp;adm=1223']);">小米车载充电器</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank">5.5万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1154400043.html" data-stat-aid="AA12671" data-stat-pid="2_24_7_132" data-log_code="31pchomematch_right_3007026#rid=2ef3a7f60252e57f4c6eb1a1449925bd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.7&amp;pid=2154400016&amp;adm=1223"
                                            target="_blank" data-stat-id="AA12671+2_24_7_132" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12671+2_24_7_132', '//item.mi.com/1154400043.html', 'pcpid', '31pchomematch_right_3007026#rid=2ef3a7f60252e57f4c6eb1a1449925bd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.7&amp;pid=2154400016&amp;adm=1223']);">
                                            <span class="review">美得不可方物，就跟客服妹子一样精致，你觉呢？听说客服...</span>
                                            <span class="author"> 来自于 李灯辉 的评价
                                                <span class="date" data-date="1488169609"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2174400006">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174400008.html" class="exposure" data-stat-aid="AA18886" data-stat-pid="2_24_8_133" data-log_code="31pchomematch_right_3008026#rid=4f89dd58a6f3bacc87e0e8397d989b50&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.8&amp;pid=2174400006&amp;adm=4462"
                                            target="_blank" data-stat-id="AA18886+2_24_8_133" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18886+2_24_8_133', '//item.mi.com/1174400008.html', 'pcpid', '31pchomematch_right_3008026#rid=4f89dd58a6f3bacc87e0e8397d989b50&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.8&amp;pid=2174400006&amp;adm=4462']);">
                                            <img src="/static/index/index/img/pms_1509355060.jpg" alt="SanDisk 16GB存储卡（C10, 98MB/s）" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174400008.html" class="exposure" data-stat-aid="AA18886" data-stat-pid="2_24_8_133" data-log_code="31pchomematch_right_3008026#rid=4f89dd58a6f3bacc87e0e8397d989b50&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.8&amp;pid=2174400006&amp;adm=4462"
                                            target="_blank" data-stat-id="AA18886+2_24_8_133" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18886+2_24_8_133', '//item.mi.com/1174400008.html', 'pcpid', '31pchomematch_right_3008026#rid=4f89dd58a6f3bacc87e0e8397d989b50&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030344.8&amp;pid=2174400006&amp;adm=4462']);">SanDisk 16GB存储卡（C10, 98MB/s）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">54.9</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/135" target="_blank" data-stat-id="67d551c670143b17" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-67d551c670143b17', '//list.mi.com/135', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/135" target="_blank" data-stat-id="75b1bb061cc1374d" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-75b1bb061cc1374d', '//list.mi.com/135', 'pcpid', '']);">浏览更多
                                        <small>电池存储卡</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="accessories" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="true"
            data-region-stat="1" data-log_codes="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7353&amp;bid=3038462.0&amp;page=home;reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6645&amp;bid=3038462.1&amp;page=home;reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7207&amp;bid=3038462.2&amp;page=home;reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7429&amp;bid=3038462.3&amp;page=home;reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7327&amp;bid=3038462.4&amp;page=home;reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7328&amp;bid=3038462.5&amp;page=home;reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6824&amp;bid=3038462.6&amp;page=home;reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7325&amp;bid=3038462.7&amp;page=home;31pchomeaccessories_right_1001029#rid=e20127c31b344fc097bd5128bb6720ef&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.1&amp;pid=1171500022&amp;adm=3374;31pchomeaccessories_right_1002029#rid=fedf478a43db51509bbd5eabee083c21&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.2&amp;pid=1170500006&amp;adm=3246;31pchomeaccessories_right_1003029#rid=77c68445e55de1645ced5b02783108cb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.3&amp;pid=2173400003&amp;adm=4451;31pchomeaccessories_right_1004029#rid=ee7eeb16f91392e524d847a48e7029db&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.4&amp;pid=2173100032&amp;adm=4452;31pchomeaccessories_right_1005029#rid=dfa6be1107e34a8df3f4c40d395e460a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.5&amp;pid=2173000011&amp;adm=4453;31pchomeaccessories_right_1006029#rid=0c4a5d3ed19aed6dcff5a2149e6758d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.6&amp;pid=2170800023&amp;adm=4454;31pchomeaccessories_right_1007029#rid=10cf0958cf52c0be28a758811d86809c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.7&amp;pid=1163000012&amp;adm=3248;31pchomeaccessories_right_1008029#rid=6419e3fee70105f118de9b0c3db8ac03&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.8&amp;pid=1163000019&amp;adm=3247;31pchomeaccessories_right_2001030#rid=66672818c877b8da238d9c7d066c5799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073;31pchomeaccessories_right_2002030#rid=88eb2b8ac8d7d25763b096f56402309d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.2&amp;pid=2154800023&amp;adm=2034;31pchomeaccessories_right_2003030#rid=ca84d8b4873b642f9d6eedf2843ee1b8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.3&amp;pid=2174100020&amp;adm=4455;31pchomeaccessories_right_2004030#rid=e53cbb81650bffb69ea6b512b4a6fdfb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456;31pchomeaccessories_right_2005030#rid=2e53835acff760df8b46faa5c0101638&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.5&amp;pid=2174700013&amp;adm=4457;31pchomeaccessories_right_2006030#rid=3705f968c540b09f6f444ef9611f96d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458;31pchomeaccessories_right_2007030#rid=fa1d3c6668ec74c39248c263d1a0171c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.7&amp;pid=2161600026&amp;adm=1835;31pchomeaccessories_right_2008030#rid=8f1081f281e2ea0b53418b13b842a34d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.8&amp;pid=2162500013&amp;adm=2182;31pchomeaccessories_right_3001031#rid=0e34023b0012c1a7f4b3f0a3dfbb043d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380;31pchomeaccessories_right_3002031#rid=6786f855ab587e03d745efb6b8e96f3d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547;31pchomeaccessories_right_3003031#rid=bed87c534bd7f16c824c2e076835a5fd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459;31pchomeaccessories_right_3004031#rid=b46385a8caa9d3a24043f375694aac4c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460;31pchomeaccessories_right_3005031#rid=95de55d04f70d6a05a3bf650da9e9640&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849;31pchomeaccessories_right_3006031#rid=169230a89160bf70dd6e5907913fe4ff&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.6&amp;pid=2163000004&amp;adm=3091;31pchomeaccessories_right_3007031#rid=9c81f472c2b55ad3d9961a8443c3ab6b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664;31pchomeaccessories_right_3008031#rid=57ae32aae4a8017ab5ff8e993614a0dd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230">
            <div class="box-hd">
                <h2 class="title">配件</h2>
                <!-- <h2 class="title">马儿铃声响叮当，令人精神多欢畅   ヾ(≧▽≦*)o</h2> -->
                <div class="more J_brickNav">
                    <ul class="tab-list J_brickTabSwitch" data-tab-target="accessories-content">
                        <li class="tab-active">热门</li>
                        <li>保护套</li>
                        <li>贴膜</li>
                        <li>其他配件</li>
                    </ul>
                </div>
            </div>
            <div class="box-bd J_brickBd">
                <div class="row">
                    <div class="span4 span-first">
                        <ul class="brick-promo-list clearfix">
                            <li class="brick-item brick-item-m">
                                <a href="https://item.mi.com/1173600040.html" class="exposure" data-stat-aid="AA19394" data-stat-pid="2_25_1_134" data-log_code="31pchomeaccessories_left001027#rid=0799e1e24ed2f5554c69b59aa575c77e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030345.1&amp;pid=2173600008&amp;adm=4156"
                                    target="_blank" data-stat-id="AA19394+2_25_1_134" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19394+2_25_1_134', '//item.mi.com/1173600040.html', 'pcpid', '31pchomeaccessories_left001027#rid=0799e1e24ed2f5554c69b59aa575c77e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030345.1&amp;pid=2173600008&amp;adm=4156']);">
                                    <img src="/static/index/index/img/xmad_15053023729301_vkfBo.jpg" alt="">
                                </a>
                            </li>
                            <li class="brick-item brick-item-m">
                                <a href="https://www.mi.com/alarmclock/" class="exposure" data-stat-aid="AA19305" data-stat-pid="2_25_2_135" data-log_code="31pchomeaccessories_left002027#rid=e5681f13bf08fe71fa3b08ae608b05e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030345.2&amp;pid=2163900006&amp;adm=2472"
                                    target="_blank" data-stat-id="AA19305+2_25_2_135" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19305+2_25_2_135', '//www.mi.com/alarmclock/', 'pcpid', '31pchomeaccessories_left002027#rid=e5681f13bf08fe71fa3b08ae608b05e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030345.2&amp;pid=2163900006&amp;adm=2472']);">
                                    <img src="/static/index/index/img/a7ed42d1-1a3e-4956-81f1-3fb215d248a8.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="span16">
                        <div id="accessories-content" class="tab-container">
                            <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                <li class="brick-item brick-item-m" data-gid="2174700027">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174700077.html" data-log_code="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7353&amp;bid=3038462.0&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="0" data-stat-text="MIX 2 拼色真皮保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_0_1_1" data-stat-aid="MIX2拼色真皮保护套" data-stat-id="MIX2拼色真皮保护套+stat_首页.配件热门_0_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MIX2拼色真皮保护套+stat_首页.配件热门_0_1_1', '//item.mi.com/1174700077.html', 'pcpid', 'reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7353&amp;bid=3038462.0&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1512893556.jpg" alt="MIX 2 拼色真皮保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174700077.html" data-log_code="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7353&amp;bid=3038462.0&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="0" data-stat-text="MIX 2 拼色真皮保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_0_1_1" data-stat-aid="MIX2拼色真皮保护套" data-stat-id="MIX2拼色真皮保护套+stat_首页.配件热门_0_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MIX2拼色真皮保护套+stat_首页.配件热门_0_1_1', '//item.mi.com/1174700077.html', 'pcpid', 'reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7353&amp;bid=3038462.0&amp;page=home']);">
                                            MIX 2 拼色真皮保护套 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">88人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174700077.html" data-log_code="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7353&amp;bid=3038462.0&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="0" data-stat-text="MIX 2 拼色真皮保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_0_1_1" data-stat-aid="MIX2拼色真皮保护套" data-stat-id="MIX2拼色真皮保护套+stat_首页.配件热门_0_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MIX2拼色真皮保护套+stat_首页.配件热门_0_1_1', '//item.mi.com/1174700077.html', 'pcpid', 'reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7353&amp;bid=3038462.0&amp;page=home']);">
                                            <span class="review">真心不耐Z，</span>
                                            <span class="author"> 来自于 78947569 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173400002">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1173400003.html" data-log_code="reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6645&amp;bid=3038462.1&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="1" data-stat-text="小米Note 3  智能立显半透保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_1_1_1" data-stat-aid="小米Note3智能立显半透保护套" data-stat-id="小米Note3智能立显半透保护套+stat_首页.配件热门_1_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米Note3智能立显半透保护套+stat_首页.配件热门_1_1_1', '//item.mi.com/1173400003.html', 'pcpid', 'reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6645&amp;bid=3038462.1&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1503365520.jpg" alt="小米Note 3  智能立显半透保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173400003.html" data-log_code="reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6645&amp;bid=3038462.1&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="1" data-stat-text="小米Note 3  智能立显半透保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_1_1_1" data-stat-aid="小米Note3智能立显半透保护套" data-stat-id="小米Note3智能立显半透保护套+stat_首页.配件热门_1_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米Note3智能立显半透保护套+stat_首页.配件热门_1_1_1', '//item.mi.com/1173400003.html', 'pcpid', 'reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6645&amp;bid=3038462.1&amp;page=home']);">
                                            小米Note 3 智能立显半透保护套 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">69</span>元 </p>
                                    <p class="rank">364人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173400003.html" data-log_code="reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6645&amp;bid=3038462.1&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="1" data-stat-text="小米Note 3  智能立显半透保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_1_1_1" data-stat-aid="小米Note3智能立显半透保护套" data-stat-id="小米Note3智能立显半透保护套+stat_首页.配件热门_1_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米Note3智能立显半透保护套+stat_首页.配件热门_1_1_1', '//item.mi.com/1173400003.html', 'pcpid', 'reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6645&amp;bid=3038462.1&amp;page=home']);">
                                            <span class="review">质感不错 很满意 希望这个选择是对的
                                            </span>
                                            <span class="author"> 来自于 正浩 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174400008">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174400018.html" data-log_code="reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7207&amp;bid=3038462.2&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="2" data-stat-text="MIX 2全陶瓷版极简保护壳" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_2_1_1" data-stat-aid="MIX2全陶瓷版极简保护壳" data-stat-id="MIX2全陶瓷版极简保护壳+stat_首页.配件热门_2_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MIX2全陶瓷版极简保护壳+stat_首页.配件热门_2_1_1', '//item.mi.com/1174400018.html', 'pcpid', 'reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7207&amp;bid=3038462.2&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1509852701.jpg" alt="MIX 2全陶瓷版极简保护壳" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174400018.html" data-log_code="reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7207&amp;bid=3038462.2&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="2" data-stat-text="MIX 2全陶瓷版极简保护壳" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_2_1_1" data-stat-aid="MIX2全陶瓷版极简保护壳" data-stat-id="MIX2全陶瓷版极简保护壳+stat_首页.配件热门_2_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MIX2全陶瓷版极简保护壳+stat_首页.配件热门_2_1_1', '//item.mi.com/1174400018.html', 'pcpid', 'reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7207&amp;bid=3038462.2&amp;page=home']);">
                                            MIX 2全陶瓷版极简保护壳 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">39</span>元 </p>
                                    <p class="rank">447人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174400018.html" data-log_code="reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7207&amp;bid=3038462.2&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="2" data-stat-text="MIX 2全陶瓷版极简保护壳" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_2_1_1" data-stat-aid="MIX2全陶瓷版极简保护壳" data-stat-id="MIX2全陶瓷版极简保护壳+stat_首页.配件热门_2_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MIX2全陶瓷版极简保护壳+stat_首页.配件热门_2_1_1', '//item.mi.com/1174400018.html', 'pcpid', 'reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7207&amp;bid=3038462.2&amp;page=home']);">
                                            <span class="review">手感挺好的，拿在手里挺舒服，贴合手机轮廓，还有新年的...</span>
                                            <span class="author"> 来自于 马小白Maxx 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174900012">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174900012.html" data-log_code="reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7429&amp;bid=3038462.3&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="3" data-stat-text="红米 5 Plus 极简防摔保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_3_1_1" data-stat-aid="红米5Plus极简防摔保护套" data-stat-id="红米5Plus极简防摔保护套+stat_首页.配件热门_3_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus极简防摔保护套+stat_首页.配件热门_3_1_1', '//item.mi.com/1174900012.html', 'pcpid', 'reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7429&amp;bid=3038462.3&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1512957185.jpg" alt="红米 5 Plus 极简防摔保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174900012.html" data-log_code="reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7429&amp;bid=3038462.3&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="3" data-stat-text="红米 5 Plus 极简防摔保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_3_1_1" data-stat-aid="红米5Plus极简防摔保护套" data-stat-id="红米5Plus极简防摔保护套+stat_首页.配件热门_3_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus极简防摔保护套+stat_首页.配件热门_3_1_1', '//item.mi.com/1174900012.html', 'pcpid', 'reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7429&amp;bid=3038462.3&amp;page=home']);">
                                            红米 5 Plus 极简防摔保护套 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">39</span>元 </p>
                                    <p class="rank">994人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174900012.html" data-log_code="reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7429&amp;bid=3038462.3&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="3" data-stat-text="红米 5 Plus 极简防摔保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_3_1_1" data-stat-aid="红米5Plus极简防摔保护套" data-stat-id="红米5Plus极简防摔保护套+stat_首页.配件热门_3_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus极简防摔保护套+stat_首页.配件热门_3_1_1', '//item.mi.com/1174900012.html', 'pcpid', 'reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7429&amp;bid=3038462.3&amp;page=home']);">
                                            <span class="review">不错 但是没有小米标 很遗憾 俺拿的别人都不知道我用...</span>
                                            <span class="author"> 来自于 846592781 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174700013">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174700050.html" data-log_code="reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7327&amp;bid=3038462.4&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="4" data-stat-text="红米 5 Plus 标准钢化玻璃膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_4_1_1" data-stat-aid="红米5Plus标准钢化玻璃膜" data-stat-id="红米5Plus标准钢化玻璃膜+stat_首页.配件热门_4_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus标准钢化玻璃膜+stat_首页.配件热门_4_1_1', '//item.mi.com/1174700050.html', 'pcpid', 'reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7327&amp;bid=3038462.4&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1512898082.jpg" alt="红米 5 Plus 标准钢化玻璃膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174700050.html" data-log_code="reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7327&amp;bid=3038462.4&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="4" data-stat-text="红米 5 Plus 标准钢化玻璃膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_4_1_1" data-stat-aid="红米5Plus标准钢化玻璃膜" data-stat-id="红米5Plus标准钢化玻璃膜+stat_首页.配件热门_4_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus标准钢化玻璃膜+stat_首页.配件热门_4_1_1', '//item.mi.com/1174700050.html', 'pcpid', 'reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7327&amp;bid=3038462.4&amp;page=home']);">
                                            红米 5 Plus 标准钢化玻璃膜 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">29</span>元 </p>
                                    <p class="rank">505人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174700050.html" data-log_code="reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7327&amp;bid=3038462.4&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="4" data-stat-text="红米 5 Plus 标准钢化玻璃膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_4_1_1" data-stat-aid="红米5Plus标准钢化玻璃膜" data-stat-id="红米5Plus标准钢化玻璃膜+stat_首页.配件热门_4_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus标准钢化玻璃膜+stat_首页.配件热门_4_1_1', '//item.mi.com/1174700050.html', 'pcpid', 'reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7327&amp;bid=3038462.4&amp;page=home']);">
                                            <span class="review">这是红米5puls的钢化膜吗？怎么贴不了？</span>
                                            <span class="author"> 来自于 曾在天涯 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174700014">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174700051.html" data-log_code="reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7328&amp;bid=3038462.5&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="5" data-stat-text="红米5 Plus 标准高透保护膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_5_1_1" data-stat-aid="红米5Plus标准高透保护膜" data-stat-id="红米5Plus标准高透保护膜+stat_首页.配件热门_5_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus标准高透保护膜+stat_首页.配件热门_5_1_1', '//item.mi.com/1174700051.html', 'pcpid', 'reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7328&amp;bid=3038462.5&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1512959446.jpg" alt="红米5 Plus 标准高透保护膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174700051.html" data-log_code="reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7328&amp;bid=3038462.5&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="5" data-stat-text="红米5 Plus 标准高透保护膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_5_1_1" data-stat-aid="红米5Plus标准高透保护膜" data-stat-id="红米5Plus标准高透保护膜+stat_首页.配件热门_5_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus标准高透保护膜+stat_首页.配件热门_5_1_1', '//item.mi.com/1174700051.html', 'pcpid', 'reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7328&amp;bid=3038462.5&amp;page=home']);">
                                            红米5 Plus 标准高透保护膜 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元 </p>
                                    <p class="rank">919人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174700051.html" data-log_code="reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7328&amp;bid=3038462.5&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="5" data-stat-text="红米5 Plus 标准高透保护膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_5_1_1" data-stat-aid="红米5Plus标准高透保护膜" data-stat-id="红米5Plus标准高透保护膜+stat_首页.配件热门_5_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5Plus标准高透保护膜+stat_首页.配件热门_5_1_1', '//item.mi.com/1174700051.html', 'pcpid', 'reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7328&amp;bid=3038462.5&amp;page=home']);">
                                            <span class="review">手机不给就给一个手机屏让我咋用</span>
                                            <span class="author"> 来自于 1253333549 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173700025">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1173700015.html" data-log_code="reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6824&amp;bid=3038462.6&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="6" data-stat-text="小米5X 智能显示保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_6_1_1" data-stat-aid="小米5X智能显示保护套" data-stat-id="小米5X智能显示保护套+stat_首页.配件热门_6_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米5X智能显示保护套+stat_首页.配件热门_6_1_1', '//item.mi.com/1173700015.html', 'pcpid', 'reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6824&amp;bid=3038462.6&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1510904027.jpg" alt="小米5X 智能显示保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173700015.html" data-log_code="reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6824&amp;bid=3038462.6&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="6" data-stat-text="小米5X 智能显示保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_6_1_1" data-stat-aid="小米5X智能显示保护套" data-stat-id="小米5X智能显示保护套+stat_首页.配件热门_6_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米5X智能显示保护套+stat_首页.配件热门_6_1_1', '//item.mi.com/1173700015.html', 'pcpid', 'reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6824&amp;bid=3038462.6&amp;page=home']);">
                                            小米5X 智能显示保护套 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank">174人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173700015.html" data-log_code="reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6824&amp;bid=3038462.6&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="6" data-stat-text="小米5X 智能显示保护套" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_6_1_1" data-stat-aid="小米5X智能显示保护套" data-stat-id="小米5X智能显示保护套+stat_首页.配件热门_6_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米5X智能显示保护套+stat_首页.配件热门_6_1_1', '//item.mi.com/1173700015.html', 'pcpid', 'reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6824&amp;bid=3038462.6&amp;page=home']);">
                                            <span class="review">做工精细，品质卓越，价格小贵。</span>
                                            <span class="author"> 来自于 Tony 的评价
                                                <span class="date"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2174700012">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174700049.html" data-log_code="reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7325&amp;bid=3038462.7&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="7" data-stat-text="红米 5 标准高透保护膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_7_1_1" data-stat-aid="红米5标准高透保护膜" data-stat-id="红米5标准高透保护膜+stat_首页.配件热门_7_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5标准高透保护膜+stat_首页.配件热门_7_1_1', '//item.mi.com/1174700049.html', 'pcpid', 'reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7325&amp;bid=3038462.7&amp;page=home']);">
                                            <img src="/static/index/index/img/pms_1512897329.jpg" alt="红米 5 标准高透保护膜" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174700049.html" data-log_code="reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7325&amp;bid=3038462.7&amp;page=home"
                                            data-stat-method="1_1" data-stat-index="7" data-stat-text="红米 5 标准高透保护膜" target="_blank"
                                            data-stat-pid="stat_首页.配件热门_7_1_1" data-stat-aid="红米5标准高透保护膜" data-stat-id="红米5标准高透保护膜+stat_首页.配件热门_7_1_1"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米5标准高透保护膜+stat_首页.配件热门_7_1_1', '//item.mi.com/1174700049.html', 'pcpid', 'reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7325&amp;bid=3038462.7&amp;page=home']);">红米 5 标准高透保护膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/pjrm" target="_blank" data-stat-pid="stat_首页.配件热门_undefined_undefined" data-stat-id="null+stat_首页.配件热门_undefined_undefined"
                                            onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.配件热门_undefined_undefined', '//list.mi.com/pjrm', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/pjrm" target="_blank" data-stat-pid="stat_首页.配件热门_undefined_undefined" data-stat-id="null+stat_首页.配件热门_undefined_undefined"
                                        onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.配件热门_undefined_undefined', '//list.mi.com/pjrm', 'pcpid', '']);">浏览更多
                                        <small>热门</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="1171500022">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1171500022.html" data-stat-aid="AA15661" data-stat-pid="2_27_1_144" target="_blank"
                                            data-log_code="31pchomeaccessories_right_1001029#rid=e20127c31b344fc097bd5128bb6720ef&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.1&amp;pid=1171500022&amp;adm=3374"
                                            data-stat-id="AA15661+2_27_1_144" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15661+2_27_1_144', '//item.mi.com/1171500022.html', 'pcpid', '31pchomeaccessories_right_1001029#rid=e20127c31b344fc097bd5128bb6720ef&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.1&amp;pid=1171500022&amp;adm=3374']);">
                                            <img src="/static/index/index/img/pms_1493261830.jpg" alt="小米6 硅胶保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1171500022.html" data-stat-aid="AA15661" data-stat-pid="2_27_1_144" data-log_code="31pchomeaccessories_right_1001029#rid=e20127c31b344fc097bd5128bb6720ef&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.1&amp;pid=1171500022&amp;adm=3374"
                                            target="_blank" data-stat-id="AA15661+2_27_1_144" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15661+2_27_1_144', '//item.mi.com/1171500022.html', 'pcpid', '31pchomeaccessories_right_1001029#rid=e20127c31b344fc097bd5128bb6720ef&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.1&amp;pid=1171500022&amp;adm=3374']);">小米6 硅胶保护套</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">49</span>元 </p>
                                    <p class="rank">8882人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1171500022.html" data-stat-aid="AA15661" data-stat-pid="2_27_1_144" data-log_code="31pchomeaccessories_right_1001029#rid=e20127c31b344fc097bd5128bb6720ef&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.1&amp;pid=1171500022&amp;adm=3374"
                                            target="_blank" data-stat-id="AA15661+2_27_1_144" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15661+2_27_1_144', '//item.mi.com/1171500022.html', 'pcpid', '31pchomeaccessories_right_1001029#rid=e20127c31b344fc097bd5128bb6720ef&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.1&amp;pid=1171500022&amp;adm=3374']);">
                                            <span class="review">客服妹子不要忽略我，</span>
                                            <span class="author"> 来自于 伦GG 的评价
                                                <span class="date" data-date="1511597230"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1170500006">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1170500006.html" data-stat-aid="AA15412" data-stat-pid="2_27_2_145" target="_blank"
                                            data-log_code="31pchomeaccessories_right_1002029#rid=fedf478a43db51509bbd5eabee083c21&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.2&amp;pid=1170500006&amp;adm=3246"
                                            data-stat-id="AA15412+2_27_2_145" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15412+2_27_2_145', '//item.mi.com/1170500006.html', 'pcpid', '31pchomeaccessories_right_1002029#rid=fedf478a43db51509bbd5eabee083c21&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.2&amp;pid=1170500006&amp;adm=3246']);">
                                            <img src="/static/index/index/img/pms_1486980879.jpg" alt="红米Note 4X 高透软胶保护套 透明" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1170500006.html" data-stat-aid="AA15412" data-stat-pid="2_27_2_145" data-log_code="31pchomeaccessories_right_1002029#rid=fedf478a43db51509bbd5eabee083c21&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.2&amp;pid=1170500006&amp;adm=3246"
                                            target="_blank" data-stat-id="AA15412+2_27_2_145" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15412+2_27_2_145', '//item.mi.com/1170500006.html', 'pcpid', '31pchomeaccessories_right_1002029#rid=fedf478a43db51509bbd5eabee083c21&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.2&amp;pid=1170500006&amp;adm=3246']);">红米Note 4X 高透软胶保护套 透明</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元 </p>
                                    <p class="rank">8045人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1170500006.html" data-stat-aid="AA15412" data-stat-pid="2_27_2_145" data-log_code="31pchomeaccessories_right_1002029#rid=fedf478a43db51509bbd5eabee083c21&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.2&amp;pid=1170500006&amp;adm=3246"
                                            target="_blank" data-stat-id="AA15412+2_27_2_145" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15412+2_27_2_145', '//item.mi.com/1170500006.html', 'pcpid', '31pchomeaccessories_right_1002029#rid=fedf478a43db51509bbd5eabee083c21&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.2&amp;pid=1170500006&amp;adm=3246']);">
                                            <span class="review">依然是最爱最超值的红米，就是不知道能不能送一个超萌的...</span>
                                            <span class="author"> 来自于 sky罗侯 的评价
                                                <span class="date" data-date="1490273122"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173400003">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173400010.html" data-stat-aid="AA18875" data-stat-pid="2_27_3_146" target="_blank"
                                            data-log_code="31pchomeaccessories_right_1003029#rid=77c68445e55de1645ced5b02783108cb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.3&amp;pid=2173400003&amp;adm=4451"
                                            data-stat-id="AA18875+2_27_3_146" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18875+2_27_3_146', '//item.mi.com/1173400010.html', 'pcpid', '31pchomeaccessories_right_1003029#rid=77c68445e55de1645ced5b02783108cb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.3&amp;pid=2173400003&amp;adm=4451']);">
                                            <img src="/static/index/index/img/pms_1505212091.jpg" alt="小米Max 2  极简保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173400010.html" data-stat-aid="AA18875" data-stat-pid="2_27_3_146" data-log_code="31pchomeaccessories_right_1003029#rid=77c68445e55de1645ced5b02783108cb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.3&amp;pid=2173400003&amp;adm=4451"
                                            target="_blank" data-stat-id="AA18875+2_27_3_146" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18875+2_27_3_146', '//item.mi.com/1173400010.html', 'pcpid', '31pchomeaccessories_right_1003029#rid=77c68445e55de1645ced5b02783108cb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.3&amp;pid=2173400003&amp;adm=4451']);">小米Max 2 极简保护套</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">29</span>元
                                        <del>
                                            <span class="num">49</span>元</del>
                                    </p>
                                    <p class="rank">929人评价</p>
                                    <div class="flag flag-saleoff"> 享6折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173400010.html" data-stat-aid="AA18875" data-stat-pid="2_27_3_146" data-log_code="31pchomeaccessories_right_1003029#rid=77c68445e55de1645ced5b02783108cb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.3&amp;pid=2173400003&amp;adm=4451"
                                            target="_blank" data-stat-id="AA18875+2_27_3_146" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18875+2_27_3_146', '//item.mi.com/1173400010.html', 'pcpid', '31pchomeaccessories_right_1003029#rid=77c68445e55de1645ced5b02783108cb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.3&amp;pid=2173400003&amp;adm=4451']);">
                                            <span class="review">很好，贴合度高，还是原装的好</span>
                                            <span class="author"> 来自于 lurul123 的评价
                                                <span class="date" data-date="1508665588"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173100032">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173100060.html" data-stat-aid="AA18887" data-stat-pid="2_27_4_147" target="_blank"
                                            data-log_code="31pchomeaccessories_right_1004029#rid=ee7eeb16f91392e524d847a48e7029db&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.4&amp;pid=2173100032&amp;adm=4452"
                                            data-stat-id="AA18887+2_27_4_147" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18887+2_27_4_147', '//item.mi.com/1173100060.html', 'pcpid', '31pchomeaccessories_right_1004029#rid=ee7eeb16f91392e524d847a48e7029db&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.4&amp;pid=2173100032&amp;adm=4452']);">
                                            <img src="/static/index/index/img/pms_1503363082.jpg" alt="红米Note 5A高透软胶保护套 透明无指纹孔" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173100060.html" data-stat-aid="AA18887" data-stat-pid="2_27_4_147" data-log_code="31pchomeaccessories_right_1004029#rid=ee7eeb16f91392e524d847a48e7029db&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.4&amp;pid=2173100032&amp;adm=4452"
                                            target="_blank" data-stat-id="AA18887+2_27_4_147" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18887+2_27_4_147', '//item.mi.com/1173100060.html', 'pcpid', '31pchomeaccessories_right_1004029#rid=ee7eeb16f91392e524d847a48e7029db&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.4&amp;pid=2173100032&amp;adm=4452']);">红米Note 5A高透软胶保护套 透明无指纹孔</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">9</span>元
                                        <del>
                                            <span class="num">19</span>元</del>
                                    </p>
                                    <p class="rank">842人评价</p>
                                    <div class="flag flag-saleoff"> 享5折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173100060.html" data-stat-aid="AA18887" data-stat-pid="2_27_4_147" data-log_code="31pchomeaccessories_right_1004029#rid=ee7eeb16f91392e524d847a48e7029db&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.4&amp;pid=2173100032&amp;adm=4452"
                                            target="_blank" data-stat-id="AA18887+2_27_4_147" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18887+2_27_4_147', '//item.mi.com/1173100060.html', 'pcpid', '31pchomeaccessories_right_1004029#rid=ee7eeb16f91392e524d847a48e7029db&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.4&amp;pid=2173100032&amp;adm=4452']);">
                                            <span class="review">不评价了，反正我也不知道哪里看，</span>
                                            <span class="author"> 来自于 辅警1号 的评价
                                                <span class="date" data-date="1516879576"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173000011">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173000023.html" data-stat-aid="AA18877" data-stat-pid="2_27_5_148" target="_blank"
                                            data-log_code="31pchomeaccessories_right_1005029#rid=dfa6be1107e34a8df3f4c40d395e460a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.5&amp;pid=2173000011&amp;adm=4453"
                                            data-stat-id="AA18877+2_27_5_148" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18877+2_27_5_148', '//item.mi.com/1173000023.html', 'pcpid', '31pchomeaccessories_right_1005029#rid=dfa6be1107e34a8df3f4c40d395e460a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.5&amp;pid=2173000011&amp;adm=4453']);">
                                            <img src="/static/index/index/img/pms_1501555227.jpg" alt="小米5X 幻彩保护壳 星空黑" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173000023.html" data-stat-aid="AA18877" data-stat-pid="2_27_5_148" data-log_code="31pchomeaccessories_right_1005029#rid=dfa6be1107e34a8df3f4c40d395e460a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.5&amp;pid=2173000011&amp;adm=4453"
                                            target="_blank" data-stat-id="AA18877+2_27_5_148" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18877+2_27_5_148', '//item.mi.com/1173000023.html', 'pcpid', '31pchomeaccessories_right_1005029#rid=dfa6be1107e34a8df3f4c40d395e460a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.5&amp;pid=2173000011&amp;adm=4453']);">小米5X 幻彩保护壳 星空黑</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">69</span>元 </p>
                                    <p class="rank">3718人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173000023.html" data-stat-aid="AA18877" data-stat-pid="2_27_5_148" data-log_code="31pchomeaccessories_right_1005029#rid=dfa6be1107e34a8df3f4c40d395e460a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.5&amp;pid=2173000011&amp;adm=4453"
                                            target="_blank" data-stat-id="AA18877+2_27_5_148" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18877+2_27_5_148', '//item.mi.com/1173000023.html', 'pcpid', '31pchomeaccessories_right_1005029#rid=dfa6be1107e34a8df3f4c40d395e460a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.5&amp;pid=2173000011&amp;adm=4453']);">
                                            <span class="review">室友手机被偷，正好买个急用，这个价位，这个配置，这个...</span>
                                            <span class="author"> 来自于 周禹丞 的评价
                                                <span class="date" data-date="1512788906"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2170800023">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1170800035.html" data-stat-aid="AA18878" data-stat-pid="2_27_6_149" target="_blank"
                                            data-log_code="31pchomeaccessories_right_1006029#rid=0c4a5d3ed19aed6dcff5a2149e6758d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.6&amp;pid=2170800023&amp;adm=4454"
                                            data-stat-id="AA18878+2_27_6_149" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18878+2_27_6_149', '//item.mi.com/1170800035.html', 'pcpid', '31pchomeaccessories_right_1006029#rid=0c4a5d3ed19aed6dcff5a2149e6758d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.6&amp;pid=2170800023&amp;adm=4454']);">
                                            <img src="/static/index/index/img/pms_1488522312.jpg" alt="红米note4X 智能显示保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1170800035.html" data-stat-aid="AA18878" data-stat-pid="2_27_6_149" data-log_code="31pchomeaccessories_right_1006029#rid=0c4a5d3ed19aed6dcff5a2149e6758d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.6&amp;pid=2170800023&amp;adm=4454"
                                            target="_blank" data-stat-id="AA18878+2_27_6_149" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18878+2_27_6_149', '//item.mi.com/1170800035.html', 'pcpid', '31pchomeaccessories_right_1006029#rid=0c4a5d3ed19aed6dcff5a2149e6758d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.6&amp;pid=2170800023&amp;adm=4454']);">红米note4X 智能显示保护套</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">39</span>元 </p>
                                    <p class="rank">3317人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1170800035.html" data-stat-aid="AA18878" data-stat-pid="2_27_6_149" data-log_code="31pchomeaccessories_right_1006029#rid=0c4a5d3ed19aed6dcff5a2149e6758d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.6&amp;pid=2170800023&amp;adm=4454"
                                            target="_blank" data-stat-id="AA18878+2_27_6_149" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18878+2_27_6_149', '//item.mi.com/1170800035.html', 'pcpid', '31pchomeaccessories_right_1006029#rid=0c4a5d3ed19aed6dcff5a2149e6758d1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.6&amp;pid=2170800023&amp;adm=4454']);">
                                            <span class="review">买错了-_-||，可以退吗</span>
                                            <span class="author"> 来自于 1204992033 的评价
                                                <span class="date" data-date="1490848283"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="1163000012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1163000012.html" data-stat-aid="AA15415" data-stat-pid="2_27_7_150" target="_blank"
                                            data-log_code="31pchomeaccessories_right_1007029#rid=10cf0958cf52c0be28a758811d86809c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.7&amp;pid=1163000012&amp;adm=3248"
                                            data-stat-id="AA15415+2_27_7_150" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15415+2_27_7_150', '//item.mi.com/1163000012.html', 'pcpid', '31pchomeaccessories_right_1007029#rid=10cf0958cf52c0be28a758811d86809c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.7&amp;pid=1163000012&amp;adm=3248']);">
                                            <img src="/static/index/index/img/pms_1478163840.jpg" alt="红米4高配版 超薄肤感软胶保护套" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1163000012.html" data-stat-aid="AA15415" data-stat-pid="2_27_7_150" data-log_code="31pchomeaccessories_right_1007029#rid=10cf0958cf52c0be28a758811d86809c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.7&amp;pid=1163000012&amp;adm=3248"
                                            target="_blank" data-stat-id="AA15415+2_27_7_150" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15415+2_27_7_150', '//item.mi.com/1163000012.html', 'pcpid', '31pchomeaccessories_right_1007029#rid=10cf0958cf52c0be28a758811d86809c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.7&amp;pid=1163000012&amp;adm=3248']);">红米4高配版 超薄肤感软胶保护套</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元 </p>
                                    <p class="rank">1072人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1163000012.html" data-stat-aid="AA15415" data-stat-pid="2_27_7_150" data-log_code="31pchomeaccessories_right_1007029#rid=10cf0958cf52c0be28a758811d86809c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.7&amp;pid=1163000012&amp;adm=3248"
                                            target="_blank" data-stat-id="AA15415+2_27_7_150" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15415+2_27_7_150', '//item.mi.com/1163000012.html', 'pcpid', '31pchomeaccessories_right_1007029#rid=10cf0958cf52c0be28a758811d86809c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.7&amp;pid=1163000012&amp;adm=3248']);">
                                            <span class="review">手机套的很稳，不会很松的样子，摸起来手感很舒服，&amp;a...</span>
                                            <span class="author"> 来自于 猛T 的评价
                                                <span class="date" data-date="1493445782"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="1163000019">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1163000019.html" class="exposure" data-stat-aid="AA15414" data-stat-pid="2_27_8_151" data-log_code="31pchomeaccessories_right_1008029#rid=6419e3fee70105f118de9b0c3db8ac03&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.8&amp;pid=1163000019&amp;adm=3247"
                                            target="_blank" data-stat-id="AA15414+2_27_8_151" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15414+2_27_8_151', '//item.mi.com/1163000019.html', 'pcpid', '31pchomeaccessories_right_1008029#rid=6419e3fee70105f118de9b0c3db8ac03&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.8&amp;pid=1163000019&amp;adm=3247']);">
                                            <img src="/static/index/index/img/pms_1472198624.jpg" alt="红米Note4 智能显示保护套" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1163000019.html" class="exposure" data-stat-aid="AA15414" data-stat-pid="2_27_8_151" data-log_code="31pchomeaccessories_right_1008029#rid=6419e3fee70105f118de9b0c3db8ac03&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.8&amp;pid=1163000019&amp;adm=3247"
                                            target="_blank" data-stat-id="AA15414+2_27_8_151" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15414+2_27_8_151', '//item.mi.com/1163000019.html', 'pcpid', '31pchomeaccessories_right_1008029#rid=6419e3fee70105f118de9b0c3db8ac03&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030347.8&amp;pid=1163000019&amp;adm=3247']);">红米Note4 智能显示保护套</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">39</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/7" target="_blank" data-stat-id="372da8cc6adbd49e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-372da8cc6adbd49e', '//list.mi.com/7', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/7" target="_blank" data-stat-id="eb740ef8f5ccdc77" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-eb740ef8f5ccdc77', '//list.mi.com/7', 'pcpid', '']);">浏览更多
                                        <small>保护套</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="1164400025">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1164400025.html" data-stat-aid="AA15024" data-stat-pid="2_29_1_160" target="_blank"
                                            data-log_code="31pchomeaccessories_right_2001030#rid=66672818c877b8da238d9c7d066c5799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073"
                                            data-stat-id="AA15024+2_29_1_160" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15024+2_29_1_160', '//item.mi.com/1164400025.html', 'pcpid', '31pchomeaccessories_right_2001030#rid=66672818c877b8da238d9c7d066c5799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073']);">
                                            <img src="/static/index/index/img/xmad_14987297093922_POaTU.jpg" alt="红米Note 4X 标准高透贴膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164400025.html" data-stat-aid="AA15024" data-stat-pid="2_29_1_160" data-log_code="31pchomeaccessories_right_2001030#rid=66672818c877b8da238d9c7d066c5799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073"
                                            target="_blank" data-stat-id="AA15024+2_29_1_160" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15024+2_29_1_160', '//item.mi.com/1164400025.html', 'pcpid', '31pchomeaccessories_right_2001030#rid=66672818c877b8da238d9c7d066c5799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073']);">红米Note 4X 标准高透贴膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">10</span>元
                                        <del>
                                            <span class="num">19</span>元</del>
                                    </p>
                                    <p class="rank">1.4万人评价</p>
                                    <div class="flag flag-saleoff"> 享6折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164400025.html" data-stat-aid="AA15024" data-stat-pid="2_29_1_160" data-log_code="31pchomeaccessories_right_2001030#rid=66672818c877b8da238d9c7d066c5799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073"
                                            target="_blank" data-stat-id="AA15024+2_29_1_160" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15024+2_29_1_160', '//item.mi.com/1164400025.html', 'pcpid', '31pchomeaccessories_right_2001030#rid=66672818c877b8da238d9c7d066c5799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073']);">
                                            <span class="review">轻抚如柔荑，肤似兰凝脂，腰着流纨素，肩披绮罗衣。</span>
                                            <span class="author"> 来自于 110613567 的评价
                                                <span class="date" data-date="1489896709"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2154800023">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1154800022.html" data-stat-aid="AA15417" data-stat-pid="2_29_2_161" target="_blank"
                                            data-log_code="31pchomeaccessories_right_2002030#rid=88eb2b8ac8d7d25763b096f56402309d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.2&amp;pid=2154800023&amp;adm=2034"
                                            data-stat-id="AA15417+2_29_2_161" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15417+2_29_2_161', '//item.mi.com/1154800022.html', 'pcpid', '31pchomeaccessories_right_2002030#rid=88eb2b8ac8d7d25763b096f56402309d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.2&amp;pid=2154800023&amp;adm=2034']);">
                                            <img src="/static/index/index/img/T1SSJ_B4E_1RXrhCrK220x220.jpg" alt="小米平板2 标准高透贴膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1154800022.html" data-stat-aid="AA15417" data-stat-pid="2_29_2_161" data-log_code="31pchomeaccessories_right_2002030#rid=88eb2b8ac8d7d25763b096f56402309d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.2&amp;pid=2154800023&amp;adm=2034"
                                            target="_blank" data-stat-id="AA15417+2_29_2_161" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15417+2_29_2_161', '//item.mi.com/1154800022.html', 'pcpid', '31pchomeaccessories_right_2002030#rid=88eb2b8ac8d7d25763b096f56402309d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.2&amp;pid=2154800023&amp;adm=2034']);">小米平板2 标准高透贴膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">29</span>元 </p>
                                    <p class="rank">1869人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1154800022.html" data-stat-aid="AA15417" data-stat-pid="2_29_2_161" data-log_code="31pchomeaccessories_right_2002030#rid=88eb2b8ac8d7d25763b096f56402309d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.2&amp;pid=2154800023&amp;adm=2034"
                                            target="_blank" data-stat-id="AA15417+2_29_2_161" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15417+2_29_2_161', '//item.mi.com/1154800022.html', 'pcpid', '31pchomeaccessories_right_2002030#rid=88eb2b8ac8d7d25763b096f56402309d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.2&amp;pid=2154800023&amp;adm=2034']);">
                                            <span class="review">我用的都小米我可算是小米粉丝了</span>
                                            <span class="author"> 来自于 达人 的评价
                                                <span class="date" data-date="1483539195"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174100020">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174100009.html" data-stat-aid="AA18879" data-stat-pid="2_29_3_162" target="_blank"
                                            data-log_code="31pchomeaccessories_right_2003030#rid=ca84d8b4873b642f9d6eedf2843ee1b8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.3&amp;pid=2174100020&amp;adm=4455"
                                            data-stat-id="AA18879+2_29_3_162" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18879+2_29_3_162', '//item.mi.com/1174100009.html', 'pcpid', '31pchomeaccessories_right_2003030#rid=ca84d8b4873b642f9d6eedf2843ee1b8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.3&amp;pid=2174100020&amp;adm=4455']);">
                                            <img src="/static/index/index/img/pms_1508149075.jpg" alt="红米5A标准高透膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174100009.html" data-stat-aid="AA18879" data-stat-pid="2_29_3_162" data-log_code="31pchomeaccessories_right_2003030#rid=ca84d8b4873b642f9d6eedf2843ee1b8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.3&amp;pid=2174100020&amp;adm=4455"
                                            target="_blank" data-stat-id="AA18879+2_29_3_162" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18879+2_29_3_162', '//item.mi.com/1174100009.html', 'pcpid', '31pchomeaccessories_right_2003030#rid=ca84d8b4873b642f9d6eedf2843ee1b8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.3&amp;pid=2174100020&amp;adm=4455']);">红米5A标准高透膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元 </p>
                                    <p class="rank">152人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174100009.html" data-stat-aid="AA18879" data-stat-pid="2_29_3_162" data-log_code="31pchomeaccessories_right_2003030#rid=ca84d8b4873b642f9d6eedf2843ee1b8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.3&amp;pid=2174100020&amp;adm=4455"
                                            target="_blank" data-stat-id="AA18879+2_29_3_162" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18879+2_29_3_162', '//item.mi.com/1174100009.html', 'pcpid', '31pchomeaccessories_right_2003030#rid=ca84d8b4873b642f9d6eedf2843ee1b8&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.3&amp;pid=2174100020&amp;adm=4455']);">
                                            <span class="review">还是一如既往的好(✪▽✪)</span>
                                            <span class="author"> 来自于 又逢下雨天 的评价
                                                <span class="date" data-date="1511181084"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172000027">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172000061.html" data-stat-aid="AA18888" data-stat-pid="2_29_4_163" target="_blank"
                                            data-log_code="31pchomeaccessories_right_2004030#rid=e53cbb81650bffb69ea6b512b4a6fdfb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456"
                                            data-stat-id="AA18888+2_29_4_163" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18888+2_29_4_163', '//item.mi.com/1172000061.html', 'pcpid', '31pchomeaccessories_right_2004030#rid=e53cbb81650bffb69ea6b512b4a6fdfb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456']);">
                                            <img src="/static/index/index/img/pms_1496238415.jpg" alt="小米Max2 高透保护膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172000061.html" data-stat-aid="AA18888" data-stat-pid="2_29_4_163" data-log_code="31pchomeaccessories_right_2004030#rid=e53cbb81650bffb69ea6b512b4a6fdfb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456"
                                            target="_blank" data-stat-id="AA18888+2_29_4_163" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18888+2_29_4_163', '//item.mi.com/1172000061.html', 'pcpid', '31pchomeaccessories_right_2004030#rid=e53cbb81650bffb69ea6b512b4a6fdfb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456']);">小米Max2 高透保护膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">10</span>元
                                        <del>
                                            <span class="num">19</span>元</del>
                                    </p>
                                    <p class="rank">4282人评价</p>
                                    <div class="flag flag-saleoff"> 享6折 </div>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172000061.html" data-stat-aid="AA18888" data-stat-pid="2_29_4_163" data-log_code="31pchomeaccessories_right_2004030#rid=e53cbb81650bffb69ea6b512b4a6fdfb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456"
                                            target="_blank" data-stat-id="AA18888+2_29_4_163" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18888+2_29_4_163', '//item.mi.com/1172000061.html', 'pcpid', '31pchomeaccessories_right_2004030#rid=e53cbb81650bffb69ea6b512b4a6fdfb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456']);">
                                            <span class="review">高看，好用，就是不知道送的那么多蓝色的膜是干啥的|･...</span>
                                            <span class="author"> 来自于 煌煌ぎ 的评价
                                                <span class="date" data-date="1501481552"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174700013">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174700050.html" data-stat-aid="AA18881" data-stat-pid="2_29_5_164" target="_blank"
                                            data-log_code="31pchomeaccessories_right_2005030#rid=2e53835acff760df8b46faa5c0101638&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.5&amp;pid=2174700013&amp;adm=4457"
                                            data-stat-id="AA18881+2_29_5_164" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18881+2_29_5_164', '//item.mi.com/1174700050.html', 'pcpid', '31pchomeaccessories_right_2005030#rid=2e53835acff760df8b46faa5c0101638&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.5&amp;pid=2174700013&amp;adm=4457']);">
                                            <img src="/static/index/index/img/pms_1512898082_002.jpg" alt="红米 5 Plus 标准钢化玻璃膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174700050.html" data-stat-aid="AA18881" data-stat-pid="2_29_5_164" data-log_code="31pchomeaccessories_right_2005030#rid=2e53835acff760df8b46faa5c0101638&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.5&amp;pid=2174700013&amp;adm=4457"
                                            target="_blank" data-stat-id="AA18881+2_29_5_164" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18881+2_29_5_164', '//item.mi.com/1174700050.html', 'pcpid', '31pchomeaccessories_right_2005030#rid=2e53835acff760df8b46faa5c0101638&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.5&amp;pid=2174700013&amp;adm=4457']);">红米 5 Plus 标准钢化玻璃膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">29</span>元 </p>
                                    <p class="rank">505人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174700050.html" data-stat-aid="AA18881" data-stat-pid="2_29_5_164" data-log_code="31pchomeaccessories_right_2005030#rid=2e53835acff760df8b46faa5c0101638&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.5&amp;pid=2174700013&amp;adm=4457"
                                            target="_blank" data-stat-id="AA18881+2_29_5_164" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18881+2_29_5_164', '//item.mi.com/1174700050.html', 'pcpid', '31pchomeaccessories_right_2005030#rid=2e53835acff760df8b46faa5c0101638&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.5&amp;pid=2174700013&amp;adm=4457']);">
                                            <span class="review">贴膜到了，手机还在路上，感谢客服妹子，对我的安慰，赠...</span>
                                            <span class="author"> 来自于 @_@@_@ 的评价
                                                <span class="date" data-date="1515574632"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2163600009">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1163600030.html" data-stat-aid="AA18882" data-stat-pid="2_29_6_165" target="_blank"
                                            data-log_code="31pchomeaccessories_right_2006030#rid=3705f968c540b09f6f444ef9611f96d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458"
                                            data-stat-id="AA18882+2_29_6_165" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18882+2_29_6_165', '//item.mi.com/1163600030.html', 'pcpid', '31pchomeaccessories_right_2006030#rid=3705f968c540b09f6f444ef9611f96d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458']);">
                                            <img src="/static/index/index/img/pms_1482136232.jpg" alt="红米4标准版 标准高透贴膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1163600030.html" data-stat-aid="AA18882" data-stat-pid="2_29_6_165" data-log_code="31pchomeaccessories_right_2006030#rid=3705f968c540b09f6f444ef9611f96d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458"
                                            target="_blank" data-stat-id="AA18882+2_29_6_165" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18882+2_29_6_165', '//item.mi.com/1163600030.html', 'pcpid', '31pchomeaccessories_right_2006030#rid=3705f968c540b09f6f444ef9611f96d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458']);">红米4标准版 标准高透贴膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元 </p>
                                    <p class="rank">996人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1163600030.html" data-stat-aid="AA18882" data-stat-pid="2_29_6_165" data-log_code="31pchomeaccessories_right_2006030#rid=3705f968c540b09f6f444ef9611f96d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458"
                                            target="_blank" data-stat-id="AA18882+2_29_6_165" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18882+2_29_6_165', '//item.mi.com/1163600030.html', 'pcpid', '31pchomeaccessories_right_2006030#rid=3705f968c540b09f6f444ef9611f96d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458']);">
                                            <span class="review">只是，有的时候，我能感觉到她的疏离;但是，很快，我就...</span>
                                            <span class="author"> 来自于 呢年 的评价
                                                <span class="date" data-date="1484034153"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161600026">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1161600029.html" data-stat-aid="AA15025" data-stat-pid="2_29_7_166" target="_blank"
                                            data-log_code="31pchomeaccessories_right_2007030#rid=fa1d3c6668ec74c39248c263d1a0171c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.7&amp;pid=2161600026&amp;adm=1835"
                                            data-stat-id="AA15025+2_29_7_166" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15025+2_29_7_166', '//item.mi.com/1161600029.html', 'pcpid', '31pchomeaccessories_right_2007030#rid=fa1d3c6668ec74c39248c263d1a0171c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.7&amp;pid=2161600026&amp;adm=1835']);">
                                            <img src="/static/index/index/img/T1y7JQBbCT1RXrhCrK220x220.jpg" alt="小米Max 标准高透贴膜" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1161600029.html" data-stat-aid="AA15025" data-stat-pid="2_29_7_166" data-log_code="31pchomeaccessories_right_2007030#rid=fa1d3c6668ec74c39248c263d1a0171c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.7&amp;pid=2161600026&amp;adm=1835"
                                            target="_blank" data-stat-id="AA15025+2_29_7_166" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15025+2_29_7_166', '//item.mi.com/1161600029.html', 'pcpid', '31pchomeaccessories_right_2007030#rid=fa1d3c6668ec74c39248c263d1a0171c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.7&amp;pid=2161600026&amp;adm=1835']);">小米Max 标准高透贴膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元 </p>
                                    <p class="rank">1.3万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1161600029.html" data-stat-aid="AA15025" data-stat-pid="2_29_7_166" data-log_code="31pchomeaccessories_right_2007030#rid=fa1d3c6668ec74c39248c263d1a0171c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.7&amp;pid=2161600026&amp;adm=1835"
                                            target="_blank" data-stat-id="AA15025+2_29_7_166" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15025+2_29_7_166', '//item.mi.com/1161600029.html', 'pcpid', '31pchomeaccessories_right_2007030#rid=fa1d3c6668ec74c39248c263d1a0171c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.7&amp;pid=2161600026&amp;adm=1835']);">
                                            <span class="review">这是我买的第五部小米手机，这次太失望了！膜太小了！白...</span>
                                            <span class="author"> 来自于 702382351 的评价
                                                <span class="date" data-date="1468586500"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2162500013">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1162500021.html" class="exposure" data-stat-aid="AA13374" data-stat-pid="2_29_8_167" data-log_code="31pchomeaccessories_right_2008030#rid=8f1081f281e2ea0b53418b13b842a34d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.8&amp;pid=2162500013&amp;adm=2182"
                                            target="_blank" data-stat-id="AA13374+2_29_8_167" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13374+2_29_8_167', '//item.mi.com/1162500021.html', 'pcpid', '31pchomeaccessories_right_2008030#rid=8f1081f281e2ea0b53418b13b842a34d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.8&amp;pid=2162500013&amp;adm=2182']);">
                                            <img src="/static/index/index/img/pms_1469787992.jpg" alt="红米Pro 标准高透贴膜" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1162500021.html" class="exposure" data-stat-aid="AA13374" data-stat-pid="2_29_8_167" data-log_code="31pchomeaccessories_right_2008030#rid=8f1081f281e2ea0b53418b13b842a34d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.8&amp;pid=2162500013&amp;adm=2182"
                                            target="_blank" data-stat-id="AA13374+2_29_8_167" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13374+2_29_8_167', '//item.mi.com/1162500021.html', 'pcpid', '31pchomeaccessories_right_2008030#rid=8f1081f281e2ea0b53418b13b842a34d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030348.8&amp;pid=2162500013&amp;adm=2182']);">红米Pro 标准高透贴膜</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/9" target="_blank" data-stat-id="57eada23bf47c3bb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-57eada23bf47c3bb', '//list.mi.com/9', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/9" target="_blank" data-stat-id="c860b279747f5327" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-c860b279747f5327', '//list.mi.com/9', 'pcpid', '']);">浏览更多
                                        <small>贴膜</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2171300013">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/keyboard/" data-stat-aid="AA15690" data-stat-pid="2_30_1_168" target="_blank"
                                            data-log_code="31pchomeaccessories_right_3001031#rid=0e34023b0012c1a7f4b3f0a3dfbb043d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380"
                                            data-stat-id="AA15690+2_30_1_168" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15690+2_30_1_168', '//www.mi.com/keyboard/', 'pcpid', '31pchomeaccessories_right_3001031#rid=0e34023b0012c1a7f4b3f0a3dfbb043d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380']);">
                                            <img src="/static/index/index/img/pms_1490702347.png" alt="悦米机械键盘" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/keyboard/" data-stat-aid="AA15690" data-stat-pid="2_30_1_168" data-log_code="31pchomeaccessories_right_3001031#rid=0e34023b0012c1a7f4b3f0a3dfbb043d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380"
                                            target="_blank" data-stat-id="AA15690+2_30_1_168" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15690+2_30_1_168', '//www.mi.com/keyboard/', 'pcpid', '31pchomeaccessories_right_3001031#rid=0e34023b0012c1a7f4b3f0a3dfbb043d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380']);">悦米机械键盘</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">299</span>元 </p>
                                    <p class="rank">1915人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/keyboard/" data-stat-aid="AA15690" data-stat-pid="2_30_1_168" data-log_code="31pchomeaccessories_right_3001031#rid=0e34023b0012c1a7f4b3f0a3dfbb043d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380"
                                            target="_blank" data-stat-id="AA15690+2_30_1_168" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15690+2_30_1_168', '//www.mi.com/keyboard/', 'pcpid', '31pchomeaccessories_right_3001031#rid=0e34023b0012c1a7f4b3f0a3dfbb043d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380']);">
                                            <span class="review">买了很多很多小米的产品，只想得到客服妹纸的回复，可是...</span>
                                            <span class="author"> 来自于 马鑫驰 的评价
                                                <span class="date" data-date="1497188169"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2162000033">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1162000043.html" data-stat-aid="AA13890" data-stat-pid="2_30_2_169" target="_blank"
                                            data-log_code="31pchomeaccessories_right_3002031#rid=6786f855ab587e03d745efb6b8e96f3d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547"
                                            data-stat-id="AA13890+2_30_2_169" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13890+2_30_2_169', '//item.mi.com/1162000043.html', 'pcpid', '31pchomeaccessories_right_3002031#rid=6786f855ab587e03d745efb6b8e96f3d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547']);">
                                            <img src="/static/index/index/img/pms_1482221011.jpg" alt="小米指环支架 金色" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1162000043.html" data-stat-aid="AA13890" data-stat-pid="2_30_2_169" data-log_code="31pchomeaccessories_right_3002031#rid=6786f855ab587e03d745efb6b8e96f3d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547"
                                            target="_blank" data-stat-id="AA13890+2_30_2_169" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13890+2_30_2_169', '//item.mi.com/1162000043.html', 'pcpid', '31pchomeaccessories_right_3002031#rid=6786f855ab587e03d745efb6b8e96f3d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547']);">小米指环支架 金色</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19</span>元 </p>
                                    <p class="rank">2.3万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1162000043.html" data-stat-aid="AA13890" data-stat-pid="2_30_2_169" data-log_code="31pchomeaccessories_right_3002031#rid=6786f855ab587e03d745efb6b8e96f3d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547"
                                            target="_blank" data-stat-id="AA13890+2_30_2_169" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13890+2_30_2_169', '//item.mi.com/1162000043.html', 'pcpid', '31pchomeaccessories_right_3002031#rid=6786f855ab587e03d745efb6b8e96f3d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547']);">
                                            <span class="review">19块买的的手机指环，真是大大超出我的想象！还送了几...</span>
                                            <span class="author"> 来自于 staryan619 的评价
                                                <span class="date" data-date="1491973950"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174100028">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174100029.html" data-stat-aid="AA18883" data-stat-pid="2_30_3_170" target="_blank"
                                            data-log_code="31pchomeaccessories_right_3003031#rid=bed87c534bd7f16c824c2e076835a5fd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459"
                                            data-stat-id="AA18883+2_30_3_170" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18883+2_30_3_170', '//item.mi.com/1174100029.html', 'pcpid', '31pchomeaccessories_right_3003031#rid=bed87c534bd7f16c824c2e076835a5fd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459']);">
                                            <img src="/static/index/index/img/pms_1507878667.jpg" alt="小米USB充电器（10W）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174100029.html" data-stat-aid="AA18883" data-stat-pid="2_30_3_170" data-log_code="31pchomeaccessories_right_3003031#rid=bed87c534bd7f16c824c2e076835a5fd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459"
                                            target="_blank" data-stat-id="AA18883+2_30_3_170" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18883+2_30_3_170', '//item.mi.com/1174100029.html', 'pcpid', '31pchomeaccessories_right_3003031#rid=bed87c534bd7f16c824c2e076835a5fd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459']);">小米USB充电器（10W）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19.9</span>元 </p>
                                    <p class="rank">1644人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174100029.html" data-stat-aid="AA18883" data-stat-pid="2_30_3_170" data-log_code="31pchomeaccessories_right_3003031#rid=bed87c534bd7f16c824c2e076835a5fd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459"
                                            target="_blank" data-stat-id="AA18883+2_30_3_170" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18883+2_30_3_170', '//item.mi.com/1174100029.html', 'pcpid', '31pchomeaccessories_right_3003031#rid=bed87c534bd7f16c824c2e076835a5fd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459']);">
                                            <span class="review">小米！无套路~无套路~无套路~</span>
                                            <span class="author"> 来自于 958893926 的评价
                                                <span class="date" data-date="1514204743"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174100029">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174100030.html" data-stat-aid="AA18884" data-stat-pid="2_30_4_171" target="_blank"
                                            data-log_code="31pchomeaccessories_right_3004031#rid=b46385a8caa9d3a24043f375694aac4c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460"
                                            data-stat-id="AA18884+2_30_4_171" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18884+2_30_4_171', '//item.mi.com/1174100030.html', 'pcpid', '31pchomeaccessories_right_3004031#rid=b46385a8caa9d3a24043f375694aac4c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460']);">
                                            <img src="/static/index/index/img/pms_1507877361.jpg" alt="小米USB充电器快充版（18W）" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174100030.html" data-stat-aid="AA18884" data-stat-pid="2_30_4_171" data-log_code="31pchomeaccessories_right_3004031#rid=b46385a8caa9d3a24043f375694aac4c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460"
                                            target="_blank" data-stat-id="AA18884+2_30_4_171" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18884+2_30_4_171', '//item.mi.com/1174100030.html', 'pcpid', '31pchomeaccessories_right_3004031#rid=b46385a8caa9d3a24043f375694aac4c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460']);">小米USB充电器快充版（18W）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">29.9</span>元 </p>
                                    <p class="rank">2133人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174100030.html" data-stat-aid="AA18884" data-stat-pid="2_30_4_171" data-log_code="31pchomeaccessories_right_3004031#rid=b46385a8caa9d3a24043f375694aac4c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460"
                                            target="_blank" data-stat-id="AA18884+2_30_4_171" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18884+2_30_4_171', '//item.mi.com/1174100030.html', 'pcpid', '31pchomeaccessories_right_3004031#rid=b46385a8caa9d3a24043f375694aac4c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460']);">
                                            <span class="review">客服妹子你说这个怎么样呢</span>
                                            <span class="author"> 来自于 两颗星星 的评价
                                                <span class="date" data-date="1514204309"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164100007">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mouse/" data-stat-aid="AA14460" data-stat-pid="2_30_5_172" target="_blank" data-log_code="31pchomeaccessories_right_3005031#rid=95de55d04f70d6a05a3bf650da9e9640&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849"
                                            data-stat-id="AA14460+2_30_5_172" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14460+2_30_5_172', '//www.mi.com/mouse/', 'pcpid', '31pchomeaccessories_right_3005031#rid=95de55d04f70d6a05a3bf650da9e9640&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849']);">
                                            <img src="/static/index/index/img/pms_1488533926.jpg" alt="小米便携鼠标" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mouse/" data-stat-aid="AA14460" data-stat-pid="2_30_5_172" data-log_code="31pchomeaccessories_right_3005031#rid=95de55d04f70d6a05a3bf650da9e9640&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849"
                                            target="_blank" data-stat-id="AA14460+2_30_5_172" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14460+2_30_5_172', '//www.mi.com/mouse/', 'pcpid', '31pchomeaccessories_right_3005031#rid=95de55d04f70d6a05a3bf650da9e9640&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849']);">小米便携鼠标</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">1.4万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mouse/" data-stat-aid="AA14460" data-stat-pid="2_30_5_172" data-log_code="31pchomeaccessories_right_3005031#rid=95de55d04f70d6a05a3bf650da9e9640&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849"
                                            target="_blank" data-stat-id="AA14460+2_30_5_172" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14460+2_30_5_172', '//www.mi.com/mouse/', 'pcpid', '31pchomeaccessories_right_3005031#rid=95de55d04f70d6a05a3bf650da9e9640&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849']);">
                                            <span class="review">超薄，手感还不错。</span>
                                            <span class="author"> 来自于 阿亮 的评价
                                                <span class="date" data-date="1508293253"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2163000004">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1163000011.html" data-stat-aid="AA15065" data-stat-pid="2_30_6_173" target="_blank"
                                            data-log_code="31pchomeaccessories_right_3006031#rid=169230a89160bf70dd6e5907913fe4ff&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.6&amp;pid=2163000004&amp;adm=3091"
                                            data-stat-id="AA15065+2_30_6_173" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15065+2_30_6_173', '//item.mi.com/1163000011.html', 'pcpid', '31pchomeaccessories_right_3006031#rid=169230a89160bf70dd6e5907913fe4ff&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.6&amp;pid=2163000004&amp;adm=3091']);">
                                            <img src="/static/index/index/img/pms_1469523170.jpg" alt="USB-C至HDMI多功能转接器" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1163000011.html" data-stat-aid="AA15065" data-stat-pid="2_30_6_173" data-log_code="31pchomeaccessories_right_3006031#rid=169230a89160bf70dd6e5907913fe4ff&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.6&amp;pid=2163000004&amp;adm=3091"
                                            target="_blank" data-stat-id="AA15065+2_30_6_173" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15065+2_30_6_173', '//item.mi.com/1163000011.html', 'pcpid', '31pchomeaccessories_right_3006031#rid=169230a89160bf70dd6e5907913fe4ff&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.6&amp;pid=2163000004&amp;adm=3091']);">USB-C至HDMI多功能转接器</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank">1929人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1163000011.html" data-stat-aid="AA15065" data-stat-pid="2_30_6_173" data-log_code="31pchomeaccessories_right_3006031#rid=169230a89160bf70dd6e5907913fe4ff&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.6&amp;pid=2163000004&amp;adm=3091"
                                            target="_blank" data-stat-id="AA15065+2_30_6_173" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15065+2_30_6_173', '//item.mi.com/1163000011.html', 'pcpid', '31pchomeaccessories_right_3006031#rid=169230a89160bf70dd6e5907913fe4ff&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.6&amp;pid=2163000004&amp;adm=3091']);">
                                            <span class="review">功能没得说，直接666，唯一一点就是外观没有那么大气...</span>
                                            <span class="author"> 来自于 小管 的评价
                                                <span class="date" data-date="1501726621"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2162000029">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1162000038.html" data-stat-aid="AA14090" data-stat-pid="2_30_7_174" target="_blank"
                                            data-log_code="31pchomeaccessories_right_3007031#rid=9c81f472c2b55ad3d9961a8443c3ab6b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664"
                                            data-stat-id="AA14090+2_30_7_174" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14090+2_30_7_174', '//item.mi.com/1162000038.html', 'pcpid', '31pchomeaccessories_right_3007031#rid=9c81f472c2b55ad3d9961a8443c3ab6b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664']);">
                                            <img src="/static/index/index/img/T1xLxQBgVT1RXrhCrK220x220.jpg" alt="USB Type-C 转接头" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1162000038.html" data-stat-aid="AA14090" data-stat-pid="2_30_7_174" data-log_code="31pchomeaccessories_right_3007031#rid=9c81f472c2b55ad3d9961a8443c3ab6b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664"
                                            target="_blank" data-stat-id="AA14090+2_30_7_174" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14090+2_30_7_174', '//item.mi.com/1162000038.html', 'pcpid', '31pchomeaccessories_right_3007031#rid=9c81f472c2b55ad3d9961a8443c3ab6b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664']);">USB Type-C 转接头</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">5</span>元 </p>
                                    <p class="rank">8.7万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1162000038.html" data-stat-aid="AA14090" data-stat-pid="2_30_7_174" data-log_code="31pchomeaccessories_right_3007031#rid=9c81f472c2b55ad3d9961a8443c3ab6b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664"
                                            target="_blank" data-stat-id="AA14090+2_30_7_174" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14090+2_30_7_174', '//item.mi.com/1162000038.html', 'pcpid', '31pchomeaccessories_right_3007031#rid=9c81f472c2b55ad3d9961a8443c3ab6b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664']);">
                                            <span class="review">非常实用的一个转接头，又便宜又好用，插得很紧，做工很好</span>
                                            <span class="author"> 来自于 哈哈 的评价
                                                <span class="date" data-date="1502621393"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="1164700050">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1164700050.html" class="exposure" data-stat-aid="AA15387" data-stat-pid="2_30_8_175" data-log_code="31pchomeaccessories_right_3008031#rid=57ae32aae4a8017ab5ff8e993614a0dd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230"
                                            target="_blank" data-stat-id="AA15387+2_30_8_175" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15387+2_30_8_175', '//item.mi.com/1164700050.html', 'pcpid', '31pchomeaccessories_right_3008031#rid=57ae32aae4a8017ab5ff8e993614a0dd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230']);">
                                            <img src="/static/index/index/img/pms_1480066629.jpg" alt="小米二合一数据线100cm" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164700050.html" class="exposure" data-stat-aid="AA15387" data-stat-pid="2_30_8_175" data-log_code="31pchomeaccessories_right_3008031#rid=57ae32aae4a8017ab5ff8e993614a0dd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230"
                                            target="_blank" data-stat-id="AA15387+2_30_8_175" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15387+2_30_8_175', '//item.mi.com/1164700050.html', 'pcpid', '31pchomeaccessories_right_3008031#rid=57ae32aae4a8017ab5ff8e993614a0dd&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230']);">小米二合一数据线100cm</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19.9</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/others" target="_blank" data-stat-id="47d408c43a6dea90" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-47d408c43a6dea90', '//list.mi.com/others', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/others" target="_blank" data-stat-id="4acbba8fd94346d3" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4acbba8fd94346d3', '//list.mi.com/others', 'pcpid', '']);">浏览更多
                                        <small>其他配件</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="around" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded">
            <div class="box-hd">
                <h2 class="title">周边</h2>
                <!-- <h2 class="title">我们今晚滑雪真快乐，把滑雪歌儿唱  (♥◠‿◠)ﾉ  ʅ(‾◡◝)</h2> -->
                <div class="more J_brickNav">
                    <ul class="tab-list J_brickTabSwitch" data-tab-target="around-content">
                        <li class="tab-active">热门</li>
                        <li>出行</li>
                        <li>居家</li>
                        <li>生活周边</li>
                        <li>箱包</li>
                    </ul>
                </div>
            </div>
            <div class="box-bd J_brickBd">
                <div class="row">
                    <div class="span4 span-first">
                        <ul class="brick-promo-list clearfix">
                            <li class="brick-item brick-item-m">
                                <a href="https://item.mi.com/1155100012.html" class="exposure" data-stat-aid="AA19536" data-stat-pid="2_31_1_176" data-log_code="31pchomearound_left001032#rid=e212da9405d74814a896d02c11fbdb44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030350.1&amp;pid=2155100009&amp;adm=4755"
                                    target="_blank" data-stat-id="AA19536+2_31_1_176" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19536+2_31_1_176', '//item.mi.com/1155100012.html', 'pcpid', '31pchomearound_left001032#rid=e212da9405d74814a896d02c11fbdb44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030350.1&amp;pid=2155100009&amp;adm=4755']);">
                                    <img src="/static/index/index/img/xmad_15162458631619_LTmcI.jpg" alt="">
                                </a>
                            </li>
                            <li class="brick-item brick-item-m">
                                <a href="https://item.mi.com/1172900005.html" class="exposure" data-stat-aid="AA19568" data-stat-pid="2_31_2_177" data-log_code="31pchomearound_left002032#rid=50b082c26789bb9198926dcbcc69f247&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030350.2&amp;pid=2172900003&amp;adm=4687"
                                    target="_blank" data-stat-id="AA19568+2_31_2_177" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19568+2_31_2_177', '//item.mi.com/1172900005.html', 'pcpid', '31pchomearound_left002032#rid=50b082c26789bb9198926dcbcc69f247&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030350.2&amp;pid=2172900003&amp;adm=4687']);">
                                    <img src="/static/index/index/img/xmad_15145400738686_RiDPQ.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="span16">
                        <div id="around-content" class="tab-container">
                            <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive">
                                <li class="brick-item brick-item-m" data-gid="2173100066">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mj-smartshoes/?cfrom=search" data-stat-aid="AA19487" data-stat-pid="2_32_1_178"
                                            target="_blank" data-log_code="31pchomearound_right_0001033#rid=c802aa0e7c75b2e738bb5468d58425e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.1&amp;pid=2173100066&amp;adm=4756"
                                            data-stat-id="AA19487+2_32_1_178" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19487+2_32_1_178', 'https://www.mi.com/mj-smartshoes/cfrom=search', 'pcpid', '31pchomearound_right_0001033#rid=c802aa0e7c75b2e738bb5468d58425e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.1&amp;pid=2173100066&amp;adm=4756']);">
                                            <img src="/static/index/index/img/pms_1504778935.jpg" alt="米家运动鞋 男款 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mj-smartshoes/?cfrom=search" data-stat-aid="AA19487" data-stat-pid="2_32_1_178" data-log_code="31pchomearound_right_0001033#rid=c802aa0e7c75b2e738bb5468d58425e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.1&amp;pid=2173100066&amp;adm=4756"
                                            target="_blank" data-stat-id="AA19487+2_32_1_178" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19487+2_32_1_178', 'https://www.mi.com/mj-smartshoes/cfrom=search', 'pcpid', '31pchomearound_right_0001033#rid=c802aa0e7c75b2e738bb5468d58425e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.1&amp;pid=2173100066&amp;adm=4756']);">米家运动鞋 男款 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank">7955人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mj-smartshoes/?cfrom=search" data-stat-aid="AA19487" data-stat-pid="2_32_1_178" data-log_code="31pchomearound_right_0001033#rid=c802aa0e7c75b2e738bb5468d58425e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.1&amp;pid=2173100066&amp;adm=4756"
                                            target="_blank" data-stat-id="AA19487+2_32_1_178" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19487+2_32_1_178', 'https://www.mi.com/mj-smartshoes/cfrom=search', 'pcpid', '31pchomearound_right_0001033#rid=c802aa0e7c75b2e738bb5468d58425e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.1&amp;pid=2173100066&amp;adm=4756']);">
                                            <span class="review">穿上很舒适，走路很舒服，下次还会买！</span>
                                            <span class="author"> 来自于 培培 的评价
                                                <span class="date" data-date="1516257137"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173300004">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173300009.html" data-stat-aid="AA19458" data-stat-pid="2_32_2_179" target="_blank"
                                            data-log_code="31pchomearound_right_0002033#rid=419184330cbb5c382cc7884bdc153d44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.2&amp;pid=2173300004&amp;adm=4743"
                                            data-stat-id="AA19458+2_32_2_179" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19458+2_32_2_179', '//item.mi.com/1173300009.html', 'pcpid', '31pchomearound_right_0002033#rid=419184330cbb5c382cc7884bdc153d44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.2&amp;pid=2173300004&amp;adm=4743']);">
                                            <img src="/static/index/index/img/pms_1504857016.jpg" alt="90分金属登机箱 米家定制" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173300009.html" data-stat-aid="AA19458" data-stat-pid="2_32_2_179" data-log_code="31pchomearound_right_0002033#rid=419184330cbb5c382cc7884bdc153d44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.2&amp;pid=2173300004&amp;adm=4743"
                                            target="_blank" data-stat-id="AA19458+2_32_2_179" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19458+2_32_2_179', '//item.mi.com/1173300009.html', 'pcpid', '31pchomearound_right_0002033#rid=419184330cbb5c382cc7884bdc153d44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.2&amp;pid=2173300004&amp;adm=4743']);">90分金属登机箱 米家定制</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">999</span>元 </p>
                                    <p class="rank">505人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173300009.html" data-stat-aid="AA19458" data-stat-pid="2_32_2_179" data-log_code="31pchomearound_right_0002033#rid=419184330cbb5c382cc7884bdc153d44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.2&amp;pid=2173300004&amp;adm=4743"
                                            target="_blank" data-stat-id="AA19458+2_32_2_179" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19458+2_32_2_179', '//item.mi.com/1173300009.html', 'pcpid', '31pchomearound_right_0002033#rid=419184330cbb5c382cc7884bdc153d44&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.2&amp;pid=2173300004&amp;adm=4743']);">
                                            <span class="review">真心的给个好评，物超所值！</span>
                                            <span class="author"> 来自于 1162910481 的评价
                                                <span class="date" data-date="1514123455"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2180500032">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1180500029.html" data-stat-aid="AA19566" data-stat-pid="2_32_3_180" target="_blank"
                                            data-log_code="31pchomearound_right_0003033#rid=eaa4e199c9de07339134556ae466ea96&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.3&amp;pid=2180500032&amp;adm=4792"
                                            data-stat-id="AA19566+2_32_3_180" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19566+2_32_3_180', '//item.mi.com/1180500029.html', 'pcpid', '31pchomearound_right_0003033#rid=eaa4e199c9de07339134556ae466ea96&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.3&amp;pid=2180500032&amp;adm=4792']);">
                                            <img src="/static/index/index/img/pms_1517372151.jpg" alt="8H天竺棉针织件套 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1180500029.html" data-stat-aid="AA19566" data-stat-pid="2_32_3_180" data-log_code="31pchomearound_right_0003033#rid=eaa4e199c9de07339134556ae466ea96&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.3&amp;pid=2180500032&amp;adm=4792"
                                            target="_blank" data-stat-id="AA19566+2_32_3_180" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19566+2_32_3_180', '//item.mi.com/1180500029.html', 'pcpid', '31pchomearound_right_0003033#rid=eaa4e199c9de07339134556ae466ea96&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.3&amp;pid=2180500032&amp;adm=4792']);">8H天竺棉针织件套 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">239</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-new">新品</div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174400026">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174400054.html" data-stat-aid="AA18814" data-stat-pid="2_32_4_181" target="_blank"
                                            data-log_code="31pchomearound_right_0004033#rid=3b5aa90e2a617cac7cde0fa3e1ea94c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.4&amp;pid=2174400026&amp;adm=4399"
                                            data-stat-id="AA18814+2_32_4_181" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18814+2_32_4_181', '//item.mi.com/1174400054.html', 'pcpid', '31pchomearound_right_0004033#rid=3b5aa90e2a617cac7cde0fa3e1ea94c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.4&amp;pid=2174400026&amp;adm=4399']);">
                                            <img src="/static/index/index/img/pms_1510125643.jpg" alt="8H三曲线护颈记忆绵枕" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174400054.html" data-stat-aid="AA18814" data-stat-pid="2_32_4_181" data-log_code="31pchomearound_right_0004033#rid=3b5aa90e2a617cac7cde0fa3e1ea94c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.4&amp;pid=2174400026&amp;adm=4399"
                                            target="_blank" data-stat-id="AA18814+2_32_4_181" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18814+2_32_4_181', '//item.mi.com/1174400054.html', 'pcpid', '31pchomearound_right_0004033#rid=3b5aa90e2a617cac7cde0fa3e1ea94c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.4&amp;pid=2174400026&amp;adm=4399']);">8H三曲线护颈记忆绵枕</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">1325人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174400054.html" data-stat-aid="AA18814" data-stat-pid="2_32_4_181" data-log_code="31pchomearound_right_0004033#rid=3b5aa90e2a617cac7cde0fa3e1ea94c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.4&amp;pid=2174400026&amp;adm=4399"
                                            target="_blank" data-stat-id="AA18814+2_32_4_181" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18814+2_32_4_181', '//item.mi.com/1174400054.html', 'pcpid', '31pchomearound_right_0004033#rid=3b5aa90e2a617cac7cde0fa3e1ea94c9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.4&amp;pid=2174400026&amp;adm=4399']);">
                                            <span class="review">该死的失眠、我就不信治不了你。</span>
                                            <span class="author"> 来自于 卡农、 的评价
                                                <span class="date" data-date="1517225242"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174400027">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174400055.html" data-stat-aid="AA18815" data-stat-pid="2_32_5_182" target="_blank"
                                            data-log_code="31pchomearound_right_0005033#rid=9cbb05d52f3a5b7b5c69077994bc9196&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.5&amp;pid=2174400027&amp;adm=4400"
                                            data-stat-id="AA18815+2_32_5_182" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18815+2_32_5_182', '//item.mi.com/1174400055.html', 'pcpid', '31pchomearound_right_0005033#rid=9cbb05d52f3a5b7b5c69077994bc9196&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.5&amp;pid=2174400027&amp;adm=4400']);">
                                            <img src="/static/index/index/img/pms_1510124061.jpg" alt="8H蝶形护颈记忆绵枕" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174400055.html" data-stat-aid="AA18815" data-stat-pid="2_32_5_182" data-log_code="31pchomearound_right_0005033#rid=9cbb05d52f3a5b7b5c69077994bc9196&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.5&amp;pid=2174400027&amp;adm=4400"
                                            target="_blank" data-stat-id="AA18815+2_32_5_182" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18815+2_32_5_182', '//item.mi.com/1174400055.html', 'pcpid', '31pchomearound_right_0005033#rid=9cbb05d52f3a5b7b5c69077994bc9196&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.5&amp;pid=2174400027&amp;adm=4400']);">8H蝶形护颈记忆绵枕</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元 </p>
                                    <p class="rank">818人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174400055.html" data-stat-aid="AA18815" data-stat-pid="2_32_5_182" data-log_code="31pchomearound_right_0005033#rid=9cbb05d52f3a5b7b5c69077994bc9196&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.5&amp;pid=2174400027&amp;adm=4400"
                                            target="_blank" data-stat-id="AA18815+2_32_5_182" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18815+2_32_5_182', '//item.mi.com/1174400055.html', 'pcpid', '31pchomearound_right_0005033#rid=9cbb05d52f3a5b7b5c69077994bc9196&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.5&amp;pid=2174400027&amp;adm=4400']);">
                                            <span class="review">睡到凌晨三点多突然醒来买了个枕头，买完接着睡，我也不...</span>
                                            <span class="author"> 来自于 志昊 的评价
                                                <span class="date" data-date="1514186392"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2180400012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1180400014.html" data-stat-aid="AA19567" data-stat-pid="2_32_6_183" target="_blank"
                                            data-log_code="31pchomearound_right_0006033#rid=297e5de81f23b59d668f22772ae151d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.6&amp;pid=2180400012&amp;adm=4793"
                                            data-stat-id="AA19567+2_32_6_183" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19567+2_32_6_183', '//item.mi.com/1180400014.html', 'pcpid', '31pchomearound_right_0006033#rid=297e5de81f23b59d668f22772ae151d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.6&amp;pid=2180400012&amp;adm=4793']);">
                                            <img src="/static/index/index/img/pms_1517211290.jpg" alt="90分全天候机能背包更新版 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1180400014.html" data-stat-aid="AA19567" data-stat-pid="2_32_6_183" data-log_code="31pchomearound_right_0006033#rid=297e5de81f23b59d668f22772ae151d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.6&amp;pid=2180400012&amp;adm=4793"
                                            target="_blank" data-stat-id="AA19567+2_32_6_183" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19567+2_32_6_183', '//item.mi.com/1180400014.html', 'pcpid', '31pchomearound_right_0006033#rid=297e5de81f23b59d668f22772ae151d5&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.6&amp;pid=2180400012&amp;adm=4793']);">90分全天候机能背包更新版 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank"></p>
                                    <div class="flag flag-new">新品</div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173100006">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/toothbrush-set/?cfrom=search" data-stat-aid="AA18910" data-stat-pid="2_32_7_184"
                                            target="_blank" data-log_code="31pchomearound_right_0007033#rid=fb89a39e85661a68d7e9ff09314c91da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469"
                                            data-stat-id="AA18910+2_32_7_184" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18910+2_32_7_184', 'https://www.mi.com/toothbrush-set/cfrom=search', 'pcpid', '31pchomearound_right_0007033#rid=fb89a39e85661a68d7e9ff09314c91da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469']);">
                                            <img src="/static/index/index/img/pms_1502258923.jpg" alt="贝医生巴氏牙刷(四色装)" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/toothbrush-set/?cfrom=search" data-stat-aid="AA18910" data-stat-pid="2_32_7_184" data-log_code="31pchomearound_right_0007033#rid=fb89a39e85661a68d7e9ff09314c91da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469"
                                            target="_blank" data-stat-id="AA18910+2_32_7_184" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18910+2_32_7_184', 'https://www.mi.com/toothbrush-set/cfrom=search', 'pcpid', '31pchomearound_right_0007033#rid=fb89a39e85661a68d7e9ff09314c91da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469']);">贝医生巴氏牙刷(四色装)</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">39.9</span>元 </p>
                                    <p class="rank">8280人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/toothbrush-set/?cfrom=search" data-stat-aid="AA18910" data-stat-pid="2_32_7_184" data-log_code="31pchomearound_right_0007033#rid=fb89a39e85661a68d7e9ff09314c91da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469"
                                            target="_blank" data-stat-id="AA18910+2_32_7_184" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18910+2_32_7_184', 'https://www.mi.com/toothbrush-set/cfrom=search', 'pcpid', '31pchomearound_right_0007033#rid=fb89a39e85661a68d7e9ff09314c91da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469']);">
                                            <span class="review">不错，小巧，用着舒服，实惠</span>
                                            <span class="author"> 来自于 ✘沫☞☜逸✘ 的评价
                                                <span class="date" data-date="1513656272"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2173100039">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1173100102.html" class="exposure" data-stat-aid="AA18950" data-stat-pid="2_32_8_185" data-log_code="31pchomearound_right_0008033#rid=7c43921c572cb10d44a44c8ec0bbe231&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495"
                                            target="_blank" data-stat-id="AA18950+2_32_8_185" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18950+2_32_8_185', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_0008033#rid=7c43921c572cb10d44a44c8ec0bbe231&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495']);">
                                            <img src="/static/index/index/img/pms_1502097740.jpg" alt="8H乳胶弹簧静音床垫" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173100102.html" class="exposure" data-stat-aid="AA18950" data-stat-pid="2_32_8_185" data-log_code="31pchomearound_right_0008033#rid=7c43921c572cb10d44a44c8ec0bbe231&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495"
                                            target="_blank" data-stat-id="AA18950+2_32_8_185" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18950+2_32_8_185', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_0008033#rid=7c43921c572cb10d44a44c8ec0bbe231&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495']);">8H乳胶弹簧静音床垫</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">1599</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/24" target="_blank" data-stat-id="9eaf6b09c9f3089c" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-9eaf6b09c9f3089c', 'https://list.mi.com/24', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/24" target="_blank" data-stat-id="61fa070f2b3cd063" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-61fa070f2b3cd063', 'https://list.mi.com/24', 'pcpid', '']);">浏览更多
                                        <small>热门</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2175200029">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mask/?cfrom=search" data-stat-aid="AA19353" data-stat-pid="2_33_1_186" target="_blank"
                                            data-log_code="31pchomearound_right_1001034#rid=304f2ae6da1ab6df99c7e9c25d0ca4bc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.1&amp;pid=2175200029&amp;adm=4702"
                                            data-stat-id="AA19353+2_33_1_186" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19353+2_33_1_186', 'https://www.mi.com/mask/cfrom=search', 'pcpid', '31pchomearound_right_1001034#rid=304f2ae6da1ab6df99c7e9c25d0ca4bc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.1&amp;pid=2175200029&amp;adm=4702']);">
                                            <img src="/static/index/index/img/pms_1514354852.jpg" alt="霍尼韦尔新风口罩米家定制 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mask/?cfrom=search" data-stat-aid="AA19353" data-stat-pid="2_33_1_186" data-log_code="31pchomearound_right_1001034#rid=304f2ae6da1ab6df99c7e9c25d0ca4bc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.1&amp;pid=2175200029&amp;adm=4702"
                                            target="_blank" data-stat-id="AA19353+2_33_1_186" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19353+2_33_1_186', 'https://www.mi.com/mask/cfrom=search', 'pcpid', '31pchomearound_right_1001034#rid=304f2ae6da1ab6df99c7e9c25d0ca4bc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.1&amp;pid=2175200029&amp;adm=4702']);">霍尼韦尔新风口罩米家定制 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">249</span>元 </p>
                                    <p class="rank">27人评价</p>
                                    <div class="flag flag-new">新品</div>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mask/?cfrom=search" data-stat-aid="AA19353" data-stat-pid="2_33_1_186" data-log_code="31pchomearound_right_1001034#rid=304f2ae6da1ab6df99c7e9c25d0ca4bc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.1&amp;pid=2175200029&amp;adm=4702"
                                            target="_blank" data-stat-id="AA19353+2_33_1_186" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19353+2_33_1_186', 'https://www.mi.com/mask/cfrom=search', 'pcpid', '31pchomearound_right_1001034#rid=304f2ae6da1ab6df99c7e9c25d0ca4bc&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.1&amp;pid=2175200029&amp;adm=4702']);">
                                            <span class="review">戴上之后呼吸会比较困难，不过从另一个角度说明密封性好...</span>
                                            <span class="author"> 来自于 213689293 的评价
                                                <span class="date" data-date="1514986324"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173100069">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/mj-smartshoes/" data-stat-aid="AA18824" data-stat-pid="2_33_2_187" target="_blank"
                                            data-log_code="31pchomearound_right_1002034#rid=ea1c169ff4475ae6eb76e368e3805e13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.2&amp;pid=2173100069&amp;adm=4411"
                                            data-stat-id="AA18824+2_33_2_187" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18824+2_33_2_187', '//www.mi.com/mj-smartshoes/', 'pcpid', '31pchomearound_right_1002034#rid=ea1c169ff4475ae6eb76e368e3805e13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.2&amp;pid=2173100069&amp;adm=4411']);">
                                            <img src="/static/index/index/img/pms_1504778935.jpg" alt="米家运动鞋 男款 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/mj-smartshoes/" data-stat-aid="AA18824" data-stat-pid="2_33_2_187" data-log_code="31pchomearound_right_1002034#rid=ea1c169ff4475ae6eb76e368e3805e13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.2&amp;pid=2173100069&amp;adm=4411"
                                            target="_blank" data-stat-id="AA18824+2_33_2_187" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18824+2_33_2_187', '//www.mi.com/mj-smartshoes/', 'pcpid', '31pchomearound_right_1002034#rid=ea1c169ff4475ae6eb76e368e3805e13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.2&amp;pid=2173100069&amp;adm=4411']);">米家运动鞋 男款 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank">7955人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/mj-smartshoes/" data-stat-aid="AA18824" data-stat-pid="2_33_2_187" data-log_code="31pchomearound_right_1002034#rid=ea1c169ff4475ae6eb76e368e3805e13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.2&amp;pid=2173100069&amp;adm=4411"
                                            target="_blank" data-stat-id="AA18824+2_33_2_187" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18824+2_33_2_187', '//www.mi.com/mj-smartshoes/', 'pcpid', '31pchomearound_right_1002034#rid=ea1c169ff4475ae6eb76e368e3805e13&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.2&amp;pid=2173100069&amp;adm=4411']);">
                                            <span class="review">我喜欢 春天的花 夏天的树 秋天的黄昏 冬天的阳光 ...
                                            </span>
                                            <span class="author"> 来自于 Mr.2 的评价
                                                <span class="date" data-date="1513219791"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2155100009">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1155100012.html" data-stat-aid="AA19354" data-stat-pid="2_33_3_188" target="_blank"
                                            data-log_code="31pchomearound_right_1003034#rid=0cbcfcb13e709c7c796d9004eb450404&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.3&amp;pid=2155100009&amp;adm=4703"
                                            data-stat-id="AA19354+2_33_3_188" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19354+2_33_3_188', '//item.mi.com/1155100012.html', 'pcpid', '31pchomearound_right_1003034#rid=0cbcfcb13e709c7c796d9004eb450404&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.3&amp;pid=2155100009&amp;adm=4703']);">
                                            <img src="/static/index/index/img/T1PHVjBXxv1RXrhCrK220x220.jpg" alt="90分旅行箱 24寸 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1155100012.html" data-stat-aid="AA19354" data-stat-pid="2_33_3_188" data-log_code="31pchomearound_right_1003034#rid=0cbcfcb13e709c7c796d9004eb450404&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.3&amp;pid=2155100009&amp;adm=4703"
                                            target="_blank" data-stat-id="AA19354+2_33_3_188" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19354+2_33_3_188', '//item.mi.com/1155100012.html', 'pcpid', '31pchomearound_right_1003034#rid=0cbcfcb13e709c7c796d9004eb450404&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.3&amp;pid=2155100009&amp;adm=4703']);">90分旅行箱 24寸 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">349</span>元 </p>
                                    <p class="rank">2.7万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1155100012.html" data-stat-aid="AA19354" data-stat-pid="2_33_3_188" data-log_code="31pchomearound_right_1003034#rid=0cbcfcb13e709c7c796d9004eb450404&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.3&amp;pid=2155100009&amp;adm=4703"
                                            target="_blank" data-stat-id="AA19354+2_33_3_188" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19354+2_33_3_188', '//item.mi.com/1155100012.html', 'pcpid', '31pchomearound_right_1003034#rid=0cbcfcb13e709c7c796d9004eb450404&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.3&amp;pid=2155100009&amp;adm=4703']);">
                                            <span class="review">超爱小米还有那可爱的客服妹子，给首藏头诗呗，爱你玉玉</span>
                                            <span class="author"> 来自于 1187439455 的评价
                                                <span class="date" data-date="1504067005"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173100054">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/plateshoes/" data-stat-aid="AA18826" data-stat-pid="2_33_4_189" target="_blank"
                                            data-log_code="31pchomearound_right_1004034#rid=ff1c1b565044f527d69790f67892023f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413"
                                            data-stat-id="AA18826+2_33_4_189" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18826+2_33_4_189', 'https://www.mi.com/plateshoes/', 'pcpid', '31pchomearound_right_1004034#rid=ff1c1b565044f527d69790f67892023f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413']);">
                                            <img src="/static/index/index/img/pms_1504510139.jpg" alt="Free Tie真皮板鞋 米家定制" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/plateshoes/" data-stat-aid="AA18826" data-stat-pid="2_33_4_189" data-log_code="31pchomearound_right_1004034#rid=ff1c1b565044f527d69790f67892023f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413"
                                            target="_blank" data-stat-id="AA18826+2_33_4_189" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18826+2_33_4_189', 'https://www.mi.com/plateshoes/', 'pcpid', '31pchomearound_right_1004034#rid=ff1c1b565044f527d69790f67892023f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413']);">Free Tie真皮板鞋 米家定制</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank">1.1万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/plateshoes/" data-stat-aid="AA18826" data-stat-pid="2_33_4_189" data-log_code="31pchomearound_right_1004034#rid=ff1c1b565044f527d69790f67892023f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413"
                                            target="_blank" data-stat-id="AA18826+2_33_4_189" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18826+2_33_4_189', 'https://www.mi.com/plateshoes/', 'pcpid', '31pchomearound_right_1004034#rid=ff1c1b565044f527d69790f67892023f&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413']);">
                                            <span class="review">质量没问题，穿上很舒服，充分体现出了板鞋所拥有的一切...</span>
                                            <span class="author"> 来自于 哥特式↗吻鑫 的评价
                                                <span class="date" data-date="1509061141"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161100001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1161100002.html" data-stat-aid="AA19497" data-stat-pid="2_33_5_190" target="_blank"
                                            data-log_code="31pchomearound_right_1005034#rid=4b86c84c22c86447538b6b565c2cff9e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763"
                                            data-stat-id="AA19497+2_33_5_190" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19497+2_33_5_190', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_1005034#rid=4b86c84c22c86447538b6b565c2cff9e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763']);">
                                            <img src="/static/index/index/img/T1DuxvB4D_1RXrhCrK220x220.jpg" alt="小米经典商务双肩包 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1161100002.html" data-stat-aid="AA19497" data-stat-pid="2_33_5_190" data-log_code="31pchomearound_right_1005034#rid=4b86c84c22c86447538b6b565c2cff9e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763"
                                            target="_blank" data-stat-id="AA19497+2_33_5_190" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19497+2_33_5_190', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_1005034#rid=4b86c84c22c86447538b6b565c2cff9e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763']);">小米经典商务双肩包 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">1.6万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1161100002.html" data-stat-aid="AA19497" data-stat-pid="2_33_5_190" data-log_code="31pchomearound_right_1005034#rid=4b86c84c22c86447538b6b565c2cff9e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763"
                                            target="_blank" data-stat-id="AA19497+2_33_5_190" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19497+2_33_5_190', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_1005034#rid=4b86c84c22c86447538b6b565c2cff9e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763']);">
                                            <span class="review">这包真不错，值了！竟然还防水，，就像我的小米6一样！...</span>
                                            <span class="author"> 来自于 刘斌 的评价
                                                <span class="date" data-date="1497146730"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172800033">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172800047.html" data-stat-aid="AA18828" data-stat-pid="2_33_6_191" target="_blank"
                                            data-log_code="31pchomearound_right_1006034#rid=5bc2fa123dd48eeba3044339f0694fa1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415"
                                            data-stat-id="AA18828+2_33_6_191" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18828+2_33_6_191', '//item.mi.com/1172800047.html', 'pcpid', '31pchomearound_right_1006034#rid=5bc2fa123dd48eeba3044339f0694fa1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415']);">
                                            <img src="/static/index/index/img/pms_1500282577.jpg" alt="TS偏光太阳镜   米家定制" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172800047.html" data-stat-aid="AA18828" data-stat-pid="2_33_6_191" data-log_code="31pchomearound_right_1006034#rid=5bc2fa123dd48eeba3044339f0694fa1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415"
                                            target="_blank" data-stat-id="AA18828+2_33_6_191" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18828+2_33_6_191', '//item.mi.com/1172800047.html', 'pcpid', '31pchomearound_right_1006034#rid=5bc2fa123dd48eeba3044339f0694fa1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415']);">TS偏光太阳镜 米家定制</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">5684人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172800047.html" data-stat-aid="AA18828" data-stat-pid="2_33_6_191" data-log_code="31pchomearound_right_1006034#rid=5bc2fa123dd48eeba3044339f0694fa1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415"
                                            target="_blank" data-stat-id="AA18828+2_33_6_191" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18828+2_33_6_191', '//item.mi.com/1172800047.html', 'pcpid', '31pchomearound_right_1006034#rid=5bc2fa123dd48eeba3044339f0694fa1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415']);">
                                            <span class="review">小米眼镜收到了，我把客服妹子撩： 在下型男无女票，能...
                                            </span>
                                            <span class="author"> 来自于 云等风来 的评价
                                                <span class="date" data-date="1503245038"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171500027">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/ts-sunglasses/" data-stat-aid="AA18829" data-stat-pid="2_33_7_192" target="_blank"
                                            data-log_code="31pchomearound_right_1007034#rid=135c21ee1fc92d384dc2b61ba7b56325&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.7&amp;pid=2171500027&amp;adm=4416"
                                            data-stat-id="AA18829+2_33_7_192" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18829+2_33_7_192', '//www.mi.com/ts-sunglasses/', 'pcpid', '31pchomearound_right_1007034#rid=135c21ee1fc92d384dc2b61ba7b56325&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.7&amp;pid=2171500027&amp;adm=4416']);">
                                            <img src="/static/index/index/img/pms_1492999959.jpg" alt="TS尼龙偏光太阳镜 米家定制" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/ts-sunglasses/" data-stat-aid="AA18829" data-stat-pid="2_33_7_192" data-log_code="31pchomearound_right_1007034#rid=135c21ee1fc92d384dc2b61ba7b56325&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.7&amp;pid=2171500027&amp;adm=4416"
                                            target="_blank" data-stat-id="AA18829+2_33_7_192" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18829+2_33_7_192', '//www.mi.com/ts-sunglasses/', 'pcpid', '31pchomearound_right_1007034#rid=135c21ee1fc92d384dc2b61ba7b56325&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.7&amp;pid=2171500027&amp;adm=4416']);">TS尼龙偏光太阳镜 米家定制</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank">1.2万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/ts-sunglasses/" data-stat-aid="AA18829" data-stat-pid="2_33_7_192" data-log_code="31pchomearound_right_1007034#rid=135c21ee1fc92d384dc2b61ba7b56325&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.7&amp;pid=2171500027&amp;adm=4416"
                                            target="_blank" data-stat-id="AA18829+2_33_7_192" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18829+2_33_7_192', '//www.mi.com/ts-sunglasses/', 'pcpid', '31pchomearound_right_1007034#rid=135c21ee1fc92d384dc2b61ba7b56325&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.7&amp;pid=2171500027&amp;adm=4416']);">
                                            <span class="review">镜片无划痕，镜框对称，鼻梁垫有些许偏已手动调好，重量...</span>
                                            <span class="author"> 来自于 小鑫鑫 的评价
                                                <span class="date" data-date="1502618773"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2164200027">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1164200035.html" class="exposure" data-stat-aid="AA18830" data-stat-pid="2_33_8_193" data-log_code="31pchomearound_right_1008034#rid=2d6c18bbbcc8a10497c3649ae66af6da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.8&amp;pid=2164200027&amp;adm=4417"
                                            target="_blank" data-stat-id="AA18830+2_33_8_193" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18830+2_33_8_193', '//item.mi.com/1164200035.html', 'pcpid', '31pchomearound_right_1008034#rid=2d6c18bbbcc8a10497c3649ae66af6da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.8&amp;pid=2164200027&amp;adm=4417']);">
                                            <img src="/static/index/index/img/pms_1478762755.jpg" alt="小米纪念款围巾（去探索）" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164200035.html" class="exposure" data-stat-aid="AA18830" data-stat-pid="2_33_8_193" data-log_code="31pchomearound_right_1008034#rid=2d6c18bbbcc8a10497c3649ae66af6da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.8&amp;pid=2164200027&amp;adm=4417"
                                            target="_blank" data-stat-id="AA18830+2_33_8_193" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18830+2_33_8_193', '//item.mi.com/1164200035.html', 'pcpid', '31pchomearound_right_1008034#rid=2d6c18bbbcc8a10497c3649ae66af6da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030352.8&amp;pid=2164200027&amp;adm=4417']);">小米纪念款围巾（去探索）</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">129</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/22" target="_blank" data-stat-id="e1bd8b0a91ce28ff" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e1bd8b0a91ce28ff', '//list.mi.com/22', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/22" target="_blank" data-stat-id="22dea670c8440e93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-22dea670c8440e93', '//list.mi.com/22', 'pcpid', '']);">浏览更多
                                        <small>出行</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2163500007">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/pillowZ2/" data-stat-aid="AA18831" data-stat-pid="2_34_1_194" target="_blank"
                                            data-log_code="31pchomearound_right_2001035#rid=1a4ef4b263fdf6f2936fbe5711fd9c89&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418"
                                            data-stat-id="AA18831+2_34_1_194" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18831+2_34_1_194', '//www.mi.com/pillowZ2/', 'pcpid', '31pchomearound_right_2001035#rid=1a4ef4b263fdf6f2936fbe5711fd9c89&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418']);">
                                            <img src="/static/index/index/img/pms_1472711253.jpg" alt="8H护颈乳胶枕" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/pillowZ2/" data-stat-aid="AA18831" data-stat-pid="2_34_1_194" data-log_code="31pchomearound_right_2001035#rid=1a4ef4b263fdf6f2936fbe5711fd9c89&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418"
                                            target="_blank" data-stat-id="AA18831+2_34_1_194" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18831+2_34_1_194', '//www.mi.com/pillowZ2/', 'pcpid', '31pchomearound_right_2001035#rid=1a4ef4b263fdf6f2936fbe5711fd9c89&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418']);">8H护颈乳胶枕</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">239</span>元 </p>
                                    <p class="rank">1.8万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/pillowZ2/" data-stat-aid="AA18831" data-stat-pid="2_34_1_194" data-log_code="31pchomearound_right_2001035#rid=1a4ef4b263fdf6f2936fbe5711fd9c89&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418"
                                            target="_blank" data-stat-id="AA18831+2_34_1_194" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18831+2_34_1_194', '//www.mi.com/pillowZ2/', 'pcpid', '31pchomearound_right_2001035#rid=1a4ef4b263fdf6f2936fbe5711fd9c89&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418']);">
                                            <span class="review">评价之后会不会有抠脚大汉冒充妹子回复啊，还没有用，感...</span>
                                            <span class="author"> 来自于 冯虎 的评价
                                                <span class="date" data-date="1490034347"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2163500006">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/pillowZ1/" data-stat-aid="AA18832" data-stat-pid="2_34_2_195" target="_blank"
                                            data-log_code="31pchomearound_right_2002035#rid=5ae2740b5ed982357236e86a83e5fc47&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419"
                                            data-stat-id="AA18832+2_34_2_195" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18832+2_34_2_195', '//www.mi.com/pillowZ1/', 'pcpid', '31pchomearound_right_2002035#rid=5ae2740b5ed982357236e86a83e5fc47&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419']);">
                                            <img src="/static/index/index/img/pms_1472710764.jpg" alt="8H标准乳胶枕" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/pillowZ1/" data-stat-aid="AA18832" data-stat-pid="2_34_2_195" data-log_code="31pchomearound_right_2002035#rid=5ae2740b5ed982357236e86a83e5fc47&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419"
                                            target="_blank" data-stat-id="AA18832+2_34_2_195" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18832+2_34_2_195', '//www.mi.com/pillowZ1/', 'pcpid', '31pchomearound_right_2002035#rid=5ae2740b5ed982357236e86a83e5fc47&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419']);">8H标准乳胶枕</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">159</span>元 </p>
                                    <p class="rank">9989人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/pillowZ1/" data-stat-aid="AA18832" data-stat-pid="2_34_2_195" data-log_code="31pchomearound_right_2002035#rid=5ae2740b5ed982357236e86a83e5fc47&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419"
                                            target="_blank" data-stat-id="AA18832+2_34_2_195" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18832+2_34_2_195', '//www.mi.com/pillowZ1/', 'pcpid', '31pchomearound_right_2002035#rid=5ae2740b5ed982357236e86a83e5fc47&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419']);">
                                            <span class="review">听说客服妹子很美，我想知道到底有多美！</span>
                                            <span class="author"> 来自于 〆貓ɑ? 的评价
                                                <span class="date" data-date="1491829017"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164700026">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1164700048.html" data-stat-aid="AA18833" data-stat-pid="2_34_3_196" target="_blank"
                                            data-log_code="31pchomearound_right_2003035#rid=6bb3ddb35a428ce63e0b91bdeba53610&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420"
                                            data-stat-id="AA18833+2_34_3_196" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18833+2_34_3_196', '//item.mi.com/1164700048.html', 'pcpid', '31pchomearound_right_2003035#rid=6bb3ddb35a428ce63e0b91bdeba53610&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420']);">
                                            <img src="/static/index/index/img/pms_1481178479.jpg" alt="8H多功能护颈枕U1" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164700048.html" data-stat-aid="AA18833" data-stat-pid="2_34_3_196" data-log_code="31pchomearound_right_2003035#rid=6bb3ddb35a428ce63e0b91bdeba53610&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420"
                                            target="_blank" data-stat-id="AA18833+2_34_3_196" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18833+2_34_3_196', '//item.mi.com/1164700048.html', 'pcpid', '31pchomearound_right_2003035#rid=6bb3ddb35a428ce63e0b91bdeba53610&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420']);">8H多功能护颈枕U1</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">79</span>元 </p>
                                    <p class="rank">7252人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164700048.html" data-stat-aid="AA18833" data-stat-pid="2_34_3_196" data-log_code="31pchomearound_right_2003035#rid=6bb3ddb35a428ce63e0b91bdeba53610&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420"
                                            target="_blank" data-stat-id="AA18833+2_34_3_196" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18833+2_34_3_196', '//item.mi.com/1164700048.html', 'pcpid', '31pchomearound_right_2003035#rid=6bb3ddb35a428ce63e0b91bdeba53610&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420']);">
                                            <span class="review">客服妹子。情哥哥来了。出来。能把评价没评价的永久保留...</span>
                                            <span class="author"> 来自于 奋斗de帅王 的评价
                                                <span class="date" data-date="1482483333"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173100041">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173100102.html" data-stat-aid="AA18834" data-stat-pid="2_34_4_197" target="_blank"
                                            data-log_code="31pchomearound_right_2004035#rid=bdf2c6ee06171b7a9e239174185a6406&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421"
                                            data-stat-id="AA18834+2_34_4_197" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18834+2_34_4_197', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_2004035#rid=bdf2c6ee06171b7a9e239174185a6406&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421']);">
                                            <img src="/static/index/index/img/pms_1502097740.jpg" alt="8H乳胶弹簧静音床垫" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173100102.html" data-stat-aid="AA18834" data-stat-pid="2_34_4_197" data-log_code="31pchomearound_right_2004035#rid=bdf2c6ee06171b7a9e239174185a6406&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421"
                                            target="_blank" data-stat-id="AA18834+2_34_4_197" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18834+2_34_4_197', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_2004035#rid=bdf2c6ee06171b7a9e239174185a6406&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421']);">8H乳胶弹簧静音床垫</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">1899</span>元 </p>
                                    <p class="rank">233人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173100102.html" data-stat-aid="AA18834" data-stat-pid="2_34_4_197" data-log_code="31pchomearound_right_2004035#rid=bdf2c6ee06171b7a9e239174185a6406&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421"
                                            target="_blank" data-stat-id="AA18834+2_34_4_197" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18834+2_34_4_197', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_2004035#rid=bdf2c6ee06171b7a9e239174185a6406&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421']);">
                                            <span class="review">送货速度很快，物流小哥服务也很周到。床垫创意十足，将...</span>
                                            <span class="author"> 来自于 TracyTu 的评价
                                                <span class="date" data-date="1512176269"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171700007">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1171700009.html" data-stat-aid="AA18835" data-stat-pid="2_34_5_198" target="_blank"
                                            data-log_code="31pchomearound_right_2005035#rid=d0d209e1032f326310c926c632510799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422"
                                            data-stat-id="AA18835+2_34_5_198" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18835+2_34_5_198', '//item.mi.com/1171700009.html', 'pcpid', '31pchomearound_right_2005035#rid=d0d209e1032f326310c926c632510799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422']);">
                                            <img src="/static/index/index/img/pms_1493030484.jpg" alt="8H乳胶床垫" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1171700009.html" data-stat-aid="AA18835" data-stat-pid="2_34_5_198" data-log_code="31pchomearound_right_2005035#rid=d0d209e1032f326310c926c632510799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422"
                                            target="_blank" data-stat-id="AA18835+2_34_5_198" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18835+2_34_5_198', '//item.mi.com/1171700009.html', 'pcpid', '31pchomearound_right_2005035#rid=d0d209e1032f326310c926c632510799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422']);">8H乳胶床垫</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">999</span>元 </p>
                                    <p class="rank">2414人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1171700009.html" data-stat-aid="AA18835" data-stat-pid="2_34_5_198" data-log_code="31pchomearound_right_2005035#rid=d0d209e1032f326310c926c632510799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422"
                                            target="_blank" data-stat-id="AA18835+2_34_5_198" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18835+2_34_5_198', '//item.mi.com/1171700009.html', 'pcpid', '31pchomearound_right_2005035#rid=d0d209e1032f326310c926c632510799&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422']);">
                                            <span class="review">外观大气，一看就是品质货，舒服，软硬适中，个人感觉对...</span>
                                            <span class="author"> 来自于 威猛掉渣天 的评价
                                                <span class="date" data-date="1505185531"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2173000004">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1173000015.html" data-stat-aid="AA18836" data-stat-pid="2_34_6_199" target="_blank"
                                            data-log_code="31pchomearound_right_2006035#rid=56fc4dd799fec2d8ba39f49aa5fbcf56&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423"
                                            data-stat-id="AA18836+2_34_6_199" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18836+2_34_6_199', '//item.mi.com/1173000015.html', 'pcpid', '31pchomearound_right_2006035#rid=56fc4dd799fec2d8ba39f49aa5fbcf56&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423']);">
                                            <img src="/static/index/index/img/pms_1502195257.jpg" alt="8H懒人舒适沙发 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173000015.html" data-stat-aid="AA18836" data-stat-pid="2_34_6_199" data-log_code="31pchomearound_right_2006035#rid=56fc4dd799fec2d8ba39f49aa5fbcf56&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423"
                                            target="_blank" data-stat-id="AA18836+2_34_6_199" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18836+2_34_6_199', '//item.mi.com/1173000015.html', 'pcpid', '31pchomearound_right_2006035#rid=56fc4dd799fec2d8ba39f49aa5fbcf56&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423']);">8H懒人舒适沙发 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">649</span>元 </p>
                                    <p class="rank">115人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1173000015.html" data-stat-aid="AA18836" data-stat-pid="2_34_6_199" data-log_code="31pchomearound_right_2006035#rid=56fc4dd799fec2d8ba39f49aa5fbcf56&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423"
                                            target="_blank" data-stat-id="AA18836+2_34_6_199" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18836+2_34_6_199', '//item.mi.com/1173000015.html', 'pcpid', '31pchomearound_right_2006035#rid=56fc4dd799fec2d8ba39f49aa5fbcf56&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423']);">
                                            <span class="review">谢谢收到了</span>
                                            <span class="author"> 来自于 毛盛 的评价
                                                <span class="date" data-date="1510364376"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174200012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1174200018.html" data-stat-aid="AA18837" data-stat-pid="2_34_7_200" target="_blank"
                                            data-log_code="31pchomearound_right_2007035#rid=6ed8aa80baf2e6af9df30fa3d55316ba&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.7&amp;pid=2174200012&amp;adm=4424"
                                            data-stat-id="AA18837+2_34_7_200" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18837+2_34_7_200', '//item.mi.com/1174200018.html', 'pcpid', '31pchomearound_right_2007035#rid=6ed8aa80baf2e6af9df30fa3d55316ba&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.7&amp;pid=2174200012&amp;adm=4424']);">
                                            <img src="/static/index/index/img/pms_1509330056.jpg" alt="8H学生床垫" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174200018.html" data-stat-aid="AA18837" data-stat-pid="2_34_7_200" data-log_code="31pchomearound_right_2007035#rid=6ed8aa80baf2e6af9df30fa3d55316ba&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.7&amp;pid=2174200012&amp;adm=4424"
                                            target="_blank" data-stat-id="AA18837+2_34_7_200" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18837+2_34_7_200', '//item.mi.com/1174200018.html', 'pcpid', '31pchomearound_right_2007035#rid=6ed8aa80baf2e6af9df30fa3d55316ba&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.7&amp;pid=2174200012&amp;adm=4424']);">8H学生床垫</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">599</span>元 </p>
                                    <p class="rank">91人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1174200018.html" data-stat-aid="AA18837" data-stat-pid="2_34_7_200" data-log_code="31pchomearound_right_2007035#rid=6ed8aa80baf2e6af9df30fa3d55316ba&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.7&amp;pid=2174200012&amp;adm=4424"
                                            target="_blank" data-stat-id="AA18837+2_34_7_200" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18837+2_34_7_200', '//item.mi.com/1174200018.html', 'pcpid', '31pchomearound_right_2007035#rid=6ed8aa80baf2e6af9df30fa3d55316ba&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.7&amp;pid=2174200012&amp;adm=4424']);">
                                            <span class="review">给女儿买的，非常不错，太厚了</span>
                                            <span class="author"> 来自于 琴琴 的评价
                                                <span class="date" data-date="1510315766"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2174200015">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174200021.html" class="exposure" data-stat-aid="AA18838" data-stat-pid="2_34_8_201" data-log_code="31pchomearound_right_2008035#rid=5a14c8366e0c4b68acd6fdf8884b9af1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425"
                                            target="_blank" data-stat-id="AA18838+2_34_8_201" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18838+2_34_8_201', '//item.mi.com/1174200021.html', 'pcpid', '31pchomearound_right_2008035#rid=5a14c8366e0c4b68acd6fdf8884b9af1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425']);">
                                            <img src="/static/index/index/img/pms_1508820001.jpg" alt="8H鹅绒被 " width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174200021.html" class="exposure" data-stat-aid="AA18838" data-stat-pid="2_34_8_201" data-log_code="31pchomearound_right_2008035#rid=5a14c8366e0c4b68acd6fdf8884b9af1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425"
                                            target="_blank" data-stat-id="AA18838+2_34_8_201" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18838+2_34_8_201', '//item.mi.com/1174200021.html', 'pcpid', '31pchomearound_right_2008035#rid=5a14c8366e0c4b68acd6fdf8884b9af1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425']);">8H鹅绒被 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">1599</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://search.mi.com/search_%E4%B9%B3%E8%83%B6" target="_blank" data-stat-id="da56da31e78041cd" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-da56da31e78041cd', 'https://search.mi.com/search_E4B9B3E883B6', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://search.mi.com/search_%E4%B9%B3%E8%83%B6" target="_blank" data-stat-id="fc29fc71e40da370" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fc29fc71e40da370', 'https://search.mi.com/search_E4B9B3E883B6', 'pcpid', '']);">浏览更多
                                        <small>居家</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2172900003">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/anti-blue-glasses/" data-stat-aid="AA18841" data-stat-pid="2_35_1_202" target="_blank"
                                            data-log_code="31pchomearound_right_3001036#rid=e673293c58a1b4f4ea580a0be523ac7b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.1&amp;pid=2172900003&amp;adm=4426"
                                            data-stat-id="AA18841+2_35_1_202" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18841+2_35_1_202', '//www.mi.com/anti-blue-glasses/', 'pcpid', '31pchomearound_right_3001036#rid=e673293c58a1b4f4ea580a0be523ac7b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.1&amp;pid=2172900003&amp;adm=4426']);">
                                            <img src="/static/index/index/img/pms_1502092431.jpg" alt="TS防蓝光眼镜  米家定制" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/anti-blue-glasses/" data-stat-aid="AA18841" data-stat-pid="2_35_1_202" data-log_code="31pchomearound_right_3001036#rid=e673293c58a1b4f4ea580a0be523ac7b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.1&amp;pid=2172900003&amp;adm=4426"
                                            target="_blank" data-stat-id="AA18841+2_35_1_202" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18841+2_35_1_202', '//www.mi.com/anti-blue-glasses/', 'pcpid', '31pchomearound_right_3001036#rid=e673293c58a1b4f4ea580a0be523ac7b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.1&amp;pid=2172900003&amp;adm=4426']);">TS防蓝光眼镜 米家定制</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">9902人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/anti-blue-glasses/" data-stat-aid="AA18841" data-stat-pid="2_35_1_202" data-log_code="31pchomearound_right_3001036#rid=e673293c58a1b4f4ea580a0be523ac7b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.1&amp;pid=2172900003&amp;adm=4426"
                                            target="_blank" data-stat-id="AA18841+2_35_1_202" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18841+2_35_1_202', '//www.mi.com/anti-blue-glasses/', 'pcpid', '31pchomearound_right_3001036#rid=e673293c58a1b4f4ea580a0be523ac7b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.1&amp;pid=2172900003&amp;adm=4426']);">
                                            <span class="review">把头发梳成大人模样 再穿上一身帅气西装 戴上我的黑色...
                                            </span>
                                            <span class="author"> 来自于 何海洋 的评价
                                                <span class="date" data-date="1503932204"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174200045">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/ts-spectacle-frame/" data-stat-aid="AA18842" data-stat-pid="2_35_2_203" target="_blank"
                                            data-log_code="31pchomearound_right_3002036#rid=d23b8b9ae3f288b45614c4b91b521e32&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427"
                                            data-stat-id="AA18842+2_35_2_203" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18842+2_35_2_203', 'https://www.mi.com/ts-spectacle-frame/', 'pcpid', '31pchomearound_right_3002036#rid=d23b8b9ae3f288b45614c4b91b521e32&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427']);">
                                            <img src="/static/index/index/img/pms_1508483196.jpg" alt="TS眼镜架 米家定制" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/ts-spectacle-frame/" data-stat-aid="AA18842" data-stat-pid="2_35_2_203" data-log_code="31pchomearound_right_3002036#rid=d23b8b9ae3f288b45614c4b91b521e32&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427"
                                            target="_blank" data-stat-id="AA18842+2_35_2_203" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18842+2_35_2_203', 'https://www.mi.com/ts-spectacle-frame/', 'pcpid', '31pchomearound_right_3002036#rid=d23b8b9ae3f288b45614c4b91b521e32&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427']);">TS眼镜架 米家定制</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">249</span>元 </p>
                                    <p class="rank">684人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/ts-spectacle-frame/" data-stat-aid="AA18842" data-stat-pid="2_35_2_203" data-log_code="31pchomearound_right_3002036#rid=d23b8b9ae3f288b45614c4b91b521e32&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427"
                                            target="_blank" data-stat-id="AA18842+2_35_2_203" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18842+2_35_2_203', 'https://www.mi.com/ts-spectacle-frame/', 'pcpid', '31pchomearound_right_3002036#rid=d23b8b9ae3f288b45614c4b91b521e32&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427']);">
                                            <span class="review">喜欢</span>
                                            <span class="author"> 来自于 Wolf peng 的评价
                                                <span class="date" data-date="1516964597"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2174300003">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/anti-kids-glasses/" data-stat-aid="AA18843" data-stat-pid="2_35_3_204" target="_blank"
                                            data-log_code="31pchomearound_right_3003036#rid=5d6712cdadc68fe514fb30b04f4dd807&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428"
                                            data-stat-id="AA18843+2_35_3_204" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18843+2_35_3_204', '//www.mi.com/anti-kids-glasses/', 'pcpid', '31pchomearound_right_3003036#rid=5d6712cdadc68fe514fb30b04f4dd807&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428']);">
                                            <img src="/static/index/index/img/pms_1508744600.jpg" alt="TS儿童防蓝光护目镜 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/anti-kids-glasses/" data-stat-aid="AA18843" data-stat-pid="2_35_3_204" data-log_code="31pchomearound_right_3003036#rid=5d6712cdadc68fe514fb30b04f4dd807&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428"
                                            target="_blank" data-stat-id="AA18843+2_35_3_204" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18843+2_35_3_204', '//www.mi.com/anti-kids-glasses/', 'pcpid', '31pchomearound_right_3003036#rid=5d6712cdadc68fe514fb30b04f4dd807&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428']);">TS儿童防蓝光护目镜 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank">614人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/anti-kids-glasses/" data-stat-aid="AA18843" data-stat-pid="2_35_3_204" data-log_code="31pchomearound_right_3003036#rid=5d6712cdadc68fe514fb30b04f4dd807&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428"
                                            target="_blank" data-stat-id="AA18843+2_35_3_204" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18843+2_35_3_204', '//www.mi.com/anti-kids-glasses/', 'pcpid', '31pchomearound_right_3003036#rid=5d6712cdadc68fe514fb30b04f4dd807&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428']);">
                                            <span class="review">四岁宝宝带挺可爱的，希望能有效果</span>
                                            <span class="author"> 来自于 1052405522 的评价
                                                <span class="date" data-date="1514095124"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164700010">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1164700014.html" data-stat-aid="AA18844" data-stat-pid="2_35_4_205" target="_blank"
                                            data-log_code="31pchomearound_right_3004036#rid=89ad6a32e6068ad89773c61f7ac52bb6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429"
                                            data-stat-id="AA18844+2_35_4_205" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18844+2_35_4_205', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_3004036#rid=89ad6a32e6068ad89773c61f7ac52bb6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429']);">
                                            <img src="/static/index/index/img/pms_1479972875.jpg" alt="最生活毛巾·青春系列 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164700014.html" data-stat-aid="AA18844" data-stat-pid="2_35_4_205" data-log_code="31pchomearound_right_3004036#rid=89ad6a32e6068ad89773c61f7ac52bb6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429"
                                            target="_blank" data-stat-id="AA18844+2_35_4_205" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18844+2_35_4_205', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_3004036#rid=89ad6a32e6068ad89773c61f7ac52bb6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429']);">最生活毛巾·青春系列 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">19.9</span>元 </p>
                                    <p class="rank">6万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164700014.html" data-stat-aid="AA18844" data-stat-pid="2_35_4_205" data-log_code="31pchomearound_right_3004036#rid=89ad6a32e6068ad89773c61f7ac52bb6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429"
                                            target="_blank" data-stat-id="AA18844+2_35_4_205" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18844+2_35_4_205', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_3004036#rid=89ad6a32e6068ad89773c61f7ac52bb6&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429']);">
                                            <span class="review">买了这么多 客服妹子还不出现～</span>
                                            <span class="author"> 来自于 艺凡 的评价
                                                <span class="date" data-date="1512649960"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2164700016">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1164700020.html" data-stat-aid="AA18845" data-stat-pid="2_35_5_206" target="_blank"
                                            data-log_code="31pchomearound_right_3005036#rid=d7980617d4b612d66ddcdc83723c0f2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430"
                                            data-stat-id="AA18845+2_35_5_206" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18845+2_35_5_206', '//item.mi.com/1164700020.html', 'pcpid', '31pchomearound_right_3005036#rid=d7980617d4b612d66ddcdc83723c0f2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430']);">
                                            <img src="/static/index/index/img/pms_1479972928.jpg" alt="最生活浴巾·青春系列" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1164700020.html" data-stat-aid="AA18845" data-stat-pid="2_35_5_206" data-log_code="31pchomearound_right_3005036#rid=d7980617d4b612d66ddcdc83723c0f2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430"
                                            target="_blank" data-stat-id="AA18845+2_35_5_206" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18845+2_35_5_206', '//item.mi.com/1164700020.html', 'pcpid', '31pchomearound_right_3005036#rid=d7980617d4b612d66ddcdc83723c0f2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430']);">最生活浴巾·青春系列</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">4095人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1164700020.html" data-stat-aid="AA18845" data-stat-pid="2_35_5_206" data-log_code="31pchomearound_right_3005036#rid=d7980617d4b612d66ddcdc83723c0f2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430"
                                            target="_blank" data-stat-id="AA18845+2_35_5_206" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18845+2_35_5_206', '//item.mi.com/1164700020.html', 'pcpid', '31pchomearound_right_3005036#rid=d7980617d4b612d66ddcdc83723c0f2b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430']);">
                                            <span class="review">感恩。 小米太有心了。必须支持。</span>
                                            <span class="author"> 来自于 虚幻的时间 的评价
                                                <span class="date" data-date="1513670199"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172500012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://www.mi.com/screwdriver/" data-stat-aid="AA18846" data-stat-pid="2_35_6_207" target="_blank"
                                            data-log_code="31pchomearound_right_3006036#rid=a26302962b2ffaf83b199594beb2dc9b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431"
                                            data-stat-id="AA18846+2_35_6_207" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18846+2_35_6_207', '//www.mi.com/screwdriver/', 'pcpid', '31pchomearound_right_3006036#rid=a26302962b2ffaf83b199594beb2dc9b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431']);">
                                            <img src="/static/index/index/img/pms_1501724155.jpg" alt="米家wiha精修螺丝刀套装" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://www.mi.com/screwdriver/" data-stat-aid="AA18846" data-stat-pid="2_35_6_207" data-log_code="31pchomearound_right_3006036#rid=a26302962b2ffaf83b199594beb2dc9b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431"
                                            target="_blank" data-stat-id="AA18846+2_35_6_207" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18846+2_35_6_207', '//www.mi.com/screwdriver/', 'pcpid', '31pchomearound_right_3006036#rid=a26302962b2ffaf83b199594beb2dc9b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431']);">米家wiha精修螺丝刀套装</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">7993人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://www.mi.com/screwdriver/" data-stat-aid="AA18846" data-stat-pid="2_35_6_207" data-log_code="31pchomearound_right_3006036#rid=a26302962b2ffaf83b199594beb2dc9b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431"
                                            target="_blank" data-stat-id="AA18846+2_35_6_207" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18846+2_35_6_207', '//www.mi.com/screwdriver/', 'pcpid', '31pchomearound_right_3006036#rid=a26302962b2ffaf83b199594beb2dc9b&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431']);">
                                            <span class="review">很精美的螺丝刀，有分量，有质感，我喜欢。</span>
                                            <span class="author"> 来自于 1165449773 的评价
                                                <span class="date" data-date="1512618049"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2172500011">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1172500015.html" data-stat-aid="AA18850" data-stat-pid="2_35_7_208" target="_blank"
                                            data-log_code="31pchomearound_right_3007036#rid=998db575db88261e49eac74c4113e4c1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434"
                                            data-stat-id="AA18850+2_35_7_208" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18850+2_35_7_208', '//item.mi.com/1172500015.html', 'pcpid', '31pchomearound_right_3007036#rid=998db575db88261e49eac74c4113e4c1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434']);">
                                            <img src="/static/index/index/img/pms_1500369741.jpg" alt="自动折叠伞" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1172500015.html" data-stat-aid="AA18850" data-stat-pid="2_35_7_208" data-log_code="31pchomearound_right_3007036#rid=998db575db88261e49eac74c4113e4c1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434"
                                            target="_blank" data-stat-id="AA18850+2_35_7_208" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18850+2_35_7_208', '//item.mi.com/1172500015.html', 'pcpid', '31pchomearound_right_3007036#rid=998db575db88261e49eac74c4113e4c1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434']);">自动折叠伞</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">6567人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1172500015.html" data-stat-aid="AA18850" data-stat-pid="2_35_7_208" data-log_code="31pchomearound_right_3007036#rid=998db575db88261e49eac74c4113e4c1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434"
                                            target="_blank" data-stat-id="AA18850+2_35_7_208" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18850+2_35_7_208', '//item.mi.com/1172500015.html', 'pcpid', '31pchomearound_right_3007036#rid=998db575db88261e49eac74c4113e4c1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434']);">
                                            <span class="review">伞骨加厚，伞珠是隐藏式的。智能手柄可自动打开伞也可以...</span>
                                            <span class="author"> 来自于 王昭昕 的评价
                                                <span class="date" data-date="1509116473"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2173300015">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1173300030.html" class="exposure" data-stat-aid="AA18849" data-stat-pid="2_35_8_209" data-log_code="31pchomearound_right_3008036#rid=eacc35fc9a1853e81753f193d9c0e70c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.8&amp;pid=2173300015&amp;adm=4433"
                                            target="_blank" data-stat-id="AA18849+2_35_8_209" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18849+2_35_8_209', '//item.mi.com/1173300030.html', 'pcpid', '31pchomearound_right_3008036#rid=eacc35fc9a1853e81753f193d9c0e70c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.8&amp;pid=2173300015&amp;adm=4433']);">
                                            <img src="/static/index/index/img/pms_1503051892.jpg" alt="最生活方巾·青春系列 " width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1173300030.html" class="exposure" data-stat-aid="AA18849" data-stat-pid="2_35_8_209" data-log_code="31pchomearound_right_3008036#rid=eacc35fc9a1853e81753f193d9c0e70c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.8&amp;pid=2173300015&amp;adm=4433"
                                            target="_blank" data-stat-id="AA18849+2_35_8_209" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18849+2_35_8_209', '//item.mi.com/1173300030.html', 'pcpid', '31pchomearound_right_3008036#rid=eacc35fc9a1853e81753f193d9c0e70c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030354.8&amp;pid=2173300015&amp;adm=4433']);">最生活方巾·青春系列 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">14.9</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/20" target="_blank" data-stat-id="ea2f84cbb4d6d67d" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ea2f84cbb4d6d67d', '//list.mi.com/20', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/20" target="_blank" data-stat-id="fc807e332b5b7a17" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fc807e332b5b7a17', '//list.mi.com/20', 'pcpid', '']);">浏览更多
                                        <small>生活周边</small>
                                    </a>
                                </li>
                            </ul>
                            <ul class="brick-list tab-content clearfix tab-content-hide">
                                <li class="brick-item brick-item-m" data-gid="2154400012">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1154400038.html" data-stat-aid="AA18851" data-stat-pid="2_36_1_210" target="_blank"
                                            data-log_code="31pchomearound_right_4001037#rid=b0f14b2264f37a61d244ea0782f885e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436"
                                            data-stat-id="AA18851+2_36_1_210" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18851+2_36_1_210', '//item.mi.com/1154400038.html', 'pcpid', '31pchomearound_right_4001037#rid=b0f14b2264f37a61d244ea0782f885e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436']);">
                                            <img src="/static/index/index/img/T1a3DvB7hv1RXrhCrK220x220.jpg" alt="小米极简都市双肩包 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1154400038.html" data-stat-aid="AA18851" data-stat-pid="2_36_1_210" data-log_code="31pchomearound_right_4001037#rid=b0f14b2264f37a61d244ea0782f885e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436"
                                            target="_blank" data-stat-id="AA18851+2_36_1_210" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18851+2_36_1_210', '//item.mi.com/1154400038.html', 'pcpid', '31pchomearound_right_4001037#rid=b0f14b2264f37a61d244ea0782f885e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436']);">小米极简都市双肩包 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">149</span>元 </p>
                                    <p class="rank">2.9万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1154400038.html" data-stat-aid="AA18851" data-stat-pid="2_36_1_210" data-log_code="31pchomearound_right_4001037#rid=b0f14b2264f37a61d244ea0782f885e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436"
                                            target="_blank" data-stat-id="AA18851+2_36_1_210" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18851+2_36_1_210', '//item.mi.com/1154400038.html', 'pcpid', '31pchomearound_right_4001037#rid=b0f14b2264f37a61d244ea0782f885e4&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436']);">
                                            <span class="review">一个人的旅途可以享受诗意，两个人的旅途能够分享情意。...</span>
                                            <span class="author"> 来自于 小米污 的评价
                                                <span class="date" data-date="1494647811"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161100001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1161100002.html" data-stat-aid="AA18852" data-stat-pid="2_36_2_211" target="_blank"
                                            data-log_code="31pchomearound_right_4002037#rid=797f50c2235c7c44fcba1d2579f6bc0d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437"
                                            data-stat-id="AA18852+2_36_2_211" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18852+2_36_2_211', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_4002037#rid=797f50c2235c7c44fcba1d2579f6bc0d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437']);">
                                            <img src="/static/index/index/img/T1DuxvB4D_1RXrhCrK220x220.jpg" alt="小米经典商务双肩包" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1161100002.html" data-stat-aid="AA18852" data-stat-pid="2_36_2_211" data-log_code="31pchomearound_right_4002037#rid=797f50c2235c7c44fcba1d2579f6bc0d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437"
                                            target="_blank" data-stat-id="AA18852+2_36_2_211" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18852+2_36_2_211', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_4002037#rid=797f50c2235c7c44fcba1d2579f6bc0d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437']);">小米经典商务双肩包</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">99</span>元 </p>
                                    <p class="rank">1.6万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1161100002.html" data-stat-aid="AA18852" data-stat-pid="2_36_2_211" data-log_code="31pchomearound_right_4002037#rid=797f50c2235c7c44fcba1d2579f6bc0d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437"
                                            target="_blank" data-stat-id="AA18852+2_36_2_211" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18852+2_36_2_211', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_4002037#rid=797f50c2235c7c44fcba1d2579f6bc0d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437']);">
                                            <span class="review">满意满意，不多说。 妹子客服你是时候现身了！！！</span>
                                            <span class="author"> 来自于 西瓜怪兽 的评价
                                                <span class="date" data-date="1500272400"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171100001">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1171100001.html" data-stat-aid="AA18853" data-stat-pid="2_36_3_212" target="_blank"
                                            data-log_code="31pchomearound_right_4003037#rid=5a9f14cb35fd5a31bf6bd5462147d88a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438"
                                            data-stat-id="AA18853+2_36_3_212" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18853+2_36_3_212', '//item.mi.com/1171100001.html', 'pcpid', '31pchomearound_right_4003037#rid=5a9f14cb35fd5a31bf6bd5462147d88a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438']);">
                                            <img src="/static/index/index/img/pms_1489390614.jpg" alt="小米商旅多功能双肩包" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1171100001.html" data-stat-aid="AA18853" data-stat-pid="2_36_3_212" data-log_code="31pchomearound_right_4003037#rid=5a9f14cb35fd5a31bf6bd5462147d88a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438"
                                            target="_blank" data-stat-id="AA18853+2_36_3_212" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18853+2_36_3_212', '//item.mi.com/1171100001.html', 'pcpid', '31pchomearound_right_4003037#rid=5a9f14cb35fd5a31bf6bd5462147d88a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438']);">小米商旅多功能双肩包</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">199</span>元 </p>
                                    <p class="rank">3553人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1171100001.html" data-stat-aid="AA18853" data-stat-pid="2_36_3_212" data-log_code="31pchomearound_right_4003037#rid=5a9f14cb35fd5a31bf6bd5462147d88a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438"
                                            target="_blank" data-stat-id="AA18853+2_36_3_212" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18853+2_36_3_212', '//item.mi.com/1171100001.html', 'pcpid', '31pchomearound_right_4003037#rid=5a9f14cb35fd5a31bf6bd5462147d88a&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438']);">
                                            <span class="review">这么帅的双肩包 真怕背出去被人打</span>
                                            <span class="author"> 来自于 853345717 的评价
                                                <span class="date" data-date="1515632973"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2171900032">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1171900021.html" data-stat-aid="AA18854" data-stat-pid="2_36_4_213" target="_blank"
                                            data-log_code="31pchomearound_right_4004037#rid=4f6852ed523cf178ae82ebe4b86818da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439"
                                            data-stat-id="AA18854+2_36_4_213" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18854+2_36_4_213', '//item.mi.com/1171900021.html', 'pcpid', '31pchomearound_right_4004037#rid=4f6852ed523cf178ae82ebe4b86818da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439']);">
                                            <img src="/static/index/index/img/pms_1497672764.jpg" alt="小米学院休闲双肩包" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1171900021.html" data-stat-aid="AA18854" data-stat-pid="2_36_4_213" data-log_code="31pchomearound_right_4004037#rid=4f6852ed523cf178ae82ebe4b86818da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439"
                                            target="_blank" data-stat-id="AA18854+2_36_4_213" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18854+2_36_4_213', '//item.mi.com/1171900021.html', 'pcpid', '31pchomearound_right_4004037#rid=4f6852ed523cf178ae82ebe4b86818da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439']);">小米学院休闲双肩包</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">79</span>元 </p>
                                    <p class="rank">7745人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1171900021.html" data-stat-aid="AA18854" data-stat-pid="2_36_4_213" data-log_code="31pchomearound_right_4004037#rid=4f6852ed523cf178ae82ebe4b86818da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439"
                                            target="_blank" data-stat-id="AA18854+2_36_4_213" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18854+2_36_4_213', '//item.mi.com/1171900021.html', 'pcpid', '31pchomearound_right_4004037#rid=4f6852ed523cf178ae82ebe4b86818da&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439']);">
                                            <span class="review">发现新科技，为发烧而生。个人感言还不错，不过最近中了...</span>
                                            <span class="author"> 来自于 你好 丶张先森 的评价
                                                <span class="date" data-date="1513510901"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2153700031">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1153700021.html" data-stat-aid="AA18855" data-stat-pid="2_36_5_214" target="_blank"
                                            data-log_code="31pchomearound_right_4005037#rid=ee9be4e349ec5219b46ade1b519d3d27&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.5&amp;pid=2153700031&amp;adm=4440"
                                            data-stat-id="AA18855+2_36_5_214" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18855+2_36_5_214', '//item.mi.com/1153700021.html', 'pcpid', '31pchomearound_right_4005037#rid=ee9be4e349ec5219b46ade1b519d3d27&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.5&amp;pid=2153700031&amp;adm=4440']);">
                                            <img src="/static/index/index/img/T1OQ__B7Zv1RXrhCrK220x220.jpg" alt="90分旅行箱 20寸 " width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1153700021.html" data-stat-aid="AA18855" data-stat-pid="2_36_5_214" data-log_code="31pchomearound_right_4005037#rid=ee9be4e349ec5219b46ade1b519d3d27&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.5&amp;pid=2153700031&amp;adm=4440"
                                            target="_blank" data-stat-id="AA18855+2_36_5_214" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18855+2_36_5_214', '//item.mi.com/1153700021.html', 'pcpid', '31pchomearound_right_4005037#rid=ee9be4e349ec5219b46ade1b519d3d27&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.5&amp;pid=2153700031&amp;adm=4440']);">90分旅行箱 20寸 </a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">299</span>元 </p>
                                    <p class="rank">2.7万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1153700021.html" data-stat-aid="AA18855" data-stat-pid="2_36_5_214" data-log_code="31pchomearound_right_4005037#rid=ee9be4e349ec5219b46ade1b519d3d27&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.5&amp;pid=2153700031&amp;adm=4440"
                                            target="_blank" data-stat-id="AA18855+2_36_5_214" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18855+2_36_5_214', '//item.mi.com/1153700021.html', 'pcpid', '31pchomearound_right_4005037#rid=ee9be4e349ec5219b46ade1b519d3d27&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.5&amp;pid=2153700031&amp;adm=4440']);">
                                            <span class="review">漂亮没得说，very good !就是不知道能...</span>
                                            <span class="author"> 来自于 (&gt;^ω^&lt;)喵咪咪 的评价
                                                <span class="date" data-date="1480831229"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2155100008">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1155100011.html" data-stat-aid="AA18856" data-stat-pid="2_36_6_215" target="_blank"
                                            data-log_code="31pchomearound_right_4006037#rid=f80ec2c2dd53ff5cb0b6f8c7dd38e1d0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.6&amp;pid=2155100008&amp;adm=4441"
                                            data-stat-id="AA18856+2_36_6_215" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18856+2_36_6_215', '//item.mi.com/1155100011.html', 'pcpid', '31pchomearound_right_4006037#rid=f80ec2c2dd53ff5cb0b6f8c7dd38e1d0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.6&amp;pid=2155100008&amp;adm=4441']);">
                                            <img src="/static/index/index/img/T1CDbjBgAT1RXrhCrK220x220.jpg" alt="90分旅行箱 24寸" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1155100011.html" data-stat-aid="AA18856" data-stat-pid="2_36_6_215" data-log_code="31pchomearound_right_4006037#rid=f80ec2c2dd53ff5cb0b6f8c7dd38e1d0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.6&amp;pid=2155100008&amp;adm=4441"
                                            target="_blank" data-stat-id="AA18856+2_36_6_215" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18856+2_36_6_215', '//item.mi.com/1155100011.html', 'pcpid', '31pchomearound_right_4006037#rid=f80ec2c2dd53ff5cb0b6f8c7dd38e1d0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.6&amp;pid=2155100008&amp;adm=4441']);">90分旅行箱 24寸</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">349</span>元 </p>
                                    <p class="rank">2.7万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1155100011.html" data-stat-aid="AA18856" data-stat-pid="2_36_6_215" data-log_code="31pchomearound_right_4006037#rid=f80ec2c2dd53ff5cb0b6f8c7dd38e1d0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.6&amp;pid=2155100008&amp;adm=4441"
                                            target="_blank" data-stat-id="AA18856+2_36_6_215" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18856+2_36_6_215', '//item.mi.com/1155100011.html', 'pcpid', '31pchomearound_right_4006037#rid=f80ec2c2dd53ff5cb0b6f8c7dd38e1d0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.6&amp;pid=2155100008&amp;adm=4441']);">
                                            <span class="review">听说客服妹子特别有才，能歌能舞能做诗啊！ 给...</span>
                                            <span class="author"> 来自于 ✨YQY..@ 的评价
                                                <span class="date" data-date="1483002904"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-m" data-gid="2161200013">
                                    <div class="figure figure-img">
                                        <a class="exposure" href="https://item.mi.com/1161200013.html" data-stat-aid="AA18857" data-stat-pid="2_36_7_216" target="_blank"
                                            data-log_code="31pchomearound_right_4007037#rid=2bacbd00f95e9d70c0cbdd97b3e33182&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442"
                                            data-stat-id="AA18857+2_36_7_216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18857+2_36_7_216', '//item.mi.com/1161200013.html', 'pcpid', '31pchomearound_right_4007037#rid=2bacbd00f95e9d70c0cbdd97b3e33182&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442']);">
                                            <img src="/static/index/index/img/T1FtKgBvZv1RXrhCrK220x220.jpg" alt="小米多功能都市休闲胸包" width="150" height="150">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1161200013.html" data-stat-aid="AA18857" data-stat-pid="2_36_7_216" data-log_code="31pchomearound_right_4007037#rid=2bacbd00f95e9d70c0cbdd97b3e33182&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442"
                                            target="_blank" data-stat-id="AA18857+2_36_7_216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18857+2_36_7_216', '//item.mi.com/1161200013.html', 'pcpid', '31pchomearound_right_4007037#rid=2bacbd00f95e9d70c0cbdd97b3e33182&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442']);">小米多功能都市休闲胸包</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">69</span>元 </p>
                                    <p class="rank">4.1万人评价</p>
                                    <div class="review-wrapper">
                                        <a href="https://item.mi.com/1161200013.html" data-stat-aid="AA18857" data-stat-pid="2_36_7_216" data-log_code="31pchomearound_right_4007037#rid=2bacbd00f95e9d70c0cbdd97b3e33182&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442"
                                            target="_blank" data-stat-id="AA18857+2_36_7_216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18857+2_36_7_216', '//item.mi.com/1161200013.html', 'pcpid', '31pchomearound_right_4007037#rid=2bacbd00f95e9d70c0cbdd97b3e33182&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442']);">
                                            <span class="review">包邮还能用券，之前一直没货现在终于等到你了</span>
                                            <span class="author"> 来自于 382992906 的评价
                                                <span class="date" data-date="1510151660"></span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="brick-item brick-item-s" data-gid="2174200023">
                                    <div class="figure figure-img">
                                        <a href="https://item.mi.com/1174200036.html" class="exposure" data-stat-aid="AA18858" data-stat-pid="2_36_8_217" data-log_code="31pchomearound_right_4008037#rid=2e86b76a6dbadd74fdc9c5348cff1d55&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443"
                                            target="_blank" data-stat-id="AA18858+2_36_8_217" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18858+2_36_8_217', '//item.mi.com/1174200036.html', 'pcpid', '31pchomearound_right_4008037#rid=2e86b76a6dbadd74fdc9c5348cff1d55&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443']);">
                                            <img src="/static/index/index/img/pms_1508493128.jpg" alt="90分户外休闲双肩包" width="80" height="80"> </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="https://item.mi.com/1174200036.html" class="exposure" data-stat-aid="AA18858" data-stat-pid="2_36_8_217" data-log_code="31pchomearound_right_4008037#rid=2e86b76a6dbadd74fdc9c5348cff1d55&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443"
                                            target="_blank" data-stat-id="AA18858+2_36_8_217" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18858+2_36_8_217', '//item.mi.com/1174200036.html', 'pcpid', '31pchomearound_right_4008037#rid=2e86b76a6dbadd74fdc9c5348cff1d55&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443']);">90分户外休闲双肩包</a>
                                    </h3>
                                    <p class="price">
                                        <span class="num">249</span>元</p>
                                </li>
                                <li class="brick-item brick-item-s">
                                    <div class="figure figure-more">
                                        <a href="https://list.mi.com/23" target="_blank" data-stat-id="4f68e30f2e8e595f" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4f68e30f2e8e595f', '//list.mi.com/23', 'pcpid', '']);">
                                            <i class="iconfont"></i>
                                        </a>
                                    </div>
                                    <a class="more" href="https://list.mi.com/23" target="_blank" data-stat-id="89a7802442c45388" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-89a7802442c45388', '//list.mi.com/23', 'pcpid', '']);">浏览更多
                                        <small>箱包</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="recommend" class="home-recm-box home-brick-box home-brick-row-1-box xm-plain-box J_itemBox J_recommendBox is-visible"
            data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">为你推荐</h2>
                <!-- <h2 class="title">叮叮当，叮叮当，铃儿响叮当   (」o^∀^)」*゜</h2> -->
                <div class="more J_brickNav">
                    <div class="xm-controls xm-controls-line-small xm-carousel-controls">
                        <a class="control control-prev iconfont control-disabled" href="javascript:%20void(0);" data-stat-pid="stat_Home.首页_undefined_undefined"></a>
                        <a class="control control-next iconfont" href="javascript:%20void(0);" data-stat-pid="stat_Home.首页_undefined_undefined"></a>
                    </div>
                </div>
            </div>
            <div id="recommend-bd" class="box-bd J_brickBd J_recommend-like container xm-carousel-container" data-log_codes="reccom_Guesslike_0_0#eid=force_184:0:0:0:0:0:0:0:0:4795&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4795&amp;bid=3038464.0&amp;page=home;reccom_Guesslike_0_1#eid=force_184:0:0:0:0:0:0:0:0:6458&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6458&amp;bid=3038464.1&amp;page=home;reccom_Guesslike_0_2#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038464.2&amp;page=home;reccom_Guesslike_0_3#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6704&amp;bid=3038464.3&amp;page=home;reccom_Guesslike_0_4#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7359&amp;bid=3038464.4&amp;page=home;reccom_Guesslike_0_5#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6259&amp;bid=3038464.5&amp;page=home;reccom_Guesslike_0_6#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7354&amp;bid=3038464.6&amp;page=home;reccom_Guesslike_0_7#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7717&amp;bid=3038464.7&amp;page=home;reccom_Guesslike_0_8#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5679&amp;bid=3038464.8&amp;page=home;reccom_Guesslike_0_9#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038464.9&amp;page=home;reccom_Guesslike_0_10#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7528&amp;bid=3038464.10&amp;page=home;reccom_Guesslike_0_11#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6874&amp;bid=3038464.11&amp;page=home;reccom_Guesslike_0_12#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6701&amp;bid=3038464.12&amp;page=home;reccom_Guesslike_0_13#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7155&amp;bid=3038464.13&amp;page=home;reccom_Guesslike_0_14#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7530&amp;bid=3038464.14&amp;page=home;reccom_Guesslike_0_15#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038464.15&amp;page=home;reccom_Guesslike_0_16#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7244&amp;bid=3038464.16&amp;page=home;reccom_Guesslike_0_17#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7599&amp;bid=3038464.17&amp;page=home;reccom_Guesslike_0_18#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7598&amp;bid=3038464.18&amp;page=home;reccom_Guesslike_0_19#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7694&amp;bid=3038464.19&amp;page=home">
                <div class="xm-recommend">
                    <div class="xm-carousel-wrapper" style="height: 320px; overflow: hidden;">
                        <ul class="xm-carousel-col-5-list xm-carousel-list clearfix" style="width: 4960px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1164300018.html" data-log_code="reccom_Guesslike_0_0#eid=force_184:0:0:0:0:0:0:0:0:4795&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4795&amp;bid=3038464.0&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="0" data-stat-text="红米手机4A 全网通版 16GB" target="_blank"
                                            data-stat-pid="stat_Home.首页_0_1_13" data-stat-aid="红米手机4A全网通版16GB">
                                            <img src="/static/index/index/img/pms_1491583569.jpg" srcset="//i1.mifile.cn/a1/pms_1491583569.83999109!280x280.jpg  2x"
                                                alt="红米手机4A 全网通版 16GB"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1164300018.html" data-log_code="reccom_Guesslike_0_0#eid=force_184:0:0:0:0:0:0:0:0:4795&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4795&amp;bid=3038464.0&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="0" target="_blank" data-stat-pid="stat_Home.首页_0_1_13">
                                            红米手机4A 全网通版 16GB </a>
                                    </dd>
                                    <dd class="xm-recommend-price">549元</dd>
                                    <dd class="xm-recommend-tips"> 2259人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1173100044.html" data-log_code="reccom_Guesslike_0_1#eid=force_184:0:0:0:0:0:0:0:0:6458&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6458&amp;bid=3038464.1&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="1" data-stat-text="红米Note 5A 全网通版 3GB内存 32GB"
                                            target="_blank" data-stat-pid="stat_Home.首页_1_1_13" data-stat-aid="红米Note5A全网通版3GB内存32GB">
                                            <img src="/static/index/index/img/pms_1503544137.jpg" srcset="//i1.mifile.cn/a1/pms_1503544137.40238065!280x280.jpg  2x"
                                                alt="红米Note 5A 全网通版 3GB内存 32GB"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1173100044.html" data-log_code="reccom_Guesslike_0_1#eid=force_184:0:0:0:0:0:0:0:0:6458&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6458&amp;bid=3038464.1&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="1" target="_blank" data-stat-pid="stat_Home.首页_1_1_13">
                                            红米Note 5A 全网通版 3GB内存 32GB </a>
                                    </dd>
                                    <dd class="xm-recommend-price">799元</dd>
                                    <dd class="xm-recommend-tips"> 1.8万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1172900027.html" data-log_code="reccom_Guesslike_0_2#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038464.2&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="2" data-stat-text="小米AI音箱" target="_blank"
                                            data-stat-pid="stat_Home.首页_2_1_13" data-stat-aid="小米AI音箱">
                                            <img src="/static/index/index/img/pms_1501057018.jpg" srcset="//i1.mifile.cn/a1/pms_1501057018.70015369!280x280.jpg  2x"
                                                alt="小米AI音箱"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1172900027.html" data-log_code="reccom_Guesslike_0_2#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038464.2&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="2" target="_blank" data-stat-pid="stat_Home.首页_2_1_13">
                                            小米AI音箱 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">299元</dd>
                                    <dd class="xm-recommend-tips"> 2.8万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1173500018.html" data-log_code="reccom_Guesslike_0_3#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6704&amp;bid=3038464.3&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="3" data-stat-text="小米Note 3 全网通版 6GB内存 128GB"
                                            target="_blank" data-stat-pid="stat_Home.首页_3_1_13" data-stat-aid="小米Note3全网通版6GB内存128GB">
                                            <img src="/static/index/index/img/pms_1505110828.jpg" srcset="//i1.mifile.cn/a1/pms_1505110828.06928608!280x280.jpg  2x"
                                                alt="小米Note 3 全网通版 6GB内存 128GB"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1173500018.html" data-log_code="reccom_Guesslike_0_3#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6704&amp;bid=3038464.3&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="3" target="_blank" data-stat-pid="stat_Home.首页_3_1_13">
                                            小米Note 3 全网通版 6GB内存 128GB </a>
                                    </dd>
                                    <dd class="xm-recommend-price">2399元</dd>
                                    <dd class="xm-recommend-tips"> 1.4万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1174700099.html" data-log_code="reccom_Guesslike_0_4#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7359&amp;bid=3038464.4&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="4" data-stat-text="红米5 Plus 全网通版 4GB内存"
                                            target="_blank" data-stat-pid="stat_Home.首页_4_1_13" data-stat-aid="红米5Plus全网通版4GB内存">
                                            <img src="/static/index/index/img/pms_1512614849.jpg" srcset="//i1.mifile.cn/a1/pms_1512614849.04971208!280x280.jpg  2x"
                                                alt="红米5 Plus 全网通版 4GB内存"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1174700099.html" data-log_code="reccom_Guesslike_0_4#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7359&amp;bid=3038464.4&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="4" target="_blank" data-stat-pid="stat_Home.首页_4_1_13">
                                            红米5 Plus 全网通版 4GB内存 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">1299元</dd>
                                    <dd class="xm-recommend-tips"> 1.3万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1172800003.html" data-log_code="reccom_Guesslike_0_5#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6259&amp;bid=3038464.5&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="5" data-stat-text="小米5X" target="_blank"
                                            data-stat-pid="stat_Home.首页_5_1_13" data-stat-aid="小米5X">
                                            <img src="/static/index/index/img/pms_1502962275.jpg" srcset="//i1.mifile.cn/a1/pms_1502962275.73995818!280x280.jpg  2x"
                                                alt="小米5X"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1172800003.html" data-log_code="reccom_Guesslike_0_5#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6259&amp;bid=3038464.5&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="5" target="_blank" data-stat-pid="stat_Home.首页_5_1_13">
                                            小米5X </a>
                                    </dd>
                                    <dd class="xm-recommend-price">1399元</dd>
                                    <dd class="xm-recommend-tips"> 4万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1174700079.html" data-log_code="reccom_Guesslike_0_6#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7354&amp;bid=3038464.6&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="6" data-stat-text="红米5 全网通版 2GB内存" target="_blank"
                                            data-stat-pid="stat_Home.首页_6_1_13" data-stat-aid="红米5全网通版2GB内存">
                                            <img src="/static/index/index/img/pms_1512612021.jpg" srcset="//i1.mifile.cn/a1/pms_1512612021.00182766!280x280.jpg  2x"
                                                alt="红米5 全网通版 2GB内存"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1174700079.html" data-log_code="reccom_Guesslike_0_6#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7354&amp;bid=3038464.6&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="6" target="_blank" data-stat-pid="stat_Home.首页_6_1_13">
                                            红米5 全网通版 2GB内存 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">799元</dd>
                                    <dd class="xm-recommend-tips"> 812人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1180500026.html" data-log_code="reccom_Guesslike_0_7#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7717&amp;bid=3038464.7&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="7" data-stat-text="铜师傅好运铜葫芦" target="_blank"
                                            data-stat-pid="stat_Home.首页_7_1_13" data-stat-aid="铜师傅好运铜葫芦">
                                            <img src="/static/index/index/img/pms_1517281674.jpg" srcset="//i1.mifile.cn/a1/pms_1517281674.0948870!280x280.jpg  2x" alt="铜师傅好运铜葫芦"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1180500026.html" data-log_code="reccom_Guesslike_0_7#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7717&amp;bid=3038464.7&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="7" target="_blank" data-stat-pid="stat_Home.首页_7_1_13">
                                            铜师傅好运铜葫芦 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">29元</dd>
                                    <dd class="xm-recommend-tips"> </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1171500035.html" data-log_code="reccom_Guesslike_0_8#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5679&amp;bid=3038464.8&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="8" data-stat-text="小米6 全网通版 6GB内存" target="_blank"
                                            data-stat-pid="stat_Home.首页_8_1_13" data-stat-aid="小米6全网通版6GB内存">
                                            <img src="/static/index/index/img/pms_1492571511.jpg" srcset="//i1.mifile.cn/a1/pms_1492571511.43946312!280x280.jpg  2x"
                                                alt="小米6 全网通版 6GB内存"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1171500035.html" data-log_code="reccom_Guesslike_0_8#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5679&amp;bid=3038464.8&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="8" target="_blank" data-stat-pid="stat_Home.首页_8_1_13">
                                            小米6 全网通版 6GB内存 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">2499元</dd>
                                    <dd class="xm-recommend-tips"> 8.1万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1171800017.html" data-log_code="reccom_Guesslike_0_9#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038464.9&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="9" data-stat-text="小米Max 2 全网通版 4GB内存" target="_blank"
                                            data-stat-pid="stat_Home.首页_9_1_13" data-stat-aid="小米Max2全网通版4GB内存">
                                            <img src="/static/index/index/img/pms_1508855689.jpg" srcset="//i1.mifile.cn/a1/pms_1508855689.04744020!280x280.jpg  2x"
                                                alt="小米Max 2 全网通版 4GB内存"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1171800017.html" data-log_code="reccom_Guesslike_0_9#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038464.9&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="9" target="_blank" data-stat-pid="stat_Home.首页_9_1_13">
                                            小米Max 2 全网通版 4GB内存 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">1599元</dd>
                                    <dd class="xm-recommend-tips"> 3.7万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1175000272.html" data-log_code="reccom_Guesslike_0_10#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7528&amp;bid=3038464.10&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="10" data-stat-text="米家电磁炉" target="_blank"
                                            data-stat-pid="stat_Home.首页_10_1_13" data-stat-aid="米家电磁炉">
                                            <img src="/static/index/index/img/pms_1513822496.jpg" srcset="//i1.mifile.cn/a1/pms_1513822496.31335198!280x280.jpg  2x"
                                                alt="米家电磁炉"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1175000272.html" data-log_code="reccom_Guesslike_0_10#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7528&amp;bid=3038464.10&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="10" target="_blank" data-stat-pid="stat_Home.首页_10_1_13">
                                            米家电磁炉 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">299元</dd>
                                    <dd class="xm-recommend-tips"> 1389人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1173800021.html" data-log_code="reccom_Guesslike_0_11#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6874&amp;bid=3038464.11&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="11" data-stat-text="红米5A 2GB内存" target="_blank"
                                            data-stat-pid="stat_Home.首页_11_1_13" data-stat-aid="红米5A2GB内存">
                                            <img src="/static/index/index/img/pms_1508125835.jpg" srcset="//i1.mifile.cn/a1/pms_1508125835.35946769!280x280.jpg  2x"
                                                alt="红米5A 2GB内存"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1173800021.html" data-log_code="reccom_Guesslike_0_11#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6874&amp;bid=3038464.11&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="11" target="_blank" data-stat-pid="stat_Home.首页_11_1_13">
                                            红米5A 2GB内存 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">599元</dd>
                                    <dd class="xm-recommend-tips"> 7804人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1173500015.html" data-log_code="reccom_Guesslike_0_12#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6701&amp;bid=3038464.12&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="12" data-stat-text="小米MIX2 全网通版 6GB内存 黑色陶瓷 64GB"
                                            target="_blank" data-stat-pid="stat_Home.首页_12_1_13" data-stat-aid="小米MIX2全网通版6GB内存黑色陶瓷64GB">
                                            <img src="/static/index/index/img/pms_1505401464.jpg" srcset="//i1.mifile.cn/a1/pms_1505401464.03824312!280x280.jpg  2x"
                                                alt="小米MIX2 全网通版 6GB内存 黑色陶瓷 64GB"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1173500015.html" data-log_code="reccom_Guesslike_0_12#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6701&amp;bid=3038464.12&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="12" target="_blank" data-stat-pid="stat_Home.首页_12_1_13">
                                            小米MIX2 全网通版 6GB内存 黑色陶瓷 64GB </a>
                                    </dd>
                                    <dd class="xm-recommend-price">2999元</dd>
                                    <dd class="xm-recommend-tips"> 1.1万人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1174200061.html" data-log_code="reccom_Guesslike_0_13#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7155&amp;bid=3038464.13&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="13" data-stat-text="红米Note4X 全网通版 4GB内存"
                                            target="_blank" data-stat-pid="stat_Home.首页_13_1_13" data-stat-aid="红米Note4X全网通版4GB内存">
                                            <img src="/static/index/index/img/pms_1511835517.jpg" srcset="//i1.mifile.cn/a1/pms_1511835517.99236936!280x280.jpg  2x"
                                                alt="红米Note4X 全网通版 4GB内存"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1174200061.html" data-log_code="reccom_Guesslike_0_13#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7155&amp;bid=3038464.13&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="13" target="_blank" data-stat-pid="stat_Home.首页_13_1_13">
                                            红米Note4X 全网通版 4GB内存 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">1299元</dd>
                                    <dd class="xm-recommend-tips"> 374人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1175100002.html" data-log_code="reccom_Guesslike_0_14#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7530&amp;bid=3038464.14&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="14" data-stat-text="知吾煮汤锅 米家定制" target="_blank"
                                            data-stat-pid="stat_Home.首页_14_1_13" data-stat-aid="知吾煮汤锅米家定制">
                                            <img src="/static/index/index/img/pms_1513864376.jpg" srcset="//i1.mifile.cn/a1/pms_1513864376.45999722!280x280.jpg  2x"
                                                alt="知吾煮汤锅 米家定制"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1175100002.html" data-log_code="reccom_Guesslike_0_14#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7530&amp;bid=3038464.14&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="14" target="_blank" data-stat-pid="stat_Home.首页_14_1_13">
                                            知吾煮汤锅 米家定制 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">99元</dd>
                                    <dd class="xm-recommend-tips"> 926人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1172800022.html" data-log_code="reccom_Guesslike_0_15#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038464.15&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="15" data-stat-text="小米随身手电筒" target="_blank"
                                            data-stat-pid="stat_Home.首页_15_1_13" data-stat-aid="小米随身手电筒">
                                            <img src="/static/index/index/img/pms_1506417289_002.jpg" srcset="//i1.mifile.cn/a1/pms_1506417289.23728408!280x280.jpg  2x"
                                                alt="小米随身手电筒"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1172800022.html" data-log_code="reccom_Guesslike_0_15#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038464.15&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="15" target="_blank" data-stat-pid="stat_Home.首页_15_1_13">
                                            小米随身手电筒 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">79元</dd>
                                    <dd class="xm-recommend-tips"> 4538人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1174400056.html" data-log_code="reccom_Guesslike_0_16#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7244&amp;bid=3038464.16&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="16" data-stat-text="米兔指尖积木" target="_blank"
                                            data-stat-pid="stat_Home.首页_16_1_13" data-stat-aid="米兔指尖积木">
                                            <img src="/static/index/index/img/pms_1510302125.jpg" srcset="//i1.mifile.cn/a1/pms_1510302125.54795698!280x280.jpg  2x"
                                                alt="米兔指尖积木"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1174400056.html" data-log_code="reccom_Guesslike_0_16#eid=184:16:0:0:0:0:0:0:55:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7244&amp;bid=3038464.16&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="16" target="_blank" data-stat-pid="stat_Home.首页_16_1_13">
                                            米兔指尖积木 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">9.9元</dd>
                                    <dd class="xm-recommend-tips"> 1674人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1180100010.html" data-log_code="reccom_Guesslike_0_17#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7599&amp;bid=3038464.17&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="17" data-stat-text="小米盒子4" target="_blank"
                                            data-stat-pid="stat_Home.首页_17_1_13" data-stat-aid="小米盒子4">
                                            <img src="/static/index/index/img/pms_1516975996.jpg" srcset="//i1.mifile.cn/a1/pms_1516975996.71444436!280x280.jpg  2x"
                                                alt="小米盒子4"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1180100010.html" data-log_code="reccom_Guesslike_0_17#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7599&amp;bid=3038464.17&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="17" target="_blank" data-stat-pid="stat_Home.首页_17_1_13">
                                            小米盒子4 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">349元</dd>
                                    <dd class="xm-recommend-tips"> 11人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1180100009.html" data-log_code="reccom_Guesslike_0_18#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7598&amp;bid=3038464.18&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="18" data-stat-text="小米盒子4c" target="_blank"
                                            data-stat-pid="stat_Home.首页_18_1_13" data-stat-aid="小米盒子4c">
                                            <img src="/static/index/index/img/pms_1516976220.jpg" srcset="//i1.mifile.cn/a1/pms_1516976220.59976234!280x280.jpg  2x"
                                                alt="小米盒子4c"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1180100009.html" data-log_code="reccom_Guesslike_0_18#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7598&amp;bid=3038464.18&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="18" target="_blank" data-stat-pid="stat_Home.首页_18_1_13">
                                            小米盒子4c </a>
                                    </dd>
                                    <dd class="xm-recommend-price">249元</dd>
                                    <dd class="xm-recommend-tips"> 4人好评 </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                            <li class="J_xm-recommend-list">
                                <dl>
                                    <dt>
                                        <a href="https://item.mi.com/1180500002.html" data-log_code="reccom_Guesslike_0_19#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7694&amp;bid=3038464.19&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="19" data-stat-text="飞利浦智睿蜡烛灯泡" target="_blank"
                                            data-stat-pid="stat_Home.首页_19_1_13" data-stat-aid="飞利浦智睿蜡烛灯泡">
                                            <img src="/static/index/index/img/pms_1517214417_002.jpg" srcset="//i1.mifile.cn/a1/pms_1517214417.03015779!280x280.jpg  2x"
                                                alt="飞利浦智睿蜡烛灯泡"> </a>
                                    </dt>
                                    <dd class="xm-recommend-name">
                                        <a href="https://item.mi.com/1180500002.html" data-log_code="reccom_Guesslike_0_19#eid=184:16:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7694&amp;bid=3038464.19&amp;page=home"
                                            data-stat-method="1_13" data-stat-index="19" target="_blank" data-stat-pid="stat_Home.首页_19_1_13">
                                            飞利浦智睿蜡烛灯泡 </a>
                                    </dd>
                                    <dd class="xm-recommend-price">59元</dd>
                                    <dd class="xm-recommend-tips"> </dd>
                                    <dd class="xm-recommend-notice"></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox is-visible">
            <div class="box-hd">
                <h2 class="title">热评产品</h2>
                <!-- <h2 class="title">今晚滑雪多快乐，我们坐在雪橇上  ︿(￣︶￣)︿</h2> -->
            </div>
            <div class="box-bd J_brickBd">
                <ul class="review-list clearfix">
                    <li class="review-item review-item-first" data-gid="2173700036">
                        <div class="figure figure-img">
                            <a class="exposure" href="https://www.mi.com/carair/" data-stat-aid="AA18731" data-stat-pid="2_38_1_223" data-log_code="31pchomecomment001005#rid=f2d0f812087f62f7389bdca1e527ce53&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361"
                                target="_blank" data-stat-id="AA18731+2_38_1_223" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18731+2_38_1_223', '//www.mi.com/carair/', 'pcpid', '31pchomecomment001005#rid=f2d0f812087f62f7389bdca1e527ce53&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361']);">
                                <img src="/static/index/index/img/xmad_15094337975564_BSRIq.jpg" alt="米家车载空气净化器（USB车充版） 灰色" width="296" height="220"> </a>
                        </div>
                        <p class="review">
                            <a href="https://order.mi.com/comment/commentDetail/comment_id/141831535" data-stat-aid="AA18731" data-stat-pid="2_38_1_223"
                                data-log_code="31pchomecomment001005#rid=f2d0f812087f62f7389bdca1e527ce53&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361"
                                target="_blank" data-stat-id="AA18731+2_38_1_223" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18731+2_38_1_223', '//order.mi.com/comment/commentDetail/comment_id/141831535', 'pcpid', '31pchomecomment001005#rid=f2d0f812087f62f7389bdca1e527ce53&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361']);">外形简洁大方，大爱小米！全家人都在用小米的产品，真心不错，最主要的是性价比高。附图，给客服妹子一个大...</a>
                        </p>
                        <p class="author"> 来自于 酸小妞～！ 的评价
                            <span class="date" data-date="1488080684"></span>
                        </p>
                        <div class="info">
                            <h3 class="title">
                                <a href="https://www.mi.com/carair/" data-stat-aid="AA18731" data-stat-pid="2_38_1_223" data-log_code="31pchomecomment001005#rid=f2d0f812087f62f7389bdca1e527ce53&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361"
                                    target="_blank" data-stat-id="AA18731+2_38_1_223" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18731+2_38_1_223', '//www.mi.com/carair/', 'pcpid', '31pchomecomment001005#rid=f2d0f812087f62f7389bdca1e527ce53&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361']);">米家车载空气净化器（USB车充版） 灰色</a>
                            </h3>
                            <span class="sep">|</span>
                            <p class="price">
                                <span class="num">389</span>元</p>
                        </div>
                    </li>
                    <li class="review-item" data-gid="2153700031">
                        <div class="figure figure-img">
                            <a class="exposure" href="https://item.mi.com/1153700018.html" data-stat-aid="AA13441" data-stat-pid="2_38_2_226" data-log_code="31pchomecomment004005#rid=e05bc32479fa8d2cb04de8b931314558&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.4&amp;pid=2153700031&amp;adm=2243"
                                target="_blank" data-stat-id="AA13441+2_38_2_226" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13441+2_38_2_226', '//item.mi.com/1153700018.html', 'pcpid', '31pchomecomment004005#rid=e05bc32479fa8d2cb04de8b931314558&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.4&amp;pid=2153700031&amp;adm=2243']);">
                                <img src="/static/index/index/img/62d44838-f464-4c11-887c-9168645ae797.jpg" alt="90分旅行箱 20寸" width="296" height="220"> </a>
                        </div>
                        <p class="review">
                            <a href="https://order.mi.com/comment/commentDetail/comment_id/12155128" data-stat-aid="AA13441" data-stat-pid="2_38_2_226"
                                data-log_code="31pchomecomment004005#rid=e05bc32479fa8d2cb04de8b931314558&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.4&amp;pid=2153700031&amp;adm=2243"
                                target="_blank" data-stat-id="AA13441+2_38_2_226" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13441+2_38_2_226', '//order.mi.com/comment/commentDetail/comment_id/12155128', 'pcpid', '31pchomecomment004005#rid=e05bc32479fa8d2cb04de8b931314558&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.4&amp;pid=2153700031&amp;adm=2243']);">这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</a>
                        </p>
                        <p class="author"> 来自于 子书雁 的评价
                            <span class="date" data-date="1443398640"></span>
                        </p>
                        <div class="info">
                            <h3 class="title">
                                <a href="https://item.mi.com/1153700018.html" data-stat-aid="AA13441" data-stat-pid="2_38_2_226" data-log_code="31pchomecomment004005#rid=e05bc32479fa8d2cb04de8b931314558&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.4&amp;pid=2153700031&amp;adm=2243"
                                    target="_blank" data-stat-id="AA13441+2_38_2_226" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13441+2_38_2_226', '//item.mi.com/1153700018.html', 'pcpid', '31pchomecomment004005#rid=e05bc32479fa8d2cb04de8b931314558&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.4&amp;pid=2153700031&amp;adm=2243']);">90分旅行箱 20寸</a>
                            </h3>
                            <span class="sep">|</span>
                            <p class="price">
                                <span class="num">299</span>元</p>
                        </div>
                    </li>
                    <li class="review-item" data-gid="2161200063">
                        <div class="figure figure-img">
                            <a class="exposure" href="https://www.mi.com/miwifi3/" data-stat-aid="AA13437" data-stat-pid="2_38_3_224" data-log_code="31pchomecomment002005#rid=d67e2ff8d77096ec8ed8a7218123181e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.2&amp;pid=2161200063&amp;adm=2239"
                                target="_blank" data-stat-id="AA13437+2_38_3_224" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13437+2_38_3_224', '//www.mi.com/miwifi3/', 'pcpid', '31pchomecomment002005#rid=d67e2ff8d77096ec8ed8a7218123181e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.2&amp;pid=2161200063&amp;adm=2239']);">
                                <img src="/static/index/index/img/8949026b-fa9a-4370-989b-5d5e2f149106.jpg" alt="小米路由器3" width="296" height="220"> </a>
                        </div>
                        <p class="review">
                            <a href="https://order.mi.com/comment/commentDetail/comment_id/133367843" data-stat-aid="AA13437" data-stat-pid="2_38_3_224"
                                data-log_code="31pchomecomment002005#rid=d67e2ff8d77096ec8ed8a7218123181e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.2&amp;pid=2161200063&amp;adm=2239"
                                target="_blank" data-stat-id="AA13437+2_38_3_224" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13437+2_38_3_224', '//order.mi.com/comment/commentDetail/comment_id/133367843', 'pcpid', '31pchomecomment002005#rid=d67e2ff8d77096ec8ed8a7218123181e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.2&amp;pid=2161200063&amp;adm=2239']);">安装简洁方便，信号不错！！！！！</a>
                        </p>
                        <p class="author"> 来自于 追逆 的评价
                            <span class="date" data-date="1460089620"></span>
                        </p>
                        <div class="info">
                            <h3 class="title">
                                <a href="https://www.mi.com/miwifi3/" data-stat-aid="AA13437" data-stat-pid="2_38_3_224" data-log_code="31pchomecomment002005#rid=d67e2ff8d77096ec8ed8a7218123181e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.2&amp;pid=2161200063&amp;adm=2239"
                                    target="_blank" data-stat-id="AA13437+2_38_3_224" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13437+2_38_3_224', '//www.mi.com/miwifi3/', 'pcpid', '31pchomecomment002005#rid=d67e2ff8d77096ec8ed8a7218123181e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.2&amp;pid=2161200063&amp;adm=2239']);">小米路由器3</a>
                            </h3>
                            <span class="sep">|</span>
                            <p class="price">
                                <span class="num">149</span>元</p>
                        </div>
                    </li>
                    <li class="review-item" data-gid="2160800015">
                        <div class="figure figure-img">
                            <a class="exposure" href="https://www.mi.com/littleaudio/" data-stat-aid="AA13438" data-stat-pid="2_38_4_227" data-log_code="31pchomecomment005005#rid=7fbc8ae8b9c8d1738e84a226fa067e04&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.5&amp;pid=2160800015&amp;adm=2240"
                                target="_blank" data-stat-id="AA13438+2_38_4_227" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13438+2_38_4_227', '//www.mi.com/littleaudio/', 'pcpid', '31pchomecomment005005#rid=7fbc8ae8b9c8d1738e84a226fa067e04&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.5&amp;pid=2160800015&amp;adm=2240']);">
                                <img src="/static/index/index/img/bae79ac6-60d5-478d-90e7-ff1222764bd1.jpg" alt="小米随身蓝牙音箱" width="296" height="220"> </a>
                        </div>
                        <p class="review">
                            <a href="https://order.mi.com/comment/commentDetail/comment_id/133394441" data-stat-aid="AA13438" data-stat-pid="2_38_4_227"
                                data-log_code="31pchomecomment005005#rid=7fbc8ae8b9c8d1738e84a226fa067e04&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.5&amp;pid=2160800015&amp;adm=2240"
                                target="_blank" data-stat-id="AA13438+2_38_4_227" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13438+2_38_4_227', '//order.mi.com/comment/commentDetail/comment_id/133394441', 'pcpid', '31pchomecomment005005#rid=7fbc8ae8b9c8d1738e84a226fa067e04&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.5&amp;pid=2160800015&amp;adm=2240']);">超级喜欢！小巧玲珑！音质完美！不知道为什么！只要是小米出的东西我都喜欢！那倒是因为那一句？？小米为发...</a>
                        </p>
                        <p class="author"> 来自于 田密 的评价
                            <span class="date" data-date="1460129880"></span>
                        </p>
                        <div class="info">
                            <h3 class="title">
                                <a href="https://www.mi.com/littleaudio/" data-stat-aid="AA13438" data-stat-pid="2_38_4_227" data-log_code="31pchomecomment005005#rid=7fbc8ae8b9c8d1738e84a226fa067e04&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.5&amp;pid=2160800015&amp;adm=2240"
                                    target="_blank" data-stat-id="AA13438+2_38_4_227" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13438+2_38_4_227', '//www.mi.com/littleaudio/', 'pcpid', '31pchomecomment005005#rid=7fbc8ae8b9c8d1738e84a226fa067e04&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030357.5&amp;pid=2160800015&amp;adm=2240']);">小米随身蓝牙音箱</a>
                            </h3>
                            <span class="sep">|</span>
                            <p class="price">
                                <span class="num">69</span>元</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="content" class="home-content-box xm-plain-box J_itemBox J_contentBox is-visible">
            <div class="box-hd">
                <h2 class="title">内容</h2>
                <!-- <h2 class="title">叮叮当，叮叮当，铃儿响叮当  (」o^∀^)」*゜</h2> -->
            </div>
            <div class="box-bd J_brickBd">
                <ul class="content-list clearfix">
                    <li class="content-item content-item-book content-item-first xm-carousel-container">
                        <h2 class="title">图书</h2>
                        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                            <ul class="item-list clearfix" style="width: 888px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
                                <li>
                                    <h4 class="name">
                                        <a href="http://www.duokan.com/book/120800" class="exposure" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573"
                                            tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573']);">哈利·波特与被诅咒的孩子</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://www.duokan.com/book/120800" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573"
                                            tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573']);">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！ </a>
                                    </p>
                                    <p class="price">
                                        <a href="http://www.duokan.com/book/120800" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573"
                                            tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573']);">29.37元</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://www.duokan.com/book/120800" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573"
                                            tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#rid=16d936d9ceb57678afac914f8a57041c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.1&amp;adm=2573']);">
                                            <img src="/static/index/index/img/5e5da924-84e3-4959-9e25-5891cdf30757.png" alt="哈利·波特与被诅咒的孩子" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="name">
                                        <a href="http://www.duokan.com/book/120867" class="exposure" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572"
                                            tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572']);">好吗好的</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://www.duokan.com/book/120867" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572"
                                            tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572']);">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://www.duokan.com/book/120867" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572"
                                            tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572']);">17.99元</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://www.duokan.com/book/120867" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572"
                                            tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#rid=02142195bb35fb252680e983a949fabb&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030358.2&amp;adm=2572']);">
                                            <img src="/static/index/index/img/61e1385e-54de-48f3-8717-5e4f4b1cdd14.png" alt="好吗好的" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li class="more">
                                    <p class="desc">海量好书，享受精品阅读时光
                                        <br>漂亮的中文排版，千万读者选择！</p>
                                    <a class="btn btn-small btn-line-orange" href="http://www.duokan.com/list/1-1?from=xiaomi" tabindex="-1" target="_blank"
                                        data-stat-id="d933e383b9291e42" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-d933e383b9291e42', 'http://www.duokan.com/list/1-1from=xiaomi', 'pcpid', '']);">前往多看阅读</a>
                                    <img class="thumb" src="/static/index/index/img/more-duokan.jpg" alt="多看阅读" width="160" height="140">
                                </li>
                            </ul>
                        </div>
                        <div class="xm-pagers-wrapper">
                            <ul class="xm-pagers">
                                <li class="pager pager-active">
                                    <span class="dot">1</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">2</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
                            <a class="control control-prev iconfont control-disabled" href="javascript:%20void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
                            <a class="control control-next iconfont" href="javascript:%20void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
                        </div>
                    </li>
                    <li class="content-item content-item-theme xm-carousel-container">
                        <h2 class="title">MIUI 主题</h2>
                        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                            <ul class="item-list clearfix" style="width: 1184px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
                                <li>
                                    <h4 class="name">
                                        <a href="http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61" class="exposure" data-stat-aid="AA18816" data-stat-pid="2_40_1_236"
                                            data-log_code="31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401"
                                            tabindex="-1" target="_blank" data-stat-id="AA18816+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18816+2_40_1_236', 'http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61', 'pcpid', '31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401']);">米奇-有你有我</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61" data-stat-aid="AA18816" data-stat-pid="2_40_1_236"
                                            data-log_code="31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401"
                                            tabindex="-1" target="_blank" data-stat-id="AA18816+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18816+2_40_1_236', 'http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61', 'pcpid', '31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401']);">米奇来啦！小米主题和迪士尼首度合作，打造精品迪士尼系列主题</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61" data-stat-aid="AA18816" data-stat-pid="2_40_1_236"
                                            data-log_code="31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401"
                                            tabindex="-1" target="_blank" data-stat-id="AA18816+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18816+2_40_1_236', 'http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61', 'pcpid', '31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401']);">12米币</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61" data-stat-aid="AA18816" data-stat-pid="2_40_1_236"
                                            data-log_code="31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401"
                                            tabindex="-1" target="_blank" data-stat-id="AA18816+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18816+2_40_1_236', 'http://zhuti.xiaomi.com/detail/3c743214-5064-4b86-8c69-05096a131b61', 'pcpid', '31pchomecontent_theme001007#rid=275283634754ace4359a6deea1eda750&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.1&amp;adm=4401']);">
                                            <img src="/static/index/index/img/xmad_15106277789889_NVKse.png" alt="米奇-有你有我" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="name">
                                        <a href="http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e" class="exposure" data-stat-aid="AA18817" data-stat-pid="2_40_2_237"
                                            data-log_code="31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402"
                                            tabindex="-1" target="_blank" data-stat-id="AA18817+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18817+2_40_2_237', 'http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e', 'pcpid', '31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402']);">钢铁侠-科技控</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e" data-stat-aid="AA18817" data-stat-pid="2_40_2_237"
                                            data-log_code="31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402"
                                            tabindex="-1" target="_blank" data-stat-id="AA18817+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18817+2_40_2_237', 'http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e', 'pcpid', '31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402']);">I'm Iron Man! 小米主题和迪士尼首度合作，打造精品漫威系列主题</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e" data-stat-aid="AA18817" data-stat-pid="2_40_2_237"
                                            data-log_code="31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402"
                                            tabindex="-1" target="_blank" data-stat-id="AA18817+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18817+2_40_2_237', 'http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e', 'pcpid', '31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402']);">12米币</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e" data-stat-aid="AA18817" data-stat-pid="2_40_2_237"
                                            data-log_code="31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402"
                                            tabindex="-1" target="_blank" data-stat-id="AA18817+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18817+2_40_2_237', 'http://zhuti.xiaomi.com/detail/ebc8eae8-6b7f-45c6-914e-f816c91a6d8e', 'pcpid', '31pchomecontent_theme002007#rid=24d1ac9ad1d51d2d0e811ffb839b979c&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.2&amp;adm=4402']);">
                                            <img src="/static/index/index/img/xmad_15106285428716_UgNzb.png" alt="钢铁侠-科技控" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="name">
                                        <a href="http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef" class="exposure" data-stat-aid="AA18818" data-stat-pid="2_40_3_238"
                                            data-log_code="31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403"
                                            tabindex="-1" target="_blank" data-stat-id="AA18818+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18818+2_40_3_238', 'http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef', 'pcpid', '31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403']);">大白-戳戳我抱抱你</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef" data-stat-aid="AA18818" data-stat-pid="2_40_3_238"
                                            data-log_code="31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403"
                                            tabindex="-1" target="_blank" data-stat-id="AA18818+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18818+2_40_3_238', 'http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef', 'pcpid', '31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403']);">大白(●—●)吧啦啦啦~小米主题和迪士尼首度合作，打造精品迪士尼系列主题</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef" data-stat-aid="AA18818" data-stat-pid="2_40_3_238"
                                            data-log_code="31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403"
                                            tabindex="-1" target="_blank" data-stat-id="AA18818+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18818+2_40_3_238', 'http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef', 'pcpid', '31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403']);">15米币</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef" data-stat-aid="AA18818" data-stat-pid="2_40_3_238"
                                            data-log_code="31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403"
                                            tabindex="-1" target="_blank" data-stat-id="AA18818+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18818+2_40_3_238', 'http://zhuti.xiaomi.com/detail/8cb17095-1c34-4287-966f-212744c13bef', 'pcpid', '31pchomecontent_theme003007#rid=30eb3222272404b004b2a6c0da7ac65e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030359.3&amp;adm=4403']);">
                                            <img src="/static/index/index/img/xmad_151062859387_ECIuV.png" alt="大白-戳戳我抱抱你" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li class="more">
                                    <p class="desc">众多个性主题、百变锁屏与自由桌面
                                        <br>让你的手机与众不同！</p>
                                    <a class="btn btn-small btn-line-green" href="http://zhuti.xiaomi.com/?from=mi" tabindex="-1" target="_blank" data-stat-id="5845a73f6a11052c"
                                        onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5845a73f6a11052c', 'http://zhuti.xiaomi.com/from=mi', 'pcpid', '']);">前往MIUI主题市场</a>
                                    <img class="thumb" src="/static/index/index/img/more-miui.jpg" alt="MIUI主题市场" width="160" height="140">
                                </li>
                            </ul>
                        </div>
                        <div class="xm-pagers-wrapper">
                            <ul class="xm-pagers">
                                <li class="pager pager-active">
                                    <span class="dot">1</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">2</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">3</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">4</span>
                                </li>
                            </ul>
                        </div>
                        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
                            <a class="control control-prev iconfont control-disabled" href="javascript:%20void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
                            <a class="control control-next iconfont" href="javascript:%20void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
                        </div>
                    </li>
                    <li class="content-item content-item-game xm-carousel-container">
                        <h2 class="title">游戏</h2>
                        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                            <ul class="item-list clearfix" style="width: 1184px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
                                <li>
                                    <h4 class="name">
                                        <a href="http://js2.xoyo.com/?channel=bd" class="exposure" data-stat-aid="AA19573" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794"
                                            tabindex="-1" target="_blank" data-stat-id="AA19573+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19573+2_41_1_239', 'http://js2.xoyo.com/channel=bd', 'pcpid', '31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794']);">剑侠世界2</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://js2.xoyo.com/?channel=bd" data-stat-aid="AA19573" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794"
                                            tabindex="-1" target="_blank" data-stat-id="AA19573+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19573+2_41_1_239', 'http://js2.xoyo.com/channel=bd', 'pcpid', '31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794']);">潮流武侠，炫动江湖！</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://js2.xoyo.com/?channel=bd" data-stat-aid="AA19573" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794"
                                            tabindex="-1" target="_blank" data-stat-id="AA19573+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19573+2_41_1_239', 'http://js2.xoyo.com/channel=bd', 'pcpid', '31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794']);"></a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://js2.xoyo.com/?channel=bd" data-stat-aid="AA19573" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794"
                                            tabindex="-1" target="_blank" data-stat-id="AA19573+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19573+2_41_1_239', 'http://js2.xoyo.com/channel=bd', 'pcpid', '31pchomecontent_game001008#rid=3372cebe162387cb093af82dc800d8d3&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.1&amp;adm=4794']);">
                                            <img src="/static/index/index/img/xmad_15175523589542_niohb.png" alt="剑侠世界2" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="name">
                                        <a href="http://xmcs.mi.com/?channel=bdad" class="exposure" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558"
                                            tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558']);">小米超神</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://xmcs.mi.com/?channel=bdad" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558"
                                            tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558']);">实力派，一起团！！</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://xmcs.mi.com/?channel=bdad" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558"
                                            tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558']);"></a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://xmcs.mi.com/?channel=bdad" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558"
                                            tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#rid=c131bf74da2d87d749d8b627ea9e66e1&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.2&amp;adm=4558']);">
                                            <img src="/static/index/index/img/xmad_15120234492499_MNEVo.png" alt="小米超神" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="name">
                                        <a href="http://game.xiaomi.com/miyou/index.html" class="exposure" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128"
                                            tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128']);">米柚手游模拟器</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://game.xiaomi.com/miyou/index.html" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128"
                                            tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128']);">在电脑上玩遍小米所有手游</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://game.xiaomi.com/miyou/index.html" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128"
                                            tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128']);">免费</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://game.xiaomi.com/miyou/index.html" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128"
                                            tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#rid=e13d68f283d89e23af92898835be9455&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030360.3&amp;adm=1128']);">
                                            <img src="/static/index/index/img/T1czW_BXCv1R4cSCrK.png" alt="米柚手游模拟器" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li class="more">
                                    <p class="desc">免费下载海量的手机游戏
                                        <br>天天都有现金福利赠送</p>
                                    <a class="btn btn-small btn-line-red" href="http://game.xiaomi.com/index.php?c=index&amp;a=run" tabindex="-1" target="_blank"
                                        data-stat-id="31d96842105f72a4" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-31d96842105f72a4', 'http://game.xiaomi.com/index.phpc=index&amp;a=run', 'pcpid', '']);">前往小米游戏商店</a>
                                    <img class="thumb" src="/static/index/index/img/more-game.jpg" alt="小米游戏商店" width="160" height="140">
                                </li>
                            </ul>
                        </div>
                        <div class="xm-pagers-wrapper">
                            <ul class="xm-pagers">
                                <li class="pager pager-active">
                                    <span class="dot">1</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">2</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">3</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">4</span>
                                </li>
                            </ul>
                        </div>
                        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
                            <a class="control control-prev iconfont control-disabled" href="javascript:%20void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
                            <a class="control control-next iconfont" href="javascript:%20void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
                        </div>
                    </li>
                    <li class="content-item content-item-app xm-carousel-container">
                        <h2 class="title">应用</h2>
                        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
                            <ul class="item-list clearfix" style="width: 1184px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
                                <li>
                                    <h4 class="name">
                                        <a href="http://app.mi.com/subject/169216" class="exposure" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997"
                                            tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997']);">2017金米奖</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://app.mi.com/subject/169216" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997"
                                            tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997']);">最优秀的应用和游戏</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://app.mi.com/subject/169216" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997"
                                            tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997']);"></a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://app.mi.com/subject/169216" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997"
                                            tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#rid=f0d1854b1c0fb105d27498ab1c50fdb0&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.1&amp;adm=2997']);">
                                            <img src="/static/index/index/img/3332da7d-4056-4694-9548-c83b7b3af7d3.png" alt="2017金米奖" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="name">
                                        <a href="http://app.mi.com/detail/71417" class="exposure" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633"
                                            tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633']);">Forest</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://app.mi.com/detail/71417" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633"
                                            tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633']);">帮助您专心于生活中每个重要时刻</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://app.mi.com/detail/71417" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633"
                                            tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633']);">免费</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://app.mi.com/detail/71417" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633"
                                            tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#rid=d3702d5266f93e98c75c6b429c1031d9&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.2&amp;adm=633']);">
                                            <img src="/static/index/index/img/T1TkKvBCKv1R4cSCrK.png" alt="Forest" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="name">
                                        <a href="http://app.mi.com/subject/167924" class="exposure" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642"
                                            tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642']);">小米应用</a>
                                    </h4>
                                    <p class="desc">
                                        <a href="http://app.mi.com/subject/167924" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642"
                                            tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642']);">小米出品 必属精品</a>
                                    </p>
                                    <p class="price">
                                        <a href="http://app.mi.com/subject/167924" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642"
                                            tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642']);">免费</a>
                                    </p>
                                    <div class="figure figure-img">
                                        <a href="http://app.mi.com/subject/167924" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642"
                                            tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#rid=948609b5f038003f384b13f37dfb9cdf&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030361.3&amp;adm=642']);">
                                            <img src="/static/index/index/img/T15VZvB5Kv1R4cSCrK.png" alt="小米应用" width="160" height="140"> </a>
                                    </div>
                                </li>
                                <li class="more">
                                    <p class="desc">帮助小米手机和其他安卓手机用户
                                        <br>发现好用的安卓应用</p>
                                    <a class="btn btn-small btn-line-ocean" href="http://app.mi.com/?from=mi" tabindex="-1" target="_blank" data-stat-id="39f6cef1320c40ca"
                                        onclick="_msq.push(['trackEvent', '81190ccc4d52f577-39f6cef1320c40ca', 'http://app.mi.com/from=mi', 'pcpid', '']);">前往小米应用商店</a>
                                    <img class="thumb" src="/static/index/index/img/more-app.jpg" alt="小米应用商店" width="160" height="140">
                                </li>
                            </ul>
                        </div>
                        <div class="xm-pagers-wrapper">
                            <ul class="xm-pagers">
                                <li class="pager pager-active">
                                    <span class="dot">1</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">2</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">3</span>
                                </li>
                                <li class="pager">
                                    <span class="dot">4</span>
                                </li>
                            </ul>
                        </div>
                        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
                            <a class="control control-prev iconfont control-disabled" href="javascript:%20void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
                            <a class="control control-next iconfont" href="javascript:%20void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox is-visible">
            <div class="box-hd">
                <h2 class="title">视频</h2>
                <!-- <h2 class="title">今晚滑雪多快乐，我们坐在雪橇上  ︿(￣︶￣)︿</h2> -->
                <div class="more J_brickNav">
                    <a class="more-link" href="https://www.mi.com/video/" target="_blank" data-stat-id="29fd77fc2e609c84" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-29fd77fc2e609c84', '//www.mi.com/video/', 'pcpid', '']);">查看全部
                        <i class="iconfont"></i>
                    </a>
                </div>
            </div>
            <div class="box-bd J_brickBd">
                <ul class="video-list clearfix">
                    <li class="video-item video-item-first">
                        <div class="figure figure-img">
                            <a class="J_videoTrigger exposure" href="javascript:%20void(0);" data-stat-aid="AA19424" data-stat-pid="2_43_1_245" data-log_code="31pchomevideo001010#rid=2692e0232cc4c678b285916cd27cce24&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.1&amp;adm=4734"
                                data-video="//v.mifile.cn/b2c-mimall-media/bba7529de8957c041624bf0b0fb4458f.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/b8649c8665f00fbadabd56663edb07fa.jpg"
                                data-video-title="品质之魂 存于匠心" title="点击播放视频" data-stat-id="AA19424+2_43_1_245" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19424+2_43_1_245', 'javascript:void0', 'pcpid', '31pchomevideo001010#rid=2692e0232cc4c678b285916cd27cce24&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.1&amp;adm=4734']);">
                                <img src="/static/index/index/img/xmad_15159163504023_uToSM.jpg" alt="品质之魂 存于匠心" width="296" height="180">
                                <span class="play">
                                    <i class="iconfont"></i>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a class="J_videoTrigger" href="javascript:%20void(0);" data-stat-aid="AA19424" data-stat-pid="2_43_1_245" data-log_code="31pchomevideo001010#rid=2692e0232cc4c678b285916cd27cce24&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.1&amp;adm=4734"
                                data-video="//v.mifile.cn/b2c-mimall-media/bba7529de8957c041624bf0b0fb4458f.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/b8649c8665f00fbadabd56663edb07fa.jpg"
                                data-video-title="品质之魂 存于匠心" title="点击播放视频" data-stat-id="AA19424+2_43_1_245" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19424+2_43_1_245', 'javascript:void0', 'pcpid', '31pchomevideo001010#rid=2692e0232cc4c678b285916cd27cce24&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.1&amp;adm=4734']);">品质之魂 存于匠心</a>
                        </h3>
                        <p class="desc">红米手机品质的工程师访谈</p>
                    </li>
                    <li class="video-item">
                        <div class="figure figure-img">
                            <a class="J_videoTrigger exposure" href="javascript:%20void(0);" data-stat-aid="AA19425" data-stat-pid="2_43_2_246" data-log_code="31pchomevideo002010#rid=97cecfadf38411d2f8b2707d964ac742&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.2&amp;adm=4733"
                                data-video="//v.mifile.cn/b2c-mimall-media/643918d12d181ab65634cbd4ecd0cf1d.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/6de7e9f338d5863faf79447ecf1298a8.jpg"
                                data-video-title="红米手机工艺视频" title="点击播放视频" data-stat-id="AA19425+2_43_2_246" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19425+2_43_2_246', 'javascript:void0', 'pcpid', '31pchomevideo002010#rid=97cecfadf38411d2f8b2707d964ac742&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.2&amp;adm=4733']);">
                                <img src="/static/index/index/img/xmad_15156644526382_GiJxL.jpg" alt="红米手机工艺视频" width="296" height="180">
                                <span class="play">
                                    <i class="iconfont"></i>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a class="J_videoTrigger" href="javascript:%20void(0);" data-stat-aid="AA19425" data-stat-pid="2_43_2_246" data-log_code="31pchomevideo002010#rid=97cecfadf38411d2f8b2707d964ac742&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.2&amp;adm=4733"
                                data-video="//v.mifile.cn/b2c-mimall-media/643918d12d181ab65634cbd4ecd0cf1d.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/6de7e9f338d5863faf79447ecf1298a8.jpg"
                                data-video-title="红米手机工艺视频" title="点击播放视频" data-stat-id="AA19425+2_43_2_246" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19425+2_43_2_246', 'javascript:void0', 'pcpid', '31pchomevideo002010#rid=97cecfadf38411d2f8b2707d964ac742&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.2&amp;adm=4733']);">红米手机工艺视频</a>
                        </h3>
                        <p class="desc">红米5 / 红米5 Plus 高颜值机身</p>
                    </li>
                    <li class="video-item">
                        <div class="figure figure-img">
                            <a class="J_videoTrigger exposure" href="javascript:%20void(0);" data-stat-aid="AA19426" data-stat-pid="2_43_3_247" data-log_code="31pchomevideo003010#rid=d1731d3d8ae6fd3c03305019b2182a2d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.3&amp;adm=4162"
                                data-video="//v.mifile.cn/b2c-mimall-media/9e43087a3ac5525a33982a2da2ba2cff.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/a62e2a7799d9651b9895cdb3d5bdd5b7.jpg"
                                data-video-title="雷军与斯塔克打造全面屏2.0" title="点击播放视频" data-stat-id="AA19426+2_43_3_247" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19426+2_43_3_247', 'javascript:void0', 'pcpid', '31pchomevideo003010#rid=d1731d3d8ae6fd3c03305019b2182a2d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.3&amp;adm=4162']);">
                                <img src="/static/index/index/img/xmad_15156722682931_MVAmC.jpg" alt="雷军与斯塔克打造全面屏2.0" width="296" height="180">
                                <span class="play">
                                    <i class="iconfont"></i>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a class="J_videoTrigger" href="javascript:%20void(0);" data-stat-aid="AA19426" data-stat-pid="2_43_3_247" data-log_code="31pchomevideo003010#rid=d1731d3d8ae6fd3c03305019b2182a2d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.3&amp;adm=4162"
                                data-video="//v.mifile.cn/b2c-mimall-media/9e43087a3ac5525a33982a2da2ba2cff.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/a62e2a7799d9651b9895cdb3d5bdd5b7.jpg"
                                data-video-title="雷军与斯塔克打造全面屏2.0" title="点击播放视频" data-stat-id="AA19426+2_43_3_247" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19426+2_43_3_247', 'javascript:void0', 'pcpid', '31pchomevideo003010#rid=d1731d3d8ae6fd3c03305019b2182a2d&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.3&amp;adm=4162']);">雷军与斯塔克打造全面屏2.0</a>
                        </h3>
                        <p class="desc">一场关于小米MIX 2 极致工艺的巅峰对话</p>
                    </li>
                    <li class="video-item">
                        <div class="figure figure-img">
                            <a class="J_videoTrigger exposure" href="javascript:%20void(0);" data-stat-aid="AA19427" data-stat-pid="2_43_4_249" data-log_code="31pchomevideo004010#rid=55da91953c2cce4eb3eb346de83ded4e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.4&amp;adm=3993"
                                data-video="//v.mifile.cn/b2c-mimall-media/079803c78170eaf692d936eba3978cc1.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/d47f7a1895b0da1f58ff28095c1babed.png"
                                data-video-title="MIUI 9 理念视频" title="点击播放视频" data-stat-id="AA19427+2_43_4_249" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19427+2_43_4_249', 'javascript:void0', 'pcpid', '31pchomevideo004010#rid=55da91953c2cce4eb3eb346de83ded4e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.4&amp;adm=3993']);">
                                <img src="/static/index/index/img/xmad_15156722489305_NSZUh.jpg" alt="MIUI 9 理念视频" width="296" height="180">
                                <span class="play">
                                    <i class="iconfont"></i>
                                </span>
                            </a>
                        </div>
                        <h3 class="title">
                            <a class="J_videoTrigger" href="javascript:%20void(0);" data-stat-aid="AA19427" data-stat-pid="2_43_4_249" data-log_code="31pchomevideo004010#rid=55da91953c2cce4eb3eb346de83ded4e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.4&amp;adm=3993"
                                data-video="//v.mifile.cn/b2c-mimall-media/079803c78170eaf692d936eba3978cc1.mp4" data-video-poster="//i8.mifile.cn/b2c-mimall-media/d47f7a1895b0da1f58ff28095c1babed.png"
                                data-video-title="MIUI 9 理念视频" title="点击播放视频" data-stat-id="AA19427+2_43_4_249" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19427+2_43_4_249', 'javascript:void0', 'pcpid', '31pchomevideo004010#rid=55da91953c2cce4eb3eb346de83ded4e&amp;t=normal&amp;page=home&amp;act=other&amp;bid=3030362.4&amp;adm=3993']);">MIUI 9 理念视频</a>
                        </h3>
                        <p class="desc">快如闪电，前所未有的流畅</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="J_modalVideo" class="modal modal-video fade modal-hide">
    <div class="modal-hd">
        <h3 class="title">视频播放</h3>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="7f05d4a8c5beeb64" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-7f05d4a8c5beeb64', 'javascript:void0', 'pcpid', '']);">
            <i class="iconfont"></i>
        </a>
    </div>
    <div class="modal-bd">
        <div class="loading">
            <div class="loader"></div>
        </div>
    </div>
</div>



     <?php echo widget("Cate/footer"); ?>
