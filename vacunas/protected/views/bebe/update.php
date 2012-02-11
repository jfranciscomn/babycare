<?php
$this->breadcrumbs=array(
	'Bebes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bebe', 'url'=>array('index')),
	array('label'=>'Create Bebe', 'url'=>array('create')),
	array('label'=>'View Bebe', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bebe', 'url'=>array('admin')),
);
?>

<h1>Update Bebe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>