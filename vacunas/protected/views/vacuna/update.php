<?php
$this->breadcrumbs=array(
	'Vacunas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vacuna', 'url'=>array('index')),
	array('label'=>'Create Vacuna', 'url'=>array('create')),
	array('label'=>'View Vacuna', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>Update Vacuna <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>