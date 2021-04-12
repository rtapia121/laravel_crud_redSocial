

<div class="post-topbar row mb-4">
    <div class="col-md-2">
        <img class="user-picy" src="{{ asset('images/resources/user-pic.png') }}" alt="">
    </div>
    <div class="col-md-8">
        <input class="form-control" type="text" name="comentario" value="{{$data['comment']->comentario ?? ''}}" >
    </div>
    <div class="col-md-2">
        <input class="btn btn-danger" type="submit" value="{{ $data['action'] == 1 ? 'Enviar': 'Guardar' }}">
    </div>
</div>
