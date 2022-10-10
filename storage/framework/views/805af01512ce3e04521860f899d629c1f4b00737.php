
<?php $__env->startSection('titulo','Unit 17 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade17" data-etapa="conversation">
			<h3 class="barlow">UNIT 17</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 17/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Hey you guys. Good morning. Sorry, I’m a bit late today. I left home the same
				time I usually do but a small accident happened when I was crossing the bridge.</p>
			<p><b>Laura: </b>No problem teacher. The coordinator told us. Akira was sharing some more
				stories about Kris Costa. You know what, I’m becoming a fan of this guy. Teacher, did you
				know a school invited him to give a workshop in Brazil and he had to cancel the trip?
				The school in Brazil was preparing a nice event and they were ready to receive him but
				when he was leaving US, he got sick and had to cancel his trip.</p>
			<p><b>Akira: </b>Teacher, This was the first time I heard of Kris Costa. I was studying a software
				called Z-brush and he was coming to Brazil to for a workshop about this software. Everybody was waiting for him. The school told us about the incident, and we had to wait for
				another opportunity to meet him. That’s why I was so anxious and excited about his
				workshop.</p>
			<p><b>Gleen: </b>Now I got it Akira. I was talking to some teachers about you yesterday. They were
				talking about professional references then I mentioned how much you consider Kris as a
				reference for you. That’s awesome guys. Thank you for today. Have a great weekend and
				see you in the next class.</p>
			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit17/conversation.png')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade17/conversation.blade.php ENDPATH**/ ?>