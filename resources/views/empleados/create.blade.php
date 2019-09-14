@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Empleados') }}</div>

                <div class="card-body">
                <form action="{{ url('/empleados') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    

                  <div class="row">

                    <div class="col-md-6 mb-3">
                      <label for="name">Nombre</label>
                      <input type="text" name="nombre" class="form-control" id="name" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Ingrese el nombres.
                      </div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="lastName">Apellido</label>
                      <input type="text" name="apellido" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Ingresar apellidos.
                      </div>
                    </div>

                  </div>

                  <div class="mb-3">
                    <label for="email">Correo Electronico<span class="text-muted">(Optional)</span></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" value="">
                      <div class="invalid-feedback" style="width: 100%;">
                        Por favor ingrese un correo valido.
                      </div>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="phone">Telefono <span class="text-muted">(Optional)</span></label>
                    <input type="tel" name="telefono" class="form-control" id="phone" placeholder="" value="" >
                    <div class="invalid-feedback">
                      Ingresar un numero telefonico valido.
                    </div>
                  </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="col">Colonia</label>
                        <input name="colonia" type="text" class="form-control" id="col" placeholder="Ingrese nombre Completo" required value="">
                        <div class="invalid-feedback">
                          Favor ingresar Colonia donde recide.
                        </div>
                      </div>

                    <div class="col-md-6 mb-3">
                      <label for="depto">Departamento</label>
                      <input name="departamento" type="text" class="form-control" id="col" placeholder="Ingrese nombre Completo" required value="">
                      <div class="invalid-feedback">
                        Please select a valid Departamento.
                      </div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="city">Ciudad</label>
                      <input name="ciudad" type="text" class="form-control" id="city" placeholder="Ingrese nombre Completo" required value="" >
                      <div class="invalid-feedback">
                        Ingrese nombre completo de la ciudad.
                      </div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="calle">Calle</label>
                      <input name="calle" type="text" class="form-control" id="calle" placeholder="" required value="" >
                      <div class="invalid-feedback">
                        Calle donde reside.
                      </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="foto">Foto</label><br>
                    <input type="file" name="foto" id="foto" class="form-control btn-sm btn-secondary" value="">
                    <div class="invalid-feedback">
                        Su foto Aqui. 
                    </div>
                </div>

                <div class="coffset-md-5">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar') }}
                    </button>

                    <button type="submit" class="btn btn-outline-danger">
                        {{ __('Cancelar') }}
                    </button>
                </div>
            </div>

            </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
