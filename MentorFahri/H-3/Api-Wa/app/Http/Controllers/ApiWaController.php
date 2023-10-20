<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiWaController extends Controller
{
    public function sendWhatsAppMessage(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'xQJ+_nGV4bw1Q1EXG2W8',
            'Accept' => 'application/json',
        ])->post('https://api.fonnte.com/send', [
            'target' => '082165787290',
            'message' => 'Testing 1 Coy',]);
            

        return $response->body();
    }

    public function sendWhatsAppLokasi(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'xQJ+_nGV4bw1Q1EXG2W8',
            'Accept' => 'application/json',
        ])->post('https://api.fonnte.com/send', [
            'target' => '082165787290',
            'location' => '-6.3284461, 106.9737014',]);

        return $response->body();
    }

    public function sendWhatsAppButton(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'xQJ+_nGV4bw1Q1EXG2W8',
            'Accept' => 'application/json',
        ])->post('https://api.fonnte.com/send', [
            'target' => '082165787290',
            'templateJSON' => '{"message":"fonnte template message","footer":"fonnte footer message","buttons":[{"message":"fonnte","url":"https://fonnte.com"},{"message":"call me","tel":"6282227097005"},{"id":"mybutton1","message":"hello fonnte"}]}',]);
            

        return $response->body();
    }

    public function sendWhatsAppMessageWithPostman(Request $request)
    {
        $target = $request->input('target');
        $message = $request->input('message');
        $buttonJSON = $request->input('buttonJSON');
        // $url = $request->input('url');

        $response = Http::withHeaders([
            'Authorization' => 'xQJ+_nGV4bw1Q1EXG2W8',
            'Accept' => 'application/json',
        ])->post('https://api.fonnte.com/send', [
            'target' => $target,
            'message' => $message,
            // 'url' => $url,
            'buttonJSON' => $buttonJSON,
        ]);

        return $response->body();
    }

    public function sendWhatsAppPoll(Request $request)
    {
        $target = $request->input('target');
        $message = $request->input('message');
        $choices = $request->input('choices');
        $select = $request->input('select');
        $pollname = $request->input('pollname');


        $response = Http::withHeaders([
            'Authorization' => 'xQJ+_nGV4bw1Q1EXG2W8',
            'Accept' => 'application/json',
        ])->post('https://api.fonnte.com/send', [
            'target' => $target,
            'message' => $message,
            'choices' => $choices,
            'select' => $select,
            'pollname' => $pollname,
        ]);

        return $response->body();
    }
}
