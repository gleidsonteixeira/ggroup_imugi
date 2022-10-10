@extends('layouts.template')
@section('titulo','Unit 17 |  PARALLAX')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade17" data-etapa="parallax">
			<h3 class="barlow">UNIT 17</h3>
			<h5 class="barlow upper">PARALLAX</h5>
			<h5>AULA 17 - EFEITO PARALLAX</h5>
			<p>
				Parallax é um efeito de movimentação de cena ou cenário, onde objetos que estão ao fundo da cena tem um movimento mais lento que os objetos em primeiro plano.
				Esse efeito cria uma espacialidade no cenário gerando uma profundidade realista.
			</p>
			<p>
				Levando em consideração este efeito e os capítulos passados de animação de personagem, componha e crie uma animação de personagem e cenário de forma que tudo tenha movimento e fluidez.
			</p>
			<h5>ATIVIDADES</h5>
			<ol class="unidade_6_5">
				<li>Dividir cenário do personagem da aula anterior em várias camadas e níveis de distanciamento para animar o cenário adicione detalhes de movimento espacial e detalhes em cena.</li>
			</ol>
			<h5>AULA 18 - DISPLACEMENT MAP</h5>
			<p>
				O efeito deslocar o mapa distorce uma layer, deslocando pixels horizontalmente e verticalmente com base nos valores de cor dos pixels na camada de controle especificada pela propriedade displacement map.
				O tipo de distorção criado pelo efeito do displacement map pode variar muito, dependendo da layer de controle e das opções selecionadas.
			</p>
			<p>
				O deslocamento é determinado a partir dos valores de cor do displacement map. Os valores de cores variam de 0 a 255. Cada valor é convertido em uma escala variando de -1 a 1.
				O valor do deslocamento é calculado multiplicando o valor convertido pelo valor máximo de deslocamento que você especificou. Um valor de cor de 0 produz deslocamento negativo máximo (-1
				* deslocamento máximo). Um valor de cor de 255 produz um deslocamento positivo máximo. Um valor de cor de 128 não produz deslocamento.
			</p>
			<p>
				O efeito usa a layer de controle especificada pelo deslocamento Map Layer, sem considerar nenhum efeito ou mask. Se você quiser usar a layer de controle com seus efeitos, terá de
				precompor essa layer. Se a layer de controle não tiver o mesmo tamanho que a layer ao qual o efeito é aplicado, essa layer é centralizada, esticada ou fica em mosaico, dependendo da
				configuração do comportamento do displacement map.
			</p>
			<p>
				Selecione expandir saída para permitr que os resultados do efeito se estendam para além dos limites originais da layer a que é aplicada. Selecione Wrap Pixels Around para copiar pixels
				deslocados para fora dos limites da camada original para o lado oposto da clayer, ou seja, pixels do lado direito aparecem no lado esquerdo, e assim por diante.
			</p>
			<h5>ATIVIDADES</h5>
			<ol class="unidade_6_5">
				<li>Pegar um rosto de uma pessoa ou personagem de pintura para criar uma animação focando no movimento facial.</li>
			</ol>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

@endsection
