<header>
    <a href="/" title="Imugi Tecnologia e Educação" class="logo">
        <img src="<?php echo e(asset('assets/site/images/logo_imugi.png')); ?>" alt="Logo Imugi">
    </a>
    <nav class="suave">
        <ul>
            <li>
                <a class="suave <?php if(Route::current()->getName() == 'site'): ?> active <?php endif; ?>" href="/">Home</a>
            </li>
            <li>
                <a>Cursos <i class="fas fa-angle-down"></i></a>
                <ul>
                    <li><a class="suave" href="/cg-fly">CG Fly</a></li>
                    <li><a class="suave" href="/code-block">Code Block</a></li>
                    <li><a class="suave" href="/gamer-dev">Gamer Dev</a></li>
                </ul>
            </li>
            <li>
                <a class="suave <?php if(Route::current()->getName() == 'depoimentos'): ?> active <?php endif; ?>" href="/depoimentos">Depoimentos</a>
            </li>
            <li>
                <a class="suave <?php if(Route::current()->getName() == 'aprimorar'): ?> active <?php endif; ?>" href="/aprimorar">Aprimorar</a>
            </li>
            <li>
                <a class="suave <?php if(Route::current()->getName() == 'unidades'): ?> active <?php endif; ?>" href="/unidades">Unidades</a>
            </li>
            <li>
                <a class="suave">Franquia <i class="fas fa-angle-down"></i></a>
                <ul>
                    <li><a class="suave" href="/seja-franqueado">Seja Franqueado</a></li>
                    <li><a class="suave" href="http://unimugi.com.br/" target="_blank">UNIMUGI</a></li>
                </ul>
            </li>
            <li class="active">
                <a class="suave" href="/login" style="border: none;">Portal do Aluno</a>
            </li>
        </ul>
        <div class="divider"></div>
        <div class="redes">
            <a target="_blank" href="https://www.facebook.com/imugieducacao/" title="Facebook">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a target="_blank" href="https://www.instagram.com/imugieducacao/" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/company/imugi/" title="LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
            <a target="_blank" href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g/videos" title="Youtube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </nav>
    <div class="menu-btn"><i class="material-icons" translate="no">menu</i></div>
    <script>
        $(".menu-btn").click(function(){
            $("header nav").toggleClass("active");
            if($("header nav").hasClass("active")){
                $(this).find("i").text("close");
            }else{
                $(this).find("i").text("menu");
            }
        });
    </script>
</header><?php /**PATH C:\xampp\htdocs\imugi2\resources\views/layouts/site/menu.blade.php ENDPATH**/ ?>