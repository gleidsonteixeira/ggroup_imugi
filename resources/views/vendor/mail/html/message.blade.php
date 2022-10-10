@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
                {{ __('Recuperação de Senha Imugi Tecnologia e Educação'  ) }}
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ __('Imugi Tecnologia e Educação'  ) }}. @lang('Todos os direitos reservados.')
        @endcomponent
    @endslot
@endcomponent
