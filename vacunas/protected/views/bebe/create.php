<?php
$this->breadcrumbs=array(
	'Bebes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bebe', 'url'=>array('index')),
	array('label'=>'Manage Bebe', 'url'=>array('admin')),
);
?>

<h1>Create Bebe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>