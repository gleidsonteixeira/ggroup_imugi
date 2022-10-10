@extends('layouts.template')
@section('titulo','Unit 8 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade8" data-etapa="conversation">
				<h3 class="barlow">UNIT 08 - REVIEW OF SOPHIA’S CLASSES</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit8/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Sophia :</b> Well guys, this is our last class together. You are all great students!</p>
					<p><b>Sophia :</b> Today I want to review with you some things we talked about during these units. Let’s take this moment to make questions about things you don’t understand.</p>
					<p><b>Carlos :</b> Teacher, I don’t understand in what situation I can use Burn Tool.</p>
					<p><b>Kate :</b>  I know the answer to that question. Burn tool can be used when you want to make certain areas of a picture darker.</p>
					<p><b>Carlos : </b>  I see… for example, if I take a picture of the beach and the sky is too bright, I can use it to balance the contrast between the ocean and the sky, right?</p>
					<p><b>Kate : </b>  Yes, that’s what I mean.</p>
					<p><b>Sophia : </b>  Great answer, Kate. Now, what about Spot Healing Brush? What does it do?</p>
					<p><b>Lee : </b>  It is utilized to remove imperfections from photos, such as acne and scars.</p>
					<p><b>Sophia : </b>  That’s right Lee! And sometimes your eyes may be red in a picture. Do you use Spot Healing Brush, or another tool?</p>
					<p><b>Beatriz : </b>  No, you don’t use the Healing Brush. You need to use the Red Eye Correction Tool.</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit8/ilust_08.jpg') }}" alt="Garotos festejando" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo8.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
