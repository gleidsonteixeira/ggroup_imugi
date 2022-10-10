<?php $__env->startSection('titulo','Unit 29 | Vocabulary'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<p><b>Goal: </b> Explain To Students How Possessive Adjectives And Pronouns Differ.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit29/vocabulary/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><p><b>TO LAST</b></p></li>
					<li><p><b>GOT IT</b></p></li>
					<li><p><b>TO SET</b></p></li>
					<li><p><b>AT LEAST</b></p></li>
					<li><p><b>CLIP</b></p></li>
					<li><p><b>BELIEVE</b></p></li>
					<li><p><b>ONLY</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade29/vocabulary.blade.php ENDPATH**/ ?>