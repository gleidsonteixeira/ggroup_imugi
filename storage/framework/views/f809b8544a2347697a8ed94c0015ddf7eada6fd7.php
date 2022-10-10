
<?php $__env->startSection('titulo','Unit 13 | Animação para render'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade13" data-etapa="animacao_render">
			<h3 class="barlow">UNIT 13</h3>
			<h5 class="barlow upper">Aula 1 – Animação para render</h5>
			<div class="container">
				<div class="umterco esquerda">
					<p>
						Quando criamos uma animação
						em <b>render</b> planejamos ter o maior
						número de detralhes possíveis, reduzindo a taxa de quadros e permitindo a criação de frames enormes,
						promovendo <b>higdifinition</b> para as estruturas renderizadas, somando isso
						a um planejamento da animação os
						resultados serão incríveis.
					</p>
					<p><b>Renderização</b></p>
					<p>
						Na barra de atalhos temos os botões de render, crie um pequena animação simples usando os recursos que já 
						foram estudados em aulas anteriores, depois de pronto clique no terceiro botão da
						barra de render, ele vai permitir acesso as configurações e propriedades ligadas ao render.
					</p>
				</div>
				<div class="tresquarto direita">
					<figure>
						<img src="<?php echo e(asset('assets/img/games_and_animation/unit13/imagem_unit13_1.png')); ?>" alt="guia1">
					</figure>
				</div>
			</div>
			<div class="clear"></div>
			<p>
				Ao clicar, uma nova janela abre e nela temos as primeiras configurações que permitem
				redimensionar o tamanho da tela, para isso devemos ter ciência de que tipo de dispositivos
				serão usados para apresentar nosso moviclip.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit13/imagem_unit13_2.png')); ?>" alt="guia2">
				</figure>
			</div>
			<p>
				Podemos definir tamanhos na mesma aba através das opções pré estabelecidas, clicando
				sobre <b>filme aspect</b> temos os formatos de tela, todas são opções de <b>out put</b>. Na aba <b>saves</b>
				podemos configurar onde nosso arquivo final será hospedado e principalmente o formato, se
				você quer tranformar sua animação em vídeo deve escolher as opções <b>avi</b> ou <b>movi clip video</b>
				na opção formato, depedendo das opções a sua disposição. Com estas informações configuradas 
				o software já tem as informações necessárias para realizar o processo de renderização.
				Feche as janela, as configurações são aplicadas automaticamente, agora clique sobre o botão
				do meio da barra de renderização e o programa irá renderizar todos os quadros de sua animação.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit13/imagem_unit13_3.png')); ?>" alt="guia3">
				</figure>
			</div>
			<p>
				Obs.: Durante esse processo, o ideal é que o computador não execute nenhum outro processo, 
				garantindo total dedicação da máquina ao render, se possível desative sua tela pelo
				tempo estimado, mesmo os notebooks permitem esse tipo de desativação, ao término
				do processo seus arquivos estarão salvos onde você configurou na primeira janela na aba
				<b>saves</b>.
			</p>
			<p>
				Esse material é um dos tipos que você pode criar com nossas ferramentas, mas podem
				incrementar nossos elementos com juntas e motores dinâmicos, movimentos de camera e animações diversas. 
				Seu material de saída pode ser visualizado mesmo fora do programa usado
				para criá-lo, no caso o cinema 4D, podendo facilmente ser executado em qualquer reprodutor básico de vídeos.
			</p>
			<p>
				Podemos ampliar a movimentação usando uma camera, movendo-a através dos recursos
				de navegação podemos prendê-la e facilitar o funcionamento com a timeline. Clique no menu
				camera e escolha a opção use camera e clique sobre a camera que você inseriu, isso vai te
				colocar na visão da camera que você criou, marque o botão automatic keyframe, realize um
				movimento na camera e clique em uma nova posição da timeline, repita isso algumas vezes
				e faça sua camera navegar pelo ambiente, clique no play se o resultado for satisfatório a suas
				espectativas renderize, não exite.
			</p>
			<p><b>Tipos de tela</b></p>
			<p>
				Em frame aspect temos uma série de opções interessantes, ao clicar na seta dropdonw temos algumas opções:
			</p>
			<ul>
				<li><p><b>Square</b> (1:1 tela quadrada)</p></li>
				<li><p><b>Standard</b> (4:3 formato comum para televisores)</p></li>
				<li><p><b>Hdtv</b> (16:9 compatível com os formatos de exibição em ultrahHD como smartgates, tablets, smartphone e smart tv)</p></li>
				<li><p><b>35mm still</b> (3:2 formato de filmagem semi profissional antigo mine dv)</p></li>
				<li><p><b>Widscreens</b> (14:9 imagens em formato HD)	Cinema 35mm (1,85:1 projeções em telas de cinema)</p></li>
				<li><p><b>Panavision</b> (2,39:1 formatos de captura sobre super exposição capturados por cameras
					separadas captando apenas cores específicas da imagem, sendo posteriormente montadas em ambiente digital como no photoshop.)</p></li>
			</ul>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit13/imagem_unit13_4.png')); ?>" alt="guia4">
				</figure>
			</div>
			<div class="clear"></div>
			<div class="tresquarto esquerda">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit13/imagem_unit13_5.png')); ?>" alt="guia5">
				</figure>
			</div>
			<div class="umterco direita">
				<p>
					Os diferentes formatos são consequência
					do desenvolvimento rápido das tecnologias de
					captura e projeção, as primeiras telas montavam
					imagem com 200 linha de altura restritos pela
					tecnologia do tempo, hoje temos quadros compostos por mais de 4000 linhas, imagens com
					proporções absurdas garantindo a imerção do
					espectador.
				</p>
				<p>
					Esta imagem exemplifica o percurso da imagem e sua eterna luta por definição, nitidez e cores.
				</p>
			</div>
			<div class="clear"></div>
			<p><b>Imagens e frame hate</b></p>
			<p>
				Os primeiros televisores trabalhavam com poucas linhas, e tinha uma formação de quadros
				que variava entre 60 hz e 50 hz. Os monitores de tubo CRT ( catódico rai tube) para tvs, trabalhava com até 200 linhas 
				em modo progressivo com uma taxa de quadros de 60 hz, já o
				monitor CRT usado em fliperamas usava até 400 linhas no sitema intrelaçado. 
			</p>
			<p>
				<b>Sistema progressivo</b> gera cada linha de cada imagem sucessivamente de cima para baixo.
			</p>
			<p>
				<b>Entrelaçado</b> usa suas linhas de maneiras diferentes, já que nos frames ímpares ele renderiza
				só as linhas ímpares e nos frames pares só as linhas pares. Esse recurso permite
				uma fluidez maior para o uso de motores gráficos e monitores de tubo, até hoje a projeção 
				analógica de som e luz supera o desempenho emocional dos recursos digitais. 
			</p>
			<p><b>Progressivo</b></p>
			<p>O sistema progressivo usa a taxa de formação de quadros que pode ser de 50hz ou 60 hz
				por segundo, montando todas as imagens de uma sequência de frames em ordem e de maneira sequencial.</p>
			<p><b>Entrelaçado</b></p>
			<p>
				Os equipamentos analógicos usavam recursos interessantes, como o ato de intrelaçar
				os frames da imagem gerando sequências intercaladas entre frames e linhas, funcionando
				também a uma taxa de 50hz ou 60hz. Permitiam uma emulação de velocidade maior que a
				fornecida pelo sistema, função tão eficiente que os televisores e aparelhos smart modernos
				usam, copiam e depois de uma geração sem uso ele voltou para os ultra formatos.
			</p>
			<p>
				<b>Obs</b>: Os computadores e televisores atuais não tem problemas em oscilar entre taxas e
				formações de quadros, o recurso de formação de imagens hoje se define pelos novos
				processadores de vídeo. As grandes impresas continuam investindo para impulsionar seus
				impérios a frente, entre as maiores empresas do ramo estão a <b>Nvídia, Adobe, AMD, Intel,
				Sony, Nintendo e Apple</b>, seus produtos vão de filmes longa metragem a efeitos para séries
				e filmes, usam isso como forma de expor suas tecnologias, e funciona.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade13/animacao_render.blade.php ENDPATH**/ ?>