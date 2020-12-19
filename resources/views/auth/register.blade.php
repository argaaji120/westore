@extends('layouts.auth')

@section('content')
<div class="page-content page-auth" id="register">
  <div class="section-store-auth" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center justify-content-center row-login">
        <div class="col-lg-4">
          <h2>Memulai untuk jual beli<br />dengan cara terbaru</h2>
          <form class="mt-3" action="">
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" class="form-control is-valid" autofocus v-model="name" />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control is-invalid" v-model="email" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" />
            </div>
            <div class="form-group">
              <label>Toko</label>
              <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="is_store_open" id="openStoreTrue" class="custom-control-input"
                  v-model="is_store_open" :value="true" />
                <label for="openStoreTrue" class="custom-control-label">Iya, boleh</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="is_store_open" id="openStoreFalse" class="custom-control-input"
                  v-model="is_store_open" :value="false" />
                <label for="openStoreFalse" class="custom-control-label">Enggak, makasih</label>
              </div>
            </div>
            <div class="form-group" v-if="is_store_open">
              <label for="store">Nama Toko</label>
              <input type="text" name="store" id="store" class="form-control" />
            </div>
            <div class="form-group" v-if="is_store_open">
              <label for="category">Kategori</label>
              <select name="category" id="category" class="form-control">
                <option value="" selected hidden disabled>Pilih Kategori</option>
                <option value="Gadgets">Gadgets</option>
                <option value="Furniture">Furniture</option>
                <option value="Make Up">Make Up</option>
              </select>
            </div>
            <a href="{{ route('register.success') }}" class="btn btn-success btn-block mt-4">Sign Up Now</a>
            <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-3">Back to Sign In</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script src="{{ asset('assets/vendor/vue/vue.js') }}"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script>
  Vue.use(Toasted);
    
  let register = new Vue({
    el: "#register",
    mounted() {
      AOS.init();

      this.$toasted.error("Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
        position: "top-center",
        className: "rounded",
        duration: 3000,
      });
    },
    data: {
      name: "Arga Aji Prasetyo",
      email: "arga@gmail.com",
      password: "",
      is_store_open: true,
      store_name: "",
    },
  });
</script>
@endpush