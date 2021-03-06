@extends('layouts.web.base')
@section('title', 'Blog')
@section('content')
<section class="page-title">
		<div class="image-layer" 
			 style="opacity:10.0;">
			<img src="{{ URL::to('/') }}/images/background/Blog.jpeg" alt="BLOG_EMPRESARIAL">
		</div>
		<div class="auto-container">
		</div>
	</section>
    
    <!--News Section-->
    <section class="news-section-three" style="padding-bottom: 0px;padding-top: 60px;">
    	<div class="auto-container">
            
            <div class="row clearfix">
				<div class="content-side col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<div>
						<?php
						if($blogs->count()==0){
							echo '<h3>No se encontraron resultados.</h3>';
						}
						?>
						@foreach($blogs as $item)
							<!--News Block-->
							<div class="news-block-one" style = "border: 1px solid #cecbcb;">
								<div class="inner-box">
									<figure class="image-box"><a href="{{ route('blog-name', str_slug($item->title)) }}">
										<img 
										style="width:870px;height: 372px;"
										src="{{ URL::to('/').'/blogs/'.$item->id.'/'.$item->imagen }}" alt=""></a></figure>
									<h3 style = "padding-right: 20px; padding-left: 20px;" ><a href="{{ route('blog-name', str_slug($item->title)) }}"><?php echo Str::limit($item->title, 55, '...') ?></a></h3>
									
									
									<div class="text" style = "padding-right: 20px; padding-left: 20px;">
										<?php echo Str::limit($item->content, 170, '...') ?>
										<div style = "padding-top: 20px; padding-bottom: 25px;">
											<button > 
												<a  class = "btn-leer-mas" href="{{ route('blog-name', str_slug($item->title)) }}">Leer mas</a>
											</button>
											<div style = "padding-top: 10px;" class="post-info">Publicado: {{$item->created_at->format('d-m-Y')}}</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<div class="sidebar-side col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<aside class="sidebar">
							
							<!-- Search -->
							<div class="sidebar-widget search-box">
								<form method="get" action="">
									<div class="form-group">
										<input type="search" name="search" value="{{$search}}" 
										placeholder="Buscar" required>
										<button type="submit">
											<span class="icon fa fa-search"></span>
										</button>
									</div>
								</form>
							</div>

							<div class="sidebar-widget popular-category" style = "margin-bottom: 14px;">
								<div style = "background: #00325d; height: 45px;">
									<div class="sidebar-title2">
										<h3 style ="color: #fff; text-align: center;padding-top: 10px;">Suscríbete</h3>
									</div>
								</div>

									{{ Form::open(array('route' => 'newsletter.send', 'id' => 'form-newsletter')) }}
										<div style = "padding-top: 10px;">
													<div class="input-group mb-3">
														<input type="email" class="form-control" 
															name="email"
															required
															placeholder="Email" 
															aria-label="Recipient's username" 
															aria-describedby="button-addon2">
															<div
																class="recaptcha-hide" 
																id="g-recaptcha-footer"
																data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
																data-callback="send_newsletter_footer"
																data-size="invisible">
															</div>
														<div class="input-group-append">
															<button
															style="background:#2387e4; color: white; font-size: 15px;" 
															class="btn btn-outline-secondary btn-send" 
															type="submit">Enviar</button>
														</div>
													</div>
												</div>
												<div style=""> 
													<label style="font-size: 9px;">
														<input type="checkbox" name="acepta" required checked autocomplete="off"> Acepto Politicas de tratamiento de datos.
													</label>
												</div>
												@include('flash::message')
												{{ Form::close() }}   
							</div>

							
							<!-- Popular Category -->
							<div class="sidebar-widget popular-category">
								<div>
								
									<div style = "background: #00325d; height: 45px;">
										<div class="sidebar-title2">
											<h3 style ="color: #fff; text-align: center;padding-top: 10px;">Categorías</h3>
										</div>
									</div>

									<div>
										<ul class="popular-category-list letra"  style="text-decoration:none;">
											@foreach($categories as $item)
											<li style = "">
												<a
												style="
												<?php 
												if($catg){
													if($catg->id==$item->id){
														echo 'color: #007aff;';
													} 
												}
												?>"
												class="clearfix" style="text-decoration:none;" 
											href="{{ route('blog-category', str_slug($item->name))}}">{{$item->name}}</a></li>
											@endforeach
										</ul>
									</div>

								</div>
							</div>
							
							<!-- Latest Posts -->
							<div class="sidebar-widget latest-posts" style = "">
							
								<div style = "background: #00325d; height: 45px;">
									<div class="sidebar-title2">
										<h3 style ="color: #fff; text-align: center;padding-top: 10px; text-transform: unset; ">Lo Último</h3>
									</div>
								</div>
									<div>
										<ul>
											<li>
												@foreach($lastsBlogs as $item)
													<article class="post popular-category-list2">

														<div>
															<figure class="post-thumb" style = "padding-top: 8px;left: 9px;">
																<a href="{{ route('blog-name', str_slug($item->title))}}">
																	<img
																	
																	src="{{ URL::to('/').'/blogs/'.$item->id.'/'.$item->imagen }}" alt="">
																</a>
															</figure>
															<h4 style = "left: 5px;" ><a href="{{ route('blog-name', str_slug($item->title))}}">{{$item->title}}</a></h4>
															<div style = "padding-left: 20px;" class="post-info">Publicado {{ $item->created_at->format('d-m-Y')}}</div>
														</div>

													</article>
													<hr style="margin-top: 1rem; margin-bottom: 1px solid #00000040; border-top: 1px solid # !important;" />
												@endforeach
											</li>
										</ul>
									</div>
								</div>
							
						</aside>
					</div><!--End Sidebar Side-->
				</div>
					
					<!--Sidebar Side-->
			
				
			</div>
            <br><br>
            <!-- Styled Pagination -->
			{{ $blogs->links('pagination.default') }}
            
        </div>
    </section>

@endsection
@section('javascript')
<script src="{{ URL::to('/') }}/js/team.js"></script>
<script>
    function callbackTeam(data){
        $('#form_team').submit()
    }
    $('#myTeam').on('show.bs.modal', function(event) {
        var title = $(event.relatedTarget).data('title')
        $('#input-team-title').val(title)
        $('#title-team').html(title)
	})
	$(document).ready(function() {
            $('#flash-overlay-modal').modal();
        });
</script>
@endsection