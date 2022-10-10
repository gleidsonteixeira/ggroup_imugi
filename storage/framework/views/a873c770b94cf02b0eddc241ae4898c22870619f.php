
<?php $__env->startSection('conteudo'); ?>
<div class="card bg-success">
  <div class="card-header">
    Imugi - Tecnologia e Educação
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <p>Esta e a minha mensagem <?php echo e($data['mensagem']); ?>.</p>
      <footer class="blockquote-footer">
          <p> Nome : <strong> <?php echo e($data['nome']); ?> </strong> </p>
          <p> Telefone : <strong> <?php echo e($data['telefone']); ?> </strong> </p>
          <p> Estado : <strong> <?php echo e($data['estado']); ?> </strong> </p>
          <p> Cidade : <strong> <?php echo e($data['cidade']); ?> </strong> </p>
      </footer>
    </blockquote>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/portal/email/index.blade.php ENDPATH**/ ?>