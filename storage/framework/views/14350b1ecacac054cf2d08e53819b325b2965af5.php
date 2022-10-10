
<?php $__env->startSection('titulo','Unit 26 | Listening'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="listening">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit26/listening/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>The <b>Brush tool</b> is a basic painting tool. It <b>works</b> like a traditional drawing tool by applying the <b>color</b> using strokes. The standard Pen tool draws with the greatest precision; the Freeform Pen tool draws paths as if you were drawing with pencil on paper. The eraser is basically a brush which erases <b>pixels</b> as you drag it across the <b>image</b>. Pixels are erased to transparency, or the background color if the <b>layer</b> is locked.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade26/listening.blade.php ENDPATH**/ ?>