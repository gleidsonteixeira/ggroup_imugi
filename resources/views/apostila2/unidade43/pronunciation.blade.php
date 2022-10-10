@extends('layouts.template')
@section('titulo','Unit 43 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade43" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 43</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 43/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">Improving pronunciation - / x / with sound of / ks / . Pay attention to the exceptions.</h5>
            <div class="metade">
                <div class="metade esquerda center-align">
                    <p>E<b>x</b>cuse</p>
                    <p>E<b>x</b>pert</p>
                    <p>O<b>x</b>ygen</p>
                    <p>E<b>x</b>pedition</p>
                </div>
                <div class="metade direita center-align">
                    <p>Se<b>x</b>y</p>
                    <p>Wa<b>x</b></p>
                    <p><b>x</b>erox (exception)</p>
                    <p>E<b>x</b>ample (exception)</p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection
