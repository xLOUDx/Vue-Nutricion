<template lang="html">
  <div class="container">
      <br> <br>
    <div v-for="item in post">
      <h1 class="field is-grouped is-grouped-centered title is-1 is-spaced" style="font-family: 'Titan One', cursive;color:#430462;" > {{ item.title }} </h1>
      <div class="tile is-ancestor columns"  style="background-color:#F9F9F9;border-radius:5px;">
        <div class="tile is-parent column is-two-fifths" style="word-wrap:break-word;overflow-x:hidden;">
          <article class="tile is-child box" style="word-wrap:break-word;overflow-x:hidden;background-color:#EFD1FF">
            <p class="subtitle">{{ item.subtitle }}</p>
            <div class="content">
              <p>{{ item.body }}</p>
            </div>
          </article>
        </div>

        <div class="tile is-parent column is-eight-fifths" style="word-wrap:break-word;overflow-x:hidden;">
          <article class="tile is-child box">
            <div class="content" v-html="item.ppt" >
             {{ item.ppt }}
            </div>
          </article>
       </div>

      </div>
      <br> <hr> <br>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      errors:{
      },
      post: {
      },
    }
  },
  mounted(){
    axios.post('/getDataPost')
    .then((response) => this.post = this.temp = response.data)
      .catch((error) => this.errors = error.response.data.errors)
  }
}
</script>
