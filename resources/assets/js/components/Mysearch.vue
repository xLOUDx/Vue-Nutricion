<template lang="html">
  <div class="container is-padding" >
    <div class="field is-grouped">
      <p class="control is-expanded">
        <input class="input" type="text" placeholder="Ingrese nombre">
      </p>
      <p class="control">
        <a class="button is-info" @click="prueba" >
          Buscar paciente
        </a>
      </p>
    </div>
  </div>
</template>

<script>
export default {
  methods:{
    prueba(){
      console.log('Holaa');
    }
  }
}
</script>

<style lang="css">
</style>
