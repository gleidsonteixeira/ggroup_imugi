@extends('layouts.template')
@section('titulo','Unit 12 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade12" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 12</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 12/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>long u /ju/</p></b>
                </li>
                <li>
                    <p>Youth</p>
                </li>
                <li>
                    <p>University</p>
                </li>
                <li>
                    <p>Usually</p>
                </li>
                <li>
                    <p>Huge</p>
                </li>
                <li>
                    <p>Future</p>
                </li>
                <li>
                    <p>music</p>
                </li>
            </ul>
            <p style="margin-top:32px"><b><u>You</u></b>th <b><u>u</u></b>sually study m<b><u>u</u></b>sic in h<b><u>u</u></b>ge <b><u>u</u></b>niversities.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection