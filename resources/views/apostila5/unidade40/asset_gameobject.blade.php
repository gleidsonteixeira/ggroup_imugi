@extends('layouts.template')
@section('titulo','Unit 40 | Atribuindo o asset ao GameObject')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade40" data-etapa="asset_gameobject">
			<h3 class="barlow">UNIT 40</h3>
			<h5 class="barlow upper">Atribuindo o asset ao GameObject</h5>
            <p>Agora que importamos o asset que gostaríamos de usar e definimos todas as configurações
que gostaríamos de usar para ele, podemos atribuir o asset a um GameObject para que possamos usá-lo dentro do jogo .</p>
<p>Depois que um asset é atribuído a um GameObject, podemos então visualizar e manipulá-lo
no Inspector e na Visualização da cena, bem como visualizar o resultado final dentro do play
mode/visualização do jogo.</p>
<p>Para converter nosso asset em um GameObject, existem duas maneiras: o método da toolbar
/barra de ferramentas e o método alternativo rápido.</p>
<h5 class="barlow upper">Método: Barra de ferramentas</h5>
<p>A primeira maneira é selecionar a caixa suspensa GameObject na barra de ferramentas superior acessando GameObject > Sprite.</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem01.png') }}" alt="guia1" style="width:35%;">
</figure>
<p style="margin-top:40px;">Clicamos em Sprite porque estaremos trabalhando com sprites para
criar uma imagem na cena.</p>
<p>O GameObject que acabamos de criar estará vazio na Scene View,
conforme mostrado na seguinte captura de tela:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem02.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Você pode nomear o GameObject e movê-lo; no entanto, ainda não tem <strong>aparência visual</strong>.</p>
<p>Precisamos atribuir o asset sprite que criamos ao GameObject clicando no círculo ao lado de
Sprite, conforme mostrado na imagem a seguir:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem03.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Depois de clicar no círculo, obteremos a caixa Selecionar Sprite.</p>
<p>Na guia <strong>assets</strong>, podemos encontrar e selecionar nosso ativo, conforme mostrado na seguinte
captura de tela:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem04.png') }}" alt="guia1" style="width:55%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Método alternativo</h5>
<p>Outra alternativa para atribuir o sprite é arrastar o sprite do Navegador de project e soltá-lo na
caixa Sprite um pouco antes do círculo, conforme mostrado na imagem a seguir:</p>
<figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem05.png') }}" alt="guia1" style="width:55%;">
</figure>
<h5 class="barlow upper" style="margin-top:20px;">Dica</h5>
<p>A maneira mais rápida e simples de criar um Sprite GameObject é simplesmente arrastar o
 asset sprite Navegador de projeto para a scene view.</p>
 <figure>
	<img src="{{ asset('assets/img/games_and_animation/unity/unit40/imagem06.png') }}" alt="guia1" style="width:55%;">
</figure>
<p style="margin-top:20px;">Como você pode ver, o ponto âncora de pivô centralizado que definimos durante o estágio de
confi gurações de importação de asset agora é exibido e, se alterarmos o pivô, o ponto âncora
será atualizado na Scene View. Agora podemos mover o GameObject e sua imagem na Scene
View a partir do seu centro.</p>


</div>
</div>
</main>

<script>
	activeMenu();
</script>

@endsection
