@extends('layouts.template')
@section('titulo','Unit 13 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade13" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 13</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 13/05_PRONUNCIATION/PRONUNCIATION_13.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">A – Homographs 3</h5>
            <h5 class="barlow"><b>Examples:</b></h5>
            <p><b>Bar/Bar</b></p>
            <p>Observe the meaning of the words based on the context.</p>
            <p>I love going to <b>bars</b> on Friday nights</p>
            <p>She’s so anxious that she could eat an entire chocolate <b>Bar</b>.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection
