<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"F:\wamp\www\mall\master\public/../application/index\view\indexpublic\header.html";i:1519877038;}*/ ?>
<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">

    <!-- goodslist 的js  -->
    <script type="text/javascript" async="" src="/static/index/goodslist/js/jquery.js"></script>
    <script type="text/javascript" async="" src="/static/index/goodslist/js/xmst.js"></script>
    <!-- goodslist 的js  -->
<!-- goodslist 的css  -->
<link rel="stylesheet" href="/static/index/goodslist/css/base.css">
<link rel="stylesheet" type="text/css" href="/static/index/goodslist/css/index.css">
<script src="/static/index/goodslist/css/userInfoJsonP.html" type="text/javascript" async=""></script>
<!-- goodslist 的css  -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_006.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_004.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_013.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_007.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_002.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_009.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_005.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_012.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_008.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_010.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_014.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_003.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_015.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/mstr_011.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/jquery.js"></script>
    <script type="text/javascript" async="" src="/static/index/index/js/xmst.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <title>浦原杂货铺</title>
    <meta name="description" content="油腻的师姐">
    <meta name="keywords" content="商城">
    <meta name="viewport" content="width=1226">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://s01.mifile.cn/">
    <link rel="dns-prefetch" href="https://c1.mifile.cn/">
    <link rel="dns-prefetch" href="https://i3.mifile.cn/">
    <link rel="dns-prefetch" href="https://i2.mifile.cn/">
    <link rel="dns-prefetch" href="https://i1.mifile.cn/">
    <link rel="dns-prefetch" href="https://i8.mifile.cn/">
    <link rel="dns-prefetch" href="https://v.mifile.cn/">
    <link rel="dns-prefetch" href="https://a.huodong.mi.cn/">

    <link rel="shortcut icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/static/index/index/img/bitbug_favicon.ico" type="image/x-icon">
    <link rel="search" title="mi.com" href="https://s1.mi.com/search.xml?v1.0" type="application/opensearchdescription+xml">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="stylesheet" href="/static/index/index/css/base.css">
    <link rel="stylesheet" href="/static/index/index/css/index.css">
    <link rel="stylesheet" href="/static/index/index/css/myorder.css">

    <script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
    <script src="/static/index/index/js/userInfoJsonP.htm" type="text/javascript" async=""></script>
</head>

<body>


    <div class="site-topbar">
        <div class="container">

            <div class="topbar-nav">
                <span>你可能进了一个假网站 :)</span>
                <a rel="nofollow" href="" data-stat-id="e0f893c4337cbe4d" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e0f893c4337cbe4d', '//www.mi.com/index.html', 'pcpid', '']);">
                    天堂有路你不走，地狱无门闯进来</a>
            </div>
            <div class="topbar-cart" id="J_miniCartTrigger">
                <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="/order/car" data-stat-id="993329c4d3756bcd"
                    >
                    <i class="iconfont"></i>购物车
                    <span class="cart-mini-num J_cartNum">（0）</span>
                </a>
                <div class="cart-menu" id="J_miniCartMenu">
                    <div class="loading">
                        <div class="loader"></div>
                    </div>
                </div>
            </div>
            <div class="topbar-info" id="J_userInfo">
                <?php if(\think\Session::get('username')): ?>
                <a rel="nofollow" class="link" href="" data-needlogin="true"
                    data-stat-id="fd865978c10e172e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fd865978c10e172e', '//order.mi.com/site/loginredirectUrl=https://www.mi.com/index.html', 'pcpid', '']);">欢迎您回来<?php echo \think\Session::get('username'); ?></a>

                <a rel="nofollow" class="link" href="/indexlogin/Logout" data-needlogin="true"
                    data-stat-id="fd865978c10e172e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fd865978c10e172e', '//order.mi.com/site/loginredirectUrl=https://www.mi.com/index.html', 'pcpid', '']);">退出</a>
                <?php else: ?>
                 <a rel="nofollow" class="link" href="/indexlogin/Login" data-needlogin="true"
                    data-stat-id="fd865978c10e172e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fd865978c10e172e', '//order.mi.com/site/loginredirectUrl=https://www.mi.com/index.html', 'pcpid', '']);">登录</a>
                    
                <span class="sep">|</span>
                <a rel="nofollow" class="link" href="/indexregister/Register" data-stat-id="b072cf7c6a856e34" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-b072cf7c6a856e34', 'https://account.xiaomi.com/pass/register', 'pcpid', '']);">注册</a>
                <?php endif; ?>

                <span class="sep">|</span>
                <span class="message">
                    <a rel="nofollow" href="/order/index" data-stat-id="d77cf2f70fc8b29b" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-d77cf2f70fc8b29b', '//order.mi.com/message/list', 'pcpid', '']);">我的订单
                        <i class="J_miMessageTotal"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>

    <div class="site-header">
        <div class="container">
            <div class="header-logo">
                <a class="logo jiong" href="/index/index" title="说了是假网站">囧</a>
    
                <div class="doodle" style="display: block;">
                    <a class="exposure link-block" style="background-image:url(/static/index/index/img/login.jpg)" href="/index/index" target="_self"></a>
                </div>
            </div>
    
            <div class="header-nav">
                <ul class="nav-list J_navMainList clearfix">
    
                    <li id="Jugg_navCategory" class="nav-category">
                        <a class="link-category" href="https://list.mi.com/" data-stat-id="a325049a1994809b" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-a325049a1994809b', '//list.mi.com', 'pcpid', '']);">
                            <span class="text">全部商品分类</span>
                        </a>
                        <div class="site-category">
                            <ul id="J_categoryList" class="site-category-list clearfix">
                                <!-- 分类导航栏一级遍历 -->
                                
                                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$lev1): ?>
                                <li class="category-item">
                                    <a class="title" href="javascript:;" data-stat-id="6f5c93b4d1baf5e9" ><?php echo $lev1['name']; ?>
                                        <i class="iconfont"></i>
                                    </a>
                                    <div class="children clearfix children-col-3">
                                        <!-- 二级遍历 -->
                                        <?php if(is_array($lev1['shop']) || $lev1['shop'] instanceof \think\Collection || $lev1['shop'] instanceof \think\Paginator): if( count($lev1['shop'])==0 ) : echo "" ;else: foreach($lev1['shop'] as $key=>$lev2): ?>
                                        <ul class="children-list children-list-col children-list-col-1">
                                            <li>
                                                <a class="link" href="/index/goodsInfo/id/<?php echo $lev2['id']; ?>" data-stat-id="a6feebd5e5469dac">
                                                    <img class="thumb" src="/static/index/index/img/80-4a.png" data-src="//i1.mifile.cn/f/i/g/2016/cn-index/80-4a.png?width=80&amp;height=80"
                                                        alt="" width="40" height="40">
                                                    <span class="text"><?php echo $lev2['name']; ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                               
                            </ul>
                        </div>
                    </li>
                    <!-- 导航栏 列表 -->
                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$vo): ?>
                   
                    <li class="nav-item">
                        <a class="link" href="javascript:%20void(0);" data-stat-id="69baf6920236bfcb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-69baf6920236bfcb', 'javascript:void0', 'pcpid', '']);">
                            <span class="text"><?php echo $vo['name']; ?></span>
                            <span class="arrow"></span>
                        </a>
                        <div class="item-children">
                            <div class="container">
                                <ul class="children-list clearfix">
                                    <li>
                                        <div class="figure figure-thumb">
                                            <a href="https://www.mi.com/mi5x/" data-stat-id="8b3bfc71ece6be0f" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-8b3bfc71ece6be0f', '//www.mi.com/mi5x/', 'pcpid', '']);">
                                                <img src="/static/index/index/img/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/5x-2.jpg" alt="小米5X" width="160"
                                                    height="110">
                                            </a>
                                        </div>
                                        <div class="title">
                                            <a href="https://www.mi.com/mi5x/" data-stat-id="8abb7933ae1b809e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-8abb7933ae1b809e', '//www.mi.com/mi5x/', 'pcpid', '']);">小米5X</a>
                                        </div>
                                        <p class="price">1299元起</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li class="nav-item">
                        <a class="link" href="javascript:%20void(0);" data-stat-id="69baf6920236bfcb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-69baf6920236bfcb', 'javascript:void0', 'pcpid', '']);">
                            <span class="text">服务</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="link" href="javascript:%20void(0);" data-stat-id="69baf6920236bfcb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-69baf6920236bfcb', 'javascript:void0', 'pcpid', '']);">
                            <span class="text">社区</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 导航栏 列表结束 -->
            <!-- 搜索框  -->
            <div class="header-search">
                <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                    <label for="search" class="hide">站内搜索</label>
                    <input class="search-text" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'王大锤','Rst':29},{'Key':'你猜','Rst':8}]}"
                        type="search">
                    <input class="search-btn iconfont" value="" type="submit">
                    <div class="search-hot-words">
                        <a href="https://www.mi.com/redmi5/" data-stat-id="4578210b7d98a637" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4578210b7d98a637', 'https://www.mi.com/redmi5/', 'pcpid', '']);">哇哈哈</a>
                        <a href="https://item.mi.com/product/10000069.html" data-stat-id="493cb96a2f0f9876" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-493cb96a2f0f9876', 'https://item.mi.com/product/10000069.html', 'pcpid', '']);">娃娃</a>
                    </div>
                    <div id="J_keywordList" class="keyword-list hide">
                        <ul class="result-list"></ul>
                    </div>
                </form>
            </div>
            <!-- 搜索框结束 -->
        </div>
    </div>





