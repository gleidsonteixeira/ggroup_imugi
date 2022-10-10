@extends('layouts.template')
@section('titulo','Unit 26 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="conversation">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit26/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Sarah :</b> Hey there guys! Welcome to our review. Last night, I was thinking about how to do today’s review in a way you would all understand the application of the tools we studied.</p>
					<p><b>Sarah :</b> When I was young, I used to make paitings on a canvas. But now we can use photoshop for that. I want you guys to tell me how we can capture the image of a sunset at the beach. Tell me the steps and tools to use.</p>
					<p><b>Marcelo :</b> Well… I would recommend brush tool for the sky and clouds. I used it to draw the grass on a field in one of my drawings. I chose brush tool because it’s practical and doesn’t need to be detailed.</p>
					<p><b>Kylie :</b> And I suggest we use the eraser tool to shape the clouds with more delicacy</p>
					<p><b>Mariana :</b> I think we could use the pen tool to make the division between the sea and the sky because it is a line of precision.</p>
					<p><b>Sarah :</b> Wow! You guys are great! Congratulations, your drawing would be absolutely beautiful.</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit26/ilust_26.jpg') }}" alt="Sarah and Marcelo" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo26.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
