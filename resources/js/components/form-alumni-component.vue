<template>
  <form action="" id="form-alumni" @submit.prevent="processForm">
    <input-component 
      name="nama" 
      type="text"
      v-model="nama"
      >Nama</input-component>
    <input-component
      name="npm"
      type="number"
      v-model="npm"
      >NPM</input-component>
    <input-component
      name="email"
      type="email"
      v-model="email"
      >Alamat Email</input-component>
    
    <div class="form-group">
      <label for="laki">Laki - Laki</label>
      <input 
        type="radio" 
        id="laki"
        value="laki"
        v-model="jenisKelamin">

      <label for="perempuan">Perempuan</label>
      <input 
        type="radio" 
        id="perempuan"
        value="perempuan"
        v-model="jenisKelamin">
    </div>
    
    <input type="submit" value="Kirim" class="btn btn-primary">
  </form>
</template>

<script>
  import input from './input-component.vue'
  export default {
    components: {
      'input-component': input
    },
    data() {
      return {
        nama: '',
        npm: '',
        email: '',
        jenisKelamin: ''
      }
    },
    methods: {
      processForm: function() {
        // axios.post('/form-alumni', {
        //   nama: this.nama,
        // })
        // .then(function (response) {
        //   console.log(response);
        // });
        console.log(this);
      }
    }
  }
</script>

<style>

</style>