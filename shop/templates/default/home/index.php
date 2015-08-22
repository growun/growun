<?php defined('InShopNC') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/index.css" rel="stylesheet" type="text/css">





<script type="text/javascript" src="<?php echo SHOP_RESOURCE_SITE_URL;?>/js/home_index.js" charset="utf-8"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/ie6.js" charset="utf-8"></script>
<![endif]-->

<link rel='stylesheet' href='<?php echo RESOURCE_SITE_URL;?>/js/fullcalendar/fullcalendar.css' />
<script src='<?php echo RESOURCE_SITE_URL;?>/js/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo RESOURCE_SITE_URL;?>/js/fullcalendar/fullcalendar.js'></script>
<script src='<?php echo RESOURCE_SITE_URL;?>/js/fullcalendar/lang-all.js'></script>
<style>

	#calendar {
		max-width: 990px;
		margin: 0 auto;
	}

</style>

<script type="text/javascript">
var uid = window.location.href.split("#V3");
var  fragment = uid[1];
if(fragment){
	if (fragment.indexOf("V3") == 0) {document.cookie='uid=0';}
else {document.cookie='uid='+uid[1];}
	}

    
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
        lang: "zh-cn",
        events: "index.php",
    })

});

    
</script>
<style type="text/css">
.category { display: block !important; }
</style>
<div class="clear"></div>

<!-- HomeFocusLayout Begin-->
<div class="home-focus-layout"> <?php echo $output['web_html']['index_pic'];?>
<!--
  <div class="right-sidebar">
    <div class="policy">
      <ul>
        <li class="b1">七天包退</li>
        <li class="b2">正品保障</li>
        <li class="b3">闪电发货</li>
      </ul>
    </div>
    <?php if(!empty($output['group_list']) && is_array($output['group_list'])) { ?>
    <div class="groupbuy">
      <div class="title"><i>抢</i>近期抢购</div>
      <ul>
        <?php foreach($output['group_list'] as $val) { ?>
        <li>
          <dl style=" background-image:url(<?php echo gthumb($val['groupbuy_image1'], 'small');?>)">
            <dt><?php echo $val['groupbuy_name']; ?></dt>
            <dd class="price"><span class="groupbuy-price"><?php echo ncPriceFormatForList($val['groupbuy_price']); ?></span><span class="buy-button"><a href="<?php echo urlShop('show_groupbuy','groupbuy_detail',array('group_id'=> $val['groupbuy_id']));?>">立即抢</a></span></dd>
            <dd class="time"><span class="sell">已售<em><?php echo $val['buy_quantity'];?></em></span> <span class="time-remain" count_down="<?php echo $val['end_time']-TIMESTAMP; ?>"> <em time_id="d">0</em><?php echo $lang['text_tian'];?><em time_id="h">0</em><?php echo $lang['text_hour'];?> <em time_id="m">0</em><?php echo $lang['text_minute'];?><em time_id="s">0</em><?php echo $lang['text_second'];?> </span></dd>
          </dl>
        </li>
        <?php } ?>
      </ul>
    </div>
    <?php } ?>
    <div class="proclamation">
      <ul class="tabs-nav">
        <li class="tabs-selected">
          <h3>招商入驻</h3>
        </li>
        <li>
          <h3><?php echo $output['show_article']['notice']['ac_name'];?></h3>
        </li>
      </ul>
      <div class="tabs-panel"> <a href="<?php echo urlShop('show_joinin', 'index');?>" title="申请商家入驻；已提交申请，可查看当前审核状态。" class="store-join-btn" target="_blank">&nbsp;</a> <a href="<?php echo urlShop('seller_login','show_login');?>" target="_blank" class="store-join-help"><i class="icon-cog"></i>登录商家管理中心</a> </div>
      <div class="tabs-panel tabs-hide">
        <ul class="mall-news">
          <?php if(!empty($output['show_article']['notice']['list']) && is_array($output['show_article']['notice']['list'])) { ?>
          <?php foreach($output['show_article']['notice']['list'] as $val) { ?>
          <li><i></i><a target="_blank" href="<?php echo empty($val['article_url']) ? urlShop('article', 'show',array('article_id'=> $val['article_id'])):$val['article_url'] ;?>" title="<?php echo $val['article_title']; ?>"><?php echo str_cut($val['article_title'],24);?> </a>
            <time>(<?php echo date('Y-m-d',$val['article_time']);?>)</time>
          </li>
          <?php } ?>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  -->
</div>
<!--HomeFocusLayout End-->






<div class="container">

    <div class="main">
    
        <!-- biaoqianyun start -->
    	<div class="biaoqianyun">
        	<h2 class="title_h2">成长标签云</h2>
            <div class="biaoqianyun_cont">
            	<a href="#">成长豆</a><a href="#">智慧炸弹</a><a href="#">课程日历</a><a href="#">亲子</a><a href="#">单飞</a><a href="#">心旅伴美国</a><a href="#">斯里兰卡</a><a href="#">爬树</a><a href="#">露营</a><a href="#">钻木取火</a><a href="#">成长背包客</a><a href="#">花海中的蝴蝶</a><a href="#">拓展集训营</a><a href="#">一日营</a><a href="#">竹海品竹</a><a href="#">趣味农事和野炊</a><a href="#">我是小小采花郎</a><a href="#">中秋锯献</a><a href="#">科学嘉年华</a><a href="#">柳编达人</a><a href="#">T-ball</a><a href="#">昆虫的世界</a><a href="#">水上竞技</a><a href="#">捕鱼摸虾</a>
            </div>
        </div>
        <!-- biaoqianyun end -->
        
        <div class="houdong_box">
        
        <?php foreach ($output['goods_list'] as $k => $value) { ?>
            
        	<div class="houdong_item <?php if ($k % 2 == 1) { ?>   houdong_item_two  <?php } ?>">
            	<div class="houdong_item_box ">
                    <h4 class="houdong_item_title"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>" target="_blank">
                    <span>7月8日</span><?php echo $value['goods_name'];?></a></h4>
                    <div class="houdong_item_img"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>" target="_blank">
                    
                    <img src="<?php echo thumb($value, 240);?>" width="288" height="200" />   </s></div>
                    <ul class="houdong_item_list">
                        <li><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon-wqpj.gif" width="64" height="64" alt="往期评价" border="0" /></a></li>
                        <li><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon-xlsj.gif" width="64" height="64" alt="训练手记" border="0" /></a></li>
                        <li><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon-xczl.gif" width="64" height="64" alt="行程总览" border="0" /></a></li>
                        <li class="houdong_item_list_last"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon-wybm.gif" width="64" height="64" alt="我要报名" border="0" /></a></li>
                    </ul>
                </div>
                <div class="houdong_item_user">
                	<div class="houdong_item_user_img">
					<a href="<?php echo urlShop('show_store','index',array('store_id'=>$value['store_id']), $value['store_domain']);?>" title="<?php echo $value['store_name'];?>" class="name">
					<img src="<?php echo getStoreLogo($value['store_info']['store_avatar']);?>" width="49" height="49"/>
					</a>
					</div>
                    <div class="houdong_item_user_cont">
					<a href="<?php echo urlShop('show_store','index',array('store_id'=>$value['store_id']), $value['store_domain']);?>" title="<?php echo $value['store_name'];?>"><?php echo $value['store_name'];?>
					</a>
					    <!--
                    	<a href="#">USER NAME</a><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/level/level-1.gif" width="87" height="15" border="0" />
						-->
                        <p>自立●好奇●未来公民</p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
        
    </div>
    
    <div class="aside">
    	<!--saide_box start-->
    	<div class="saide_box">
        	<h2 class="title_h2"><span><a href="#">更多见证</a></span>百万家长见证计划</h2>
            <div class="jianzhengjh_box">
            	<div class="jianzhengjh_box_img">
                    <div class="jianzhengjh_box_leftbtn"><a href="#"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon-left.gif" width="15" height="15" /></a></div>
                    <div class="jianzhengjh_box_cont"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/wx.gif" width="238" height="297"  /></div>
                    <div class="jianzhengjh_box_leftbtn"><a href="#"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon-right.gif" width="15" height="15" /></a></div>
                    <br clear="left" />
                </div>
                <div class="jianzhengjh_box_date">
                	<div class="jianzhengjh_box_date_r">
                    	7月<span>24</span>
                    </div>
                    <div class="jianzhengjh_box_date_b"><a href="#">成长童子军生存主题训练<br />钻木取火</a></div>
                    <br clear="left" />
                </div>
            </div>
        </div>
        <!--saide_box end-->
        
        <!--chengzhangzhadan start-->
    	<div class="chengzhangzhadan">
        	<a href="#"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/cszd.jpg" width="285" height="150" /></a>
        </div>
        <!--chengzhangzhadan end-->
        
        <!--saide_box start-->
    	<div class="saide_box">
        	<h2 class="title_h2">成长商城</h2>
            <div class="chengzhangshangcheng">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/cssc.jpg" width="286" height="323" />
            </div>
        </div>
        <!--saide_box end-->
        
        
        <!--saide_box start-->
    	<div class="saide_box saide_box_jiayouz">
        	<h2 class="title_h2">父母成长加油站</h2>
            <div class="chengzhangjiayouzhan">
                <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><<?php echo SHOP_TEMPLATES_URL;?>/img src="images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    <li class="chengzhangjiayouzhan_list_data"><span>1899</span>人读过</li>
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    <li class="chengzhangjiayouzhan_list_data"><span>1899</span>人读过</li>
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    <li class="chengzhangjiayouzhan_list_data"><span>1899</span>人读过</li>
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    <li class="chengzhangjiayouzhan_list_data"><span>1899</span>人读过</li>
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    <li class="chengzhangjiayouzhan_list_data"><span>1899</span>人读过</li>
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    <li class="chengzhangjiayouzhan_list_data"><span>1899</span>人读过</li>
                </ul>
                </a>
            </div>
        </div>
        <!--saide_box end-->
        
        <!--download start-->
    	<div class="chengzhangzhadan">
        	<a href="#"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/download.jpg" width="285" height="149" /></a>
        </div>
        <!--download end-->
        
        <!--weixinguanzhu start-->
    	<div class="saide_box weixinguanzhu_box">
        	<h2 class="title_h2">微信关注成长联盟</h2>
            <div class="weixinguanzhu">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/erweima.gif" width="204" height="204" />
            </div>
        </div>
        <!--weixinguanzhu end-->
        
    </div>
    
    <br clear="left" />
</div>
<!-- container end -->
















<div id='calendar'></div>


<div class="footer-line"></div>
<!--首页底部保障开始-->
<!--
<?php require_once template('layout/index_ensure');?>
-->
<!--首页底部保障结束-->
<!--StandardLayout Begin-->
<!--
<div class="nav_Sidebar">
<a class="nav_Sidebar_1" href="javascript:;" ></a>
<a class="nav_Sidebar_2" href="javascript:;" ></a>
<a class="nav_Sidebar_3" href="javascript:;" ></a>
<a class="nav_Sidebar_4" href="javascript:;" ></a>
<a class="nav_Sidebar_5" href="javascript:;" ></a>
<a class="nav_Sidebar_6" href="javascript:;" ></a> 
<a class="nav_Sidebar_7" href="javascript:;" ></a>
<a class="nav_Sidebar_8" href="javascript:;" ></a>
</div>
-->
<!--StandardLayout End-->