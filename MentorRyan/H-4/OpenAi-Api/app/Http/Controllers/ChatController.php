<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        try {

            $username = env('API_USERNAME');
            $password = env('API_PASSWORD');
            $apiUrl = env('API_URL');
            $client       = new \GuzzleHttp\Client();
            $base64Credentials = base64_encode("$username:$password");
            $postData = [
                'prompt' => $request->prompt
            ];
            $validator = Validator::make($request->all(), [
                'prompt' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }
            $response = $client->post($apiUrl, [
                'form_params' => $postData,
                'headers' => [
                    'Authorization' => 'Token  dcaf6e45da9158f3fb9533bb6d06da3c351863d1'                ],
            ]); 
            $responseBody = $response->getBody();
            $jsonData = json_decode($responseBody, true);
            $keykuValue = $jsonData['prompt'] ?? null;
            return $responseBody;
        } catch (\Throwable $th) {
            return response()->json([
                'data' => 'error',
                'message' => 'Terjadi kesalahan: ' . $th->getMessage(),
                'success' => false,
                'status' => 400,
            ], 400);
        }
    }
    public function chat2(Request $request){
        try {
            // Baca isi file JSON
            $jsonContent = file_get_contents(base_path('public/dataku2.json'));
            $data = json_decode($jsonContent, true);

            // Periksa apakah JSON berhasil di-decode
            if ($data === null) {
                throw new \Exception("Gagal mendekode JSON.");
            }

            // Lakukan pemrosesan untuk menemukan respons yang sesuai
            $userMessage = $request->prompt; // Ambil pesan dari permintaan

            // Lakukan pemrosesan untuk menemukan respons yang sesuai berdasarkan pesan dari pengguna
            $response = strtolower($this->findResponse($data['chat'], $userMessage));
            // var_dump($userMessage);
            // var_dump($response);

            if ($response) {
                return response()->json([
                    'data' => 'success',
                    'prompt' => $response,
                    'success' => true,
                    'status' => 200,
                ], 200);
            } else {
                return response()->json([
                    'data' => 'success',
                    'prompt' => 'Tidak ada respons yang sesuai.',
                    'success' => true,
                    'status' => 200,
                ], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'data' => 'error',
                'prompt' => 'Terjadi kesalahan: ' . $th->getMessage(),
                'success' => false,
                'status' => 400,
            ], 400);
        }
    }

    private function findResponse($chat, $userMessage) {
        foreach ($chat as $index => $message) {
            foreach ($message['pertanyaan'] as $key => $msg) {
                // var_dump($key);
                if ($msg['sender'] === 'user' && stripos(trim($userMessage), trim($msg['message'])) !== false) {
                    $nextIndex = $key + 1;
                    if ($nextIndex < count($message['pertanyaan']) && $message['pertanyaan'][$nextIndex]['sender'] === 'bot') {
                        return trim($message['pertanyaan'][$nextIndex]['message']);
                    }
                }
            }
        }
        return null;
    }

    public function list(){
        try {
            // Baca isi file JSON
            $jsonContent = file_get_contents(base_path('public/dataku2.json'));
            $data = json_decode($jsonContent, true);

            // Periksa apakah JSON berhasil di-decode
            if ($data === null) {
                throw new \Exception("Gagal mendekode JSON.");
            }
            foreach ($data['chat'] as $index => $message) {
                $datanya[]=$message['pertanyaan'][0]['message'];
                foreach ($message['pertanyaan'] as $key => $msg) {
                }
            }
            $response=$datanya;
            if ($response) {
                return response()->json([
                    'data' => 'success',
                    'message' => $response,
                    'success' => true,
                    'status' => 200,
                ], 200);
            } else {
                return response()->json([
                    'data' => 'success',
                    'message' => 'Tidak ada respons yang sesuai.',
                    'success' => true,
                    'status' => 200,
                ], 200);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'data' => 'error',
                'message' => 'Terjadi kesalahan: ' . $th->getMessage(),
                'success' => false,
                'status' => 400,
            ], 400);
        }
    }
}


            // $response = Http::withHeaders([
            //     'Authorization' => "Basic $base64Credentials"
            // ])->post('http://103.250.10.233:8000/api/openai/', [$postData]);
            // return $response;
