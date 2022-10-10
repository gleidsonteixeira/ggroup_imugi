@extends('layouts.template')
@section('titulo','Unit 2 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade2" data-etapa="conversation">
				<h3 class="barlow">UNIT 2</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 02/02_CONVERSATION/CONVERSATION_02.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<p style="margin-top:16px"><b>Jake :</b> Hello guys. How are you? Are you ready to start?</p>
				<p><b>Students :</b> For sure teacher. We couldn’t be more excited to start.</p>
				<p>
					<b>Jake :</b> So, Let’s get down to work. I have some comments to make before we start ok.
					We’re gonna talk about many details related to our main topic. The more you study
					about them, the better you´re gonna be. My first hint is : Learn about the theory in
					the class, but practice it trying to use what we are gonna learn together. The good
					news is that it’s really fun to build a Youtube channel from scratch. The bad news is
					that there’s only one way to do it right. It’s being prepared to make mistakes an learn
					from the mistakes ok.
				</p>
				<p><b>Students :</b> Great.</p>
				<p>
					<b>Akira :</b> Teacher, what’s your opinion about Youtube? Did it really change the
					traditional media.
				</p>
				<p>
					<b>Jake :</b> For sure Akira. After Youtube, everybody is a potential reporter, a potential
					teacher, a potential whatever you wanna be. Here is some great news. You can really
					impact the society much faster today. Many outstanding guys are spreading their
					voices through Youtube. That’s great, isn’t it.
				</p>
				<p>
					<b>Laura :</b> I have learned a lot from Youtube videos teacher. It’s really awesome.
					Unfortunately, not everybody understands the power of it.
				</p>
				<p>
					<b>John :</b> Yeah, some people use it for wrong purposes but I’m sure that by the end of
					the course, We’ll have learned how to contribute by sharing good info.
				</p>
				<p><b>Jake :</b> That’s it guys. That’s it for today. I see you tomorrow ok.</p>

				<figure class="metade esquerda">
					<img src="{{ asset('assets/img/masteroflanguage/unit2/conversation1.png') }}" alt="quimica">
				</figure>
				<figure class="metade direita">
					<img src="{{ asset('assets/img/masteroflanguage/unit2/conversation2.png') }}" alt="quimica">
				</figure>
			</div>
		</div>
	</main>

	<script>
        activeMenu();
    </script>

@endsection
