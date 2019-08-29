<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller{

    public function contact()
    {
        return view('web/contact');
    }

    public function contactPost(Request $request)
    {
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
                        'username' => 'required',
                        'email' => 'required|email',
                        'message' => 'required'
                    ]);
                    $name = $request->username;
                    $email = $request->email;
                    
                    $content = array(
                        'title' => 'DATOS DE CONTACTO',
                        'content' => array(
                            'Nombre y Apellido' => $request->username, 
                            'Correo Electronico' => $request->email,
                            'Mensaje' => $request->message
                        )
                    );
                    
                    Mail::send('layouts.email', $content, function ($message) use ($email, $name) {
                        $message->from($email, 'Omegasoft');
                        $message->subject('Contáctanos');
                        $message->to('contacto@omegasoftve.com')->cc($email);
                    });
                    flash()->overlay('Gracias, por ponerse en contacto con nosotros.', 'Contáctanos')->success();
                }else{
                    flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Contáctanos')->error();
                }
            }else{
                flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Contáctanos')->error();
            }
        }
        return back();
    }

}