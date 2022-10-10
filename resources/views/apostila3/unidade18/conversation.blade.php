@extends('layouts.template')
@section('titulo','Unit 18 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade18" data-etapa="conversation">
			<h3 class="barlow">UNIT 18</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 18/02_CONVERSATION/CONVERSATION_18.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p><b>Jake :</b> Hello everybody. How’s it going? Are you guys ok?</p>
                <p><b>John :</b> Kind of tired today teacher. I had to work late yesterday to meet a project a deadline.</p>
                <p>
                    <b>Jake :</b> I know what you mean my friend. Lots of times I had to work late to finish my
                    projects. It’s tiring but when you see that everything is well done, we think we are
                    super heroes.
                </p>
                <p>
                    <b>John :</b> I could manage meeting the deadline, but I feel like a zombie today. I should
                    have solved some problems when they popped up in front of me. I thought it would
                    be an easy task but I was completely wrong. I took three days to solve them. But I’m
                    ok now, don’t worry.
                </p>
                <p><b>Jake :</b> Ok John. Guys, did you have time to research about what an Avatar is?</p>
                <p><b>Akira :</b> Yeah teacher. Many of the things we talked about so far, can contribute to the creation of our Avatar.</p>
                <p><b>Jake :</b> For sure Akira. Who else can share some idea or insight?</p>
                <p>
                    <b>Laura :</b> Me teacher. I saw some videos of a digital influencer and she speaks about
                    Make Up and some fashion stuff . The funny thing is that she’s 55 years old and
                    she addresses just older ladies who want some Make Up tricks to use daily. She
                    mentioned in a video that when she started her channel, she created an avatar of her
                    ideal follower. This helped her to keep track of what was really meaningful for her
                    audience.
                </p>
                <p>
                    <b>Jake :</b> Great, she may have followed all the steps we have talked so far. Without all
                    this information about her public, she could have made many mistakes and then, ruin
                    her connection with her public.
                </p>
                <p>
                    <b>Students :</b> So, the more tools you use to learn about your audience, the better your
                    chances to create meaningful content for them, is gonna be.
                </p>
                <p>
                    <b>Jake :</b> Exactly. Before starting anythingon the Web that involves a connection with
                    people, be it a commercial or just an influential relationship, we need to do our
                    homework. Studying about our potential followers. Well guys, that’s it for today. I see
                    you in the next class ok.
                </p>
                <p><b>Students :</b> Ok teacher, See you.</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit18/conversation.jpg') }}" alt="celebro">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
