
<?php $__env->startSection('titulo','Unit 26 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade26" data-etapa="conversation">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 26/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> ok guys, let’s continue with the class. I was researching some cameras for a
				friend, because he wants to start a new youtube channel about Super hero Movies.
				Some of the videos he’s going to film outdoor but some other, he’s going to film indoor.
				Do you have any idea about what he must pay attention to have a good result.
			</p>
			<p>
				<b>Laura :</b> Well, in my opinion, he must have a good camera to start shooting his own
				videos. Something affordable. There are many good cameras in the market. He must
				know something about lighting and editing. It´s important for the quality of the video.
				Ah!!! One thing he must have is an outdoor microphone. He can buy it or use an old cell
				phone to record it. Later on, It’s just necessary to edit the sound and synchronize with
				the video.
			</p>
			<p>
				<b>Gleen :</b> Great Laura. Thanks for your help.
			</p>

			<figure class="umterco">
				<img src="<?php echo e(asset('assets/img/dominating/unit26/conversation1.jpg')); ?>" alt="camera fotografica">
			</figure>
			<figure class="umterco">
				<img src="<?php echo e(asset('assets/img/dominating/unit26/conversation2.jpg')); ?>" alt="camera fotografica">
			</figure>
			<figure class="umterco">
				<img src="<?php echo e(asset('assets/img/dominating/unit26/conversation3.jpg')); ?>" alt="camera fotografica">
			</figure>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade26/conversation.blade.php ENDPATH**/ ?>