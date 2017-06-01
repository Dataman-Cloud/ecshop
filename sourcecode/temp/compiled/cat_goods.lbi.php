<div class="box box_3">

<div class="itemTit">
   <div class="tit"><a href="<?php echo $this->_var['goods_cat']['url']; ?>" style=" color:#79af00; text-decoration:none"><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></a></div>

</div>

  

    <div class="clearfix goodsBox"  style="padding-top:10px">
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <div class="goodsItem ">
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
           <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></p>
         市场价：<font class="market"><?php echo $this->_var['goods']['market_price']; ?></font><br />
            本店价：<font class="f1"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></font>
        </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
 </div>

<div class="blank"></div>
