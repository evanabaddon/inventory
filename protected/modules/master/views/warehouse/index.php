<?php
$this->breadcrumbs=array(
	'Warehouse',
);
$this->title = "Warehouse";
$this->menu=array(
	array('label'=>'Manage Warehouse', 'url'=>array('admin')),
);
?>

    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">Form Warehouse</div>
		<div class="portlet-content">
			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
        </div>
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
                          
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
        <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/transaction.gif" alt="Latest Registered Users" /> Table List Warehouse</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'warehouse-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
					'columns'=>array(
						array(
			            	'header'=>'No',
			            	'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
							'htmlOptions'=>array(
								'valign'=>'top',
								'width'=>'2px'
							)
						),
						'name_warehouse',
						'address',
				array(
					'class'=>'CButtonColumn',
					),
				),
			)); ?>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT--> 