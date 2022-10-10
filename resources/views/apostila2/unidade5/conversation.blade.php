@extends('layouts.template')
@section('titulo','Unit 5 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade5" data-etapa="conversation">
			<h3 class="barlow">UNIT 05</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 5/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Hellooooooo guys. Welcome back to our class. Guys, I loved the tips you guys
				shared in our last class. Today I want to talk about organization and planning. Do you
				think it’s important for a game developer, a graphic designer or a movie maker to plan
				his/her job? </p>
			<p><b>John:</b> What do you wanna mean with “plan your job” Gleen?</p>
			<p><b>Gleen:</b> The logical sequence you need to follow to execute one job. For example:
				As a graphic designer probably you follow a sequence, some steps to develop what you
				need to do. Do you believe this sequence is important?
			</p>
			<p><b>John:</b> Oh ! I got it. It’s extremely important. With an appropriate plan, I can optimize my
				actions to get better results.</p>
			<p><b>Gleen:</b> Can you tell us what the sequence you follow is?</p>
			<p><b>John:</b> Well, first the editor sends me an idea of the magazine articles. Then, I start
				searching for images, download them and save them in a specific file. After that, we
				have a meeting to discuss what message the editor wants to communicate with the
				images and we debate the color project for the magazine. After we study the colors, we
				select the most appropriate ones for the magazine and I start working on the images.
				In the end, we have another meeting with two or three suggestions of images for each
				article. We choose one or two images for each article, clip them and send everything to the Layout artist,
				the designer. Basically, this is the sequence I follow</p>
			<p><b>Gleen:</b> Great John. It’s very clear for me the sequence you follow. Akira and Laura, can
				you share the sequence you follow in the next class. Unfortunately, we don’t have time
				to do so today. Guys, see you in the next class.
			</p>

			<figure style="margin-top:16px">
				<img src="{{ asset('assets/img/dominating/unit5/conversation.jpg') }}" alt="mario">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection