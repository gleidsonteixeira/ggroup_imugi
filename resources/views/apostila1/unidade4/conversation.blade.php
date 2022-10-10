@extends('layouts.template')
@section('titulo','Unit 4 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade4" data-etapa="conversation">
				<h3 class="barlow">UNIT 04 - NICE TO MEET YOU, KATE!</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit4/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Professor Sophia :</b> Hello class! I have news for you. Today, we have a new student.</p>
					<p><b>Professor Sophia :</b> Class, this is Kate Kawamura. She is not from here. She is from Japan! Kate doesn’t speak English very well, but she understands if you speak slowly.</p>
					<p><b>Kate :</b> Hello everyone. It’s very nice to meet you all! I am a wildlife photographer and I love to travel. This class is important to me because I want to make my pictures more beautiful!</p>
					<p><b>Carlos Silva :</b> Welcome to the class, Kate! My name is Carlos and I am a student. I am not a professional like you, but I love photography too. It’s really nice to meet you.</p>
					<p><b>Kate : </b>  Thank you very much Carlos!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit4/pagina-1.png') }}" alt="Garotos festejando" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo4.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
