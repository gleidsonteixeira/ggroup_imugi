@extends('layouts.template')
@section('titulo','Unit 23 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade23" data-etapa="conversation">
			<h3 class="barlow">UNIT 23</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 23/02_CONVERSATION/CONVERSATION_23.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p><b>Jake :</b> And what about you guys?</p>
                <p>
                    <b>Akira :</b> Teacher, I researched some sites about War strategies and Game leadership
                and you know what? There’s not much about the topic. I also posted a series of
                questions about games, time spent in front of a computer and behavior, then many
                parents asked me questions and suggestions on how to educate and take advantage
                of the games to teach nice principles to their kids.
                </p>
                <p><b>Jake :</b> Wow, fantastic. What do you have in mind? How are you gonna address these topics?</p>
                <p>
                    <b>Akira :</b> Well, I have a friend who is a Psychologist and loves to play L.O.L (League of
                    Legends) I invited him to prepare a material based on Psychological studies to help
                    these parents to deal better with their kids.
                </p>
                <p>
                    <b>Jake :</b> Hey, I’m curious. I have 2 kids who are addicted to their tablets and I don’t
                    know how to deal with that. That’s a cool subject.
                </p>
                <p>
                    <b>John :</b> My younger sister is also addicted to games and is driving my parents crazy. What could I do?
                </p>
                <p>
                    <b>Akira :</b> Well guys, there are some practical hints to deal with that. I’ll tell you some.
                    For example: My friend told me to not prohibit kids from playing without having
                    a very nice conversation with them. Parents tend to be very strict and this is not
                    good. He also mentioned to not demonize games. Games may be very good if used
                    properly. We are gonna produce the videos together. He asked me to create videos
                    connecting behavior with leadership in games. I think It’s gonna be nice.
                </p>
                <p><b>Jake :</b> Wow. That’s an interesting topic. Ok guys, That’s it for today. I’ll see you in the next class.</p>
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit23/conversation.jpg') }}" alt="games">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
