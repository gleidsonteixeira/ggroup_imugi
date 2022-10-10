
<?php $__env->startSection('titulo','Unit 11 | Listening'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="listening">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit11/listening/listening.wav')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Color <b>Picker</b> Is A Tool Used To <b>Choose</b> The Color You Want To Use To <b>Create</b> Anything From Flyers To Company <b>Logos</b>. In The Color Picker <b>Option</b>, You Can <b>Click</b> To <b>Add</b> The Color To The Swatches Panel. This <b>Panel</b> Is Where You Can Store The <b>Colors</b> You Saved To Use During The Project.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade11/listening.blade.php ENDPATH**/ ?>