@extends('layouts.template')
@section('titulo','Unit 17 | Animação engine II Reativos')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade17" data-etapa="animacao_engineReativos">
			<h3 class="barlow">UNIT 17</h3>
			<h5 class="barlow upper">Aula 1 – Animação engine II Reativos</h5>
			<p>
				Objetos podem interagir entre si, por isso existem físicas diferentes para cada um. 
				Podemos configurar atribuições e níveis de ação entre os objetos envolvidos na ação, como quanto
				atrito terá o toque entre duas superfícies, o grau de maleabilidade de um material como tecido, 
				podemos reproduzir até propriedades avançadas como tranparências e diferenciar tipos
				de refração da luz.
			</p>
			<p>
				Vamos aprofundar nosso conhecimento sobre esses modificadores que podem ser inseridos através do painel objetos, 
				clicando com o botão esquerdo sobre o que deseja aplicar a
				propriedade <b>note</b>, sempre que fizer isso será adicionado uma tag ou etiqueta ao lado da representação do objeto cuja 
				propriedade foi adicionada, para ter acesso as configurações da tag
				deve clicar sobre ele no painel objetos, tendo isso em mente vamos usar o carrinho produzido
				em aulas anteriores, ele já possui uma série de elementos que precisamos compreender melhor.
			</p>
			<p><b>Relação entre animações e propriedades</b></p>
			<p>
				As propriedades das tags do seu carro representam todas as propriedades existentes nele,
				click sobre <b>connection</b> no painel <b>object properties</b> e em <b>type</b> mude para <b>wheels suspension</b>, as
				propriedades serão alteradas a a partir de agora, o conector vai imitar um amortecedor, dando play
				na sua timeline já podemos observar um comportamento diferente por parte desse conector.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit17/imagem_unit17_1.png') }}" alt="guia1">
				</figure>
			</div>
			<p>
				Agora podemos configurar o comportamento da suspensão, temos a disposição em <b>object
				properties</b> a opção <b>agnore collisions</b>, para neutralizar colisão com os objetos que compõem
				a própria forma, essa opção deve estar ativada. <b>Seterring angle</b>, externar o objeto conectado
				no ângulo descrito, usando em parceira com a timeline podemos dirigir nosso carro para uma
				direção diferente da que foi originalmente descrita como linear.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit17/imagem_unit17_2.png') }}" alt="guia1">
				</figure>
			</div>
			<p>
				Suspension ret position define a partir de que posição deseja neutralizar o movimento da
				suspenção, números maiores que 0 farão o veículo ficar embaixo do eixo, números negativos
				o mantêm acima, suspension stiffness é o nível de ação da suspensão e suspension damping
				o grau de dureza da sua suspensão, quanto mais alto mais rígido. Experimente números novos
				para entender o funcionamento desses recursos, da mesma forma podemos alterar outras
				propriedades como motor e as atribuições físicas do objeto, click sobre a tag dinamic body do
				seu cilindro no painel objetos, em object properties selecione a opção collision e configure
				na opção friction para 100, fazendo isso sua rotação será completamente transformada em
				movimento.
			</p>
			<p><b>Ações em cadeia</b></p>
			<p>
				Para entender isso crie em uma arquivo separado uma roda e em um novo arquivo modele e
				texturize um chaci de carro, use plantas baixas e recursos de modelagens ensinados em aulas
				anteriores.
			</p>
			<p>
				Traga a roda para o arquivo do chaci usando <b>file open marge</b>. Não mude a roda de posição,
				atribua a roda um <b>connection</b> e depois converta o tipo desse conector para <b>wheelsuspension</b>.
				Mude os nomes dos objetos clicando duas vezes sobre seu nome no painel objetos, defina
				o chaci como <b>object “A”</b> e a roda como <b>object “B”</b> para falicitar sua comprenção, adicione
				também um motor e coloque como <b>object “A”</b>, o cilindro que representa a roda, feito isso
				posicione a roda em seu devido lugar. 
			</p>
			<p>
				Agora no painel objetos selecione todos os itens que compõe a roda, o cilindro usado,
				conector e motor, arraste antes de soltar e pressione o <b>CTRL</b>, isso cria uma cópia no painel
				objetos, você só precisa mudar as posição dos objetos para o lugar de uma das outras rodas
				que falta, posteriormente reproduza o processo de cópia com as duas rodas exitentes e monte
				o restante do seu carro, agora vamos organizar a bagunça. 
			</p>
			<p>
				No painel objetos click sobre todos os ítens que compõem todas as suas rodas, mantenha
				o click pressionado e arraste para cima da estrutura do chaci, fazendo isso está dizendo que
				todos esses objetos são partes integrantes desse corpo, isso determina o nível de prioridade
				e interação. Toda propriedade que for atribuída agora ao cubo usado para fazer o carro será
				aplicada em todos os objetos contidos nele.
			</p>
			<p>
				Click sobre o chaci com o botão direito e atribua um <b>simulation tag</b> para <b>rigid body</b>, assim
				atribuímos física ao nosso carro, salve seus arquivos para aulas posteriores. Organização ajuda
				muito na hora de encontrar seus projetos, use nomes criados por você, pode parecer insignicante, 
				mas esse simples ato pode duplicar a sua velocidade de execução e mudar a organização
				do seu computador. Computador saudável, mente saudável.
			</p>
			<p><b>Ações em cascata</b></p>
			<p>
				Ação em cascata é quando as animações dependem da ação entre objetos diferentes,
				como o movimento de rotação e translação dos astros, onde temos um corpo que roda em
				torno de si e em volta de outro corpo. 
			</p>
			<p>
				Crie 3 esferas, uma para o sol, uma para Terra e outra para a lua. 
				Para atribuir um parentesco entre dois corpos não conectados click sobre o corpo com o botão esquerdo do mouse, vá
				até o menu <b>character</b> e em <b>commands</b> click sobre a opção <b>set parent</b>, feito isso é só clicar
				sobre o corpo que vai ser o pivô do seu movimento. Para que isso seja realizado com precisão,
				você deve tomar cuidado com qual objeto deve ser selecionado antes de aplicar parentesco, é
				o que irá seguir o objeto selecionado depois de ativar o parentesco, o primeiro elemento segue
				o segundo elemento. Selecione a lua, atribua o parentesco e click sobre a Terra, o mesmo para
				que a terra se mova com o sol.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
