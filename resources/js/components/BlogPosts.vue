<template>
  <div class="blog-section">
    <div class="container">
      <h1 class="text-center">{{ __('blog.title') }}</h1>

      <p class="section-description">{{ __('blog.description') }}</p>

      <div class="blog-posts">
        <div v-for="post in posts" :key="post.id" class="blog-post">
          <a :href="post.slug">
            <!-- <blog-image :url="post._links['wp:featuredmedia'][0].href"></blog-image> -->
            <img :src="post.image" alt="Blog Image" />
          </a>
          <a :href="post.slug">
            <h2 class="blog-title">{{ post.title }}</h2>
          </a>
          <div class="blog-description">{{ stripTags(post.body) }}</div>
        </div>
      </div>
    </div>
    <!-- end container -->
  </div>
  <!-- end blog-section -->
</template>

<script>
import BlogImage from "./BlogImage";
import sanitizeHtml from "sanitize-html";

export default {
  components: {
    BlogImage
  },
  created() {
    console.log("blogtitle");
    this.blogTitle = "";
    axios.get("/api/posts").then(response => {
      this.posts = response.data;
      this.posts.forEach(p => {
        p.image = `/storage/${p.image}`;
        p.slug = `/post/${p.slug}`;
      });
    });
  },
  data() {
    return {
      blogTitle: "",
      posts: []
    };
  },
  methods: {
    stripTags(html) {
      return sanitizeHtml(html, {
        allowedTags: []
      }).substring(0, html.indexOf("&hellip;"));
    }
  }
};
</script>

