
<?php $__env->startSection('titulo','Unit 15 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade15" data-etapa="conversation">
			<h3 class="barlow">UNIT 15</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 15/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px"><b>Gleen: </b>Hey you guys, What’s up? Tell me about you level of anxiety. Comic con starts
				next week.</p>
			<p><b>Akira: </b>Guys, I don’t know about you, but I’m extremely excited, anxious, impatient,
				everything you can imagine. Of course I want to participate of the 4 days, but I can’t wait
				for Kris Costa’s workshop. He is a reference for me.</p>
			<p><b>Laura: </b>Can you tell us a bit about him. I don’t know anything about him.</p>
			<p><b>John: </b>I researched something about him last week. He’s from Rio de Janeiro Brazil. He
				started drawing when he was 4 years old but he discovered CG at age of 16. At that time,
				he worked for a bank in Brazil and in his free time, he studied CG. He only decided to
				work with CG at age of 21. His story is very inspiring.</p>
			<p><b>Akira: </b>Very nice John! You did your homework. Cool!! Just some more interesting things
				about him. He didn’t stop working for the bank till he was thirty something years old.
				Another cool information about him is that he dind’nt use a powerful computer when he
				started. He used a computer called Amiga 500, a very simple computer at that time.</p>
			<p><b>Gleen: </b>Fantastic story guys. Kris is really an example of persistence, discipline, hardworking, courage and many other qualities one needs to be successful in life. Ok guys ! that’s
				it for today.</p>
			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit15/conversation.png')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade15/conversation.blade.php ENDPATH**/ ?>