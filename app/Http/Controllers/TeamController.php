<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class TeamController extends Controller{
    
    public function index(){
        return view('web/team');
    }

    public function register(Request $request){
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
                        'email' => 'required|email',
                        'name' => 'required',
                        'resume' => 'required',
                    ]);
                    $email = $request->email;
                    $content = array(
                        'title' => 'DATOS DE SOLICITUD',
                        'content' => array(
                            'Vacante' => $request->team_title, 
                            'Nombre y Apellido' => $request->name, 
                            'Correo Electronico' => $request->email,
                            'Perfil Profesional' => $request->resume
                        )
                    );
                    
                    Mail::send('layouts.email', $content, function ($message) use ($email, $request) {
                        $message->from($email, 'Talento Humano Omegasoft');
                        $message->subject('Postulaciones - Sitio Web');
                        $message->to('talento.humano@omegasoftve.com')->cc($email);

                        $message->attach($request->file('cv')->getRealPath(), [
                            'as' => $request->file('cv')->getClientOriginalName(), 
                            'mime' => $request->file('cv')->getMimeType()
                         ]);
                    });
                    flash()->overlay('Su postulación ha sido procesada, te estaremos contactando.', 'Postulaciones')->success();
                }else{
                    flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Postulaciones')->error();
                }
            }else{
                flash()->overlay('Ha Ocurrido algo por favor Vuelva a intentar', 'Postulaciones')->error();
            }
        }
        return back();
    }
}