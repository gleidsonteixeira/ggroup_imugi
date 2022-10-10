
<?php $__env->startSection('titulo','Unit 15 | Simulação de materiais'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade15" data-etapa="simulacao_materiais">
			<h3 class="barlow">UNIT 15</h3>
			<h5 class="barlow upper">Aula 1 – Simulação de materiais</h5>
			<div class="tresquarto esquerda">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit15/imagem_unit15_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<div class="umterco direita">
				<p>
					Na lição anterior aprendemos
					a atribuir aos nossos objetos os
					relevos expostos na textura através
					do uso de materiais, agora vamos
					explorar a física dos materiais,
					criar interação e reação entre os
					envolvidos, para isso precisamos
					atribuir propriedades físicas diferentes configurando interações e
					fazendo nosso mesh se comportar como um material específico
					através da física dinâmica.
				</p>
			</div>
			<div class="clear"></div>
			<p>
				Para nosso próximo exercício crie um plano e uma esfera, redimencione o plano para que
				ele tenha tamanho suficiente para envolver a esfera e posicione os dois de maneira que o
				plano fique a cima da superfície da esfera.
			</p>
			<p><b>Tecido</b></p>
			<p>
				Para atribuir propriedades dinâmicas ao tecido precisamos inserir subvisões a essa forma,
				com isso a forma será subdividada, esse tipo de forma recebe o nome de polígono. Quanto
				mais polígonos maior o nível de realismo, assim como o esforço do processador, podendo
				provocar legs e atrasos na execução da imagem, dependendo da quantidade de subdivisões
				pode derrubar até o seu sistema operacional obrigando você a reiniciar o seu computador.
				Cuidado com exageros.
			</p>
			<p>
				Para subvidir o plano selecione-o no painel de propriedades e clique sobre a opção <b>object</b>, 
				em <b>widht segmant</b> deixe configurado para 20 segmentos, sua forma será cortada por
				linhas no eixo <b>“X”</b>, em <b>height segments</b> configure para 20 segmentos, sua forna será cortada
				no sentido do eixo <b>“Z”</b>. Quando realizar essa tarefa sua forma original estará composta por
				subdvisões que o software vai usar para aplicar as distorções físicas. Porém, elas só se tornarão efetivas se a 
				forma estiver convertida em objeto editável, então pressione a letra “C” no
				seu teclado ou clique no primeiro ícone da barra de ferramentas. 
			</p>
			<p>
				Clique com o botão direito sobre o painel de objetos, no menu que surge procure pela
				opção <b>simulation tags</b> e clique na opção <b>cloth</b>, isso vai garantir o comportamento do tecido,
				mas se você der <b>play</b>, vai observar que o mesmo não interage com a esfera localizada a baixo
				dele transpassando como a um fantasma. Clique com o botão direito sobre a esfera no painel
				objetos, novamente no menu <b>simulation tags</b> clique na opção <b>cloth collider</b>, feito isso retorne
				a sua timeline ao momento inicial e ative novamente o play, dessa vez os objetos estão em
				completa interação. 
			</p>
			<p>
				Clicando sobre a <b>simulation tag</b> do tecido no painel de objeto vá até o painel de propriedades, 
				clique no botão <b>expert</b> e habilite a opção <b>self collision</b>, fazendo o tecido reconher o
				próprio toque. Em <b>sub samping</b> podemos configurar o grau de dilatação do tecido ao tocar
				o objeto, 0 (zero) representa o maior nível de interação, quanto maior o número menor a
				dilatação das faces do tecido, use para criar diversos comportamentos para diferentes tipos
				de tecido, isso atribui a sua forma do plano as propriedades que permitem a ele simular o
				comportamento de um tecido caindo sobre algum objeto.
			</p>
			<div>
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit15/imagem_unit15_2.png')); ?>" alt="guia2">
				</figure>
			</div>
			<p>
				Você pode atribuir materiais para texturizar a forma e renderizar um vídeo como descrito na aula anterior, 
				relacionar os conhecimentos gera a interdiciplinaridade, garantindo seu aprendizado.
			</p>
			<div>
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit15/imagem_unit15_3.png')); ?>" alt="guia3">
				</figure>
			</div>
			<p>
				<b>Teste:</b> Usando a opção <b>open marg</b> do menu <b>file</b>, traga para esse arquivo todos os 
				objetos que você modelou na primeira aula, 
				atribua a eles a <b>simulation tag cloth collider</b> e observe o comportamento do tecido caindo sobre eles, 
				faça renderizações para criar seu portfólio.
			</p>
			<p><b>Transparência</b></p>
			<p>
				Vamos dividir a tranparência em 2 tipos: <b>Plásticos</b> e Aquosos. Plástico tem um tipo de
				transparência diferente do vidro ou líquido, vamos começar com <b>plaxiglass</b>, uma forma de
				plástico vitrificado desenvolvido nos anos 40, não refrata a luz, evitando as distorções 
				causadas pelos vidros em aviões, que precisavam ter a tranparência do vidro, mas com maior 
				resistência e maleabilidade. Já o vidro tem um comportamento líquido, provoca uma distorção
				na luz chamada refração, facilmente observada quando se mergulha um canudo dentro de um copo com água, 
				tornando desinteressante seu uso em uma série de áreas da indútria aeroespacial e altomobilística.
			</p>
			<p>
				<b>Aplicando a transparência no material:</b> dê um clique duplo sobre o material que deseja
				adicionar tranparência na janela <b>material editor</b>, na opção color mantenha o preto, procure a
				opção e habilite. Em <b>layer setup</b> que é a primeira opção da janela <b>reflectance</b>, clique em Add
				e adicione um <b>bakmann</b>, isso vai atribuir uma simulação de cromo a textura do seu material.
			</p>
			<p>
				Agora em <b>layer color</b> clique na <b>dropdown</b> da opção texture, aplique um <b>fresnel</b>, mas é
				preciso saber que ela refletirá o que se tem em volta. Aplicando isso a um objeto ele já terá
				uma parte das propriedades de transparência, clique com o botão direito na janela <b>object</b>,
				na representação do objeto sobre o qual o você atribuiu o efeito que acabamos de configurar
				ainda não possui transparência, no menu que surge clique em <b>cinema 4d</b> tgs e escolha a opção
				<b>display</b>, no painel propriedades habilite a opção <b>visibility</b>, ao fazer isso ficará configurado
				como 100%. Se você reduzir esse número torna maior a transluminescência com a qual o 
				objeto vai ser exibido na projeção final da renderização.
			</p>
			<p>
				Para ter um bom resultado clique nas configurações de render e em <b>anti-aliasing</b>, na
				opção anti-alising clique na <b>dropdown</b> que está marcando <b>geometry</b> e reconfigure para best,
				no botão <b>effect</b> habilite <b>ambient occlusion</b> e <b>global illumination</b>, lembrando que para a 
				segunda opção é necessário o uso de um ponto de luz. Configurado tudo, clique em render, esse
				processo cria materiais transparentes mas não vidro.
			</p>
			<p>
				Para criar vidro crie um novo material na aba materiais embaixo da timeline, dando um
				click duplo será criado o material, clicksobre ele e na janela que abrir desabilite as opções
				<b>reflectance</b> e <b>color</b>, habilite a opção <b>transparency</b> e marque a opção refraction, coloque o
				número 3. Crie um novo objeto e adicione o material, isso pode deixar o render muito mais
				lento já que software usando as configurações habilitadas pra render tornará o processo bem
				mais pesado, levando muito mais tempo para realizar a renderização.
			</p>
			<p><b>Projeção e simulação de sombra</b></p>
			<p>
				Para que o programa funcione de maneira coerente, é sempre necessário habilitar as
				opções <b>global lights</b>, isso fará o objeto texturizado responder corretamente as interações de
				luz criadas por você e projeção de sombra entre objetos diferentes. A opção <b>ambiente occlusion</b>
				cria as referências da sobra do objeto projetadas nele mesmo, todas as opções para configuração 
				estão disponíveis na aba e são aplicadas a todos o objetos presentes na área do render
				estando ele texturizado ou não.
			</p>
			<p>
				Criamos objetos em 3D para texturizar com materiais pré fabricados e podemos atribuir
				propiedades físicas que permitem ao molde se comportar como um corpo flexível, isso é uma
				simulação de material para que nosso programa possa gerar as imagens com a máxima fidelidade
				de detalhes, nosso produto final será a composição de uma imagem estática ou uma animação
				em formatos diversos que podemos configurar.
			</p>
			<p>
				O uso de recurso como sombra e luz traz dramaticidade ao cenário ou composição realizadas, 
				tome muito cuidado com exageros, nem tudo precisa piscar ou ter muitas cores, existem
				regras e exceções. Teste e refaça, os melhores são sempre os que exigem mais tempo.
				Dedicação e esforço sempre são recompensados com bons resultados.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade15/simulacao_materiais.blade.php ENDPATH**/ ?>