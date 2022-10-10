@extends('layouts.template')
@section('titulo','Unit 25 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade25" data-etapa="conversation">
			<h3 class="barlow">UNIT 25</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 25/02_CONVERSATION/CONVERSATION_25.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p>
                    <b>Jake :</b> Well, let’s go on. John tell us about your idea. What have you learned and
                    implemented so far in your channel project.
                </p>
                <p>
                    <b>John :</b> As you guys remember, I have a channel but I was posting random videos as
                    well. After we talked and I understood the techniques and concepts, It was much
                    easier to rethink the channel and prepare a better content delivery plan. I decided
                    to invest some money on some nice equipment to produce better videos as well. My
                    girlfriend is helping me with that. Two weeks ago she called the sales person and got
                    some information about the equipment. The sales man informed us that a complete
                    catalog with all the equipment would arrive in the following week . So, since last week
                    we have analyzed the equipment we want to buy.
                </p>
                <p>
                    <b>Jake :</b> Great John. Just have in mind that you don’t need very expensive stuff to start.
                    A good camera, or good cell phone can help you with the videos.
                </p>
                <p>
                    <b>Laura :</b> Very nice John. I’m anxious to see our final channel with the elements we
                    have discussed so far.
                </p>
                <p>
                    <b>Jake :</b> Cool. The result is gonna be awesome. Well, that’s it for today ok. I’ll see you in
                    the next class.
                </p>
                <p><b>Students :</b> See you Jake.</p>
            </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit25/conversation.jpg') }}" alt="estudando">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
