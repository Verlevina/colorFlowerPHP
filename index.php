<!doctype html>
<html lang="">
<?php
include 'tabs/head.php';
?>

<body>

<!--[if lt IE 9]>
<script>
    var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
    for (var i = 0; i < e.length; i++) {
        document.createElement(e[i]);
    }
</script>
<![endif]-->
<div class="wrap">
    <div class="container">
        <?php
        include 'tabs/headerNav.php'
        ?>

        <?php
        include 'tabs/main.php'
        ?>
    </div>
</div>
<?php
include 'tabs/footer.php';
?>
<script src="js/mainJS.js"></script>
</body>
</html>
