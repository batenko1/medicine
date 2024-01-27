<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __invoke(Request $request)
    {

        $application = Application::query()->create($request->except('_token'));

        $html = "Имя: $application->name. Телефон: $application->phone. Почта: $application->email. Сообщение $application->message. Товар: $application->product";

        \Mail::send([], [], function ($message) use ($html) {
            $message->to('info@sitorapharm.uz')
                ->subject('Заявка')
                ->from('info@sitorapharm.uz')
                ->html($html);
        });

        return redirect()->back()->with('message', 'Success');

    }
}
