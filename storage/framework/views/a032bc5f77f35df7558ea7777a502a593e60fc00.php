
<?php $__env->startSection('titulo','Unit 22 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade22" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 22 - SARAH’S STUDENTS</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit22/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
				<div class="espacamento">
					<h5 class="barlow" style="margin-top: 16px">A - Observe how the stressed words in the paragraph are important for conveying meaning.</h5>
					<p>Hey Guys, I’m Mariana Freitas. I’m From Brazil. I Didn’t Think I Would Be In This Class Because I Thought This Would Be Very Difficult, But I’m Here And I Will Do My Best To Learn.</p>
				</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade22/pronunciation.blade.php ENDPATH**/ ?>