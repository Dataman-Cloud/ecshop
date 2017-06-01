<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:45:"/var/www/html/upload/themes/ecmoban/goods.dwt";i:1;s:59:"/var/www/html/upload/themes/ecmoban/library/page_header.lbi";i:2;s:55:"/var/www/html/upload/themes/ecmoban/library/ur_here.lbi";i:3;s:61:"/var/www/html/upload/themes/ecmoban/library/category_tree.lbi";i:4;s:55:"/var/www/html/upload/themes/ecmoban/library/history.lbi";i:5;s:61:"/var/www/html/upload/themes/ecmoban/library/goods_gallery.lbi";i:6;s:58:"/var/www/html/upload/themes/ecmoban/library/goods_tags.lbi";i:7;s:60:"/var/www/html/upload/themes/ecmoban/library/bought_goods.lbi";i:8;s:65:"/var/www/html/upload/themes/ecmoban/library/bought_note_guide.lbi";i:9;s:56:"/var/www/html/upload/themes/ecmoban/library/comments.lbi";i:10;s:59:"/var/www/html/upload/themes/ecmoban/library/page_footer.lbi";}s:7:"expires";i:1448508930;s:8:"maketime";i:1448505330;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>bmw1_汽车_DMECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="themes/ecmoban/js/action.js"></script>
<script type="text/javascript" src="themes/ecmoban/js/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
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
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">汽车</a> <code>&gt;</code> bmw1 
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
</script>  </div>
  
  
  <div class="AreaR">
   
   <div id="goodsInfo" class="clearfix">
   
     
     <div class="imgInfo">
     <a href="http://img1.bitautoimg.com/bitauto/2013/01/23/854be0a2-ef1c-440a-926d-94e1e5051e18.jpg" id="zoom1" class="MagicZoom MagicThumb" title="bmw1">
      <img src="http://img1.bitautoimg.com/bitauto/2013/01/23/854be0a2-ef1c-440a-926d-94e1e5051e18.jpg" alt="bmw1" width="310px;" height="310px"/>
     </a>
     <div class="blank5"></div>
    <div style="text-align:center; position:relative; width:100%;">
               <a href="goods.php?id=2"><img style="position: absolute; left:0;" alt="prev" src="themes/ecmoban/images/up.gif" /></a>
            <a href="javascript:;" onclick="window.open('gallery.php?id=1'); return false;"><img alt="zoom" src="themes/ecmoban/images/zoom.gif" /></a>
            </div>
      
 
         <div class="blank5"></div>
           
      <div class="picture" id="imglist">
		
                          
                         
           <a  href="http://img1.bitautoimg.com/bitauto/2013/01/23/854be0a2-ef1c-440a-926d-94e1e5051e18.jpg"
    	rel="zoom1" 
        rev="http://img1.bitautoimg.com/bitauto/2013/01/23/854be0a2-ef1c-440a-926d-94e1e5051e18.jpg"
        title="">
        <img src="images/201511/thumb_img/1_thumb_P_1448424239072.jpg" alt="bmw1" class="onbg" /></a>
                                    
               <a  href="http://img1.bitautoimg.com/bitauto/2013/01/23/854be0a2-ef1c-440a-926d-94e1e5051e18.jpg"
    	rel="zoom1" 
        rev="http://img1.bitautoimg.com/bitauto/2013/01/23/854be0a2-ef1c-440a-926d-94e1e5051e18.jpg"
        title="">
        <img src="images/201511/thumb_img/1_thumb_P_1448424246537.jpg" alt="bmw1" class="autobg" /></a>
                                 
</div>
 
<script type="text/javascript">
	mypicBg();
</script>     
         
     
     </div>
     
     <div class="textInfo">
     <form action="javascript:addToCart(1)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		 <div class="clearfix" style="font-size:14px; font-weight:bold; padding-bottom:8px;">
      bmw1      
			</div>
      <ul>
        
             <li class="clearfix">
       <dd>
     
       <strong>商品货号：</strong>ECS000000      
       </dd>
       </li> 
                      <li class="clearfix">
       <dd>
      
                  <strong>商品库存：</strong>
          1              
       </dd>
       </li>  
                    <li class="clearfix">
       <dd>
      
       <strong>商品品牌：</strong><a href="brand.php?id=1" >BMW</a>
    
       </dd>
       </li>  
                       <li class="clearfix">
       <dd>
       
       <strong>商品重量：</strong>0克       
       </dd>
      </li>
        
             <li class="clearfix">
       <dd>
    
      <strong>上架时间：</strong>2015-11-25      
       </dd>
       </li>
              <li class="clearfix">
       <dd>
       
       <strong>商品点击数：</strong>2       </dd>
      </li>
      <li class="clearfix">
       <dd>
              <strong>市场价格：</strong><font class="market">￥1200000元</font><br />
              
       <strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE">￥1000000元</font><br />
              <strong>注册用户：</strong><font class="shop" id="ECS_RANKPRICE_1">￥1000000元</font><br />
              </dd>
       </li>
       <li class="clearfix">
       <dd>
       <strong>用户评价：</strong>
      <img src="themes/ecmoban/images/stars5.gif" alt="comment rank 5" />
       </dd>
      </li>
      
            <li class="clearfix">
       <dd>
       <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font>
       </dd>
       </li>
                   <li class="clearfix">
       <dd>
       <strong>购买数量：</strong>
        <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/>
       </dd>
       </li>
      
       
        <li class="clearfix">
       <dd>
       <strong>购买此商品可使用：</strong><font class="f4">1000000 积分</font>
       </dd>
      </li>
              
            
            
      <li class="padd">
      <a href="javascript:addToCart(1)"><img src="themes/ecmoban/images/goumai2.gif" /></a>
      <a href="javascript:collect(1)"><img src="themes/ecmoban/images/shoucang2.gif" /></a>
            <a href="user.php?act=affiliate&goodsid=1" ><img src="themes/ecmoban/images/tuijian.gif" /></a>
            </li>
     
      </ul>
      </form>
     </div>
   </div>
   <div class="blank"></div>
   
   
     <div class="box">
     <div class="box_1">
      <h3 style="padding:0 5px;">
        <div id="com_b" class="history clearfix">
        <h2>商品描述：</h2>
        <h2 class="h2bg">商品属性</h2>
                </div>
      </h3>
      <div id="com_v" class="boxCenterList RelaArticle"></div>
      <div id="com_h">
       <blockquote>
               </blockquote>
     <blockquote>
      <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
              </table>
     </blockquote>
     
      </div>
     </div>
    </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
  <div class="blank"></div>
  
  
<div class="box">
     <div class="box_1">
      <h3><span class="text">商品标签</span></h3>
      <div class="boxCenterList clearfix ie6">
       <form name="tagForm" action="javascript:;" onSubmit="return submitTag(this)" id="tagForm">
        <p id="ECS_TAGS" style="margin-bottom:5px;">
                  </p>
        <p>
          <input type="text" name="tag" id="tag" class="inputBg" size="35" />
          <input type="submit" value="添 加" class="bnt_blue" style="border:none;" />
          <input type="hidden" name="goods_id" value="1"  />
        </p>
                <script type="text/javascript">
                //<![CDATA[
                
                /**
                 * 用户添加标记的处理函数
                 */
                function submitTag(frm)
                {
                  try
                  {
                    var tag = frm.elements['tag'].value;
                    var idx = frm.elements['goods_id'].value;
                    if (tag.length > 0 && parseInt(idx) > 0)
                    {
                      Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                    }
                  }
                  catch (e) {alert(e);}
                  return false;
                }
                function submitTagResponse(result)
                {
                  var div = document.getElementById('ECS_TAGS');
                  if (result.error > 0)
                  {
                    alert(result.message);
                  }
                  else
                  {
                    try
                    {
                      div.innerHTML = '';
                      var tags = result.content;
                      for (i = 0; i < tags.length; i++)
                      {
                        div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'" style="color:#006ace; text-decoration:none; margin-right:5px;">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                      }
                    }
                    catch (e) {alert(e);}
                  }
                }
                
                //]]>
                </script>
              </form>
      </div>
     </div>
    </div>
    <div class="blank5"></div> <div id="ECS_BOUGHT">554fcae493e564ee0dc75bdf2ebf94cabought_notes|a:2:{s:4:"name";s:12:"bought_notes";s:2:"id";i:1;}554fcae493e564ee0dc75bdf2ebf94ca</div><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:1;}554fcae493e564ee0dc75bdf2ebf94ca</div>
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
<script type="text/javascript">
var goods_id = 1;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 1;
var now_time = 1448476530;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</html>