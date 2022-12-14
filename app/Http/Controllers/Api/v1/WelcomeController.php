<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke():array
    {
        return [
                "success" => true,
                "message" => __('messages.welcome'),
                "data" => [
                    // "name" => app()->getName(),
                    // "name" => APP_NAME,
                    "services" => "Best Practice API Laravel",
                    "version" => "v1.0",
                    "language" => app()->getLocale(),
                    "supports" => "rached.bkhalifa@gmail.com"
                ]

        ];

    }
}
