<footer>
    <div class="item">
        <img src="{{asset('assets/site/images/logo_imugi.png')}}" alt="Logo Imugi">
        <p>Escola de tecnologia e educação que utiliza uma metodologia de ensino única.</p>
    </div>
    <div class="item">
        <ul>
            <li><a class="suave" href="/">Home</a></li>
            <li><a class="suave" href="/seja-franqueado">Seja Franqueado</a></li>
            <li><a class="suave" href="/contato">Contato</a></li>
            <li><a class="suave" href="/login">Portal do Aluno</a></li>
            <li><a class="suave" href="/politica-de-privacidade">Política de Privacidade</a></li>
        </ul>
    </div>
    <div class="item">
        <a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=554184608944">
            <div class="f-suporte">
                Suporte <i class="fab fa-whatsapp" translate="no"></i><div><span>Atendimento via</span><b>Whatsapp</b></div>
            </div>
        </a>
        <div class="f-franqueado">
            Seja um <b>Franqueado</b>
            <a class="suave" href="/seja-franqueado">Quero ter <br>uma <b>IMUGI</b></a>
        </div>
    </div>
    <div class="item">
        <h6>Curta e Compartilhe</h6>
        <div class="redes">
            <a target="_blank" href="https://www.facebook.com/imugieducacao/"><i class="suave fab fa-facebook-square"></i></a>
            <a target="_blank" href="https://www.instagram.com/imugieducacao/"><i class="suave fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/imugi/"><i class="suave fab fa-linkedin"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g/videos"><i class="suave fab fa-youtube"></i></a>
        </div>
    </div>
</footer>
<div class="rodape">
    <h6>&copy; Copyright Imugi, Todos os direitos reservados.</h6>
</div>

<script>
    var aceito = localStorage.getItem("aceito_imugi");
    if (aceito == null) {
        $(".termos").css({
            "display": "block"
        })
    }
    $(".termos button").click(function() {
        localStorage.setItem("aceito_imugi", 1);
        $(".termos").css({
            "display": "none"
        })
    });
</script>