@extends('layouts.template')
@section('titulo','Unit 33 | Criando um novo projeto 2D')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade33" data-etapa="novo_projeto">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow upper">Criando um novo projeto 2D</h5>
			<p>
			Agora criaremos nosso primeiro projeto 2D no Unity executando as seguintes etapas:
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem1.png') }}" alt="guia1" style="width:75%; margin: 0 auto;">
				</figure>
			</div>
			<p style="margin-top:20px;"><strong> 1. </strong> Vá para <strong> Project | New </strong> </p>
			<p><strong> 2. </strong> Para a criação do projeto - Insira um nome para o projeto em <strong> Project name </strong></p>
			<p><strong> 3. </strong> No menu Template você encontrará modelos base para seu projeto, selecione <strong> 2D </strong> </p>
			<p><strong> 4. </strong> Em Location selecione o local, em seu computador, onde gostaria de salvar o arquivo do seu
novo projeto, digitando-o diretamente na caixa de texto ou encontrando-o através do botão
de navegação [...].</p>
            <p><strong> 5. </strong> Clique no botão <strong> Create </strong> para criar seu projeto.</p>
			<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem2.png') }}" alt="guia1" style="width:65%;">
			</figure>
			<p style="margin-top:20px;">A captura de tela a seguir mostra o que veremos na tela:</p>
			<figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem3.png') }}" alt="guia1" style="width:65%;">
			</figure>
			<p>Depois de criar nosso novo projeto 2D, também podemos alternar a visualização de 3D para
2D e vice-versa. Sempre que desejarmos fazer isso, basta clicar em 2D na barra de controle
Scene View, como mostrado na imagem a seguir:</p>
            <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem4.png') }}" alt="guia1" style="width:65%;">
			</figure>
			<p style="margin-top:20px;">Podemos selecionar 2D antes de criar nosso novo projeto ou a qualquer momento depois de
tê-lo criado indo para <strong> Edit >Project Setting </strong>. Isso abrirá a barra de ferramentas de Confi gurações
do Editor na guia <strong> Inspetor </strong>, que por padrão é no lado direito do programa.</p>
<p>Podemos selecionar o modo 2D selecionando 2D dentro do Caixa suspensa <strong> Default Behavior
Mode </strong> padrão, conforme mostrado na seguinte imagem:</p>
            <figure>
					<img src="{{ asset('assets/img/games_and_animation/unity/unit33/imagem5.png') }}" alt="guia1" style="width:65%;">
			</figure>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
