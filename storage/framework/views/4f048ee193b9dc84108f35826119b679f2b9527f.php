<?php echo $__env->make('layouts.site.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('conteudo'); ?>
<?php echo $__env->make('layouts.site.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\imugi\resources\views/layouts/site/template.blade.php ENDPATH**/ ?>