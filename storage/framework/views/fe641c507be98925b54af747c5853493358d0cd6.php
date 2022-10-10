<?php $__env->startSection('titulo','Portal do Aluno | Notas'); ?>
<?php $__env->startSection('conteudo'); ?>
<?php echo $__env->make('layouts.portal.menus.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
    <?php echo $__env->make('layouts.portal.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php if($aluno->turma == ""): ?>

		<div class="alert alert-warning" style="margin:0!important;">

    		<strong>Atenção!</strong> Para acesso completo ao portal aguarde o prazo de até 48h.

  		</div>

  	<?php endif; ?>
		<div  class="carousel slide">
			<div class="carousel-inner">

				<div class="item active">

					<form method="GET" action="http://fpeduc.com/aluno-portal/<?php echo e(Auth::user()->name); ?>/<?php echo e(Auth::user()->email); ?>/<?php echo e(Auth::user()->matricula); ?>/<?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($aluno->cod_unidade); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" target="_blank" style="background-color:#fff; margin-top:-20px;">

						<input type="image" src="<?php echo e(asset('assets/portal/images/aovivo/aovivo.jpg')); ?>" alt="Submit" style="width:100%;">

					</form>

				</div>

			</div>
			<div class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
					    <img src="<?php echo e(asset('assets/portal/images/notas.jpg')); ?>" alt="Notas">
					</div>
				</div>
			    <div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:40px; background-color: #ffffff;">
               		<div class="be-row be-wrap clear">
 					    <div class="col-md-6" style="margin-top: 90px;">
							<?php if(sizeOf($alunos) > 0): ?>
								<?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<h3><strong> Aluno(a): <?php echo e($aluno->nome); ?> </strong></h3>
									<h3><strong> Nome da Turma: <?php echo e($aluno->turma); ?> </h3>
									<h3><strong> Matricula: <?php echo e($aluno->matricula); ?> </h3>
									<h3><strong> Módulo: <?php echo e($aluno->curso); ?> </h3>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
							Suas infomações estão sendo processadas
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:40px; background-color: #ffffff;" id="table_notas">
				<div class="be-row be-wrap clear">
					<div class="col-lg-12" style="margin-top: 50px;">
						<table class="table table-striped  table-responsive">
							<thead>
								<tr class="title-table">
									<th>Modulos</th>
									<th style="text-align: center;">Prova Teórica</th>
									<th style="text-align: center;">Prova Prática</th>
									<th style="text-align: center;">Trabalhos</th>
									<th style="text-align: center;">Média</th>
								</tr>
							</thead>
							<tbody>
							<?php if(count(Auth::user()->notas) > 0): ?>
								
								<tr>
									<th>PLAY GO</th>
									<td><?php echo e(isset($boletim[0]["trabalho"]) ? $boletim[0]["trabalho"] : "--"); ?></td>
									<td><?php echo e(isset($boletim[0]["pratica"]) ? $boletim[0]["pratica"] : "--"); ?></td>
									<td><?php echo e(isset($boletim[0]["teorica"]) ? $boletim[0]["teorica"] : "--"); ?></td>
									<td><?php echo e(round(($boletim[0]["trabalho"] + $boletim[0]["pratica"] +$boletim[0]["teorica"]) / 3)); ?></td>
								</tr>
								
								<tr>
									<th>PHOTOSHOP</th>
									<td><?php echo e($boletim[1]["trabalho"] > 0 ? $boletim[1]["trabalho"] : "--"); ?></td>
									<td><?php echo e($boletim[1]["pratica"] > 0 ? $boletim[1]["pratica"] : "--"); ?></td>
									<td><?php echo e($boletim[1]["teorica"] > 0 ? $boletim[1]["teorica"] : "--"); ?></td>
									<td><?php echo e(round(($boletim[1]["trabalho"] + $boletim[1]["pratica"] +$boletim[1]["teorica"]) / 3)); ?></td>
								</tr>
								
								<tr>
									<th>DOMINATING</th>
									<td><?php echo e($boletim[2]["trabalho"] > 0 ? $boletim[2]["trabalho"] : "--"); ?></td>
									<td><?php echo e($boletim[2]["pratica"] > 0 ? $boletim[2]["pratica"] : "--"); ?></td>
									<td><?php echo e($boletim[2]["teorica"] > 0 ? $boletim[2]["teorica"] : "--"); ?></td>
									<td><?php echo e(round(($boletim[2]["trabalho"] + $boletim[2]["pratica"] +$boletim[2]["teorica"]) / 3)); ?></td>
								</tr>
								
								<tr>
									<th>GAME AND ANIMATION</th>
									<td><?php echo e($boletim[3]["trabalho"] > 0 ? $boletim[3]["trabalho"] : "--"); ?></td>
									<td><?php echo e($boletim[3]["pratica"] > 0 ? $boletim[3]["pratica"] : "--"); ?></td>
									<td><?php echo e($boletim[3]["teorica"] > 0 ? $boletim[3]["teorica"] : "--"); ?></td>
									<td><?php echo e(round(($boletim[3]["trabalho"] + $boletim[3]["pratica"] +$boletim[3]["teorica"]) / 3)); ?></td>
								</tr>
								
								<tr>
									<th>MASTER OF LANGUAGE</th>
									<td><?php echo e($boletim[4]["trabalho"] > 0 ? $boletim[4]["trabalho"] : "--"); ?></td>
									<td><?php echo e($boletim[4]["pratica"] > 0 ? $boletim[4]["pratica"] : "--"); ?></td>
									<td><?php echo e($boletim[4]["teorica"] > 0 ? $boletim[4]["teorica"] : "--"); ?></td>
									<td><?php echo e(round(($boletim[4]["trabalho"] + $boletim[4]["pratica"] +$boletim[4]["teorica"]) / 3)); ?></td>
								</tr>
								
								<tr>
									<th>VIDEO EDITION</th>
									<td><?php echo e($boletim[5]["trabalho"] > 0 ? $boletim[5]["trabalho"] : "--"); ?></td>
									<td><?php echo e($boletim[5]["pratica"] > 0 ? $boletim[5]["pratica"] : "--"); ?></td>
									<td><?php echo e($boletim[5]["teorica"] > 0 ? $boletim[5]["teorica"] : "--"); ?></td>
									<td><?php echo e(round(($boletim[5]["trabalho"] + $boletim[5]["pratica"] +$boletim[5]["teorica"]) / 3)); ?></td>
								</tr>
								
							<?php else: ?>
							<tr>
								<th colspan="5"><p class="text-center">Não Possue Notas</p></th>
							</tr>
							<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php echo $__env->make('layouts.portal.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>	

	<a href="#" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.portal.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/portal/nota/index.blade.php ENDPATH**/ ?>