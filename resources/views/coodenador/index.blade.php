@include('layouts/header/header')
<main>
    <div id="dashboard">
        <!-- <div class="box">
            <h3>
                Dashboard
            </h3>
        </div> -->
        <div class="estatisticas">
            <?php 
                //$aa = (float) $alunosAtivos;
                $alunosAtivos = number_format((float) $alunosAtivos, 0, '.', '.');
                $alunosInativos = number_format((float) $alunosInativos, 0, '.', '.');
                $totalAlunos = $alunosAtivos + $alunosInativos;
            ?>
            <div class="estatistica box">
                <h6 class="mini-title upper cor-text">Alunos ativos</h6>
                <h2><sup class="mini-title upper">{{ round(($alunosAtivos / $totalAlunos ) * 100, 0)  }}%</sup>{{ $alunosAtivos }}</h2>
            </div>
            <div class="estatistica box">
                <h6 class="mini-title upper cor-text">Alunos inativos</h6>
                <h2><sup class="mini-title upper">{{ round(($alunosInativos / $totalAlunos ) * 100, 0)  }}%</sup>{{ $alunosInativos }}</h2>
            </div>
            <div class="estatistica box">
                <h6 class="mini-title upper cor-text">Qde. de Turmas</h6>
                <h2>{{ $turmasAtivas }}</h2>
            </div>
            <div class="estatistica box">
                <h6 class="mini-title upper cor-text">Qde. de Cursos</h6>
                <h2>{{ $cursosAtivos }}</h2>
            </div>
            <div class="estatistica box">
                <h6 class="mini-title upper cor-text">Professores ativos</h6>
                <h2>{{ $professoresAtivos }}</h2>
            </div>
        </div>
    </div>
</main>