<!DOCTYPE html>
<html>
<head>
	<?php echo $this->element('head') ?>
</head>
<body>
	<?php echo $this->element('header') ?>

    <!-- Page Content -->
    <div id="content" class="container-fluid">
        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content') ?>
    </div>
</body>
</html>