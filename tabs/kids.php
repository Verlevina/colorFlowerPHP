<!--Детям-->
<section id="mainidcontent7" class="tabContent">
    <h3>
        Абзац 1.10.33 "de Finibus Bonorum et Malorum", написанный Цицероном в 45 году н.э.
    </h3>

    <p>
        "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
        fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
        est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis
        voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis
        aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
        recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
        maiores alias consequatur aut perferendis doloribus asperiores repellat."
    </p>
<h3>Список группы</h3>
<?php
include '../requests/request1.php';
$arr = request1();
?>
<!--        //Создаем таблицу с данными-->
<table class="groupList">
    <?php
    foreach ($arr as $key => $elem) {
        ?>
        <tr>
            <?php
            foreach ($elem as $elem) {
                echo '<td>' . $elem . '</td>';
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>
</section>