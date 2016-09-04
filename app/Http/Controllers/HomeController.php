<?php

namespace App\Http\Controllers;
use Mail;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function blog()
    {
        return view('pages/blog');
    }

    public function work()
    {
        return view('pages/work');
    }

    public function texts()
    {
        return view('pages/texts');
    }

    public function videos()
    {
        return view('pages/videos');
    }

    public function musics()
    {
        return view('pages/musics');
    }

    public function pictures()
    {
        return view('pages/pictures');
    }

    public function readMore()
    {
        return view('pages/readMore');
    }

    public function sendLetter(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'question' => 'required|string',
            'message' => 'required|string'
        ]);

        $sendValue = array();
        $sendValue['name'] = $request->input('name');
        $sendValue['email'] = $request->input('email');
        $sendValue['question'] = $request->input('question');
        $sendValue['messages'] = $request->input('message');

        Mail::send('/pages/mailForMe', $sendValue, function($message) use ($sendValue)
        {
         $message->to('cj27111992@gmail.com', 'Джон Смит')->from($sendValue['email'])->subject('Привет!');

        });

        $data['succes'] = "Спасибо за ваш вопрос. Он будет изучен и отвечен на вашу почту.";

        return view ('pages/contact', $data);
    }
}
