@extends('layouts.template')
@section('titulo','Unit 20 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade20" data-etapa="conversation">
			<h3 class="barlow">UNIT 20</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 20/02_CONVERSATION/CONVERSATION_20.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p>
                    <b>Akira :</b> Guys, did you know that there are many Educational platforms where you can
                    find excellent courses. I bought some nice courses from Udemy. They are investing
                    lots of money to get more students. Many different courses will be offered very soon.
                </p>
                <p>
                    <b>Jake :</b> This is a nice way to get good information. We talked about Youtube as a nice
                    tool for that but there are also platforms like Udemy, Edx, Coursera, Veduca and
                    many others where you can get nice material. Usually, the courses are produced by
                    people who want to monetize their knowledge or by institutions which want to share
                    academic knowledge with the society.
                </p>
                <p><b>Akira :</b> Yeah, I like them a lot.
                <p>
                    <b>John :</b> I didn’t know much about all these educational Platforms. I knew something
                    about Khan Academy but nothing about these other sites.
                </p>
                <p>
                    <b>Laura :</b> Hey, Khan Academy is simply awesome. Did you know that the creation of
                    Khan academy platform was also funded by Bill Gates.
                </p>
                <p><b>Jake :</b> Really. I didn’t know that.</p>
                <p>
                    <b>Laura :</b> Yeah. It’s crazy, isn’t it. Bill Gates and Melinda, his wife, have a foundation
                    and they investin many projects around the world. Salman Khan, the creator of the
                    platform was invited to be one of the platforms to be funded by Gates Foundation.
                    When the foundation got to know about the number of people eager to consume
                    Khan’s Math and Physics classes, Bill Gates asked Sal khan if he could create an
                    educational platform that could be used worldwide. Sal Khan accepted the challenge
                    and the project became a reality. Many students around the world are reached by
                    this idea. The classes are now being translated into many different languages, so
                    more people from non-speaking English countries can access the classes as well.

                </p>
                <p><b>Students & Jake :</b> Great Laura. Nice contribution.
                <p>
                    <b>Jake :</b> Isn’t it fantastic to know that there are many nice things happening in the world
                    because of technology?
                </p>
                <p><b>Students :</b> For sure teacher.
                <p><b>Jake :</b> Ok That’s it for today guys. I’ll see you in the next class ok.
                <p><b>Students :</b> See you teacher. Bye.
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit20/conversation.jpg') }}" alt="cursos">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
