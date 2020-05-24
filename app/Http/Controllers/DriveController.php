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

    public function create($firstname, $lastname, $profile_url, $messenger_id, $gmail, $gender)
    {

        $username = $firstname + ' ' + $lastname;


        Drive::create([
            'name' => $username,
            'profile_picture_url' => $profile_url,
            'messenger_user_id' => $messenger_id,
            'gmail' => $gmail,
            'gender' => $gender
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
