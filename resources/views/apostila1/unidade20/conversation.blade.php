@extends('layouts.template')
@section('titulo','Unit 20 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade20" data-etapa="conversation">
				<h3 class="barlow">UNIT 20 - Akira’S REVIEW</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit20/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Akira :</b> Hello everybody. We’re coming to an end in our lessons. Today, we have some time to review the photoshop topics we talked about in our last classes. Please, ask me your questions.</p>
					<p><b>Marciel :</b> Professor, I study and review the lessons basically every day. But, I didn’t understand what shape tool can be used for, exactly. To be honest, I didn’t have enough time to review that part.</p>
					<p><b>Akira :</b> No problem, Marciel. It’s quite simple actually. Let’s imagine a situation. You’re creating a website for your company. You’re going to need to develop the layout of the webpage. Probably, the most important tool is the shape tool. </p>
					<p><b>Akira :</b> It’s used to create the header, menu bar, text boxes, etc. In addition to that, you can use layers to focus on editing one part at a time. Don’t forget to costumize the text by using adobe kuler to use pre-defined colors to add to the background of the site, texts and more.</p>
					<p><b>Marciel :</b> Great, professor! Thank you very much.</p>
					<p><b>Akira :</b> My pleasure!</p>												
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit20/ilust_20.jpg') }}" alt="Akira and Maciel" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo20.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
	</script>
	


@endsection
