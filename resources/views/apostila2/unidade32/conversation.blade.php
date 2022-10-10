@extends('layouts.template')
@section('titulo','Unit 32 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade32" data-etapa="conversation">
			<h3 class="barlow">UNIT 32</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 32/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Hey you guys. How’s everything? As I told you, in this class and in the next, we’re
				gonna have a review ok. So far, we had the chance to talk about many things. First of all
				I’d like to know what was the most important topic for you so far? Who wants to start?
			</p>
			<p>
				<b>Akira</b>: Teacher, every class I learn something different. For me, having the opportunity
				to talk with professional of other areas is very nice. It was great to share some of my
				knowledge about games and general stuff like my addiction to Kris Costas’ work. It was
				very cool.
			</p>
			<p><b>Gleen:</b> Great Akira. For sure sharing knowledge is the best way to learn as a person and
				as a professional. The more you give the more you receive. That’s the universal growth
				law. Thanks Akira.</p>
			<p>(To be continued)</p>
			<figure>
				<img src="{{ asset('assets/img/playgo/unit1/unidade1.png') }}" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection