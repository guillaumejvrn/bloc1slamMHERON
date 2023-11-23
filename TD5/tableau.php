<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>

        <a href="index.php">index</a>

        <form method="get" action="tableau.php">
                    <label for="li">  combien de lignes  </label>
                    <input name="li" type="number" ><br>

                    <label for="co">combien de colones</label>
                    <input name="co" type="number" ><br>
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
                
    <form method="get" action="tableau.php">
        <label for="fusion">  combien de cases voulez vous fusioner  </label>
        <input name="fusion" type="number"><br>
        <input type="submit" value="soumettre">
    </form>


    <?php
    
    if(isset($_GET['fusion'])){
        $lignefusionne = $_GET['fusion'];
        
        echo "<form>";

        for($i = 0; $i < $lignefusionne; $i++){
            echo '<label for="startcase"> de la case </label> <input name="startcase" type="number">'.'<label for="endcase"> a la case </label> <input name="endcase" type="number"><br>';
        }
        echo '<input type="submit" value="soumettre">';
        echo "</form>";
    }
    
    ?>

    <?php
    for($i = 0; $i < $lignefusionne; $i++){
        if(isset($_GET[''])){
            
        }
    }
    
    ?>
                
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

                <p> FIN TD5 </p>

                <?php
                include 'function.php';
                titre('test');
                gett('test');
                ?>
    </body>
</html>