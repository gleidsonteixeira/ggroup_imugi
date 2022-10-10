@extends('layouts.template')
@section('titulo','Unit 21 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade21" data-etapa="conversation">
			<h3 class="barlow">UNIT 21</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 21/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Hey you guys. What’s up? How was the weekend?</p>
			<p><b>Students:</b> Great teacher. And yours?</p>
			<p><b>Gleen:</b> It was great guys. My brother came to visit me and we had a nice time talking
				about our childhood. We used to play a lot together. And you guys,
				What did you use to do when you were younger.</p>
			<p><b>John:</b> Teacher, I used to watch Dragon balls all day long. My mother was mad with me all he time.</p>
			<p><b>Akira:</b> I got involved in the Games World because of Super Mario teacher. I used to play
				every single day. Because of that I looked for courses on how to create games.</p>
			<p><b>Laura:</b> Teacher, I was kind of nerd. I loved to study Physics and I used to watch The Big
				Bang theory. It was my favorite sitcom.</p>
			<p><b>Gleen:</b> Cool guys. Nice to now about your childhood.</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection