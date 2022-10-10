<?php $__env->startSection('titulo','AFTER EFFECTS CC | TIPOGRAFIA'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade10" data-etapa="tipografia">
			<h3 class="barlow">UNIT 10 - AFTER EFFECTS CC </h3>
			<h5 class="barlow upper"> AULA 5 - MOTION - TIPOGRAFIA</h5>

			<h5>Animação de texto</h5>
			<p>
				É possível animar layers de texto para muitas finalidades como: títulos animados, terços inferiores,
				rolos de crédito e tipografia dinâmica. Assim, como acontece com outras layers no after, o usuário pode
				animar layers de texto inteiras. No entanto, as layers de texto oferecem
				recursos de animação adicionais com os quais pode-se animar o texto nas layers.
			</p>
			<h5>Predefinições de animação de texto</h5>
			<p>
				O usuário pode navegar e aplicar pré-ajustes de animação no after usando o painel efeitos e
				predefinições ou adobe bridge. Para abrir a pasta predefinições no adobe bridge: escolha procurar
				presets no menu do painel efeitos e predefinições ou no menu animação.
			</p>
			<p>
				Por padrão a predefinição de animação de texto é criada em uma composição NTSC DV
				720x480 e cada camada de texto usa Myriad Pro de 72 pontos. Os valores de posição predefi -
				nidos de animação podem não ser apropriados para uma composição que seja muito maior ou
				menor do que 720x480. Por exemplo, uma animação que deve começar fora do quadro pode
				começar dentro do quadro. Se o texto não estiver posicionado como esperado ou o texto desaparecer
				inesperadamente, ajuste os valores de posição para o animador de texto no painel
				timeline ou painel composição.
			</p>
			<p>
				Na animação de texto 3D, após aplicar uma predefinição, talvez seja necessário girar
				a camada ou adicionar uma câmera para girar em torno da camada para ver os resultados
				da animação 3D.
			</p>
			<p>
				As predefinições de animação de texto na categoria path substituem automaticamente o texto
				original pelo nome da animação predefinida e alteram a cor da fonte para o branco. Essas
				predefinições de animação também podem alterar outras propriedades de caracteres.
				A categoria de predefinições de animação fill and stroke contém predefinições que podem
				alterar as cores de preenchimento e as propriedades de traçado da predefinição aplicada. Se a
				predefinição de animação requer um traço ou cor de preenchimento, a animação só funciona
				se for atribuído um desses ao seu texto.
			</p>
			<h5>Propriedades de animação de texto</h5>
			<p>
				As propriedades de animação de texto funcionam bem como outras propriedades da layer,
				exceto que seus valores influenciam apenas os caracteres selecionados pelos seletores para o
				grupo de animação. Para adicionar propriedades 3D a uma layer de texto: escolha ativar por
				caractere 3D (este comando não adiciona propriedades a um grupo de animação).
				Para adicionar um grupo de animação a uma layer de texto: selecione a layer de texto no
				painel timeline e escolha uma propriedade no menu animação > animar texto ou no menu
				animar para a camada na coluna modos / modos no painel timeline. Um novo grupo de animação,
				juntamente com um seletor padrão e a propriedade de animação escolhida, aparece
				no painel timeline.
			</p>
			<p>
				Para adicionar uma nova propriedade de animação a um grupo de animação existente: selecione
				o grupo de animação no painel timeline e escolha a propriedade no menu animação
				> animar texto ou no menu adicionar para o grupo de animação no painel timeline. A nova
				propriedade de animação aparece no mesmo grupo que a propriedade de animação existente
				e compartilha os seletores existentes. Para excluir uma propriedade de animação ou grupo de
				animação: selecione-a no painel timeline e pressione excluir. Para remover animação de uma
				layer de texto: selecione a layer de texto no painel timeline e escolha animação > remover
				todos as animações de texto.
			</p>
			<p>
				Para copiar um grupo de animação: selecione-o no painel timeline e escolha editar > copiar.
			</p>
			<p>
				Para colar o grupo de animação: selecione uma layer e escolha editar > colar.
			</p>

			<p>
				Para renomear um grupo de animação (certifique-se de que seja o único selecionado): pressione
				enter ou clique com o botão direito do mouse no nome do grupo e escolha renomear.
				Para reordenar um grupo de animação: arraste-o para uma nova localização na ordem de
				empilhamento no painel timeline.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit10/imagem_unit10_1.png')); ?>" alt="Adjustment Layer">
				</figure>
			</div><br>
			<p>
				São propriedades de animação:
			</p>

			<p>
				• Anchor point: ponto de ancoragem para os personagens (ponto sobre quais
				as transformações - como escala e rotação - são executadas)
			</p>
			<p>
				• Position: posição dos personagens (é possível especificar valores para esta propriedade
				no painel timeline, ou modificá-lo selecionando-o no painel timeline e, em seguida,
				arrastando a layer no painel composition usando a ferramenta selection, que muda para
				uma ferramenta move quando posicionada sobre caracteres de texto. Vale lembrar que
				arrastar com a ferramenta mover não afeta o componente z, profundidade, de posição)
			</p>
			<p>
				• Sale: escala dos personagens (como a escala é relativa ao ponto de âncora, as alterações
				ao componente z do scale não têm resultado aparente, a menos que o texto também
				tenha uma animação de ponto de âncora com um valor z diferente de zero)
			</p>
			<p>
				• Skew: inclinação dos personagens (o eixo Inclinável especifica o eixo ao longo
				do qual o personagem está distorcido)
			</p>
			<p>
				• Rotation, x rotation, y rotation, z rotation: se as propriedades 3D por caractere estiverem
				ativadas, é possível definir a rotação sobre cada eixo individualmente. Caso contrário,
				apenas a rotação (que é o mesmo que a rotação Z) ficará disponível
			</p>
			<p>
				• All transform properties: todas as propriedades transform são adicionadas de uma só vez ao grupo de animação
			</p>
			<p>
				• Line anchor: alinhamento para o rastreamento em cada linha de texto (um valor de 0%
				especifica o alinhamento à esquerda, 50% especifica o alinhamento do centro e 100%
				especifica o alinhamento da direita)
			</p>
			<p>
				• Line spacing: espaço entre linhas de texto em uma camada de texto multilinha
			</p>
			<p>
				• Character off set: o número de valores unicode para compensar os caracteres selecionados
				(por exemplo, um valor de 5 avança os caracteres na palavra cinco etapas em ordem
				alfabética, de modo que o deslocamento da palavra se torna tkkxjy
			</p>
			<p>
				• Character value: o novo valor unicode para os caracteres selecionados, substituindo
				cada caractere por um caractere representado pelo novo valor (por exemplo, um valor de
				65 substitui todos os caracteres em uma palavra com o 65º caractere Unicode (A),
				de modo que o valor da palavra se torna AAAAA)
			</p>
			<p>
				• Character Range: especifica limites no caractere (esta propriedade aparece sempre que
				você adiciona a propriedade character off set ou character value a uma camada. Escolha
				preserve case & digits para manter os caracteres em seus respectivos grupos. Os grupos
				incluem romanos maiúsculos, minúsculas em romano, dígitos, símbolos, katakana japonesa,
				etc. Escolha Unicode completo para permitir mudanças de caracteres ilimitadas)
			</p>
			<p>
				• Blur: a quantidade de borrão gaussiano a ser adicionada aos personagens (os valores de
				borrão horizontal e vertical podem ser especificados separadamente)
			</p>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
			<p style="margin-top: 16px"><b>1.</b>Crie uma animação baseado em Tipografia, sobre uma marca conhecida.</p>


		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila6/unidade10/tipografia.blade.php ENDPATH**/ ?>