<?php
require('php/config/conf.default.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/css/editor.css">
    <link rel="stylesheet" type="text/css" href="styles/css/colpick.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/documentready.js"></script>
    <script src="js/colpick.js"></script>
    <title>Beheer</title>
</head>
<body>
<?php
    echo EditGenerator::getInstance()->getHeaderEditor();
    echo EditGenerator::getInstance()->getContentEditor();
    echo EditGenerator::getInstance()->getFooterEditor();
?>
</body>
</html>