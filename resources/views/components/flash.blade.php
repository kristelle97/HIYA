@if(session()->has('flash_notification'))
    @php
        $flash = session('flash_notification')->toArray();
    @endphp

    <flash :messages='@json($flash)'></flash>
@endif
