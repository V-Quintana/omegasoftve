<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Newsletter;

class NewsletterController extends Controller{

    public function newsletter(){
        return view('web/newsletter');
    }

    public function newsletterPost(Request $request){
        if ($request->isMethod('post')) {
            if($request->input('g-recaptcha-response')){         
                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $dataForPost = array(
                    'secret'=>'6LcjmmgUAAAAAETnnlZuC4HbCzPouXEJwPMqvMzV',
                    'response'=>$request->input('g-recaptcha-response'),
                    'remoteip'=>''
                );
                $options = array(
        		'http' => array(
        			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        			'method'  => 'POST',
        			'content' => http_build_query($dataForPost),
    			    )
			    );

                $context  = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $array = json_decode($result, true);
                if($array['success']){
                    $this->validate($request, [
                        'email' => 'required|email'
                    ]);
                    $content = array(
                        'title' => 'DATOS DE SUSCRIPCION',
                        'content' => array(
                            'Correo Electronico' => $request->email,
                        )
                    );
                    $email = $request->email;
                    
                    Mail::send('layouts.email', $content, function ($message) use ($email) {
                        $message->from($email, 'Suscripciones Omegasoft');
                        $message->subject('Suscripción Boletines');
                        $message->to('newsletter@omegasoftve.com')->cc($email);
                    });
                    flash()->overlay('Gracias por suscribirte, te mantendremos informados de nuestras novedades.', 'Suscripción')->success();
                }else{
                    flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Suscripción')->error();
                }
            }else{
                flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Suscripción')->error();
            }
        }
        return back();
    }

    public function index(Request $request){
         $newsletters = \App\Newsletter::orderBy('created_at','desc')->paginate(3);

        return view('web.newsletter', array('newsletters'=>$newsletters));
    }

    public function details($title){
        $title = str_replace('-',' ',$title);
        $newsletter = Newsletter::where('title', $title)->first();

        // $title = str_replace('-',' ',$title); 
        // $newsletters = Newsletter::where('title', 'like', '%'.$title.'%')->first();
        return view('web.newslatterDetail',[
            'newsletter'=>$newsletter,
        ]);
    }
}