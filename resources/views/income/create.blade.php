@extends('layouts.app')

@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="container col-md-5">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{Route('income.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="husbandIncome" class="label">Ingresos Esposo</label>
                        <input 
                        type="number" 
                        name="husbandIncome" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="Aquí debes ingresar la aportación económica del esposo al hogar"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <label for="wifeIncome" class="label">Ingresos Esposa</label>
                        <input 
                        type="number" 
                        name="wifeIncome" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="Aquí debes ingresar la aportación económica de la esposa al hogar"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <label for="businessIncome" class="label">Ingresos por Negocio</label>
                        <input 
                        type="number" 
                        name="businessIncome" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="Aquí debes ingresar los ingresos que tengas por negocios del hogar"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <label for="otherIncome" class="label">Otros Ingresos</label>
                        <input 
                        type="number" 
                        name="otherIncome" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="Si tienes otros ingresos, debes colocar aquí la sumatoria de ellos"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <label for="donations" class="label">Donaciones</label>
                        <input 
                        type="number" 
                        name="donations" 
                        class="form-control tourtipguide"
                        placeholder="$----.--"
                        data-ttg-title="¿Haces donaciones?"
                        data-ttg-content="Debes colocar el monto de ellas, recuerda que es mejor dar que recibir. Si no haces donaciones, ingresa 0."
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999">
                    </div>

                    <div class="form-group">
                        <button
                        class="tourtipguide btn btn-default btn-app"
                        type="submit"
                        data-ttg-title="¡Listo! Click en el botón para hacer el registro"
                        data-ttg-fa="fa fa-money"
                        data-ttg-color="#069999"
                        >Registrar Ingresos</button>
                    </div>
                </form>
            </div>
            

        </div>
        
    </div>

    <script>
    

    $(document).ready(function($) {

        $.ttgTour({
            next: "SIG",
           prev: "PREV",
           finish: "FINAL" 
        });

    });

    </script>
@endsection