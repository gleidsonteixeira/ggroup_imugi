@extends('layouts.template')
@section('titulo','Unit 38 | Scenes')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade38" data-etapa="scenes">
			<h3 class="barlow">UNIT 38</h3>
			<h5 class="barlow upper">Scenes</h5>
            <p>Uma scene/cena é criada para organizar e mover o bjetos em um espaço tridimensional. Como
a tela do visualizador é bidimensional, deve haver uma maneira de capturar uma visualização
e "achatá-la" para exibição. Isso é feito usando câmeras .</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit38/imagem01.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">
Uma câmera é um objeto que defi ne uma visualização no espaço da cena. A posição do objeto
defi ne o ponto de vista, enquanto os eixos para frente (Z) e para cima (Y) do objeto defi nem a
direção da vista e o topo da tela, respectivamente.
</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit38/imagem02.png') }}" alt="guia1" style="width:55%;">
</figure>

<p style="margin-top:20px;">O componente Camera também defi ne o tamanho e a forma da região que se enquadra na
visualização. Com esses parâmetros confi gurados, a câmera pode exibir na tela o que está
“vendo” no momento. Conforme o objeto da câmera se move e gira, a visualização exibida
também se move e gira de acordo.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit38/imagem03.png') }}" alt="guia1" style="width:45%;">
</figure>

<h5 class="barlow upper" style="margin-top:20px;">Criando e salvando uma Scene</h5>

<p>Para armazenar os recursos visuais das fa ses que você vai criar, mantenha
a boa prática de criar uma cena logo no início do desenvolvimento.</p>
<p>Na janela <strong> Hierarchy </strong> clique com o botão direito sobre sua scene atual,
e selecione a opção <strong> save scene </strong>.</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit38/imagem04.png') }}" alt="guia1" style="width:45%;">
</figure>

<p style="margin-top:20px;">
Na sua pasta de projetos, clique duas vezes em Scenes e escreva o nome se sua nova cena.
</p>

<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit38/imagem05.png') }}" alt="guia1" style="width:65%;">
</figure>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit38/imagem06.png') }}" alt="guia1" style="width:65%;">
</figure>
<p style="margin-top:40px;">Na janela Project você pode visualizar a scene/cena que foi criada.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit38/imagem07.png') }}" alt="guia1" style="width:65%;">
</figure>

</div>
</div>

</main>

<script>
	activeMenu();
</script>

@endsection
