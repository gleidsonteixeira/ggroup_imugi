@extends('layouts.template')
@section('titulo','Unit 5 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade5" data-etapa="listening">
				<h3 class="barlow">UNIT 05 - BURN TOOL</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit5/listening/listening.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>A - <b>Kate :</b> Hey, Lee, I <b>have</b> a beautiful picture of the beach that I love, but the sky is a little <b>bright</b>. What can I do to make it darker?</p>
                    <p>B - <b>Lee :</b> HI there, Kate! You can use <b>Burn Tool</b> to make specific areas of the picture <b>darker</b>. It is a great tool to balance the <b>contrast</b> in a picture</p>
                    <p>C - <b>Kate :</b> Great! Thank you so much, Lee!</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
