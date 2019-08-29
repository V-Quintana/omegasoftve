<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class IndexController extends Controller{

    public function indexPost(Request $request){
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
                        'company' => 'required',
                        'contac' => 'required',
                        'phone' => 'required',
                        'email' => 'required|email',
                        'producto' => 'required',
                        'versión' => 'required',
                        'modalidad' => 'required',
                        'concurrentes' => 'required',
                        'nombradas' => 'required'  
                    ]);
                    $content = array(
                        'title' => 'DATOS DE SOLICITUD',
                        'content' => array(
                            'Empresa' => $request->company,
                            ' ' => ' ',
                            'Persona Contacto' => $request->contac, 
                            'Teléfono Móvil' => $request->phone, 
                            'Correo Electrónico' => $request->email,
                            ' ' => ' ',
                            'Solución' => $request->producto,
                            'Versión' => $request->versión,
                            'Versión' => $request->modalidad,
                            'Licencias Concurrentes' => $request->concurrentes,
                            'Licencias Nombradas' => $request->nombradas
                        )
                    );
                    $email = $request->email;
                    
                    Mail::send('layouts.email', $content, function ($message) use ($email, $request) {
                        $message->from($email, 'Cotizaciones Omegasoft');
                        $message->subject('Solicitud de Cotización');
                        $message->to('ventas@omegasoftve.com')->cc($email);
                    });
                    flash()->overlay('Gracias, por ponerse en contacto con nosotros', 'Cotizaciones')->success();
                }else{
                    flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Cotizaciones')->error();
                }
            }else{
                flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Cotizaciones')->error();
            }
        }
        return back();
    }

}