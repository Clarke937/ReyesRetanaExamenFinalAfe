
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-4" id="manage-products">
        <h1 class="my-4"> Vendedores </h1>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Dui</th>
                <th>Direccion</th>
                <th>Nit</th>
                <th>Id Usuario</th>
                <th width="200px">Action</th>
            </tr>
            <tr v-for="seller in sellers">
                <td>@{{ seller.id}}</td>
                <td>@{{ seller.dui}}</td>
                <td>@{{ seller.direccion }}</td>
                <td>@{{ seller.nit }}</td>
                <td>@{{ seller.user_id }}</td>
                <td>    
                  <button class="btn btn-primary" @click.prevent="editItem(socio)">Editar</button>
                  <button class="btn btn-danger" @click.prevent="deleteItem(socio)">Borrar</button>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>

<script>

    Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");

    new Vue({

        el: '#manage-products',

        data: {
            sellers: [],
            newItem : {'id':'','nombre':'','descripcion':'','precio_unitario':'','existencia':'','garantia':'','seller_id':''},
            fillItem : {'id':'','nombre':'','descripcion':'','precio_unitario':'','existencia':'','garantia':'','seller_id':''},
        },

        computed: {
            
        },

        ready : function(){
            this.getVueItems();
        },

        methods : {

            getVueItems: function(){
                this.$http.get('/vuesellers').then((response) => {
                    console.log(response.json().data);
                    this.$set('sellers', response.json().data);
                });
            }, 
        }
    });


</script>