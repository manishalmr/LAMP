<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widht=device-width, initial-scale=1.0">
        <title>
            Task For Checking the service status
        </title>
        <style>
            .not_running {
                background-color: red;
                color: black;
                padding-right: 22px;
                padding-bottom: 2px;
            }
            .running {
                background-color: lightgreen;
                color: black;
                padding-right: 22px;
                padding-bottom: 2px;
            }
        </style>
    </head>
    <body class="">
        <h2>Services That's Running</h2>
        <ul style="padding-top: 2px;">
            <?php
            $str = file_get_contents('services.json');
            $json = json_decode($str,  true);
            $mysql = $json['mysql_service'];
            $redis = $json['redis_service'];
            $apache = $json['apache2_service'];
            ?> <li class="<?= $mysql == 'running' ? 'running' : 'not_running' ?>">
                <?= $mysql == 'running' ? 'Database(mysql) service is running' : 'Database(mysql) service is not running'?>
            ?> <li class="<?= $redis == 'running' ? 'running' : 'not_running' ?>">
                <?= $redis == 'running' ? 'Redis service is running' : 'Redis service is not running'?></li> <?php
            ?> <li class="<?= $apache == 'running' ? 'running' : 'not_running' ?>">
                <?= $apache == 'running' ? 'Apache service is running' : 'Apache service is not running'?></li> <?php
            ?>
        </ul>
    </body>
</html>
