@extends('layouts.template')
@section('titulo','Unit 24 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade24" data-etapa="conversation">
			<h3 class="barlow">UNIT 24</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 24/02_CONVERSATION/CONVERSATION_24.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p><b>Jake :</b> Hey you guys, What’s up?</p>
                <p><b>Students :</b> Hey you teacher. Everything is ok.</p>
                <p>
                    <b>Jake :</b> Let’s start them. Akira and Laura told us about their ideas. It was very nice to
                    see how you guys are planning and executing on your plans. Let me share something
                    with you. I was talking to Gleen yesterday and he asked me if you guys were ok. He
                    also asked me what you guys were working on and I told him that you were preparing
                    the content for your channels and he got really excited.
                </p>
                <p><b>Laura :</b> Hey, very nice. I miss our classes about video editing and etc. It was a nice time together as well.</p>
                <p><b>Jake :</b> Hey, I’m getting jealous.</p>
                <p><b>Laura :</b> Don’t worry Jake, we love you too.</p>
                <p>
                    <b>Jake :</b> Just kidding. I’m telling you that because Gleen asked me if you want to
                    participate of a workshop with him. He’s gonna talk about video trends for Youtube
                    and Instagram. I think it’s gonna be awesome for you guys.
                </p>
                <p><b>Students :</b> Wow. That would be fantastic.</p>
                <p>
                    <b>Jake :</b> Great then, I’ll send him your names and check details like date and time to
                    inform you ok. (to be continued)
                </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit24/conversation.jpg') }}" alt="apresentação">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
