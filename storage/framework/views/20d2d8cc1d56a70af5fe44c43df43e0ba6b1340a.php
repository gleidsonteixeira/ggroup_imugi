<?php $__env->startSection('titulo','Unit 27 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="conversation">
				<h3 class="barlow">UNIT 27 - PROFESSOR VICTOR</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit27/conversation/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Victor :</b> welcome to our first lesson. You can call me victor. I’m a professional video editor and i’ll teach you about how a video editor applies photoshop in his work.</p>
					<p>I’m a 29-year-old advertising graduate. I’ve worked with video editing for about 5 years now. I edit videos for some well-known artists in the city.</p>
					<p>I use many tools to edit videos, but you need to understand the basic first. That’s why i’ll show you how you can use photoshop to do it. Contrary to common opinion, photoshop has very useful tools for the job.</p>
					<p>You can edit the videos on photoshop just like photos. You can control settings like levels, curves, brightness, contrast and more. There is much to learn.</p>
				</div>
				<figure>
					<img src="<?php echo e(asset('assets/img/playgo/unit27/ilust_27.jpg')); ?>" alt="Victor" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="<?php echo e(asset('assets/portal/images/play-video.jpg')); ?>"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo27.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade27/conversation.blade.php ENDPATH**/ ?>