<template>
    <div class="card">
        <div class="card-body">
          This is some text within a card body.
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Siglas</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="cicle in cicles">
            <th scope="row">{{ cicle.sigles}}</th>
            <td>{{ cicle.nom}}</td>
            <td>{{ cicle.descripcio}}</td>
            <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu" :checked="cicle.actiu">
                        <label class="custom-control-label" for="actiu"></label>
                    </div>
            </td>
            <td>
                <!--form action="{{ action([App\Http\Controllers\CicleController::class, 'destroy'] , ['cicle'=> $cicle->id])}}" method="POST" class="float-right ml-1"-->
                    <!-- @csrf -->
                    <!-- @method('DELETE') -->
                    <button @click="confirmDelete()" type="submit" class="btn btn-sm btn-danger">
                        <i class="fa-trash fa" aria-hidden="true">Esborrar</i>
                    </button>
                <!--/form-->
                <!--form method="GET" action="{{ action([App\Http\Controllers\CicleController::class, 'edit'] , ['cicle'=>$cicle->id])}}" class="float-right"-->
                    <!-- @csrf -->
                    <!-- @method('PUT') -->
                    <button type="submit" class="btn btn-sm btn-secondary"><i class="fa-edit fa" aria-hidden="true">Editar</i></button>
                <!--/form-->
            </td>
          </tr>

        </tbody>
      </table>


      <div class="modal" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Esborrar cicle</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Estàs segur d'esborrar el cicle </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
              <button type="button" class="btn btn-primary">Acceptar</button>
            </div>
          </div>
        </div>
      </div>
</template>
<script>
export default {
    data() {
        return {
            cicles: [],
            myModal:{},
        }
    },
    methods:{
        confirmDelete(){
            this.myModal = new bootstrap.Modal('#deleteModal')
            this.myModal.show()

        }
    },
    created() {
        const me=this
        axios
        .get('/mzerosetzerovuitzerocinc/public/api/cicle')
        .then(response =>{
            console.log(response)
            me.cicles=response.data
        })
    },

}
</script>
<style>

</style>
