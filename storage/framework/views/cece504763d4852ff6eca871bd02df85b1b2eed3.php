<?php $__env->startSection('titulo','Unit 11 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade11" data-etapa="conversation">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit11/conversation/conversation.wav')); ?>" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>ADAM: </b> Excuse me, Bia. I am creating a birthday card for my friend. I am trying to make it beautiful. What do you recommend?</p>
					<p><b>Beatriz :</b> Well, first, it’s important to select the colors you want to use. Are you using Photoshop to make it?</p>
					<p><b>ADAM :</b> Yes, I am.</p>
					<p><b>Beatriz :</b>  Good. So, to choose the right colors, you need to click on the color picker tool. After that, you can add the color you like to the swatches panel.</p>
					<p><b>ADAM : </b>   I understand! Thank you very much teacher!</p>
				</div>
				<figure>
					<img src="<?php echo e(asset('assets/img/playgo/unit11/ilust_11.jpg')); ?>" alt="Beatriz and Adam" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="<?php echo e(asset('assets/portal/images/play-video.jpg')); ?>" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo11.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade11/conversation.blade.php ENDPATH**/ ?>