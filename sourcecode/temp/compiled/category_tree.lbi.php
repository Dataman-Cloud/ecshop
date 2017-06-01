
  <div id="category_tree">
  <h3><span>商品分类</span></h3>
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_88158000_1448454552');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_88158000_1448454552']):
?>
     <dl>
     <dt><a href="<?php echo $this->_var['cat_0_88158000_1448454552']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_88158000_1448454552']['name']); ?></a></dt>
     <dd><?php $_from = $this->_var['cat_0_88158000_1448454552']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no']['iteration']++;
?>
     <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> 
      <?php if (! ($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>
         
        
      <span style="padding:0 3px;">|</span>
          <?php endif; ?> 
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </dd>
       </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>

<div class="blank"></div>
