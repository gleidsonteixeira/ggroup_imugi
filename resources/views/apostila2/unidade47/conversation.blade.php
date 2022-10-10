@extends('layouts.template')
@section('titulo','Unit 47 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade47" data-etapa="conversation">
			<h3 class="barlow">UNIT 47</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 47/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>John:</b> I also like the idea Akira. I only think we gotta be careful with the story because
				we have only from two to three minutes to tell the story. We can neither be too superficial nor too complex.
				I believe that in a first moment, a linear story would be more appropriate. </p>
			<p><b>Akira:</b> You are right John. I forgot to consider the time. What do You think Laura?</p>
			<p><b>Laura:</b> You guys are completely right. Now that we have the characters and we know
				about them, it’s time to start thinking about what Gleen has mentioned. I feel comfortable with the idea of a linear story and of having a common problem for them to solve.
				I believe it would be neither very simple nor very demanding for us. I’m sure we could
				do a great job. 
				</p>
			<br>
			<p>
				<b>Akira and john:</b> Great Laura. So, let’s do this way. A linear story and a
				common problem ok.
			</p>
			<p>(to be continued)</p>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit47/conversation.png') }}" alt="aula">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection