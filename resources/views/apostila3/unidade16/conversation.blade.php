@extends('layouts.template')
@section('titulo','Unit 16 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade16" data-etapa="conversation">
			<h3 class="barlow">UNIT 16</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 16/02_CONVERSATION/CONVERSATION_16.mp3') }}" type="audio/mp3">
            </audio>
            <p style="margin-top: 16px">
                <p>
                    <b>Jake :</b> So guys. Welcome back to one more class. How are you doing? Are you ok?

                </p>
                <p><b>Students :</b> Yeah teacher. We’re ok.</p>
                <p><b>Jake :</b> News about the research I asked you to do in the last class?</p>
                <p>
                    <b>John :</b> Yes teacher, I have researched many sites about content production since then.
                    There are lots of suggestions on how to prepare a content program.
                </p>
                <p>
                    <b>Akira :</b> Teacher, when I started thinking about having my first Youtube channel a friend
                    of mine recommended me to visit an interesting site but I had already uploaded
                    many random videos and because of that, my result was not that good. If I had
                    known this site before I would have had a better posting plan. The name of the site
                    is www.answerthepublic.com. If you type one word for example, you will have many
                    suggestions to help you create good content.
                </p>
                <p>
                    <b>Laura :</b> Guys, do you remember I told you I was researching something about colors
                    and their effect on people’s minds. I was also researching ways to have ideas about
                    that and then I read in a blog that Pinterest may be a fantastic way to get inspired. I
                    have already started researching about the topics I want to write about. I believe that
                    by the end of this week I’ll have finished the first month posting plan.
                </p>
                <p>
                    <b>John :</b> Wow. Very nice guys. I’m really excited with all the possibilities we may have
                    after getting to know all these new concepts, sites and etc.
                </p>
                <p>
                    <b>Jake :</b> Congratulations guys. You guys have really understood how to make a difference
                    on the Web. I’m proud of you. (to be continued)
                </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit16/conversation.jpg') }}" alt="celebro">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
