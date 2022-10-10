@extends('layouts.template')
@section('titulo','Unit 50 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade50" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 50</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 50/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>f sound /f/</b></p>
                </li>
                <li>
                    <p>FACE</p>
                </li>
                <li>
                    <p>FAST</p>
                </li>
                <li>
                    <p>SPECIFIC</p>
                </li>
                <li>
                    <p>COMFIRM</p>
                </li>
                <li>
                    <p>ENOUGH</p>
                </li>
                <li>
                    <p>HALF</p>
                </li>
            </ul>
            <p style="margin-top:32px">
                Facebook administrators confirmed that half of the users was not fast enough to learn
                how to use that specific tool.
            </p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection