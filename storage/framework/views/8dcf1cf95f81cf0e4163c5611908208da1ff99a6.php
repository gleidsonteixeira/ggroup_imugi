
<?php $__env->startSection('titulo','Video Edition | Inntroduction'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila6" data-unidade="intro6" data-etapa="intro">
				<div class="bem-vindo">
					<figure class="banner">
						<img src="<?php echo e(asset('assets/img/video_edition/intro/bg-intro.jpg')); ?>" alt="">
					</figure>
					<h3 class="barlow center-align">Seja Bem Vindo A Video Edition</h3>

					<div class="bem-vindo-conteudo">
						<p>O Adobe Premiere Pro CC é um sistema de edição de videos que oferece suporte às cameras e
                  tecnologias mais atuais com poderosas ferramentas e fáceis de usar que se integram perfeitamente com cada fonte de aquisição de vídeo.
						</p>

					</div>
					<div class="bem-vindo-video">
						<video controls="" controlslist="nodownload" disablepictureinpicture="" src="<?php echo e(asset('assets/video/intro_playgo.mp4')); ?>" style="width:100%;"></video>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
        activeMenu();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila6/intro6/intro.blade.php ENDPATH**/ ?>