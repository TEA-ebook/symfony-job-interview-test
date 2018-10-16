<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RedirectController
{
    public function index()
    {
        $token = $_GET['token'];

        return new Response(
            '<html><body>'.$token.'</body></html>'
        );
    }
}
