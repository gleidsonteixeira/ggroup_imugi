@extends('layouts.template')
@section('titulo','Unit 16 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade16" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 16</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 16/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <ul class="lista-inline upper" style="margin-top:16px">
                <li>
                    <p><b>oo sound /u:/</b></p>
                </li>
                <li>
                    <p>Cool</p>
                </li>
                <li>
                    <p>Soup</p>
                </li>
                <li>
                    <p>Moon</p>
                </li>
                <li>
                    <p>Boot</p>
                </li>
                <li>
                    <p>Tooth</p>
                </li>
                <li>
                    <p>Move</p>
                </li>
            </ul>
            <p style="margin-top:32px">C<b><u>oo</u></b>l guys. Take some soup to the b<b><u>oo</u></b>t camp and have fun under the m<b><u>oo</u></b>n.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection