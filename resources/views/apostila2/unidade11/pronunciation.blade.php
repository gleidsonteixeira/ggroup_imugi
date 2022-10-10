@extends('layouts.template')
@section('titulo','Unit 11 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade11" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 11</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 11/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>short o /ɑ/</p></b>
                </li>
                <li>
                    <p>Stop</p>
                </li>
                <li>
                    <p>Lock</p>
                </li>
                <li>
                    <p>Farm</p>
                </li>
                <li>
                    <p>Want</p>
                </li>
                <li>
                    <p>Possible</p>
                </li>
                <li>
                    <p>Got</p>
                </li>
            </ul>
            <p style="margin-top:32px">If p<b><u>o</u></b>ssible,I want to l<b><u>o</u></b>ck everything I g<b><u>o</u></b>t after I st<b><u>o</u></b>p</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection