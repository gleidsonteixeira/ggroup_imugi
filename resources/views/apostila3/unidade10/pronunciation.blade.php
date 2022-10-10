@extends('layouts.template')
@section('titulo','Unit 10 | Pronunciation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
    <!-- Conteúdo principal central -->
    <div class="dashboard">
        <div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade10" data-etapa="pronunciation">
            <h3 class="barlow">UNIT 10</h3>
            <h5 class="barlow">4 - PRONUNCIATION</h5>
            <span class="play-audio">( Aperte o play )</span>
            <audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 10/05_PRONUNCIATION/PRONUNCIATION_10.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <h5 class="barlow" style="margin-top:16px;">A – Homophones 10</h5>
            <p>Observe the list of homophones below and try to contextualize them,</p>
            <table class="espacamento center-align borderedfull" style="margin-top:10px;">
                <tr>
                    <td><h5 class="barlow espacamento">hi</h5></td>
                    <td><h5 class="barlow espacamento">high</h5></td>
                    <td><h5 class="barlow espacamento">hole</h5></td>
                    <td><h5 class="barlow espacamento">Whole</h5></td>
                </tr>
                <tr>
                    <td><h5 class="barlow espacamento">Our</h5></td>
                    <td><h5 class="barlow espacamento">Hour</h5></td>
                    <td><h5 class="barlow espacamento">Eye</h5></td>
                    <td><h5 class="barlow espacamento">I</h5></td>
                </tr>
                <tr>
                    <td><h5 class="barlow espacamento">Knew</h5></td>
                    <td><h5 class="barlow espacamento">New</h5></td>
                    <td><h5 class="barlow espacamento">Know</h5></td>
                    <td><h5 class="barlow espacamento">No</h5></td>
                </tr>
                <tr>
                    <td><h5 class="barlow espacamento">Not</h5></td>
                    <td><h5 class="barlow espacamento">Knot</h5></td>
                    <td><h5 class="barlow espacamento">Knight</h5></td>
                    <td><h5 class="barlow espacamento">night</h5></td>
                </tr>
                <tr>
                    <td><h5 class="barlow espacamento">male</h5></td>
                    <td><h5 class="barlow espacamento">mail</h5></td>
                    <td><h5 class="barlow espacamento">meet</h5></td>
                    <td><h5 class="barlow espacamento">meat</h5></td>
                </tr>
                <tr>
                    <td><h5 class="barlow espacamento">Pear</h5></td>
                    <td><h5 class="barlow espacamento">Pair</h5></td>
                    <td><h5 class="barlow espacamento">Piece</h5></td>
                    <td><h5 class="barlow espacamento">Peace</h5></td>
                </tr>
                <tr>
                    <td><h5 class="barlow espacamento">You're</h5></td>
                    <td><h5 class="barlow espacamento">Your</h5></td>
                    <td><h5 class="barlow espacamento">Won</h5></td>
                    <td><h5 class="barlow espacamento">One</h5></td>
                </tr>
                <tr>
                    <td><h5 class="barlow espacamento">Where</h5></td>
                    <td><h5 class="barlow espacamento">Wear</h5></td>
                    <td><h5 class="barlow espacamento">See</h5></td>
                    <td><h5 class="barlow espacamento">Sea</h5></td>
                </tr>
            </table>
            <p style="margin-top:10px;">For more examples of homophones, check on the net. There are plenty of useful lists to help
            you improve your pronunciation.</p>
        </div>
    </div>
</main>
<script>
    activeMenu();
</script>

@endsection
