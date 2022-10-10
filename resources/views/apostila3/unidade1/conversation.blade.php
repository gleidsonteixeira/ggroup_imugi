@extends('layouts.template')
@section('titulo','Unit 1 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade1" data-etapa="conversation">
				<h3 class="barlow">UNIT 1</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila3/LESSON 01/02_CONVERSATION/CONVERSATION_01.mp3') }}" type="audio/mp3">
				</audio>
				<div class="clear"></div>
				<p style="margin-top:16px">
					<b>Jake Paul :</b> Hello everybody. Welcome to your new level in the course. We’re gonna
					start book 3 and everything related to social media and internet. More specifically
					we’ll be talking about Youtube, videos, how to engage your audience and etc. It’s
					simply awesome to have the opportunity to share some nice information with you
					guys. I know you’ve been studying together since the second part of the course,
					right? So, let me introduce myself.
				</p>
				<p><b>Students :</b> Yes teacher.</p>
				<p>
					<b>Jake :</b> Well, I’ve been in the market of internet, social media and this stuff about
					creating your brand on the Web since I graduated in Marketing. It’s been 7 years now
					involved in this area. Because of my experience, I decided to teach and then, Gleen
					gave the news that the school was in need of a new teacher. So, here I am. I met
					Gleen some time ago in a Workshop. We became friends and then, in the last year I
					told him about my plan of becoming a teacher. So he said that it would be a very nice
					experience for me and because of that I decided to go on board.
					I gott a confess that I felt kind of intimidated in the beginning but I asked him many
					questions about being a teacher and he calmed me down.
					I started teaching last year and I have a lot of fun in class.
					Well, I spoke too much yeah?
				</p>
				<p><b>Students :</b> Oh teacher. We’re eager to start shooting our videos.</p>
				<p><b>Akira :</b> The experience of preparing our video in book 2 was great.</p>
				<p><b>Laura :</b> Yeah! We learned a lot.</p>
				<p><b>John :</b> I also loved the experience. When can we start teacher?</p>
				<p>
					<b>Jake :</b> Wow! Gleen told me about how interested you guys were. I can see that it’s was
					not a joke. We start in the next Class ok. Get ready guys. There’s a lot of nice things
					for us to do together ok. That’s it for today. I see you in the next class.
				</p>

				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/masteroflanguage/unit1/conversation.png') }}" alt="tirando duvida">
					</figure>
				</div>
			</div>
		</div>
	</main>

	<script>
        activeMenu();
    </script>

@endsection
