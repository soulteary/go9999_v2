<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	'管理',
);
?>
<div class="page-header">
    <h1>管理News</h1>
    <a class="btn btn-success" href="<?php echo $this->createUrl('news/create');?>">创建News</a>
</div>
<div class="row">
    <div class="col-xs-12">
<?php $this->widget('admin.components.WxGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'n_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'n_title',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'n_content',
		    'value'=>'$data->n_content',
		    'type'=>'raw',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'n_readCount',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'n_creationUser_id',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
			'name' => 'n_creationDate',
			'htmlOptions' => array(
				'width' => 80,
			),
		),
		array(
            'header' => '操作',
			'class'=>'CButtonColumn',
            'headerHtmlOptions' => array('width'=>'80'),
		),
	),
)); ?>
    </div>
</div>
