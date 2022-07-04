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
                            <h1 class="display-3">Contact me</h1>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, quibusdam.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="content py-4">
                <div class="container">

                    <vue-form method="POST" action="/contact-form">
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" id="full_name" aria-describedby="helpIdFullName" placeholder="Insert Full Name">
                            <small id="helpIdFullName" class="form-text text-muted">Insert Full Name</small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpIdEmail" placeholder="Insert Email">
                            <small id="helpIdEmail" class="form-text text-muted">Insert Email</small>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" aria-describedby="helpIdSubject" placeholder="Insert Subject">
                            <small id="helpIdSubject" class="form-text text-muted">Insert Subject</small>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </vue-form>

                </div>
            </div>

        </div>

    </div>

</template>

<script>
import VueForm from './VueForm.vue'
    export default {
        name: 'Contacts',
        components: {
        VueForm,
    },
    };
</script>

<style lang="scss">

.avatar {
  img {
    aspect-ratio: 1 / 1;
  }
}

</style>

