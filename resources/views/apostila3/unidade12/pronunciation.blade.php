@extends('layouts.template')
@section('titulo','Unit 12 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade12" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 12</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 12/05_PRONUNCIATION/PRONUNCIATION_12.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A – Homographs 2</h5>
            <h5 class="barlow"><b>Examples:</b></h5>
            <p><b>Bat/Bat</b></p>
            <p>Observe the meaning of the words based on the context.</p>
            <p>I’m afraid of <b>bats</b>.</p>
            <p>In a baseball game we use a <b>bat</b> to hit the ball.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection
