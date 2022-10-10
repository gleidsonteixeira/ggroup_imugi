@extends('layouts.template')
@section('titulo','Unit 47 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade47" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 47</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 47/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>b sound /b/</b></p>
                </li>
                <li>
                    <p>BETWEEN</p>
                </li>
                <li>
                    <p>BOX</p>
                </li>
                <li>
                    <p>REMEMBER</p>
                </li>
                <li>
                    <p>NUMBER</p>
                </li>
                <li>
                    <p>JOB</p>
                </li>
                <li>
                    <p>DESCRIBE</p>
                </li>
            </ul>

            <p style="margin-top:32px">Your jo<b>b</b> is to remem<b>b</b>er and descri<b>b</b>e the num<b>b</b>er of <b>b</b>oxes <b>b</b>etween the isles.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection