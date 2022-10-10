@extends('layouts.template')
@section('titulo','Unit 41 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade41" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 41</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila2/UNIT 41/4. PRONUNCIATION/PRONUNCIATION.ogg') }}" type="audio/ogg">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px">Improving pronunciation - / g / / j /</h5>
            <p style="margin-top:32px"><b>G</b>eorge <b>g</b>oes to the <b>g</b>ym by jeep.</p>
            <p>Jane <b>g</b>enerally jo<b>g</b>s in January with <b>G</b>eena and <b>G</b>ary.</p>
            <p>Joanna enjoys Jazz at <b>G</b>utemberg’s club.</p>
            <p>Jelly, <b>g</b>ooseberry jam and juice is Jim and <b>G</b>eorge’s favorite breakfast.</p>
            <p><b>G</b>ee, Jim <b>G</b>oldber<b>g</b>, the Jewish <b>g</b>uy, jumps just like a ja<b>g</b>uar.</p>
            <p><b>J</b>ames is <b>j</b>olly <b>g</b>ood at <b>G</b>ymnastics.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection