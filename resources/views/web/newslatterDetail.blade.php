@extends('layouts.web.base')
@section('title', 'Newsletter')
@section('content')

    <!--News Section-->
    <section class="news-section-three" style="padding-bottom: 0px;padding-top: 60px;">
    	<div class="auto-container">
            
            <div class="row clearfix">

			<div class="content-side col-lg-2 col-md-2 col-sm-2"></div>
				<div class="content-side col-lg-8 col-md-8 col-sm-8 col-xs-12">
				

							<!--News Block-->
							<div class="news-block-one" style = "border: 1px solid #00325dd6;">
								<div class="">
									<div class="inner-box">
										<div row clearfix>
											<div class="content-side col-lg-9 col-md-9 col-sm-9 col-xs-9">
												<img src="{{ URL::to('/') }}/images/footer-logo.png" alt="LOGO_EMPRESA" title="">
											</div>
											<div class="content-side col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding-top: 20px;text-align: end;">
											<h2>Newsletter</h2>
											<div class="post-info">Publicado: {{ $newsletter->created_at->format('m-Y')}}</div>
											</div>
										</div>

										<div align="center">
											<figure >
												<img 
												style=""
												src="{{ URL::to('/').'/newsletters/'.$newsletter->id.'/'.$newsletter->imagen }}" alt="">
											</figure>	
										</div>

										<h2 style="text-align: center; padding: 15px;">{{$newsletter->title}}</h2>	
										
										<div style="
												text-align: center;
												padding-left: 60px;
												font-size: 15px;
												position: relative;
												line-height: 1.60em;
												font-weight: 500;
												font-family: 'Raleway', sans-serif;
												padding-right: 60px;
											" class="text">
												<?php echo ($newsletter->content)?>
											<hr style="border-top: 1px solid #00325dd6;"/>
											
												<h3 style="padding-bottom: 10px;">Visítanos tambíen en nuestras Redes Sociales</h3>
												<div style = "text-align: center;">
													<div class="main-footer footer-style-two2">
														<div class="footer-upper2">
															<div class="social-links" style ="display: inline-block;">
																<ul class="clearfix" style="margin-bottom: 0rem;">
																	<li><a target="_black" href="https://www.facebook.com/Omegasoftve/"><span class="fa fa-facebook-f"></span></a></li>
																	<li><a target="_black" href="https://twitter.com/Omegasoft_ca"><span class="fa fa-twitter"></span></a></li>
																	<li><a target="_black" href="https://join.skype.com/invite/rbtBS36Igg1J"><span class="fa fa-skype"></span></a></li>
																	<li><a target="_black" href="https://www.instagram.com/omegasoftve/"><span class="fa fa-instagram"></span></a></li>
																	<li><a target="_black" href="https://www.linkedin.com/company/omegasoft-c-a"><span class="fa fa-linkedin"></span></a></li>
																	<li><a target="_black" href="https://www.youtube.com/channel/UCXanLx5cEd8zIxDch2WJJTg?view_as=subscriber"><span class="fa fa-youtube"></span></a></li>
																</ul>
															</div>
														</div>
													</div>
												<div>
												<div class="copyright" style="padding-bottom: 30px;">&copy; 2019. Omegasoft C.A.  Todos los derechos reservados</div>		
										</div>
										
									</div>
								</div>
								<div class="post-info"><span style="padding-left: 15px;"><b>RIF J: </b>29943586-4</span></div>
						</div>					
				</div>
			<div class="content-side col-lg-2 col-md-2 col-sm-2"></div>
			</div>
        </div>
    </section>
    <br>
    <br>


@endsection

