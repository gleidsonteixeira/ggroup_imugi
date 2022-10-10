
<?php $__env->startSection('titulo','Unit 18 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade18" data-etapa="conversation">
			<h3 class="barlow">UNIT 18</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 18/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Hey you guys. What’s up? Are you ok? Let’s start the class? Look, last class you
				guys were talking about Kris Costa and his profile. What else did you see in Comic con
				that called you attention?</p>
			<p><b>John: </b>Teacher, I saw many interesting things. From 3D modeling companies to
				Soundtrack companies. I was talking to a guy who worked for Lord of the Ring’s
				soundtrack creation. He showed us some mixing softwares and I created my own piece
				of music while I was visiting his booth.</p>
			<p><b>Akira: </b>I attended some nice workshops as well. The company that created some special
				effects for Justice League, Wonder Woman and Ragnarok was showing some techniques
				they use. It was very nice.</p>
			<p><b>Laura: </b>Akira, tell me later what you learned. I need some new tricks for my videos.</p>
			<p><b>Akira: </b>For sure Laura, I’ll send you all the material I received ok.</p>
			<p><b>Laura: </b>Great, thanks.</p>
			<p><b>Gleen: </b>Ok guys. By the way, this weekend I’m gonna watch Ragnarok with my wife and
				my kids. Last week we saw Wonder woman. It was very nice.
				Ok guys, have a great weekend. See you.</p>
			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit18/conversation.png')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade18/conversation.blade.php ENDPATH**/ ?>