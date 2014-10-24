<?php
require('php/config/conf.default.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <?php /* Jquery and jquery UI */ ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <?php /* Awesome fonts icons */ ?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <?php /* Twitter bootstrap */ ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <?php /* Colorpicker */ ?>
    <link rel="stylesheet" type="text/css" href="styles/css/colpick.css">
    <script src="js/colpick.js"></script>

    <?php /* WYSIWYG editor */ ?>
    <script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/jHtmlArea-0.8.js"></script>
    <script type="text/javascript" src="js/texteditor.js"></script>
    <link rel="Stylesheet" type="text/css" href="styles/css/jquery-ui-1.7.2.custom.css" />
    <link rel="Stylesheet" type="text/css" href="styles/css/jHtmlArea.css" />

    <?php /* Backend stylesheets and documentready */ ?>
    <link rel="stylesheet" type="text/css" href="styles/css/editor.css">
    <script src="js/documentready.js"></script>

    <title>Beheer</title>
</head>
<body>
<?php
    echo EditGenerator::getInstance()->getHeaderEditor();
    echo EditGenerator::getInstance()->getSectionsEditor();
    echo EditGenerator::getInstance()->getFooterEditor();
    echo EditGenerator::getInstance()->getMiscEditor();
?>
</body>
</html>