@extends('layouts.admin')

@section('title', 'Registrar usuarios')
@section('content-header', ' Registrar usuarios')

@section('content')

    <div class="card">
        <div class="card-body">

            <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group col-lg-8 col-8">
                    <label for="first_name">Nombre</label>
                    <input type="text" required name="first_name"
                        class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Nombre"
                        value="{{ old('first_name') }}">
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-lg-8 col-8">
                    <label for="last_name">Apellido</label>
                    <input type="text" required name="last_name"
                        class="form-control @error('last_name') is-invalid @enderror" id="last_name" placeholder="Apellido"
                        value="{{ old('last_name') }}">
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-lg-8 col-8">
                    <label for="Telefono">Telefono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="telefono"
                        value="{{ old('telefono') }}">
                </div>

                <div class="form-group col-lg-8 col-8">
                    <label for="telefono_consultorio">Telefono Consultorio</label>
                    <input type="text" name="telefono_consultorio" class="form-control" id="telefono_consultorio	"
                        placeholder="Telefono Consultorio" value="{{ old('telefono_consultorio') }}">
                </div>
                <div class="card border-primary col-lg-8 col-8">
                    <div class="card-header text-white bg-primary mb-3">Direccion</div>
                    <div class="form-group">
                        <label for="calle">Calle</label>
                        <input type="text" name="calle" class="form-control" id="calle" placeholder="Calle"
                            value="{{ old('calle') }}">
                    </div>

                    <div class="form-group">
                        <label for="numero">numero</label>
                        <input type="number" name="numero" class="form-control" id="numero" placeholder="numero"
                            value="{{ old('numero') }}">
                    </div>

                    <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" name="departamento" class="form-control" id="departamento"
                            placeholder="Departamento" value="{{ old('departamento') }}">
                    </div>

                    <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="Ciudad"
                            value="{{ old('ciudad') }}">
                    </div>

                    <div class="form-group">
                        <label for="pais">Pais</label>
                        <input type="text" name="pais" class="form-control" id="pais" placeholder="Pais"
                            value="{{ old('pais') }}">
                    </div>

                    <div class="form-group">
                        <label for="codigo_postal">Codigo Postal</label>
                        <input type="text" name="codigo_postal" class="form-control" id="codigo_postal"
                            placeholder="Codigo Postal" value="{{ old('codigo_postal') }}">
                    </div>
                </div>

                <div class="form-group col-lg-8 col-8">
                    <label for="email">Email</label>
                    <input required type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-lg-8 col-8">
                    <label for="email">Clave</label>
                    <input required type="text" name="password"
                        class="form-control @error('password') is-invalid @enderror" id="password"
                        placeholder="password" value="{{ old('password') }}">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="card border-success col-lg-8 col-8">
                    <div class="card-header text-white bg-success mb-3">Seleccione un Rol</div>
                    <div class="card-body text-success">
                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <select name="rol" class="form-select col-lg-8 col-8  @error('rol') is-invalid @enderror"
                                id="estado">
                                <option style="background-color: rgb(157, 240, 208);" value="COMUN"
                                    {{ old('rol') === 'COMUN' ? 'selected' : '' }}>COMUN</option>
                                <option style="background-color: rgb(245, 114, 105);" value="ADMINISTRADOR"
                                    {{ old('rol') === 'ADMINISTRADOR' ? 'selected' : '' }}>ADMINISTRADOR</option>

                            </select>
                            @error('rol')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <button class="btn btn-info btn-block btn-lg col-lg-8 col-8" type="submit">Registrar Usuario</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
