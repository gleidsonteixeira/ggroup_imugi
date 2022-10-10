@extends('layouts.template')
@section('titulo','Unit 25 | Grammar')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade25" data-etapa="grammar">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
				<h5 class="barlow">3 - GRAMMAR</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit25/grammar/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <h5 class="barlow">Past continuous</h5>
                    <p>The Past Continuous Tense Is Applied When Expressing An Action In Progress In The Past.</p>
                    <h5 class="barlow">Structure:</h5>
                    <p><b>Affirmative :</b> SUBJECT+ WAS/WERE+ VERB-ING.</p>
                    <p>SHE WAS WORKING ON SUNDAY MORNING.</p>
                    <p><b>Interrogative :</b> WAS/WERE+ SUBJECT+VERB-ING?</p>
                    <p>WERE THEY STUDYING FOR THE TEST YESTERDAY?</p>
                    <p><b>Negative :</b> SUBJECT+ WAS/WERE+ NOT+ VERB-ING.</p>
                    <p>SHE WASN’T LISTENING WHEN THE TEACHER WAS TALKING.</p>               
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();

       
    </script>

@endsection
