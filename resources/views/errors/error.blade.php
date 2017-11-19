@if (! $errors->isEmpty())
        <p><strong > Oops!</strong> por favor corrige los errores</p>
        <ul>
            @foreach($errors->all() as $error)
                <li class="red lighten-1">{{ $error }}</li>
            @endforeach
        </ul>

@endif