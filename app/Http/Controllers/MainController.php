<?php

namespace App\Http\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Mockery\Exception;
use Validator;

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

    public function send_contact_message(Request $request)
    {
        try
        {
            $data = $request->all();

            $validator = Validator::make($data, [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            if ($validator->fails()) {
                \Log::error('Validation rules failed: ' . json_encode($validator->failed()));
                throw new Exception('Validation rules failed!');
            }

            // TODO: Send email

            return JsonResponse::create([
                'success' => true,
            ]);
        }
        catch (Exception $e)
        {
            \Log::info($e->getTraceAsString());
            \Log::error($e->getMessage());

            return JsonResponse::create([
                'success' => false,
                'failure_reason' => $e->getMessage(),
            ], 500);
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