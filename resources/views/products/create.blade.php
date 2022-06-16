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
        <form method="POST" v-on:submit.prevent="createItem">

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Ingrese Nombre Producto">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Descripcion">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Precio Unitario">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Existencias">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Garantia">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Seller Id">
            </div>



        </form>

        <button class="btn btn-success" @click.prevent="crearitem(product)">Crear</button>
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

            
        }
    });


</script>