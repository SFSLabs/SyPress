<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <title><?php $view['slots']->output('title', 'Hello Application') ?></title>
</head>
<body>
<?php $view['slots']->output('_content') ?>
</body>
</html>