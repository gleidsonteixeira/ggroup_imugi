@extends('layouts.template')
@section('titulo','Unit 06 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade6" data-etapa="conversation">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 06/02_CONVERSATION/CONVERSATION_06.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top:16px"><b>Jake : </b>So guys, just to close this first chat, could you tell me what are your takes on the topic.</p>
			<p>
				<b>Laura : </b>Teacher, This is what I think. First, we need to understand everything that
				involves having a channel. From the possibility of being famous and rich to the fact
				that haters will simply pop up no matter what you say. Second, It’s important to have
				a clear vision of what you want to achieve.
			</p>
			<p><b>Akira : </b>Great Laura. Can I add something?</p>
			<p><b>Laura : </b>Of course.</p>
			<p>
				<b>Akira : </b>After gathering all these information, it’s important to dive into the purpose
				of having the blog, the channel and whatever you want to have. We need to bear
				in mind that we are gonna talk to people and we can entertain them but also
				to contribute to happiness or sadness. Encouragement or frustration. It’s really
				important to be responsible with that.
			</p>
			<p>
				<b>John : </b>Guys, I think that if we want to do things right, we have to follow our hearts and
				talk about things we know that can contribute to other people. We are not supposed
				to do things just thinking about the money we might make. Being authentic and
				showing that is the key for touching people’s lives properly.
			</p>
			<p>
				<b>Jake : </b>Very nice points guys. That’s it. Now that you have a general overview about
				the concepts underlying the idea of building your presence on the net, we can start
				working on something more practical. In the next classes we’ll think of the Youtube
				evolution and how we can learn from all this ok. That’s it for today. See you in the
				next class ok.
			</p>
			<p><b>Students : </b>Ok teacher, Take care. </p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit6/conversation.png') }}" alt="lousa">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
