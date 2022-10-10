<?php $__env->startSection('titulo','Unit 26 | Maping'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade26" data-etapa="maping">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow upper">Maping - Texturização avançada</h5>
			<p>
				Quando criamos materiais eles são aplicados em toda a superfície dos objetos, para ter
				um objeto com mais de um textura ou cores diferentes em seu material de maneira super
				específica, podemos usar um recurso como o <b>maping</b>, mas para isso vamos explorar outras
				ferramentas do nosso software, use qualquer um dos objetos modelados anteriormente ou
				crie um novo para desenvolver a técnica. Com seu objeto já presente na cena, vamos clicar no
				menu <b>layout</b>, o menu principal do programa, nele teremos outras opções de interface para
				usar. Click em <b>BP- Uv editor</b>, essa interface vai deixar pontos importantes para edição das
				nossas texturas e cores.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit26/imagem_unit26_1.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Para compreensão da técnica em geral, é recomendável usar uma forma criada somente
				para a primeira execução, posteriormente tente repetir o procedimento em uma forma
				modelada simples, com as repetições ficará fácil criar todos os mapings desejados.
			</p>

			<p>
				Transforme o objeto que pretende modelar em objeto editável, pressisone <b>“C”</b>.
			</p>

			<h5>
				<b>Apresentando a janela</b>
			</h5>

			<p>
				A posição de alguns do painéis conhecidos muda, o HUD está um pouco menor e o painel
				objeto fica no lugar da timeline. No lado direito da janela dois painéis novos são acrescenta-
				dos, dessa vez ligados a texturas, nossa barra de ferramenta e atalhos também mudou e al-
				guns recursos só mudaram de posição, agora ao lado direito temos o painel texturas e a baixo
				dele o painel <b>UV maping</b>.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit26/imagem_unit26_2.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>
				Criando textura a partir de objeto
			</h5>	

			<p>
				No painel <b>UV maping</b> crie em file, em seguida na opção <b>new texture</b> vai abrir uma caixa de
				diálogo <b>New texture</b> pedindo infomações para criar a textura para o seu material, precisamos
				da textura para fazer o maping. Escolha uma cor e click em <b>ok</b>, feito isso precisamos projetar
				nossas superfícies sobre a textura e atribuir as faces do objeto para podermos redesenhá-la.
				Click na engrenagem sobre o menu <b>file</b>, vai abrir a caixa de diálogo <b>set from projection</b>, per-
				mitindo configurar como sua forma será projetada de maneira plana, click em <b>ok</b>, isso criará
				uma malha distribuída na textura que você acabou de criar
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit26/imagem_unit26_3.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Vá novamente para o painel <b>UV maping</b>, em <b>projection types</b> podemos escolher como
				essas características ficarão marcadas na <b>textura</b>, em <b>projection types</b> escolha a opção fron-
				tal, isso fará sua projeção surgir, e no painel <b>texture</b> faça alterações. Em <b>projection</b> escolha
				novas formas de projetar sobre sua superfície, click em <b>file</b> no painel texture e depois click em
				<b>save all the textures</b>, salve essa textura em uma pasta como JPG ou PNG e abra a mesma no
				photoshop. Feito isso, você terá um mapa e poderá fazer as alterações necessárias para obter
				os resultados desejados, salve a imagem com o mesmo nome e formato que anteriormente e
				recarregue seu objeto texturizado, esse terá todas as características atribuídas a sua textura.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit26/imagem_unit26_4.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Projeções</h5>

			<p>
					Durante o processo de UV maping é importante relatar que a posição da sua visualização
				interfere na projeção e na malha sobre o objeto, repita o processo até achar um bom posicion-
				amento de malha, explore as posições de camera contidas no menu da janela <b>views</b>. No painel
				<b>UV maping</b> em relax <b>UV</b>, quando realizar a seleção no cubo pense que essa malha será aberta
				como um tapete, esse tapete é o maping da textura Uv do objeto, no menu <b>select geometry</b>
				temos a opção <b>loop select</b>, essa ferramenta facilita a seleção de cortes na imagem fazendo
				seleções de ponta a ponta na malha com apenas um click, para selecionar com a ferramenta
				normal de seleção é só manter o <b>SHIFT</b> pressionado, isso fará todo o intervalo de linhas, face
				ou pontos ligados ser selecionada.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit26/imagem_unit26_5.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				No painel <b>Uv Maping</b> temos opções de projeção, mas o que é isso e como funciona?
			</p>

			<p>
				Essa projeção é diretamente ligada a forma como sua textura vai envolver o objeto mode-
				lado. Podemos modelar formas diversas, no entanto são limitadas a capacidade de projeção
				sobre superfície, isso se dá porque na hora de projetar devemos nos basear para projeção da
				forma aproximada, os recursos de texturização aplicados anteriormente também são funcionais,
				permitindo reflexo e profundidade de textura através de interferência de luz, em <b>relax uv</b> no
				mesmo painel podemos fornecer uma nova leitura, a texturização.
			</p>

			<h5>Materiais</h5>
			
			<p>
				Ao criar uma textura e finalizá-la, volte ao modo <b>startup</b> notará que o novo material foi
				atribuído ao seu objeto mesmo sem você criá-lo, porque sua textura é dependente desse ma-
				terial para ser projetada, nesse caso podemos criar vários materias permitindo que o mesmo
				objeto tenha várias texturas, tendo como diferença apena sua texturização, facilitando muito
				os trabalhos posteriores.
			</p>

			<p>
				Um material pode ser mapeado de várias formas permitindo edições complexas as formas
				dos seus objetos, mapear suas texturas vai enriquecer com detalhes sua construção. Quanto maior a quantidade de detalhes, mais perto do real suas modelagens estarão, dedique
				bastante tempo fazendo isso
			</p>

			<h5>Uv Maping</h5>

			<p>
				Faça a seleção em sua superfície 3D de maneira a escolher como quer cortar seu objeto,
				para usá-lo de maneira a facilitar seu trabalho posterior. Se você estiver no modo de seleção
				retas, pressionando o <b>“SHIFT”</b> e dando um click duplo vai fazer um corte em volta do objeto,
				realizando a separação de partes. Agora vá até o painel <b>uv maping</b> na área da trabalho <b>BP- UV
				editor</b>, lá existirá uma opção chamada <b>relax uv</b>, desmarque todas as opções disponíveis nesse
				painel.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila5/unidade26/maping.blade.php ENDPATH**/ ?>