<?php
require('php/config/conf.default.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/css/default.css">
    <link rel="stylesheet" type="text/css" href="styles/php/variables.php">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Demo CMS</title>
</head>
<body>
<?php
    echo PageGenerator::getInstance()->getHeaderHtml();
    echo PageGenerator::getInstance()->getContentHtml();
    echo PageGenerator::getInstance()->getFooterHtml();
?>
</body>
</html>