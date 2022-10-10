<?php $__env->startSection('titulo','Unit 25 | Efeitos - SFX effects'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade25" data-etapa="efeitos">
			<h3 class="barlow">UNIT 25</h3>
			<h5 class="barlow upper">Aula 1 – Efeitos - SFX effects</h5>
			<p>
				Os efeitos especias ou <b>FSX effects</b> pertencem a dois grupos, sonoros e visuais. 
				O desenvolvimento de sintetizadores impulsionados pelo investimento milionário de dezenas de
				softhouses tornaram os <b>Audio</b> e <b>Visual effects</b> parte fundamental da produção de um grande
				filme, influenciando coisas muito importantes como ângulos de camera, quantidade de quadros,
				tamanho da tela, geração de partículas e quantidade de camadas.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit20/imagem_unit20_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
				Para entender isso vamos ter que entender um pouco mais sobre projeção de imagem,
				isso envolve <b>monitores</b>, <b>cabos e conectores</b>, exibindo o conteúdo gerado.
			</p>
			<ul>
				<li><p><b>RCA</b> (Received Conect Award) - Cabo composto por um canal de vídeo e 2 de áudio, 
					tornando possível reprodução de vídeo em estéreo com DolbeDigital estereo soround.</p></li>
				<li><p><b>VGA</b> (Video Generic Array) – Sistema único e exclusivamente para vídeo, mas na robótica
					esse cabo pode ser usado para conectar drivers complexos, permite montar uma estrutura de camadas. 
					Esses dois sistemas são analógicos, podendo sofrer percas de quadro
					provocando queda de frame hate e ruído, criando fantasmas na imagem.</p></li>
				<li><p><b>DVI</b> (Digital Video Interface) – Uma maior banda de transmissão, uso de super contraste e
					imagens full 900 linhas horizontais, iniciando os formatos de projeção digital.</p></li>
				<li><p><b>HDMI</b> (High-Definition Multimedia Interface) – Cabo para áudio e vídeo em altíssima
					definição, usando uma estrutura com camadas e partículas gerando imagens a partir de
					1080 linhas horizontais. A compatibilidade do seu dispositivo com esses equipamentos é
					ou não capaz de reproduzir as condições citadas, se seu monitor for compatível com <b>RCA</b>,
					ele será compatível com seus formatos e assim por diante, vamos entender algumas estruturas que juntas compõe o <b>SFX</b>.</p></li>
			</ul>
			<p>
				É curioso notar que o desenvolvimento do videogame está diretamente ligado com o esforço de um grupo de pessos
				para usar algo desenhado e produzido para um objetivo em aplicações completamente novas, caixinha de telefones 
				e canhões de raios catódicos poderam ter um impacto tão significativo e importante para humanidade.
			</p>
			<p><b>Paralax</b></p>
			<p>
				Os primeiros aparelhos de tv só conseguiam montar uma camada por vez para gerar suas
				imagens, atravéz de uma taxa de quadros que pode variar de <b>50Hz</b> a <b>60Hz</b>, note que usei o
				termo <b>Hz</b> para dizer quantos quadros, já que em dispositivos analógicos isso era medido dessa
				maneira. Eles também só podiam manipular uma camada de cada vez, logo os movimentos
				mais simples do seu personagem exigiam que ele fosse inserido como conteúdo do quadro
				como os fundos e personagens, isso provocava um gargalo de processamento que poderia até
				desligar a máquina.
			</p>
			<p>
				O paralax foi desenvolvido para permitir projetar uma imagem única na tela. Porém, no
				processamento essa imagem se comporta como distribuída em camadas com partes sobrepostas, 
				permitindo movimentos isolados e a interação entre camadas, recurso muitas vezes
				usados em jogos como <b>Aladin, Donkey Kong, Metróide</b> entre outros, que movem seus objetos
				em velocidades diferentes, sendo capaz de enganar a visão e criar um sensação de profundidade em uma imagem 2D. 
				O paralax era um chip presente no cartucho (Tá tá tá tá tá táravô do
				cartão de memória) do jogo, a miniaturização permitiu que posteriormente se tornasse um
				software pra um drive genérico presente em todos os <b>smartgets, smart tvs</b> e computadores
				modernos, o desenvolvimento desse recurso influenciou diretamente a próxima geração de
				monitores <b>CRT</b>, já que ela já trazia recursos nativos para execução desse sistema.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit20/imagem_unit20_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p><b>Motion Seven</b></p>
			<p>
				Permitiu que os computadores executassem a exibição de PNG’s em profundidade, 
				criando uma simulação de ambientes 3D rudimentar largamente explorado na era 16 bits, usado em jogos como Rock’n roll racer, 
				Zombi eat my neighbors e Star fox. Com capacidades computacionais restritas, esse sistema rudimentar foi regado a muita criatividade e mais uma vez
				assimilado pela indústria de televisores, tornando isso nativo para os recursos da próxima geração de monitores.
			</p>
			<p>
				Já podemos notar que o desenvolvimento da indústria é como uma onda, seguindo a força
				motriz do consumo ela otimiza o que funciona e descarta o velho, permitindo a evolução dos
				recursos presentes. Essa capacidade única de nossa ferramenta permite que os recursos desenvolvidos nessa geração seja usado para desenhar a próxima, 
				e isso provoca um crescimento inversamente proporcional conhecido como lei de Moor, a tecnologia custará a metade do
				preço com o dobro da capacidade na geração seguinte. O Apple Liza tinha 512 KB de memória
				RAM, que em 1985 custava nada menos que 2000 U$, somente a memória RAM fazendo o
				preço do produto subir para 10.000 U$. Hoje, memórias com essas capacidades são simplemente insignificantes.
			</p>
			<p><b>Camera effects e algorítmo do pintor</b></p>
			<p>
				Os recursos de processamento atuais permitem a criação de um mundo inteiro dentro
				de um processador com alguns impulsos elétricos, dessa vez o algorítmo do pintor mistura as
				tecnologias do <b>Paralax</b> e <b>Motion Seven</b> para renderizar imagens em alta definição, mas isso
				também provoca gargalos de processamento. Para evitar esses gargalos o algorítmo do pintor
				executa uma leitura da posição do obervador no ambiente e descarta da renderização todos
				os objetos sobrepostos. A princípio só era possível renderizar o plano inteiro, o algorítmo do
				pintor introduz o observador no cenário e foca no que está em destaque, o cinema 4D realiza
				o cálculo das posições da retina do observador e calcula os raios de luz que serão obervados,
				descartando a renderização de todo o restante é possível atingir níveis de realismo impressionantes 
				e imagens enormes, mesmo assim o processo de renderização pode levar horas.
			</p>
			<p><b>Exercite</b></p>
			<p>
				Faça um video com seu telefone, para que possamos enteder os recursos explorados nessa aula, caso não possa fazer baixe um vídeo da internet. 
			</p>
			<p>
				Vamos aprender a observar, abra o vídeo que você fez e deixe passar até rolar os primeiros
				quadros da imagem, pause o vídeo, planeje sua interação criando um mapa mental de profundidade e 
				observe todos os pontos retos da imagem. Note que todas apontam para o mesmo
				lugar, esse lugar na imagem se chama <b>ponto de fuga</b>, trace uma linha horizontal bem na altura
				do ponto de fuga, essa é sua linha do horizonte, procure na sua imagem uma referência, algo
				que você possa usar para informar a posição dessa linha na imagem.
			</p>
			<p>
				Faça rabiscos, ajuda a imaginação, use photoshop para transformar seu vídeo em uma
				sequência de quadros. No cinema 4D vá até o menu <b>motion track</b> e click sobre <b>full solver</b>, seu
				computador vai precisar de um tempo para criar o <b>maping</b>, a imagem e localizar pontos de
				imagens que vão te permitir editar a posição do seu ângulo plano. Click novamente no menu
				<b>motion track</b> e nele click em <b>content</b>, dê play no seu vídeo e veja com ajuda dos mapas que
				você fez sobre os pontos de fuga da imagem, quais os pontos que se movem na sua tela será
				útil para definir seu plano. Click sobre esse ponto, novamente dê play e observe o comportamento de seus pontos na tela, 
				feito isso é preciso calibrar, vá no painel objetos e click sobre o
				modificador responsável pelo seu <b>motion track</b>, nele existem duas tags, uma define seu ponto
				de inserção de <b>objetos</b> e o outro permite editar o <b>planar constraint mode</b> do <b>motion</b>, para
				que quando uma forma for inserida no seu cenário ela responda aos movimentos de camera.
			</p>
			<p>
				Na maioria das vezes vamos achar essas referências de movimento no chão, mas também podemos usar 
				qualquer outra superfície plana bem iluminada na imagem, esse recurso permite ao cinema 4D reproduzir 
				os movimentos realizados no momento da captura da imagem,
				isso precisa ser bem calibrado no painel <b>object properties</b>, em <b>planar</b> altere os <b>axis</b> e fique
				atento para suas referências de posição.
			</p>
			<p>
				No canto inferior do HUD muitas vezes ele tende a posicionar a camera de cabeça pra
				baixo, resolverás isso com facilidade clicando na caixa <b>reverse axis</b> no mesmo painel. 
				Faça uma construção com blocos, posicione em algum lugar dentro da sua cena e efetue 
				a renderização para ver seus resultados finais seguindo os passos anteriores. Tudo mais pode ser
				usado, texturas e animações vão funcionar do mesmo jeito, mas com uma imagem servindo
				de referência no fundo modele e crie uma animação em separado, pode ser um disco voador,
				posteriormente exporte para dentro dessa cena, após inserir o objeto você ainda pode 
				modificar sua rotação para melhor enquadrá-lo dentro da linhas do ponto de fuga da imagem geral.

			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila5/unidade25/efeitos.blade.php ENDPATH**/ ?>