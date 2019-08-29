<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ITSMController extends Controller{

    public function index(){
        return view('web/itsm_solution');
    }

    public function quotationSend(Request $request){
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
                        'phone' => 'required',
                        'email' => 'required|email',
                        'company' => 'required',
                        'country' => 'required',
                        'modalidad' => 'required',
                        'message' => 'required'
                    ]);
                    $message = [
                        'title' => 'Solicitud de Cotización',
                        'content' => 
                        'Name: '. $request->name.'<br>'.
                        'Telefono: '. $request->phone.'<br>'.
                        'Email: '. $request->email.'<br>'.
                        'Compañia: '. $request->company.'<br>'.
                        'Pais: '. $request->country.'<br>'.
                        'Modalidad: '. $request->modalidad.'<br>'.
                        'Mensaje: '. $request->message.'<br>'                        
                    ];
                    $email = $request->email;
                    
                    Mail::send('layouts.email', $message, function ($message) use ($email, $request) {
                        $message->from($email, 'Solicitud de Cotización');
                        $message->subject('Solicitud de Cotización');
                        $message->to('ventas@omegasoftve.com')->cc($email);
                    });
                    flash()->overlay('Gracias, por ponerse en contacto con nosotros', 'Notificación')->success();
                }else{
                    flash()->overlay('Vuelva a intentar', 'Notificación')->error();
                }
            }else{
                flash()->overlay('Vuelva a intentar', 'Notificación')->error();
            }
        }
        return back();
    }

}