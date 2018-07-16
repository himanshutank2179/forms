<?php
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X;
/**
 * Created by PhpStorm.
 * User: vytech
 * Date: 30/05/2018
 * Time: 3:17 PM
 */

$client = new Client(new Version1X('http://127.0.0.1:1337'));

$client->initialize();
// send message to connected clients
$client->emit('broadcast', ['type' => 'notification', 'text' => 'Hello There!']);
$client->close();

?>

<h1>lk</h1>
