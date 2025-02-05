<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class StartController extends Controller
{
    public function start(Request $request)
    {
        $data = $request->all(); // Получаем все данные от Telegram

        Log::channel('single')->info($data);

        $token = env('TELEGRAM_BOT_TOKEN');
        $chat_id = $data['message']['chat']['id']; // Получаем chat_id

        $text = "Нажмите, чтобы открыть Mini App: \n";
        $text .= "[Открыть Mini App](https://t.me/mini_apps_25_bot?startapp=1)";

        $url = "https://api.telegram.org/bot{$token}/sendMessage";
        Http::post($url, [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'Markdown',
        ]);

        return response()->json(['message' => 'Ссылка отправлена']);
    }
}
