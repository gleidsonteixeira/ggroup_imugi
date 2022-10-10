@extends('layouts.template')
@section('titulo','Unit 35 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade35" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 35</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 35/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>

            <table class="metade center-align bordered" style="margin-top:16px">
                <tr>
                    <td>
                        <h5 class="barlow">When /t/ </h5>
                    </td>
                    <td class="vertical-align" colspan="2" rowspan="2">
                        <p><b>Quick 'd sound' /t/</b></p>
                    </td>
                    <td class="vertical-align" colspan="2" rowspan="2">
                        <p><b>Glottal stop /?/O</b></p>
                    </td>
                    <td class="vertical-align" colspan="2" rowspan="2">
                        <p><b>mitted /t/: /t/</b></p>
                    </td>
                </tr>
                <tr >
                    <td>
                        <h5 class="barlow">doesn't</h5>
                    </td>
                </tr>
                <tr class="bordered">
                    <td>
                        <h5 class="barlow">sound like /t/</h5>
                    </td>
                    <td>
                        <p><b>Daughter</b></p>
                    </td>
                    <td>
                        <p><b>Computer</b></p>
                    </td>
                    <td>
                        <p><b>Fitness</b></p>
                    </td>
                    <td>
                        <p><b>Partner</b></p>
                    </td>
                    <td>
                        <p><b>Advantage</b></p>
                    </td>
                    <td>
                        <p><b>Center</b></p>
                    </td>
                </tr>
            </table>

            <p style="margin-top:32px">The compu<b>t</b>er of the fi<b>t</b>ness cen<b>t</b>er my daugh<b>t</b>er usually goes, has some advan<b>t</b>ages over her par<b>t</b>ner computer.</p>

        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection
