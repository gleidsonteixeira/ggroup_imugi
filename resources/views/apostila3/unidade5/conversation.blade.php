@extends('layouts.template')
@section('titulo','Unit 05 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade5" data-etapa="conversation">
			<h3 class="barlow">UNIT 5</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 05/02_CONVERSATION/CONVERSATION_05.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top:16px"><b>Jake :</b> Hey you guys, what’s up.</p>
			<p><b>Students :</b> Not much teacher. Just thinking about the millions we’ll make with our channels.</p>
			<p><b>Jake :</b> Wow! We haven’t started yet and you guys are thinking about the money you’re gonna get?</p>
			<p><b>Students :</b> Business teacher! Business!</p>
			<p><b>Akira :</b> Just kidding teacher.</p>
			<p><b>Jake :</b> I know guys. But let’s be sincere. It’s very appealing, isn’t it?</p>
			<p><b>Laura :</b> Yes. For sure. Many people want to be famous and make money.</p>
			<p><b>John :</b> Yeah, But on the other hand, most of them are not prepared to deal with this level of exposition.</p>
			<p><b>Jake :</b> What do you wanna mean with that John?</p>
			<p>
				<b>John :</b> Teacher, it’s necessary a lot of preparation to have , for example, your private life
				exposed to the media. There’s a lot of haters waiting for you to make a mistake to criticize you.
			</p>
			<p><b>Laura :</b> Ops, sorry! Could you repeat that? I didn’t get what you said John.</p>
			<p>
				<b>John :</b> No problem. I said that the wanna be famous, are not prepared to deal with the
				side effects of being famous. The haters are just waiting to crucify them publicly.
			</p>
			<p>
				<b>Jake :</b> Very good point John. We now many sad stories of guys who made mistakes and
				were smashed. That’s why we need to think if we really want to go into this new World. (to be continued)
			</p>

			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit5/conversation.png') }}" alt="design">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
