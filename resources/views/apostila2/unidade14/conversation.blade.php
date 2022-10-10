@extends('layouts.template')
@section('titulo','Unit 14 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade14" data-etapa="conversation">
			<h3 class="barlow">UNIT 14</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 14/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px"><b>Gleen: </b>Good morning guys. What a beautiful day today!!! How are you?</p>
			<p><b>Students: </b>We’re great teacher. What about you? And your ankle, your knee, are they
				better?</p>
			<p><b>Gleen: </b>Thanks for asking guys. I’m ok but the physiotherapy was very hard this week.
				The exercises were very difficult but the physiotherapist was there all the time to take
				care of me. I’m gonna be ok in some weeks. Ok, lets start the class? Laura, if I’m not
				mistaken, this last week you presented the final video to your client. Am I right?</p>
			<p><b>Laura: </b>Yes teacher. I’m glad that you remembered. It was fantastic. In the beginning, my
				team and I were a bit nervous but in the end of the presentation, after seeing smiles all
				over the room I was more comfortable. The client and his partners were very receptive
				and the feedback about the video was simply astonishing.</p>
			<p><b>Gleen: </b>Wow. I want to see the final work ok. I’m sure everybody is curious about it.</p>
			<p><b>Laura: </b>Oh! that’s ok. I’ll bring it in the next class. Thanks for supporting me guys. You are
				awesome.</p>
			<p><b>Gleen and students: </b>Gongrats Laura.</p>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit14/conversation.jpg') }}" alt="aula computação">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection