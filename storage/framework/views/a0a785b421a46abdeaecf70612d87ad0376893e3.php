
<?php $__env->startSection('titulo','Unit 38 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade36" data-etapa="conversation">
			<h3 class="barlow">UNIT 36</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 36/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hey you guys. What’s up? How’s everything? Did you have time to start the project?
			</p>
			<p>
				<b>Laura :</b> Yes teacher. We agreed that it would be a nice idea to watch the animations first.
				I’m not used to watching them but it was great. I loved them all.
			</p>
			<p>
				<b>Akira :</b> I watched some animations too. I saw some Japanese ones. But I’m not used to
				watching them without subtitles. The problem is that it’s not very common to have
				Japanese animation with English subtitles. Even though, it was a nice experience.
			</p>
			<p>
				<b>John :</b> Guys, I couldn’t watch 4. I watched just 2. We had a problem in the office and I
				had to work late every single day. Everything is under control but I’m worn out. I’m not
				used to working this much.
			</p>
			<p>
				<b>Gleen :</b> That’s ok John. Get together and start pointing out ideas that may be relevant for you ok. Let’s go. (to be continued)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/dominating/unit36/conversation.png')); ?>" alt="olhando">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade36/conversation.blade.php ENDPATH**/ ?>