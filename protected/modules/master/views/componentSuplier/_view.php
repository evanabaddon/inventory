<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->suplier_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('component_id')); ?>:</b>
	<?php echo CHtml::encode($data->component_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />


</div>