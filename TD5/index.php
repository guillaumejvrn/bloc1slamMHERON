<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
        <a href="tableau.php">tableau</a>
        <form method="get" action="index.php">
            <label for="msg">saisir le message</label>
            <input name="msg" type="name">
        </form>
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo "Le message est : " . $msg;
        }
        ?>
        


        <p>--------------------------------------------------------------------</p>

        <form method="get" action="index.php">
            <label for="cb">combien de lignes</label>
            <input name="cb" type="number">
        </form>

        <?php
        $_tab = array('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione similique nemo odit nulla reiciendis, consequatur recusandae eos enim magnam id cum amet velit quia dicta pariatur sint, quaerat repellat est?','"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"','"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."');
        if (isset($_GET['cb'])) {
            $a = 0;
            $len = count($_tab);
            for ($nb = 0; $nb < $_GET['cb']; $nb++){
                echo $_tab[$a].'<br>';
                $a++;
                if($a==$len){
                    $a=0;
                }
            }
        }
        ?>
    </body>
</html>
