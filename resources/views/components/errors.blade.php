@if($errors->any())
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="flex justify-center mt-3">
            <errors :errors='@json($errors->all())'></errors>
        </div>
    </div>
@endif
