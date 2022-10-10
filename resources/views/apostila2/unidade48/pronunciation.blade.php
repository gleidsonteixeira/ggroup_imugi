@extends('layouts.template')
@section('titulo','Unit 48 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade48" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 48</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 48/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>p sound /p/ </b></p>
                </li>
                <li>
                    <p>PRESENTATION</p>
                </li>
                <li>
                    <p>PAGE</p>
                </li>
                <li>
                    <p>SPEAK</p>
                </li>
                <li>
                    <p>CAMPAIGN</p>
                </li>
                <li>
                    <p>GROUP</p>
                </li>
                <li>
                    <p>DEVELOP</p>
                </li>
            </ul>

            <p style="margin-top:32px">We have to develop a new campaign for the Pit Stop group. Could you speak with them
                about the first page presentation.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection