<!-- DASHBOARD MENU -->
<nav class="suave">
    <div class="logo">
        <a href="home">
            <figure>
                <img src="{{asset('assets/img/unifp.png')}}" alt="Unifp">
            </figure>
        </a>
    </div>
    <ul>
        <li data-menu-id="1" class="suave">
            <a href="" class="@if(Route::current()->getName() == 'admin') active-item @endif item">
                <i class="material-icons">home</i>Início
            </a>
        </li>
        <li data-menu-id="2" class="suave">
            <a class="@if(Route::current()->getName() == 'categorias.index') active-item @endif item">
                <i class="material-icons">account_balance</i>Acadêmico
            </a>
            <ul>
                <li data-menu-id="2-1" class="suave"><a href="cursos">Cursos</a></li>
                <li data-menu-id="2-2" class="suave"><a href="turmas">Turmas</a></li>
                <li data-menu-id="2-3" class="suave"><a href="#!">Provas</a></li>
            </ul>
        </li>
        <li data-menu-id="3" class="suave">
            <a class="@if(Route::current()->getName() == 'categorias.index') active-item @endif item">
                <i class="material-icons">settings</i>Administrativo
            </a>
            <ul>
                <li data-menu-id="3-1" class="suave"><a href="clientes">Clientes</a></li>
                <li data-menu-id="3-2" class="suave"><a href="colaboradores">Colaboradores</a></li>
                <li data-menu-id="3-3" class="suave"><a href="cargos">Cargos</a></li>
                <li data-menu-id="3-4" class="suave"><a href="empresas">Empresas</a></li>
                <li data-menu-id="3-5" class="suave"><a href="unidades">Unidades</a></li>
                <li data-menu-id="3-6" class="suave"><a href="horarios">Horarios</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /DASHBOARD MENU -->		