
<?php $__env->startSection('titulo','Unit 12 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade12" data-etapa="conversation">
			<h3 class="barlow">UNIT 12</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 12/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px"><b>Gleen :</b> Hey you, what’s up guys? How’s everything this week? Are you anxious for the
				next month? In 30 days from now, Comic-con will start. For sure they’re gonna bring a
				lot of new stuff in this edition. </p>
			<p><b>Akira :</b> I can’t wait for this edition to begin teacher. I’m gonna participate of the four
				days. I have everything organized for that. </p>
			<p><b>Gleen :</b> Do you know who’s gonna be in this edition giving a Workshop on 3D modeling?
				Nothing less than Kris Costa. Hulk and king kong creator.</p>
			<p><b>Akira :</b> No way, you’re kidding! As soon as I get home I’ll check the site and I’ll enroll myself to participate of his workshop. Kris Costa is one of the most famous Brazilian artists.
				He works for Industrial Light & Magic. Gee ! I can’t believe it. Now I’m more excited than before. Teacher, can I leave earlier? I have to enroll for this workshop.</p>
			<p><b>Glenn :</b> Take it easy Akira. There’s plenty of time for you to enroll. Don’t worry, we’re about to finish our class ok.</p>
			<figure style="margin-top:16px">
				<img src="<?php echo e(asset('assets/img/dominating/unit12/conversation.png')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade12/conversation.blade.php ENDPATH**/ ?>