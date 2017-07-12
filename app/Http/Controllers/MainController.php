<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function landing() {
        return redirect('/page/home');
    }

    public function page($page_slug) {
        switch ($page_slug)
        {
            case 'home':
                return view(
                    'landing',
                    [
                        'page_name' => env('APP_NAME') . ' - Home',
                        'menu_link' => 'home',
                    ]
                );
                break;
            case 'about_me':
                return view(
                    'pages.about_me',
                    [
                        'page_name' => env('APP_NAME') . ' - About Me',
                        'menu_link' => 'about_me',
                    ]
                );
            case 'contact_me':
                return view(
                    'pages.contact_me',
                    [
                        'page_name' => env('APP_NAME') . ' - Contact Me',
                        'menu_link' => 'contact_me',
                    ]
                );
            default:
                return redirect('/');
        }
    }

    public function about_me() {
        return view(
            'about_me',
            [
                'page_name' => env('APP_NAME') . ' - About Me',
                'menu_link' => 'about_me',
            ]
        );
    }
}