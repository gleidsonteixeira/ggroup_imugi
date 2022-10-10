@extends('layouts.template')
@section('titulo','Unit 33 | Interface do Unity Editor')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade33" data-etapa="interface">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow upper">Interface do Unity Editor</h5>
			<p>
			Agora vamos nos familiarizar com a interface do Unity Editor para que possamos conhecer
nosso Workspace na Unity
			</p>
			<p>A janela principal do editor é composta por janelas/Windows. As visualizações são todas as
windows com guias que você pode ver:</p>
            <p><strong>A. Toolbar </strong></p>
			<p><strong>B. Hierarchy </strong></p>
			<p><strong>C. Scene </strong></p>
			<p><strong>D. Game </strong></p>
			<p><strong>E. Inspector </strong></p>
			<p><strong>F. Project Browser </strong></p>
			<p>Outras Janelas não são mostradas por padrão</p>
			<p>Podemos ver o editor principal com todas as windows, que acabamos de mencionar,
na imagem a seguir:</p>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem6.png') }}" alt="guia1" style="width:75%;">
				</figure>
				<h5 class="barlow" style="margin-top:10px;">Toolbar</h5>
				<p>Bem no top o da interface do editor, temos todos os controles.</p>
				<p>As ferramentas Transform são usadas com Scene View para arrastar a câmera, mover
a posição de objetos, girar e dimensionar objetos na cena respectivamente</p>
<p>Selecionando cada uma das seguintes ferramentas de transformação muda o gizmo (a bounding
box em seu objeto selecionado) na Scene View, como mostrado na captura de tela que
segue a descrição das ferramentas:</p>
<ul>
<li>Translate (a tecla de atalho é W): É usado para mover o objeto selecionado
em nosso cena</li>
<li>Rotate (a tecla de atalho é E): Isso é usado para girar nosso objeto selecionado</li>
<li>Scale(a tecla de atalho é R): é usada para aumentar ou diminuir
o tamanho do nosso objeto</li>
</ul>
               <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem7.png') }}" alt="guia1" style="width:15%;">
				</figure>
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem8.png') }}" alt="guia1" style="width:75%;">
				</figure>
				<p style="margin-top:20px;"> <strong> Observação: </strong> A imagem está em 3D porque mesmo em 2D, ainda podemos mover objetos ao
longo do eixo Z.</p>
<p>Os botões de transformação Gizmo são usados para alternar a posição. Center irá posicionálos no centro do objeto, enquanto Local irá posicioná-los em relação à rotação do objeto.
Os alternadores são exibidos abaixo:</p>
<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem9.png') }}" alt="guia1" style="width:30%;">
				</figure>
			<p style="margin-top:20px;">O menu drop-down <strong> Layers </strong> é usada com a Scene View para escolher quais objetos queremos
ver na Scene View do editor de acordo com a layer, sendo muito ú􀆟 l quando estamos editando
um nível ou cena complicada, manter a organização é essencial. Nós o selecionamos clicando
no menu exibido abaixo:</p>
<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem10.png') }}" alt="guia1" style="width:25%;">
				</figure>
				<p style="margin-top:20px;">O menu drop-down Layout nos permite configurar o posicionamento dos painéis da interface
de acordo com nossa preferência. Dependendo da resolução e do tamanho de nossa tela,
podemos preferir um <strong> layout </strong> em vez de outro e, assim, devemos testar cada um clicando no
menu suspenso mostrado na imagem abaixo:</p>
<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem11.png') }}" alt="guia1" style="width:25%;">
				</figure>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
