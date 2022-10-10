<?php $__env->startSection('titulo','Unit 21 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

	<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade21" data-etapa="conversation">
				<h3 class="barlow">UNIT 21 - PROFESSOR SARAH HENDRIX</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="<?php echo e(asset('assets/audio/unit21/conversation/completo.ogg')); ?>" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Sarah :</b> Morning! My name is Sarah Hendrix and i’ll be your teacher. First, i’d like to tell you all a little bit about myself.</p>
					<p><b>Sarah :</b> Well, it’s a long story. I’ll make it simple though. I was born in England but I moved to the u.S. When I was 17 to specialize in ilustration, the area I work in today. I used to draw for the school paper ilustrations back in England.</p>
					<p><b>Sarah :</b> Nowadays, i’m 29 years old and I produce ilustrations for a variety of companies such as advertising agencies and magazines.</p>
					<p><b>Sarah :</b> During these lessons we will see how photoshop can be of use for an ilustrator.</p>
				</div>
				<figure>
					<img src="<?php echo e(asset('assets/img/playgo/unit21/ilust_21.jpg')); ?>" alt="Sarah" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="<?php echo e(asset('assets/portal/images/play-video.jpg')); ?>"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo21.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila1/unidade21/conversation.blade.php ENDPATH**/ ?>