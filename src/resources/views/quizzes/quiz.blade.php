@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cuestionario</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/answer') }}">
                        @csrf

                      <div class="form-check" style="margin-bottom: 25px">
                          <label for="first-question">¿Qué te gustaría que agregáramos al informe?</label>
                          <textarea name="comments" class="form-control" rows="5" id="third-question"></textarea>
                      </div>

                      <div class="form-group" style="margin-bottom: 25px; margin-left: 20px">
                        <label for="exampleInputPassword1">¿La información es correcta?</label>
                        <br />
                        <input type="radio" name="correct" value="Si" checked="checked"> Si<br>
                        <input type="radio" name="correct" value="No"> No<br>
                        <input type="radio" name="correct" value="MasOMenos"> Más o Menos}
                      </div>

                      <div class="form-group" style="margin-bottom: 25px; margin-left: 20px">
                        <label for="third-question">¿Del 1 al 5, es rápido el sitio?</label>
                        <input name="speed" type="range" class="custom-range" min="1" max="5" step="1" id="third-question">
                      </div>

                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
