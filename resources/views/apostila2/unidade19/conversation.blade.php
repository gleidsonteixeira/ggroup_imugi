@extends('layouts.template')
@section('titulo','Unit 19 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade19" data-etapa="conversation">
			<h3 class="barlow">UNIT 19</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 19/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Hello everybody. Good to see you again. What about your weekend?
				Was it good?</p>
			<p><b>Students: </b>It was ok teacher. And yours? Did you like the movie?</p>
			<p><b>Gleen: </b>You’re asking If I liked the movie!!! You’e kidding. It was terrific. I watched all the
				avengers movies so far. Before going to the movies I like to read as much as I can about
				the movie production to see what effects they use and etc but every movie they release, I get astonished
				with some new stuff the present. It’s always a kind of Lab for me. It’s crazy to see what these
				special effects professionals do today.</p>
			<p><b>John: </b>I had the chance to visit Marvel booth in Comic-Con. They release at least one
				new movie every year. They are working on the movie they are going to release in 2020.
				From the scratch to the release, it takes at least 3 years. But it is a fantastic Market. In
				just three weeks Ragnarok made around 700 million dollars worldwide.</p>
			<p><b>Laura: </b>Marvel, Dc Comics, Warner Bross and dreamworks among others make a huge
				money every single year. It’s one of the richest industries in the world.</p>
			<p><b>Gleen: </b>That ls it guys. That’s why we have to study a lot, because there’s plenty of
				opportunities in this market for good professionals.</p>

			<h5 class="barlow"><a style="margin: 16px 0;" href="https://www.gamedesigning.org/animation-companies/">https://www.gamedesigning.org/animation-companies/</a></h5>
			<h5 class="barlow"><a style="margin: 16px 0;" href="http://www.worldatlas.com/articles/largest-film-industries-in-the-world.html">http://www.worldatlas.com/articles/largest-film-industries-in-the-world.html</a></h5>
			<h5 class="barlow"><a style="margin: 16px 0;" href="http://deadline.com/2017/01/highest-grossing-movie-studios-2016-us-box-office-1201876405/">http://deadline.com/2017/01/highest-grossing-movie-studios-2016-us-box-office-1201876405/</a></h5>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit19/conversation.jpg') }}" alt="cinema">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection