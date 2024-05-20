<div class="modal-content">
    <form id="formUpdate" action="{{$user->id ? route('user.update', $categoria) : route('user.store')}}" method = "post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Nuevo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
        </div>
        <div class="modal-body">
            @if($user->id)
            @method('PUT')
            <input type="hidden" name = "id" value = "{{$user->id}}">
            @endif
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name = "nombre" class="form-control" id="nombre" placeholder="Ingrese nombre" value="{{$user->nombre}}">
                <div id="msg_nombre"></div>
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton"></span></button>
        </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>