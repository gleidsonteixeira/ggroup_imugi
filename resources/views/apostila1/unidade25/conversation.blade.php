@extends('layouts.template')
@section('titulo','Unit 25 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade25" data-etapa="conversation">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit25/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Marcelo :</b> Teacher, I was drawing my girlfriend on photoshop and I noticed that the lines were not very precise.</p>
					<p><b>Sarah :</b> Right. Can you tell me what tool you were using?</p>
					<p><b>Marcelo :</b> I was using the brush tool.</p>
					<p><b>Sarah :</b> Ok. That’s what I figured. Well, that’s the problem with brush tool for this kind of job. You need a tool with lines that have more precision.</p>
					<p><b>Sarah :</b> Does anyone have a suggestion for Marcelo?</p>
					<p><b>Kylie :</b> Teacher, I think he can use the pen tool!</p>
					<p><b>Sarah :</b> That’s right, Kylie! Pen tool is the best choice for this. It is great for making perfect lines. You can even create shapes with it.</p>
					<p><b>Marcelo :</b> I appreciate the help!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit25/ilust_25.jpg') }}" alt="Marcelo and Sarah" class="img-e">
				</figure>
				<div class="video-pratica">
					<video  poster="{{ asset('assets/portal/images/play-video.jpg') }}" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo25.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
