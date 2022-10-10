
<?php $__env->startSection('titulo','Unit 7 | Pronunciation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade7" data-etapa="pronunciation">
				<h3 class="barlow">UNIT 07 - Adjustment Panel</h3>
				<h5 class="barlow">4 - PRONUNCIATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit7/pronuciation/pronuciation.ogg')); ?>" type="audio/ogg">
                </audio>
                <div class="clear"></div>
                <div class="metade espacamento">
                    <h5 class="barlow center-align">Plural words</h5>
                </div>
                <div class="metade espacamento">
                    <div class="umterco center-align">
                        <p><b>“Z” SOUND</b></p>
                        <p>(voice)</p>
                        <p>Says</p>
                        <p>Photos</p>
                        <p>Remenbers</p>                    
                        <p>Gives</p>                    
                    </div>
                    <div class="umterco center-align">
                        <p><b>“S” SOUND</b></p>
                        <p>(no voice)</p>
                        <p>Edits</p>
                        <p>Needs</p>
                        <p>Likes</p>                    
                        <p>Understands</p>                    
                    </div>
                    <div class="umterco center-align">
                        <p><b>“IZ” SOUND</b></p>
                        <p>Uses</p>
                        <p>Utilizes</p>
                        <p>Watches</p>                    
                        <p>Washes</p>                    
                    </div>
                    <div class="clear"></div>
                </div>
                <h5 class="barlow" style="margin-top: 16px">A - Listen to your teacher read the following sentences and repeat after he is finished.</h5>
                <div class="espacamento">
                    <p>“He says she edits photos and uti lizes Photoshop for it.”</p>
                    <p>“Lee uses the Adjustment Panel, and he utilizes the Black &White tool because it is his favorite.”</p>
                </div>
			</div>
		</div>
    </main>
    <script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade7/pronunciation.blade.php ENDPATH**/ ?>