<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"F:\wamp\www\mall\master\public/../application/index\view\index\goodsList.html";i:1519647142;}*/ ?>
 <?php echo widget("Cate/indexHeader"); ?>
<div class="container">
<div class="page-main channel-page" id="J_channelPage">

    <!-- 保留 -->
    <div class="container channel-product channel-product-two4 J_channelLazyBox is-visible">
        <div class="row" style="margin-left:-16px">
            <?php if(!$data): ?>
            <div class="container channel-product-top J_channelLazyBox is-visible">
                <div class="product-cell shadow" style="text-align:center;">
                 <span style="font:bold 80px/40px 黑体;">本商品暂时缺货</span>
                </div>
            </div>
            <?php endif; if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
            <div class="span10 product-cell shadow">
                <div class="figure">
                    <a class="exposure" href="/index/item/id/<?php echo $vo['id']; ?>" data-log_code="311915pcchannellist_two_type4001005#rid=5819ed6727c67db9438cd5bb72d0e563&amp;t=product&amp;page=channel&amp;act=other&amp;page_id=1915&amp;bid=3005442.1&amp;pid=10000064"
                        >
                        <img class="J_lazy" alt="" style="background-color:#AC8483;" src="<?php echo $vo['pic']; ?>"> </a>
                </div>
                <h3 class="title">
                    <a class="exposure" href="" data-log_code="311915pcchannellist_two_type4001005#rid=5819ed6727c67db9438cd5bb72d0e563&amp;t=product&amp;page=channel&amp;act=other&amp;page_id=1915&amp;bid=3005442.1&amp;pid=10000064"
                        ><?php echo $vo['name']; ?></a>
                </h3>
                <p class="desc">轻薄全金属</p>
                <p class="price">
                    <strong><?php echo $vo['price']; ?></strong>元起 </p>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
        </div>
    </div>
    <!-- 保留 -->
</div>
</div>
<script type="text/x-dot-template" id="dotBigTitle">
    <div class="container channel-big-title">
        <h2>{{= it.items[0].label_title}}</h2>
    </div>
</script>
<script type="text/x-dot-template" id="dotTitle">
    <div class="container channel-title">
        <h2>{{= it.items[0].label_title}}</h2>
    </div>
</script>
<script type="text/x-dot-template" id="dotActionTitle">
    <div class="container channel-title">
        <h2>{{= it.items[0].action_title}}</h2>
        <div class="more">
            <a class="more-link exposure"
               href="{{= it.items[0].pc_url}}"
               data-log_code="{{= it.items[0].action.log_code}}
               target="_blank">查看全部<i class="iconfont">&#xe623;</i></a>
        </div>
    </div>
</script>
<script type="text/x-dot-template" id="dotDivider">
    <div class="container channel-line"
         style="
            {{? it.line_height}}height:{{= it.line_height/2}}px;{{?}}
            {{? it.line_color}}background-color:{{= it.line_color}};{{?}}"></div>
</script>
<script type="text/x-dot-template" id="dotGallery">
    <div class="channel-focus">
        <div id="J_channelSlider">
            {{~ it.items:item:index}}
            <div class="slide"
                 data-src="{{= item.img_url}}"
                 data-width="{{= item.w/2}}"
                 data-height="{{= item.h/2}}"
                 style="
                    height:{{= item.h/2}}px;
                    {{? item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                <a class="exposure"
                   {{? item.pc_url }}
                   href="{{= item.pc_url}}"
                   {{? }}
                   data-log_code="{{= item.action.log_code}}"
                   target="_blank"></a>
            </div>
            {{~}}
        </div>
    </div>
</script>
<script type="text/x-dot-template" id="dotAutoFill">
    <div class="container channel-auto J_channelLazyBox" style="height:{{= it.h/2 }}px;">
        <div class="auto-row">
            {{~ it.items:item:index}}
                {{? parseInt(item.y) < 0}}
                <div class="auto-cell-outer{{? item.pc_url}} shadow{{?}}"
                     style="
                        width:{{= item.w/2}}px;
                        height:{{= (parseInt(item.h) + parseInt(item.y))/2}}px;
                        left:{{= item.x/2}}px;
                        top:0;">
                    <a class="auto-cell exposure"
                       {{? item.pc_url}}
                       href="{{= item.pc_url}}"
                       target="_blank"
                       {{?}}
                       data-log_code="{{= item.action.log_code}}"
                       style="
                        width:{{= item.w/2}}px;
                        height:{{= item.h/2}}px;
                        left:0;
                        top:{{= item.y/2}}px;
                        {{? item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                        <img class="J_lazy"
                             data-src="{{= item.img_url}}">
                    </a>
                </div>
                {{??}}
                <a class="auto-cell exposure{{? item.pc_url}} shadow{{?}}"
                   {{? item.pc_url}}
                   href="{{= item.pc_url}}"
                   target="_blank"
                   {{?}}
                   data-log_code="{{= item.action.log_code}}"
                   style="
                        width:{{= item.w/2}}px;
                        height:{{= item.h/2}}px;
                        left:{{= item.x/2}}px;
                        top:{{= item.y/2}}px;
                        {{? item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                    <img class="J_lazy"
                         data-src="{{= item.img_url}}">
                </a>
                {{?}}
            {{~}}
        </div>
    </div>
</script>
<script type="text/x-dot-template" id="dotTopProduct">
    <div class="container channel-product-top J_channelLazyBox">
        {{~ it.items:item:index}}
        <div class="product-cell shadow">
            <div class="figure">
                <a class="exposure"
                   href="{{= item.pc_url}}"
                   data-log_code="{{= item.action.log_code}}"
                   target="_blank">
                    <img class="J_lazy"
                         data-src="{{= item.img_url}}"
                         alt="{{= item.product_name}}"
                         style="{{? 
item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                </a>
            </div>
            <div class="content">
                <h3 class="title">
                    <a class="exposure"
                       href="{{= item.pc_url}}"
                       data-log_code="{{= item.action.log_code}}"
                       target="_blank">{{= item.product_name}}</a>
                </h3>
                <p class="desc">{{= item.product_brief}}</p>
                <p class="price">
                    <strong>{{= item.product_price}}</strong>元{{? 
item.show_price_qi}}起{{?}}{{? item.product_price !== 
item.product_org_price}}<del>{{= item.product_org_price}}元</del>{{?}}
                </p>
                <p class="link">
                    <a class="exposure"
                       href="{{= item.pc_url}}"
                       data-log_code="{{= item.action.log_code}}"
                       target="_blank">了解产品 &gt;</a>
                </p>
            </div>
        </div>
        {{~}}
    </div>
</script>
<script type="text/x-dot-template" id="dotRowProduct">
    <div class="container channel-product channel-product-{{= it.type}} J_channelLazyBox">
        <div class="row">
            {{~ it.items:item:index}}
            <div class="span{{= it.col}} product-cell shadow{{? item.product_tag}} product-with-tag product-tag-1{{?}}">
                <div class="figure">
                    <a class="exposure"
                       href="{{= item.pc_url}}"
                       data-log_code="{{= item.action.log_code}}"
                       target="_blank">
                        <img class="J_lazy"
                             data-src="{{= item.img_url}}"
                             alt="{{= item.product_name}}"
                             style="{{? item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                    </a>
                </div>
                <h3 class="title">
                    <a class="exposure"
                       href="{{= item.pc_url}}"
                       data-log_code="{{= item.action.log_code}}"
                       target="_blank">{{= item.product_name}}</a>
                </h3>
                <p class="desc">{{? item.product_brief}}{{= item.product_brief}}{{??}}&nbsp;{{?}}</p>
                {{? item.product_tag}}
                <div class="tag">
                    <div class="tag">{{= item.product_tag}}</div>
                </div>
                {{?}}
                <p class="price">
                    <strong>{{= item.product_price}}</strong>元{{? item.show_price_qi}}起{{?}}
                    {{? item.product_price !== item.product_org_price}}<del>{{= item.product_org_price}}元</del>{{?}}
                </p>
            </div>
            {{~}}
        </div>
    </div>
</script>
<script type="text/x-dot-template" id="dotTabProduct">
    <div class="container channel-product-tab J_channelLazyBox">
        <div class="channel-title">
            <h2>{{= it.label_title}}</h2>
            <div class="more">
                <ul class="tab-list J_productTabSwitch" data-tab-target="product-tab-container-{{= it.index}}">
                    {{~ it.items:tab:tab_index}}
                    <li class="{{? tab_index === 0}}tab-active{{?}}">{{= tab.title}}</li>
                    {{~}}
                </ul>
            </div>
        </div>
        <div class="tab-container" id="product-tab-container-{{= it.index}}">
            {{~ it.items:tab:tab_index}}
            <div class="channel-product channel-product-five tab-content{{? tab_index !== 0}} hide{{?}}">
                <div class="row">
                    {{~ tab.product_list:item:index}}
                        {{? index !== 4}}
                        <div class="span4 product-cell shadow">
                        {{??}}
                        <div class="span4 product-cell-short shadow">
                        {{?}}
                        <div class="figure">
                            <a class="exposure"
                               href="{{= item.pc_url}}"
                               data-log_code="{{= item.action.log_code}}"
                               target="_blank">
                                <img class="J_lazy"
                                     data-src="{{= item.img_url}}"
                                     alt="{{= item.product_name}}"
                                     style="{{? item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                            </a>
                        </div>
                        <h3 class="title">
                            <a class="exposure"
                               href="{{= item.pc_url}}"
                               data-log_code="{{= item.action.log_code}}"
                               target="_blank">{{= item.product_name}}</a>
                        </h3>
                        <p class="desc">{{= item.product_brief}}</p>
                        <p class="price">
                            <strong>{{= item.product_price}}</strong>元{{? item.show_price_qi}}起{{?}}
                            {{? item.product_price !== item.product_org_price}}<del>{{= item.product_org_price}}元</del>{{?}}
                        </p>
                        {{? item.product_tag}}
                        <div class="tag">
                            <img src="{{= item.product_tag}}">
                        </div>
                        {{?}}
                    </div>
                    {{~}}
                    <div class="span4 product-cell-more shadow">
                        <div class="figure">
                            <a class="exposure"
                               href="{{= tab.pc_url}}"
                               data-log_code="{{= tab.action.log_code}}"
                               target="_blank">
                                <i class="iconfont"></i>
                            </a>
                        </div>
                        <a class="link exposure"
                           href="{{= tab.pc_url}}"
                           data-log_code="{{= tab.action.log_code}}"
                           target="_blank">浏览更多<small>{{= tab.title}}</small></a>
                    </div>
                </div>
            </div>
            {{~}}
        </div>
    </div>
</script>
<script type="text/x-dot-template" id="dotRowVideo">
    <div class="container channel-video channel-video-{{= it.type}} J_channelLazyBox">
        <div class="row">
            {{~ it.items:item:index}}
            <div class="span{{= it.col}} video-cell shadow">
                <div class="figure" style="{{? item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                    <a class="J_videoTrigger" href="javascript: void(0);"
                       data-video="{{= item.video_url}}"
                       data-video-poster="{{= item.img_url}}"
                       data-video-title="{{= item.title}}"
                       title="点击播放视频">
                        <img class="J_lazy"
                             data-src="{{= item.img_url}}"
                             alt="{{= item.title}}">
                        <span class="play"><i class="iconfont"></i></span>
                    </a>
                </div>
                <h3 class="title">
                    <a class="J_videoTrigger" href="javascript: void(0);"
                       data-video="{{= item.video_url}}"
                       data-video-poster="{{= item.img_url}}"
                       data-video-title="{{= item.title}}"
                       title="点击播放视频">{{= item.title}}</a>
                </h3>
                <p class="desc">{{= item.subtitle}}</p>
            </div>
            {{~}}
        </div>
    </div>
</script>
<script type="text/x-dot-template" id="dotNews">
    <div class="container channel-news J_channelLazyBox">
        {{~ it.items:item:index}}
        <div class="news-cell shadow">
            <div class="figure">
                <a href="{{= item.pc_url}}"
                   data-log_code="test_news"
                   target="_blank">
                    <img class="J_lazy"
                         data-src="{{= item.img_url}}"
                         alt="{{= item.title}}"
                         style="{{? item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                </a>
            </div>
            <div class="content">
                <p class="title">
                    <a href="{{= item.pc_url}}"
                       data-log_code="test_news"
                       target="_blank">{{= item.title}}</a>
                </p>
                <p class="source">来自：{{= item.source}}</p>
                <p class="desc">{{= item.desc}}</p>
                <p class="link">
                    <a href="{{= item.pc_url}}"
                       data-log_code="test_news"
                       target="_blank">阅读原文 &gt;</a>
                </p>
            </div>
        </div>
        {{~}}
    </div>
</script>
<script type="text/x-dot-template" id="dotComment">
    <div class="container channel-comment J_channelLazyBox">
        <div class="row">
        {{~ it.items:item:index}}
            <div class="span5 comment-cell shadow">
                    <div class="figure">
                        <a class="exposure"
                           href="{{= item.pc_url}}"
                           data-log_code="{{= item.action.log_code}}"
                           target="_blank">
                            <img class="J_lazy"
                                 data-src="{{= item.img_url}}"
                                 alt="{{= item.product_name}}"
                                 style="{{? 
item.img_url_color}}background-color:{{= item.img_url_color }};{{?}}">
                        </a>
                    </div>
                    <p class="comment">
                        <a class="exposure"
                           href="{{= item.pc_url}}"
                           data-log_code="{{= item.action.log_code}}"
                           target="_blank">{{= 
item.comment.content}}</a>
                    </p>
                    <p class="author"> 来自于 {{= item.comment.user_name}} 
的评价 <span class="date" data-date="{{= 
item.comment.add_time}}"></span></p>
                    <div class="info">
                        <h3 class="title">
                            <a class="exposure"
                               href="{{= item.pc_url}}"
                               data-log_code="{{= 
item.action.log_code}}"
                               target="_blank">{{= 
item.product_name}}</a>
                        </h3>
                        <span class="sep">|</span>
                        <p class="price"><span class="num">{{= 
item.product_price}}</span>元</p>
                    </div>
                </li>
            </div>
        {{~}}
        </div>
    </div>
</script>

<div id="J_modalVideo" class="modal modal-video fade modal-hide">
    <div class="modal-hd">
        <h3 class="title">视频播放</h3>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="7c795fb17685a1e1" onclick="_msq.push(['trackEvent', '2c573917a333c7fe-7c795fb17685a1e1', 'javascript:void0', 'pcpid', '']);">
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