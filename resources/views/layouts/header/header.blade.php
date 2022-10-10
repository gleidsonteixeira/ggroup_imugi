@include('layouts/head-admin')
<!-- HEADER -->
 <header>
     @include('layouts/menus/sidebar')
    <div class="perfil">
        <div class="infos">
            <h6 class="barlow">
                {{ Auth::user()->name }}
                <span>
                    {{ Auth::user()->cargo->cargo_nome }}
                </span>
            </h6>
            <figure>
                <!-- <img src="" alt=""> -->
                <h5>{{ Auth::user()->name[0] }}</h5>
            </figure>
        </div>
        <ul class="box suave">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mini-title">Sair</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
            </li>
        </ul>
    </div>
</header>
<!-- /HEADER -->