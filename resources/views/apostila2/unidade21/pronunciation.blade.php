@extends('layouts.template')
@section('titulo','Unit 21 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade21" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 21</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 21/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>th sound (voiced) /ð/</b></p>
                </li>
                <li>
                    <p>BROTHER</p>
                </li>
                <li>
                    <p>FATHER</p>
                </li>
                <li>
                    <p>THIS</p>
                </li>
                <li>
                    <p>THEY</p>
                </li>
                <li>
                    <p>ANOTHER</p>
                </li>
                <li>
                    <p>THEMSELVES</p>
                </li>
            </ul>
            <p style="margin-top:32px"><b><u>This</u></b> week, my fa<b><u>th</u></b>er and my bro<b><u>th</u></b>er have ano<b><u>th</u></b>er problem. But now, <b><u>th</u></b>ey have to solve it by <b><u>th</u></b>emselves.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection