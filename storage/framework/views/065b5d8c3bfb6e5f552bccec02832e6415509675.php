<!-- ADMIN MENU -->
<header>
    <nav class="suave">
        <div class="logo">
            <a href="/admin">
                <img src="<?php echo e(asset('assets/site/images/logo_imugi.png')); ?>" alt="Imugi">
            </a>
        </div>
        <ul>
            <li>
                <a href="/admin" class="suave upper">Início</a>
            </li>
            <!-- <li>
                <a class="sub-menu suave upper">
                    Site
                </a>
                <ul class="suave">
                    <li><a href="/admin/banners" class="suave upper">Banners</a></li>
                    <li><a href="/admin/galeria" class="suave upper">Galeria</a></li>
                    <li><a href="/admin/depoimentos" class="suave upper">Depoimentos</a></li>
                    <li><a href="/admin/posts" class="suave upper">Blog</a></li>
                </ul>
            </li> -->
            <!-- <li>
                <a class="sub-menu suave upper">
                    Acadêmico
                </a>
                <ul class="suave">
                    <li><a href="/admin/alunos" class="suave upper">Alunos</a></li>
                </ul>
            </li> -->
            <li>
                <a class="sub-menu suave upper">
                    Administrativo
                </a>
                <ul class="suave">
                    <li><a href="/admin/cargos" class="suave upper">Cargos</a></li>
                    <li><a href="/admin/funcionarios" class="suave upper">Funcionários</a></li>
                    <li><a href="/admin/unidades" class="suave upper">Unidades</a></li>
                </ul>
            </li>
            <li>
                <a href="/logout" class="suave upper">
                    Sair
                </a>
            </li>
        </ul>
    </nav>
    <div class="perfil">
        <div class="infos">
            <h6>
                <?php echo e(Auth::user()->name); ?>

                <span>
                    <?php echo e(Auth::user()->cargo->cargo_nome); ?>

                </span>
            </h6>
        </div>
    </div>
</header>

<?php if(Auth::user()->cargo_id == 1): ?>
    <section id="caminhos">
        <a href="/admin" class="suave mini-title upper">Admin</a>
        <a href="/portal" class="suave mini-title upper">Portal</a>
        <a href="/ranking" class="suave mini-title upper">Ranking</a>
    </section>
    <script>$("body").css({"padding-top":"56px"});</script>
<?php endif; ?>
<!-- ADMIN MENU --><?php /**PATH C:\xampp\htdocs\imugi\resources\views/layouts/admin/nav.blade.php ENDPATH**/ ?>