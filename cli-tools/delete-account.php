#!/usr/bin/php
<?php

require_once("/RootPanel/LightPHP/lp-load.php");
require_once("/RootPanel/panel/main-config.php");


if(!isset($argv[1]) || !isset($argv[2]) || $argv[2]!="sure")
    die("error : {$argv[0]} <uname> sure\n");
$uname=$argv[1];

shell_exec("sudo userdel -rf {$uname}");
shell_exec("sudo groupdel {$uname}");
shell_exec("sudo rm -f /etc/nginx/sites-enabled/{$uname}");
shell_exec("sudo rm -f /etc/apache2/sites-enabled/{$uname}");

$conn=new lpMySQL;
$conn->exec("DROP USER '%s'@'localhost';",$uname);

$dbs=$conn->getDBs();
foreach($dbs as $i)
{
    if(substr($i,0,strlen($uname)+1)==($uname."_"))
    {
        $conn->exec("DROP DATABASE `%t`;",$i);
    }
}

?>
