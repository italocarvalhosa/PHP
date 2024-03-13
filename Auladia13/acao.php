<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST['email'] =="admin@email.com"){?>

    bem vindo <?php echo $_POST ['nome'];?>
    <br>
    Seu email é <?php echo ['email'];?>
    <?php
    } else {
        echo "Email invalido";
    }
    ?>
    
    
    
</body>
</html>