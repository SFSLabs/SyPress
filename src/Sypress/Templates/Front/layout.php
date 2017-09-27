<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSS Block -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- CSS Block -->
    <title><?php $view['slots']->output('title', 'SyPress') ?></title>
</head>
<body>
<?php $view['slots']->output('_content') ?>
<!-- JS Block -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!--End JS Block -->
</body>
</html>