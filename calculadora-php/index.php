<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="recebe-dados.php" method="post">

    <?php
    $num1;
    $num2;
    $operacao;
   

    ?>

    <pre>
    <input type="number" name= "num1">
    <input type="number" name="num2">
        <select name="operacao">
            <option value="adi">+</option>
            <option value="subi">-</option>
            <option value="multi">x</option>
            <option value="divi">/</option>
        </select>
        <input type="submit" value="enviar">
        <input type="reset"value="limpar">

    </pre>

    
</body>
</html>