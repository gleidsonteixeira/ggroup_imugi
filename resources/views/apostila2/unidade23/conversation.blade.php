@extends('layouts.template')
@section('titulo','Unit 23 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23" data-etapa="conversation">
			<h3 class="barlow">UNIT 23</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 23/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Hello guys, How are you? Are you ready to help me with some stuff?</p>
			<p><b>Students:</b> Yes teacher, what’s the matter?</p>
			<p><b>Gleen:</b> We need to find out a way to rearrange the table and the desks in a way that a
				new computer fits in the classroom.
				Akira and John, could you help me to move the table for the other corner of the room.
				We’re gonna have more space after this change.
				Akira and John: Ok teacher, let us do that for you. </p>
			<p><b>Gleen:</b> Laura, can you help me with the computer. Can you plug it and prepare it for the class?</p>
			<p><b>Laura:</b> Ok teacher, no problem. Could you please give the email and the passwords for
				me to set up the mail box and everything. I’ll finish in kind of 30 min ok.</p>
			<p><b>Gleen:</b> Thanks for your help guys.</p>

			<figure>
				<img src="{{ asset('assets/img/dominating/unit23/conversation.jpg') }}" alt="dev">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection