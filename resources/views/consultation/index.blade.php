@extends('layout.main')

@section('body')

<div class="alert alert-success" role="alert">
    <h2>Consultas</h2>
</div>
    <section class="content">
        <div class="row">
            <div class="cold-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <a href="/consultation/new" class="btn btn-success">Nova Consulta</a>
                    </div>
                        <br>
                        
                        <div class="box-body no-padding">
                            <table id="tb-default" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Date</th>
                                        <th>Pet</th>
                                        <th>Cliente</th>
                                        <th>Veterinario</th>
                                        <th>Total a Pagar(R$)</th>
                                        <th style="width: 250px">&nbsp;</th>
                                        
                                    </tr>

                                </thead> 
                                <tbody>
                                    @foreach($consultations as $consultation)

                                    <tr>
                                        <td>id</td>
                                        <td>data</td>
                                        <td>Pet</td>
                                        <td>clintee</td>
                                        <td>veterinario</td>
                                        <td>total</td>

                                        <td>
                                            <a href="/consultation/edit/{{$consultation->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="/consultation/delete/{{$consultation->id}}" onclick="return confim('do you want to delete this record id = {{$consultation->id}} ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash">Delete</i></a>
                                        </td>
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