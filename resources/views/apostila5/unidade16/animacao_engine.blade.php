@extends('layouts.template')
@section('titulo','Unit 16 | Animação engine')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade16" data-etapa="animacao_engine">
			<h3 class="barlow">UNIT 16</h3>
			<h5 class="barlow upper">Aula 1 – Animação engine</h5>
			<p>
				Para execução em tempo real, podemos aplicar propriedades físicas a objetos e configurá-los
				pra reagir de forma específica. Vamos dar atenção aos recursos de <b>Animação engine</b>, onde os
				objetos são animados apenas por suas propriedades, usaremos conexões e vamos configurar
				para resultados como: <b>mover, amortecer ou aplicar força</b>.
			</p>
			<p>
				Criaremos um carrinho a partir de um cilindro. Tranformando em objeto editável crie as
				rodas, um eixo central e um cubo, modele da mesma forma para que se torne uma caçamba
				que irá conectar as duas rodas. 
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit16/imagem_unit16_1.png') }}" alt="guia1">
				</figure>
			</div>
			<p>
				Seja prático, depois de ter criado os dois objetos vá até o menu <b>simulate</b> click e na opção
				<b>dinamic</b> adicione um <b>conect</b> e um <b>motor</b>, note que os mesmos se tornam visíveis no painel
				objetos, mas eles não existem na área de edição 3D a menos que esteja selecionado, então
				sempre que necessário, vamos usar o menu objeto para selecionar as simulações. 
				Clique sobre <b>connector</b> no painel <b>object properties</b>, em <b>typs</b> Avamos configurar o cubo como objeto.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit16/imagem_unit16_2.png') }}" alt="guia2">
				</figure>
			</div>
			<p>
				Clique sobre o ponto de interrogação na opção <b>Object A</b> logo em seguida sobre a representação do cubo, 
				isso fará com que o conector exerça o movimento de locomoção sobre
				o cubo. Com objeto <b>“B”</b>, clique sobre o ponto de esclamação e em seguida sobre a representação do cilindro no painel <b>objects</b>, 
				fazendo isso conectamos o cilindro ao cubo de maneira
				a mantê-lo livre para rotação, o mesmo pode ser usado para janelas e portas. Agora com o
				botão direito, clique sobre o cubo e aplique uma <b>simultar tags</b> do tipo <b>rigid body</b> atribuindo
				gravidade a forma, repita o processo para o cilindro.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit16/imagem_unit16_3.png') }}" alt="guia3">
				</figure>
			</div>
			<p>
				Crie uma superfície usando plane, posicione a mesma embaixo do carrinho e atribua ao
				plane da superfície uma simulater tags do tipo collider body, para que o mesmo possa interagir
				com o objeto.
			</p>
			<div class="container">
				<figure>
					<img src="{{ asset('assets/img/games_and_animation/unit16/imagem_unit16_4.png') }}" alt="guia4">
				</figure>
			</div>
			<p>
				Para criar as rodas traseiras selecione tudo ligado a ela no painel <b>objeto cilinder, connecter</b>
				e <b>motor</b>, use o Shift para isso. Quando estiver com todos selecionados pressione Ctrl+ <b>clique
					com botão esquerdo e o matenha pressionado</b>, arraste e solte a baixo, isso duplicará os objetos, 
				você só precisará reposisicioná-los em seu ambiente 3D. Use a ferrameta <b>position</b> e clique
				no eixo do movimento, para tornar precisa a locomoção das rodas para o outro lado do chaci,
				feito isso renomei os dois cilindros para <b>dianteiro</b> e <b>traseiro</b>. Clicando sobre os conectores no
				painel <b>object</b> configure ambos para suas rodas específicas como <b>object “A”</b> para o cubo e <b>“B”</b>
				para dianteiro e traseiro, respeitando a posição dos amortecedores. Agora clique em motor e
				no painel propriedades, em <b>torque</b> suba o número pra 50.
			</p>
			<p>
				<b>Obs</b>: configure o torque nas rodas dianteiras e traseiras, já que isso muda o funcionamento da ação, 
				mude também a opção mode, de regular speed para apply forcer. 
				Esperimente, crie obstáculos, mude o ângulo da pista, repetição, repetição e repetição.
			</p>
			<p><b>Animação e loops</b></p>
			<p>
				Modele um ventilador tomando o cuidado de separar as hélices do corpo e corpo da cabeça do ventilador, 
				use 3 objetos para gerar sua forma. Use conectors para ligar as partes selecionadas, 
				tente criar um movimento em que o primeiro quadro da timeline esteja exatamente
				na mesma posição de componentes que o primeiro, esse procedimento permite que você crie
				para sua animação cenas de atos que se repetem, caminhada e o ciclo de movimentos de um
				ventilador. Todos esse movimentos são conhecidos como movimentos harmônicos, o bater de
				asas de uma ave, todos são movimentos que já podemos criar com os recursos conhecidos
				nas últimas aulas.
			</p>
			<p>
				Observe no seu dia a dia e faça uma lista dos movimento que quer reproduzir, preste
				bastante atenção nos detalhes, quanto mais aguçada for sua observação, mais fácil será reproduzí-lo posteriormente.
			</p>
			<p><b>Criando todas as animações do personagem</b></p>
			<p>
				Usando o <b>history board</b> feito em aulas passadas, devemos nos concentrar no desenvolvimento dos movimentos do seu personagem, 
				toda ação deve ser prevista incluindo os movimentos que ele vai realizar quando não estiver executando nenhuma ação, como respirar e
				gestos que dão vida ao seu personagem. Crie um arquivo com o personagem, depois crie um
				novo arquivo e na aba <b>object</b> clique na aba lateral content browser e em seguida clique sobre
				<b>presets</b>, depois em <b>sculping</b>, em seguida em base meshs e por fim use uma figura humana,
				arrastando para área de edição 3D Mesh que lhe convir. 
			</p>
			<p>
				Feito isso clique sobre o menu <b>character</b> e escolha a opção <b>character</b>, isso vai inserir sobre
				seu personagem uma referência indicando a posição frontal. Retorne ao painel <b>objetcts</b> e lá
				click sobre a opção <b>character</b> que foi inserido, na aba de propriedades na opção <b>object</b> em
				<b>object properties</b>, em <b>build</b> como template escolha <b>biped click</b>, em root será enserido a base
				de movimentos para o quadril. Para ajustar a posição clique em <b>adjustaments</b> no painel <b>object</b>
				properties, isso vai permitir que você reposicione o centro do quadril para melhor posição em
				relação ao mesh que você está usando.
			</p>
			<p>
				Teminados os ajustes, retorne para build e clique em spine fk na opção componente,
				isso vai inserir a coluna do personagem, repita os passos feitos anteriormente para ajustar a
				posição ao copro, um bom posicionamento dos ossos ajuda o computador a reconhecer de
				forma mais eficaz os limites de movimentos. Quando for inserir arm e legs mantenha a tecla
				CTRL pressionada, isso vai criar os 2 ao mesmo tempo, novamente em ajustes faça bons encaixes 
				deixando os pontos de movimento dentro do mesh, para ter acesso aos comandos de
				edição da estrutura do esqueleto use o painel de objetos selecionando a <b>spine</b>, eles vão surgir
				no painel objetos sempre que for fazer ajustes nos braços ou pernas.
			</p>
			<p>
				Verifique a opção <b>simetry</b> do painel propriedades, quando tiver terminado de inserir e
				configurar a posição de cada osso, na aba <b>object properties</b> vá até o botão <b>binding</b>, no painel
				<b>objects</b> clique sobre <b>character</b> e em <b>object properties</b>, se qualquer coisa for exibida na opção
				<b>objects apage</b> selecione e delete. Clique sobre o seu mesh que pode ser male ou female, em
				base no <b>painel</b> objetos segure o click, arraste e solte sobre a opção objects e em <b>object properties</b>
				<b>binding</b>, feito isso seu personagem já deve responder aos movimento. Em <b>object properties</b> clique
				na opção <b>animate</b>, selecione qualquer um dos marcadores sobre o corpo de seu persongem,
				isso deve infligir uma alteração as malhas do mesh, porém esse recurso usa um procedimento
				conhecido como <b>ik</b> ou <b>inverse kinematic</b>, que permite uma simulação de peso e dinâmica aos
				movimentos, tornando nossas próximas animações mais fluídas.
			</p>
			<p>
				Agora que você já aprendeu salve seu personagem e aplique novamente a técnica até que
				consiga compreender todos os passos isoladamente, com o auxílio do professor desenvolva
				seus personagens.
			</p>
			<p><b>Animações que seguem loops</b></p>
			<p>
				Com seu persongem montado, use a timeline e tente criar a animação dele caminhando.
				Ative o botão de <b>keyframe automático</b> na timeline para que grave seus movimentos ao executá-lo
				antes de realizar o primeiro click em keyframe para guardar sua posição inicial, depois mova
				o marcador na timeline para descrever o tempo, em seguida levante o pé e o mova um pouco
				para frente bem como o quadril, realize movimentos nos braços e repetindo o procedimento,
				marque na timeline todos os pontos planejados no seu <b>history board</b>. O desafio é criar um
				movimento repetido que não parece ser repetido, para isso crie seu movimento base depois
				volte fazendo pequenos ajustes em momentos alternados da , isso melhora o desempenho,
				crie outros movimentos e se divirta com essa técnica para criar as animações necessárias para
				tudo que foi planejado.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

@endsection
