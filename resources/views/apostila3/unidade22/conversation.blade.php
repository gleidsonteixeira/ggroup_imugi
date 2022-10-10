@extends('layouts.template')
@section('titulo','Unit 22 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade22" data-etapa="conversation">
			<h3 class="barlow">UNIT 22</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 22/02_CONVERSATION/CONVERSATION_22.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p><b>Jake :</b> Ok guys. Let’s go on talking about our channels. It’s ti me to get back to the objective of the course.</p>
                <p>
                    <b>John :</b> Yes teacher, but I loved the topics of the last classes. I can, for sure, improve my
                    content with the sites you guys mentioned.
                </p>
                <p>
                    <b>Jake :</b> Great. This was the idea. To provide you with more references to improve your
                    content. Well, before we talked about the educational platf orms, Laura told us about
                    the lady who had a Make up tricks channel and she told us that when she was about
                    to start her channel, she prepared an avatar to guide the content delivery. Do you
                    remember that?
                </p>
                <p><b>Laura :</b> Yep teacher.</p>
                <p>
                    <b>Jake :</b> So, you guys have been working on the ideas of your channels and I’d like to
                    know how things are.
                </p>
                <p>
                    <b>Laura :</b> Well, as I told you, I’m about to finish the first month plan. I have already
                    researched some topics based on a question that I posted on Instagram as we said
                    before. I received some answers and I’m working on that now. My first idea was to
                    talk about colors for blogs and sites only, and one of my followers told me that she
                    is a fashion designer and that she would like to know some details about visagism.
                    Because of this answer I researched about the topic and I’ll have one or two videos
                    about it in my content delivery plan.
                </p>
                <p>
                    <b>Jake :</b> Great Laura. That’s the game. Getting to know what may be relevant for your audience.
                    (to be continued)
                </p>
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit22/conversation.jpg') }}" alt="senhora selfie">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
