
<?php $__env->startSection('titulo','Unit 1 | SISTEMA DE INFORMAÇÃO E SEUS VALORES'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade1" data-etapa="sistema_informacao">
			<h3 class="barlow">UNIT 1</h3>
			<h5 class="barlow upper">Aula 1 – Sistema de informação e seus valores</h5>
			<p>
				O computador usa uma linguagem baseada em 2 caracteres, 0 e 1, conhecida como
				binário. Essa linguagem é usada pra montar sistemas de informação, esses sistemas por sua
				vez são usados para realizar algumas operações básicas como: armazenar, rodar e executar
				funções complexas como vídeo, áudio dentre outros.
			</p>
			<p>
				<b>GB</b> (GigaByte) - usado como referência para difinir a quantidade de informação suportada
				pelo sistema de arquivos.
				<b>GH</b> (Giga Hertz) referência usada para definição de velocidade.
				<b>FPS</b> (formação de quadros por segundo). 
			</p>
			<p>
				Exemplo, seu computador tem 500 Gigabytes de HD (memória de armazenamento), e
				possui um processador que funciona a 2,65 GigaHertz (memória de processamento).
			</p>
			<h5>As unidades específicas</h5>
			<div>
                <figure class="otimizarimagem">
                    <img src="<?php echo e(asset('assets/img/games_and_animation/unit1/imagem_unit1_04.png')); ?>" alt="guia4">
                </figure>
			</div>
			<br>
			<h5>Plugins</h5>
			<p>
				São ferramentas usadas por aplicativos para executar atividades que não são nativas do
				sistema, muito usado para disseminação de efeitos e funções complexas como engine
				games. Para rodar em play mode engine você vai precisar de uma estrutura de códigos
				para reconhecer os botões, aplicar movimentos, tacha de formação de quadros, pontos e
				sistemas necessários ao jogo. Mas o foco não é esse, já que vamos desenvolver objetos e
				animações 3D, nosso programa já é nativamente capaz de realizar tais tarefas.
			</p>
			<h5>Sistemas operacionais</h5>
			<p>
				São grupos de programas que operam as funções fundamentais do computador. Mas
				precisamos entender que isso diz muito sobre seu equipamento, já que poderemos 
				desenvolver para outras plataformas, exemplo: vamos usar o sistema operacional Windows,
				porém, nossos aplicativos poderão rodar em outros sistemas como MC OS, Androide e
				as mais recentes linguagens desenvolvidas para navegadores, permitindo a execução de
				aplicativos sem a necessidade de instalação dos softwares no mesmo computador.
			</p>
			<h5>Apps</h5>
			<p>
				Ferramentas para realização de atividades específicas como: realizar cálculos, conectar
				pessoas, exibir vídeo e etc. São muitas as aplicações e nas mais diversas áreas, podemos
				ver os aplicativos instalados em nosso computador no painel de controle no menu INICIAR, 
				esse painel vai nos exibir todas os aplicativos disponíveis no computador. No seu
				celular é so procurar na guia configurações o menu aplicativos, estará a sua disposição
				todos os aplicativos do seu smartphone.
			</p>
			<div>
                <figure class="caixa2">
                    <img src="<?php echo e(asset('assets/img/games_and_animation/unit1/imagem_unit1_05.png')); ?>" alt="guia5">
                </figure>
			</div>
			<br>
        </div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade1/sistema_informacao.blade.php ENDPATH**/ ?>