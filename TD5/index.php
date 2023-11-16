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
            <input name="cb" type="number">
        </form>

        <?php
        $_tab = array ('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione similique nemo odit nulla reiciendis, consequatur recusandae eos enim magnam id cum amet velit quia dicta pariatur sint, quaerat repellat est?');
        if (isset($_GET['cb'])) {
            for ($nb = 0; $nb < $_GET['cb']; $nb++){
                echo $_tab[$nb];
            }
        }
        ?>
        <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>

        <form method="get" action="index.php">
            <label for="li">  combien de lignes  </label>
            <input name="li" type="number" required><br>

            <label for="co">combien de colones</label>
            <input name="co" type="number" required><br>
            <input type="submit" value="Soumettre">
        </form>
        <textarea name="cafard" id="jsp" cols="30" rows="10">
        <?php
        if (isset($_GET['li']) && isset($_GET['co'])) {
            $li = $_GET['li'];
            $co = $_GET['co'];
            echo '<p>est ce que c bon pour vous</p>';

            echo '<table>';
            for ($i = 0; $i < $li; $i++) {
                echo '<tr rowspan="1">';
                for ($j = 0; $j < $co; $j++) {
                    echo '<td colspan="1">Cellule ' . ($i + 1) . '-' . ($j + 1) . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
        </textarea>
        <?php
        if (isset($_GET['li']) && isset($_GET['co'])) {
            $li = $_GET['li'];
            $co = $_GET['co'];
            echo '<p>est ce que c bon pour vous</p>';

            echo '<table border="1">';
            for ($i = 0; $i < $li; $i++) {
                echo '<tr rowspan="1">';
                for ($j = 0; $j < $co; $j++) {
                    echo '<td colspan="1">Cellule ' . ($i + 1) . '-' . ($j + 1) . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
        

    </body>
</html>
