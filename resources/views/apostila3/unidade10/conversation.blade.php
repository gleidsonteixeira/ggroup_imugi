@extends('layouts.template')
@section('titulo','Unit 10 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade10" data-etapa="conversation">
			<h3 class="barlow">UNIT 10</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 10/02_CONVERSATION/CONVERSATION_10.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top:16px">
				<b>Jake : </b>Hello my dear friends. How’s it going? What about the weekend? Did you get to
				rest after everything we talked so far?
			</p>
			<p><b>Students : </b>Kind of teacher. I’m still impressed with the power of social media in general.</p>
			<p><b>Jake : </b>Yeah my friends. There’s a lot of power, money and science behind all this.</p>
			<p><b>Students : </b>Science? What do you wanna mean with “there’s a lot of science behind all this” teacher?</p>
			<p><b>Jake : </b>Have you ever heard of Behavioral Psychology and Neuromarketig?</p>
			<p>
				<b>Akira : </b>No teacher. What is that? What does Psychology have to do with increasing the
				number of followers on Youtube or Facebook?
			</p>
			<p>
				<b>Jake : </b>Well guys, I’m gonna be very superficial about it because this is not the
				objective of our course, but there are lots of studies related to social media
				community perception. For example, the effect of some psychological triggers, the
				effect of texts and videos on the net and many other details that have huge influence
				upon a Youtube channel, for example.
			</p>
			<p><b>Laura : </b>Wow! Are you gonna teach us something about these details teacher?</p>
			<p>
				<b>Jake : </b>No Laura, but I can give you some references and you can research about them.
				And guess what? Where do you believe you can study about these things?
			</p>
			<p><b>John : </b>Let me guess teacher. Hummmmmm … On Youtube of course!</p>
			<p>
				<b>Jake : </b>That’s it my friends. As we mentioned before. Whatever you want to learn
				about, you can find on Youtube. (To be continued)
			</p>
			<div style="margin-top:36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit10/conversation.jpg') }}" alt="escrevendo lousa">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
