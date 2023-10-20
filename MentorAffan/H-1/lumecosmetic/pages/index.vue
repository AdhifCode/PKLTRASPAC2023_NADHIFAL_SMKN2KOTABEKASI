<script setup lang="ts">
//meta title
useHead({
  title: "sui - SantriKoding.com",
});
</script>

<template>
  <div>
    <div class="html">
      <div class="youtube-section">
        <h1 class="t">Educational Video</h1>
        <h1 class="b">Lumécolors Cosmetics</h1>
        <div class="row">
          <div class="row row-cols-1 row-cols-md-2">
            <div class="col d-flex mb-3 justify-content-center">
              <iframe
                src="https://www.youtube.com/embed/q8mMcpikw-c"
                frameborder="0"
              ></iframe>
            </div>
            <div class="col d-flex mb-3 justify-content-center">
              <iframe
                src="https://www.youtube.com/embed/q8mMcpikw-c"
                frameborder="0"
              ></iframe>
            </div>
            <div class="col d-flex mb-3 justify-content-center">
              <iframe
                src="https://www.youtube.com/embed/q8mMcpikw-c"
                frameborder="0"
              ></iframe>
            </div>
          </div>
        </div>
        <p>
          Dengan formula khusus yang dirancang agar sesuai dengan semua jenis
          kulit wanita Indonesia, Lume Cosmetic terbukti berhasil menjadi solusi
          untuk semua wanita bisa tampil cantik versi dirinya masing-masing.
        </p>
      </div>
      <div class="testi-section">
        <h1 class="t">What People Say About</h1>
        <h1 class="b">Lumécolors Cosmetics</h1>
        <!-- <div class="owl-carousel owl-theme">
        
        <div class="item" v-for="slide in slides" :key="slide.id">
      
          <img :src="slide.image" alt="Slide Image" />
        </div>
      </div> -->
      </div>
      <div class="blog-section">
        <h1>Our Blog</h1>
        <div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
            <div class="col mb-3">
              <div class="card card-sec7 p-2">
                <div class="img-parent-sec7">
                  <img
                    src="/assets/img/our.jpg"
                    width="100%"
                    alt=""
                    class="rounded img-fluid object-fit-cover img-sec4"
                  />
                </div>
                <div class="text-card card-body">
                  <p class="jdl-kartu-sec7 fw-bolder mt-2">
                    Cara Memakai Lipstik
                  </p>

                  <p class="desk-kartu-sec7 mt-1">
                    Memilih makeup wajah membutuhkan pertimbangan tersendiri
                    agar Anda mendapatkan produk yang tepat dan berkualitas.
                    Simak ulasan mengenai beberapa produk makeup yang
                    recommended cocok diaplikasikan untuk kegiatan sehari-hari
                    karena memiliki kesan flawless dan natural.
                  </p>
                  <p class="tgl-kartu-sec7 fs-14 fw-bolder">7 Juli 2022</p>
                  <div class="col d-flex justify-content-end">
                    <nuxt-link
                      to="/"
                      class="readmore-text fw-bolder text-decoration-none"
                      >Read More >></nuxt-link
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="card card-sec7 p-2">
                <div class="img-parent-sec7">
                  <img
                    src="/assets/img/our.jpg"
                    width="100%"
                    alt=""
                    class="rounded img-fluid object-fit-cover img-sec4"
                  />
                </div>
                <div class="text-card card-body">
                  <p class="jdl-kartu-sec7 fw-bolder mt-2">
                    Cara Memakai Lipstik
                  </p>

                  <p class="desk-kartu-sec7 mt-1">
                    Memilih makeup wajah membutuhkan pertimbangan tersendiri
                    agar Anda mendapatkan produk yang tepat dan berkualitas.
                    Simak ulasan mengenai beberapa produk makeup yang
                    recommended cocok diaplikasikan untuk kegiatan sehari-hari
                    karena memiliki kesan flawless dan natural.
                  </p>
                  <p class="tgl-kartu-sec7 fs-14 fw-bolder">7 Juli 2022</p>
                  <div class="col d-flex justify-content-end">
                    <nuxt-link
                      to="/"
                      class="readmore-text fw-bolder text-decoration-none"
                      >Read More >></nuxt-link
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="card card-sec7 p-2">
                <div class="img-parent-sec7">
                  <img
                    src="@/public/img/1.jpg"
                    width="100%"
                    alt=""
                    class="rounded img-fluid object-fit-cover img-sec4"
                  />
                </div>
                <div class="text-card card-body">
                  <p class="jdl-kartu-sec7 fw-bolder mt-2">
                    Cara Memakai Lipstik
                  </p>

                  <p class="desk-kartu-sec7 mt-1">
                    Memilih makeup wajah membutuhkan pertimbangan tersendiri
                    agar Anda mendapatkan produk yang tepat dan berkualitas.
                    Simak ulasan mengenai beberapa produk makeup yang
                    recommended cocok diaplikasikan untuk kegiatan sehari-hari
                    karena memiliki kesan flawless dan natural.
                  </p>
                  <p class="tgl-kartu-sec7 fs-14 fw-bolder">7 Juli 2022</p>
                  <div class="col d-flex justify-content-end">
                    <nuxt-link
                      to="/"
                      class="readmore-text fw-bolder text-decoration-none"
                      >Read More >></nuxt-link
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="buttonn">
          <button class="custom-button">
            Lihat Selengkapnya <b-icon-arrow-right></b-icon-arrow-right>
          </button>
        </div>
      </div>
      <div class="pertanyaan-section">
        <h1>Seputar Pertanyaan</h1>
        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-1" role="tab">
            <b-button block v-b-toggle.accordion-2 variant="info"
              >Apa itu Lume Cosmetic?</b-button
            >
          </b-card-header>
          <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>Hallo</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>

        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-1" role="tab">
            <b-button block v-b-toggle.accordion-3 variant="info"
              >Apa saja keunggulan produk lipcoat?</b-button
            >
          </b-card-header>
          <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>Hallo</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>
      </div>
    </div>
    <footer>
      <div class="row">
        <div class="col-md-5">
          <p>
            Lumecolors adalah brand kecantikan dengan pilihan warna yang cocok
            untuk kulit orang Asia, membuat kamu nyaman menggunakan lumecolors
            sepanjang hari.
          </p>
        </div>
        <div class="col-md-2">
          <h5>QUICK LINKS</h5>
          <a href="">Location</a>
          <a href="">Our Blog</a>
          <a href="">Contact Us</a>
          <a href="">Privacy Policy</a>
        </div>
        <div class="col-md-5">
          <h5>SUBSCRIBE NEWSLETTER</h5>
          <form data-v-6ca7855c="" class="input-group mb-2 mt-3">
            <input
              type="text"
              placeholder="Masukkan Email Anda"
              aria-label="Masukkan Email Anda"
              aria-describedby="button-addon2"
              class="form-control"
            />
            <button type="button" id="button-addon2" class="btns btn">
              Subscribe
            </button>
          </form>
          <p>Let's keep in touch!</p>
          <p>Join our newsletter. so that we reach out to you with our</p>
          <p>best news and offers</p>
        </div>
      </div>
      <div class="white-line"></div>
      <div class="row bawah">
        <div class="col-md-12">
          <div class="additional-div">
            <p>© 2023 Lume Cosmetic Indonesia. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>
<!-- 
<script>
import carousel from 'vue-owl-carousel'

export default {
  data() {
    return {
      components: { carousel },
      slides: [
        { id: 1, image: "@/assets/1.jpg" },
        { id: 2, image: "@/assets/2.png" },
        { id: 2, image: "@/assets/1.png" },
      ],
    };
  },
  mounted() {
    // Initialize Owl Carousel after the component has been mounted
    this.$nextTick(() => {
      const $owl = $(this.$el);
      $owl.owlCarousel({
        // Owl Carousel options and settings
        items: 1, // Number of items displayed per slide
        loop: true, // Infinite loop
        // Add more options as needed
      });
    });
  },
  beforeDestroy() {
    // Destroy Owl Carousel instance when the component is about to be destroyed
    const $owl = $(this.$el);
    $owl.trigger("destroy.owl.carousel").removeClass("owl-loaded");
  },
};
</script> -->

<style src="@/public/style.css">
</style>