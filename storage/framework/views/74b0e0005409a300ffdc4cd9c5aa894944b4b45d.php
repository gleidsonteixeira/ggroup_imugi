
<?php $__env->startSection('titulo','Unit 9 | Desenho técnico'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade9" data-etapa="apresentacao">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow upper">Aula 1 – Desenho técnico</h5>
			<div class="container">
				<p>
					Nossos trabalhos ganharam precisão e representação, já que algumas partes da indústria
					utilizam modelos para criar novos produtos, vai ser muito comum realizar trabalhos de modelagem
					a partir de plantas baixas que podem ser feitas dentro e fora do programa. Desenhos técnicos
					são usados para fabricação de produtos de precisão, vamos entender alguns conceitos como
					<b>proporção, perspectiva e unidades de medida.</b>
				</p>
				<p>
					<b>Proporção</b> é a aquivalência entre unidades de medida relacionadas, é usada para representar
					objetos com fidelidade permitindo o planejamento e execução do projeto até por grupos
					diferentes, permitindo setorizar a produção de peças e produtos. No caso, a proporção
					será usada como um termo de relação entre valores 1x10, onde 1 terá o valor de 10, mas
					isso pode ter consequências drásticas caso você não tenha um bom conhecimento sobre
					unidades de medida.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_01.png')); ?>" alt="guia1">
					</figure>
				</div>
				<p>
					<b>Perspectiva</b> é a consequência da captura de imagem de forma estereoscópica, ma também
					é um recurso usado para projeção em 2D de objetos e cenários 3D. Logo, uma imagem
					como a baixo não é 3D apesar de parecer muito, isso faz dela uma projeção, mas também
					podemos projetar imagens de objetos 3D de maneira a suprir as distorções da forma e
					manter a fidelidade da imagem como nas projeções cartográficas a baixo, mesmo sendo
					a representação de uma esfera ela pode ser feita de várias formas diferentes, podendo
					ser cilíndrica, cônica, plana ou azimutal. Também podem ser usados cortes para mostrar
					o interior dos objetos ou matas de seções isoladas, com uma riqueza maior de detalhes
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_02.png')); ?>" alt="guia2">
					</figure>
				</div>
				<p>
					<b>Unidade de medida</b> é um acordo feito entre estudiosos que tende a facilitar as transações
					comerciais e científicas, precisamos saber navegar entre as escalas de tamanho e reconhecer
					quando estamos lidando com medidas de outros sistemas. No Brasil usamos o MSI (Metric
					System International ou Sistema de Medidas Internacional), ele apresenta milímetros,
					<b>centímetros, metros e kilometros.</b> Temos também o SI (System Imperial Metric ou Sistema Imperial de Medidas), 
					ele apresenta <b>polegadas, pés, jardas, milhas e léguas.</b> Essas
					unidades de medida são usadas hoje em todo mundo, e como estamos nos preparando
					para um mercado de trabalho internacional devemos nos preparar pra as adversidades
					do caminho. 
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_03.png')); ?>" alt="guia3">
					</figure>
				</div>
				<p><b>Desenho técnico - criando objetos 3D a partir de uma imagem 2D</b></p>
				<p>
					Escolha uma planta baixa que contenha medidas ou crie com ajuda do professor. 
					Usando as opções do menu da janela View, na opção configure insira sua imagem, esse é o nosso primeiro passo.
				</p>
				<p>
					Vamos fazer uma representação proporcional, insira um retângulo usando o botão <b>pen</b> da
					barra de atalhos, deixe o retângulo com uma das medidas descritas na planta, fazendo isso você
					vai perceber que as referências de tamanho não correspondem. Na lateral da aba de <b>propriedades</b> 
					existem 3 pequenas setas, clique na seta para cima, isso mostrará a aba <b>project</b>, na opção
					<b>project settings</b> existe uma opção que permite alterar as escalas de medidas e referências.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_04.png')); ?>" alt="guia4">
					</figure>
				</div>
				<p>
					<b>Project scale</b> permite alterar a proporção de <b>1X10</b> para <b>4X10</b> ou pra qualquer sistema que
					for necessário, se o seu projeto usa uma escala de medidas você deve alterar para as mesmas,
					garantindo as proporções do objeto. Clicando na seta para esquerda da aba <b>propriedades</b>
					volte até visualizar na aba <b>Viewport [top]</b>, nas opções de back configure o tamanho da imagem
					para que as medidas que você deu ao retângulo se encaixem na sua planta baixa através das
					opções <b>Size: X e Y</b>.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_05.png')); ?>" alt="guia5">
					</figure>
				</div>
				<p>
					<b>Obs</b>. A opção <b>Keep Aspect Ration</b> deve ser mantida ativa para que a imagem do plano de
					fundo não sofra deformação, quando você conseguir equiparar as duas medidas estará
					pronto para modelar, garantindo a precisão da sua planta.
				</p>
				<p>
					Nossa modelagem vai mudar gradativamente para que possamos conhecer todas as ferramentas de edição relacionadas a cada área específica, 
					no caso <b>edificações</b> e <b>estruturas</b>.
					Estamos usando linhas e precisamos dar a essas linhas um corpo para poder modelar, transforme
					seu retângulo em um objeto editável usando o botão <b>make editable</b>, use a forma de interação
					pontos. Use o retângulo para selecionar todos os pontos, click sobre a seleção com o botão
					esquerdo e selecione a opção <b>Create Outline</b>, no painel <b>Create Outline</b> descreva a distância,
					se usar números positivos será criada uma nova linha para fora, usando números negativos a
					nova linha será criada dentro da forma.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_06.png')); ?>" alt="guia6">
					</figure>
				</div>
				<p>
					Para dar corpo as linha adicione (matenha o click pressionado) subvision surface na barra
					de atalhos, no submenu escolha a opção extrude, que só ficará visível na aba lateral objetc.
					Volte a área de trabalho 3D, selecione todos os pontos de suas linhas e volte para aba object,
					nela selecione o retângulo e solte sobre a opção extrude, isso vai criar as superfícies da forma,
					para remover essa deformação da forma selecione na aba objects o objeto extrude, no painel
					de propriedades extrude object zere o movimento.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_07.png')); ?>" alt="guia7">
					</figure>
				</div>
				<p>
					Usando novamente o botão <b>make editable</b> você pode observar que as duas formas que
					interagiam para criar seus objetos agora se tornou um único objeto no painel <b>objects</b>, faça
					ajustes usando os modos de seleção necessários. Para continuar nossa contrução precisamos
					realizar cortes na malha, click com o botão direito do mouse sobre a área de trabalho da janela
					<b>View</b>, entre as opções estará a ferramenta <b>kinife</b>, como estamos trabalhando com um objeto
					até agora bidimensional, vamos usar a opção <b>line</b>, click em dois ponto cruzando uma parte
					da superfície e essa por sua vez estará cortada, mude sua ferramenta para linha e selecione a
					linha no sentido da parede que deseja criar, usando novamente o botão esquerdo click no eixo
					para onde quer movimentar, matenha o click pressionado e mova o mouse.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_08.png')); ?>" alt="guia8">
					</figure>
				</div>
				<p>
					Caso prefira uma forma mas prática deixe o modo de seleção em linhas, click sobre a linha
					da parede que quer criar, pressione o <b>CTRL+click com o botão direito</b>, vai extrudar a linha. Use
					a forma que achar melhor.
				</p>
				<p>
					Faça os ajustes necessários até obter todas as paredes com calma, pensar em uma ação
					antes de realizá-la além de garantir uma boa execução, garante que você não precisará pensar
					nessa mesma ação após executar. Quando tiver terminado o desenho básico de todas as paredes 
					selecione tudo e faça uma extrusão no eixo <b>“Y”</b>, sua casa agora tem paredes, crie um novo
					objeto e faça o teto em uma peça única, essa é nossa primeira parte.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_09.png')); ?>" alt="guia9">
					</figure>
				</div>
				<p>
					Precisamos criar as partes móveis, portas e janelas, mas isso fica para a próxima aula,
					salve seu projeto e repita a atividade até que o material de apoio ou a presença do professor
					não sejam mais necessários, isso vai garantir a fixação do seu conhecimento.
				</p>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit9/imagem_unit9_10.png')); ?>" alt="guia10">
					</figure>
				</div>
				<p><b>Planta baixa</b></p>
				<p>
					Todo desenho de produto ou equipamento só faz sentido para a indústria dentro de uma
					escala definida, então antes de criar qualquer coisa precisamos definir nossa escala. A planta
					baixa é um plano de construção, ele deve ser capaz de permitir que uma pessoa com o mínimo de instrução 
					externa possa simplesmente visualizar, e provido das informações corretas
					executar o projeto, devemos deixar bem claro qual o sistema métrico usado, dependendo da
					complexidade do nosso projeto. 
				</p>
				<p>
					Faremos desenhos chamados cortes, que podem variar de um a mais de um plano mostrando a visão do objeto em 
					posições estáticas diferentes: <b>frontal, superior e lateral</b>. Podemos
					desenhar partes separadas, se considerarmos as condições e as proporções corretamente, no
					final tudo irá se encaixar, aquilo que antes foi um projeto vira um objeto, uma forma de fazer
					pensamentos virarem realidade.
				</p>
				<p><b>Rascunho isométrico, leitura de plantas e mapas estruturais</b></p>
				<p>
					O inverso da visão sob perspectiva é a visão isométrica, ou aquela em que o objeto não
					apresenta profundidade mesmo sendo uma representação 3D. Essas imagens são usadas
					para representações científicas de moléculas, átomos e partículas por exemplo. Isso acontece
					porque todos os materiais citados não podem ser visualizados a olho nú, logo uma representação 
					científica do DNA não deve conter perspectiva.
				</p>
				<p>
					Tente modelar uma cadeia de DNA, você já tem conhecimento suficiente para isso, considere
					um desafio. Faça sem a instrução do professor.
				</p>
			</div>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade9/desenho_tecnico.blade.php ENDPATH**/ ?>