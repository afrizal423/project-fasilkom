<template>
  <form action="" id="form-alumni" @submit.prevent="processForm">
    <label for="nama">Nama</label>
    <input 
      type="text" 
      id="nama"
      v-model="nama">
    <input type="submit" value="Kirim">
  </form>
</template>

<script>
export default {
  data() {
    return {
      nama: ''
    }
  },
  methods: {
    processForm: function() {
      axios.post('/form-alumni', {
        nama: this.nama,
      })
      .then(function (response) {
        console.log(response);
      });
    }
  }
}
</script>

<style>

</style>