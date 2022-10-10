
<?php $__env->startSection('titulo','Unit 1 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade1" data-etapa="conversation">
			<h3 class="barlow">UNIT 01</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 1/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen :</b> Hey you guys. What’s up? My name is Gleen, I’m your new teacher and I’m excited to start this
				second part of the course with you. First of all, congrats on your dedication during the PhotoShop
				course. You spent almost 9 months studying what is necessary to create fantastic images and I’m sure
				you are excited to start your new course. I know it is a challenge to memorize all the concepts and
				tools you guys learned but this is the way. It’s important to dedicate yourself to study all the elements
				that are necessary to be an excellent gamer, illustrator, special effects designer or any other career you
				decide to work with. In this course we are going to study softwares used to create movies. We will
				learn how to use Cinema 4D, Unity, Blender and Cryengine. Many famous movie, illustration and game
				creation companies like, Pixar, Dc comics, Marvel, Rockstar and others use these programs. So guys,
				are you ready to start the game?</p>
			<p><b>Grammar:</b> Review of Verb to be, </p>
			<p><b>Vocabulary:</b> Greetings, Cardinal numbers, Ordinal numbers,</p>
			<figure>
				<img src="<?php echo e(asset('assets/img/dominating/unit1/conversation.jpg')); ?>" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade1/conversation.blade.php ENDPATH**/ ?>