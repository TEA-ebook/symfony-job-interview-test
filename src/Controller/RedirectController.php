<?php
namespace App\Controller;

use Doctrine\DBAL\Driver\Connection;

class RedirectController
{
    public function index(Connection $connection)
    {
        $token = $_GET['token'];

        $uri = $connection->fetchAll("SELECT * FROM uri where token = '$token'")[0];

        $connection->query("UPDATE uri SET times_used = times_used + 1 where token = '$token'");

        header('Location: ' . $uri['url']);
        exit;
    }
}
