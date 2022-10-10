@extends('layouts.template')
@section('titulo','Unit 6 | Criando Objetos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade6" data-etapa="criando_objetos">
			<h3 class="barlow">UNIT 6</h3>
			<h5 class="barlow upper">Aula 1 – Criando objetos simples: círculos, quadrados e triângulos.</h5>
			<div class="container">
				<p>
					<u>Porque o programa nos disponibiliza uma série de formas básicas</u>? As estruturas básicas
					do desenho ou o esborço, permite que você planeje o objeto a ser modelado. Vamos criar
					algumas estruturas usando as outras formas básicas, tudo merece atenção por mais simples
					que pareça. Podemos inserir um cilindro, torná-lo editável e alterar somente sua base ou seu
					todo criando copos, garrafas, tvs, computadores, todos são objetos simples e de fácil execução
					com essa técnica. 
				</p>
				<p>
					<b>DICA: Model mode</b> - Dentro do modo de edição todas as nossas ferramentas de seleção
					são funcionais, ligadas as ferramentas de interação, se estiver em face select ele vai mover,
					expandir ou rotacionar especificamente a face ou área selecionada.

				</p>
				<p><b>Seleção em model mode, vertices, linhas e faces</b></p>
				<p>
					Dentro do <b>model mode</b> podemos usar algumas ferramentas com maior versatilidade
					como a ferramente de seleção livre, na barra de atalhos. Na hora de realizar multiseleções em
					grandes áreas executando de maneira bem simples a seleção do que se precisa, sejam vertices, faces ou pontos, 
					as ferramentas se relacionam e se modificam dependendo das condições
					do objeto. 
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit6/imagem_unit6_05.png') }}" alt="guia1">
					</figure>
				</div>
				<p>
					Já sabemos que ele pode entrar em <b>edite mode</b> onde é possível editá-lo e por tanto, a
					seleção só funciona sobre esse objeto, ou que você precisa selecionar o objeto pra ativá-lo
					com <b>macke editable</b>, antes disso será impossível subdividir ou editar individualmente suas
					áreas. 
				</p>
				<p><b>Extrude - extrusão</b></p>
				<p>
					É um comando que permite criar uma nova área ou setor a partir de uma região selecionada. 
					Na natureza a extrusão é o fluxo <b>PyroCluster</b> (um vulcão), no nosso caso extrusão vai
					ser uma ferramenta muito usada para modelagem, permitindo criar uma região usando como
					base uma outra superfície, prática e rápida, muito útil para criar formas sem variação ou a
					partir de uma planta-baixa, principalmente quando o trabalho de planejamento do trabalho
					é bem feito.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit6/imagem_unit6_06.png') }}" alt="guia1">
					</figure>
				</div>
				<p>
					Vamos criar usando agora as subdivisões e extrusão dos objetos, como fizemos no último
					exercício, mas dessa vez faremos todos os detalhes possíveis, explorando os recursos citados
					na aula.
				</p>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
