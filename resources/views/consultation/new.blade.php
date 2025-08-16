@extends('layout.main')

@section('body')

<script>

// pet

function close_modal_pets(){
    $('#modalPets').modal('hide');    
    }

 function add_pet(element) {



document.getElementById("id_pet").value = document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
document.getElementById("pet_name").value = document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;
document.getElementById("client").value =  document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML;
document.getElementById("specie").value =  document.getElementById("grid_pet").rows[element.parentNode.parentNode.rowIndex].cells[3].innerHTML;

close_modal_pets();

}




// veterinários
function close_modal_vets(){
    $('#modalVets').modal('hide');    
    }

function add_vet(element) {


document.getElementById("id_vet").value = document.getElementById("grid_vet").rows[element.parentNode.parentNode.rowIndex].cells[0].innerHTML;
document.getElementById("vet_name").value = document.getElementById("grid_vet").rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML;

close_modal_vets();

}

// procedimentos

function close_modal_procedures(){
    $('#modalProcedures').modal('hide');    
    }
    
</script>
    
</script>

<!--- Modal PET --->

<div class="modal fade " id="modalPets" tabindex="-1" aria-labelledby="modalPetsLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalPetsLabel">Pets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <table class="table table-bordered table-striped table-hover" id="grid_pet">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Dono</th>
                <th>Specie</th>
                <th>gender</th>
                
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody >
              
              @foreach($pets as $pet )
              <tr>
                <td>{{$pet->id}}</td>
                <td>{{$pet->name}}</td>
                <td>{{$pet->client->name}}</td>
                <td>{{$pet->specie}}</td>
                <td>{{$pet->gender}}</td>
                



                <td>
                  <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top"   onclick="add_pet(this)">
                    <i class="fa fa-plus"></i> Select
                  </button>
              
                  
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--- FIM - Modal PET --->
<!-- Modal Veterinário -->
<div class="modal fade" id="modalVets" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalVetsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalVetsLabel">Veterinários</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table id="grid_vet" class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th style="width: 140px">&nbsp;</th>  
                                
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($vets as $vet)

                            <tr>
                               <td>{{$vet->id}}</td>
                               <td>{{$vet->name}}</td>
                              
                               <td>
                               <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top"   onclick="add_vet(this)">
                                    <i class="fa fa-plus"></i> Select
                                </button>
                                
                               </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- FIM -  Modal Veterinário -->

<!-- Modal Procedimentos -->
<div class="modal fade " id="modalProcedures" tabindex="-1" aria-labelledby="modalProceduresLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalProceduresLabel">Procedimentos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <table class="table table-bordered table-striped table-hover" id="grid_procedure">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nome</th>
                <th>Preço</th>
                
                
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody >
              
              @foreach($procedures as $procedure )
              <tr>
                <td>{{$procedure->id}}</td>
                <td>{{$procedure->name}}</td>
                <td>{{$procedure->price}}</td>
                

                <td>
                  <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top"   onclick="add_procedures_consultation(this)">
                    <i class="fa fa-plus"></i> Select
                  </button>
              
                  
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--- FIM- Modal Procedimentos -->


<div class="alert alert-primary" role="alert">
    <h2>Nova Constulta</h2>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">

               <br>
               <div class="box-body no-padding">
                <form role="form" action="/consultation" method="post" onsubmit="return check_fields()">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="consultation_date">Date</label>
                            <input type="date" class="form-control" id="consultation_date" name="consultation_date" required
                             oninvalid="this.setCustomValidity('Campo requerido')"
                             onchange="try{setCustomValidity('')}catch(e){}">
                        </div>

                        <h3 class="text-success">Veterinário:</h3>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVets">
                        Selecione o Veterinário
                        </button>

                        <div class="form-group">  
                            <input hidden class="form-control" id="id_vet" name="id_vet" readonly >
                        </div>

                        <div class="form-group">
                            <label for="vet_name">Nome:</label>
                            <input type="text" class="form-control" id="vet_name" name="vet_name" required readonly >
                        </div>

                        <h3 class="text-danger">PET:</h3>

                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPets">
                        Selecione o Pet
                        </button>

                        <div class="form-group " >
                            <input hidden   class="form-control" id="id_pet" name="id_pet"  readonly >
                        </div>

                        <div class="form-group">
                            <label for="pet_name">Nome:</label>
                            <input type="text" class="form-control" id="pet_name" name="pet_name"  readonly>
                        </div>

                        <div class="form-group">
                            <label for="specie">Especie:</label>
                            <input type="text" class="form-control" id="specie" name="specie" readonly  >
                        </div>

                        <div class="form-group">
                            <label for="client">Cliente:</label>
                          <input type="text" class="form-control" id="client" name="client" readonly  >
                        </div> 

                        <h3 class="text-success">Procedimentos</h3>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPets">
                        Selecione o Procedimento
                        </button>

                        <table id="grid" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                      <th>#</th>
                                      <th>Nome</th>
                                      <th>Preço(R$)</th>
                                      <th>Ações</th>
                                </tr>      
                            </thead>
                        </table>


                    </div>
                  <br>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success">Salvar</button>

                  </div>

                </form>


               </div>



            </div>
        </div>
    </div>

</section>

@endsection