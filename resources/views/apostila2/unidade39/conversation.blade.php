@extends('layouts.template')
@section('titulo','Unit 39 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade39" data-etapa="conversation">
			<h3 class="barlow">UNIT 39</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 39/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Glenn :</b> Hello guys. How are things? How was the weekend?
			</p>
			<p>
				<b>John :</b> It was great teacher. I rested a lot. I also watched some more videos to help with
				our project. I watched videos of a guy who gives ideas on how to create games, videos
				and etc. It was very interesting.
			</p>
			<p>
				<b>Laura :</b> Ops!!! Then I think we watched the same youtube channel John. With a guy that
				has a strange voice. He uses some simple animations in his videos to explain things. It’s very simple and didactic. I liked a lot.
			</p>
			<p>
				<b>Akira :</b> Guys, I just slept this weekend. Sorry. I was extremely tired. I had to help my
				parents to move. The guy with whom they agreed to come to help them, simply didn’t
				show up and they called me. I was not expecting that.
			</p>
			<p>
				<b>Laura and John :</b> That’s too bad. Out of the blue something happens and your
				weekend is gone. (to be continued)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit39/conversation.png') }}" alt="estudos">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection