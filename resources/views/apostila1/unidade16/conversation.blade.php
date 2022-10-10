@extends('layouts.template')
@section('titulo','Unit 16 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade16" data-etapa="conversation">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit16/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Akira :</b> Well, my dear students, now you know me. I would like to know a little about each of you too. please, tell me about yourselves.</p>
					<p><b>lara ruiz:</b> hi! I’m lara. my last name is ruiz. i’m not from here. I was born in mexico. I’m an advertising student and i’m 21 years old. I have a blog and I use it practically every day. this class is really important to me because I would like to improve my blog structure.</p>
					<p><b>Roberto Martins :</b> Hey. I’m Roberto Martins, but you can call me beto. I’m originally from Brazil and I work as a web designing intern. I need this class to explore more about photoshop.</p>
					<p><b>Angelique Chermont :</b>  Hello there! My name is Angelique Chermont. My friends call me angel. You can see by my name that I am not from here. I was born in france! Well, i’m 17 years old. I don’t work but I love to post videos on youtube of me playing video games. I have a lot of views, so I would like to create a website for it.</p>
					<p><b>Marciel Lima :</b>  Hello. I’m Marciel lima. I’m 20 years old and i’m an advertiser. My hobby is playing video games.</p>
					<p><b>Akira :</b> Great, guys! Thank you all for sharing. You are all very interesting!</p>				
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit16/ilust_16.jpg') }}" alt="New class" class=img-e>
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo16.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
	</script>
	


@endsection
