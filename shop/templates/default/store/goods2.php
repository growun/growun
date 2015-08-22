<?php defined('InShopNC') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_goods.css" rel="stylesheet" type="text/css">
<style type="text/css">
.ncs-goods-picture .levelB, .ncs-goods-picture .levelC { cursor: url(<?php echo SHOP_TEMPLATES_URL;?>/images/shop/zoom.cur), pointer;}
.ncs-goods-picture .levelD { cursor: url(<?php echo SHOP_TEMPLATES_URL;?>/images/shop/hand.cur), move\9;}
</style>






<div class="item_images">

        <div class="item_images_icon"><a href="#">报名</a> |  <a href="#">分享</a> |  <a href="#">收藏</a></div>
      <div class="item_images_box"><img src="<?php echo thumb($output['goods'], 240);?>", width="990" height="259" /></div>
  </div>
  
  <!--
  <div class="item_cont_leftmenu">
  	<ul>
    	<li><a href="#">概述</a></li>
        <li><a href="#" class="item_cont_leftmenu_active">启程</a></li>
        <li><a href="#">第1环节</a></li>
        <li><a href="#">第2环节</a></li>
        <li><a href="#">第3环节</a></li>
        <li><a href="#">第4环节</a></li>
        <li><a href="#">第5环节</a></li>
        <li>时间:4月26日</li>
        <li>地点:北京博物馆</li>
        <li><a href="#" class="item_cont_leftmenu_wybm">我要报名</a></li>
        <li><a href="#" class="item_cont_leftmenu_wypj">我要评价</a></li>
        <li><a href="#" class="item_cont_leftmenu_wyfx">分享赚米</a></li>
    </ul>
  </div>
  -->
  
  <div class="item_cont">
      <div class="item_cont_title">
      	<span><a href="#">打印行程单</a></span>
        <strong>行程详情</strong>
      </div>
      
      <div class="item_cont_left">
     

<div class="content bd" id="ncGoodsIntro">
          
          <!--S 满就送 -->
          <?php if($output['mansong_info']) { ?>
          <div class="nc-mansong">
            <div class="nc-mansong-ico"></div>
            <dl class="nc-mansong-content">
              <dt><?php echo $output['mansong_info']['mansong_name'];?>
                <time>( <?php echo $lang['nc_promotion_time'];?><?php echo $lang['nc_colon'];?><?php echo date('Y-m-d',$output['mansong_info']['start_time']).'--'.date('Y-m-d',$output['mansong_info']['end_time']);?> )</time>
              </dt>
              <dd>
                <?php foreach($output['mansong_info']['rules'] as $rule) { ?>
                <span><?php echo $lang['nc_man'];?><em><?php echo ncPriceFormat($rule['price']);?></em><?php echo $lang['nc_yuan'];?>
                <?php if(!empty($rule['discount'])) { ?>
                ， <?php echo $lang['nc_reduce'];?><i><?php echo ncPriceFormat($rule['discount']);?></i><?php echo $lang['nc_yuan'];?>
                <?php } ?>
                <?php if(!empty($rule['goods_id'])) { ?>
                ， <?php echo $lang['nc_gift'];?> <a href="<?php echo $rule['goods_url'];?>" title="<?php echo $rule['mansong_goods_name'];?>" target="_blank"> <img src="<?php echo cthumb($rule['goods_image'], 60);?>" alt="<?php echo $rule['mansong_goods_name'];?>"> </a>&nbsp;。
                <?php } ?>
                </span>
                <?php } ?>
              </dd>
              <dd class="nc-mansong-remark"><?php echo $output['mansong_info']['remark'];?></dd>
            </dl>
          </div>
          <?php } ?>
          <!--E 满就送 -->
          <!--
          <?php if(is_array($output['goods']['goods_attr']) || isset($output['goods']['brand_name'])){?>
          <ul class="nc-goods-sort">
            <?php if(isset($output['goods']['brand_name'])){echo '<li>'.$lang['goods_index_brand'].$lang['nc_colon'].$output['goods']['brand_name'].'</li>';}?>
            <?php if(is_array($output['goods']['goods_attr']) && !empty($output['goods']['goods_attr'])){?>
            <?php foreach ($output['goods']['goods_attr'] as $val){ $val= array_values($val);echo '<li>'.$val[0].$lang['nc_colon'].$val[1].'</li>'; }?>
            <?php }?>
          </ul>
          <?php }?>
          -->
          <div class="ncs-goods-info-content">
            <?php if (isset($output['plate_top'])) {?>
            <div class="top-template"><?php echo $output['plate_top']['plate_content']?></div>
            <?php }?>
            <div class="default"><?php echo $output['goods']['goods_body']; ?></div>
            <?php if (isset($output['plate_bottom'])) {?>
            <div class="bottom-template"><?php echo $output['plate_bottom']['plate_content']?></div>
            <?php }?>
          </div>
         
        </div>     
        
        
        
    <div class="item">  
    <?php $num_days = 0; $num_images = 0; 
        foreach ($output['actions'] as $value) {
            if ($value['day'] > $num_days) {  
                $num_days = $value['day'];
    ?>
            <div class="item_title" align="center">
                	第<?php echo $num_days ?>天
                    
            </div>
    <?php } ?>
        
        <?php $article_url = getCMSArticleUrl($value['article_id']);?>
   
        <?php if ($value['article']['article_image']) {  $num_images ++; ?>
                
                
                <?php if ($num_images % 2 == 1) { ?>
                <div class="item_left_box">
                    <div class="item_right_box_cont_bg item_left_box_cont_bg">
                        <div class="item_right_box_cont_text item_right_box_cont_img">
                            <div>
                            <a href="<?php echo $article_url;?>" target="_blank"> 
                            <img width=260 height=174 src="<?php echo  getCMSArticleImageUrl($value['article']['article_attachment_path'], $value['article']['article_image']);?>" alt="" class="t-img"/>
                            </a>
                            </div>
                            <div class="item_right_box_cont_img_text">
                            <a href="<?php echo $article_url;?>" target="_blank"> 
                            	<?php echo $value['action_title'];?>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="item_right_box_icon item_left_box_icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon_item_1.gif" width="48" height="48" /></div>
                    <br clear="left" />
                </div>
                <?php } else { ?>
                <div class="item_right_box">
                	<div class="item_right_box_icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon_item_1.gif" width="48" height="48" /></div>
                    <div class="item_right_box_cont_bg">
                        <div class="item_right_box_cont_text item_right_box_cont_img">
                            <div>
                            <a href="<?php echo $article_url;?>" target="_blank"> 
                            <img width=260 height=174 src="<?php echo  getCMSArticleImageUrl($value['article']['article_attachment_path'], $value['article']['article_image']);?>" alt="" class="t-img"/>
                            </a>
                            </div>
                            <div class="item_right_box_cont_img_text">
                            <a href="<?php echo $article_url;?>" target="_blank"> 
                            	<?php echo $value['action_title'];?>
                            </a>                                <!--
                                <div class="item_time item_time_img">约4分钟</div>
                                -->
                            </div>
                        </div>
                    </div>
                    <br clear="left" />
                </div>
                <?php } ?>
                      
        <?php } else { ?>
              <?php if ($num_images % 2 == 1) { ?>
                 <div class="item_left_box">
                    <div class="item_right_box_cont_bg item_left_box_cont_bg">
                        <div class="item_right_box_cont_text">
                            <!-- <div class="item_time">约4分钟</div> -->
                            步行 
                        </div>
                    </div>
                    <div class="item_right_box_icon item_left_box_icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon_item_1.gif" width="48" height="48" /></div>
                    <br clear="left" />
                </div>             
              <?php } else { ?>
                <div class="item_right_box">
                	<div class="item_right_box_icon"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/common/icon_item_1.gif" width="48" height="48" /></div>
                    <div class="item_right_box_cont_bg">
                        <div class="item_right_box_cont_text">
                            <!-- <div class="item_time">约4分钟</div>飞机 -->
                            <a href="<?php echo $article_url;?>" target="_blank"> 
                            	<?php echo $value['action_title'];?>
                            </a>
                            <!-- <div class="item_cont_shuom">这里可以放活动说明的一些文字</div> -->
                        </div>
                    </div>
                    <br clear="left" />
                </div>               
              <?php } ?>

        <?php } ?>
   <?php } ?>
   
  
         
                
                <div class="item_title item_end">
                    活动结束
                </div>
                
            </div>
      </div>
  




      <div class="item_cont_right">
      	<div class="wangqiping">
      	<h2 class="title_h2">往期评价</h2>
          <div class="houdong_item_user">
            <div class="houdong_item_user_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img2.jpg" width="49" height="49" /></div>
            <div class="houdong_item_user_cont">
                <a href="#">USER NAME</a><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/level/level-1.gif" width="87" height="15" border="0" />
                <p>热爱旅行，世界文化遗产爱好...</p>
            </div>
          </div>
          <div class="houdong_item_user">
            <div class="houdong_item_user_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img2.jpg" width="49" height="49" /></div>
            <div class="houdong_item_user_cont">
                <a href="#">USER NAME</a><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/level/level-1.gif" width="87" height="15" border="0" />
                <p>热爱旅行，世界文化遗产爱好...</p>
            </div>
          </div>
          <div class="houdong_item_user">
            <div class="houdong_item_user_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img2.jpg" width="49" height="49" /></div>
            <div class="houdong_item_user_cont">
                <a href="#">USER NAME</a><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/level/level-1.gif" width="87" height="15" border="0" />
                <p>热爱旅行，世界文化遗产爱好...</p>
            </div>
          </div>
          <div class="houdong_item_user">
            <div class="houdong_item_user_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img2.jpg" width="49" height="49" /></div>
            <div class="houdong_item_user_cont">
                <a href="#">USER NAME</a><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/level/level-1.gif" width="87" height="15" border="0" />
                <p>热爱旅行，世界文化遗产爱好...</p>
            </div>
          </div>
          <div class="houdong_item_user">
            <div class="houdong_item_user_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img2.jpg" width="49" height="49" /></div>
            <div class="houdong_item_user_cont">
                <a href="#">USER NAME</a><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/level/level-1.gif" width="87" height="15" border="0" />
                <p>热爱旅行，世界文化遗产爱好...</p>
            </div>
          </div>
          </div>
          
          <div class="chengzhangjiayouzhan"><a href="#"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/zd2.jpg" width="240" height="126" /></a></div>
          
          <div class="saide_box">
        	<h2 class="title_h2">成长商城</h2>
            <div class="chengzhangshangcheng">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/sc2.jpg" width="240" height="276" />
            </div>
        </div>
        
        
        <div class="saide_box saide_box_jiayouz">
        	<h2 class="title_h2">更多精彩行程</h2>
            <div class="chengzhangjiayouzhan">
                <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    
                </ul>
                </a>
                 <a href="#">
                <ul class="chengzhangjiayouzhan_list">
                	<li class="chengzhangjiayouzhan_list_img"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/img3.jpg" width="50" height="40" /></li>
                    <li class="chengzhangjiayouzhan_list_cont">成长童子军生存主题训练<br />钻木取火</li>
                    
                </ul>
                </a>
            </div>
        </div>
        
      </div>
      
      <br clear="left" />



<div class="ncs-comment">
        <div class="ncs-goods-title-bar hd">
          <h4><a href="javascript:void(0);"><?php echo $lang['goods_index_evaluation'];?></a></h4>
        </div>
        <div class="ncs-goods-info-content bd" id="ncGoodsRate">
		<!--
          <div class="top">
            <div class="rate">
              <p><strong><?php echo $output['goods_evaluate_info']['good_percent'];?></strong><sub>%</sub>好评</p>
              <span>共有<?php echo $output['goods_evaluate_info']['all'];?>人参与评分</span></div>
            <div class="percent">
              <dl>
                <dt>好评<em>(<?php echo $output['goods_evaluate_info']['good_percent'];?>%)</em></dt>
                <dd><i style="width: <?php echo $output['goods_evaluate_info']['good_percent'];?>%"></i></dd>
              </dl>
              <dl>
                <dt>中评<em>(<?php echo $output['goods_evaluate_info']['normal_percent'];?>%)</em></dt>
                <dd><i style="width: <?php echo $output['goods_evaluate_info']['normal_percent'];?>%"></i></dd>
              </dl>
              <dl>
                <dt>差评<em>(<?php echo $output['goods_evaluate_info']['bad_percent'];?>%)</em></dt>
                <dd><i style="width: <?php echo $output['goods_evaluate_info']['bad_percent'];?>%"></i></dd>
              </dl>
            </div>
            <div class="btns"><span>您可对已购课程进行评价</span>
              <p><a href="<?php if ($output['goods']['is_virtual']) { echo urlShop('member_vr_order', 'index');} else { echo urlShop('member_order', 'index');}?>" class="ncs-btn ncs-btn-red" target="_blank"><i class="icon-comment-alt"></i>评价课程</a></p>
            </div>
          </div>
		-->
          <div class="ncs-goods-title-nav">
            <ul id="comment_tab">
              <li data-type="all" class="current"><a href="javascript:void(0);"><?php echo $lang['goods_index_evaluation'];?>(<?php echo $output['goods_evaluate_info']['all'];?>)</a></li>
              <li data-type="1"><a href="javascript:void(0);">好评(<?php echo $output['goods_evaluate_info']['good'];?>)</a></li>
              <li data-type="2"><a href="javascript:void(0);">中评(<?php echo $output['goods_evaluate_info']['normal'];?>)</a></li>
              <li data-type="3"><a href="javascript:void(0);">差评(<?php echo $output['goods_evaluate_info']['bad'];?>)</a></li>
            </ul>

          </div>
          <!-- 课程评价内容部分 -->
          <div id="goodseval" class="ncs-commend-main"></div>
        </div>
			<div class="btns"><span>您可对已购课程进行评价</span>
              <p><a href="<?php if ($output['goods']['is_virtual']) { echo urlShop('member_vr_order', 'index');} else { echo urlShop('member_order', 'index');}?>" class="ncs-btn ncs-btn-red" target="_blank"><i class="icon-comment-alt"></i>评价课程</a></p>
            </div>
      </div>
      <div class="ncg-salelog">
        <div class="ncs-goods-title-bar hd">
          <h4><a href="javascript:void(0);"><?php echo $lang['goods_index_sold_record'];?></a></h4>
        </div>
        <div class="ncs-goods-info-content bd" id="ncGoodsTraded">
          <div class="top">
            <div class="price"><?php echo $lang['goods_index_goods_price'];?><strong><?php echo $output['goods']['goods_price'];?></strong><?php echo $lang['goods_index_yuan'];?><span><?php echo $lang['goods_index_price_note'];?></span></div>
          </div>
          <!-- 成交记录内容部分 -->
          <div id="salelog_demo" class="ncs-loading"> </div>
        </div>
      </div>
      
      <?php if(!empty($output['goods_commend']) && is_array($output['goods_commend']) && count($output['goods_commend'])>1){?>
      <div class="ncs-recommend">
        <div class="title">
          <h4><?php echo $lang['goods_index_goods_commend'];?></h4>
        </div>
        <div class="content">
          <ul>
            <?php foreach($output['goods_commend'] as $goods_commend){?>
            <?php if($output['goods']['goods_id'] != $goods_commend['goods_id']){?>
            <li>
              <dl>
                <dt class="goods-name"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_commend['goods_id']));?>" target="_blank" title="<?php echo $goods_commend['goods_jingle'];?>"><?php echo $goods_commend['goods_name'];?><em><?php echo $goods_commend['goods_jingle'];?></em></a></dt>
                <dd class="goods-pic"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_commend['goods_id']));?>" target="_blank" title="<?php echo $goods_commend['goods_jingle'];?>"><img src="<?php echo thumb($goods_commend, 240);?>" alt="<?php echo $goods_commend['goods_name'];?>"/></a></dd>
                <dd class="goods-price"><?php echo $lang['currency'];?><?php echo $goods_commend['goods_price'];?></dd>
              </dl>
            </li>
            <?php }?>
            <?php }?>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
      <?php }?>
    </div>




<form id="buynow_form" method="post" action="<?php echo SHOP_SITE_URL;?>/index.php">
  <input id="act" name="act" type="hidden" value="buy" />
  <input id="op" name="op" type="hidden" value="buy_step1" />
  <input id="cart_id" name="cart_id[]" type="hidden"/>
</form>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.charCount.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.ajaxContent.pack.js" type="text/javascript"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/sns.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.F_slider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/waypoints.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.raty/jquery.raty.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.nyroModal/custom.min.js" charset="utf-8"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/jquery.nyroModal/styles/nyroModal.css" rel="stylesheet" type="text/css" id="cssfile2" />
<script type="text/javascript">
/** 辅助浏览 **/
jQuery(function($){
	//产品图片
	$.getScript('<?php echo SHOP_RESOURCE_SITE_URL?>/js/ImageZoom.js', function(){
		var
		zoomController,
		zoomControllerUl,
		zoomControllerUlLeft = 0,
		shell = $('#ncs-goods-picture'),
		shellPanel = shell.parent(),
		heightNcsDetail = $('div[class="ncs-detail"]').height();
		heightOffset = 60,
		minGallerySize = [360, 360],
		imageZoom = new ImageZoom({
			shell: shell,
			basePath: '',
			levelASize: [60, 60],
			levelBSize: [320, 320],
			gallerySize: minGallerySize,
			onBeforeZoom: function(index, level){
				if(!zoomController){
					zoomController = shell.find('div.controller');
				}

				var
				self = this,
				duration = 320,
				width = minGallerySize[0],
				height = minGallerySize[1],
				zoomFx = function(){
					self.ops.gallerySize = [width, height];
					self.galleryPanel.stop().animate({width:width, height:height}, duration);
					shellPanel.stop().animate({height:height + heightOffset}, duration).css('overflow', 'visible');
					zoomController.animate({width:width-22}, duration);
					shell.stop().animate({width:width}, duration);
				};
				if(level !== this.level && this.level !== 0){
					if(this.level === 1 && level > 1){
						height = Math.max(480, shellPanel.height());
						width = shellPanel.width();
						zoomFx();
					}
					else if(level === 1){
						zoomFx();
						shellPanel.stop().animate({height:heightNcsDetail}, duration);
					}
				}
			},
			onZoom: function(index, level, prevIndex){
				shell.find('a.prev,a.next')[level<3 ? 'removeClass' : 'addClass']('hide');
				shell.find('a.close').css('display', [level>1 ? 'block' : 'none']);
			},
			items: [
	                <?php if (!empty($output['goods_image'])) {?>
	                <?php echo implode(',', $output['goods_image']);?>
	                <?php }?>
					]
		});
		shell.data('imageZoom', imageZoom);
	});

});

    //收藏分享处下拉操作
    jQuery.divselect = function(divselectid,inputselectid) {
      var inputselect = $(inputselectid);
      $(divselectid).mouseover(function(){
          var ul = $(divselectid+" ul");
          ul.slideDown("fast");
          if(ul.css("display")=="none"){
              ul.slideDown("fast");
          }
      });
      $(divselectid).live('mouseleave',function(){
          $(divselectid+" ul").hide();
      });
    };
$(function(){
	//赠品处滚条
	$('#ncsGoodsGift').perfectScrollbar();
    <?php if ($output['goods']['goods_state'] == 1 && $output['goods']['goods_storage'] > 0 ) {?>
    // 加入购物车
    $('a[nctype="addcart_submit"]').click(function(){
        addcart(<?php echo $output['goods']['goods_id'];?>, checkQuantity(),'addcart_callback');
    });
        <?php if (!($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_indate'] < TIMESTAMP)) {?>
        // 立即购买
        $('a[nctype="buynow_submit"]').click(function(){
            buynow(<?php echo $output['goods']['goods_id']?>,checkQuantity());
        });
        <?php }?>
    <?php }?>
    // 到货通知
    <?php if ($output['goods']['goods_storage'] == 0 || $output['goods']['goods_state'] == 0) {?>
    $('a[nctype="arrival_notice"]').click(function(){
        <?php if ($_SESSION['is_login'] !== '1'){?>
        login_dialog();
        <?php }else{?>
        ajax_form('arrival_notice', '到货通知','<?php echo urlShop('goods', 'arrival_notice', array('goods_id' => $output['goods']['goods_id']));?>', 350);
        <?php }?>
    });
    <?php }?>
    <?php if (($output['goods']['goods_state'] == 0 || $output['goods']['goods_storage'] <= 0) && $output['goods']['is_appoint'] == 1) {?>
    $('a[nctype="appoint_submit"]').click(function(){
        <?php if ($_SESSION['is_login'] !== '1'){?>
        login_dialog();
        <?php }else{?>
        ajax_form('arrival_notice', '立即预约', '<?php echo urlShop('goods', 'arrival_notice', array('goods_id' => $output['goods']['goods_id'], 'type' => 2));?>', 350);
        <?php }?>
    });
    <?php }?>
    //浮动导航  waypoints.js
    $('#main-nav').waypoint(function(event, direction) {
        $(this).parent().parent().parent().toggleClass('sticky', direction === "down");
        event.stopPropagation();
    });

    // 分享收藏下拉操作
    $.divselect("#handle-l");
    $.divselect("#handle-r");

    // 规格选择
    $('dl[nctype="nc-spec"]').find('a').each(function(){
        $(this).click(function(){
            if ($(this).hasClass('hovered')) {
                return false;
            }
            $(this).parents('ul:first').find('a').removeClass('hovered');
            $(this).addClass('hovered');
            checkSpec();
        });
    });

});

function checkSpec() {
    var spec_param = <?php echo $output['spec_list'];?>;
    var spec = new Array();
    $('ul[nctyle="ul_sign"]').find('.hovered').each(function(){
        var data_str = ''; eval('data_str =' + $(this).attr('data-param'));
        spec.push(data_str.valid);
    });
    spec1 = spec.sort(function(a,b){
        return a-b;
    });
    var spec_sign = spec1.join('|');
    $.each(spec_param, function(i, n){
        if (n.sign == spec_sign) {
            window.location.href = n.url;
        }
    });
}

// 验证购买数量
function checkQuantity(){
    var quantity = parseInt($("#quantity").val());
    if (quantity < 1) {
        alert("<?php echo $lang['goods_index_pleaseaddnum'];?>");
        $("#quantity").val('1');
        return false;
    }
    max = parseInt($('[nctype="goods_stock"]').text());
    <?php if ($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_limit'] > 0) {?>
    max = <?php echo $output['goods']['virtual_limit'];?>;
    if(quantity > max){
        alert('最多限购'+max+'件');
        return false;
    }
    <?php } ?>
    <?php if (!empty($output['goods']['upper_limit'])) {?>
    max = <?php echo $output['goods']['upper_limit'];?>;
    if(quantity > max){
        alert('最多限购'+max+'件');
        return false;
    }
    <?php } ?>
    if(quantity > max){
        alert("<?php echo $lang['goods_index_add_too_much'];?>");
        return false;
    }
    return quantity;
}

// 立即购买js
function buynow(goods_id,quantity){
<?php if ($_SESSION['is_login'] !== '1'){?>
	login_dialog();
<?php }else{?>
    if (!quantity) {
        return;
    }
    <?php if ($_SESSION['store_id'] == $output['goods']['store_id']) { ?>
    alert('不能购买自己店铺的课程');return;
    <?php } ?>
    $("#cart_id").val(goods_id+'|'+quantity);
    $("#buynow_form").submit();
<?php }?>
}

$(function(){
    //选择地区查看运费
    $('#transport_pannel>a').click(function(){
    	var id = $(this).attr('nctype');
    	if (id=='undefined') return false;
    	var _self = this,tpl_id = '<?php echo $output['goods']['transport_id'];?>';
	    var url = 'index.php?act=goods&op=calc&rand='+Math.random();
	    $('#transport_price').css('display','none');
	    $('#loading_price').css('display','');
	    $.getJSON(url, {'id':id,'tid':tpl_id}, function(data){
	    	if (data == null) return false;
	        if(data != 'undefined') {$('#nc_kd').html('运费<?php echo $lang['nc_colon'];?><em>' + data + '</em><?php echo $lang['goods_index_yuan'];?>');}else{'<?php echo $lang['goods_index_trans_for_seller'];?>';}
	        $('#transport_price').css('display','');
	    	$('#loading_price').css('display','none');
	        $('#ncrecive').html($(_self).html());
	    });
    });
    $("#nc-bundling").load('index.php?act=goods&op=get_bundling&goods_id=<?php echo $output['goods']['goods_id'];?>', function(){
        if($(this).html() != '') {
            $(this).show();
        }
    });
    $("#salelog_demo").load('index.php?act=goods&op=salelog&goods_id=<?php echo $output['goods']['goods_id'];?>&store_id=<?php echo $output['goods']['store_id'];?>&vr=<?php echo $output['goods']['is_virtual'];?>', function(){
        // Membership card
        $(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
    });
	$("#consulting_demo").load('index.php?act=goods&op=consulting&goods_id=<?php echo $output['goods']['goods_id'];?>&store_id=<?php echo $output['goods']['store_id'];?>', function(){
		// Membership card
		$(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
	});

/** goods.php **/
	// 课程内容部分折叠收起侧边栏控制
	$('#fold').click(function(){
  		$('.ncs-goods-layout').toggleClass('expanded');
	});
	// 课程内容介绍Tab样式切换控制
	$('#categorymenu').find("li").click(function(){
		$('#categorymenu').find("li").removeClass('current');
		$(this).addClass('current');
	});
	// 课程详情默认情况下显示全部
	$('#tabGoodsIntro').click(function(){
		$('.bd').css('display','');
		$('.hd').css('display','');
	});
	// 点击评价隐藏其他以及其标题栏
	$('#tabGoodsRate').click(function(){
		$('.bd').css('display','none');
		$('#ncGoodsRate').css('display','');
		$('.hd').css('display','none');
	});
	// 点击成交隐藏其他以及其标题
	$('#tabGoodsTraded').click(function(){
		$('.bd').css('display','none');
		$('#ncGoodsTraded').css('display','');
		$('.hd').css('display','none');
	});
	// 点击咨询隐藏其他以及其标题
	$('#tabGuestbook').click(function(){
		$('.bd').css('display','none');
		$('#ncGuestbook').css('display','');
		$('.hd').css('display','none');
	});
	//课程排行Tab切换
	$(".ncs-top-tab > li > a").mouseover(function(e) {
		if (e.target == this) {
			var tabs = $(this).parent().parent().children("li");
			var panels = $(this).parent().parent().parent().children(".ncs-top-panel");
			var index = $.inArray(this, $(this).parent().parent().find("a"));
			if (panels.eq(index)[0]) {
				tabs.removeClass("current ").eq(index).addClass("current ");
				panels.addClass("hide").eq(index).removeClass("hide");
			}
		}
	});
	//信用评价动态评分打分人次Tab切换
	$(".ncs-rate-tab > li > a").mouseover(function(e) {
		if (e.target == this) {
			var tabs = $(this).parent().parent().children("li");
			var panels = $(this).parent().parent().parent().children(".ncs-rate-panel");
			var index = $.inArray(this, $(this).parent().parent().find("a"));
			if (panels.eq(index)[0]) {
				tabs.removeClass("current ").eq(index).addClass("current ");
				panels.addClass("hide").eq(index).removeClass("hide");
			}
		}
	});

//触及显示缩略图
	$('.goods-pic > .thumb').hover(
		function(){
			$(this).next().css('display','block');
		},
		function(){
			$(this).next().css('display','none');
		}
	);

	/* 课程购买数量增减js */
	// 增加
	$('.increase').click(function(){
		num = parseInt($('#quantity').val());
	    <?php if ($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_limit'] > 0) {?>
	    max = <?php echo $output['goods']['virtual_limit'];?>;
	    if(num >= max){
	        alert('最多限购'+max+'件');
	        return false;
	    }
	    <?php } ?>
	    <?php if (!empty($output['goods']['upper_limit'])) {?>
	    max = <?php echo $output['goods']['upper_limit'];?>;
	    if(num >= max){
	        alert('最多限购'+max+'件');
	        return false;
	    }
	    <?php } ?>
		max = parseInt($('[nctype="goods_stock"]').text());
		if(num < max){
			$('#quantity').val(num+1);
		}
	});
	//减少
	$('.decrease').click(function(){
		num = parseInt($('#quantity').val());
		if(num > 1){
			$('#quantity').val(num-1);
		}
	});

    //评价列表
    $('#comment_tab').on('click', 'li', function() {
        $('#comment_tab li').removeClass('current');
        $(this).addClass('current');
        load_goodseval($(this).attr('data-type'));
    });
    load_goodseval('all');
    function load_goodseval(type) {
        var url = '<?php echo urlShop('goods', 'comments', array('goods_id' => $output['goods']['goods_id']));?>';
        url += '&type=' + type;
        $("#goodseval").load(url, function(){
            $(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
        });
    }

    //记录浏览历史
	$.get("index.php?act=goods&op=addbrowse",{gid:<?php echo $output['goods']['goods_id'];?>});
	//初始化对比按钮
	initCompare();
});
/* 加入购物车后的效果函数 */
function addcart_callback(data){
	$('#bold_num').html(data.num);
    $('#bold_mly').html(price_format(data.amount));
    $('.ncs-cart-popup').fadeIn('fast');
}
</script>
