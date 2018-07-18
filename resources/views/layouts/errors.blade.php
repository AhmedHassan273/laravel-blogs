

@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    <ul style="list-style: none;">
        <li> {{ $error }} </li>
    </ul>
</div>
@endforeach