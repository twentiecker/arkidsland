<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="4000"
      controls
      indicators
      background="#ababab"
      img-width="1024"
      img-height="480"
      style="text-shadow: 1px 1px 2px #333;"
    >
      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <b-carousel-slide v-for="item in src_banner" :key="item">
        <template #img>
          <img
            class="d-block img-fluid w-100"
            width="1024"
            height="480"
            :src="item"
            alt="image slot"
          />
        </template>
      </b-carousel-slide>
    </b-carousel>
  </div>
</template>

<script>
export default {
  data() {
    return {
      slide: 0,
      sliding: null,
      src_banner: [
        "https://cf.shopee.co.id/file/3738a7e71134085e6131725cda4336f6",
        "https://cf.shopee.co.id/file/f50a0720d89129ccddfb68aef90c9ebe",
        "https://cf.shopee.co.id/file/1e4aa0888c169f1ba5a786a12c1ea210",
        "https://cf.shopee.co.id/file/d4b35bb4ab0eb943ee959ba60587697e",
        "https://cf.shopee.co.id/file/cd335a22aa6cc7cdc9a8ce01347e4acb",
      ],
    };
  },
};
</script>
