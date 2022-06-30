<template>

<div class="page">


    <div class="p-5 bg-dark text-white">
        <div class="container">
            <h1 class="display-3">BoolPress Blog</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, nisi!</p>
        </div>
    </div>

    <section class="recent_article">
        <div class="container">
            <h2 class="py-4">Recent Article</h2>
            <div class="row">
                <div class="col" v-for="post in posts" :key="post.id">
                    <div class="card h-100">
                        <img class="img-fluid" :src="'/storage/' + post.cover_image" alt="post.title">
                        <div class="card-body">
                            <h3>{{ post.title }}</h3>
                            <p>{{post.content.slice(0,200) + '...'}}</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <div class="go_to_blog mt-5 text-center">
            <router-link class="btn btn-primary text-white" :to="{ name: 'posts'}"> Go to my Blog</router-link>
        </div>
    </section>

</div>
</template>

<script>

export default {
    name: 'Home',
    data() {
        return {
            posts: ''
        }
    },
    methods: {

    },
    mounted() {
        axios.get('/api/posts')
        .then(response => {
            console.log(response);
            const posts = response.data.data;
            this.posts = posts.slice(0, 4);
        })
        .catch(e => {
            console.error(e);
        })
    }

}
</script>

