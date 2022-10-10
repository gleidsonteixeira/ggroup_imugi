
<?php $__env->startSection('titulo','Unit 23 | Simulação, físicas e render'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade23" data-etapa="simulacao_fisica_render">
			<h3 class="barlow">UNIT 23</h3>
			<h5 class="barlow upper">Aula 1 – Simulação, físicas e render</h5>
			<p><b>- Gravidade aplicada aos elementos</b></p>
			<p>
				Todos os elementos reagem de forma diferente a gravidade, mesmo ela sendo uma força
				que interage de forma igual entre os objetos, para criar alguns tipos de simulação para a animação vamos usar outras opções de simuladores.
			</p>
			<p>
				Em <b>simulation</b>, no menu <b>particle</b>, vamos usar a opção emissor, ao inserir note que sua
				posição é lateral em relação a nossa. Altere o configuração <b>position</b> para <b>90 graus</b>, isso deve
				colocar seu emissor de partículas na posição correta, se ativarmos o play da timeline a rasterização
				mostrará pequenos pontos sendo emitidos do nosso ponto inicial, mas se renderizarmos nada
				vai aparecer, para que isso aconteça devemos criar alguns objetos especiais e materiais com a
				textura certa para a simulação necessária.
			</p>
			<p><b>- fogo, frocefilds e dynamics</b></p>
			<p>
				Para interação dinâmica sabemos que é necessário o uso de simulation tags, que define
				como os corpos irão se mover e interagir, para o próximo exercício também precisamos inserir
				alguns objetos específicos.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit23/imagem_unit23_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
				Usando o menu de atalhos aplique um <b>sky</b> e um <b>everioment</b> modificador que garante a
				continuidade do movimento do fogo, agora vamos criar os materias. Primeiro click na opção
				<b>create</b> do painel material, dessa vez vamos escolher a opção <b>shaders</b> e nela a opção <b>pyrocluster</b>
				e novamente nesse menu vamos inserir também <b>pyrocluster- volumtracer</b>.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit23/imagem_unit23_2.png')); ?>" alt="guia2">
				</figure>
			</div>
			<p>
				Dê um click duplo sobre o material <b>pyrocluster</b> e na caixa de diálogo que segue podemos
				configurar o tipo de formato de fogo que queremos: <b>smook, fire, vulcano, cloud e outros</b>.
			</p>
			<p>
				Em <b>settings</b> escolha a opção <b>firebol</b>, ele vai perguntar se você deseja gerar as imagens
				necessárias para produzir a textura, saia da caixa de diálogos material, click sobre <b>pyrocluster</b>
				<b>arrate</b> e solte sobre o <b>emitter</b> no painel objetos, faça o mesmo com <b>pyrocluster-volumetric</b> e
				solte sobre <b>environment</b>, produzindo os feitos necessários para simulação, depois habilite no
				painel de configurações de render <b>effects ambiente occlusion</b> e <b>global light</b>. Como estamos fazendo 
				fogo não será preciso criar outros pontos que emitam luz, o fogo já iluminará o ambiente.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit23/imagem_unit23_3.png')); ?>" alt="guia3">
				</figure>
			</div>
			<p>
				A pré-renderização não vai exibir nada, para visualizar suas alterações precisa renderizar
				o processo, a renderização pode ser mais demorada que todos os outros já que o computador vai calcular a posição e 
				quantos % da textura vai aparecer em cada partícula emitida pelo nosso ponto de emissão.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit23/imagem_unit23_4.png')); ?>" alt="guia4">
				</figure>
			</div>
			<p>
				Clicando sobre o emissor no painel objetos ,o painel <b>object properties</b> vai 
				exibir as configurações do modificador, podemos acrescentar a quantidade e duração dos pontos inseridos,
				isso vai interferir diretamente na propagação de sua chama. Por padrão, o tempo de emissão
				de partículas vem configurado para 150 frames, se necessário esse tempo pode ser expandido
				ou reduzido. 		
			</p>
			<p>
				Crie alguns cilindros e aplique a eles um material com textura que emita luz na cor vermelha,
				configuramos isso no painel material, em um novo material aplique-o aos cilindros e posicione
				na base de nossa fogueira, agora tomando formas mais reais. Faça ajustes de posição até achar
				uma posição ideal para as toras em chamas. Crie movimentos de camera rodeando o fogo.
			</p>
			<p>
				Usando a timeline podemos misturar animações dinâmicas e <b>motion tracks</b>, 
				use sua timeline e faça com que sua chama seja vista de todos os lados, use objetos produzidos em outras
				aulas e coloque-os no mesmo arquivo do fogo. Veja as projeções de sombra entre objetos
				diferentes e use texturas para alimentar o nível de detalhes.
			</p>
			<p>
				Configurar o render para obter o material final da simulação de fogo em vídeo pode levar
				algumas horas, mesmo envolvento poucos quadros. Espere passar algumas horas para que ele
				termine, é recomendado que voce não utilize o computador para outros processos, já que isso
				pode causar gargalos de processamento que podem forçar o processador a desligar, fazendo
				você precisar recomeçar todo processo novamente. Salve seu arquivo para garantir que seu
				trabalho não seja perdido por falta de cuidado.
			</p>
			<p>
				Se você quiser que os objetos tenham reação a colisão, o mesmo deve ser desenhado
				como um objeto separado da estrutura imóvel do cenário, esse é o motivo pelo qual nos jogos
				antigos não podemos quebrar janelas nem mover peças que fazem parte do cenário. Para
				cada objeto que vai reagir a gravidade deve ser inserido o <b>simulation tag rigid body</b>, crie vários
				cubos e empilhe, depois aplique uma <b>simulation tag rigid body</b> clicando sobre os cubos no
				painel <b>objetos</b> com o botão direito, feito isso ative o play na sua timeline e observe o que acontece e como eles reagem entre sim. 
				Selecionando a <b>tag rigid body</b> no painel objetos podemos
				configurar cada uma individualmente atravéz do painel <b>object properties</b>.
			</p>
			<p>
				Com o auxílio do professor, crie uma queda de dominós usando os recursos de <b>simulation</b> tag, 
				faça uma sequência com dominós caindo após o movimento do primeiro. Modele
				e atribua todas as configurações ao primeiro, depois que esse tiver todo configurado crie um
				plano e atribua a ele a propriedade <b>collision body</b> fazendo dele o nosso chão. Posicione seus
				dominós de maneira que ao cair um toque no outro, provocando a queda em sequência onde
				o movimento de um é diretamente ligado ao movimento do seu antecessor. Liberte sua criatividade. 
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade23/simulacao_fisica_render.blade.php ENDPATH**/ ?>