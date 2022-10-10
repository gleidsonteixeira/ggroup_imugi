@extends('layouts.template')
@section('titulo','Unit 18 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade18" data-etapa="conversation">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit18/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Akira :</b> Good afternoon, everyone. Last class, angelique made an interesting question about the organization of the website. However, she was one step ahead of the lesson.</p>
				<p><b>Akira :</b> So, today we are going to talk about two very basic and important tools. They are called shape tool and adobe kuler.</p>
				<p><b>Akira :</b> Do any of you know what they are used for?</p>
				<p><b>Lara :</b> Well, the name “kuler” sounds like color. So, I imagine it is a kind of color tool.</p>
				<p><b>Akira :</b> Spot on, lara! Adobe kuller is a photoshop extension with a variety of pre-defi ned color palets.</p>
				<p><b>Akira :</b> Now, shape tool, as the name implies, is a tool used to create shapes for your web-site. It is one of the first steps in the creation of a site.</p>
				<p><b>Marciel :</b> What kinds of shapes can you create?</p>
				<p><b>Angelique :</b> Basically any shape you can imagine, Marciel. I used shape tool to create my site. I had to use it to make the header, search menu, publication area and the	“who am i” section.</p>
				<p><b>Akira :</b> Great! Thank you all for your contribution to the lesson.</p>								
				<figure>
					<img src="{{ asset('assets/img/playgo/unit18/ilust_18.jpg') }}" alt="Akira and Maciel" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo18.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
	</script>
	


@endsection
