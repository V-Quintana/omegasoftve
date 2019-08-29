<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class DemoController extends Controller{

    public function index(){
        return view('web/demo');
    }

    public function guiada(){
        return view('web/demo_guiada');
    }
    
    public function demoPost(Request $request){
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
                        'name' => 'required',
                        'email' => 'required|email',
                        'company' => 'required',
                        'message' => 'required'
                    ]);
                    $name = $request->name;
                    $email = $request->email;
                    $content = array(
                        'title' => 'DATOS DE SOLICITUD',
                        'content' => array(
                            'Nombre y Apellido' => $request->name, 
                            'Correo Electronico' => $request->email,
                            'Empresa' => $request->company,
                            'Mensaje' => $request->message, 
                        )
                    );
                      
                    Mail::send('layouts.email', $content, function ($message) use ($email, $name) {
                        $message->from($email, 'Demostraciones Omegasoft');
                        $message->subject('Solicitud de Demostración Guiada');
                        $message->to('demo.guiada@omegasoftve.com')->cc($email);
                    });
                    flash()->overlay('Su solicitud ha sido procesada, nuestros expertos se estarán contactando con ustedes.', 'Demostración Guiada')->success();
                }else{
                    flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Demostración Guiada')->error();
                }
            }else{
                flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Demostración Guiada')->error();
            }
        }
        return back();
    }

}