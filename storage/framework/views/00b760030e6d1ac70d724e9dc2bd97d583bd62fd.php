
<?php $__env->startSection('titulo','Unit 11 |  Configurações da câmera'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade11" data-etapa="configuracao_camera">
			<h3 class="barlow">UNIT 11</h3>
			<h5>Configurações da câmera</h5>
			<p>
				As configurações da câmera podem ser alteradas a qualquer momento clicando duas vezes na layer no painel timeline ou selecionando a layer e escolhendo layer configurações da câmera.
				As propriedades da câmera relacionadas ao borrão e forma da lente da câmera incluem: forma de íris, rotação de íris, redução de íris, relação de aspecto de íris, franja de difração de íris,
				destaque de ganhos, limite de destaque e saturação de destaque.
			</p>
			<h5>Tipos</h5>
			<p>
				Câmera de um nó ou câmera de dois nós. Uma câmera de um nó se orienta em torno de si mesma, enquanto uma câmera de dois nós tem um ponto de interesse e orienta-se em torno
				desse ponto. Fazer uma câmera de dois nós é o mesma que definir a opção de orientação automática de uma câmera para orientar o ponto de interesse.
				Para definir a opção de orientação automática de uma câmera escolha layer transform	Auto-Orient.
			</p>
			<h5>Nome</h5>
			<p>
				Por padrão o nome da câmera é câmera 1 (nome da primeira câmera que você cria em uma
				composição, e todas as câmeras subsequentes estão numeradas em ordem crescente).
			</p>
			<p>É possível renomear as câmeras.</p>
			<h5>Preset</h5>
			<p>
				Aqui é possível definir o tipo de configurações da câmera que deseja usar. As predefinições	são nomeadas de acordo com as distâncias focais. Cada predefi nição pretende representar
				o comportamento de uma câmera de 35mm com uma lente de determinada distância focal.
				Portanto, a predefinição também define os valores angle of view, zoom, distância de foco,	focal length e aperture. A predefinição predefinida é de 50 mm. Também é possível criar uma
				câmera personalizada especificando novos valores para qualquer uma das configurações.
			</p>
			<ul class="unidade_6_5">
				<li>Zoom: a distância da lente para o plano da imagem. Em outras palavras, uma camada	que é a distância de zoom afastada aparece em seu tamanho completo, uma camada que
							é o dobro da distância do zoom, aparece meio como alta e larga, e assim por diante.
					</li>
					<li>
						Ângulo de visão: a largura da cena capturada na imagem. Os valores do comprimento	focal, do tamanho do filme e do zoom determinam o ângulo de visão. Um ângulo de visão
						mais amplo cria o mesmo resultado que uma lente grande angular.
					</li>
					<li>
						Profundidade do campo: aplica variáveis personalizadas às configurações de distância de foco, abertura, f-parada e nível de desfocagem. Usando essas variáveis, é possível manipular a profundidade de campo para criar efeitos de focagem de câmera mais realistas.
						A profundidade do campo é o alcance da distância dentro do qual a imagem está em foco.
						As imagens fora do alcance da distância estão desfocadas.
					</li>
					<li>Distância de foco: a distância da câmera ao plano que está em foco perfeito.</li>
					<li>Bloquear para Zoom: faz com que o valor de distância de foco corresponda ao valor de zoom.</li>
					<li>Abertura: o tamanho da abertura da lente. A configuração da Abertura também afeta
								a profundidade do campo; aumentar a abertura aumenta a profundidade do borrão do
								campo. Quando você modifica o Aperture, os valores de F-Stop mudam para combiná-lo.
					</li>
					<li>
						F-Stop: representa a proporção da distância focal para a abertura. A maioria das câmeras especifica o tamanho da abertura usando a medida f-stop; Assim, muitos fotógrafos
						preferem definir o tamanho da abertura em unidades f-stop. Quando você modifica F-Stop, o Aperture muda para combiná-lo.
					</li>
					<li>
						Nível de borrão: a quant dade de borrão de profundidade de campo em uma imagem.
						Uma configuração de 100% cria um borrão natural conforme as confi gurações da câmera.
						Valores mais baixos reduzem o borrão.
					</li>
					<li>
						Tamanho do filme: o tamanho da área exposta do filme, que está diretamente relacionado ao tamanho da composição. Ao modificar o tamanho do filme, o valor do zoom muda para coincidir com a perspectiva de uma câmera real.
					</li>
					<li>
						Comprimento focal: a distância do plano do filme para a lente da câmera. No after effects, a posição da câmera representa o centro da lente. Quando você modifica o comprimento focal, o valor do zoom muda para coincidir com a perspectiva de uma câmera real.
						Além disso, os valores predefinido, ângulo de vista e abertura variam de acordo.
					</li>
					<li>
						Unidades: as unidades de medida em que os valores de configuração da câmera são expressos.
				 </li>
					<li>
						Medir o tamanho da película: as dimensões utilizadas para descrever o tamanho do filme.
					</li>
			</ul>
			<h5>Crie uma luz e altere as configurações de luz</h5>
			<p>
				Uma layer de luz pode afetar as cores das layers 3D que ele brilha, dependendo das configurações da luz e das propriedades das opções de material das layers 3D. Cada luz, por padrão,
				aponta para o seu ponto de interesse. As luzes podem ser usadas para iluminar layers 3D e	para lançar sombras. Também é possível usar luzes para combinar as condições de iluminação
				da cena na qual você está compondo ou para criar resultados visuais mais interessantes. Por	exemplo, você pode usar layers de luz para criar a aparência da transmissão de luz através de
				uma layer de vídeo como se fosse feita de vitrais. É possível animar todas as configurações de	uma luz, exceto o t po de luz e a propriedade casts shadows.
			</p>
				<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit11/imagem_unit11_2.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>A. Ponto de interesse B. Ícone da luz</p>
			<p>
				Ao designar a luz como uma layer de ajuste (coloque a luz no painel timeline acima das layers nas quais você deseja que ele brilhe) você especifica quais layers 3D deseja que uma luz afete.
			</p>
			<p>
				As layers que estão acima de uma layer de ajuste de luz na ordem de empilhamento de layer no painel timeline não recebem a luz, independentemente das posições das layers no painel composição.
			</p>
		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade11/configuracao_camera.blade.php ENDPATH**/ ?>