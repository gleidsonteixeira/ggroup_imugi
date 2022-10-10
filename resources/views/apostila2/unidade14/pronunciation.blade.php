@extends('layouts.template')
@section('titulo','Unit 14 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade14" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 14</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 14/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>other u /ʊ/</b></p>
                </li>
                <li>
                    <p>Look</p>
                </li>
                <li>
                    <p>Took</p>
                </li>
                <li>
                    <p>Put</p>
                </li>
                <li>
                    <p>Foot</p>
                </li>
                <li>
                    <p>Full</p>
                </li>
                <li>
                    <p>Cookie</p>
                </li>
            </ul>
            <p style="margin-top:32px">Take a l<b><u>oo</u></b>k. He t<b><u>oo</u></b>k the f<b><u>u</u></b>ll pack of c<b><u>oo</u></b>kie and p<b><u>u</u></b>t near his f<b><u>oo</u></b>t.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection