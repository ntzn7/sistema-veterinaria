@extends('layout.main')

@section('body')

<div class="alert alert-success" role="alert">
    <h2>Relatórios</h2>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                  

                <div class="box-body no-padding">

                <h4 class="text-primary"> Selecione o Relatório </h4>
                <form role="form" action="/report/show" method="post">
                    @csrf 
                    <div class="box-body">
                        <div class="radio">
                            <label class="fs-4">
                                <input type="radio" name="report_type" id="report_clients" value="clients" checked>
                                Clientes
                            </label>
                        </div>
                        <div class="radio">
                            <label class="fs-4">
                                <input type="radio" name="report_type" id="report_pets" value="pets" >
                                Pets
                            </label>
                        </div>
                        <div class="radio">
                            <label class="fs-4">
                                <input type="radio" name="report_type" id="report_procedures" value="procedures" >
                                Procedimentos
                            </label>
                        </div>
                        <div class="radio">
                            <label class="fs-4">
                                <input type="radio" name="report_type" id="report_vets" value="vets" >
                                Veterinários
                            </label>
                        </div>
                        <div class="radio">
                            <label class="fs-4">
                                <input type="radio" name="report_type" id="report_consultations" value="consultations" >
                                Atendimentos
                            </label>
                        </div>

                    </div>
                    <br>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-warning">Exibir</button>
                    </div>

                </form>
                   
                </div>
            </div>

        </div>

    </div>

</section>

@endsection