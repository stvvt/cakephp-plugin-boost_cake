<?php
if (!isset($class)) {
	$class = false;
}
if (!isset($close)) {
	$close = true;
}
?>
<div class="alert<?php echo ($class) ? ' ' . $class : null; ?>">
<?php if ($close): ?>
	<a class="close" data-dismiss="alert" href="#">×</a>
<?php endif; ?>
	<h4><?php echo $message; ?></h4>
    
    <?php $this->Form->validationErrors = Hash::merge($this->Form->validationErrors, $errors);?>
	<?php $errorMessages = array(); ?>
	<?php foreach ($this->Form->validationErrors as $model => $errs) {
	    foreach (array_keys($errs) as $field) {
	        $errorMessages[] = $this->Form->error($model . '.' . $field);
	    }
	} ?>
	
	<?php if (!empty($errorMessages)) : ?>
	<ul class="has-error">
	    <?php foreach ($errorMessages as $m) : ?>
	        <li><?php echo $m ?></li>
        <?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>