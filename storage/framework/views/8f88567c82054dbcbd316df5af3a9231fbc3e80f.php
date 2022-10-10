
<?php $__env->startSection('titulo','Unit 5 | Model Mode'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade5" data-etapa="model_mode">
			<h3 class="barlow">UNIT 5</h3>
			<h5 class="barlow upper">Aula 1 – Model Mode</h5>
			<div class="container">
				<p>
					O <b>mesh</b> é a representação de um objeto, o software traz modos de interação ligadas diretamente ao objeto selecionado, 
					então somente esse está passível a alterações e seleções a partir do momento dessa ativação.
				</p>
				<p>
					O segundo botão na barra de ferramentas é o <b>objetc mode</b>, ele permite a navegação
					entre os estados do objeto da edição direta: <b>modelagem, animação.</b> Ao entrar em model o
					modo de modelagem permite <b>subdividir, extrudar</b> e <b>mover partes isoladas</b> do mesh. Modo
					object permite interações com as propriedade diretas e configurações, o modo animater por
					sua vez vai falicitar sua interação com recursos ligados a edição de vídeos e movimentos que
					o mesh poderá realizar.
				</p>		
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit5/imagem_unit5_02.png')); ?>" alt="guia2">
					</figure>
				</div>
				<div class="clear"></div>
				<div class="elemento2">
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit5/imagem_unit5_03.png')); ?>" alt="guia3">
					</figure>
				</div>
				<div class="elemento">
					<p>
						Ao clicar ativamos a ferramenta que nos permite selecionar e editar
						pontos específicos da superfície, assim podemos modelar, mas para
						conseguir um melhor desempenho é preciso subvidir essas áreas selecionando o 
						botão faces e clicando sobre uma das faces do seu objeto,
						depois clique sobre ele com o botão esquerdo indo ao menu mesh e
						clicando sobre ele.
					</p>
				</div>
				<div class="clear"></div>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit5/imagem_unit5_04.png')); ?>" alt="guia4">
					</figure>
				</div>
				<div class="clear"></div>
				<div>
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit5/imagem_unit5_05.png')); ?>" alt="guia5">
					</figure>
				</div>
				<div class="elemento2">
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit5/imagem_unit5_06.png')); ?>" alt="guia6">
					</figure>
				</div>
				<div class="elemento">
					<p>
						No submenu achamos o botão <b>commands</b>, nele estão presentes
						todos os recursos que podemos usar para modelar um <b>mesh</b> e leválo a sua forma final. 
						Encontraremos a opção <b>subdvide</b> que vai subividir
						sua área permitindo criar novas faces para posteriores edições.
						Também é possível aplicar essa alteração usando atalhos, deixe o
						seu ponteiro sobre a área de edição da janela view e pressione <b>“U”</b>,
						serão listados todos os recursos e atalhos necessários pra ativá-los.
					</p>
					<p>
						<b>Dica:</b> se você pressionar <b>“U”</b> e logo depois pressionar <b>“S”</b>, isso irá
						subdividir a área selecionada. Se você pressionar <b>“U”</b>, segurar o
						<b>SHIFT</b> e só depois pressionar o “S”, vai abrir um painel que permite
						aplicar edições avançadas que podem por exemplo suavizar superfícies e curvas; Clique na opção <b>smoof</b>, ao fazer isso sempre que
						você aplicar subdvisões a forma vai ser suavizada. 
					</p>
				</div>
			</div>
        </div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade5/model_mode.blade.php ENDPATH**/ ?>