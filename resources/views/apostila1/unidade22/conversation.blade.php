@extends('layouts.template')
@section('titulo','Unit 22 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade22" data-etapa="conversation">
				<h3 class="barlow">UNIT 22 - SARAH’S STUDENTS</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit22/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Mariana :</b> Hey guys, i’m Mariana Freitas. I’m from Brazil. I didn’t think I would be in this class because I thought this would be very difficult, but i’m here and I will do my best to learn.</p>
					<p><b>Rafael :</b> What’s up? My name is Rafael, but just call me rafa, please. I’m a student and i’m taking this course because i’m going to work for an advertising company and I think this would be interesting for an eventual promotion.</p>
					<p><b>Marcelo :</b>  Hello. I’m Marcelo. I’m 19 years old and i’m a college student in the field of gastronomy. I know it is not what you expect from a photoshop student, but my hobby is drawing so, I guess it’s interesting for me.</p>
					<p><b>Kylie :</b> Hi! My name’s Kylie and i’m a 26-year-old photographer from Australia. I love drawing too! That’s why i’m here.</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit22/ilust_22.jpg') }}" alt="Marina, Rafael, Marcelo and Kylie" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo22.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
