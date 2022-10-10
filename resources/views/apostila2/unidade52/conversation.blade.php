@extends('layouts.template')
@section('titulo','Unit 52 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade52" data-etapa="conversation">
			<h3 class="barlow">UNIT 52</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 52/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> I believe that since Matrix was released in in 1999, the special effects industry
				hasn’t been the same. We had nice special effects before this time but Matrix was a
				milestone in this market. I have followed the evolution of this market for almost 20
				years. That’s why I love to read and study the productions before going to the movies.
				It’s important for my career and it’s fun as well.
			</p>
			<p>
				<b>Akira :</b> I ‘m not that old teacher. I was born in 1996. I was only 4 years old by the time
				matrix was released. But I like to read stuff about movies in general. I have followed a
				blog about special effects for a couple of years and it’s nice to see what these guys are
				able to do.
			</p>
			<p>
				<b>Gleen :</b> Cool. We always get surprised. Ok guys, that’s it for today. I see you in the next
				class ok. Have a nice weekend guys.
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit52/conversation.png') }}" alt="Matrix">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection