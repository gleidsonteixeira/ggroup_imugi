@extends('layouts.template')
@section('titulo','Unit 39 | Sprite Creator')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade39" data-etapa="sprite_creator">
			<h3 class="barlow">UNIT 39</h3>
			<h5 class="barlow upper">Sprite Creator</h5>
            <p>Com esta ferramenta você cria um sprite placeholder/imagem o u forma temporária 2D. Você
pode usá-los em seu projeto durante o desenvolvimento e, em seguida, substituí-los pelas
imagens que deseja usar.</p>

<h5 class="barlow upper">Acessando o Sprite Creator</h5>
<p>Selecione <strong> Assets>Create>Sprites </strong> e selecione o sprite placeholder que deseja fazer (quadrado,
triângulo, diamante, hexágono ou polígono).</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem02.png') }}" alt="guia1" style="width:65%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Usando o Sprite</h5>
<p>Seu novo sprite placeholder aparece como uma forma branca na pasta de assets que você
abriu no momento.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem03.png') }}" alt="guia1" style="width:65%;">
</figure>
<p style="margin-top:20px;">O nome do novo sprite é padronizado para o nome da forma, mas você tem a opção de renomear
seu sprite quando ele é criado pela primeira vez. Se você não tiver certeza de como
deseja chamá-lo, deixe-o como o padrão; você pode alterá-lo mais tarde clicando nele.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem04.png') }}" alt="guia1" style="width:75%;">
</figure>
<p style="margin-top:20px;">Nomeie seu novo sprite (ou deixe-o como padrão)</p>
<p>Você pode arrastar e soltar seu sprite/placeholder na Scene View, ou no painel hierarchy , para
começar a usá-lo em seu projeto.</p>
<div class="metade esquerda">
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit39/imagem05.png') }}" alt="guia1" style="width:75%;">
</figure>
</div>
<div class="metade direita">
<p>Para alterar o sprite que você colocou
na cena, clique nele na Scene View e, a
seguir, edite através do Sprite Renderer
Component no Inspetor.</p>
<p><strong> Editando o campo Sprite</strong>: Você pode clicar
no pequeno círculo à direita do campo
de entrada para abrir o Seletor Sprite,
onde você pode navegar e selecionar a
partir de um menu de assets gráficos
2D disponíveis.</p>
</div>

</div>
</div>

</main>

<script>
	activeMenu();
</script>

@endsection
