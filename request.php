<?php
    include __DIR__.'\generation.php';
    include __DIR__.'\functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        Password generata: 
    </h3>
    <p>
        <?php echo generatePassword($_GET['psw_length'], $generationChar);?>
    </p>
    <div>
        <a href="<?php echo "./request.php?psw_length=".$_GET['psw_length']?>"> Rigenera </a>
    </div>
    <div>
        <a href="./index.php">Torna indietro</a>
    </div>
    
</body>
</html>
