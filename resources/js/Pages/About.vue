<template>

    <div class="page">
        <div class="container">
            <div class="p-5 bg-dark text-white">
                <div class="container">
                    <div class="d-flex gap-4">
                        <div class="avatar">
                            <img class="rounded-circle" src="https://picsum.photos/100/100" alt="">
                        </div>
                        <div class="jumbo_text">
                            <h1 class="display-3">About me</h1>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, quibusdam.</p>
                        </div>
                    </div>
                    <hr class="my-2">
                    <p>More info</p>
                    <p class="lead">
                        <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }" role="button">Read my blog</router-link>
                    </p>
                </div>
            </div>
            <div class="content py-4">
                <div class="container">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit consequuntur iure architecto libero molestiae provident unde optio repellat, error laborum minus dolores voluptatibus, eveniet consequatur in officia totam dolor, delectus enim dignissimos quo mollitia esse. Velit quis dolor excepturi voluptatibus! Voluptatem, rerum consequatur. Et ducimus, doloribus porro blanditiis, quos accusamus autem saepe illo iste, qui cupiditate dolorem fugiat id sapiente temporibus maiores placeat! Facilis, in! Ea, quos molestias. Soluta sed, quis distinctio quidem eaque obcaecati est omnis incidunt quia velit cum inventore ipsam id? Incidunt dolores rerum ab, tempore odio ipsa consequuntur mollitia iure blanditiis quaerat accusamus, id voluptas officiis, soluta rem perspiciatis harum labore dignissimos voluptatibus cumque sunt ut accusantium optio. Nesciunt sequi eligendi maxime, vitae vel voluptatem alias commodi quod at incidunt! Qui laudantium nisi iure hic quasi, rem dignissimos ratione provident at commodi alias sed molestiae, vero mollitia totam. Repellendus quo, iusto corporis, nulla odio id amet eaque quaerat esse reiciendis eligendi itaque vero ipsum rerum non quidem distinctio modi velit, nisi atque beatae? Ullam, asperiores ea necessitatibus dicta, molestias tempore nihil qui quo perferendis quisquam ad reiciendis? Neque debitis animi laborum laudantium nihil et excepturi sunt molestias at culpa dignissimos adipisci officia, placeat, itaque iusto pariatur ab doloribus provident deserunt dolor esse sint tempora maiores nulla! Facere magnam maiores eaque, tempora iure placeat eos ut iusto vero deserunt inventore architecto cumque quos, suscipit excepturi temporibus modi maxime ratione illum rerum tempore quam odio asperiores. Nihil nobis distinctio libero, beatae rerum nostrum ab quo, animi temporibus illum placeat perspiciatis consequuntur impedit magnam iure dolorum veniam! Modi nostrum natus rem illo. Voluptates reprehenderit nemo accusantium! Aspernatur deserunt, eligendi provident earum impedit nostrum numquam consequatur iusto iste sint quia itaque animi voluptatibus quis similique soluta accusantium, et facere! Eum id doloremque in nobis temporibus officiis eligendi, veritatis illo cumque eveniet dolore iure dignissimos quod? Delectus, nemo maxime mollitia commodi iusto quod asperiores, placeat hic molestiae expedita doloribus sequi perspiciatis eius provident, quidem quibusdam! A modi quis esse perspiciatis voluptates ipsum rerum adipisci velit ab nemo maiores similique, enim cum totam dignissimos sapiente architecto vel. Harum tempore rem quae quidem rerum. Quas distinctio veniam beatae quasi accusantium quos ullam, labore at molestiae, quaerat unde harum quis numquam, voluptate provident dolor! Ullam repellat molestiae libero quisquam unde non nesciunt deleniti quae nobis accusamus. Minus facilis corporis excepturi beatae magnam alias sed ut, reprehenderit cupiditate officiis totam cum autem quo quibusdam odit.
                </div>
            </div>

        </div>
        <router-view></router-view>
    </div>

</template>

<script>
    export default {
        name: 'About'
    };
</script>

<style lang="scss">
    .avatar{
        img{
            aspect-ratio: 1 / 1;
        }
    }
</style>

