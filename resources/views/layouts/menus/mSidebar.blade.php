<!-- DASHBOARD MENU -->
<nav class="suave">
    <!-- verificar tipo da unidade e modulo doaluno -->
    
    @if($aluno->turma->tipo->tipo_unidade == 0)
    <input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo->tipo_unidade }}" data-material="{{$aluno->turma->curso ?? ''}}">
    @else
    <input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo->tipo_unidade }}" data-material="{{$aluno->material->nivel ?? ''}}">
    @endif


    <div class="logo">
        <a href="{{route('home')}}">
            <figure>
                <img src="{{asset('assets/img/logo-imugi.png')}}" alt="">
            </figure>
        </a>
    </div>
    <ul class="nav">
        <li class="@if(Route::current()->getName() == 'home') active-item @endif item">
            <a href="{{ route('home') }}">
                <i class="material-icons">home</i> Bem vindo
            </a>
        </li>

        <!--APOSTILA PLAY GO-->
        <li class="item apostila-playgo" data-apostila="apostila1">
            <a class="click submenu">
                <i class="material-icons">flag</i> PLAY GO
            </a>
            <ul>
                <!-- INTRO 1 -->
                <li class="item" data-unidade="intro1">
                    <a href="{{route('apostila1', ['intro1', 'intro'])}}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRODUCTION</a>
                </li>
                <!--UNIDADE 1-->
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 1 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade1', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade1', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade1', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade1', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade1', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade1', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 2-->
                <li class="item" data-unidade="unidade2">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 2 - INTRODUCTION TO PHOTOSHOP
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade2', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade2', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade2', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade2', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade2', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade2', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 3-->
                <li class="item" data-unidade="unidade3">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 3 - PHOTOGRAPHY AND PHOTOSHOP
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade3', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade3', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade3', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade3', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade3', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade3', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 4-->
                <li class="item" data-unidade="unidade4">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 4 - NICE TO MEET YOU,<br> KATE!
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade4', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade4', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade4', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade4', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade4', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade4', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 5-->
                <li class="item" data-unidade="unidade5">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 5 - BURN TOOL
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade5', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade5', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade5', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade5', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade5', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade5', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 6-->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 6 - BRUSH AND RED EYE <br> CORRECTION
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade6', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade6', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade6', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade6', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade6', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade6', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 7-->
                <li class="item" data-unidade="unidade7">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 7 - ADJUSTMENT PANEL
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade7', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade7', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade7', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade7', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade7', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade7', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 8-->
                <li class="item" data-unidade="unidade8">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 8 - REVIEW OF SOPHIA’S CLASSES
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade8', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade8', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade8', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade8', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade8', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade8', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 9-->
                <li class="item" data-unidade="unidade9">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 9 - PROFESSOR ANA BEATRIZ
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade9', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade9', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade9', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade9', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade9', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade9', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 10-->
                <li class="item" data-unidade="unidade10">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 10 - PRONUNCIATION
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade10', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade10', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade10', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade10', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade10', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade10', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 11-->
                <li class="item" data-unidade="unidade11">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 11 - COLOR TOOLS
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade11', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade11', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade11', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade11', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade11', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade11', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 12-->
                <li class="item" data-unidade="unidade12">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 12 - TYPE TOOL & STYLE PANEL
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade12', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade12', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade12', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade12', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade12', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade12', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 13 -->
                <li class="item" data-unidade="unidade13">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 13 - LAYER STYLE
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade13', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade13', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade13', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade13', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade13', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade13', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 14-->
                <li class="item" data-unidade="unidade14">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 14 - COLOR TOOLS & TYPOGRAPHY TOOLS REVIEW
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade14', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade14', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade14', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade14', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade14', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade14', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 15-->
                <li class="item" data-unidade="unidade15">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 15 - PROFESSOR AKIRA SUZUKI
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade15', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade15', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade15', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade15', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade15', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade15', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 16-->
                <li class="item" data-unidade="unidade16">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 16 - AKIRA’S STUDENTS
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade16', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade16', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade16', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade16', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade16', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade16', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 17-->
                <li class="item" data-unidade="unidade17">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 17 - LAYERS AND GUIDES
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade17', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade17', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade17', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade17', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade17', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade17', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 18-->
                <li class="item" data-unidade="unidade18">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 18 - SHAPE TOOL <br> & ADOBE KULER
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade18', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade18', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade18', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade18', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade18', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade18', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 19-->
                <li class="item" data-unidade="unidade19">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 19 - TEXT FORMATING
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade19', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade19', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade19', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade19', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade19', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade19', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 20-->
                <li class="item" data-unidade="unidade20">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 20 - AKIRA’S REVIEW
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade20', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade20', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade20', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade20', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade20', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade20', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 21-->
                <li class="item" data-unidade="unidade21">
                    <a class="click submenu titulo">
                        <i class="material-icons">flag</i> UNIT 21 - PROFESSOR SARAH HENDRIX
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade21', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade21', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade21', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade21', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade21', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade21', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 22-->
                <li class="item" data-unidade="unidade22">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 22 - SARAH’S STUDENTS
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade22', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade22', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade22', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade22', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade22', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade22', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 23-->
                <li class="item" data-unidade="unidade23">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 23 - BRUSHES
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade23', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade23', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade23', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade23', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade23', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade23', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 24-->
                <li class="item" data-unidade="unidade24">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 24 - ERASER TOOL
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade24', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade24', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade24', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade24', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade24', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade24', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 25-->
                <li class="item" data-unidade="unidade25">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 25 - PEN TOOLS
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade25', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade25', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade25', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade25', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade25', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade25', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 26-->
                <li class="item" data-unidade="unidade26">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 26 - SARAH’S REVIEW
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade26', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade26', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade26', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade26', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade26', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade26', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 27-->
                <li class="item" data-unidade="unidade27">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 27 - PROFESSOR VICTOR
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade27', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade27', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade27', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade27', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade27', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade27', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 28-->
                <li class="item" data-unidade="unidade28">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 28 - VICTOR’S STUDENTS
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade28', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade28', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade28', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade28', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade28', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade28', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 29-->
                <li class="item" data-unidade="unidade29">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 29 - KEY FRAME
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade29', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade29', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade29', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade29', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade29', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade29', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 30-->
                <li class="item" data-unidade="unidade30">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 30 - VIDEO EFFECTS
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade30', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade30', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade30', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade30', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade30', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade30', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 31-->
                <li class="item" data-unidade="unidade31">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 31 - VIDEO TRANSITION
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade31', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade31', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade31', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade31', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade31', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade31', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 32-->
                <li class="item" data-unidade="unidade32">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 32 - VICTOR’S REVIEW
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila1', ['unidade32', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila1', ['unidade32', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila1', ['unidade32', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila1', ['unidade32', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila1', ['unidade32', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila1', ['unidade32', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- APOSTILA PHOTOSHOP -->
        <li class="item apostila-PHOTOSHOP" data-apostila="photoshop-corel">
            <a class="click submenu">
                <i class="material-icons">flag</i> GRAPHIC AND PHOTOGRAPHY
            </a>
            <ul>
                
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu">
                        <i class="material-icons">school</i> PHOTOSHOP
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'intro'])}}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRODUCTION</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula1'])}}" data-etapa="aula1" class="titulo"><i class="material-icons suave">assignment</i>AULA 01 - CONHECENDO O ADOBE PHOTOSHOP</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula2'])}}" data-etapa="aula2" class="titulo"><i class="material-icons suave">assignment</i>AULA 02 - FERRAMENTAS DE SELEÇÃO E RECORTE</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula3'])}}" data-etapa="aula3" class="titulo"><i class="material-icons suave">assignment</i>AULA 03 - CAMADAS E SELEÇÃO COM A CANETA LAYERS PANEL</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula4'])}}" data-etapa="aula4" class="titulo"><i class="material-icons suave">assignment</i>AULA 04 - SMART OBJECTS E SMART FILTERS</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula5'])}}" data-etapa="aula5" class="titulo"><i class="material-icons suave">assignment</i>AULA 05 - AJUSTES DESTRUTIVOS E HISTÓRICO</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula6'])}}" data-etapa="aula6" class="titulo"><i class="material-icons suave">assignment</i>AULA 06 - CAMADAS DE AJUSTE E MÁSCARAS DE CAMADA</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula7'])}}" data-etapa="aula7" class="titulo"><i class="material-icons suave">assignment</i>AULA 07 - BLENDING MODES E MÁSCARA DE CORTE</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula8'])}}" data-etapa="aula8" class="titulo"><i class="material-icons suave">assignment</i>AULA 08 - COMPOSIÇÃO TEMÁTICA</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula9'])}}" data-etapa="aula9" class="titulo"><i class="material-icons suave">assignment</i>AULA 09 - DISTORÇÕES E PERSPECTIVAS</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula10'])}}" data-etapa="aula10" class="titulo"><i class="material-icons suave">assignment</i>AULA 10 - DISTORÇÕES E PERSPECTIVAS II  </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula11'])}}" data-etapa="aula11" class="titulo"><i class="material-icons suave">assignment</i>AULA 11 - RETOQUE E RESTAURAÇÃO DE IMAGENS</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula12'])}}" data-etapa="aula12"><i class="material-icons suave">assignment</i>AULA 12 - PINTURA DIGITAL</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula13'])}}" data-etapa="aula13"><i class="material-icons suave">assignment</i>AULA 13 - EDIÇÃO DE VÍDEOS</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula14'])}}" data-etapa="aula14"><i class="material-icons suave">assignment</i>AULA 14 - ACTIONS</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula15'])}}" data-etapa="aula15"><i class="material-icons suave">assignment</i>AULA 15 - MOCKUPS</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula16'])}}" data-etapa="aula16"><i class="material-icons suave">lightbulb</i>AVALIAÇÃO PRATICA</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['photoshop', 'aula17'])}}" data-etapa="aula17"><i class="material-icons suave">lightbulb</i>AVALIAÇÃO TEORICA</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 12-->
                 <li class="item" data-unidade="unidade2">
                    <a class="click submenu">
                        <i class="material-icons">school</i> COREL DRAW
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'intro'])}}" data-etapa="intro"><i class="material-icons suave">bookmarks</i>INTRO</a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula18'])}}" data-etapa="aula18"><i class="material-icons suave">assignment</i>Aula 18 - ESPAÇO DE TRABALHO </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula19'])}}" data-etapa="aula19" class="titulo"><i class="material-icons suave">assignment</i>Aula 19 - RECURSOS BÁSICOS DO COREL DRAW </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula20'])}}" data-etapa="aula20" class="titulo"><i class="material-icons suave">assignment</i>Aula 20 - COPIAR, DUPLICAR E EXCLUIR </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula21'])}}" data-etapa="aula21"><i class="material-icons suave">assignment</i>Aula 21 - LINHAS </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula22'])}}" data-etapa="aula22"><i class="material-icons suave">assignment</i>Aula 22 - SIMETRIA </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula23'])}}" data-etapa="aula23"><i class="material-icons suave">assignment</i>Aula 23 - TEXTO </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula24'])}}" data-etapa="aula24"><i class="material-icons suave">assignment</i>Aula 24 - CAMADAS </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula25'])}}" data-etapa="aula25"><i class="material-icons suave">assignment</i>Aula 25 - MODELAR OBJETOS </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula26'])}}" data-etapa="aula26"><i class="material-icons suave">assignment</i>Aula 26 - OBJETOS E SÍMBOLOS </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula27'])}}" data-etapa="aula27" class="titulo"><i class="material-icons suave">assignment</i>Aula 27 - PREENCHIMENTOS E TRANSPARÊNCIAS </a>
                        </li>
                         <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula28'])}}" data-etapa="aula28"><i class="material-icons suave">assignment</i>Aula 28 - CORES </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula29'])}}" data-etapa="aula29"><i class="material-icons suave">assignment</i>Aula 29 - EFEITOS VISUAIS </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula30'])}}" data-etapa="aula30" class="titulo"><i class="material-icons suave">assignment</i>Aula 30 - ESTILOS E CONJUNTOS DE ESTILOS </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula31'])}}" data-etapa="aula31"><i class="material-icons suave">assignment</i>Aula 31 - PÁGINAS E LAYOUT </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula32'])}}" data-etapa="aula32"><i class="material-icons suave">assignment</i>Aula 32 - RASTREAR BITMAPS </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula33'])}}" data-etapa="aula33"><i class="material-icons suave">assignment</i>Aula 33 - POWERTRACE </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula34'])}}" data-etapa="aula34" class="titulo"><i class="material-icons suave">assignment</i>Aula 34 - CÓDIGOS DE BARRA E QR </a>
                        </li>
                        <li>
                            <a href="{{route('apostila4', ['corel-draw', 'aula35'])}}" data-etapa="aula35"><i class="material-icons suave">lightbulb</i>Atividade Prática </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!--APOSTILA DOMINATING-->
        <li class="item apostila-dominating" data-apostila="apostila2">
            <a class="click submenu">
                <i class="material-icons">flag</i> DOMINATING
            </a>
            <ul>
                <!-- INTRO 2 -->
                <li class="item" data-unidade="intro2">
                    <a href="{{route('apostila2', ['intro2', 'intro'])}}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRODUCTION</a>
                </li>
                <!--UNIDADE 1-->
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 1
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade1', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade1', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade1', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade1', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade1', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade1', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 2-->
                <li class="item" data-unidade="unidade2">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 2
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade2', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade2', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade2', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade2', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade2', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade2', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 3-->
                <li class="item" data-unidade="unidade3">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 3
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade3', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade3', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade3', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade3', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade3', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade3', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 4-->
                <li class="item" data-unidade="unidade4">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 4
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade4', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade4', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade4', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade4', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade4', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade4', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 5-->
                <li class="item" data-unidade="unidade5">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 5
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade5', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade5', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade5', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade5', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade5', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade5', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 6-->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 6
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade6', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade6', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade6', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade6', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade6', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade6', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 7-->
                <li class="item" data-unidade="unidade7">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 7
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade7', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade7', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade7', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade7', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade7', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade7', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 8-->
                <li class="item" data-unidade="unidade8">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 8
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade8', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade8', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade8', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade8', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade8', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade8', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 9-->
                <li class="item" data-unidade="unidade9">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 9
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade9', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade9', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade9', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade9', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade9', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade9', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 10-->
                <li class="item" data-unidade="unidade10">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 10
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade10', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade10', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade10', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade10', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade10', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade10', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 11-->
                <li class="item" data-unidade="unidade11">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 11
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade11', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade11', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade11', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade11', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade11', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade11', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 12-->
                <li class="item" data-unidade="unidade12">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 12
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade12', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade12', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade12', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade12', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade12', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade12', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 13-->
                <li class="item" data-unidade="unidade13">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 13
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade13', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade13', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade13', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade13', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade13', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade13', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 14-->
                <li class="item" data-unidade="unidade14">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 14
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade14', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade14', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade14', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade14', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade14', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade14', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 15-->
                <li class="item" data-unidade="unidade15">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 15
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade15', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade15', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade15', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade15', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade15', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade15', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 16-->
                <li class="item" data-unidade="unidade16">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 16
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade16', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade16', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade16', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade16', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade16', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade16', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 17-->
                <li class="item" data-unidade="unidade17">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 17
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade17', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade17', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade17', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade17', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade17', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade17', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 18-->
                <li class="item" data-unidade="unidade18">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 18
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade18', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade18', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade18', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade18', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade18', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade18', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 19-->
                <li class="item" data-unidade="unidade19">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 19
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade19', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade19', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade19', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade19', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade19', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade19', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 20-->
                <li class="item" data-unidade="unidade20">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 20
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade20', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade20', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade20', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade20', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade20', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade20', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 21-->
                <li class="item" data-unidade="unidade21">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 21
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade21', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade21', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade21', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade21', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade21', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade21', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 22-->
                <li class="item" data-unidade="unidade22">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 22
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade22', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade22', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade22', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade22', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade22', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade22', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 23-->
                <li class="item" data-unidade="unidade23">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 23
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade23', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade23', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade23', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade23', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade23', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade23', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 24-->
                <li class="item" data-unidade="unidade24">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 24
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade24', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade24', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade24', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade24', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade24', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade24', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 25-->
                <li class="item" data-unidade="unidade25">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 25
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade25', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade25', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade25', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade25', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade25', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade25', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 26-->
                <li class="item" data-unidade="unidade26">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 26
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade26', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade26', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade26', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade26', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade26', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade26', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 27-->
                <li class="item" data-unidade="unidade27">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 27
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade27', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade27', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade27', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade27', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade27', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade27', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 28-->
                <li class="item" data-unidade="unidade28">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 28
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade28', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade28', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade28', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade28', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade28', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade28', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 29-->
                <li class="item" data-unidade="unidade29">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 29
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade29', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade29', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade29', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade29', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade29', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade29', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 30-->
                <li class="item" data-unidade="unidade30">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 30
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade30', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade30', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade30', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade30', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade30', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade30', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 31-->
                <li class="item" data-unidade="unidade31">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 31
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade31', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade31', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade31', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade31', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade31', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade31', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 32-->
                <li class="item" data-unidade="unidade32">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 32
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade32', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade32', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade32', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade32', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade32', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade32', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 33-->
                <li class="item" data-unidade="unidade33">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 33
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade33', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade33', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade33', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade33', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade33', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade33', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 34-->
                <li class="item" data-unidade="unidade34">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 34
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade34', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade34', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade34', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade34', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade34', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade34', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 35-->
                <li class="item" data-unidade="unidade35">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 35
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade35', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade35', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade35', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade35', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade35', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade35', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 36-->
                <li class="item" data-unidade="unidade36">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 36
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade36', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade36', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade36', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade36', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade36', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade36', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 37-->
                <li class="item" data-unidade="unidade37">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 37
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade37', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade37', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade37', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade37', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade37', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade37', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 38-->
                <li class="item" data-unidade="unidade38">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 38
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade38', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade38', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade38', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade38', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade38', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade38', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 39-->
                <li class="item" data-unidade="unidade39">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 39
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade39', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade39', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade39', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade39', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade39', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade39', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 40-->
                <li class="item" data-unidade="unidade40">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 40
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade40', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade40', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade40', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade40', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade40', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade40', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 41-->
                <li class="item" data-unidade="unidade41">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 41
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade41', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade41', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade41', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade41', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade41', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade41', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 42-->
                <li class="item" data-unidade="unidade42">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 42
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade42', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade42', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade42', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade42', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade42', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade42', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 43-->
                <li class="item" data-unidade="unidade43">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 43
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade43', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade43', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade43', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade43', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade43', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade43', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 44-->
                <li class="item" data-unidade="unidade44">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 44
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade44', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade44', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade44', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade44', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade44', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade44', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 45-->
                <li class="item" data-unidade="unidade45">
                    <a class="click submenu">
                        <i class="material-icons">folder</i> UNIT 45
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade45', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade45', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade45', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade45', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade45', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade45', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 46-->
                <li class="item" data-unidade="unidade46">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 46
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade46', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade46', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade46', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade46', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade46', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade46', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 47-->
                <li class="item" data-unidade="unidade47">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 47
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade47', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade47', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade47', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade47', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade47', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade47', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 48-->
                <li class="item" data-unidade="unidade48">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 48
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade48', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade48', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade48', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade48', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade48', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade48', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 49-->
                <li class="item" data-unidade="unidade49">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 49
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade49', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade49', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade49', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade49', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade49', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade49', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 50-->
                <li class="item" data-unidade="unidade50">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 50
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade50', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade50', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade50', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade50', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade50', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade50', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 51-->
                <li class="item" data-unidade="unidade51">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 51
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade51', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade51', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade51', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade51', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade51', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade51', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 52-->
                <li class="item" data-unidade="unidade52">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 52
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade52', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade52', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade52', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade52', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade52', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade52', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 53-->
                <li class="item" data-unidade="unidade53">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 53
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade53', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade53', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade53', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade53', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade53', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade53', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 54-->
                <li class="item" data-unidade="unidade54">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 54
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade54', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade54', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade54', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade54', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade54', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade54', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 55-->
                <li class="item" data-unidade="unidade55">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 55
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade55', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade55', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade55', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade55', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade55', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade55', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 56-->
                <li class="item" data-unidade="unidade56">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 56
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade56', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade56', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade56', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade56', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade56', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade56', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 57-->
                <li class="item" data-unidade="unidade57">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 57
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade57', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade57', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade57', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade57', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade57', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade57', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 58-->
                <li class="item" data-unidade="unidade58">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 58
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade58', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade58', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade58', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade58', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade58', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade58', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 59-->
                <li class="item" data-unidade="unidade59">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 59
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade59', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade59', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade59', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade59', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade59', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade59', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 60-->
                <li class="item" data-unidade="unidade60">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 60
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade60', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade60', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade60', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade60', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade60', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade60', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 61-->
                <li class="item" data-unidade="unidade61">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 61
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade61', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade61', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade61', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade61', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade61', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade61', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 62-->
                <li class="item" data-unidade="unidade62">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 62
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade62', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade62', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade62', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade62', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade62', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade62', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 63-->
                <li class="item" data-unidade="unidade63">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 63
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade63', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade63', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade63', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade63', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade63', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade63', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 64-->
                <li class="item" data-unidade="unidade64">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 64
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila2', ['unidade64', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">format_size</i> Vocabulary</a>
                            <a href="{{route('apostila2', ['unidade64', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila2', ['unidade64', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila2', ['unidade64', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila2', ['unidade64', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila2', ['unidade64', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- APOSTILA GAMES AND ANIMATION -->

        <li class="item apostila-games" data-apostila="apostila5">
            <a class="click submenu">
                <i class="material-icons">flag</i> GAMES AND ANIMATION
            </a>
            <ul>
                <li class="item" data-unidade="intro5">
                    <a href="{{route('apostila5', ['intro5', 'intro'])}}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRODUCTION</a>
                </li>
                <!--UNIDADE 1-->
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 1
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade1', 'apresentacao'])}}" data-etapa="apresentacao"><i class="material-icons suave">record_voice_over</i>Apresentação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade1', 'sistema_informacao'])}}" data-etapa="sistema_informacao"><i class="material-icons suave">record_voice_over</i>Sistema de Informação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade1', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 2-->
                <li class="item" data-unidade="unidade2">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 2
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade2', 'apresentacao'])}}" data-etapa="apresentacao"><i class="material-icons suave">record_voice_over</i>Apresentação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade2', 'mercado_trabalho'])}}" data-etapa="sistema_informacao"><i class="material-icons suave">record_voice_over</i>Mercado de trabalho</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade2', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 3-->
                <li class="item" data-unidade="unidade3">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 3
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade3', 'cinema_4D'])}}" data-etapa="cinema_4D"><i class="material-icons suave">record_voice_over</i>Cinema 4D</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade3', 'navegacao'])}}" data-etapa="navegacao"><i class="material-icons suave">record_voice_over</i>Navegação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade3', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 4-->
                <li class="item" data-unidade="unidade4">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 4
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade4', 'navegacao'])}}" data-etapa="navegacao"><i class="material-icons suave">record_voice_over</i>Navegação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade4', 'criando_objetos'])}}" data-etapa="criando_objetos"><i class="material-icons suave">record_voice_over</i>Criando Objetos</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade4', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 5-->
                <li class="item" data-unidade="unidade5">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 5
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade5', 'objetos_edicao'])}}" data-etapa="objetos_edicao"><i class="material-icons suave">record_voice_over</i>Objetos e Edição</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade5', 'model_mode'])}}" data-etapa="model_mode"><i class="material-icons suave">record_voice_over</i>Model Mode</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade5', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 6-->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 6
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade6', 'modelagem_basica'])}}" data-etapa="modelagem_basica"><i class="material-icons suave">record_voice_over</i>Modelagem Básica</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade6', 'criando_objetos'])}}" data-etapa="criando_objetos"><i class="material-icons suave">record_voice_over</i>Criando objetos</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade6', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 7-->
                <li class="item" data-unidade="unidade7">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 7
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade7', 'conceitos_visuais'])}}" data-etapa="conceitos_visuais"><i class="material-icons suave">record_voice_over</i>Conceitos Visuais</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade7', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 8-->
                <li class="item" data-unidade="unidade8">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 8
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade8', 'visao_navegacao'])}}" data-etapa="objetos_edicao"><i class="material-icons suave">record_voice_over</i>Visão e Navegação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade8', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 9-->
                <li class="item" data-unidade="unidade9">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 9
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade9', 'desenho_tecnico'])}}" data-etapa="objetos_edicao"><i class="material-icons suave">record_voice_over</i>Desenho técnico</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade9', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 10-->
                <li class="item" data-unidade="unidade10">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 10
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade10', 'formas_simetricas'])}}" data-etapa="formas_simetricas"><i class="material-icons suave">record_voice_over</i>Formas Simétricas</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade10', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 11-->
                <li class="item" data-unidade="unidade11">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 11
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade11', 'animacoes'])}}" data-etapa="animacoes"><i class="material-icons suave">record_voice_over</i>Animações</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade11', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 12-->
                <li class="item" data-unidade="unidade12">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 12
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade12', 'animacao_jogos'])}}" data-etapa="animacao_jogos"><i class="material-icons suave">record_voice_over</i>Animação para jogos</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade12', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 13-->
                <li class="item" data-unidade="unidade13">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 13
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade13', 'animacao_render'])}}" data-etapa="animacao_render"><i class="material-icons suave">record_voice_over</i>Animação para render</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade13', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 14-->
                <li class="item" data-unidade="unidade14">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 14
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade14', 'animacao'])}}" data-etapa="animacao"><i class="material-icons suave">record_voice_over</i>Animação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade14', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 15-->
                <li class="item" data-unidade="unidade15">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 15
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade15', 'simulacao_materiais'])}}" data-etapa="simulacao_materiais"><i class="material-icons suave">record_voice_over</i>Simulação de materiais</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade15', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 16-->
                <li class="item" data-unidade="unidade16">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 16
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade16', 'animacao_engine'])}}" data-etapa="animacao_engine"><i class="material-icons suave">record_voice_over</i>Animação engine</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade16', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 17-->
                <li class="item" data-unidade="unidade17">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 17
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade17', 'animacao_engineReativos'])}}" data-etapa="animacao_engineReativos"><i class="material-icons suave">record_voice_over</i>Animação engine Reativos</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade17', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 18-->
                <li class="item" data-unidade="unidade18">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 18
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade18', 'renderizacao'])}}" data-etapa="renderizacao"><i class="material-icons suave">record_voice_over</i>Renderização</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade18', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 19-->
                <li class="item" data-unidade="unidade19">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 19
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade19', 'renderizacao_propriedades'])}}" data-etapa="renderizacao_propriedades"><i class="material-icons suave">record_voice_over</i>Renderização Propriedades</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade19', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 20-->
                <li class="item" data-unidade="unidade20">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 20
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade20', 'iluminacao'])}}" data-etapa="iluminacao"><i class="material-icons suave">record_voice_over</i>Iluminação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade20', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 21-->
                <li class="item" data-unidade="unidade21">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 21
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade21', 'camera_passiva'])}}" data-etapa="camera_passiva"><i class="material-icons suave">record_voice_over</i>Camera passiva</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade21', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 22-->
                <li class="item" data-unidade="unidade22">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 22
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade22', 'camera_ativa'])}}" data-etapa="camera_ativa"><i class="material-icons suave">record_voice_over</i>Camera Ativa</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade22', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 23-->
                <li class="item" data-unidade="unidade23">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 23
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade23', 'simulacao_fisica_render'])}}" data-etapa="simulacao_fisica_render"><i class="material-icons suave">record_voice_over</i>Simulação, físicas e render</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade23', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 24-->
                <li class="item" data-unidade="unidade24">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 24
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade24', 'particulas_colisao'])}}" data-etapa="particulas_colisao"><i class="material-icons suave">record_voice_over</i>Partículas e colisão</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade24', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 25-->
                <li class="item" data-unidade="unidade25">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 25
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade25', 'efeitos'])}}" data-etapa="efeitos"><i class="material-icons suave">record_voice_over</i>Efeitos - SFX effects</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade25', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 26-->
                <li class="item" data-unidade="unidade26">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 26
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade26', 'maping'])}}" data-etapa="maping"><i class="material-icons suave">record_voice_over</i>Maping - Texturização avançada</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade26', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 27-->
                <li class="item" data-unidade="unidade27">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 27
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade27', 'texturas'])}}" data-etapa="texturas"><i class="material-icons suave">record_voice_over</i>Texturas - Colorização, texturização e maping de material</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade27', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 28-->
                <li class="item" data-unidade="unidade28">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 28
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade28', 'body_ik'])}}" data-etapa="body_ik"><i class="material-icons suave">record_voice_over</i>Body ik - Mecânica para movimento de corpos</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade28', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 29-->
                <li class="item" data-unidade="unidade29">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 29
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade29', 'renderizacao'])}}" data-etapa="renderizacao"><i class="material-icons suave">record_voice_over</i>Renderização</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade29', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 30-->
                <li class="item" data-unidade="unidade30">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 30
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade30', 'jogos'])}}" data-etapa="jogos"><i class="material-icons suave">record_voice_over</i>Jogos</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade30', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 31-->
                <li class="item" data-unidade="unidade31">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 31
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade31', 'player_modeling'])}}" data-etapa="player_modeling"><i class="material-icons suave">record_voice_over</i>Player Modeling</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade31', 'player_character'])}}" data-etapa="player_character"><i class="material-icons suave">record_voice_over</i>Player ou Character</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade31', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 32-->
                <li class="item" data-unidade="unidade32">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 32
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade32', 'cenario_ambiente'])}}" data-etapa="cenario_ambiente"><i class="material-icons suave">record_voice_over</i>Cenário Ambiente</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade32', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!-- Intro Unity -->
                <li class="item" data-unidade="intro5">
                    <a href="{{route('apostila5', ['intro-unity', 'intro'])}}" data-etapa="intro-unity"><i class="material-icons suave">bookmarks</i> INTRODUCTION UNITY</a>
                </li>
                <!-- Unity Cap 01 -->
                 <!--UNIDADE 33-->
                 <li class="item" data-unidade="unidade33">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 33
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade33', 'novo_projeto'])}}" data-etapa="novo_projeto"><i class="material-icons suave">assignment</i>Criando um novo projeto 2D</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade33', 'interface'])}}" data-etapa="interface"><i class="material-icons suave">assignment</i>Interface do Unity Editor</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade33', 'scene_view'])}}" data-etapa="scene"><i class="material-icons suave">assignment</i>Scene View</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade33', 'game_view'])}}" data-etapa="game_view"><i class="material-icons suave">assignment</i>Game View</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade33', 'definindo_favoritos'])}}" data-etapa="definindo_favoritos"><i class="material-icons suave">assignment</i>Definindo Favoritos</a>
                        </li>
                    </ul>
                </li>
                 <!--UNIDADE 34-->
                 <li class="item" data-unidade="unidade34">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 34
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade34', 'hierarchy'])}}" data-etapa="hierarchy"><i class="material-icons suave">assignment</i>Hierarchy</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade34', 'inspector'])}}" data-etapa="inspector"><i class="material-icons suave">assignment</i>Inspector Window</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade34', 'asset_store'])}}" data-etapa="asset_store"><i class="material-icons suave">assignment</i>Asset Store</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade34', 'importando_asset'])}}" data-etapa="importando_asset"><i class="material-icons suave">assignment</i>Importando Asset</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 35-->
                <li class="item" data-unidade="unidade35">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 35
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade35', 'asset'])}}" data-etapa="asset"><i class="material-icons suave">assignment</i>Asset</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 36-->
                <li class="item" data-unidade="unidade36">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 36
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade36', 'game_object'])}}" data-etapa="game_object"><i class="material-icons suave">assignment</i>GameObject</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade36', 'componentes'])}}" data-etapa="componentes"><i class="material-icons suave">assignment</i>Componentes</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 37-->
                <li class="item" data-unidade="unidade37">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 37
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade37', 'importacao_asset'])}}" data-etapa="importacao_asset"><i class="material-icons suave">assignment</i>Importacao de Assets</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 38-->
                <li class="item" data-unidade="unidade38">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 38
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade38', 'scenes'])}}" data-etapa="scenes"><i class="material-icons suave">assignment</i>Scenes</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 39-->
                <li class="item" data-unidade="unidade39">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 39
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade39', 'sprite_renderer'])}}" data-etapa="sprite_renderer"><i class="material-icons suave">assignment</i>Sprite Renderer</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade39', 'sprite_creator'])}}" data-etapa="sprite_creator"><i class="material-icons suave">assignment</i>Sprite Creator</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade39', 'sprite_inspetor'])}}" data-etapa="sprite_inspetor"><i class="material-icons suave">assignment</i>Sprite Inspetor</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 40-->
                <li class="item" data-unidade="unidade40">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 40
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade40', 'asset_gameobject'])}}" data-etapa="asset_gameobject"><i class="material-icons suave">assignment</i>Asset ao GameObject</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade40', 'tilemap'])}}" data-etapa="tilemap"><i class="material-icons suave">assignment</i>Tilemap</a>
                        </li>
                    </ul>
                </li>

                 <!--UNIDADE 41-->
                 <li class="item" data-unidade="unidade41">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 41
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade41', 'tile_palette'])}}" data-etapa="tile_palette"><i class="material-icons suave">assignment</i>Tile Palette</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade41', 'tilemap_collider'])}}" data-etapa="tilemap_collider"><i class="material-icons suave">assignment</i>Tilemap Collider</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 42-->
                <li class="item" data-unidade="unidade42">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 42
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade42', 'prefab'])}}" data-etapa="prefab"><i class="material-icons suave">assignment</i>Prefab</a>
                        </li>
                    </ul>
                </li>

                 <!--UNIDADE 43-->
                 <li class="item" data-unidade="unidade43">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 43
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade43', 'game_art'])}}" data-etapa="game_art"><i class="material-icons suave">assignment</i>Game Art</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade43', 'composicao_dinamica'])}}" data-etapa="composicao_dinamica"><i class="material-icons suave">assignment</i>Composição Dinâmica</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 44-->
                <li class="item" data-unidade="unidade44">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 44
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade44', 'personagens_poses'])}}" data-etapa="personagens_poses"><i class="material-icons suave">assignment</i>Personagens e Poses</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade44', 'poses_dinamicas'])}}" data-etapa="poses_dinamicas"><i class="material-icons suave">assignment</i>Poses Dinâmicas</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 45-->
                <li class="item" data-unidade="unidade45">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 45
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila5', ['unidade45', 'linhas_movimento'])}}" data-etapa="linhas_movimento"><i class="material-icons suave">assignment</i>Linhas de Movimento</a>
                        </li>
                        <li>
                            <a href="{{route('apostila5', ['unidade45', 'velocidade_tensao_movimento'])}}" data-etapa="velocidade_tensao_movimento"><i class="material-icons suave">assignment</i>Velocidade Movimento</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- APOSTILA MASTER OF LANGUAGE -->
        <li class="item apostila-master" data-apostila="apostila3">
            <a class="click submenu">
                <i class="material-icons">flag</i> MASTER OF LANGUAGE
            </a>
            <ul>
                <!-- INTRO 1 -->
                <li class="item" data-unidade="intro3">
                    <a href="{{route('apostila3', ['intro3', 'intro'])}}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRODUCTION</a>
                </li>
                <!--UNIDADE 1-->
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 1
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade1', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade1', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade1', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade1', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade1', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade1', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 2-->
                <li class="item" data-unidade="unidade2">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 2
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade2', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade2', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade2', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade2', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade2', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade2', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 3-->
                <li class="item" data-unidade="unidade3">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 3
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade3', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade3', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade3', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade3', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade3', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade3', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 4-->
                <li class="item" data-unidade="unidade4">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 4
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade4', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade4', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade4', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade4', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade4', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade4', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 5-->
                <li class="item" data-unidade="unidade5">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 5
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade5', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade5', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade5', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade5', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade5', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade5', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 6-->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 6
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade6', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade6', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade6', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade6', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade6', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade6', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 7-->
                <li class="item" data-unidade="unidade7">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 7
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade7', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade7', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade7', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade7', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade7', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade7', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 8-->
                <li class="item" data-unidade="unidade8">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 8
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade8', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade8', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade8', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade8', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade8', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade8', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 9-->
                <li class="item" data-unidade="unidade9">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 9
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade9', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade9', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade9', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade9', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade9', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade9', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 10-->
                <li class="item" data-unidade="unidade10">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 10
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade10', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade10', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade10', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade10', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade10', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade10', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 11-->
                <li class="item" data-unidade="unidade11">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 11
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade11', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade11', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade11', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade11', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade11', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade11', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 12-->
                <li class="item" data-unidade="unidade12">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 12
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade12', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade12', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade12', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade12', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade12', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade12', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 13-->
                <li class="item" data-unidade="unidade13">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 13
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade13', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade13', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade13', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade13', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade13', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade13', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 14-->
                <li class="item" data-unidade="unidade14">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 14
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade14', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade14', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade14', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade14', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade14', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade14', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 15-->
                <li class="item" data-unidade="unidade15">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 15
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade15', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade15', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade15', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade15', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade15', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade15', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 16-->
                <li class="item" data-unidade="unidade16">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 16
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade16', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade16', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade16', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade16', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade16', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade16', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 17-->
                <li class="item" data-unidade="unidade17">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 17
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade17', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade17', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade17', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade17', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade17', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade17', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 18-->
                <li class="item" data-unidade="unidade18">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 18
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade18', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade18', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade18', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade18', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade18', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade18', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 19-->
                <li class="item" data-unidade="unidade19">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 19
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade19', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade19', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade19', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade19', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade19', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade19', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 20-->
                <li class="item" data-unidade="unidade20">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 20
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade20', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade20', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade20', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade20', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade20', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade20', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade21">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 21
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade21', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade21', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade21', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade21', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade21', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade21', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade22">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 22
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade22', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade22', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade22', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade22', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade22', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade22', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade23">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 23
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade23', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade23', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade23', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade23', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade23', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade23', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade24">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 24
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade24', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade24', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade24', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade24', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade24', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade24', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade25">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 25
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade25', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade25', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade25', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade25', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade25', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade25', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade26">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 26
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade26', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade26', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade26', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade26', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade26', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade26', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade27">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 27
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade27', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade27', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade27', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade27', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade27', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade27', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade28">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 28
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade28', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade28', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade28', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade28', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade28', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade28', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade29">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 29
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade29', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade29', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade29', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade29', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade29', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade29', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade30">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 30
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade30', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade30', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade30', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade30', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade30', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade30', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade31">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 31
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade31', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade31', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade31', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade31', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade31', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade31', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
                <li class="item" data-unidade="unidade32">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 32
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila3', ['unidade32', 'vocabulary'])}}" data-etapa="vocabulary"><i class="material-icons suave">record_voice_over</i> Vocabulary</a>
                            <a href="{{route('apostila3', ['unidade32', 'conversation'])}}" data-etapa="conversation"><i class="material-icons suave">forum</i> Conversation</a>
                            <a href="{{route('apostila3', ['unidade32', 'grammar'])}}" data-etapa="grammar"><i class="material-icons suave">edit</i> Grammar</a>
                            <a href="{{route('apostila3', ['unidade32', 'pronunciation'])}}" data-etapa="pronunciation"><i class="material-icons suave">record_voice_over</i> Pronunciation</a>
                            <a href="{{route('apostila3', ['unidade32', 'listening'])}}" data-etapa="listening"><i class="material-icons suave">hearing</i> Listening</a>
                            <a href="{{route('apostila3', ['unidade32', 'understanding'])}}" data-etapa="understanding"><i class="material-icons suave">local_library</i> Understanding</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


        <!-- APOSTILA VIDEO EDITION -->
        <li class="item apostila-video" data-apostila="apostila6">
            <a class="click submenu">
                <i class="material-icons">flag</i> VIDEO EDITION
            </a>
            <ul>
                <!-- INTRO 1 -->
                <li class="item" data-unidade="intro6">
                    <a href="{{route('apostila6', ['intro6', 'intro'])}}" data-etapa="intro"><i class="material-icons suave">bookmarks</i> INTRODUCTION</a>
                </li>

                <!--UNIDADE 1-->
                <li class="item" data-unidade="unidade1">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 1
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade1', 'apresentacao'])}}" data-etapa="apresentacao"><i class="material-icons suave">record_voice_over</i> Apresentação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade1', 'atividades'])}}" data-etapa="atividades"><i class="material-icons suave">record_voice_over</i>Atividades</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 2-->
                <li class="item" data-unidade="unidade2">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 2
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade2', 'planos_de_enquadramentos_e_movimentos_de_camera'])}}" data-etapa="planos_de_enquadramentos_e_movimentos_de_camera"><i class="material-icons suave">record_voice_over</i> Planos de Enquadramentos e Movimentos de Câmera</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade2', 'ferramentas_de_edicao'])}}" data-etapa="ferramentas_de_edicao"><i class="material-icons suave">record_voice_over</i>Ferramentas de Edição</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade2', 'ajuste_de_audio'])}}" data-etapa="ajuste_de_audio"><i class="material-icons suave">record_voice_over</i>Ajuste de audio</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 3-->
                <li class="item" data-unidade="unidade3">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 3
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade3', 'Tipos_de _Corte_Transições'])}}" data-etapa="Tipos_de _Corte_Transições"><i class="material-icons suave">record_voice_over</i>Tipos de Corte, Transições</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade3', 'Project_Manager_Adobe_Clip'])}}" data-etapa="Project_Manager_Adobe_Clip"><i class="material-icons suave">record_voice_over</i>Project Manager e Adobe Clip</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade3', 'Title_Effects_Controls_Créditos_finais'])}}" data-etapa="Title_Effects_Controls_Créditos_finais"><i class="material-icons suave">record_voice_over</i>Title, Effects Controls, Créditos finais</a>
                        </li>

                        <li>
                            <a href="{{route('apostila6', ['unidade3', 'video_musical'])}}" data-etapa="video_musical"><i class="material-icons suave">record_voice_over</i>Video Musical e Apresentação de projetos Finais</a>
                        </li>
                    </ul>
                </li>

                <!--UNIDADE 4-->
                <li class="item" data-unidade="unidade4">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 4
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade4', 'censura_de_audio'])}}" data-etapa="censura_de_audio"><i class="material-icons suave">record_voice_over</i>Censura de Áudio</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade4', 'censura_de_video'])}}" data-etapa="censura_de_video"><i class="material-icons suave">record_voice_over</i>Censura de Vídeo</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade4', 'correcao_de_cores'])}}" data-etapa="correcao_de_cores"><i class="material-icons suave">record_voice_over</i>Correção de Cores</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade4', 'aula_pratica'])}}" data-etapa="aula_pratica"><i class="material-icons suave">record_voice_over</i>Aula pratica de Edição III</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 5-->
                <li class="item" data-unidade="unidade5">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 5
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade5', 'exportacao_arquivos'])}}" data-etapa="exportacao_arquivos"><i class="material-icons suave">record_voice_over</i> Exportacao de Arquivos</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade5', 'multicamera'])}}" data-etapa="multicamera"><i class="material-icons suave">record_voice_over</i>Multicamera e Estabilização</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade5', 'sequencia_destino'])}}" data-etapa="sequencia_destino"><i class="material-icons suave">record_voice_over</i>Sequencia Multicamera</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade5', 'tempo_camera'])}}" data-etapa="tempo_camera"><i class="material-icons suave">record_voice_over</i>Speed Durat on</a>
                        </li>
                    </ul>
                </li>
                <!--UNIDADE 6-->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 6
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade6', 'tecnica_roteiro'])}}" data-etapa="tecnica_roteiro"><i class="material-icons suave">record_voice_over</i> Técnicas de Roteiro</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade6', 'chroma'])}}" data-etapa="chroma"><i class="material-icons suave">record_voice_over</i> Gravações para uso de chroma</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade6', 'chroma_key'])}}" data-etapa="chroma-key"><i class="material-icons suave">record_voice_over</i> Chroma Key</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade6', 'prova_pratica'])}}" data-etapa="prova-pratica"><i class="material-icons suave">record_voice_over</i> Prova Prática I</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade6', 'prova_pratica_dois'])}}" data-etapa="prova-pratica-dois"><i class="material-icons suave">record_voice_over</i> Prova Prática II</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade6', 'revisar_prova'])}}" data-etapa="revisar-prova"><i class="material-icons suave">record_voice_over</i> Revisar Prova</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade6', 'prova_teorica'])}}" data-etapa="prova-teorica"><i class="material-icons suave">record_voice_over</i> Prova Teórica</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 7 -->
                <li class="item" data-unidade="unidade7">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 7
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade7', 'apresentacao_affect_effects'])}}" data-etapa="apresentacao_affect_effects"><i class="material-icons suave">record_voice_over</i> Apresentação</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade7', 'animacao_basica'])}}" data-etapa="animacao_basica"><i class="material-icons suave">record_voice_over</i> Animação Básica</a>
                        </li>
                    </ul>
                </li>

                <!-- UNIDADE 8 -->
                <li class="item" data-unidade="unidade8">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 8
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade8', 'conceitos_animacao_01'])}}" data-etapa="conceitos_animacao_01"><i class="material-icons suave">record_voice_over</i>Conceitos de animação 01</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade8', 'conceitos_animacao_02'])}}" data-etapa="conceitos_animacao_02"><i class="material-icons suave">record_voice_over</i>Conceitos de animação 02</a>
                        </li>
                    </ul>
                </li>


                <!-- UNIDADE 9 -->
                <li class="item" data-unidade="unidade9">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 9
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade9', 'renderizacao'])}}" data-etapa="renderizacao"><i class="material-icons suave">record_voice_over</i>Renderização</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 10 -->
                <li class="item" data-unidade="unidade10">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 10
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade10', 'tipografia'])}}" data-etapa="tipografia"><i class="material-icons suave">record_voice_over</i>Tipografia</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 11 -->
                <li class="item" data-unidade="unidade11">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 11
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade11', 'layer_luz_camera'])}}" data-etapa="layer_luz_camera"><i class="material-icons suave">record_voice_over</i>Layer 3D, Luz e Câmera</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade11', 'configuracao_camera'])}}" data-etapa="configuracao_camera"><i class="material-icons suave">record_voice_over</i>Configurações da câmera</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade11', 'configuracao_luz'])}}" data-etapa="configuracao_luz"><i class="material-icons suave">record_voice_over</i>Configurações da luz</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 12 -->
                <li class="item" data-unidade="unidade6">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 12
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade12', 'cinema_4d'])}}" data-etapa="cinema_4d"><i class="material-icons suave">record_voice_over</i>Cinema 4D Lite</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 13 -->
                <li class="item" data-unidade="unidade13">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 13
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade13', 'particulas'])}}" data-etapa="particulas"><i class="material-icons suave">record_voice_over</i>Partículas</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 14 -->
                <li class="item" data-unidade="unidade14">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 14
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade14', 'motion_graphics_effects'])}}" data-etapa="motion_graphics_effects"><i class="material-icons suave">record_voice_over</i>Motion graphics effects e liquid motion</a>
                        </li>
                    </ul>
                </li>

                <!-- UNIDADE 15 -->
                <li class="item" data-unidade="unidade15">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 15
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade15', 'expressions'])}}" data-etapa="expressions"><i class="material-icons suave">record_voice_over</i>Expressions</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 16 -->
                <li class="item" data-unidade="unidade16">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 16
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade16', 'animacao_personagem'])}}" data-etapa="animacao_personagem"><i class="material-icons suave">record_voice_over</i>Animação de personagem</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade16', 'puppet_pin'])}}" data-etapa="puppet_pin"><i class="material-icons suave">record_voice_over</i>Puppet Pin</a>
                        </li>
                    </ul>
                </li>

                <!-- UNIDADE 17 -->
                <li class="item" data-unidade="unidade17">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 17
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade17', 'parallax'])}}" data-etapa="parallax"><i class="material-icons suave">record_voice_over</i>Parallax</a>
                        </li>
                    </ul>
                </li>
                <!-- UNIDADE 18 -->
                <li class="item" data-unidade="unidade18">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 18
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade18', 'colorizacao'])}}" data-etapa="colorizacao"><i class="material-icons suave">record_voice_over</i>Colorizacao</a>
                        </li>
                    </ul>
                </li>

                <!-- UNIDADE 18 -->
                <li class="item" data-unidade="unidade19">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 19
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade19', 'tracking'])}}" data-etapa="tracking"><i class="material-icons suave">record_voice_over</i>Tracking</a>
                        </li>
                        <li>
                            <a href="{{route('apostila6', ['unidade19', 'camera_tracking_3d'])}}" data-etapa="camera_tracking_3d"><i class="material-icons suave">record_voice_over</i>Câmera tracking 3D</a>
                        </li>

                    </ul>
                </li>

                <!-- UNIDADE 20 -->
                <li class="item" data-unidade="unidade20">
                    <a class="click submenu">
                        <i class="material-icons">flag</i> UNIT 20
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('apostila6', ['unidade20', 'rotoscopia'])}}" data-etapa="rotoscopia"><i class="material-icons suave">record_voice_over</i>Rotoscopia</a>
                        </li>
                        {{-- <li>
                            <a href="{{route('apostila6', ['unidade20', 'matte_painting'])}}" data-etapa="matte_painting"><i class="material-icons suave">record_voice_over</i>Matte painting</a>
                        </li> --}}
                    </ul>
                </li>

            </ul>
        </li>
</nav>
<!-- /DASHBOARD MENU -->
<script>
    $(document).ready(function() {
        var material = $('input[name="liberaMaterial"]').attr("data-material");
        var tipo = $('input[name="liberaMaterial"]').attr("data-tipo");
        console.log(material);
        if (tipo == 0) {
            if (material == "PLAY GO + PHOTOSHOP") {
                $(".apostila-master").addClass("menu-hidden");
                $(".apostila-dominating").addClass("menu-hidden");
                $(".apostila-games").addClass("menu-hidden");
                $(".apostila-video").addClass("menu-hidden");
            } else if (material == "CGFLY") {
                $(".apostila-master").addClass("menu-hidden");
                $(".apostila-video").addClass("menu-hidden");
            }
        } else {
            if (material == 1) {
                $(".apostila-master").addClass("menu-hidden");
                $(".apostila-dominating").addClass("menu-hidden");
                $(".apostila-games").addClass("menu-hidden");
                $(".apostila-video").addClass("menu-hidden");
            } else if (material == 2) {
                $(".apostila-master").addClass("menu-hidden");
                $(".apostila-video").addClass("menu-hidden");
            }
        }
    });
</script>