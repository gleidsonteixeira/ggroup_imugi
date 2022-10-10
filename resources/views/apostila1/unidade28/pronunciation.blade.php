@extends('layouts.template')
@section('titulo','Unit 28 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade28" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 28 - VICTOR’S STUDENTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit28/pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A. Notice how stress on the underlined words changes the meaning of the entire sentence.</h5>
				<div class="espacamento">
					<p>1 - I Never Said She Stole My Money. (I Didn’t Say It)</p>
					<p>2 - I Never Said She Stole My Money. (She Didn’t Steal It)</p>
					<p>3 - I Never Said She Stole My Money. (It Wasn’t Stolen)</p>
					<p>4 - I Never Said She Stole My Money. (The Money Wasn’t Mine)</p>
					<p>5 - I Never Said She Stole My Money. (It Wasn’t The Money)</p>
               	</div>
				<div class="clear"></div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
