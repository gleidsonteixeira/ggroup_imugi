@extends('layouts.template')
@section('titulo','Unit 11 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade11" data-etapa="conversation">
			<h3 class="barlow">UNIT 11</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 11/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px"><b>Gleen :</b> Hello my dear friends. How’s it going? Did you like Mr. Smith’s presentation? In my opinion, it was very good.
				For sure it’s gonna help us in our class and in our next jobs. By the way, what are your plans after you finish the jobs you are currently doing?</p>
			<p><b>Laura :</b> Well, as I said before, I’m about to finish the video for the institution I mentioned. Now, we are on the final touch phase before presenting
				for the client. I have three possible next jobs. I’m still in doubt about which one to accept. I think I will take the job of an institutional video for an NGO that helps orphan children.</p>
			<p><b>Gleen :</b> Great Laura. And you guys ? Any idea of your next jobs?</p>
			<p><b>Akira :</b> Actually teacher, before getting back to work I believe I’ll take a course on Java. I’m interested in learning more about it. It’s a programming language I don’t have much
				experience with.</p>
			<p><b>John :</b> Well , I also have two job offers to choose. One about fashion and another about Movie special effects and games. Based on Mr. Smith’s presentation I think I’ll accept this last one.</p>
			<p><b>Glenn :</b> Cool John. You will have the opportunity to learn more about movies, animes and etc. Ok guys. That’s it for today. See you in our next class.</p>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit11/conversation.jpg') }}" alt="aula cores">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection