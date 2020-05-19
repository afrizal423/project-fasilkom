<template>
  <form action="" id="form-alumni-form" @submit.prevent="processForm">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input 
            class="form-control"
            type="text" 
            name="nama" 
            id="nama" 
            v-model="nama">
        </div>
        <div class="form-group">
          <label for="npm">NPM</label>
          <input 
            class="form-control"
            type="number" 
            name="npm" 
            id="npm" 
            v-model="npm">
        </div>
        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input 
            class="form-control"
            type="email" 
            name="email" 
            id="email" 
            v-model="email">
        </div>
        <div class="form-group">
          <label for="notelp">Nomor Telepon</label>
          <input 
            class="form-control"
            type="tel" 
            name="notelp" 
            id="notelp" 
            v-model="notelp">
        </div>
        <div class="form-group">
          <div class="form-check">
            <input type="radio" 
              class="form-check-input" 
              name="jenisKelaminRadio"
              id="lakiRadio"
              value="laki"
              v-model="jenisKelamin">
            <label for="lakiRadio" class="form-check-label">
              Laki - laki
            </label>
          </div>

          <div class="form-check">
            <input type="radio" 
              class="form-check-input" 
              name="jenisKelaminRadio"
              id="perempuanRadio"
              value="perempuan"
              v-model="jenisKelamin">
            <label for="perempuanRadio" class="form-check-label">
              Perempuan
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="tempatLahir">Tempat Lahir</label>
          <input 
            class="form-control"
            type="text" 
            name="tempatLahir" 
            id="tempatLahir" 
            v-model="tempatLahir">
        </div>
        <div class="form-group">
          <label for="tglLahir">Tempat Lahir</label>
          <input 
            class="form-control"
            type="date" 
            name="tglLahir" 
            id="tglLahir" 
            v-model="tglLahir">
        </div>
      </div>
      <div class="swiper-slide">
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
      </div>
    </div>
    <div class="swiper-pagination"></div>
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
        notelp: '',
        jenisKelamin: '',
        tempatLahir: '',
        tglLahir: '2005-07-22',
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
        alert(this.tglLahir);
      }
    }
  }
</script>

<style>

</style>