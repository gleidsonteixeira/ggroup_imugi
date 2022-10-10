
<?php $__env->startSection('titulo','Unit 29 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit29/pronunciation/completo.ogg')); ?>" type="audio/ogg">
                </audio>
				<div class="clear"></div>
                <h5 class="barlow" style="margin-top: 16px">A - Notice how the letter “H” is sillent in the possessives after words ending in consonant sounds. The connections are in the underlined letters.</h5>
				<div class="espacamento">
					<p>1 - This Is For His Parents.</p>
					<p>2 - I Bought This Gift For Her.</p>
					<p>3 - I Helped Him Because His Car Broke Down.</p>
					<p>4 - I Need To Take Her Family To The Airport.</p>
					<p>5 - That’s His House.</p>
               	</div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade29/pronunciation.blade.php ENDPATH**/ ?>