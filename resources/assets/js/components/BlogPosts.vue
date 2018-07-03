<template>
    <div class="blog-section">
        <div class="container">
            <h1 class="text-center">From Our Blog</h1>

            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

            <div class="blog-posts">
                <div v-for="post in posts" :key="post.id" class="blog-post">
                    <a :href="post.link">
                        <blog-image
                            :url="post._links['wp:featuredmedia'][0].href">
                        </blog-image>
                    </a>
                    <a :href="post.link"><h2 class="blog-title">{{ post.title.rendered }}</h2></a>
                    <div class="blog-description">{{ stripTags(post.excerpt.rendered) }}</div>
                </div>
            </div>
        </div> <!-- end container -->
    </div> <!-- end blog-section -->
</template>

<script>
import BlogImage from './BlogImage'
import sanitizeHtml from 'sanitize-html'

export default {
    components: {
        BlogImage,
    },
    created() {
        axios.get('https://blog.laravelecommerceexample.ca/wp-json/wp/v2/posts?per_page=3')
            .then(response => {
                this.posts = response.data
            })
    },
    data() {
        return {
            posts: []
        }
    },
    methods: {
        stripTags(html) {
            return sanitizeHtml(html, {
                allowedTags: []
            }).substring(0, html.indexOf('&hellip;'))
        }
    }

}
</script>

