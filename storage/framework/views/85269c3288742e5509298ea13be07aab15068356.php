
<?php $__env->startSection('titulo','Unit 59 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade59" data-etapa="conversation">
			<h3 class="barlow">UNIT 59</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 59/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> What’s up guys. How’s it going? Everything ok? Are you calmer today?
			</p>
			<p>
				<b>Laura :</b> Yes teacher. John and Akira were freaking out last week. But after you talked to us, we
				managed to organize everything and we are again on track.
			</p>
			<p>
				<b>Gleen :</b> That’s ok guys. This is a normal situation in any project. You plan and something goes wrong
				and we have to reorganize everything. Have in mind one thing. If you get desperate because something is out of place, you will go crazy and won’t do anything. The best
				thing to do is to stop, evaluate the whole process and decide what’s priority at that specific moment.
			</p>
			<p>
				<b>Laura :</b> Good hint teacher. (to be continued)
			</p>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade59/conversation.blade.php ENDPATH**/ ?>