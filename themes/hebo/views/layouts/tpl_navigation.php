<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,

                    'items'=>array(
						array('label'=>'Home ', 'url'=>array('site/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 
                     ),

                        

                        array('label'=>'Personal <span class="caret"></span>', 'url'=>array('/personal/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>" "), 'visible'=>!Yii::app()->getUser()->isGuest &&  Yii::app()->getSession()->get('tipo')=='PERSONAL',
                        'items'=>array(
                            array('label'=>'admin', 'url'=>array('/personal/admin')),
                            array('label'=>'crear', 'url'=>array('/personal/create')),
                            
                        )),

                        // array('label'=>'Turista <span class="caret"></span>', 'url'=>array('/turista/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        // 'items'=>array(
                        //     array('label'=>'admin', 'url'=>array('/turista/admin')),
                        //     array('label'=>'crear', 'url'=>array('/turista/create')),
                            
                        // )),

                        array('label'=>'Proveedor <span class="caret"></span>', 'url'=>array('/proveedor/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 'visible'=>!Yii::app()->getUser()->isGuest &&  Yii::app()->getSession()->get('tipo')=='PERSONAL',
                        'items'=>array(
                            array('label'=>'admin', 'url'=>array('/proveedor/admin')),
                            array('label'=>'crear', 'url'=>array('/proveedor/create')),
                            
                        )),

                        array('label'=>'Ruta <span class="caret"></span>', 'url'=>array('/ruta/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 'visible'=>!Yii::app()->getUser()->isGuest,
                        'items'=>array(
                            array('label'=>'Ver Rutas', 'url'=>array('/ruta/index'),'visible'=>!Yii::app()->getUser()->isGuest ),
                            
                            array('label'=>'admin ruta', 'url'=>array('/ruta/admin'),'visible'=>!Yii::app()->getUser()->isGuest &&  Yii::app()->getSession()->get('tipo')=='PERSONAL'),
                            array('label'=>'crear ruta', 'url'=>array('/ruta/create'), 'visible'=>!Yii::app()->getUser()->isGuest &&  Yii::app()->getSession()->get('tipo')=='PERSONAL'),
                            array('label'=>'localidad', 'url'=>array('/localidad/index'),'visible'=>!Yii::app()->getUser()->isGuest &&  Yii::app()->getSession()->get('tipo')=='PERSONAL' ),
                            
                        )),
                        array('label'=>'Comprar ', 'url'=>array('/ordenCompra/create'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 
                        ),
                        array('label'=>'Comprar ', 'url'=>array('/ordenCompra/create'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 
                        ),
                        array('label'=>'comprar comprar ', 'url'=>array('/shop/products'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),  'visible'=>!Yii::app()->getUser()->isGuest,
                        ),

                        // array('label'=>'Comprar <span class="caret"></span>', 'url'=>array('/ordenCompra/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 'visible'=>!Yii::app()->getUser()->isGuest,
                        // 'items'=>array(
                        //     // array('label'=>'Comprar', 'url'=>array('/ordenCompra/create')),
                        //     // array('label'=>'Arrendar', 'url'=>array('/ordenArriendo/create')),
                            
                        // )),

                         // array('label'=>'Arrendar <span class="caret"></span>', 'url'=>array('/ordenArriendo/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 'visible'=>!Yii::app()->getUser()->isGuest,
                        // 'items'=>array(
                        //     // array('label'=>'Comprar', 'url'=>array('/ordenCompra/create')),
                        //     // array('label'=>'Arrendar', 'url'=>array('/ordenArriendo/create')),
                            
                        // )),

						// array('label'=>'Styles <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"6 styles"), 
      //                   'items'=>array(
      //                       array('label'=>'<span class="style" style="background-color:#0088CC;"></span> Style 1', 'url'=>"javascript:chooseStyle('none', 60)"),
						// 	array('label'=>'<span class="style" style="background-color:#e42e5d;"></span> Style 2', 'url'=>"javascript:chooseStyle('style2', 60)"),
						// 	array('label'=>'<span class="style" style="background-color:#c80681;"></span> Style 3', 'url'=>"javascript:chooseStyle('style3', 60)"),
						// 	array('label'=>'<span class="style" style="background-color:#51a351;"></span> Style 4', 'url'=>"javascript:chooseStyle('style4', 60)"),
						// 	array('label'=>'<span class="style" style="background-color:#b88006;"></span> Style 5', 'url'=>"javascript:chooseStyle('style5', 60)"),
						// 	array('label'=>'<span class="style" style="background-color:#f9630f;"></span> Style 6', 'url'=>"javascript:chooseStyle('style6', 60)"),
      //                   )),
						
						array('label'=>'Features <span class="caret"></span>', 'url'=>array('/site/page', 'view'=>'columns'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"cool features"), 'visible'=>!Yii::app()->getUser()->isGuest,
                        'items'=>array(
                            array('label'=>'Columns', 'url'=>array('/site/page', 'view'=>'columns')),
							array('label'=>'Pricing tables', 'url'=>array('/site/page', 'view'=>'pricing-tables')),
							array('label'=>'UI Elements', 'url'=>array('/site/page', 'view'=>'elements')),
                        )),

                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"what we are about"),),
                       
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                )); ?>

 




    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->