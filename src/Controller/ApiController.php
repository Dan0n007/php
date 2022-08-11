<?php

namespace App\Controller;

use App\TG\TelegramBot;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PostController
 * @package App\Controller
 * @Route("/api", name="api")
 */
class ApiController extends AbstractController
{

    /**
     * @Route("/notification/message/confirmation", methods={"POST"})
     * @throws \Exception
     */
    public function sendCreation(Request $request, TelegramBot $bot): JsonResponse
    {
        $bot->sendUrl([
            'chat_id'=>$request->query->get('userSecond'),
            'chat_id2'=>$request->query->get('userFirst'),
            'movie'=>$request->query->get('movie')
        ]);
        $bot->sendUrl([
            'chat_id'=>$request->query->get('userFirst'),
            'chat_id2'=>$request->query->get('userSecond'),
            'movie'=>$request->query->get('movie')
        ]);
        return new JsonResponse(
            [
                'status' => 200
            ], 200);
    }

    /**
     * @Route("/notification/message/cancellation", methods={"POST"})
     * @throws \Exception
     */
    public function sendRemoving(Request $request, TelegramBot $bot): JsonResponse
    {
        $bot->sendNotification([
            'message'=>('Session deleted: '.$request->query->get('movie')),
            'chat_id'=>$request->query->get('user')
        ]);
        return new JsonResponse(
            [
                'status' => 200
            ], 200);
    }
}