@extends('plantilla')
@section('contenido')
    <br>
    <br>
    <br>
    <div class="card mx-auto" style="width: 40%; ">
        <div class="card-header">
            Ingresar Superviviente
        </div>
        <div class="card-body">
            <form action="{{route('supervivientes.store')}}" method="POST">
              @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="nombre" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="edad" class="col-sm-2 col-form-label" >Edad</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="edad" name="edad" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Genero</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="sexo">
                            <option selected>Seleccionar</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>

                        </select>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="button" class="btn btn-success" id="btn" value="geolocalizar">
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="lat" class="col-sm-2 col-form-label">Latitud</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lat" name="lat">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="long" class="col-sm-2 col-form-label">Longitud</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="long" name="long">
                    </div>
                </div>
                <input type="hidden" id="presc" name="presc">
                

                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Articulo</label>
                  <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="articulo">
                          <option selected>Seleccionar</option>
                          <option value="Comida">Comida</option>
                          <option value="Medicina">Medicina</option>
                          <option value="Municiones">Municiones</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3 row">
                <label for="long" class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="cantidad" name="cantidad">
                </div>
            </div><div class="mb-3 row">
              <label for="long" class="col-sm-2 col-form-label">Puntos</label>
              <div class="col-sm-10">
                  <input type="number" class="form-control" id="puntos" name="puntos">
              </div>
          </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
