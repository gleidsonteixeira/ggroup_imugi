@extends('layouts.template')
@section('titulo','Unit 27 | Listening')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="listening">
				<h3 class="barlow">UNIT 27 -  PROFESSOR VICTOR</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit27/listening/completo.ogg') }}" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Although Video Editors Work Mainly Work With Other Programs Besides Photoshop, It Is Useful For Beginners Because Photoshop Offers Some Tools That Allow You To Edit Basic Video Content Such As Contrast, Brightness, Curves, Levels And Much More.</p>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Focus on the pronunciation difference between the letters “A” and “E”.</h5>
                <ul class="lista-inline">
					<li><p><b>BED</b></p></li>
					<li><p><b>SET</b></p></li>
					<li><p><b>LED</b></p></li>
					<li><p><b>MED</b></p></li>
                    <li><p><b>RED</b></p></li>
				</ul>
				<ul class="lista-inline">
					<li><p><b>BAD</b></p></li>
					<li><p><b>SAT</b></p></li>
					<li><p><b>LAD</b></p></li>
					<li><p><b>MAD</b></p></li>
                    <li><p><b>RAD</b></p></li>
				</ul>
                <h5 class="barlow" style="margin-top: 16px">B - Now practice by reading the sentences.</h5>
                <div class="espacamento">
                    <p>1 - The Bad Boy Is A Tad Sad And Is In Bed.<p>
                    <p>2 - Ted Has Ten Cats.</p>
                    <p>3 - Karl Had Apples In His Car.</p>
                    <p>4 - Pat Wants To Have Pets To Care For.</p>
                    <p>5 - Ned Met Ralph Aft er The Event.</p>
                </div>
            </div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

@endsection
