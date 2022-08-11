<?php
namespace App\TG;

use GuzzleHttp\Client;

class TelegramBot
{
    protected $token = "5142115351:AAG6KMkuZ2IA14nf0SZyiZpDKlUdbAns8pE";

    protected $updateId;
    private const MINUTES=2;
    private array $infoMessage;

    protected function query($method, $params = [])
    {
        $url = "https://api.telegram.org/bot";
        $url .= $this->token;
        $url .= "/" . $method;

        if (!empty($params)) {
            $url .= "?" . http_build_query($params);
        }

        $client = new Client([
            'base_uri' => $url
        ]);
        $result = $client->request('GET');

        return json_decode($result->getBody());
    }

    public function getUpdates()
    {
        $response = $this->query('getUpdates', [
            'offset' => $this->updateId + 1
        ]);

        if (!empty($response->result)) {
            $this->updateId = $response->result[count($response->result) - 1]->update_id;
        }
        return $response->result;
    }

    public function sendNotification(array $infoMessage){
        return $this->query('sendMessage', [
            'text' => $infoMessage['message'],
            'chat_id' => $infoMessage['chat_id']
        ]);
    }

    public function sendUrl(array $infoMessage){
        $urlUser="tg://user?id=".$infoMessage['chat_id2'];
        return $this->query('sendMessage', [
            'text' => 'Session '.$infoMessage['movie'].' created <a href="'.$urlUser.'"> Your apponent</a>',
            'chat_id' => $infoMessage['chat_id'],
            'parse_mode' => 'html'
        ]);
    }
}