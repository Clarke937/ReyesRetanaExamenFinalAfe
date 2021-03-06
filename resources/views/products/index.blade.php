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
        <h1 class="my-4"> Productos </h1>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio Unitario</th>
                <th>Existencia</th>
                <th>Garantia</th>
                <th>Seller Id</th>
                <th width="200px">Action</th>
            </tr>
            <tr v-for="product in products">
                <td>@{{ product.id }}</td>
                <td>@{{ product.nombre }}</td>
                <td>@{{ product.descripcion }}</td>
                <td>@{{ product.precio_unitario }}</td>
                <td>@{{ product.existencia }}</td>
                <td>@{{ product.garantia }}</td>
                <td>@{{ product.seller_id }}</td>
                <td>    
                  <button class="btn btn-primary" @click.prevent="editItem(socio)">Editar</button>
                  <button class="btn btn-danger" @click.prevent="deleteItem(socio)">Borrar</button>
                </td>
            </tr>
        </table>

        <a class="btn btn-success" href="#">Crear</a>
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
            products: [],
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
                this.$http.get('/vueproducts').then((response) => {
                    console.log(response.json().data);
                    this.$set('products', response.json().data);
                });
            }
        }
    });


</script>