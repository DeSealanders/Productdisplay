<?php
header("Content-type: text/css; charset: UTF-8");

$colorEven = "white";
$colorOdd = "#2c3e50";
$textColorEven = '#333';
$textColorOdd = 'white';
$headerColor = 'darkorange';
?>

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

header h1 {
    color: <?php echo $headerColor; ?>;
}