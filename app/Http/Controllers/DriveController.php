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

    public function create($email)
    {
        $response = Http::withHeaders([
            'Cookie' => '__cfduid=d1808c11782fc14886392d1a7094c7bb91590322835',
        ])->post('https://gd.zxd.workers.dev/drive', [
            'teamDriveName' => 'Taylor',
            'teamDriveThemeId' => 'random',
            'emailAddress' => $email,
        ]);
        return $response;
    }
}
