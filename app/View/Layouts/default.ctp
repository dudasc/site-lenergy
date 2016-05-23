<!DOCTYPE html>
<html>
<head>
	<?= $this->element('head');?>
</head>
<body>
        <?php echo $this->element('header'); ?>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->element('footer'); ?>
        <?php // echo $this->element('sql_dump'); ?>
    </body>

	<?php //echo $this->element('sql_dump'); ?>
</html>
