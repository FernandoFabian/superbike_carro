<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<section class="main-body">
  <div class="container">
  <div class="row-fluid">
  
    <div class="span8">

    <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                'homeLink'=>CHtml::link('Dashboard'),
                'htmlOptions'=>array('class'=>'breadcrumb')
            )); ?><!-- breadcrumbs -->
        <?php endif?>
        
        <!-- Include content pages -->
        

  </div><!--/span-->
    
    <div id="content">
  <div style="float: right; max-height: 200px; width: 200px; margin: 5px;">
  <?php
  $this->widget('ShoppingCartWidget'); 
  $this->widget('ProductCategoriesWidget'); 
  if(!Yii::app()->user->isGuest) 
    $this->widget('AdminWidget');

  ?>  
  </div>

 
  </div><!--/span-->
  </div><!--/row-->
</div>
</section>


<?php $this->endContent(); ?>