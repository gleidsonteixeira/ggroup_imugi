@extends('layouts.template')
@section('titulo','Unit 25 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade25" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 25</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 25/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>


            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>air sound /ɛr/</b></p>
                </li>
                <li>
                    <p>SECRETARY</p>
                </li>
                <li>
                    <p>PREPARE</p>
                </li>
                <li>
                    <p>CAREFUL</p>
                </li>
                <li>
                    <p>AREA</p>
                </li>
                <li>
                    <p>VERY</p>
                </li>
                <li>
                    <p>NECESSARY</p>
                </li>
            </ul>

            <p style="margin-top:32px">The secret<b><u>ar</u></b>y was v<b><u>er</u></b>y c<b><u>ar</u></b>eful to prep<b><u>ar</u></b>e what is necess<b><u>ar</u></b>y for the general meeting of her <b><u>ar</u></b>ea.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection