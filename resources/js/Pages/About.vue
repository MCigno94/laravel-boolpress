<template>
  <div class="page">
    <div class="p-5 bg-dark text-white">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="avatar mr-3">
            <img class="rounded-circle" width="200" src="https://picsum.photos/100/100" alt="" />
          </div>
          <div class="jumbo_text">
            <h1 class="display-3">About Me</h1>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Explicabo, fugit.
            </p>
            <p class="lead">
              <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }" role="button">Visit Posts</router-link>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="content py-4">
      <div class="container">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus vel, dolores atque odit maxime nemo quae laboriosam nihil vero, impedit corporis commodi. Voluptate, optio! Illo quis obcaecati exercitationem qui neque fugiat quae officiis molestias unde ut mollitia, facere optio reprehenderit consequuntur aperiam nostrum? Odit ea ipsam illo deserunt itaque dolores sunt pariatur ut esse est asperiores obcaecati eligendi voluptas eveniet ipsa quo, voluptate repellat optio. Facilis cumque ab cum. Odit obcaecati, vitae ipsum, iusto architecto optio officiis pariatur neque qui voluptatibus fuga commodi accusantium vel, illum totam porro necessitatibus velit recusandae animi odio a magnam doloribus maxime ab? A, et. Vitae perspiciatis ex error, cupiditate laudantium ratione mollitia animi laborum facilis non ducimus tempora sed similique blanditiis id accusamus consequuntur repudiandae perferendis dolore consectetur, rem saepe ad fuga eum. Atque est nesciunt officia non quos quis sit repellendus possimus doloribus distinctio velit, nemo reprehenderit perspiciatis amet porro. Reprehenderit, sequi assumenda, culpa eaque excepturi nihil ipsa velit voluptate quis rem provident quidem, facilis cumque ab suscipit quas commodi sapiente quasi. Deserunt fuga quisquam repellendus et velit reiciendis beatae ut fugiat, eos inventore recusandae. Temporibus, odio itaque aut commodi mollitia nostrum? Deserunt ipsum est officiis. Officia sequi omnis voluptate quos debitis, saepe, molestiae numquam eos distinctio totam facilis necessitatibus pariatur rem excepturi consectetur? Earum, doloribus error facere sit necessitatibus, quas illo facilis officiis possimus molestias rerum totam ratione deserunt consequuntur unde harum? Possimus architecto quo porro ex enim quos nobis. Voluptatibus fugiat, quis pariatur quod rerum impedit aperiam voluptates sed laudantium error.
      </div>
    </div>
  </div>

</template>

<script>
    export default {
        name: 'about'
    };
</script>

<style lang="scss">
    .avatar{
        img{
            aspect-ratio: 1 / 1;
        }
    }
</style>

