@extends('layouts.template')
@section('titulo','Unit 46 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade46" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 46</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 46/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>d sound /d/</b></p>
                </li>
                <li>
                    <p>DESCRIBE</p>
                </li>
                <li>
                    <p>DIGITAL</p>
                </li>
                <li>
                    <p>READY</p>
                </li>
                <li>
                    <p>VIDEO</p>
                </li>
                <li>
                    <p>AWARD</p>
                </li>
                <li>
                    <p>RECOMMEND</p>
                </li>
            </ul>

            <p style="margin-top:32px">I’m rea<b>d</b>y to <b>d</b>escribe an<b>d</b> recommen<b>d</b> the <b>d</b>igital vi<b>d</b>eo for an awar<b>d</b> nomination.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection