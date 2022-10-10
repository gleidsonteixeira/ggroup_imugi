@extends('layouts.template')
@section('titulo','Unit 24 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade24" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 24</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 24/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>or sound /ɔr/</b></p>
                </li>
                <li>
                    <p>SUPPORT</b></p>
                </li>
                <li>
                    <p>ORDER</b></p>
                </li>
                <li>
                    <p>ORGANIZE</b></p>
                </li>
                <li>
                    <p>IMPORTANT</b></p>
                </li>
                <li>
                    <p>STORE</b></p>
                </li>
                <li>
                    <p>BEFORE</b></p>
                </li>
            </ul>

            <p style="margin-top:32px">I need some supp<b><u>or</u></b>t to <b><u>or</u></b>ganize the imp<b><u>or</u></b>tant <b><u>or</u></b>ders bef<b><u>or</u></b>e the st<b><u>or</u></b>e opens.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection