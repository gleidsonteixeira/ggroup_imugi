<?php $__env->startSection('titulo','Play GO | Inntroduction'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="intro1" data-etapa="intro">
				<div class="bem-vindo">
					<figure class="banner">
						<img src="<?php echo e(asset('assets/img/playgo/intro/bg-intro.jpg')); ?>" alt="">
					</figure>
					<h3 class="barlow center-align">Seja Bem Vindo Ao Play GO</h3>
	
					<div class="bem-vindo-conteudo">
						<p>Curso projetado para artistas ou amadores que procuram treinamento de efeitos gráficos e visuais ensinado interdisciplinarmente com a língua inglesa.</p>
						<p>Vivemos em um mundo digital, onde a interatividade está cada vez mais presente na vida das pessoas. Com as ferramentas certas do CG você irá dominar esse universo.</p>
						<p>Inglês é a lingua mais falada do mundo por não nativos. 70% das empresas internacionais do Brasil buscam profissionais que falem inglês podendo oferecer salários de 30% à 50% maior ao daqueles sem o idioma.</p>
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/apostila1/intro1/intro.blade.php ENDPATH**/ ?>