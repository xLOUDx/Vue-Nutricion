<template lang="html">

  <section class="hero is-warning is-small">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-menu is-active">
              <!-- <router-link to="/" class="navbar-item">Inicio</router-link> -->
              <router-link to="/search" class="navbar-item">Pacientes</router-link>
              <!-- <router-link to="/config" class="navbar-item">Config</router-link> -->
              <a class="navbar-item" href="#" @click.prevent="logout">Salir</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title is-1"
        style="font: 400 100px/1.3 'Oleo Script', Helvetica, sans-serif;
          color: #900C3F;
          text-shadow: 4px 4px 0px rgba(0,0,0,0.1);">
            Nutrición
      </h1>
    </div>
  </div>

</section>

</template>

<script>
export default {
  methods:{
    logout(){
    				axios.post('/logout').then(response => {
    					location.reload();
    				}).catch(error => {
    					location.reload();
    				});
    			}
  }

}
</script>
