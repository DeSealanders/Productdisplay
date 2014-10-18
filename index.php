<?php
require('php/config/conf.default.php');
?>
<!DOCTYPE html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/css/default.css">
    <link rel="stylesheet" type="text/css" href="styles/php/variables.php">
    <script src="js/documentready.js"></script>
</head>
<body>
<?php /* <div class="a">
    <p class="a">a</p>
</div>
<div class="b">
    <p class="b1">b1</p>
    <p class="b2">b2</p>
</div>
<div class="c">
    <p class="c">c</p>
</div> */ ?>

<?php
    echo PageGenerator::getInstance()->getHeaderHtml();
    echo PageGenerator::getInstance()->getContentHtml();
    echo PageGenerator::getInstance()->getFooterHtml();
?>
</body>
</html>