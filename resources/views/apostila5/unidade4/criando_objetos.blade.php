@extends('layouts.template')
@section('titulo','Unit 4 | Criando Objetos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade4" data-etapa="criando_objetos">
			<h3 class="barlow">UNIT 4</h3>
			<h5 class="barlow upper">Aula 1 – Criando Objetos</h5>
			<div class="container">
				<p>
					Os objetos que podemos inserir pela barra de atalhos são apenas bases para as formas
					que vamos desenvolver, pois a representação de qualquer forma começa com a identificação
					do que se planeja modelar. Isso pode parecer difícil no começo mas é necessário. Até agora
					você só conhece as palavras como formas claras de representar o seu mundo, agora vamos
					modelar algumas formas básicas a partir de um quadrado.
				</p>
				<p>Usando a barra de atalhos rapidos ensira um cubo.</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit4/imagem_unit4_04.png') }}" alt="guia4">
					</figure>
				</div>
				<p>
					Usando a ferramenta de redimensionamento podemos fazer um reescalonamento geral
					mudando todo o tamanho do objeto nos 3 eixos presentes, mas não poderemos representar
					muitos objetos assim. Nós podemos ativar alterações específicas selecionando qualquer um
					dos eixos clicando sobre o eixo representado por ele. Observe que você não deve clicar no
					marcador da ponta do eixo, e sim sobre o próprio eixo. Podemos representar caixas, ônibus,
					entre outras formas que usam como base um quadrado. Porém, ainda não podemos aplicar as
					características fundamentais da forma.
				</p>
				<p><b>Zoon in, zoon out</b></p>
				<p>
					Como já foi visto, nós temos 4 botões na janela <b>View</b>, são eles: <b>zoon in</b> e <b>out</b>, <b>rotacionar</b>,
					<b>mover e posições de tela.</b>
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit4/imagem_unit4_05.png') }}" alt="guia5">
					</figure>
				</div>
				<br>
				<p>
					Agora vamos nos concentrar nos atalhos, para isso vamos precisar levar em consideração
					duas ferramentas, teclado e mouse, usaremos combinações de teclas, a coisa mais comum em
					um ambiente tridimensional e objetos é perder o seu material e não conseguir mais encontrar.
					Isso pode acontecer pelos mais diversos motivos, mas você pode resolver isso facilmente ativando o <b>zoon in</b> e <b>out</b> pelo mouse, 
					simplesmente rolando o scrooler para frente e para traz.
					No começo é difcil de compreender pois o zoom vai respeitar a posição do mouse na tela, se
					você estiver com o objeto selecionado e quiser ir de uma vez para perto dele, deve pressionar
					a tecla “S” no teclado, isso vai fazer o seu objeto selecionado ocupar toda a tela.
				</p>
				<p>
					Mas como isso vai resolver o problema de me perder? Fácil, quando você pressiona
					<b>CTRL+”A”</b>, todo e qualquer objeto inserido no seu ambiente será selecionado, 
					só precisa selecionar o seu objeto desaparecido usando o atalho citado e pressionar a tecla “S”.
				</p>
				<p><b>Rotacionar</b></p>
				<p>
					Rotacionar os objetos ou nossa posição em relação a ele causa resultados diferentes, os
					atalhos estão disponíveis na janela <b>View</b>. Porém, quando precisar pode escolher qual parte
					da tela você quer que rotacione, posicione o ponteiro sobre a parte que você quer mudar
					a posição, pressione <b>Alt+clic com o botão esquerdo</b>, ao mover o mouse você var perceber
					detalhes com maior precisão do que usando os botões da janela view. Em relação ao objeto é
					necessário usar a ferramenta rotate, que também pode ser ativada pelo teclado pressionando
					<b>“R”</b>.
				</p>
				<p>
					Também é possível fazer essas alterações pela caixa de propriedades, onde você pode
					preencher com precisão e rotação necessárias. As mesmas alterações sobre mudança de forma podem ser feitas no painel.
				</p>
				<div class="esquerda">
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit4/imagem_unit4_06.png') }}" alt="guia6">
					</figure>
				</div>
				<div class="clear"></div>
				<p>
					<b>Obs:</b> Toda vez que você for efetuar uma modificação de rotação no objeto isso vai ser descrito em números próximo ao objeto.
				</p>
			</div>
        </div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
