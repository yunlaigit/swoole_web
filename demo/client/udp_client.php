<?php
    //连接swoole udp 服务
    $client = new swoole_client(SWOOLE_SOCK_UDP);

    //php cli 常量
    fwrite(STDOUT, "请输入消息：");
    $msg = trim(fgets(STDIN));

    //发送消息给udp服务器
    $client->sendto('127.0.0.1', 9502, $msg);

    //接收来自服务端的消息
    $result = $client->recv();
    echo $result;
?>