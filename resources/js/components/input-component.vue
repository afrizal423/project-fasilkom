<template>
  <div class="form-group">
    <label :for="name"><slot></slot></label>
    <input 
      class="form-control"
      :type="type" 
      :id="name"
      v-model="inputVal">
  </div>
</template>

<script>
  export default {
    props: [
      'name',
      'type',
      'value'
    ],
    computed: {
      inputVal: {
        get: function() {
          return this.value;
        },

        set: function(val) {
          this.$emit('input', val);
        }
      }
    }
  }
</script>

<style>

</style>