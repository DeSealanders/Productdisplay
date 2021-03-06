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

// Page
$sections = ElementFactory::getInstance()->getSections();
$colorEven = $sections->getColorEven();
$colorOdd = $sections->getColorOdd();
$textColorEven = $sections->getTextColorEven();
$textColorOdd = $sections->getTextColorOdd();

// Footer
$footer = ElementFactory::getInstance()->getFooter();
$footerColorEven = $footer->getFooterColorEven();
$footerColorOdd = $footer->getFooterColorOdd();
$footerLinkColor = $footer->getFooterLinkColor();
$footerTextColor = $footer->getFooterTextColor();
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

<?php /* Page sections */ ?>
div.even {
    color: <?php echo $textColorEven; ?>;
    background-color: <?php echo $colorEven;?>;
}
div.odd {
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
footer.odd {
    background-color: <?php echo $footerColorOdd; ?>;
}
footer.even {
    background-color: <?php echo $footerColorEven; ?>;
}
footer ul li a {
    color: <?php echo $footerLinkColor; ?>
}
footer {
    color: <?php echo $footerTextColor; ?>
}
