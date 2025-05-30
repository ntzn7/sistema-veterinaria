@extends('layout.main')

@section('body')

<div class="alert alert-primary" role="alert">
    <h2>New Pet</h2>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">

            <br>
            <div class="box-bod no-padding">
                <form role="form" action="/pet" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="Photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">         
                        </div>
                        <div class="form-group">
                            <label for="specie">Specie</label>
                            <input type="text" class="form-control" id="specie" name="specie">         
                        </div>            
                        <div class="form-group">
                            <label for="breed">raça</label>
                            <input type="text" class="form-control" id="breed" name="breed">         
                        </div>

                        <div class="form-group">
                            <label for="color">Cor</label>
                            <input type="text" class="form-control" id="color" name="color">         
                        </div>

                        <div class="form-group">
                            <label for="height">Altura</label>
                            <input type="number" class="form-control" id="height" name="height" step="0.001" valor="0.000" placeholder="0.000">         
                        </div>

                        <div class="form-group">
                            <label for="weight">Peso</label>
                            <input type="number" class="form-control" id="weight" name="weight" step="0.001" valor="0.000" placeholder="0.000">         
                        </div>

                        <div class="form-group">
                            <label for="gender">Genero</label>  
                            <select class="form-control" name="gender" id="gender">
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>                                
                        </div>

                        <div class="form-group">
                            <label for="birth_date">Nascimento</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>         
                        </div>

                         <div class="form-group">
                            <label for="father">Pai</label>
                            <input type="text" class="form-control" id="father" name="father">         
                        </div>

                         <div class="form-group">
                            <label for="mother">Mae</label>
                            <input type="text" class="form-control" id="mother" name="mother">         
                        </div>

                        <div class="form-group">
                            <label for="observations">Observacao</label>
                            <textarea class="form-control" rows="4" name="observations" id="observations"></textarea>         
                        </div>


                    </div>
                <br>
                    <div class="box-footer">
                    <button type="submit" class="btn btn-success">Save</button>

                    </div>


                </form>

            </div>




            </div>
        </div>
    </div>

</section>



@endsection