<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
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
        


        <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>

        <form method="get" action="index.php">
            <label for="cb">combien de lignes</label>
            <input name="cb" type="text" required>
        </form>

        <?php
        $_tab = array ('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione similique nemo odit nulla reiciendis, consequatur recusandae eos enim magnam id cum amet velit quia dicta pariatur sint, quaerat repellat est?');
        if (isset($_GET['cb'])) {
            for ($nb = 1; $nb == $_GET['cb']; $nb++){
                echo $_tab;
            }
        }
        ?>

    </body>
</html>
