<link href="themes/ecmoban/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script language='javascript' src='themes/ecmoban/qq/ServiceQQ.js' type='text/javascript' charset='utf-8'></script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div class="block clearfix" style=" position:relative; height:91px; ">
 <a href="index.php" name="top"><img class="logo" src="themes/ecmoban/images/logo.gif" /></a>
 <a class="top2" href="#" name="top"></a>
 <img class="tel" src="themes/ecmoban/images/tel.gif">
 
 
 
 <div class="log">
   <ul>  
   
   <li id="topNav" class="clearfix"> 
   <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
   
   <?php if ($this->_var['navigator_list']['top']): ?>
    <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
            <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
             |
            <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    
     <?php endif; ?>
    <div class="topNavR"></div>
   </li>

  

   </ul>
 </div>
 
 
 <div class="meun" >
   <a class="home" href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?></a>
   
   <div class="meun_r">
   <ul>
   <li>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['no']['iteration']++;
?>
  <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a> 
  
  <?php if (! ($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>
            |
            <?php endif; ?> 
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </li>
 </ul>
 </div>
 </div>
 

</div>

    
<div class="header_bg">
<div class="t">
<div class="f_l">
 <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
   <?php if ($this->_foreach['no']['iteration'] < 6): ?>
     <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
        <?php endif; ?>		 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>    
    
    
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div class="cart" id="ECS_CARTINFO">
 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> <a href="flow.php"><img style="vertical-align:middle;" src="themes/ecmoban/images/jiesuan.gif"></a>
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
           alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
<div class="f_l">

   <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"/>
   <input name="imageField" type="submit" value=" " class="go" style="cursor:pointer;background: url(themes/ecmoban/images/sousuo.gif) no-repeat; width:51px; height:20px; border:none; float:left; margin-left:5px;" />


</div>
<div class="f_r">
<?php if ($this->_var['searchkeywords']): ?>
   <?php echo $this->_var['lang']['hot_search']; ?> ：
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
</div>
</form>




</div>



