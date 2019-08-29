@extends('layouts.app')
@section('title', 'Admin-Blogs')

@section('content')
<section class="contact-section" style="padding: 0px;">
    	<div class="auto-container">
        	
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding-right: 90px;padding-left:90px;">
                   <div style="text-align: center">
                       <h2 style="margin-top: 50px">Newslatter</h2>
                   </div>
                   <div class="sec-title" style="float:right;padding-bottom:15px;">
                    <a href="{{ route('newsletter-create') }}">
                        <button class="btn btn-outline-success">
                               Crear Newslatter
                        </button>
                    </a>   
                   </div>
                   <div class="form-style-one quote-form">
                   <table class="table table-striped  table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%"> Id</th>
                                <th scope="col" style="width: 10%">Imagen</th>
                                <th scope="col" style="width: 10%">Titulo</th>
                                <th scope="col" style="width: 45%">Contenido</th>
                                <th scope="col" style="width: 15%"></th>
                                <th scope="col" style="width: 15%"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($newsletters as $item)
                            <tr>
                                <th scope="row">
                                    {{$item->id}}
                                </th>
                                <td>
                                    <img src="{{asset('newsletters/'.$item->id.'/'.$item->imagen)}}" width="40px" alt="">
                                </td>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{$item->content}}
                                </td>
                                <td style="text-align: center">
                                    <a href="{{ route('newsletter-update', $item->id) }}" style="color:#fff;font-size:12px;font-weight:600;text-decoration:none">
                                        <button type="button" class="btn btn-primary" style="width: 50%;">
                                            Editar
                                        </button>
                                    </a>
                                 </td>
                                 <td style="text-align: center;">
                                    <a href="{{ route('newsletter-delete', $item->id) }}" style="color:#fff;font-size:12px;font-weight:600;text-decoration:none">
                                        <button type="button" class="btn btn-danger" style="width: 50%;">
                                        Eliminar
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                   </table>
                   </div>
                </div>
            </div>
            
           <!-- <div class="form-container">

            </div>-->
        </div>
    </section>
@endsection
