@if(session()->has('flash_notification'))
    @php
        $flash = session('flash_notification')->toArray();
    @endphp

    <div class="flash-messages">
        <div class="row justify-content-center mt-3">
            <flash :messages='@json($flash)'></flash>
        </div>
    </div>
@endif