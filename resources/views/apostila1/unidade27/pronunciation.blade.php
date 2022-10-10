@extends('layouts.template')
@section('titulo','Unit 27 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 27 - PROFESSOR VICTOR</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<!-- <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio27/Pronunciation/completo.ogg') }}" type="audio/ogg">
                </audio>
				<div class="clear"></div> -->
				<p style="margin-top: 16px">
					<strong class="upper">Em breve!</strong>
				</p>
                <!-- <h5 class="barlow" style="margin-top: 16px">A. Observe That “Ed” Someti mes Sounds Like A “T”, “D”, Or Just “Ed”. It Depends On The Use Of Your Voice At The End Of The Verb.</h5>
				<div class="metade">
					<div class="umterco">
						<ul>
							<p>/T/</p>
							<p>WORKED</p>
							<p>LIKED</p>
							<p>HELPED</p>
						</ul>
						</div>
						<div class="umterco">
						<ul>
							<p>/D/</p>
							<p>SHOWED</p>
							<p>LEARNED</p>
							<p>PLAYED</p>
						</ul>
						</div>
						<div class="umterco">
						<ul>
							<p>/ED/</p>
							<p>WAITED</p>
							<p>DECIDED</p>
							<p>WANTED</p>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">B. Practice By Reading The Following Sentences.</h5>
				<ul>
					<p class="lower">1. MY TEACHER SHOWED US HOW TO USE LAYER STYLE.</p>
					<p class="lower">2. I DECIDED TO CREATE A COSTUMIZED TEXT.</p>
					<p class="lower">3. HE WANTED TO USE PHOTOSHOP TO DEVELOP THE FLYER.</p>
					<p class="lower">4. THEY LIKED THE PROJECT.</p>
					<p class="lower">5. I HELPED HER WITH THE EXERCISE.</p>
				</ul>
				<div class="clear"></div> -->
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
