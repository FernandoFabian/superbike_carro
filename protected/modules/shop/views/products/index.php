<?php
$this->breadcrumbs=array(
	Shop::t('Products'),
);
Shop::renderFlash();

?>
<a href="index.php?r=shop/shoppingCart/view">Ir al carrito de compras</a>

<h2><?php echo Shop::t('All products'); ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',


)); ?>
<a href="index.php?r=shop/shoppingCart/view">Ir al carrito de compras</a>
