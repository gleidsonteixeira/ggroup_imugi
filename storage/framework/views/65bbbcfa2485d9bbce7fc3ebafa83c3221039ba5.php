
<?php $__env->startSection('titulo','Unit 28 | Body ik'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade28" data-etapa="body_ik">
			<h3 class="barlow">UNIT 28</h3>
			<h5 class="barlow upper">Body ik - Mecânica para movimento de corpos</h5>
			<p>
				Os movimentos de corpos se tornaram possíveis, logo que surgiu uma ciência completamente nova, 
				a física do estudo de movimento. Para poder tornar nossas animações mais
				fluídas e salvar a vida dos editores, esse recurso permite recriar com precisão articulações
				com graus de flexibilidade e retenção de giro, tudo com o intuito de facilitar a animação de
				seus personagens. Para isso vamos precisar de um corpo modelado, se não tiver use um dos
				moldes genéricos disponíveis nos <b>presets</b> do programa. Da primeira vez usamos a ferramenta
				<b>character</b> para criar toda estrutura dos ossos criando tags, dessa vez no <b>menu character</b>, va-
				mos selecionar <b>joint tool</b>.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit28/imagem_unit28_1.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Faça o desenho de todo o esqueleto da criatura, concentração gera silêncio. Atenção aos
				detalhes, selecione seu esqueleto e o <b>mesh</b> que você está usando como molde, pressionando
				o <b>shift</b> click sobre os dois no painel <b>objects</b>. No menu <b>character</b> vá até a opção <b>commands</b> e
				escolha <b>bind</b>, isso irá unir a estrutura do seu personagem ao esqueleto desenhando, isso dá
				liberdade para você criar suas próprias estruturas corporais, observação e imaginação são
				ótimos ingredientes. Agora podemos animar nosso personagem, mas isso vai representar
				uma dificuldade enorme, já que cada osso se move separadamante e sem nenhuma noção
				de coneções, tornando as atividades mais simples como levantar uma perna em um serviço
				de proporções épicas. Terá que realizar a animação movendo osso por osso, posicionando e
				corrigindo. Isso consome tempo, é o recurso mais importante.
			</p>
			<p>
				Para montar cenas mais complexas devemos trabalhar as animações de nosso persona-
				gens de forma separada, dando atenção aos detalhes e criando jeitos, observar vídeos, revis-
				tas e fazer anotações sobre o assunto ajuda a pensar e desenvolver ideias. Nossos próximos
				recusos permitem que possamos atribuir propriedades as conexões entre os <b>joint points</b>, criando
				articulações com peso e força necessários para simular o real, tome nota de todos os
				detalhes e repitas os exercícios.
			</p>
			
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit28/imagem_unit28_2.png')); ?>" alt="guia1">
				</figure>
			</div>

			<p>
				Existem duas formas de atribuir física de movimento mecânico aos seus <b>joint points, IK
				(Inverse Kinematic) e FIK(Front Inverse Kinematic)</b>. Usamos o <b>IK</b> para simular juntas de articulação
				livres como membros superiores e cotovelos, tornozelos, punhos e quadril. E usa-se o <b>FIK</b>
				para articulações que funcionam em arco, com movimento limitado: coluna, joelhos e conexões
				serpenticulares. Por isso precisamos planejar e estudar olhando para nosso projeto.
			</p>

			<h5>IK - Inverse Kinematic</h5>

			<p>
				Para aplicar o <b>IK</b> precisamos selecionar o grupo de <b>joint points</b> que será ativo dentro da
				articulação, faça isso no painel <b>object</b>. No layout <b>startup</b> separe o grupo de ossos ligados
				ao movimento clicando sobre eles respectivamente mantendo o <b>“CTRL”</b> pressionado, com o
				grupo <b>de joint ponts</b> selecionado, click no menu <b>character</b> e vá para <b>command Creat IK Chain</b>,
				um modificador será criado no painel objetos ao lado do primeiro osso desse grupo.
			</p>

			<p>
				Será inserido em seu painel <b>objetos</b> um <b>object null</b>, esta é sua âncora, se mover irá provocar
				distorção de movimento nos grupos de ossos selecionados, clicando sobre essa tag no
				painel <b>object properties</b> teremos a nossa disposição todas as configurações de força e torção
				necessárias.
			</p>

			<p>
				Faça testes e verifique as alterações, selecione o <b>object null</b> criado no processo de
				atribuição da Ik e mova o objeto livremente, observe a contração e comportamento na dis-
				torção do seu mesh.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit28/imagem_unit28_3.png')); ?>" alt="guia1">
				</figure>
			</div>


			<h5>FIK - Front Inverse Kinematic</h5>

			<p>
				O processo de <b>FIK</b> é nada menos que a configuração das propriedades do seu <b>IK</b>, para isso
				click na tag em sua aba objetos que representa a função inserida anteriormente, depois em
				<b>object properties</b>, vamos configurar nosso <b>FIK</b>. No atributo tags temos as indicações de aplicação
				 do <b>IK</b>, seguido pela informação de quais serão o primeiro e último <b>joint point</b> envolvidos
				no movimento. Qualquer seleção pode ser feita, podemos inverter a posição da junta e o que
				mais for necessário, logo abaixo temos <b>IK/FIK</b> onde 0% representa o máximo de IK aplicada
				e 100% o máximo de FIK. Quanto maior a quantidade de FIK, menos flexível ficará o objeto e
				menos responsivo as ações <b>object null</b>.
			</p>

			<p>
				Use esse recurso para modelar o comportamento da coluna e pernas do personagem, observar 
				movimentos ajuda bastante a compreender um pouco sobre física de mecânica inversa.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit28/imagem_unit28_4.png')); ?>" alt="guia1">
				</figure>
			</div>

			<h5>Esqueleto adicionado a objeto mesh</h5>

			<p>
				Quando todo o corpo do personagem estiver montado vai ficar díficil manipular tantos
				objetos, pra isso use o aba objeto e organize de forma a criar grupos, separe todos os <b>object
				null</b> resultantes da criação de todas as <b>IK</b>.
			</p>

			<p>
				Crie objetos como cubo e posicione próximo ao grupo de ossos do movimento, no painel
				objeto pegue esse cubo e arraste para cima do <b>object null</b> responsável pelo <b>IK</b> de cada grupo,
				feito isso você cria as âncoras de movimento, deixando específicas funções de movimento
				para atividades futuras. Crie um cubo para cada articulação e posicione de maneira a facilitar
				os movimentos como caminhar, abrir e fechar braços, agachar e o que mais for necessário
				para a animação do seu personagem.
			</p>

			<p>
				Anteriormente criamos e atribuímos movimentos a um personagem usando tags, dessa
				vez aprendemos a produzir nossas próprias tags, podemos inserir variações para expecificar os
				movimentos desejados, travar eixos e definir ações a serem executadas.
			</p>


		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade28/body_ik.blade.php ENDPATH**/ ?>