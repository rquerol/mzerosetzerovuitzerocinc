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
                <form action="{{ action([App\Http\Controllers\CicleController::class, 'destroy'] , ['cicle'=> $cicle->id])}}" method="POST" class="float-right ml-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa-trash fa" aria-hidden="true">Esborrar</i></button>
                </form>
                <form method="GET" action="{{ action([App\Http\Controllers\CicleController::class, 'edit'] , ['cicle'=>$cicle->id])}}" class="float-right">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-sm btn-secondary"><i class="fa-edit fa" aria-hidden="true">Editar</i></button>
                </form>
            </td>
          </tr>

        </tbody>
      </table>
</template>
<script>
export default {
    data() {
        return {
            cicles:[],
        }
    },
    created() {
        axios.get('')
    },

}
</script>
<style>

</style>
