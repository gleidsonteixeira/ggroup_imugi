<?php echo $__env->make('layouts.site.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('conteudo'); ?>
<?php echo $__env->make('layouts.site.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home1/imugi270/site.imugi.com.br/resources/views/layouts/site/template.blade.php ENDPATH**/ ?>