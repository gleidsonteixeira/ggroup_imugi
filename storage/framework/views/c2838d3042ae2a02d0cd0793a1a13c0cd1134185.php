
<?php $__env->startSection('titulo','Unit 28 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade28" data-etapa="conversation">
			<h3 class="barlow">UNIT 28</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 28/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Laura :</b> Can I start teacher? As I told you before I accepted the work for the NGO that deal
				with orphan kids. We had our first meeting and now I know what they need. They want
				to be present in the social media like Facebook, Instagran and etc. I told them they had
				better be present in the social media. It’s a great way to get known. To do so, the first
				thing they have to do is to define the target group. The people they want to reach with
				their campaigns. Only after defining this, it is possible to plan the next steps.
			</p>
			<p>
				<b>Akira :</b> Do they have to create a site? I think they had better have it. This way, people
				interested in getting information about the NGO, could get it easily.
			</p>
			<p>
				<b>Laura :</b> It all depends on what type of message they want to transmit to the target group.
				Sometimes, you have to create just a youtube channel and a page on facebook to show
				what the NGO is doing, and how a person could help them. (to be continued)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/dominating/unit28/conversation.jpg')); ?>" alt="rede social">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade28/conversation.blade.php ENDPATH**/ ?>