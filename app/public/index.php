<?php

/*
 * Test Mysql Connection
 */
$pdo = new PDO('mysql:host=service-mysql8', 'root', 'XXXX-MYSQL-DUMMY-PASSWORD-XXXX');
$pdo->exec("CREATE DATABASE IF NOT EXISTS demo");

echo '✓ - mysql <br>';

/*
 * Test Redis Connection
 */
$redis = new Redis(); 
$redis->connect('service-redis', 6379); 
$redis->auth('XXXX-REDIS-DUMMY-PASSWORD-XXXX');
$redis->set("demoEntry", "Redis Demo Entry");

echo '✓ - redis <br>';

phpinfo();