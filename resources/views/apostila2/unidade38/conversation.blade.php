@extends('layouts.template')
@section('titulo','Unit 38 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade38" data-etapa="conversation">
			<h3 class="barlow">UNIT 38</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 38/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Glenn :</b> Guys , great conclusions. Let me add some comments that may be important for
				you. Usually, in the beginning of any project, we tend to have very good ideas and this is
				awesome. The pitfall is that we have to be very conscious of our skills at that moment.
				We plan to do many things and sometimes we are not ready for that. So, think of every
				single step and reflect upon your skills. Do you consider that what you are planning to
				do is feasible? Do you have the appropriate tools? Can you find the tools in case you
				don’t have them or don’t know how to use them? Have in mind that a professional is
				very critical during the planning moment. When you don’t act intentionally this way,
				you may fail to accomplish your ultimate goal.
			</p>
			<p>
				<b>Students :</b> Wow, great teacher. We’re going to be very detail oriented in this project.
			</p>
			<p>
				<b>Gleen :</b> Ok guys. So far, so good. I’ll see you in the next class ok.
			</p>

			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit38/conversation.jpg') }}" alt="estudos">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection