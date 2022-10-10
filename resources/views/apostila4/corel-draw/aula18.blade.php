@extends('layouts.template')
@section('titulo','Corel Draw | Aula 1 – Espaço de trabalho')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula18">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 1 – Espaço de trabalho</h5>
            <div style="margin-top:16px">
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula01/imagem1.png') }}" alt="guia">
                </figure>
            </div>
            
            <div style="margin-top:16px">
            <h5 class="barlow">Barra de Menus:</h5>
            <p>Utilizada tanto para ajustes quanto controles mais avançados como Codigos de Barra e QR</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula01/imagem2.png') }}" alt="guia">
                </figure>
            </div>
            <div style="margin-top:16px">
            <h5 class="barlow">Barra Padrão:</h5>
            <p>Utilizada para Criar, Salvar, Abrir, Importar, Exportar e Ajustes da folha de trabalho.</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula01/imagem3.png') }}" alt="guia">
                </figure>
            </div>
            <div style="margin-top:16px">
            <h5 class="barlow">Barra de Propriedades:</h5>
            <p>Utilizada de acordo com a ferramenta selecionada no corel, comulmente usada para ajustes precisos e detalhes
de medidas para seus trabalhos.</p>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula01/imagem4.png') }}" alt="guia">
                </figure>
            </div>
            <div style="margin-top:16px">
            <h5> <span class="barlow" >Barra de Status: <span class="dark-font"> funciona em conjunto com a caixa de cores. </span> </h5>
                <figure class="otimizarimagem">
                    <img src="{{ asset('assets/img/photoshop/corel/aula01/imagem5.png') }}" alt="guia">
                </figure>
                <p style="margin-top:16px">Dicas de uso da ferramenta selecionada ou recurso escolhido, também serve de orientação para checar
quais as cores de preenchimento e traçado está trabalhando no momento.</p>
            </div>
            
            <div class="clear"></div>            
        </div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
