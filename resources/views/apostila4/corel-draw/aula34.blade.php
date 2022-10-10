@extends('layouts.template')
@section('titulo','Corel Draw | Aula 17 – Códigos de Barra e QR')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="photoshop-corel" data-unidade="unidade2" data-etapa="aula34">
			<h3 class="barlow">COREL DRAW</h3>
			 <div class="clear"></div>
            <h5 class="barlow">Aula 17 – Códigos de Barra e QR </h5>
            <p><strong> Evento de calendário: </strong> Pode adicionar um evento especificando um nome, local, data/hora de início e data/hora de término para ele.</p>
            <p><strong> Local geográfico: </strong> Pode mostrar um local geográfico especificando valores de latitude e longitude semelhante ao google maps por exemplo...</p>    
            <p><strong> Texto simples: </strong> permite incluir texto simples (não formatado).</p>    
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula17/imagem1.jpg') }}" alt="guia" style="width:55%!important; margin: 0 auto;" >
                </figure>
            <p style="margin-top:30px;">Os códigos de barras são utilizados para representar uma numeração que identifica os produtos, unidades logísticas, 
            localizações, ativos fixos e retornáveis, documentos, contêineres, cargas e serviços. E são verificados
junto ao banco de dados e maquinas (scanners) que checam os códigos junto ao banco de dados.</p>
<p>O sistema de código de barras do CorelDRAW permite que você possa criar o código para seu produto,
utilizando os padrões nacionais e internacionais para criar o mesmo.</p>
<p><strong> EAN/UPC: </strong> Código desenvolvido especificamente para leitura no PDV (ponto de venda)</p>
<p><strong> ITF-14: </strong> Código de barras desenvolvido para codificar apenas GTINs, pode ser impresso diretamente em substrato
corrugado (caixa de papelão) oferecendo um bom desempenho de leitura. Não pode ser utilizado para
identificar itens comerciais que passarão pelo PDV.</p>
<p>Foi listado os exemplos mais simples EAN e ITF-14 normalmente utilizados na maioria dos varejos para mais
informações consulte os orgãos responsáveis.</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula17/imagem2.jpg') }}" alt="guia" style="width:75%!important; margin: 0 auto;" >
                </figure>
                <p>Exemplos de códigos de barras fora da curva para atrair clientes e uma bela inovação das empresas criadoras</p>
                <figure>
                    <img src="{{ asset('assets/img/photoshop/corel/aula17/imagem3.jpg') }}" alt="guia" style="width:55%!important; margin: 0 auto;" >
                </figure>
            <div class="clear"></div>
            
            <div style="margin-top:16px">
                <h5 class="barlow">Atividades</h5>
                <p>Monte uma arte tema disponibilizado pelo professor(a) e adicione um código QR pra sua rede
social de trabalhos e portal da escola.</p>
<p>Faça uma capa de revista com o mesmo tema e adicione um código de barras genérico.</p>
             
            </div>
        </div>
    </div>
</main>

<script>
	activeMenu();
</script>

@endsection
