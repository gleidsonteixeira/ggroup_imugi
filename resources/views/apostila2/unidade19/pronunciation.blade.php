@extends('layouts.template')
@section('titulo','Unit 19 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade19" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 19</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 19/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear espacamento"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>ow sound /aʊ/</b></p>
                </li>
                <li>
                    <p><b>Found House</b></p>
                </li>
                <li>
                    <p><b>Brown</b></p>
                </li>
                <li>
                    <p><b>South</b></p>
                </li>
                <li>
                    <p><b>Down</b></p>
                </li>
                <li>
                    <p><b>Town</b></p>
                </li>
            </ul>
            <div class="clear"></div>
            <p style="margin-top:32px">I found a brown house in south down town.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection