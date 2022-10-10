@extends('layouts.template')
@section('titulo','Unit 18 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade18" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 18</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 18/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>oi sound /ɔɪ/</b></p>
                </li>
                <li>
                    <p>Toy</p>
                </li>
                <li>
                    <p>Choice</p>
                </li>
                <li>
                    <p>Enjoy</p>
                </li>
                <li>
                    <p>Avoid</p>
                </li>
                <li>
                    <p>Voice</p>
                </li>
            </ul>

            <p style="margin-top:32px">Av<b><u>oi</u></b>d your inner v<b><u>oi</u></b>ce and enj<b><u>oy</u></b> the t<b><u>oy</u></b> of your ch<b><u>oi</u></b>ce</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection