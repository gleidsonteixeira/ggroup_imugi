@extends('layouts.template')
@section('titulo','Unit 10 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade10" data-etapa="conversation">
			<h3 class="barlow">UNIT 10</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 10/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Welcome back guys. How are you today? We have a guest today but he’s going
				to bring some info about Cinema 4D just in the end of the class ok.
			</p>
			<p>
				<b>Students :</b> No teacher, please. We are the most curious students in the world.
			</p>
			<p>
				<b>Gleen :</b> Ok, hold your horses. The surprise is gonna be fantastic. Be patient.
			</p>
			<p>
				<b>Students :</b> Please teacher, let’s start with the news.
			</p>
			<p>
				<b>Gleen :</b> Ok guys, you got it. Let’s start with Mr. smith. He’s a Marketing Manager at Zaxon
				and he’s going to bring us some comments about the new Zaxon release, Cinema 4D
				R17. Welcome Mr. Smith. Feel comfortable. The class is yours.
			</p>
			<p>
				<b>Mr. Smith: :</b> Hello guys, How’s everything? I hope everything is ok with you. Well let’s
				go straight to the point. I’m gonna show you some nice features of this new Cinema 4D
				version. First, let’s watch a video together.
			</p>
			<p>
				<b>Mr. Smith: :</b> That’s it guys. As you can see, you can create from a simple Polygon, like a
				Square or a triangle to a very complex multi-polygon sided structure. From the floor plan
				to the whole building structure. You also have the best and fastest editing and renderization tools in the market. Well guys, That’s it. Thank you for your attention.
			</p>
			<p>
				<b>Gleen :</b> Fantastic Mr Smith. Thank you for your presence. We hope to see you back ok.
			</p>

			<iframe style="margin-top: 16px" width="640" height="360" src="https://www.youtube.com/embed/jRKfumNPL1Y?list=PL16DC24F610CBBD8B" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<div style="margin-top: 32px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit10/conversation.jpg') }}" alt="amigos estudando">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection