<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>fonction en php</title>
</head>
<body>

    <?php

    function gett(string $key,bool $valeurpardefaut=null){
        echo '<p>c bon</p>';
        return $_GET[$key]??$valeurpardefaut;
    }

    function titre(string $test){
        echo '<p>'.'test'.'</p>';
    }

    ?>

</body>
</html>