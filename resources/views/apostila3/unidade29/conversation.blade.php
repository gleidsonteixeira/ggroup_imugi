@extends('layouts.template')
@section('titulo','Unit 29 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade29" data-etapa="conversation">
			<h3 class="barlow">UNIT 29</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 29/02_CONVERSATION/CONVERSATION_29.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p>
                    <b>Jake :</b> Hello guys. Welcome back. In the next 4 classes, we’ll talk about some
                    important issues that are being debated in the world. We start today talking about
                    the 4Th industrial revolution and the skills needed to cope with it properly. Just a
                    reminder, the First Industrial Revolution used water and steam power to mechanize
                    production. The Second used electric power to create mass production. The Third
                    used electronics and information technology to automate production. Now a Fourth
                    Industrial Revolution is building on the Third, the digital revolution that has been
                    occurring since the middle of the last century. It is characterized by a fusion of
                    technologies that is blurring the lines between the physical, digital, and biological
                    spheres.
                </p>
                <p><b>John :</b> Wow, that’s awesome.</p>
                <p><b>Jake :</b> Yeah, lets read a text about it and then we can debate the topic ok.</p>
                <p><b>Students :</b> ok teacher.</p>
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit29/conversation.jpg') }}" alt="decoração">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
