
<?php $__env->startSection('titulo','AFTER EFFECTS CC | RENDERIZAÇÃO'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade9" data-etapa="renderizacao">
			<h3 class="barlow">UNIT 9 - AFTER EFFECTS CC </h3>
			<h5 class="barlow upper"> RENDERIZAÇÃO</h5>

			<h5>Visão geral de renderização e exportação</h5>
			<p>
				Basicamente renderizar é a criação dos frames de um filme de uma composição. A renderização
				de um frame é a criação de uma imagem composta de duas dimensões de todas as layers,
				configurações e outras informações em uma composição que forma o modelo dessa imagem.
			</p>
			<p>
				Vale lembrar que renderização não se aplica apenas ao resultado final. Os processos de criação
				de visualizações para os painéis footage, layer e composition também são tipos
				de renderização.
			</p>
			<p>
				O usuário pode visualizar tudo ou parte de sua composição conforme trabalha, sem ter de
				fazer um render para a saída final. O after aloca a RAM para reproduzir vídeo e áudio no painel
				timeline, layer ou footage em tempo real. Assim, o número de frames que podem ser armazenados
				para reprodução em tempo real dependem da quantidade de RAM disponível e das
				configurações no painel de visualização.
			</p>
			<p>
				Ao pressionar a barra de espaço o after inicia uma pré-visualização com áudio e armazena
				cachês até que a RAM disponível seja preenchida. O comportamento padrão de visualização é
				configurado para produzir uma visualização que representa uma reprodução em tempo real.
				Após uma composição ser renderizada para saída final, a mesma é processada por um ou mais
				módulos de saída que codificam os frames renderizados em um ou mais arquivos de saída.
				Esse processo de codificação de frames renderizados em arquivos para saída é um tipo de
				exportação.
			</p>
			<p>
				É possível converter um filme em um único arquivo de saída que contém todos os quadros
				renderizados, ou em uma seqüência de imagens estáticas. O usuário pode renderizar suas
				composições usando a fila de renderização do after ou adicionar suas composições à fila
				do adobe media encoder com as configurações de renderização escolhidas no painel render
				queue.
			</p>
			<p>
				Para o render queue o after usa uma versão incorporada do adobe media encoder para codifi
				car a maioria dos formatos de filme através do painel render queue. Quando você gerencia
				operações de renderização e exportação com o painel render queue, a versão incorporada do
				adobe media encoder é chamada automaticamente. O adobe media encoder aparece apenas
				na forma das caixas de diálogo de configurações de exportação com as quais o usuário especifi
				ca algumas configurações de codificação e saída. Dependendo do tamanho, qualidade,
				complexidade e método de compressão da composição, renderizar uma composição em um
				filme pode demorar alguns segundos ou muitas horas. Vale lembrar que quando o after está
				renderizando não é possível trabalhar no programa. Um alerta de áudio irá indicar quando a
				renderização estiver completa. Mesmo quando a renderização de um item estiver concluída,
				este item permanece no painel render queue com seu status alterado para done até que o
				usuário remova o item do painel render queue. Não é possível renderizar novamente um item
				completo, mas é possível duplicá-lo para criar um novo item na fila com as mesmas configurações
				ou com novas configurações.
			</p>

			<h5>Status do painel render</h5>
			<p>
				Cada item de renderização tem um status, que aparece na coluna Status
				no painel Render Queue:
			</p>
			<p>
				• Unqueued: o item de renderização está listado no painel render queue, mas não está
				pronto para renderizar (confirme se você selecionou as configurações de renderização
				desejadas e as configurações do módulo de saída e, em seguida, selecione a opção render
				para filtrar o item de renderização)
			</p>
			<p>
				• Enfileiradas: o item de renderização está pronto para renderizar.
			</p>
			<p>
				• Necessidade de Saída: não foi especificado um nome de arquivo de saída (escolha um
				valor no menu saída para ou clique no texto sublinhado ainda não especificado ao lado do
				cabeçalho saída para para especificar um nome de arquivo e caminho)
			</p>
			<p>
				• Falhou: o after effects não conseguiu renderizar o item de renderização (use um editor
				de texto para ver o arquivo de log para informações específicas sobre por que a renderização
				não teve êxito). Quando um arquivo de log foi gravado, o caminho para o arquivo de
				log aparece no título render settings e no menu log
			</p>
			<p>
				• Usuário parou: o processo de renderização foi interrompido
			</p>
			<p>
				• Feito: o processo de renderização para o item está completo
			</p>
			<p>
				O usuário também pode exportar composições do after diretamente para o adobe media
				encoder, que oferece flexibilidade para continuar trabalhando no after enquanto os arquivos
				estão sendo processados. Ao usar o adobe media encoder, o usuário também pode usar predefi
				nições e opções adicionais que não estão disponíveis na fila de renderização do after.
			</p>
			<p>
				Para adicionar sua composição à fila de codificador do adobe media use um dos seguintes
				métodos: Acesse composição > adicionar ao adobe media encoder queue ou acesse arquivo >
				exportar > adicionar ao adobe media encoder queue para renderização final usando predefinições e configurações especificadas no Adobe Media Encoder.
			</p>

			<p>
				Para colocar em espera no botão AME na fila de renderização: acesse window > render queue
				para renderizar um rascunho de sua composição usando as configurações de renderização
				especifi cadas na fila de renderização, enquanto você continua trabalhando na composição.
				O after oferece vários formatos e opções de compressão para saída. O formato e as opções de
				compactação que o usuário irá escolher depende de como sua saída será usada. Por exemplo,
				se o filme que o usuário renderiza do after é o produto final que será jogado diretamente para
				uma audiência, então é preciso considerar o meio do qual o usuário vai jogar o filme e quais as
				limitações que possui no tamanho e dados do arquivo taxa. Em contrapartida, se o filme que
				criado no after é um produto intermediário que será usado como entrada para um sistema de
				edição de vídeo, então o usuário deve produzir sem compressão para um formato compatível
				com o sistema de edição de vídeo.
			</p>
			<p>
				Fique atento ao fato de que é possível usar diferentes esquemas de codificação e compactação
				para diferentes fases do seu fluxo de trabalho. Por exemplo, vale optar por exportar
				alguns frames como imagens estáticas de resolução total (por exemplo, arquivos TIFF) quando
				é preciso aprovação de um cliente sobre as cores em um Take, também é possível exportar o
				filme usando um esquema de codificação com perda (por exemplo, H.264) quando é preciso
				aprovação para o tempo da animação.
			</p>

		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade9/renderizacao.blade.php ENDPATH**/ ?>