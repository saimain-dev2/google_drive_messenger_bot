<?php

namespace App\Http\Controllers;

use App\Drive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DriveController extends Controller
{

    public function index()
    {
    }

    public function create($messenger_id, $gmail)
    {

        Drive::create([
            'messenger_user_id' => $messenger_id,
            'gmail' => $gmail,
        ]);


        $response = Http::withHeaders([
            'Cookie' => '__cfduid=d1808c11782fc14886392d1a7094c7bb91590322835',
        ])->post('https://gd.zxd.workers.dev/drive', [
            'teamDriveName' => 'Free Drive Messenger Bot (Unlimited)',
            'teamDriveThemeId' => 'random',
            'emailAddress' => $gmail,
        ]);


        return $response;
    }
}
