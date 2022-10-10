<?php $__env->startSection('titulo','Unit 15 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade15" data-etapa="conversation">
				<h3 class="barlow">UNIT 15 - PROFESSOR Akira Suzuki</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit15/conversation/conversation.ogg')); ?>" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Akira Suzuki :</b> hello. My name is Akira Suzuki. I will be your professor for web designing and photoshop. It is a great pleasure to be with you</p>
					<p><b>Akira Suzuk :</b> I was born in japan and I lived there until the age of 27. I am now 32 years old. I am a professional web designer. I have worked in this area for over 15 years. Before working as a web designer, I worked with graphic designing for a few years.</p>
					<p><b>Akira Suzuki :</b>  I decided to work in web designing because my family had a small company and we needed a website, so I wanted to develop it.</p>
					<p><b>Akira Suzuki :</b> in my area, photoshop is of extreme importance because it is used to make the layout of the sites. It is not a simple process.</p>
					<p><b>Akira Suzuki : </b>  I hope to help all of you understand how photoshop assists web designers.</p>
				</div>
				<figure>
					<img src="<?php echo e(asset('assets/img/playgo/unit15/ilust_15.jpg')); ?>" alt="Akira suzuki" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="<?php echo e(asset('assets/portal/images/play-video.jpg')); ?>"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo15.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade15/conversation.blade.php ENDPATH**/ ?>