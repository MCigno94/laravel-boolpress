<template>

<div class="page">

    <div class="p-5 bg-dark text-white">
        <div class="container">
            <h1 class="display-3">BoolPress Blog</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, nisi!</p>
            <p class="lead">
                <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }" role="button">Visit the Blog</router-link>
            </p>
        </div>
    </div>

    <section class="recent_article">
        <div class="container">
            <h2 class="mb-4">Recent Articles</h2>
            <div class="row row-cols-2">
                <div class="col mb-4" v-for="post in posts" :key="post.id">
                    <div class="card h-100">
                        <img class="img-fluid" :src="'storage/' + post.image" :alt="post.title"/>
                        
                        <div class="card-body">
                            <h3>{{ post.title }}</h3>
                            <p>{{ post.body }}</p>
                            <router-link class="btn btn-primary" :to="{ name: 'post', params: { slug: post.slug } }">Read More</router-link>
                        </div>
                    
                        <div class="card-footer d-flex">
                            <div class="author" v-if="post.user">
                                <strong>Author: </strong> {{ post.user.name }}
                            </div>
                            <div class="container-fluid text-center">
                                <div class="row">
                                    <div class="col-12" v-if="post.category">
                                        <strong>Category: </strong> {{ post.category.name }}
                                    </div>
                                    <div class="col-12" v-if="post.tags.length > 0">
                                    
                                        <div class="text-center">
                                            <strong>Tags: </strong>
                                            <span v-for="tag in post.tags" :key="tag.id"> #{{ tag.name }}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

