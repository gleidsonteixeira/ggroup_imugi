
<?php $__env->startSection('titulo','Unit 3 | Project Manager e Adobe Clip'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila6" data-unidade="unidade3" data-etapa="Project_Manager_Adobe_Clip">
			<h3 class="barlow">UNIT 3</h3>
			<h5 class="barlow upper">Aula 08 – Project Manager e Adobe Clip</h5>
			<h5>Usando o Project Manager</h5>
			<p>
				O Project Manager fornece várias opções que automatizam o processo de consolidação de seu
				projeto, ou reunindo todos os arquivos de mídia que você usou em seu projeto.
			</p><br>
			<p>
				Ele pode ser útil se você pretende arquivar seu projeto ou se deseja compartilhar seu trabalho.
				Usando o Project Manager para reunir todos os seus arquivos de mídia, você pode estar confiante
				de que nada estará faltando – ou estar offline - quando for entregar o projeto.
			</p><br>

			<p>
				O resultado do uso do Project Manager é um novo e separado arquivo de projeto. Devido
				o arquivo de projeto ser independente do seu projeto atual, você deve usar o Project
				Manager para verificá-lo novamente se o novo projeto está como você deseja para em
				seguida, deletá-lo.
			</p><br>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_9.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>
			<p>Veja abaixo algumas das opções:</p><br>


			<p>
				<i> Sequence</i> – Selceiona uma ou todas as sequências em seu projeto. O Project Manager escolhe
				clips e arquivos de mídia com base nas sequências selecionadas.
			</p>
			<p>
				<i> Resulting Project</i> – Cria um novo projeto com novos arquivos de mídia com base apenas em
				partes cortadas de clipes que você incluiu em suas seqüências ou cria um novo projeto que
				tenha cópias completas dos clips que você incluiu em suas seqüências, seja em seu format
				original ou como versões transcodificadas.
			</p>

			<p>
				<i> Include Handles</i> – Se você estiver criando um projeto aparado, usando a opção Consolidate
				and Transcode, adiciona o número de quadros que você especifica as novas versões cortadas
				em suas sequências. O conteúdo extra oferece flexbilidade para cortar e ajustar o tempo em
				suas edições mais tarde.
			</p>
			<p>
				<i> Include Audio Conform Files</i> – Inclui os arquivos compatíveis com áudio com o seu Projeto,
				então o Premiere Pro não precisará realizar análises de seu áudio novamente.
			</p>
			<p><i> Convert Images Sequences to Clip</i> – Se você importou uma ou mais sequências animadas de
				imagens ou sequências de fotografia de stop-motion, como clipes, esta opção converte-os em
				arquivos de vídeo regulares. Esta é muitas vezes uma opção útil porque economiza espaço
			</p>
			<h5>Simplifica o gerenciamento de arquivos.</h5>
			<p>
				<i> Include Preview Files</i> – Se você já produziu seus efeitos, você pode incluir os arquivos de preview
				com seu novo projeto para que você não precise renderizá-los novamente.
			</p>
			<p>
				<i> Rename Media Files to Match Clip Names</i> – Como o nome indica, esta opção renomeia seus
				arquivos de mídia para combinar os nomes dos clipes no seu projeto. Considere cuidadosamente
				se você quiser usar esta opção porque pode dificultar a identificação da font original
				da mídia de seus clipes.
			</p>
			<p>
				<i> Convert After Effects Compositions to Clips</i> – Escolha esta opção para excluir composições
				After Effects dinamicamente vinculadas, substituindo-as por arquvios de video renderizados.
			</p>
			<p>
				Preserve Alpha – Se você estiver transcodificando sua filmagem, você pode optar por manter
				as informações do canal alpha, de modo que as áreas transparentes permanecerão transparentes.
				Isso levará a arquivos maiores, mas pode significar que você mantenha as informações
				de imagem valiosas.
			</p>
			<p>
				<i>Destination Path</i> – Escolha um local para seu projeto.
			</p>

			<p>
				<i>Disk Space</i> – Clique em Calculate para ver uma estimativa do espaço total necessário para seu
				novo projeto.
			</p><br>
			<h5>Collecting files and copying them to a new location</h5>
			<p>
				Talvez você tenha deixado arquivos de mídia em muitos locais em seu sistema de armazenamento.
				Ou talvez você esteja compartilhando seu trabalho com outro editor. Você pode não
				querer que cada clipe seja incorporado ao seu projeto recém-criado.Esta opção permite que
				você crie cópias perfeitas do seu original, arquivos de mídia completo em um local específico,
				Mas seletivamente (usando a opção Excluir clipes não utilizados).
			</p><br>
			<h5>Adobe Premiere Clip</h5>
			<p>
				Premiere Clip é uma maneira excelente, rápida e relativamente simples de obter uma edição
				de montagem. Embora você possa achar que suas opções são limitadas, pode ser útil quando
				você está viajando e não tem tempo ou espaço para ativar a versão desktop do Premiere Pro.
			</p><br>
			<h5>Selecione vídeos e imagens</h5>
			<p>
				Inicie Premiere Clip e passe para Meus Projetos. Toque no sinal + para iniciar um novo projeto,
				selecione a fonte para sua mídia, escolha os vídeos e as fotos que deseja incluir no seu projeto
				e, em seguida, toque em Add Na próxima tela, especifique o Automatic mode.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_10.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<h5>Escolha uma trilha sonora</h5>
			<p>
				Depois que o projeto for carregado, você está nas configurações de Soundtrack. (Você sempre
				pode ir tocando no ícone de música no canto inferior esquerdo).
			</p>
			<p>
				Toque no botão Reproduzir para visualizar o vídeo gerado automaticamente. Mantenha a trilha
				sonora padrão ou escolha Replace Soundtrack para navegar através da sua lista de reprodução
				ou dos temas Free Clip-Free Premiere Clip. Toque em Adicionar para selecioná-lo.
				Arraste o audio waveform para a esquerda ou para a direita para determiner o ponto de incio
				da trilha Sonora.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_11.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<h5>Ajustar a estimulação</h5>
			<p>
				Toque no ícone do metrônomo (meio inferior) para entrar na exibição Pace.
				Ajuste o ritmo das transições de mais lento para mais rápido. Observe como a duração
				do filme, em parênteses, muda à medida que você move o controle deslizante.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_12.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>
			<h5>Rarrume seus clips</h5>
			<p>
				Toque no ícone de clipes (inferior direito) para entrar no Sequence view, Onde você pode reorganizar
				a ordem da mídia em seu projeto. (Os vídeos têm um ícone de câmera de filme, as
				fotos não). Pressione e segure um clipe para arrastá-lo para outro lado na seqüência. Exclua
				um clipe selecionado tocando no x no canto superior direito seguido do ícone Delete.
			</p>
			<p>
				Pressione Done, para sair do Sequence View.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_13.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>

			<h5>Importando coleções sincronizadas do Lightroom</h5>
			<p>
				Entre em Sequence View e toque no icone do sinal de +, selecione Lightroom e escolha as
				mídias de sua coleções sincronizadas do Lightroom. Encontre a imagem que deseja, e toque
				nela, e então pressione o Open Butt on para trazer a imagem para seu projeto. Pressione Done
				para sair do Sequence View.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_14.png')); ?>" alt="L – Cut">
				</figure>
			</div><br>
			<h5>Refine e compartilhe seu vídeo</h5>

			<p>
				Toque no ícone Filmstrip para converter seu projeto para o editor Freeform, onde você pode
				fazer edições mais matizadas - como cortes adicionais, adicionar um Look ou fazer ajustes de
				iluminação diretamente no Adobe Premiere Clip. Se você quiser ainda mais refinamento, toque
				no ícone Share e selecione Edit in Premiere Pro. Toque em OK, apos seu projeto ser enviado
				para o Creative Cloud Files. No Adobe Premiere você poderá fazer edições mais robustas,
				incluindo correção de cor, transições específicas entre clips, melhorar níveis de áudio e muito
				mais.
			</p>

			<div class="container">
				<figure>
					<img src="<?php echo e(asset('assets/img/video_edition/unit3/imagem_unit3_15.png')); ?>" alt="L – Cut">
				</figure>
			</div>

			<h5 class="barlow center-align">A T I V I D A D E S</h5>
            <p style="margin-top: 16px"><b>1.</b>  Configurar projetos anteriores usando o project manager.</p>
			<p style="margin-top: 16px"><b>2.</b>  Realizar ediçoes basicas usando o Adobe Clip.</p>



		</div>
	</div>

</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/unidade3/Project_Manager_Adobe_Clip.blade.php ENDPATH**/ ?>