@extends('layouts.template')
@section('titulo','Unit 29 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit29/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice how the letter “H” is sillent in the possessives after words ending in consonant sounds. The connections are in the underlined letters.</h5>
				<div class="espacamento">
					<p>1 - This Is For His Parents.</p>
					<p>2 - I Bought This Gift For Her.</p>
					<p>3 - I Helped Him Because His Car Broke Down.</p>
					<p>4 - I Need To Take Her Family To The Airport.</p>
					<p>5 - That’s His House.</p>
               	</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
