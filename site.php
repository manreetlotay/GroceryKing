<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $adj = "good";
        echo "<h1>Hello World";
        echo "<hr><p>Welcome to my site!\t";
        echo("php is $adj</p>");
    ?>

    <form action="site.php" method="post">
       Banana: <input type="checkbox" name="fruits[]" value="banana">
        watermelon: <input type="checkbox" name="fruits[]" value="watermelon">
        pienapple: <input type="checkbox" name="fruits[]" value="pineapple">
    <input type="submit">
    </form>
    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0]; echo  $fruits[1];
    ?>
</body>
</html>