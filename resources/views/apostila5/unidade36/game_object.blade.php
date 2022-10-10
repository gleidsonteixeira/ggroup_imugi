@extends('layouts.template')
@section('titulo','Unit 36 | GameObjects')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade36" data-etapa="game_object">
			<h3 class="barlow">UNIT 36</h3>
			<h5 class="barlow upper">GameObjects</h5>
				<p style="margin-top:20px;">GameObjects são os objetos fundamentais no Unity, eles representam personagens, adereços
e cenários. Não realizam muito por si próprios, mas atuam como recipientes para Componentes,
que implementam sua real funcionalidade.</p>
<p>Um GameObject sempre tem um componente <strong>Transform </strong> anexado (para representar a posição
e orientação) e não é possível removê-lo. Os outros componentes que fornecem ao objeto
sua funcionalidade podem ser adicionados a partir do menu <strong> Component </strong> do editor ou de
um script. Existem também muitos objetos pré-construídos úteis (formas primitivas, câmeras,
etc.) disponíveis no menu <strong> GameObject </strong> .</p>
<h5 class="barlow upper">Criando um GameObject</h5>
<p>Para criar um <strong> GameObject </strong> clique em GameObject no menu principal e selecione até a opção
<strong> Create Empty </strong>, podemos também usar o atalho ctrl+ shift + n ou clicar com botão direito
na janela e <strong> Hierarchy </strong> e selecionar a opção <strong>Create Empty </strong>, assim você terá o seu primeiro
GameObject.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit36/imagem01.png') }}" alt="guia1" style="width:55%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Modificando propriedades de GameObject</h5>
<p>O GameObject é um objeto no Editor do Unity que contém componentes. Os componentes
definem o comportamento desse GameObject.</p>
<p>Agora vamos visualizar e interagir com componentes e fornece uma breve visão das configurações
de componentes mais comuns no Unity.</p>
<p>Para visualizar os componentes de um GameObject, selecione o GameObject na Scene/cena
ou na <strong> janela de hierarchy </strong>, então veja a <strong> janela Inspector </strong> para ter acesso a uma lista de todos
os componentes e suas configurações, sendo que você pode interagir com os componentes
diretamente no Editor ou por meio de script.</p>
        </div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
