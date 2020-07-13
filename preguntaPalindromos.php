<form action="#" method="post">
    <input type="text" name="frase">
    <input type="submit" name="submit" value="verificar pilindromo">
</form>
<?php
if(isset($_POST["submit"])){
    $frase = $_POST["frase"];
    if($frase == strrev($frase)){
        echo "es palindromo";
    }else{
        echo "no es palindromo";
    }
}
