@extends('layouts.template')
@section('titulo','Unit 19 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade19" data-etapa="conversation">
			<h3 class="barlow">UNIT 19</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 19/02_CONVERSATION/CONVERSATION_19.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p><b>Jake :</b> Hello guys, how’s everything? Did you get to rest?</p>
                <p><b>Students :</b> Yes Jake. It was a nice weekend.</p>
                <p>
                    <b>Jake :</b> What did you do? Did you do anything interesting? I was so tired that I just
                    stayed on the sofa watching Game of Thrones. My wife prepared me cake with a
                    special recipe that was created by her grandmother. It’s a cake made of banana and
                    cinnamon. It’s is awesome. We couldn’t stop eating it.
                </p>
                <p><b>John :</b> And…. Did you bring some for us ?</p>
                <p>
                    <b>Jake :</b> Sorry guys, It was over. We ate the whole cake in two hours. I promise I’ll bring
                    some for you next time ok. Let’s start the class.
                </p>
                <p><b>Students :</b> Yes.</p>
                <p>
                    <b>Laura :</b> Teacher, I was at home just relaxing as well, and while I was on the net I saw
                    a book called “Business Model You”. This book was written by a guy who developed
                    the idea of the empathy map and many other tools to help us better understand our
                    possible followers or clients.
                </p>
                <p>
                    <b>Jake :</b> Cool. I’ve already read this book and it’s simply awesome. The Canvas model
                    was first presented to the world in this book. It’s a very a different and interesting
                    book. Many other tools were created after this first idea became famous in the
                    market. Many books and sites are being created every single day to help people
                    understand the power of social media as a commercial tool.
                </p>
                <p>
                    <b>John :</b> Yeah, I’ve noticed that many different courses related to this topic are being
                    offered on the web. Some are really good and if somebody wants to improve his/her
                    knowledge, I recommend taking courses like that.
                    (to be continued)
                </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit19/conversation.jpg') }}" alt="comentdo bolo">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
