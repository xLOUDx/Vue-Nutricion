<template lang="html">

  <nav class="navbar " role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="http://127.0.0.1:8000/">
        <h1 class="subtitle is-4" > Nutrición </h1>
      </a>

      <div class="navbar-menu is-active">
        <router-link to="/" class="navbar-item">Inicio</router-link>
        <router-link to="/search" class="navbar-item">Pacientes</router-link>
        <router-link to="/config" class="navbar-item">Config</router-link>
      </div>

      <div class="navbar-burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

</template>

<script>
export default {

}
</script>
