<template>
  <router-link v-if="linkable && productId" :to="'/detail/' + productId">
    <img
      :src="imageSrc"
      :alt="alt"
      class="w-full h-60 object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out"
      @error="setDefaultImage"
    />
  </router-link>

  <img
    v-else
    :src="imageSrc"
    :alt="alt"
    class="w-full h-60 object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out"
    @error="setDefaultImage"
  />
</template>

<script>
export default {
  props: {
    src: { type: String, required: true },
    alt: { type: String, default: "Image produit" },
    productId: { type: [Number, String], required: true },
    linkable: { type: Boolean, default: true },
  },
  data() {
    return {
      imageSrc: this.getImagePath(this.src),
      defaultImage: "storage/photos/Table-1.png",
    };
  },
  methods: {
    getImagePath(imageName) {
      if (!imageName) return this.defaultImage;
      return `http://localhost:8000/storage/photos/${imageName}`;
    },
    setDefaultImage() {
      this.imageSrc = this.defaultImage;
    },
  },
  watch: {
    src(newValue) {
      this.imageSrc = this.getImagePath(newValue);
    },
  },
};
</script>
