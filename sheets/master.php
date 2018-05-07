<!doctype html>
<html lang="">
<?php
include '../tabs/head.php';
?>
<body>
<div class="wrap">
    <div class="container">
        <?php
        include '../tabs/headerNav.php'
        ?>
        <?php
        include '../tabs/masterTab.php'
        ?>

    </div>
    <?php
    include '../tabs/footer.php';
    ?>

<script>
    var elem=document.getElementsByClassName('active')[0];
    elem.classList.remove('active');
    var active=document.getElementById('master');
    active.classList.add('active');

</script>
    <script src="../js/mainJS.js"></script>
</body>
</html>