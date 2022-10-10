@extends('layouts.template')
@section('titulo','Unit 22 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade22" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 22</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 22/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>ar sound /ɑr/</b></p>
                </li>
                <li>
                    <p>MARKETING</p>
                </li>
                <li>
                    <p>DEPARTMENT</p>
                </li>
                <li>
                    <p>ARMS</p>
                </li>
                <li>
                    <p>PARTHER</p>
                </li>
                <li>
                    <p>ART</p>
                </li>
                <li>
                    <p>ARE</p>
                </li>
            </ul>
            <p style="margin-top:32px">For my p<b><u>ar</u></b>tner, the m<b><u>ar</u></b>keting and sales dep<b><u>ar</u></b>tments <b><u>ar</u></b>e the <b><u>ar</u></b>ms of his <b><u>ar</u></b>t company</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection