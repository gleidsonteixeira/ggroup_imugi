            <!-- javascript libraries -->
            <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/modernizr.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/bootstrap.bundle.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.easing.1.3.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/skrollr.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/smooth-scroll.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.appear.js')); ?>"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/bootsnav.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.nav.js')); ?>"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/wow.min.js')); ?>"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/page-scroll.js')); ?>"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/swiper.min.js')); ?>"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.stellar.js')); ?>"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.magnific-popup.min.js')); ?>"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/isotope.pkgd.min.js')); ?>"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/imagesloaded.pkgd.min.js')); ?>"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/classie.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/hamburger-menu.js')); ?>"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.fitvids.js')); ?>"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/skill.bars.jquery.js')); ?>"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/justified-gallery.min.js')); ?>"></script>
        <!--pie chart-->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/jquery.easypiechart.min.js')); ?>"></script>
        <!-- instagram -->
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/instafeed.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/site/js/main.js')); ?>"></script> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        <script>
            jQuery("input.telefone")
                .mask("(99) 9999-9999?9")
                .focusout(function (event) {  
                    var target, phone, element;  
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                    phone = target.value.replace(/\D/g, '');
                    element = $(target);  
                    element.unmask();  
                    if(phone.length > 10) {  
                        element.mask("(99) 99999-999?9");  
                    } else {  
                        element.mask("(99) 9999-9999?9");  
                    }  
                });
        </script>
        
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
       <script>
  <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
    switch(type){
        case 'info':
            toastr.info("<?php echo e(Session::get('message')); ?>");
            break;
        
        case 'warning':
            toastr.warning("<?php echo e(Session::get('message')); ?>");
            break;

        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>");
            break;

        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>");
            break;
    }
  <?php endif; ?>
</script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\imugi2\resources\views/layouts/site/scripts.blade.php ENDPATH**/ ?>