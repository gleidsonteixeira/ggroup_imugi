@extends('layouts.template')
@section('titulo','Unit 31 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade31" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 31</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 31/3. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">Improving pronunciation - / <b>ch</b> / / <b>sh</b> /</h5>

            <table class="metade left-align">
                <tr>
                    <td>
                        <p><b>Sh</b>aron</p>
                    </td>
                    <td>
                        <p><b>Ch</b>arles</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>e</p>
                    </td>
                    <td>
                        <p><b>Sh</b>aron</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>y</p>
                    </td>
                    <td>
                        <p><b>Sh</b>e</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>op</p>
                    </td>
                    <td>
                        <p><b>Sh</b>y</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>ips</p>
                    </td>
                    <td>
                        <p><b>Sh</b>op</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><b>Sh</b>eet</p>
                    </td>
                    <td>
                        <p><b>Sh</b>ips</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection