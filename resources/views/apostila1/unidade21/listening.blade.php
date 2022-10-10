@extends('layouts.template')
@section('titulo','Unit 21 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="listening">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit21/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Illustration is the <b>art</b> of making <b>images</b> that work with something and add to it without needing direct attention <b>and</b> without distracting <b>from</b> the thing they illustrate. The other thing is the focus of the attention, and the <b>illustration’s</b> role is to <b>add</b> personality and <b>character</b> without competing with that other thing.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
