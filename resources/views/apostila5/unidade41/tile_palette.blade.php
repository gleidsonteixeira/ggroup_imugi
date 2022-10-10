@extends('layouts.template')
@section('titulo','Unit 41 | Tile Palette')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade41" data-etapa="tile_palette">
			<h3 class="barlow">UNIT 41</h3>
			<h5 class="barlow upper">Tile Palette</h5>
            <p>Ao usar o sistema Tilemap, você provavelmente usará a ferramenta Tile Palette para ajudar na
criação, modifi cação ou edição de Tilemaps. Na Tile Palette, existem várias ferramentas para
ajudá-lo neste processo.</p>
<p>Abra a janela Tile Palette indo em  <strong> Window > Tile Palette </strong> em seu projeto.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem01.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Da esquerda para a direita, vamos conhecer as ferramentas da janela Tile Palette</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem02.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;"><strong>Selection</strong>: Permite selecionar um tile na janela Paleta de tiles para ver as
configurações do tile. <img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem03.png') }}" alt="guia1" style="width:50px; display:inline;"></p>
<p><strong>Move</strong>: Permite mover os tiles pela visualização da cena. <img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem04.png') }}" alt="guia1" style="width:50px; display:inline;"></p>
<p><strong>Brush</strong>: Permite pintar na Scene com o tile selecionado na janela Tile Palette. <img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem05.png') }}" alt="guia1" style="width:50px; display:inline;"></p>
<p><strong>Fill Selection</strong>: permite definir uma área a ser preenchida com um Tile selecionado. <img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem06.png') }}" alt="guia1" style="width:50px; display:inline;"></p>
<p><strong>Tile Sampler</strong>: permite que você selecione tiles da cena; funciona como qualquer conta-gotas
em sotware de manipulação de imagens. <img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem07.png') }}" alt="guia1" style="width:50px; display:inline;"></p>
<p> <strong>Eraser</strong>: apaga os tiles na visualização da Scene. <img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem08.png') }}" alt="guia1" style="width:50px; display:inline;"></p>
<p> <strong>Fill</strong>: Permite que você preencha uma área com um tile selecionado sem ter que definir a área
que deseja preencher. Ele funciona preenchendo todos os quadrados de grade vazios adjacentes,
então é melhor usado para áreas cercadas por outros tiles existentes. Se você não tiver
cuidado, pode preencher a cena inteira com o tile selecionado, o que pode sobrecarregar o
computador. <img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem09.png') }}" alt="guia1" style="width:50px; display:inline;"></p>
<p>Há mais um botão nesta janela: a lista suspensa Active Tile Palette. Isso permite que você selecione
uma paleta de tiles existente ou crie uma nova.</p>
<p>Selecione <strong>Active Tilemap</strong> e selecione <strong>Create New Tile Palette</strong>. Ou selecione uma tile palette
pré-existente.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem10.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Dê um nome à sua nova palette/paleta. Isso criará uma nova tile palette para você usar.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit41/imagem11.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">O menu suspenso <strong>Active Tilemap</strong> determina em qual dos Tilemaps você está pintando.</p>
<p>Quando você tem vários Tilemaps em sua cena, é importante ficar de olho naquele que você
está trabalhando no momento. Não fazer isso pode causar problemas como a sobreposição de
tiles ou tiles que não são animados corretamente.</p>
<p>A tile palette possui mais alguns recursos a serem observados: Selected Palette
e <strong>Default Brush</strong>.</p>
<ul>
    <li>Use a <strong> Selected Palette </strong> para escolher qual Paleta de tiles você deseja usar / editar.</li>
    <li>O <strong>Edit Button</strong> é uma alternância para editar sua tile palette.</li>
    <li><strong>Default Brush</strong> é um menu suspenso que permite escolher entre uma variedade de
pincéis para pintar sua cena.</li>
</ul>


</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
