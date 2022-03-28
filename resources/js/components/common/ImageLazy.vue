<template>
  <div
    v-lazy-container="{ selector: 'img' }"
    class="image-placeholder"
    :class="aspect_ratio"
  >
    <img
      :data-src="image_url"
      :class="classes"
      :alt="alt"
      class="absolute absolute-center object-center"
    />
  </div>
</template>

<script>
export default {
    name: 'EImage',
    props: {
    image_url: {
      type: String
    },
    alt: {
      type: String
    },
    classes: {
      type: String
    },
    aspect_ratio: {
      type: String
    }
}
};
</script>

<style>

    .image-placeholder {
        display:block;
        position:relative;
        overflow:hidden;
        line-height:1;
    }

    img {
        transition: all ease .3s;
        opacity: 0;
        min-height: 100%;
    }

    img[lazy='loading']{
        opacity: 1;
        filter: blur(15px);
    }

    img[lazy='loaded']{
        opacity: 1;
    }

</style>
