@extends('pruebabot')


@section ('title', 'navegacion')

@section ('content')

<form>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <input name="name" type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="col-md-6 mb-3">
            <input name="email" type="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-md-8 mb-3">
            <input name="subject" type="text" class="form-control" placeholder="Asunto...">
        </div>
        <div class="col-md-10 mb-3">
            <textarea class="form-control" name="content" placeholder="Mensaje"></textarea>
        </div>
    </div>
    <div class="col-md-12 mb-3">
        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
    </div>
</form>




@endsection ()