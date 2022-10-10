
<?php $__env->startSection('titulo','Unit 46 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade46" data-etapa="conversation">
			<h3 class="barlow">UNIT 46</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 46/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px"><b>Gleen:</b> Ok guys. How’s everything? What about the development of the story? Is everything ok?
				Students: So far so good. Everything under control teacher. The characters are ready.
				Now we are working on the story. What’s gonna happen exactly.</p>
			<p><b>Gleen:</b> Cool guys. There are many strategies to tell a story. It can be either linear or out
				of chronological order. Since you have three different characters with special powers
				connected by their minds, you could either have a common problem for them to solve
				together or an individual problem where they help each other using the power of their
				minds.</p>
			<p><b>Akira:</b> Awesome teacher. I like the idea of telling the story not in a chronological way. In
				my opinion it’s more challenging for us to produce and have a good result.
				(to be continued)</p>
			<figure class="umterco">
				<img src="<?php echo e(asset('assets/img/dominating/unit46/conversation1.png')); ?>" alt="filmes">
			</figure>
			<figure class="umterco">
				<img src="<?php echo e(asset('assets/img/dominating/unit46/conversation2.png')); ?>" alt="filmes">
			</figure>
			<figure class="umterco">
				<img src="<?php echo e(asset('assets/img/dominating/unit46/conversation3.png')); ?>" alt="filmes">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade46/conversation.blade.php ENDPATH**/ ?>