@extends('layouts.template')
@section('titulo','Unit 32 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade32" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 32</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 32/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>l sound /l/</b></p>
                </li>
                <li>
                    <p>LAST</p>
                </li>
                <li>
                    <p>LIST</p>
                </li>
                <li>
                    <p>INCLUDE</p>
                </li>
                <li>
                    <p>CHILD</p>
                </li>
                <li>
                    <p>FINAL</p>
                </li>
                <li>
                    <p>SCHEDULE</p>
                </li>
            </ul>

            <p style="margin-top:32px"><b><u>L</u></b>ets inc<b><u>l</u></b>ude the <b><u>l</u></b>ast chi<b><u>l</u></b>d in the fina<b><u>l</u></b> list schedu<b><u>l</u></b>e </p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection