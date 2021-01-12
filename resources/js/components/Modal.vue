<template>  
  <div v-show="this.showModal" class="overlay w-full h-full fixed z-1 flex items-center justify-center" @click="$emit('close-modal')">
    <div class="modal w-3/4 md:w-2/4 z-100 bg-white visible opacity-100 p-3" @click.stop="stopBubbling">
      <div class="modal-contents py-5 mx-auto my-0 w-auto grid">
        <label class="label p-1">日時</label>
        <input class="input-text mb-3 border-solid border border-gray-400 rounded p-1" type="text" v-model="datetime">
        <label class="label p-1">睡眠</label>
        <input class="input-text mb-3 border-solid border border-gray-400 rounded p-1" type="text" name="" id="">
        <label class="label p-1">その他</label>
        <input class="input-text mb-3 border-solid border border-gray-400 rounded p-1" type="text" name="" id="">
      </div>
      <div class="text-center m-2.5">
        <button class="border-solid border border-green-600 bg-green-600 rounded px-10 py-2 text-gray-200 font-semibold">保存</button>
      </div>
    </div>
  </div>
</template>

<style>
  .overlay{
    background-color:rgba(0,0,0,0.5);
  }
  .modal-contents {
    grid-template-columns: 100px 1fr;
  }
  .label {
    grid-column: 1/2;
  }
  .input-text {
    grid-column: 2/3;
  }
</style>

<script>
  export default ({
    methods: {
      stopBubbling() {
        return false;
      }
    },
    props: ['showModal', 'time'],
    computed: {
      datetime: {      
        get() {
          return this.$props.time
        },
        set(value) {
          this.$emit('change', value)
        }
      }
    }
  });
</script>