
 <div class="box_1">
  <h3><span>销售排行榜</span></h3>
  <div class="top10List clearfix">
  <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
 
     
    <ul class="clearfix">
    
      <li style=" padding:5px; padding-left:8px;">
      <img src="themes/ecmoban/images/top_<?php echo $this->_foreach['top_goods']['iteration']; ?>.gif">
      
      
      <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>

      </li>
    </ul>
    

  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>

<div class="blank"></div>
