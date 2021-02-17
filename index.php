<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyeshaZahid_Ass02</title>
</head>
<body>
<h4><b>Table Generator</b></h4>
    <form method="POST">
        <input type="text" name="A">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php

if (isset($_POST["submit"])){
    $F=$_POST["A"];
    for ($i=1; $i<=10; $i++){ 
        echo "<table style='border: 1px solid #555;' >
        <tr>
        <td>".$F."</td>
        <td>*</td>
        <td>".$i."</td>
        <td>=</td>
        <td>".$F * $i."</td>
        </tr>
        </table>";
        // echo  $F, "*" , $i, "=", $F * $i,"<br>" ;
    }
}
?>
</body>
</html>