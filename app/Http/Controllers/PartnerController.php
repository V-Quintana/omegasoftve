<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PartnerController extends Controller{
    
    public function index(){
        return view('web/partners');
    }
    
    public function program(){
        return view('web/program_partner');
    }

    public function portal(){
        return view('web/portal_partners', array('hide_footer' => true));
    }
    

    public function programPost(Request $request){
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
                    'cabecera'=> "Content-type: text/html;  charset=utf-8", 
    			    )
			    );

                $context  = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $array = json_decode($result, true);
                if($array['success']){
                    $this->validate($request, [
                        'empresa' => 'required',
                        'person_contact' => 'required',
                        'email' => 'required|email',
                        'phone' => 'required',
                        'cel' => 'required',
                        'country' => 'required',
                        'ciudad' => 'required',
                        'web_page' => 'required',
                        'message' => 'required'
                    ]);
                    /*$message = [
                        'title' => 'Registro Partner Omegasoftve',
                        'content' => 
                        'Empresa: '. $request->empresa.'<br>'.
                        'Persona de contacto: '. $request->person_contact.'<br>'.
                        'Email: '. $request->email.'<br>'.
                        'Telefono: '. $request->phone.'<br>'.
                        'Celular: '. $request->cel.'<br>'.
                        'Pais: '. $request->country.'<br>'.
                        'Ciudad: '. $request->ciudad.'<br>'.
                        'Pagina web: '. $request->web_page.'<br>'.
                        'Mensaje: '. $request->message.'<br>'                        
                    ];*/
                    $email = $request->email;
                    $content = array(
                        'title' => 'DATOS DE SOLICITUD',
                        'content' => array(
                            'Empresa' => $request->empresa,
                            'Telefono' => $request->phone,
                            'Sitio Web' => $request->web_page,
                            'Pais' => $request->country,
                            'Ciudad' => $request->ciudad,
                            ' ' => ' ',
                            'Persona Contacto' => $request->person_contact, 
                            'Telefono Movil' => $request->cel, 
                            'Correo Electronico' => $request->email,
                            ' ' => ' ',
                            'Mensaje' => $request->message,
                        )
                    );
                    
                    Mail::send('layouts.email', $content, function ($message) use ($email, $request) {
                        $message->from($email, 'Partner Omegasoft');
                        $message->subject('Registro del Programa de Partner');
                        $message->to('registro.partner@omegasoftve.com')->cc($email);
                    });
                    flash()->overlay('Su registro ha sido procesado, lo estaremos contactando.', 'Programa de Partner Omegasoft')->success();
                }else{
                    flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Programa de Partner Omegasoft')->error();
                }
            }else{
                flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Programa de Partner Omegasoft')->error();
            }
        }
        return back();
    }
}