@extends('layouts.template')
@section('titulo','Unit 11 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade11" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 11</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 11/05_PRONUNCIATION/PRONUNCIATION_11.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A – Homographs 1</h5>
            <p><b>Homographs</b> are words that have the same spelling but may have different meaning, origin or pronunciation.</p>
            <h5 class="barlow"><b>Examples:</b></h5>
            <p><b>Quarter/Quarter</b></p>
            <p>Observe the meaning of the words based on the context.</p>
            <p>It’s a <b>quarter</b> past 2 pm.</p>
            <p>I used a <b>quarter</b> coin in the parking meter.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection
