@extends('layouts.template')
@section('titulo','Unit 15 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade15" data-etapa="conversation">
			<h3 class="barlow">UNIT 15</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 15/02_CONVERSATION/CONVERSATION_15.mp3') }}" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top:16px"><b>Students : </b>Teacher, what about the content? How can we produce a nice content for
			our audience?</p>
			<p><b>Jake : </b>Well, after you have an idea of what your audience is more into, you have to
			start researching the content. Some people just write whatever crosses their minds
			but this behavior may show you are not very focused on your audience. You audience
			can interpret it as selfishness.</p>
			<p><b>Students : </b>Wow, We’ve never heard of that.</p>
			<p><b>Akira : </b>Yeah, but it makes sense for me. If I’m only speaking about things I like, I’m not
			focused on the audience unless they like the same thing as I do.</p>
			<p><b>Laura : </b>What are the possible consequences for doing that teacher?</p>
			<p><b>Jake : </b>You might lose credibility, you might sound egocentric, you might sound boring.
			It all depends on the audience and on your level of relationship with them. In order
			to build a nice relationship, you must be close to your followers. You must know what
			they want. That’s why videos are becoming more powerful than texts. People can see
			who you really are.</p>
			<p><b>John : </b>Teacher, do you think I should have a blog ? There are some influencers, for
			example, who have facebook, Insta, Youtube channel and a blog. What’s your take on
			that?</p>
			<p><b>Jake : </b>Well, It’s up to you. You just need to be careful if you have many platforms to
			manage. You could get lost in the middle of all these platf orms and this may cause
			some stress. Pick one or two to start and make sure you’re gonna be consistent with
			your posts.</p>
			<p><b>Students : </b>Very nice advices teacher. Thank you.</p>
			<p><b>Jake : </b>You’re welcome guys. Well, that’s it for today ok. I’ll see you in the next class.
			Please, if you have some ti me, bring some suggesti ons on how to produce nice
			content. Sites, ideas, books, whatever you think you can use to help you with the
			content production. That’s it guys. See ya’ll next class.</p>
			<div style="margin-top :32px">
				<figure>
					<img src="{{ asset('assets/img/masteroflanguage/unit15/conversation.jpg') }}" alt="foto">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
