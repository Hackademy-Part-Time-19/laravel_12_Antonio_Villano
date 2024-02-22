@if(session()->has('delete'))
<div class="alert alert-danger">
    <p>{{session('delete')}}</p>
</div>
@endif