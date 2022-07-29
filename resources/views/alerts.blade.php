@if (session()->has('Success'))
    <div class="alert alert-success">
        {{ session()->get('Success')}}
    </div>
@endif

@if (session()->has('Fail'))
<div class="alert alert-danger">
    {{ session()->get('Fail')}}
</div>
@endif
