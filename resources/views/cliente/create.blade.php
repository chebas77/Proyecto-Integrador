<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" 
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del cliente">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Teléfono</label>
          <input type="text" 
          class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Correo</label>
          <input type="email" 
          class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>
