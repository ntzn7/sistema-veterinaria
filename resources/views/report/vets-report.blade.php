@extends('layout.main')

@section('body')

<div class="alert alert-success" role="alert">
    <h2>Relatório de Veterinarios</h2>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
              
                <br>

                <div class="box-body no-padding">
                    <table  class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Endereço</th>
                                <th>Estado</th>  
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($vets as $vet)

                            <tr>
                               <td>{{$vet->id}}</td>
                               <td>{{$vet->name}}</td>
                               <td>{{$vet->email}}</td>
                               <td>{{$vet->cell_phone}}</td>
                               <td>{{$vet->address}}</td>
                               <td>{{$vet->state}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</section>

@endsection