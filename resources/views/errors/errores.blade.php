@if(!$errors->isEmpty())
    <div class="alert alert-danger">
        <p><strong>Por favor corrige los siguientes errores:</strong></p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif