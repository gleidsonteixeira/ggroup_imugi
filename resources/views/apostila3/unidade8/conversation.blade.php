@extends('layouts.template')
@section('titulo','Unit 08 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade8" data-etapa="conversation">
			<h3 class="barlow">UNIT 8</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 08/02_CONVERSATION/CONVERSATION_08.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
				<p style="margin-top:16px">
					<b>John : </b>Jake, this simple idea is so powerful that it can change people’s lives. Today
					people are much more used to it . People are used to posting good, useful and stupid
					things as well.
				</p>
				<p>
					<b>Laura : </b>The good thing, and in my opinion, the most important thing is the fact that
					I can choose what I want to see. I don’t have to simply accept what the traditional
					media wants me to see.
				</p>
				<p>
					<b>Jake : </b>Very good point Laura. If you have good things to deliver to your audience, you
					don’t depend on anybody to tell you what, and how to do. You decide about it, shoot
					it, upload it and that’s it.
				</p>
				<p>
					<b>Akira : </b>Guys, Just for you to have an idea, a lot of things that learned about visual
					effects, video making and many other things I learned on Youtube. You can learn
					whatever you want. From ancient history to how to grow a bonsai at home.
				</p>
				<p>
					<b>Laura : </b>Yeah, me too. At this moment, I’m studying about the psychological power of
					the colors. There are many videos and courses about it on Youtube.
				</p>
				<p>
					<b>Jake : </b>Great comments guys. Well, that’s it for today. What would you talk about in
					your channel. Think of how you would like to impact the world with your videos ok.
					See you in the next class.
				</p>
				<p><b>Students : </b>Great. Let’s start thinking about the millions.</p>
				<p><b>Jake : </b>Oh my Gosh.</p>
				<p><b>Akira : </b>Just kidding teacher.</p>
				<p><b>Jake : </b>Ok guys. I see you in the next class ok. Bye.</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit8/conversation.jpg') }}" alt="netflix">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
