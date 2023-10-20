<template>
  <div class="ppp">
    <div class="contact bg-green-700 py-2 px-8">
      <div class="contact-text font-normal">
        <button class="kontak flex items-center text-white">
          <svg
            width="24px"
            height="24px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g
              id="SVGRepo_tracerCarrier"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C14.1588 20.0658 10.9183 19.5829 7.6677 16.3323C4.41713 13.0817 3.93421 9.84122 4.00655 7.93309C4.04952 6.7996 4.7008 5.77423 5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617Z"
                stroke="#ffffff"
                stroke-width="1.5"
                stroke-linecap="round"
              ></path>
            </g>
          </svg>
          <p class="px-1">+62-815-6315-1038</p>
        </button>
      </div>
    </div>

    <div class="w-full">
      <div
        class="flex grid grid-cols-1 gap-10 md:grid-cols-2 py-5 pt-5 px-20 justify-between"
      >
        <div
          class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0"
        >
          <div class="logo">
            <img
              src="/img/logo_nganu.png"
              width="100px"
              alt="Logo Nganu"
              class="w-auto"
            />
          </div>
          <div class="nama_toko md:ml-8 text-2xl font-semibold">Toko nganu</div>
        </div>

        <div
          class="flex flex-col md:flex-row items-center md:justify-end space-y-4 md:space-y-0 md:ml-10"
        >
          <form @submit.prevent="search">
            <div class="relative">
              <div
                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
              >
                <svg
                  class="w-4 h-4 text-white-500 dark:text-white-400"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 20"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                  />
                </svg>
              </div>
              <input
                v-model="searchQuery"
                type="search"
                id="default-search"
                class="block w-full p-4 pl-10 text-sm text-green border border-white-300 rounded-xl bg-white focus:ring-green-500 focus:border-green-500 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                placeholder="Mencari Anu"
                required
              />
            </div>
          </form>

          <nuxt-link to="/" class="text-decoration-none px-3">
            <button
              class="rounded-full w-16 h-16 flex items-center justify-center bg-gray-300 hover:bg-gray-400"
            >
              <svg
                width="46px"
                height="46px"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                    stroke="#1C274C"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  ></path>
                  <path
                    opacity="0.5"
                    d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                    stroke="#1C274C"
                    stroke-width="1.5"
                  ></path>
                  <path
                    opacity="0.5"
                    d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                    stroke="#1C274C"
                    stroke-width="1.5"
                  ></path>
                  <path
                    d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                    stroke="#1C274C"
                    stroke-width="1.5"
                  ></path>
                </g>
              </svg>
            </button>
          </nuxt-link>
          <nuxt-link to="/" class="text-decoration-none">
            <button
              class="rounded-full w-16 h-16 flex items-center justify-center hover:bg-gray-400 relative"
            >
              <img
                src="/img/ayank.png"
                alt=""
                class="w-full h-full object-cover rounded-full"
              />
            </button>
          </nuxt-link>
          <div class="display-5 my-auto ml-2 font-black text-truncate">
            Apaaja dah
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  <style>
.ppp {
  margin-bottom: 51px;
  font-family: "Poppins", sans-serif;
}

.contact {
  background: #2f432d;
  padding: 9px 123px 10px 123px;
}

.logo {
  width: 43px;
  height: auto;
}

.nama_toko {
  margin-top: 4px;
  margin-left: 33px;
  font-size: 24px;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
}

.profile_icon_keranjang {
  display: flex;
  gap: 11px;
  margin-left: 32px;
}

.keranjang {
  margin-left: 5px;
}
</style>

<script>
export default {
  data() {
    return {
      searchQuery: "",
    };
  },
  methods: {
    search() {
      // Implement your search logic here
      console.log("Search query:", this.searchQuery);
    },
  },
};
</script>






  