<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function landing() {


        return view(
            'landing',
            [
                'page_name' => 'Tyler O\'Gara\'s Site'
            ]
        );
    }
}