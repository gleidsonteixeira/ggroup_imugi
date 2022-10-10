
<?php $__env->startSection('titulo','Unit 25 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade25" data-etapa="conversation">
			<h3 class="barlow">UNIT 25</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 25/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Hello my dear students. How are things? I hope everything is ok with you guys.
				Before we start the class, I’d like to agree something with you. Next week I’ll have an
				appointment with my doctor to see my ankle. Just to check if everything is ok. Because
				of that, I may arrive a bit late for the class ok.</p>
			<p><b>Students:</b> No problem teacher. We can start the class with the exercises we have to do
				and when you arrive, you go on with the activities.</p>
			<p><b>Gleen:</b> I might be absent, but Mr. Antony is aware of everything and if necessary he’ll take over the class ok.</p>
			<p><b>Students:</b> ok teacher, don’t worry. Everything is gonna be ok. (to be continued…)</p>

			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit25/conversation.jpg')); ?>" alt="atendimento médico">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade25/conversation.blade.php ENDPATH**/ ?>