<?php
$this->breadcrumbs=array(
	'Bebes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bebe', 'url'=>array('index')),
	array('label'=>'Create Bebe', 'url'=>array('create')),
	array('label'=>'Update Bebe', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bebe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bebe', 'url'=>array('admin')),
);
?>

<h1>View Bebe #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'app',
		'nombre',
		'apm',
		'sexo',
		'fecha_nac',
	),
)); ?>
