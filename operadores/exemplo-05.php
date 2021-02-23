<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="OK">

</form>

<?php
    //todos os form acima realizam GET
    //percorre o array superglobal $_GET e retorna o nome do campo (key) e seu valor
    if(isset($_GET)) {

        foreach($_GET as $key => $value)    {
            echo "Nome do campo: " . $key . "<br>";
            echo "Valor do campo: " . $value;
            echo "<hr>";
        }

    }

?>