@extends('layouts.template')
@section('titulo','Unit 61 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade61" data-etapa="conversation">
			<h3 class="barlow">UNIT 61</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 61/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> I worked for a very nice company before starting to work as a teacher. I worked
				in the creation department and I was not very aware of what happened in the rest of
				the company. It took me some time to understand the whole process of the company,
				and because of that, I missed some opportunities to grow in the company. There was an
				open manager position, I wanted it but I was not prepared for it. My systemic view was
				very superficial and then my friend got the position. If I had realized before how important was to be in touch with the other areas, I would have done differently.
			</p>
			<p>
				<b>Akira :</b> Really teacher? Thanks for sharing. I’ll pay attention to this advice, I promise you
				I’ll be the best profession ever in this requisite.
			</p>
			<p>
				<b>Gleen :</b> Your’re welcome. Well guys, we’re about to finish our course. In two more weeks
				you’ll present your final project. Next class, I’ll be ready to help you with the final touches ok. Have a great weekend and I’ll see you in the next class.
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit61/conversation.png') }}" alt="equipe">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection