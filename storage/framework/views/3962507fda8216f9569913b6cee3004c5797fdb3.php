
<?php $__env->startSection('titulo','Unit 24 | Camera passiva'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila5" data-unidade="unidade24" data-etapa="particulas_colisao">
			<h3 class="barlow">UNIT 24</h3>
			<h5 class="barlow upper">Aula 1 – Partículas e colisão</h5>
			<p>
				Na última aula usamos um emissor de partículas para que ele animasse um material,
				como textura implementamos alguns objetos especiais como sky e everionment e como resultado criamos uma pequena fogueira.
			</p>
			<p>
				Porém, o emissor pode ser usado para outros princípios, podemos fazê-lo reconhecer
				objetos por exemplo, para isso vamos precisar criar um objeto que será usado como base
				pelo emissor. Modele livremente, esse recurso pode ser usado não apenas para simulação de
				partículas pequenas, projéteis também podem ser criados com essa ferramenta.
			</p>
			<p>
				Vamos trabalhar com um novo tipo de objeto. <b>Object null</b> ou objeto nulo, que serve para
				receber as configurações necessárias a uma propriedade e por caráter de organização, todos
				os outros objetos estarão dentro desse mesmo objeto, mas vamos usar uma tag diferente, a
				<b>expressor</b> que permite a configuração dos objetos e a relação entre eles. Ao inserir o <b>expressor</b> na sua tela, 
				já vai abrir automaticamente o menu expresso com todas as suas propriedades, no painel objetos crie um novo objeto nulo, 
				renomeie ele para emissor e o arraste para dentro de nossa janela expresso.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit24/imagem_unit24_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>
				Dentro dela será criada uma pequena caixa com dois marcadores, um azul no canto direito
				e um vermelho no canto esquerdo superior, o vermelho são as entradas ou comandos que seu
				objeto vai receber para executar, e no canto direito superior o azul, com as saídas que esse
				mesmo vai executar. Clicando no canto direito superior no marcador azul, no menu que surge
				<b>(coordinates)</b> na opção <b>Glogal position</b> escolha a opção <b>global position</b>, será inserido no seu
				emissor a respectiva propriedede. Click novamente no canto superior direito da tela, e dessa
				vez escolha a opção <b>global matrix</b>, em <b>expressor editor</b> precisamos inserir um novo nod, para
				isso vamos no próprio painel <b>expresse editor</b>, temos do lado direito as abas que são: <b>x-manger e x-pool</b>.
			</p>
			<p>
				Em <b>x-pool</b> vamos até <b>system operators</b> e depois em <b>thinking particles</b>, temos diversas
				opções, click sobre <b>TP generation</b>, nessa opção vamos até <b>Pstorme</b>, arraste para próximo do
				outro <b>nod</b> exibido em <b>xgroup</b> no seu painel <b>Xpresso editor</b>. Nesse momento você pode fechar
				a caixa de diálogo <b>Xpressor editor</b> e dar play na timeline, já podemos observar objetos sento
				emitidos a partir do seu <b>emiter point</b>.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit24/imagem_unit24_2.png')); ?>" alt="guia2">
				</figure>
			</div>
			<p>
				Durante a exibição selecione seu object null emissor e tente movê-lo, vai observar que
				as partículas continuam sendo inseridas a partir do mesmo ponto, sem alterações. Para fazer
				com que seu emissor responda aos comandos aplicados no object null dê um click duplo sobre
				a tag expresso no painel objects, isso abrirá novamente o painel expressor editor, 
				agora selecione o ponto localizado logo após Global position em seu emissor, arraste até o nod Pstorm e
				solte quando surgir a marcação verde.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit24/imagem_unit24_3.png')); ?>" alt="guia3">
				</figure>
			</div>
			<p>
				Em <b>emitter position</b> nood que você criou anteriormente, uma linha será criada sinalizando a ligação entre os dois, 
				a partir de agora você já pode mover seu ponto emissor de partículas no ambiente 3D, 
				e ele vai movê-lo de acordo com os movimentos aplicados, mas ainda não responde a rotação.
			</p>
			<p>
				Voltando ao nosso painel <b>expressor</b> no <b>nod Pstorme</b> click no marcador azul, selecione
				a opção <b>Emitter Alignmer</b>, conecte essa opção do mesmo jeito da anterior, click sobre
				o marcador do lado direito de <b>Emitter Alignmer</b> e arraste até o marcador do lado direito de
				<b>Global Matrix</b>. Agora ele emite partículas, segue os movimento e rotações aplicados nele, 
				vamos usar o objeto criado anteriormente para que o emissor reconheça e passe a usá-lo.
			</p>
			<p>
				Click no menu <b>simulator</b>, e em <b>thinking</b> particles escolha a opção <b>particle geometry</b>, esse
				objeto inserido no nosso painel de objetos dirá ao emissor que objeto usar. Crie um objeto
				comum ou use o criado no começo da aula,também pode ser um objeto simples como um
				plane ou polígono, arraste seu objeto para dentro da opção <b>particle geometry</b>, no painel objetos. 
				Estamos quase lá, selecionando <b>particle geometry</b>, o <b>painel object properties</b> vai exibir
				suas propriedades e podemos verificar em <b>particle group</b> que ainda não está descrito qual
				objeto deve ser renderizado, para isso voltamos novamente para o menu simulate, em <b>thiking</b>
				particles escolha a opção <b>thinking particles setings</b>, na caixa de diálogo que se abre podemos 
				configurar várias propriedades do emissor, como número de partículas (cuidado com excessos, seu computador pode travar), entre outros.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit24/imagem_unit24_4.png')); ?>" alt="guia4">
				</figure>
			</div>
			<p>
				Em <b>thinking particles</b> existe um pequeno painel chamado <b>particle groups</b>, nele existe uma
				opção <b>”ALL”</b> (tudo), selecione no seu painel de objetos a opção particle geomety para que suas
				opções sejam exibidas em <b>object properties</b>, fazendo isso selecione a opção <b>“ALL”</b> e arraste
				para dentro da propriedade <b>particle group</b>, agora nosso emissor está configurado e já sabe
				quais partículas deve emitir. 
			</p>
			<p>
				Mas ainda precisamos voltar ao painel <b>expresso editor</b> e inserir um novo <b>nood</b> em <b>x-pool</b>,
				click em <b>sistem, thinking particle</b>, depois click sobre <b>TP standard</b> e arraste pra o <b>xgroup</b> a
				opção <b>Pshape</b>, feito isso arraste o polígono que você quer que seja emitido para a <b>nood</b>
				<b>Pshaper</b>. No <b>nood Pstorm</b> click sobre o marcador direito e insira uma <b>particle birth</b> e conecte
				ao polígono agora carregado no nod <b>Pshape</b>, agora seu emissor está completamente configurado para emitir polígonos, 
				qualquer alteração feita no polígono que está sendo projetado será
				automaticamente atualizado no emissor.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit24/imagem_unit24_5.png')); ?>" alt="guia5">
				</figure>
			</div>
			<p>
				Abra novamente a caixa de diáglogo Expressor editor e selecione o <b>nood</b>, 
				em <b>object properties</b> vão sugir as configurações do seu emissor, podemos mudar o formato do emissor clicando
				sobre <b>type</b>, e mudar o tipo de inserção em <b>Birth types</b>, as configurações a baixo controlam
				outros fatores como tempo de exibição, velocidade, quantidade de partículas emitidas por
				frames, tempo de duração entre as partículas e seu tamanho. Altere os fatores e observe as
				alterações, se perca um pouco no que está fazendo e quando terminar terá uma carga de conhecimento muito maior.
			</p>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/games_and_animation/unit24/imagem_unit24_6.png')); ?>" alt="guia6">
				</figure>
			</div>
			<p>
				Crie um arquivo novo em <b>file>>new</b> ou atravéz do atalho <b>CTRL+N</b>, nesse novo arquivo crie um
				cubo como forma simples, volte a barra e insira um <b>twist</b> atravéz do botão <b>bend object adcione</b>,
				esse modificador irá realizar a torção sobre os objetos que estão na tela, no nosso caso o cubo.
				Porém, podemos substituí-lo por qualquer objeto pré modelado, os efeitos aplicados terão
				as mesmas propriedades, mas para que isso aconteça no cubo precisamos subdividi-lo, click
				sobre ele e o no object <b>properties>>objec>>segmentes</b> atribua o número 20 a todos os eixos.
			</p>
			<p>
				Podemos visualizar os cortes indo no menu <b>display</b>, marque a opção <b>gouraud shading</b>,
				no <b>painel objects</b>. Para que a torção desse modificador seja efeita devemos fazer dele uma
				parte do objeto, conseguimos isso arrastando ele para dentro do objeto, isso cria a relação
				necessária para interação entre os dois clicando sobre seu <b>twister</b> no painel objetos. Podemos
				configurar suas propriedades no painel objetos, os parâmetros exibidos são:
			</p>
			<ul>
				<li><p><b>Size</b> - com seus atributos respectivos para os eixos X, Y e Z. </p></li>
				<li><p><b>Mode</b> - que define suas formas de interação com o objeto, tendo a disposição limited,
					<b>within box</b> e um <b>limitet</b>. </p></li>
				<li><p><b>Angle</b> - nosso último parâmetro, ângulo da torção que deseja aplicar. </p></li>
			</ul>
			<p>
				Mova a seleção do seu twist e veja as diferentes formas de interação entre os objetos em
				folloff, no painel object properties temos o parâmetro shape, isso permite criar formas de
				interação baseadas em formas diferentes das envolvidas originalmente para que consiga os
				resultados desejados, suas propriedades também são configuráveis para animações em timeline como mostrado em outras aulas.
			</p>
		</div>
    </div>
	    
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila5/unidade24/particulas_colisao.blade.php ENDPATH**/ ?>