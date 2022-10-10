
<?php $__env->startSection('titulo','Unidades'); ?>
<?php $__env->startSection('conteudo'); ?>
<?php echo $__env->make('layouts.site.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>

    <section id="unidades-banner">
        <img src="<?php echo e(asset('assets/site/images/banner-unidades.png')); ?>" alt="Bem-vindo" />
        <div class="content">
            <img src="<?php echo e(asset('assets/site/images/logo-unidades.png')); ?>" alt="Unidades" />
            <h2 class="upper">Nossas <br><b>Unidades</b></h2>
        </div>
    </section>

    <section id="unidades-fotos">
        <div class="content">
            <div class="click prev">
                <img src="<?php echo e(asset('assets/site/images/prev.png')); ?>" alt="Anterior" class="suave" />
            </div>
            <div class="carrosel">
                <ul>
                    <li>
                        <img src="<?php echo e(asset('assets/site/images/bandeira1.png')); ?>" alt="Aluno" />
                    </li>
                    <li>
                        <img src="<?php echo e(asset('assets/site/images/bandeira1.png')); ?>" alt="Aluno" />
                    </li>
                    <li>
                        <img src="<?php echo e(asset('assets/site/images/bandeira1.png')); ?>" alt="Aluno" />
                    </li>
                    <li>
                        <img src="<?php echo e(asset('assets/site/images/bandeira1.png')); ?>" alt="Aluno" />
                    </li>
                    <li>
                        <img src="<?php echo e(asset('assets/site/images/bandeira1.png')); ?>" alt="Aluno" />
                    </li>
                    <li>
                        <img src="<?php echo e(asset('assets/site/images/bandeira1.png')); ?>" alt="Aluno" />
                    </li>
                </ul>
            </div>
            <div class="click next">
                <img src="<?php echo e(asset('assets/site/images/next.png')); ?>" alt="Próximo" class="suave" />
            </div>
        </div>
        <h2 class="upper">Estude na imugi mais próxima de você</h2>
        <form action="formUnidade">
            <input type="text">
            <button type="submit"><i class="material-icons suave click" translate="no">search</i></button>
        </form>
        <ul class="resultados">
            <li>
                <i class="material-icons" translate="no">location_on</i>
                <h3>Manaus / AM</h3>
                <p>Av getulio vargas 204 - centro</p>
                <p>(00) 00000-0000</p>
            </li>
            <li>
                <i class="material-icons" translate="no">location_on</i>
                <h3>MEu Belem / AM</h3>
                <p>Av getulio vargas 204 - centro</p>
                <p>(00) 00000-0000</p>
            </li>
            <li>
                <i class="material-icons" translate="no">location_on</i>
                <h3>Manaus / AM</h3>
                <p>Av getulio vargas 204 - centro</p>
                <p>(00) 00000-0000</p>
            </li>
            <li>
                <i class="material-icons" translate="no">location_on</i>
                <h3>Manaus / AM</h3>
                <p>Av getulio vargas 204 - centro</p>
                <p>(00) 00000-0000</p>
            </li>
            <li>
                <i class="material-icons" translate="no">location_on</i>
                <h3>Manaus / AM</h3>
                <p>Av getulio vargas 204 - centro</p>
                <p>(00) 00000-0000</p>
            </li>
            <li>
                <i class="material-icons" translate="no">location_on</i>
                <h3>Manaus / AM</h3>
                <p>Av getulio vargas 204 - centro</p>
                <p>(00) 00000-0000</p>
            </li>
            <li>
                <i class="material-icons" translate="no">location_on</i>
                <h3>Manaus / AM</h3>
                <p>Av getulio vargas 204 - centro</p>
                <p>(00) 00000-0000</p>
            </li>
        </ul>
    </section>

    <section id="unidades-contato">
        <h2>Alguma Dúvida? <span class="upper">deixe sua mensagem.</span></h2>
        <form id="formContato">
            <input type="text" name="contato_nome" placeholder="Nome" required>
            <input type="text" name="contato_telefone" placeholder="Telefone" required>
            <select name="contato_estado">
                <option value="#">Estado</option>
                <option value="Anápolis">Anápolis / GO</option>
                <option value="Arapiraca">Arapiraca / AL</option>
                <option value="Belém">Belém/ PA</option>
                <option value="Fortaleza Centro"> Fortaleza / CE </option>
                <option value="Lauro de Freitas"> Lauro de Freitas / BA</option>
                <option value="Macéio">Macéio / AL</option>
                <option value="Manaus">Manaus / AM </option>
                <option value="Natal">Natal / RN </option>
                <option value="Fortaleza Messejana">Messejana / CE</option>
                <option value="São Luís">São Luís / MA</option>
                <option value="Sorocaba">Sorocaba / SP</option>
                <option value="Teresina">Teresina / PI</option>
                <option value="Vitória">Vitória / ES</option>
            </select>
            <textarea name="contato_mensagem" cols="30" rows="10" placeholder="Escreva sobre sua dúvida"></textarea>
            <div class="foot">
                <button type="submit" class="click suave">Enviar</button>
                <div class="wtt">
                    <span>Ou fale com a gente via</span>
                    <div class="tag">
                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=554184608944" target="_blank">
                            <i class="fab fa-whatsapp" translate="no"></i><div><span>Atendimento via</span><b>Whatsapp</b>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </section>

    

</main>

<script>
    //INICIALIZADOR DAS ANIMAÇÕES
    AOS.init();

    let carroselItems = $("#unidades-fotos .content li").length;
    let carroselSizeItem = $("#unidades-fotos .content li").width();
    let window_width = $(window).width();
    if(window_width > 400){
        $("#unidades-fotos .content ul").width(carroselSizeItem * carroselItems);
        $("#unidades-fotos .carrosel").width(carroselSizeItem * 4);
    }else{
        $("#unidades-fotos .content ul").width(200 * carroselItems);
        $("#unidades-fotos .carrosel").width(200);
    }
    $("#unidades-fotos .next").click(function(e){
        e.stopImmediatePropagation();
        var left = $("#unidades-fotos .carrosel").scrollLeft();
        if(window_width > 400){
            $("#unidades-fotos .carrosel").animate({
                scrollLeft: (left + carroselSizeItem),
            }, 300);
        }else{
            $("#unidades-fotos .carrosel").animate({
                scrollLeft: (left + 200),
            }, 300);
        }
    });
    $("#unidades-fotos .prev").click(function(e){
        e.stopImmediatePropagation();
        var left = $("#unidades-fotos .carrosel").scrollLeft();
        if(window_width > 400){
            $("#unidades-fotos .carrosel").animate({
                scrollLeft: (left - carroselSizeItem),
            }, 300);
        }else{
            $("#unidades-fotos .carrosel").animate({
                scrollLeft: (left - 200),
            }, 300);
        }
    });

    $("#unidades-fotos input").keyup(function(){
        let unidade = $(this).val().toLocaleLowerCase();
        $("#unidades-fotos .resultados li").each(function(){
            let titulo = $(this).find("h3").text().toLocaleLowerCase();
            let position = titulo.search(unidade);
            if(position < 0){
                $(this).css({"display":"none"});
            }else{
                $(this).css({"display":"block"});
            }
        });
    });

</script>

<?php echo $__env->make('layouts.site.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imugi2\resources\views/site/unidades.blade.php ENDPATH**/ ?>