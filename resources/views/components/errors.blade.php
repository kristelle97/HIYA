@if($errors->any())
    <div class="errors">
        <div class="row justify-content-center mt-3">
            <div class="container">
                <errors :errors='@json($errors->all())'></errors>
            </div>
        </div>
    </div>
@endif