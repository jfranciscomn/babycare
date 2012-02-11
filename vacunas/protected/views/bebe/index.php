<?php
$this->breadcrumbs=array(
	'Bebes',
);

$this->menu=array(
	array('label'=>'Create Bebe', 'url'=>array('create')),
	array('label'=>'Manage Bebe', 'url'=>array('admin')),
);
?>

<h1>Bebes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
