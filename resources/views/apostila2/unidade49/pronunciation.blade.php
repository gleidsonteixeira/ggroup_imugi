@extends('layouts.template')
@section('titulo','Unit 49 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade49" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 49</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 49/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <p style="margin-top:16px"><b>Read the sentences below and circle the words that are pronounced as one word.</b></p>

            <p>Would you like a cup of coffee?</p>
            <p>I only have bread and butter for breakfast.</p>
            <p>I’m playing soccer every other day</p>
            <p>You’re the girl I met yesterday by chance in a bar, aren’t you?</p>
            <p>What’s the matter?</p>
            <p>What are you doing?</p>
            <p>What do you do?</p>
            <p>What did you do yesterday?</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection