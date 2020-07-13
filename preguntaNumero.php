<form action="#" method="post">
    <input type="number" name="numero">
    <input type="submit" name="submit" value="verificar">
</form>
<?php
if(isset($_POST["submit"])){
    $numero = $_POST["numero"];
    if($numero < 0){
        echo "$numero es negativo";
    }
    if($numero > 0){
        echo "$numero es positivo";
    }
    if($numero == 0){
        echo "$numero es 0";
    }
}
