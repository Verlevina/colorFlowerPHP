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
    <header>
        <a href="#"><img src="../img/flower.png" alt="flower"/></a>
            <div class="siteName">
                <?php
                if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/index.html') {
                    ?>

                    <h2>"Neque porro "</h2>
                    <h1>Lorem</h1>

                    <?php
                }
                else{
                ?>

                <p class="h2Span">"Neque porro "</p>
                <p class="h1Span">Lorem</p>

                <?php }?>
            </div>

        <div class="contacts">
            <p><a href="mailto:example@example.ru">example@example.ru</a></p>
            <p><a href='tel:8000000000'>8-00-00-000</a></p>
        </div>
    </header>
    <div class="navHidden">
        <span>&#9776</span>
    </div>
    <nav class="computerNav tabs_block">
        <ul>
            <li><a class="tabSelect" href="../index.php" data-numberTab="1">Главная</a></li>
            <li><a id ='new' class="tabSelect" href="../sheets/news.php" data-numberTab="2">Новости</a></li>
            <li><a id="work" class="tabSelect" href="../sheets/works.php" data-numberTab="3">Занятия</a></li>
            <li><a id='master' class="tabSelect" href="../sheets/master.php" data-numberTab="4">Мастерская</a></li>
            <li><a id='group' class="tabSelect" href="../sheets/group.php" data-numberTab="5">Группа</a></li>
            <li><a id='parents' class="tabSelect" href="../sheets/parents.php" data-numberTab="6">Родителям</a></li>
            <li><a id='kids' class="tabSelect" href="../sheets/kids.php" data-numberTab="7">Детям</a></li>
        </ul>
    </nav>