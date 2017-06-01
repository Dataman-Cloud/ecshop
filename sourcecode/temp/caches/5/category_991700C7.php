<?php exit;?>a:3:{s:8:"template";a:9:{i:0;s:48:"/var/www/html/upload/themes/ecmoban/category.dwt";i:1;s:59:"/var/www/html/upload/themes/ecmoban/library/page_header.lbi";i:2;s:55:"/var/www/html/upload/themes/ecmoban/library/ur_here.lbi";i:3;s:61:"/var/www/html/upload/themes/ecmoban/library/category_tree.lbi";i:4;s:55:"/var/www/html/upload/themes/ecmoban/library/history.lbi";i:5;s:62:"/var/www/html/upload/themes/ecmoban/library/recommend_best.lbi";i:6;s:58:"/var/www/html/upload/themes/ecmoban/library/goods_list.lbi";i:7;s:53:"/var/www/html/upload/themes/ecmoban/library/pages.lbi";i:8;s:59:"/var/www/html/upload/themes/ecmoban/library/page_footer.lbi";}s:7:"expires";i:1448508928;s:8:"maketime";i:1448505328;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>BMW_汽车_DMECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
<link href="themes/ecmoban/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script language='javascript' src='themes/ecmoban/qq/ServiceQQ.js' type='text/javascript' charset='utf-8'></script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="block clearfix" style=" position:relative; height:91px; ">
 <a href="index.php" name="top"><img class="logo" src="themes/ecmoban/images/logo.gif" /></a>
 <a class="top2" href="#" name="top"></a>
 <img class="tel" src="themes/ecmoban/images/tel.gif">
 
 
 
 <div class="log">
   <ul>  
   
   <li id="topNav" class="clearfix"> 
   <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
   
       <div class="topNavR"></div>
   </li>
  
   </ul>
 </div>
 
 
 <div class="meun" >
   <a class="home" href="index.php" class="cur">首页</a>
   
   <div class="meun_r">
   <ul>
   <li>
    <a href="index.php"  >智能家居馆</a> 
  
              |
             
   <a href="index.php"  >电动车馆</a> 
  
   
  </li>
 </ul>
 </div>
 </div>
 
</div>
    
<div class="header_bg">
<div class="t">
<div class="f_l">
         <a href="category.php?id=1">汽车</a>
        		 
     
</div>    
    
    
<div class="cart" id="ECS_CARTINFO">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca <a href="flow.php"><img style="vertical-align:middle;" src="themes/ecmoban/images/jiesuan.gif"></a>
</div>
</div>
	<script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
           alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
<div class="f_l">
   <input name="keywords" type="text" id="keyword" value=""/>
   <input name="imageField" type="submit" value=" " class="go" style="cursor:pointer;background: url(themes/ecmoban/images/sousuo.gif) no-repeat; width:51px; height:20px; border:none; float:left; margin-left:5px;" />
</div>
<div class="f_r">
</div>
</form>
</div>
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">汽车</a> <code>&gt;</code> BMW 
</div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
  <div id="category_tree">
  <h3><span>商品分类</span></h3>
         <dl>
     <dt><a href="category.php?id=1">汽车</a></dt>
     <dd>       </dd>
       </dl>
     
  </div>
<div class="blank"></div>
<div class="box" id='history_div'>
 
 <div class="box_1">
 <h3><span>浏览历史</span></h3>
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>
    
  </div>
  
  
  <div class="AreaR">
	 
	  	  <div class="box">
		 <div class="box_1">
			<h3><span>商品筛选</span></h3>
						<div class="screeBox">
			  <strong>品牌：</strong>
														<a href="category.php?id=1&amp;price_min=0&amp;price_max=0">全部</a>&nbsp;
																			<span>BMW</span>
												</div>
											 </div>
		</div>
		<div class="blank"></div>
	  	 
   
<div class="box">
 <div class="box_1">
  <h3>
  <span>商品列表</span>
  <form method="GET" class="sort" name="listform">
  显示方式：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/ecmoban/images/display_mode_list.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/ecmoban/images/display_mode_grid_act.gif" alt=""></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/ecmoban/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
     
  <a href="category.php?category=1&display=grid&brand=1&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list"><img src="themes/ecmoban/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
  <a href="category.php?category=1&display=grid&brand=1&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list"><img src="themes/ecmoban/images/shop_price_default.gif" alt="按价格排序"></a>
  <a href="category.php?category=1&display=grid&brand=1&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list"><img src="themes/ecmoban/images/last_update_default.gif" alt="按更新时间排序"></a>
  <input type="hidden" name="category" value="1" />
  <input type="hidden" name="display" value="grid" id="display" />
  <input type="hidden" name="brand" value="1" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
    </form>
  </h3>
      <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
            <div class="clearfix goodsBox" style="border:none; padding:11px 0 10px 5px;">
             <div class="goodsItem">
           <a href="goods.php?id=2"><img src="images/201511/thumb_img/2_thumb_G_1448424426105.jpg" alt="bmw2" class="goodsimg" /></a><br />
           <p><a href="goods.php?id=2" title="bmw2">bmw2</a></p>
                       <font class="market_s">￥1200000元</font><br />
                                   <font class="shop_s">￥1000000元</font><br />
                        <a href="javascript:addToCart(2)" ><img src="themes/ecmoban/images/goumai.gif"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="javascript:collect(2);"><img src="themes/ecmoban/images/shoucang.gif"></a>
        </div>
                 <div class="goodsItem">
           <a href="goods.php?id=1"><img src="images/201511/thumb_img/1_thumb_G_1448424246285.jpg" alt="bmw1" class="goodsimg" /></a><br />
           <p><a href="goods.php?id=1" title="bmw1">bmw1</a></p>
                       <font class="market_s">￥1200000元</font><br />
                                   <font class="shop_s">￥1000000元</font><br />
                        <a href="javascript:addToCart(1)" ><img src="themes/ecmoban/images/goumai.gif"></a> &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="javascript:collect(1);"><img src="themes/ecmoban/images/shoucang.gif"></a>
        </div>
            </div>
        </form>
  
 </div>
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<form name="selectPageForm" action="/category.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>2</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>  
  
</div>
<div class="blank"></div>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix"> 
 
 </div>
 </div>
</div>
 
 <div class="blank"></div>
 
 <div class="block" style="text-align:center">
<img src="themes/ecmoban/images/shuomin.gif"></div>
</div>
<div id="bottomNav" class="box">
  <div class="bNavList clearfix">
      
  </div>
 </div>
 
<div id="footer">
 <div class="text">
 &copy; 2005-2015 DMECSHOP 版权所有，并保留所有权利。<br />
 北京市朝阳区大望京商务园区宏泰东街浦项中心A座806-807        Tel: 123456789               <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=123456789&amp;Site=DMECSHOP&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:123456789:4" height="16" border="0" alt="QQ" /> 123456789</a>
                                                                                <br />
  
 
  
    <div align="center" style="padding-bottom:5px; width:0; height:0; overflow:hidden" > <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban/images/ecmoban.gif" alt="ECShop模板" /></a></div>
    
  
  
  <a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2F10.3.10.33%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
            
       <div class="blank"></div>
       
 </div>
</div>
</body>
</html>
