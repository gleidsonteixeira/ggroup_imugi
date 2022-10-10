
<?php $__env->startSection('titulo','Unit 17 | Listening'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="listening">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
                <h5 class="barlow">5 - LISTENING</h5>
                <span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit17/listening/completo.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="espacamento">
                    <p>Layers And Guides Are Two <b>Necessary</b> Tools In Photoshop To Better <b>Organize</b> The Layout And Editing Of Content. Layers Are Used To Separate The Tasks, In Order To Avoid Applying The Same Changes To All Of The <b>Items</b>. This Way, You Can Direct The <b>Alteration</b> To One Item At A Time. As For The <b>Guides</b>, They Are Simply <b>Lines</b> That Help You <b>Align</b> The Items Better. They Are Necessary To Have <b>Precision</b> In The Organization.</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();        

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade17/listening.blade.php ENDPATH**/ ?>