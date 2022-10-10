@extends('layouts.template')
@section('titulo','Unit 5 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade5" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 05</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 5/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>


            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>short a /æ/</b></p>
                </li>
                <li>
                    <p>LAST</p>
                </li>
                <li>
                    <p>APPLE</p>
                </li>
                <li>
                    <p>ADD</p>
                </li>
                <li>
                    <p>CAN</p>
                </li>
                <li>
                    <p>ASWER</p>
                </li>
                <li>
                    <p>CLASS</p>
                </li>
            </ul>

            <p style="margin-top:32px">You c<b>a</b>n <b>a</b>dd a picture of an <b>a</b>pple in your l<b>a</b>st cl<b>a</b>ss.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection