
<?php $__env->startSection('titulo','Unit 9 | Conversation'); ?>
<?php $__env->startSection('conteudo'); ?>
<!-- WRAPPER ALL -->

<?php echo $__env->make('layouts.menus.mSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header.mHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade9" data-etapa="conversation">
			<h3 class="barlow">UNIT 9</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="<?php echo e(asset('assets/audio/apostila2/UNIT 9/2. CONVERSATION/CONVERSATION.ogg')); ?>" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Welcome back guys. How are you today? We have to continue our last class conversation about preferences.
				Are you ready to start John? Boys first, today.
			</p>
			<p>
				<b>Akira :</b> Ok teacher. Well guys, for sure in our field, we need to know many different softwares.
				Like Akira said yesterday, I also have my favorites. I work with Photoshop and
				Corel Paintshop X8. There are other good softwares like Phase One capture, Serif Affinity
				Photo but these two I mentioned before, I know better because I used them when I worked
				at National Geographic in London. Well, let me talk a bit about Photoshop. For me It’s
				the easiest one to learn because it has the cleanest, the fastest and the most efficient
				presentation of tools. The negative aspect is that is has the worst system to manage your
				photos collection. But I still like it.
			</p>
			<p>
				<b>Gleen :</b> Cool John. Very clear why you prefer Ps. Well guys, unfortunately Laura is absent
				today. She will have a chance to share her preferences in another opportunity ok. Guys, next class,
				we have a visit of a representative of Zaxon. He’s coming to present us
				some details about Cinema 4D. The software we are going to study ok.
				See you in the next class
			</p>

			<div style="margin-top: 36px">
				<figure>
					<img src="<?php echo e(asset('assets/img/dominating/unit9/conversation.jpg')); ?>" alt="national geograph">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/apostila2/unidade9/conversation.blade.php ENDPATH**/ ?>