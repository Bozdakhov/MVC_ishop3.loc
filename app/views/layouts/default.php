<!doctype html>
<html lang="en">
<head>
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0,
       maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equip="X-UA-Compatible" content="ie-edge">
    <?=$this->getMeta();?>
</head>
<body>

    <h1>ШАБЛОН DEFAULT</h1>

<?=$content;?>

<?php
    $logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

    debug( $logs->grep( 'SELECT' ) );
?>

</body>
</html>
