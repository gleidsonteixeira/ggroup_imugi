@extends('layouts.template')
@section('titulo','Unit 20 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade20" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 20</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 20/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear espacamento"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>schwa+r /ɚ/</b></p>
                </li>
                <li>
                    <p>Her</p>
                </li>
                <li>
                    <p>Work</p>
                </li>
                <li>
                    <p>Sure</p>
                </li>
                <li>
                    <p>First</p>
                </li>
                <li>
                    <p>Early</p>
                </li>
                <li>
                    <p>Were</p>
                </li>
            </ul>
            <div class="clear"></div>
            <p style="margin-top:32px">First, they were, for sure, in her work very early.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection