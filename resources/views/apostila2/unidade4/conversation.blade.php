@extends('layouts.template')
@section('titulo','Unit 4 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade4" data-etapa="conversation">
			<h3 class="barlow">UNIT 04</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 4/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Hey you guys. How are things? What about the studies? Well, last class we talked
				a bit about things you like and things that you consider difficult in your areas. Let’s talk
				about new ways to learn and improve our knowledge ok. The first thing I recommend
				is to review the topics of every class. It’s important to study and practice the tools you
				learn. More than once. You learn much more when you see the same thing from
				different perspectives. And you guys, where do you search for information? What
				do you do to memorize all the things you learn?</p>
			<p><b>Akira:</b> Can I start Gleen?</p>
			<p><b>Gleen:</b> Of course, go ahead.</p>
			<p><b>Akira:</b> I like to take courses related to my area. For me it’s the best way to learn things
				about game development. I also like to participate of developers forums. We always
				learn something new. We post our doubts and people from all over the world give us
				suggestions on how to solve an specific problem.</p>
			<p><b>Gleen:</b> And you Laura ?</p>
			<p><b>Laura:</b> I also like the forums. I’m a member of 3 that are very good. Another thing that I
				love is to participate of workshops of the softwares I like to use. Frequently, I go to many
				events like Comic.com, Sana and usually the companies have stands there.</p>
			<p><b>John:</b> My favorite way to study is to use tutorials. I think it’s very effective to learn how
				to use one specific tool. For example , I visit Cienema 4D and Blender every day to learn
				things that are difficult for me like navigation and orientation. In Ps I don’t use these
				concepts so it’s difficult for me to understand them.</p>
			<p><b>Glenn:</b> ok guys, that’s it for today.</p>

			<figure class="center-align" style="margin-top:16px">
				<img src="{{ asset('assets/img/dominating/unit4/conversation.png') }}" alt="super man e batman">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection