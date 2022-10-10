<?php if(Auth::user()->cargo_id == 1): ?>
    <section id="caminhos">
        <a href="/admin" class="suave mini-title upper">Admin</a>
        <a href="/portal" class="suave mini-title upper">Portal</a>
        <a href="/ranking" class="suave mini-title upper">Ranking</a>
    </section>
    <script>$("body").css({"padding-top":"56px"});</script>
<?php endif; ?>
<header id="header">

		<div id="header-inner-wrap" class="">

			<div id="header-wrap" class="be-wrap clearfix" data-default-height="78" data-sticky-height="58">

				<div id="logo">

					<a href="">

                        <img class="normal-logo" src="<?php echo e(asset('assets/portal/images/logo-white.png')); ?>" alt=""/>

                    </a>

				</div>

				<div class="header-controls">

					<div class="menu-controls sliderbar-menu-controller right" title="Sidebar Menu Controller">

						<i class="font-icon icon-menu"></i>

					</div>

					<div class="mobile-nav-controller-wrap">

						<div class="menu-controls mobile-nav-controller" title="Mobile Menu Controller">

							<i class="font-icon icon-menu"></i>

						</div>

					</div>

				</div>

				<nav id="navigation" class="clearfix" >

                    <div class="menu left">

                        <ul id="menu" class="clearfix">

                            <li class="active">

                                <a href="/portal">Home</a>

                            </li>

							<?php if($aluno->turma != ""): ?>

                            <li class="menu-item">

                                <a href="/material">

                                    Material Didático

                                </a>

                            </li>

							<?php endif; ?>

                            <li class="menu-item">

                                <a href="/nota">

                                    Notas

                                </a>

                            </li>

                            <li class="menu-item">

                                <a href="/frequencia">

                                    Frequência

                                </a>

                            </li>

                            <li class="menu-item">

                                <a href="/financeiro">

                                    Financeiro

                                </a>

                            </li>

                            <li class="menu-item">

                                <a href="/contato">

                                    Contato

                                </a>

                            </li>

							<?php if($aluno->turma != ""): ?>

                            <li class="menu-item">

                                <a href="/perfil">

                                    Configuração

                                </a>

                            </li>

							<?php endif; ?>

                        </ul>

                    </div>

				</nav>

			</div>

			<div class="clearfix">

				<div class="mobile-menu">

					<ul id="mobile-menu" class="clearfix">

						<li><a href="/home">

							<i class="icon_house_alt font-12"></i>

							<span> Home </span></a>

						</li>

						<?php if($aluno->turma != ""): ?>

						<li><a href="/material">

							<i class="icon_book font-12"></i>

							<span> Material Didático </span></a>

						</li>

						<?php endif; ?>

						<li><a href="/nota">

							<i class="icon_desktop font-12"></i>

							<span> Notas </span></a>

						</li>



						<li><a href="/frequencia">

							<i class="icon_comment font-12"></i>

							<span> Frequência / Reposição </span></a>

						</li>

						<li><a href="/financeiro">

							<i class="icon-money font-12"></i>

							<span> Financeiro </span></a>

						</li>

						<li><a href="/contato">

							<i class="icon_group font-12"></i>

							<span> Contato </span></a>

						</li>

						<?php if($aluno->turma != ""): ?>

						<li><a href="/perfil">

							<i class="icon_cog font-12"></i>

							<span>Configuração </span></a>

						</li>

						<?php endif; ?>

					</ul>

				</div>

			</div>

		</div>

		</header><?php /**PATH C:\xampp\htdocs\imugi\resources\views/layouts/portal/header.blade.php ENDPATH**/ ?>