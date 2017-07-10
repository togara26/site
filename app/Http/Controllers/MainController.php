<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function landing() {

        $html = '<div>test</div>';

        return view(
            'landing',
            [
                'page_name' => 'Tyler O\'Gara\'s Site',
                'html' => $html,
            ]
        );
    }
}