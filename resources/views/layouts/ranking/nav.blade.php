<!-- RANKING MENU -->
<header>
    <nav class="suave">
        <div class="logo">
            <a href="/ranking">
                <img src="{{asset('assets/site/images/logo_imugi.png')}}" alt="Imugi">
            </a>
        </div>
        <ul>
            <li>
                <a href="/ranking" class="suave upper">Início</a>
            </li>
            <li>
                <a class="sub-menu suave upper">
                    Administração
                </a>
                <ul class="suave">
                    <li><a href="/ranking/funcionarios" class="suave upper">Funcionários</a></li>
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
                {{ Auth::user()->name }}
                <span>
                    {{ Auth::user()->cargo->cargo_nome }}
                </span>
            </h6>
        </div>
    </div>
</header>

@if(Auth::user()->cargo_id == 1)
    <section id="caminhos">
        <a href="/admin" class="suave mini-title upper">Admin</a>
        <a href="/portal" class="suave mini-title upper">Portal</a>
        <a href="/ranking" class="suave mini-title upper">Ranking</a>
    </section>
    <script>$("body").css({"padding-top":"56px"});</script>
@endif
<!-- /RANKING MENU -->