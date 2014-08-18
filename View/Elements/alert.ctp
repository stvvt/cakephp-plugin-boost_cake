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
    <?php if (!empty($message)) : ?>
       <h4><?php echo $message; ?></h4>
    <?php endif; ?>

    <?php if (!empty($moreMessage)) { echo $moreMessage; }?>
</div>