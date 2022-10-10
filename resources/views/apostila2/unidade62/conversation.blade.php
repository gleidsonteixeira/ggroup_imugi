@extends('layouts.template')
@section('titulo','Unit 62 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade62" data-etapa="conversation">
			<h3 class="barlow">UNIT 62</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 62/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hello guys. How are you?
			</p>
			<p>
				<b>Students :</b> Great teacher, and you?
			</p>
			<p>
				<b>Gleen :</b> Anxious to see you project. This is the best moment for me. I wait for the end of the
				course to see everything students are able to do after all the time we spend together.
			</p>
			<p>
				<b>Akira :</b> So teacher, let’s start. We payed attention to every single detail you mentioned along
				the classes. We edited the video in a way that makes the person to connect to the story.
				John: Yeah teacher. We loved the final version. It’ took us some time to finish but it’s awesome to come to an end and see what we have done by ourselves.
			</p>
			<p>
				<b>John :</b> Yeah teacher. We loved the final version. It’ took us some time to finish but it’s awesome to come to an end and see what we have done by ourselves.
			</p>
			<p>
				<b>Laura :</b> Teacher, now I understand why good professional are well paid in this market. Because it’s really hard work. We need to master a lot of concepts and use all of them if we
				want to have a good result. It’s not only the technical knowledge that is important, the overall knowledge is essential in good production.
			</p>
			<p>
				<b>Gleen :</b> Great guys. (to be continued).
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit62/conversation.jpg') }}" alt="aula computação">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection