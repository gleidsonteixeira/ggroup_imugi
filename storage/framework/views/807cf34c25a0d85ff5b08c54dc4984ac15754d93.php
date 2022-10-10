
<?php $__env->startSection('titulo','Unit 07 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade7" data-etapa="conversation">
			<h3 class="barlow">UNIT 7</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="<?php echo e(asset('assets/audio/apostila3/LESSON 07/02_CONVERSATION/CONVERSATION_07.mp3')); ?>" type="audio/mp3">
            </audio>
			<div class="clear"></div>
			<p style="margin-top: 16px"><b>Jake : </b>Ok guys. Welcome to one more class. Let’s dive into to topic?</p>
			<p><b>Students : </b>Fasten your seat belts. We’re about to take off.</p>
			<p>
				<b>Jake : </b>Yeah. That’s it. Well, I told you in the last class that we would make a retrospective
				analysis of Youtube evolution, do you remember?
			</p>
			<p><b>Students : </b>Yes teacher.</p>
			<p>
				<b>Jake : </b>So, as I mentioned before, The creators of Youtube sold it for Google for 1.6 billion
				dollars. Before all this, they were employees of Elon Musk. They worked for Paypall and
				decided to create a platform to broadcast videos.
			</p>
			<p>
				<b>Akira : </b>You’re kidding. When they sold it for Google they had already worked for Elon Musk?
				The SpaceX and Tesla owner. That’s crazy guys.
			</p>
			<p>
				<b>Jake : </b>For sure Akira. At that time, they were trying to create a dating service using videos but
				people didn’t use to expose themselves like that. They simply didn’t buy the first idea.
				Because of that, one of the creators decided to post his first video. He posted a personal
				video of a visit to the zoo. And guess what. The first video to hit 1 million views was a Nike
				ad with Ronaldinho Gaucho doing some “embaixadinhas”. Can you believe that?
			</p>
			<p><b>Laura : </b>Gee, I can’t believe that.</p>
			<p>
				<b>Jake : </b>Well, This was the beginning of Youtube. From that moment on, many different people
				have adhered to the idea of broadcasting themselves. Companies have invested huge money
				to promote their brands. Presidents have used it in their campaigns and regular people like
				us, have used it to shout out their ideas to the world.
			</p>
			<p><b>Students : </b>We’re shocked. Really, that’s crazy.</p>
			<p><b>Jake : </b>Never doubt what a simple idea can generate. (to be continued)</p>
			<figure class="metade esquerda">
				<img src="<?php echo e(asset('assets/img/masteroflanguage/unit7/conversation1.png')); ?>" alt="ronaldinho gaucho">
			</figure>
			<figure class="metade direita">
				<img src="<?php echo e(asset('assets/img/masteroflanguage/unit7/conversation2.png')); ?>" alt="Elon musk">
			</figure>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila3/unidade7/conversation.blade.php ENDPATH**/ ?>