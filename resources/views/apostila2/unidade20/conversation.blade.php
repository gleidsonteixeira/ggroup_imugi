@extends('layouts.template')
@section('titulo','Unit 20 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade20" data-etapa="conversation">
			<h3 class="barlow">UNIT 20</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 20/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Hello guys. “I’m back to the future”!!! . Sorry people! it’s a very old movie reference for you I guess. The movie was released in 1985 and it was considered one of the
				most successful movies of that decade. I recommend you to watch it ok. Talking about
				“future”, do you have an idea about the new releases for 2018? Dc comics for example.
				This year, they released Justice League and Wonder Woman. What else do you know
				about them.?</p>
			<p><b>John: </b>Teacher, If I’m not mistaken , they’re gonna release Aquaman in December 2018,
				Wonder woman 2 in November 2019 and Shazan in April 2019.</p>
			<p><b>Akira: </b>John!!! Wow!!! How do you know all these stuff about DC releases and etc.</p>
			<p><b>John: </b>Well, I’m crazy about Super man and Batman Comic books. Next month they are
				gonna release a special box for addicted people like me. I buy both super man and Batman boxes every single year. I have the whole collection.</p>
			<p><b>Laura: </b>How come John. You didn’t say anything about your hobby. Cool.</p>
			<p><b>Gleen: </b>I’m really amazed with you John. Yeah, you are really diving in the games and
				super heroes world. Welcome my dear friend.</p>
			<h5 class="barlow"><a style="margin: 16px 0;" href="http://www.backtothefuture.com/">http://www.backtothefuture.com/</a></h5>
			<h5 class="barlow"><a style="margin: 16px 0;" href="http://www.backtothefuture.com/news-events/latest-news/Back-To-The-Future-2017-San-Diego-ComicCon#sthash.BPObH0wR.dpbs.">http://www.backtothefuture.com/news-events/latest-news/Back-To-The-Future-2017-San-Diego-ComicCon#sthash.BPObH0wR.dpbs.</a></h5>
			<figure class="umterco">
				<img src="{{ asset('assets/img/dominating/unit20/conversation1.png') }}" alt="Garotos festejando">
			</figure>
			<figure class="umterco">
				<img src="{{ asset('assets/img/dominating/unit20/conversation2.png') }}" alt="Garotos festejando">
			</figure>
			<figure class="umterco">
				<img src="{{ asset('assets/img/dominating/unit20/conversation3.png') }}" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection