@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
            <!-- start countdown section -->
            <section class="p-0 bg-extra-light-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 full-screen p-0 cover-background d-none d-lg-block" style="background-image:url({{asset('assets/site/images/portal_imugi.jpg')}});"></div>
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
                                        <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <h6 class="text-white"> Recuperar Senha </h6>
                        <input type="hidden" name="token" value="{{ $token }}">
                    
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email para recuperar">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                placeholder="Nova Senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control bg-transparent text-white border-color-medium-dark-gray medium-input" name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirmar Senha">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-rounded btn-large margin-20px-top sm-no-margin-top">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                                        </div>
                                        <br>
                                        <span class="mt-4 mostrar">Não possue conta? <a href="{{url('register')}}" class="ocultar" style="background:none; border:none; color:#fff;">Inscreva-se</a> </span>
                                      </div>
                                </div>
                                <div class="store_portal mobile hidden">
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