
<div class="xm-box">
  <div class="title"><span class="floor-icon"><i></i></span>
    <h2><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></h2>
    <a class="more" href="<?php echo $this->_var['goods_cat']['url']; ?>">查看更多>></a></div>
  <div id="show_hot_area" class="clearfix xm-boxs"> 
    
    <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_42122700_1459950352');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_42122700_1459950352']):
?>
    <div class="goodsItem goodsItems"> <a href="<?php echo $this->_var['goods_0_42122700_1459950352']['url']; ?>"><img src="<?php echo $this->_var['goods_0_42122700_1459950352']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_42122700_1459950352']['name']); ?>" class="goodsimg" /></a><br />
      <p class="f1"><a href="<?php echo $this->_var['goods_0_42122700_1459950352']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_42122700_1459950352']['name']); ?>"><?php echo $this->_var['goods_0_42122700_1459950352']['short_name']; ?></a></p>
      <p class="price">
      	<font class="f1 bigsize"> 
            <?php if ($this->_var['goods_0_42122700_1459950352']['promote_price'] != ""): ?> 
            <?php echo $this->_var['goods_0_42122700_1459950352']['promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['goods_0_42122700_1459950352']['shop_price']; ?> 
            <?php endif; ?> 
        </font> 
        <font class="market"><?php echo $this->_var['goods_0_42122700_1459950352']['market_price']; ?></font>
      	
      </p>
      <p class="adds"><a onclick="addToCart(<?php echo $this->_var['goods_0_42122700_1459950352']['id']; ?>,this);" class="btns">加入购物车</a></p>
      </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
</div>
<div class="blank"></div>
