<?php
chdir('../../');
require('php/config/conf.default.php');
header("Content-type: text/css; charset: UTF-8");

// Header
$header = ElementFactory::getInstance()->getHeader();
$headerColor = $header->getHeaderColor();
$headerTextColor = $header->getHeaderTextColor();
$navTextColor = $header->getNavTextColor();
$navTextHoverColor = $header->getNavTextHoverColor();

// Content
$colorEven = "white";
$colorOdd = "#2c3e50";
$textColorEven = '#333';
$textColorOdd = 'white';

// Footer
$footerColorEven = 'gray';
$footerColorOdd = 'white';
?>

<?php /* Header */ ?>
header {
background-color: <?php echo $headerColor; ?>;
}
header h1 {
    color: <?php echo $headerTextColor; ?>;
}
header nav a {
    color: <?php echo $navTextColor; ?>;
}

header nav a:hover {
    color: <?php echo $navTextHoverColor; ?>;
}

<?php /* Content sections */ ?>
div.even,
footer.even {
    color: <?php echo $textColorEven; ?>;
    background-color: <?php echo $colorEven;?>;
}
div.odd,
footer.odd {
    color: <?php echo $textColorOdd; ?>;
    background-color: <?php echo $colorOdd;?>;
}
div.transition1 {
    background: linear-gradient(2deg, <?php echo $colorOdd;?> 49%, <?php echo $colorEven;?> 50%);
}
div.transition2 {
    background: linear-gradient(-2deg, <?php echo $colorEven;?> 49%, <?php echo $colorOdd;?> 50%);
}

<?php /* Footer */ ?>
footer.odd ul li a {
    color: <?php echo $textColorOdd; ?>;
}
footer.even ul li a {
    color: <?php echo $footerColorEven; ?>;
}
