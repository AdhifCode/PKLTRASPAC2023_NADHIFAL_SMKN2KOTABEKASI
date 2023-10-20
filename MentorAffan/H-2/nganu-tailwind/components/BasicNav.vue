<template>
  <div class="ppp overflow-hidden mb-8 sm:mb-16">
    <div class="contact bg-green-700 py-2 px-4 md:px-10">
      <div class="contact-text flex text-white text-base md:text-lg leading-6">
        <button class="kontak flex items-center" @click="kontak">
          <img
            src="/img/telepon.png"
            alt="Logo Nganu"
            class="w-5 h-auto px-1"
          />
          +62-815-6315-1038
        </button>
      </div>
    </div>
    <div class="nav flex items-center py-6 md:py-10 px-4 md:px-10">
      <div class="logo w-8 h-auto">
        <img src="/img/logo_nganu.png" alt="Logo Nganu" class="w-8 h-auto" />
      </div>
      <div class="nama_toko ml-4 md:ml-8 text-xl md:text-2xl font-semibold">
        Toko Nganu
      </div>
    </div>
  </div>
</template>
  
  <script setup>
const no_admin = "6281563151038";

function kontak() {
  const nomer = no_admin;
  window.open(`https://wa.me/${nomer}`);
}
</script>
  
  <style scoped>
.ppp {
  overflow: hidden;
  margin-bottom: 1rem;
}
.contact {
  background: #2f432d;
  padding: 0.5rem 8rem;
}
.contact-text {
  display: flex;
  font-size: 0.875rem; /* 14px */
  line-height: 1.5rem; /* 24px */
}
.kontak {
  margin-right: 0.5rem;
  margin-top: 2px;
}
.nav {
  padding: 1.5rem 1rem;
  display: flex;
  flex-direction: column;
  align-items: center;
}
@media (min-width: 640px) {
  /* Apply styles for screens larger than 640px */
  .nav {
    flex-direction: row;
    align-items: center;
    padding: 1.5rem 10rem; /* Add horizontal padding in desktop mode */
  }
  .nama_toko {
    margin-top: 0;
    margin-left: 0.5rem;
  }
  .contact {
    background: #2f432d;
    padding: 0.5rem 10rem;
  }
}
</style>
  