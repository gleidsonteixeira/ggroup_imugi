@extends('layouts.template')
@section('titulo','Unit 13 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade13" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 13</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 13/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>short u /ʌ/</b></p>
                </li>
                <li>
                    <p>Come</p>
                </li>
                <li>
                    <p>Love</p>
                </li>
                <li>
                    <p>Up</p>
                </li>
                <li>
                    <p>Jump</p>
                </li>
                <li>
                    <p>But</p>
                </li>
                <li>
                    <p>About</p>
                </li>
                <li>
                    <p>Does</p>
                </li>
            </ul>
            <p style="margin-top:32px">C<b><u>o</u></b>me here my l<b><u>o</u></b>ve b<b><u>u</u></b>t don’t j<b><u>u</u></b>mp <b><u>u</u></b>p and down. He d<b><u>o</u></b>esn’t know <b><u>a</u></b>bout the movie.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection