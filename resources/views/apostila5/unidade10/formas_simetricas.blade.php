@extends('layouts.template')
@section('titulo','Unit 10 | Formas Simétricas')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade10" data-etapa="formas_simetricas">
			<h3 class="barlow">UNIT 10</h3>
			<h5 class="barlow upper">Aula 1 – Formas simétricas - Estrutura animal</h5>
			<div class="container">
				<p>
					Todos os animais presentes nesse mundo compartilham um sistema corporal conhecido
					como <b>tetrapode pentagonal semi simétrico</b>.
				</p>
				<p>
					<b>Tetrapode</b> porque temos um corpo baseado em um tronco que serve de base para o
					desenvolvimento de apêndices, os dois braços, pernas e cabeça fazem de nós seres pentagonais.
				</p>
				<p>
					<b>Semi simétrico</b> porque um lado parece ser igual a outro, mas não somos exatamente
					iguais dos dois lados, possuímos mudanças estruturais e sistemas que são encontrados
					apenas de um lado devido a biologia natural ou ao uso maior um dos lados do corpo, não
					é exatamente simétrico, só muito parecido.
				</p>
				<p><b>Corpo Humano</b></p>
				<p>
					Para modelar um corpo humano use uma planta baixa, da última vez nossa planta só tinha
					uma posição, superior ou corte superior. Para falicitar nossa modelagem vamos configurar
					duas janelas do HUD para exibir cortes diferentes, dê preferência ao frontal ao lateral, mas
					vamos modelar apenas um lado da forma.
				</p>
				<p>
					Crie um cubo e use a ferramenta <b>kinife</b>, dessa vez queremos um corte em todo o objeto,
					pressione <b>“K”</b> e em seguida a letra <b>“L”</b> habilitando <b>kutline</b>, permitindo fazer um corte em todo
					o objeto. Realize um corte e posicione o mesmo no centro do eixo <b>X</b> do objeto, apague umas
					das duas laterais e todas as faces que compõem um dos lados, direito ou esquerdo, o lado que
					sobrou vai ser modelado até que seja construído por inteiro
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit10/imagem_unit10_1.png') }}" alt="guia1">
					</figure>
				</div>
				<p>
					Modele com calma e cuidado todos os detalhes, criar os corpos de seus personagens pode
					parecer fácil a princípio, mas só a prática fará o trabalho se tornar simples, por isso é importante repetir esse processo. 
					Explore outras formas além da humana, faça um animal quadrupede, ave, peixe, réptil ou simiesco, domine a técnica. 
				</p>
				<p>
					Quando tiver modelado completamente um dos lados, vamos aplicar um modificador
					chamado <b>mirror</b>, que nos permitirá criar o lado oposto com um click. Selecione seu lado feito
					e depois selecione a ferramenta <b>mirror</b>, com o auxílio do professor crie o lado oposto ao que
					você já modelou.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit10/imagem_unit10_2.png') }}" alt="guia2">
					</figure>
				</div>
				<p>
					Se depois de criar a duplicação da segunda parte forem feitas alterações exclusivas em um
					dos lados, isso dará uma riqueza de detalhes ao seu trabalho, permitindo maior imersão do
					espectador, quando seu corpo estiver pronto salve no bureau. 
				</p>
				<p><b>Estruturas rígidas e pontos de movimento em corpos orgânicos</b></p>
				<p>
					Quando criamos corpos esperamos que eles tenham algum movimento, logo precisamos
					dizer ao computador onde estão as partes móveis ou articuláveis. Existem duas fomas específicas e diferentes, 
					objetos diferentes que se conectam e podem se mover desde rígidos como
					portas e paredes, aos flexíveis como corpos e superfícies moles.
				</p>
				<p>
					Vamos criar um objeto simples como um cilindro, tranforme o mesmo em um objeto
					editável e crie algumas seções cortando a forma deixando ela bem alongada, essa técnica
					pode ser usada para desenhar todos os tipos de corpos articuláveis. Tendo criado nosso corpo
					precisamos posicionar os ossos, descrevendo assim os pontos de nossas futuras ações. 
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit10/imagem_unit10_3.png') }}" alt="guia3">
					</figure>
				</div>
				<p>
					No menu <b>character</b>, da barra de menu principal procure a opção <b>join tool</b>, 
					essa ferramenta permite criar os pontos de articulação e partes rígidas, para definir a primeira parte click
					onde seria o início de nossas estruturas, pressione a tecla <b>“CTRL”</b> e os próximos clicks difinirão
					os pontos de movimento do corpo e os espaços entre eles e as partes rígidas, quando tiver
					terminado de criar todos os pontos de articulação, no painel objetos selecione todos os ossos
					e a forma que deseja criar um parentesco.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit10/imagem_unit10_4.png') }}" alt="guia4">
					</figure>
				</div>
				<p>
					Novamente no menu <b>character</b> no submenu <b>commander</b>, com todos os ossos selecionas
					e formas selecionados click no opção <b>blinder</b>, agora para realizar movimento no corpo selecione um dos ossos, 
					isso pode ser feito pela área de trabalho 3D, ou pelo painel objetos, use
					a ferramenta rotacionar e aplique uma pequena torção, se tudo tiver certo seu modelo deve
					acompanhar o movimento aplicado a estrurura do objeto.
				</p>
				<div>
					<figure>
						<img src="{{ asset('assets/img/games_and_animation/unit10/imagem_unit10_5.png') }}" alt="guia5">
					</figure>
				</div>
				<p><b>Relação entre esqueletos e mesh</b></p>
				<p>
					Anteriormente falamos sobre planejar o objeto, no caso estamos desenvolvendo corpos
					que vão se articular conforme suas configurações, mas existem outros recursos para desenvolver nosso personagem. 
					Faça os ossos e distribua no corpo que você está modelando, faça a
					inserção dos ossos, posicione-os e somente quando estiver com todo esqueleto pronto, com
					o corpo e os ossos selecionados vá até o menu <b>character</b> e no submenu <b>command</b> click na
					opção <b>blind</b>, isso irá relacionar o corpo do seu personagem ao esqueleto criado.
				</p>
				<p>
					Essa forma permite que você crie seus próprios corpos, dando exclusividade ao trabalho.
					Selecionando a ferramenta <b>rotation click</b> sobre o osso realize uma rotação em qualquer osso,
					se tiver êxito o mesh acompanhará o movimento dos ossos.
				</p>	
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
