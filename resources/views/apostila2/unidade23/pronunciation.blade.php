@extends('layouts.template')
@section('titulo','Unit 23 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade23" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 23</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 23/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>


            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>schwa+r /ɚ/</b></p>
                </li>
                <li>
                    <p>HER</p>
                </li>
                <li>
                    <p>WORK</p>
                </li>
                <li>
                    <p>SURE</p>
                </li>
                <li>
                    <p>FIRST</p>
                </li>
                <li>
                    <p>EARLY</p>
                </li>
                <li>
                    <p>WERE</p>
                </li>
            </ul>

            <p style="margin-top:32px">Fi<b><u>r</u></b>st, they w<b><u>e</u></b>re, for s<b><u>u</u></b>re, in h<b><u>e</u></b>r w<b><u>o</u></b>rk very <b><u>ea</u></b>rly.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection