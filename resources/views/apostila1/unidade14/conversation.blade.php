@extends('layouts.template')
@section('titulo','Unit 14 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade14" data-etapa="conversation">
				<h3 class="barlow">UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<!-- <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit14/Conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div> -->
				<div class="espacamento">
					<p><b>Beatriz :</b> What’s up everyone! We studied a little about color tools and typography tools. Today, we are going to review some of the content we talked about.</p>
					<p><b>Beatriz :</b> First, Do You Remember A Color Tool?</p>
					<p><b>ADAM :</b>  I do! I remember two tools. One is called color picker and we use it to choose the color we like. The other is called swatches panel and it’s used to save colors you create in the color picker.</p>
					<p><b>Beatriz :</b>  Great answer, ADAM! Now, who knows about typography tools?</p>
					<p><b>Medina : </b> I know about it! We talked about type tool and layer panel. The first is for the selection of fonts and the second is to give style to fonts, texts and much more.</p> 
					<p><b>Lucy: </b> Medina, don’t forget about the style panel! It’s very important too because we need it to select the styles created in the layer panel.</p>
					<p><b>Beatriz: </b> Very good class! You are all amazing students!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit14/ilust_14.jpg') }}" alt="Beatriz, Medina e Adam" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo14.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
