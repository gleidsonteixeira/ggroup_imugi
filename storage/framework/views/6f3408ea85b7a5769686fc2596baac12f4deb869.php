 <!-- HEADER -->
 <i class="material-icons menu-btn">menu</i>
 <header>
     <a href="<?php echo e(url('/portal')); ?>" class="mini-title"><i class="material-icons">arrow_back</i> Voltar</a>
</header>
<!-- /HEADER -->
<script>
    $(".menu-btn").click(function(){
        $(this).toggleClass("active");
        $("nav").toggleClass("active");
    });
    $(".submenu").click(function(){
        $(this).toggleClass("active");
        $(this).next("ul").slideToggle("fast");
        $(this).offsetParent().toggleClass("active-item");
    });
    function activeMenu(){
        var base = $("#unidade");
        if(base){
            var apostila = base.attr("data-apostila");
            var unidade = base.attr("data-unidade");
            var etapa = base.attr("data-etapa");
            $('nav li[data-apostila="'+apostila+'"]').addClass("active-item");
            $('nav li[data-apostila="'+apostila+'"] > ul').slideToggle("fast");
            $('nav li[data-apostila="'+apostila+'"] > .submenu').addClass("active");
            $('nav li[data-apostila="'+apostila+'"] > ul li[data-unidade="'+unidade+'"]').addClass("active-item");
            $('nav li[data-apostila="'+apostila+'"] > ul li[data-unidade="'+unidade+'"] .submenu').addClass("active");
            $('nav li[data-apostila="'+apostila+'"] > ul li[data-unidade="'+unidade+'"] a[data-etapa="'+etapa+'"]').addClass("active");
            $('nav li[data-apostila="'+apostila+'"] > ul li[data-unidade="'+unidade+'"] ul').slideToggle("fast");
            $('nav li[data-apostila="'+apostila+'"] > ul li[data-unidade="'+unidade+'"] ul li a[data-etapa="'+etapa+'"]').addClass("active");
        }
    }
</script><?php /**PATH C:\xampp\htdocs\apostila-imugi\resources\views/layouts/header/mHeader.blade.php ENDPATH**/ ?>