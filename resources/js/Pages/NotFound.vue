<template>
  <div class="page h-100">
    <div class="p-5 bg-dark text-white">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="avatar mr-3">
            <img  class="rounded-circle" width="200" src="https://picsum.photos" alt=""/>
          </div>
          
          <div class="jumbo_text">
            <h1 class="display-3">404 Not Found</h1>
            <p class="lead">
                La pagina che stai cercando non esiste!
            </p>
            <p>
                Ecco i link delle pagine corrette:
            </p>

            <ul class="">
              <router-link class="btn btn-primary btn-lg mr-2" :to="{ name: 'home' }" role="button">Visit Home</router-link>
              <router-link class="btn btn-primary btn-lg mr-2" :to="{ name: 'about' }" role="button">Visit About</router-link>
              <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }" role="button">Visit Posts</router-link>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="content"></div>
  </div>

</template>

<script>

    export default {
        name: 'NotFound'
    };

</script>

<style lang="scss">
    .avatar{
        img{
            aspect-ratio: 1 / 1;
        }
    }
</style>