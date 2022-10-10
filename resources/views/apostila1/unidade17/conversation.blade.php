@extends('layouts.template')
@section('titulo','Unit 17 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="conversation">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit17/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Angelique :</b> Professor Akira, I told my youtube viewers last week that I would start the website soon. But, the problem is I am having some trouble organizing the layout of the page.</p>
					<p><b>Akira :</b>  I see. What is the problem you’re having, exactly?</p>
					<p><b>Angelique :</b> Well, first, the editing is consuming a lot of my time because, to me, it looks very disorganized. Second, I try to position everything in the same level, but they’re never precicely in the right place.</p>
					<p><b>Akira :</b>  I think I understand the problem. There are two tools I think can help you. The first tool is called layers. We use layers to separate every item on the page. This permits you to focus on editing each part at a time.</p>
					<p><b>Akira :</b>  The name of the second tool is guides. Guides are lines that you can use to organize level of the items on the page. This way, everything can be perfectly aligned.</p>
					<p><b>Akira :</b>  Try these two tools and see if they help.</p>
					<p><b>Angelique :</b>  Great! Thank you so much professor! You were a great help!</p>				
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit17/ilust_17.jpg') }}" alt="Akira and Angelique" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo17.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
	</script>
	


@endsection
