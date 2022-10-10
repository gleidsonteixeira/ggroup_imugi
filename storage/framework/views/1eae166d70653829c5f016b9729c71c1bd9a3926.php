
<?php $__env->startSection('titulo','Unit 7 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade7" data-etapa="conversation">
			<h3 class="barlow">UNIT 7</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 7/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> My dear students. How are you today? Is everything ok? Are you prepared for today’s
				class? Today we are going to talk about your current job. Now that we know about the logical sequence you follow in your areas, today we want to know what you are developing now.
				Who wants to start?
			</p>
			<p>
				<b>John :</b> I can start teacher. Well, this month we are working on a new project. The editor is
				preparing the briefing and the scope for this project. We are designing a summer fashion
				magazine.
			</p>
			<p><b>Gleen :</b> Cool Jhon. And you Laura?</p>
			<p>
				<b>Laura :</b> I’m about to finish an institutional video for a company. This week I am just adding
				some effects and sound. A friend from work is synchronizing voice, sound, images and
				transitions. I’m also preparing the outline of the video presentation meeting.
			</p>
			<p><b>Gleen :</b> Great Laura. And you Akira, what are you doing these days?</p>
			<p><b>Akira :</b> Well, this week I’m not working teacher. I’m on vacation. I’m just coming to the class, watching some series and relaxing.</p>
			<p><b>Gleen :</b> Lucky guy Akira!!! Ok guys, you rock. That’s it for today. Next class we’re going to talk about your preferred softwares ok. Think about it and I see you tomorrow folks.</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/dominating/unit7/conversation.jpeg')); ?>" alt="banho piscina">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade7/conversation.blade.php ENDPATH**/ ?>