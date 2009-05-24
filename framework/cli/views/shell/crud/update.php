<?php
/**
 * This is the template for generating the update view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $model: the finder object
 * - $modelClass: the model class name
 * - $modelVar: the PHP variable name storing the model instance
 * - $columns: a list of column schema objects
 */
?>
<h2>Update <?php echo $modelClass." <?php echo \${$modelVar}->{$ID}; ?>"; ?></h2>

<div class="actionBar">
[<?php echo "<?php echo CHtml::link('{$modelClass} List',array('list')); ?>"; ?>]
[<?php echo "<?php echo CHtml::link('New {$modelClass}',array('create')); ?>"; ?>]
[<?php echo "<?php echo CHtml::link('Manage {$modelClass}',array('admin')); ?>"; ?>]
</div>

<?php echo "<?php echo \$this->renderPartial('_form', array(
	'$modelVar'=>\$$modelVar,
	'update'=>true,
)); ?>"; ?>