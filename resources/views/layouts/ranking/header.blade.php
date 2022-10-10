<header id="header">
		<div id="header-inner-wrap" class="">
			<div id="header-wrap" class="be-wrap clearfix" data-default-height="78" data-sticky-height="58">
				<div id="logo">
					<a href="">
                        <img class="normal-logo" src="{{asset('assets/portal/images/logo_gracom.png')}}" alt=""/>
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
							@if(isset($aluno) && $aluno->turma != "")
                            <li class="menu-item">
                                <a href="/material">
                                    Material Didático
                                </a>
                            </li>
							@endif
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
							@if(isset($aluno) && $aluno->turma != "")
                            <li class="menu-item">
                                <a href="/perfil">
                                    Configuração
                                </a>
                            </li>
							@endif
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
						@if(isset($aluno) && $aluno->turma != "")
						<li><a href="/material">
							<i class="icon_book font-12"></i>
							<span> Material Didático </span></a>
						</li>
						@endif
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
						@if(isset($aluno) && $aluno->turma != "")
						<li><a href="/perfil">
							<i class="icon_cog font-12"></i>
							<span>Configuração </span></a>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
		</header>