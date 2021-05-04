<template>
  <img :src="imageSrc" alt="Blog Image">
</template>

<script>
export default {
  props: ['url'],
  created() {
    axios.get(this.url)
      .then(response => {
          this.imageSrc = response.data.media_details.sizes.medium_large.source_url
      })
  },
  data() {
    return {
      imageSrc: ''
    }
  }
}
</script>

