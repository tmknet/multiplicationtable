<?php
$css = "css.css";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=<?php echo $css; ?>>


</head>
<body>
    <div class="multiplication-table">
        <div class="cell header"></div>
        <?php for( $i=1; $i <= 10; $i++ ):?>
            <div class="cell header"> <?php echo $i; ?> </div>
        <?php endfor;?>

        <!--Table content-->
        <?php for ( $i=1; $i <= 10; $i++ ): ?>
            <div class="cell header"><?php echo $i; ?></div>
                <?php for( $j=1; $j <= 10; $j++ ): ?>
                    <div class="cell"><b><?php echo $i * $j; ?></b></div>
                <?php endfor; ?>
        <?php endfor; ?>
    </div>
   
</body>
</html>
