<template>  
  <div v-show="this.showModal" class="overlay" @click="$emit('close-modal')">
    <div class="modal" @click.stop="stopBubbling">
      <div class="modal-contents">
        <label>時刻</label><span class="input">{{time}}:00</span>
        <label>睡眠</label>
        <input class="input" type="text" name="" id="">
        <label>その他</label>
        <input class="input" type="text" name="" id="">
      </div>
    </div>
  </div>
</template>

<style>
  .overlay{
    z-index:1;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;

  }
  .modal {
    width: 50%;
    height: 50%;
    background: #ffffff;
    visibility: visible;
    opacity: 1;
    z-index: 100;
  }
  .modal-contents {
    margin: 0 auto;
    width: 50%;
    display: grid;
    grid-template-columns: 100px 1fr;
  }
  label {
    grid-column: 1/2;
    text-align: right;
    padding-right: 10px;
  }
  .input {
    grid-column: 2/3;
    margin-bottom: 10px;
  }
</style>

<script>
export default ({
  methods: {
    stopBubbling() {
      return false;
    }
  },
  props: ['showModal', 'time']
});
</script>