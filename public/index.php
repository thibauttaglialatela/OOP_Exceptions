<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On the road again</title>
</head>
<body>
    <?php
    include __DIR__ . '/../src/Car.php'; 
    $tesla = new Car('blue', 5, 'electric');

    try{
        echo $tesla->start() . PHP_EOL;
    } catch (Exception $e) {
        $tesla->setParkBrake(false);
    } finally {
        echo "Ma voiture roule comme un donut" . PHP_EOL;
    }
    ?>
    
</body>
</html>