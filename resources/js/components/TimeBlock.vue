<template>
  <div @click="modalOpen"></div>
</template>

<script>
  export default({
    methods: {
      modalOpen() {
        this.$emit('open-modal', this.time)
      }
    },
    props: ['time']
  });
</script>