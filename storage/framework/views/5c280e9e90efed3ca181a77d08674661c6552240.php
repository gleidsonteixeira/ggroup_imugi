
<?php $__env->startSection('titulo','Unit 14 | After Effects CC - MOTION GRAPHICS'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade14" data-etapa="motion_graphics_effects">
			<h3 class="barlow">UNIT 14 - After Effects CC</h3>
			<h5 class="barlow upper">AULA 11 e 12 - MOTION GRAPHICS EFFECTS E LIQUID MOTION</h5>

			<p>As layers de forma contêm objetos gráficos vetoriais chamados formas. Por padrão, uma forma consiste em um caminho, um traço e um preenchimento. É possível criar camadas de formas desenhando no painel composição com as ferramentas de forma ou a ferramenta caneta. Os caminhos da forma têm duas variedades: caminhos de forma paramétrica e caminhos de forma de bezier. Os caminhos de forma paramétrica são definidos numericamente, por propriedades que você pode modificar e animar após o desenho, no painel timeline. Os caminhos de forma bezier são definidos por uma coleção de vértices (pontos de caminho) e segmentos que você pode modificar no painel composição. É possível trabalhar com os caminhos de forma bezier da mesma maneira que se trabalha com caminhos de mask. Todos os caminhos de mask são caminhos bezier.</p>
			<p>Para modificar um caminho de forma aplique operações de caminho, como Wiggle Paths e Pucker & Bloat. Aplique um traço para um caminho ou preencha a área definida por um caminho com cores aplicando operações de pintura.</p>
			<p>Caminhos de formas, operações de pintura e operações de caminho para formas são coletivamente chamados de atributos de forma. Você adiciona atributos de forma usando o menu adicionar no painel ferramentas ou no painel timeline. Cada atributo de forma é representado como um grupo de propriedades no painel timeline, com propriedades que você pode animar, assim como você faz com qualquer outra propriedade de layer.</p>
			<p>A profundidade de bit de cor de uma camada de forma é igual ao projeto como um todo: 8, 16 ou 32 bpc. As layers de forma não são baseadas em itens de metragem. As layers que não são baseadas em itens de filmagem às vezes são chamadas de layers sintéticas. As layers de texto também são layers sintéticas e também são compostas por objetos de gráficos vetoriais, muitas das regras e diretrizes aplicáveis às layers de texto também se aplicam às layers de forma. Por exemplo, você não pode abrir uma layer de forma em um painel de layer, assim como você não pode abrir uma layer de texto em um painel de layer</p>

			<h5>Adicionando atributos para a Shape Layer</h5>
			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit14/imagem_unit14_1.png')); ?>" alt="guia1">
				</figure>
			</div>
			<p>Depois que uma Shape Layer foi criada, é possível adicionar atributos - paths, operações de pintura e operações de path - usando o menu adicionar no painel ferramentas ou no painel timeline. Por padrão, os novos atributos são inseridos no grupo ou grupos de formas selecionados de acordo com as seguintes regras:</p>
			<p>
				• Novos caminhos são adicionados abaixo de caminhos e grupos existentes.<br/>
				• Novas operações de caminho - como Zig Zag e Wiggle Paths - são adicionadas abaixo das operações de caminho existentes. Se nenhuma operação do caminho estiver presente, as novas operações do caminho são adicionadas abaixo dos caminhos existentes.<br/>
				• Novas operações de tinta - traços e preenchimentos - são adicionadas abaixo dos caminhos existentes e acima dos traçados e preenchimentos existentes.
			</p>
			<p>Para substituir essas regras e colocar um novo atributo no final do grupo, abaixo de todos os atributos, mantenha pressionada a tecla Alt, enquanto você clica para escolher um item no menu adicionar. A operação repetidor sempre é adicionada no final do grupo.</p>

			<h5>Grupos e ordem de renderização para formas e atributos de forma</h5>
			<p>Embora o padrão seja para que uma forma consista em um único caminho, um único traçado e um único preenchimento organizado de cima para baixo no painel timeline - grande parte da força e flexibilidade das layers de forma decorre da sua capacidade de adicionar e reordenar, formar atributos e criar formas complexas mais complexas. É possível agrupar formas ou atributos de forma que estão no mesmo nível de agrupamento dentro de uma única camada de forma.</p>
			<p>Um grupo é uma coleção de atributos de forma: caminhos, preenchimentos, traçados, operações de caminho e outros grupos. Cada grupo possui seu próprio modo de mesclagem e seu próprio conjunto de propriedades de transformação. Ao montar formas em grupos, você pode trabalhar com múltiplas formas simultaneamente - como escalar todas as formas no grupo pela mesma quantidade ou aplicar o mesmo golpe a cada forma. É possível até colocar formas individuais ou atributos de forma individual dentro de seus próprios grupos para isolar transformações. Por exemplo, você pode escalar um caminho sem dimensionar seu curso agrupando o caminho sozinho.</p>
			<p>Quando você adiciona um atributo de forma usando o menu adicionar no painel ferramentas ou no painel timeline, o atributo é adicionado no grupo selecionado. É possível arrastar grupos e atributos para reorganizá-los no painel timeline. Ao reordenar e agrupar formas e atributos de forma, você pode afetar sua ordem de renderização em relação a outras formas e atributos de forma.</p>

			<h5>Alterar formas com operações de caminho</h5>
			<p>As operações do caminho são semelhantes aos efeitos. Essas operações em tempo real atuam de forma não destrutiva no caminho de uma forma para criar um caminho modificado que outras operações de forma (como preenchimentos e traços) podem ser aplicadas. O caminho original não é modificado. Como as operações do caminho estão em tempo real, é possível modificá-las ou removê-las a qualquer momento. As operações do caminho aplicam-se a todos os caminhos acima deles no mesmo grupo; Como com todos os atributos de forma, você pode reordenar as operações do caminho, arrastando, cortando, copiando e colando no painel timeline.</p>
			<p>
				• Caminhos de mesclagem: combina caminhos para um caminho composto.<br/>
				• Caminhos Offset: expande ou contrai uma forma, compensando o caminho do caminho original. Para um caminho fechado, um valor positivo expande a forma; Um valor negativo contrai a forma. A propriedade Line Join especifica a aparência do caminho onde os segmentos do caminho do offfset se juntam. Uma associação biselada é uma conexão quadrada. Uma junção de mitra é uma conexão pontiaguda. O limite de mitra determina as condições em que uma união biselada é usada em vez de uma junção de mitra. Se o limite de mitra for 4, então, quando o comprimento do ponto atingir quatro vezes o peso do traçado, é usada uma união biselada. Um limite de mitra de 1 provoca uma associação biselada.<br/>
				• Pucker & Bloat: puxa os vértices de um caminho para fora enquanto curva os segmentos para dentro (Pucker), ou puxa os vértices para dentro enquanto curva os segmentos para fora (Bloat).<br/>
				• Repetidor: cria várias cópias de uma forma, aplicando uma transformação específica em cada cópia.<br/>
				• Round Corners: arredonda os cantos dos caminhos. Os valores do raio superior causam maior redondeza.<br/>
				• Trim Paths: animar as propriedades de início, fim e deslocamento para cortar um caminho para criar resultados semelhantes aos resultados obtidos com o efeito Write-on e a configuração Write On para pinceladas. Se a operação do caminho Trim Paths estiver abaixo de vários caminhos em um grupo, então você pode optar por ter os caminhos cortados imultaneamente ou tratados como um caminho composto e cortados individualmente.<br/>
				• Torção: gira um caminho mais bruscamente no centro do que nas bordas. Inserir um valor positivo gira no sentido horário; inserir um valor negativo gira no sentido anti-horário.<br/>
				• Wiggle Paths: randomizes (wiggles) um caminho, convertendo-o em uma série de picos irregulares e vales de vários tamanhos. A distorção é auto-animada, o que significa que ela muda ao longo do tempo sem a necessidade de definir quadros-chave ou adicionar expressões. Várias propriedades para esta operação de caminho funcionam da mesma forma que propriedades do mesmo nome para o seletor Wiggly para animação de texto. A propriedade Correlation especifica a quantidade de semelhança entre o movimento de um vértice e o de seus vizinhos; Valores menores criam resultados mais irregulares, já que a posição de um vértice depende menos da posição de seus vizinhos. A propriedade Correlação é semelhante à Correlação para o seletor Wiggly, exceto que a versão Wiggle Paths especifica a correlação entre vértices vizinhos em vez de caracteres vizinhos. Defina o comprimento máximo para caminhos de segmento usando um tamanho absoluto ou relati vo. Defina a densidade das bordas irregulares (Detalhe) e escolha entre bordas macias (Liso) ou bordas afiadas (Canto).<br/>
				• Wiggle Transform: randomizes (wiggles) qualquer combinação da posição, ponto de ancoragem, escala e transformações de rotação para um caminho. Indique a magnitude desejada do wiggle para cada uma dessas transformações, definindo um valor no grupo de propriedades Transform que está contido no grupo de propriedades Wiggle Transform. As transformações reviradas são auto-animadas, o que significa que elas mudam ao longo do tempo sem a necessidade de definir quadros-chave ou adicionar expressões. A operação Wiggle Transform é especialmente útil após uma operação Repeater, porque permite que você aleatorize as transformações de cada forma repetida separadamente. Várias propriedades para esta operação de caminho se comportam como propriedades do mesmo nome para o seletor Wiggly para animação de texto. A propriedade Correlação especifica a quantidade de semelhança entre as transformações reviradas de uma forma repetida e seu vizinho dentro de um conjunto de formas repeti das. A correlação só é relevante se uma operação Repeater preceder a operação Wiggle Transform. Quando a correlação é 00%, todos os itens repetidos são transformados da mesma maneira; Quando a correlação é 0%, todos os itens repetidos são transformados independentemente.<br/>
				•  Zigzag: converte um caminho em uma série de picos irregulares e vales de tamanho uniforme. Defina o comprimento entre picos e vales usando um tamanho absoluto ou relativo. Defina o número de cristas por segmento de caminho e escolha entre bordas onduladas (Liso) ou bordas irregulares (Esquina).
			</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>Aula 11:</b> Crie uma animação com flat design, seguindo os conceitos do Motion Graphics.</p>
            <p style="margin-top: 16px"><b>Aula 12:</b> Criar uma animação de Motion graphics usando técnicas de liquid Motion para criar transições.</p>

		</div>
    </div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade14/motion_graphics_effects.blade.php ENDPATH**/ ?>