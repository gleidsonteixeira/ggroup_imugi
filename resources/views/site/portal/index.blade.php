@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
            <!-- start countdown section -->
            <section class="p-0 bg-extra-light-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 full-screen p-0 cover-background d-none d-lg-block" style="background-image:url({{asset('assets/site/images/portal_imugi.jpg')}})"></div>
                    <div class="store_portal">
                        Baixe nosso app <br>
                        <a href="https://play.google.com/store/apps/details?id=com.developer.guilherme&hl=pt_BR" target="_blank">
                         <img src="{{asset('assets/site/images/play_store.png')}}" alt="" class="logo_store_portal">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 full-screen bg-black p-0">
                        <div class="position-relative full-screen">
                            <div class="slider-typography text-center sm-overflow-auto">
                                <div class="slider-text-middle-main">
                                    <div style="margin-top:80px;">
                                        <div class="margin-nine-bottom md-margin-50px-bottom sm-margin-15px-bottom">
                                            <img src="{{asset('assets/site/images/logo_imugi.png')}}" data-rjs="{{asset('assets/site/images/logo_imugi.png')}}" alt="Imugi"></div>
                                        <div class="mostrar bg-extra-dark-gray padding-eight-all border-radius-6 width-70 lg-width-80 sm-width-100 mx-auto sm-padding-30px-all">
                                            <form  method="post"  action="https://imugi.com.br/portaldoaluno/validate/login.php">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div id="success-project-contact-form" class="mx-0"></div>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <input type="text" name="matricula"  placeholder="Matricula" class="bg-transparent border-color-medium-dark-gray medium-input">
                                                    </div>
                                                    
                                                    <div class="col-12 col-lg-12">
                                                        <input type="password" name="senha" placeholder="Password" class="bg-transparent border-color-medium-dark-gray medium-input">
                                                    </div>
                                                    
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-success btn-rounded btn-large margin-20px-top sm-no-margin-top">Start</button>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                        </div>
                                        <div class="cadastro bg-extra-dark-gray padding-eight-all border-radius-6 width-70 lg-width-80 sm-width-100 mx-auto sm-padding-30px-all">
                                            <form  method="post" action="https://imugi.com.br/portaldoaluno/validate/validate.php">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div id="success-project-contact-form" class="mx-0"></div>
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <input type="text" name="email"  placeholder="Email" class="bg-transparent border-color-medium-dark-gray medium-input">
                                                    </div>
                                                    <div class="col-12 col-lg-12">
                                                        <input type="text" name="matricula"  placeholder="Matricula" class="bg-transparent border-color-medium-dark-gray medium-input">
                                                    </div>
                                                    
                                                    <div class="col-12 col-lg-12">
                                                        <input type="password" name="senha" placeholder="Password" class="bg-transparent border-color-medium-dark-gray medium-input">
                                                    </div>
                                                    
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-success btn-rounded btn-large margin-20px-top sm-no-margin-top">Cadastre-se</button>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                        </div>
                                        <div class="recuperar-form bg-extra-dark-gray padding-eight-all border-radius-6 width-70 lg-width-80 sm-width-100 mx-auto sm-padding-30px-all">
                                            <form  method="post" action="https://imugi.com.br/formulario/send.php">
                                                <div class="row">
                                                    <div class="col-12 col-lg-12">
                                                        <input type="text" name="email"  placeholder="Email" class="bg-transparent border-color-medium-dark-gray medium-input">
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <button type="submit" class="btn btn-success btn-rounded btn-large margin-20px-top sm-no-margin-top">Recuperar Email</button>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                        <span class="mt-4 mostrar">Não possue conta? <button class="ocultar" style="background:none; border:none; color:#fff;">Inscreva-se</button> </span>
                                        <br>
                                        <span class="mt-4 recuperar">Esqueceu a senha? <button class="ocultar" style="background:none; border:none; color:#fff;">Recuperar</button> </span>
                                        <span class="mt-4 logar" >Já possue conta? <button class="login" style="background:none; border:none; color:#fff;">logar</button> </span>
                                    </div>
                                </div>
                                <div class="store_portal mobile" style="display:none;">
                                    Baixe nosso app <br>
                                    <a href="https://play.google.com/store/apps/details?id=com.developer.guilherme&hl=pt_BR" target="_blank">
                                    <img src="{{asset('assets/site/images/play_store.png')}}" alt="" class="logo_store_portal_mobile">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 @endsection