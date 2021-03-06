<?php

namespace Trikoder\JsonApiBundle\Tests\Resources\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/non-api")
 */
class NonApiController extends Controller
{
    /**
     * @Route("/test")
     */
    public function testAction()
    {
        $response = new Response();
        $response->setContent('Test');

        return $response;
    }

    /**
     * @Route("/exception")
     */
    public function exceptionAction()
    {
        throw new Exception('Test');
    }
}
