<?php
$this->breadcrumbs=array(
	'Vacunas',
);

$this->menu=array(
	array('label'=>'Create Vacuna', 'url'=>array('create')),
	array('label'=>'Manage Vacuna', 'url'=>array('admin')),
);
?>

<h1>Vacunas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
