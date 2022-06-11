<template>
  <div>
    <div class="container">
      <template >
        <div class="row">
          <h1>Productos</h1>
          <!-- Form -->
          <div class="col-md-4 d-none">
            <input class="form-control" type="text" v-model="products.id" />
          </div>
          <div class="col-md-4 pt-3">
            <label>Nombre</label>
            <input class="form-control" type="text" v-model="products.nombre" />
          </div>
          <div class="col-md-12 pt-3">
            <a href="#" class="btn btn-success" @click="save()">
              <i class="fa fa-save"></i> {{ textButton }}</a
            >
          </div>

          
        </div>
      </template>
      <template v-else>
        <alert />
      </template>
    </div>
  </div>
</template>