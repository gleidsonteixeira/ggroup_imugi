@extends('layouts.template')
@section('titulo','Unit 17 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade17" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 17</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 17/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>aw sound /ɔ/</b></p>
                </li>
                <li>
                    <p>Almost</p>
                </li>
                <li>
                    <p>Always</p>
                </li>
                <li>
                    <p>Offer</p>
                </li>
                <li>
                    <p>Author</p>
                </li>
                <li>
                    <p>Talk</p>
                </li>
                <li>
                    <p>audience</p>
                </li>
            </ul>
            <p style="margin-top:32px">The <b><u>au</u></b>thor <b><u>al</u></b>most <b><u>al</u></b>ways t<b><u>al</u></b>k to the <b><u>au</u></b>dience and <b><u>o</u></b>ffer <b><u>au</u></b>tographs</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection