<template>
  <div>
    <MainNav />
    <div class="px-20">
      <div class="breadcrumb">
        <nav class="flex" aria-label="Breadcrumb">
          <ol class="flex items-center space-x-2">
            <li>
              <div>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                  <!-- Heroicon name: solid/home -->
                  <svg
                    class="flex-shrink-0 h-5 w-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 11-1.414 1.414L11 6.414V17a1 1 0 11-2 0V6.414L3.707 10.707a1 1 0 01-1.414-1.414l6-6z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="sr-only">Home</span>
                </a>
              </div>
            </li>

            <li>
              <div class="flex items-center">
                <svg
                  class="flex-shrink-0 w-5 h-5 text-gray-300"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  aria-hidden="true"
                >
                  <path
                    d="M5.555 17.776a1 1 0 010-1.414l8-8a1 1 0 111.414 1.414L7.414 17H16a1 1 0 110 2H5a1 1 0 01-1-1v-9a1 1 0 112 0v7.555z"
                  />
                </svg>
                <a
                  href="#"
                  class="ml-2 text-sm font-medium text-gray-500 hover:text-gray-700"
                  >Project</a
                >
              </div>
            </li>

            <li>
              <div class="flex items-center">
                <svg
                  class="flex-shrink-0 w-5 h-5 text-gray-300"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  aria-hidden="true"
                >
                  <path
                    d="M5.555 17.776a1 1 0 010-1.414l8-8a1 1 0 111.414 1.414L7.414 17H16a1 1 0 110 2H5a1 1 0 01-1-1v-9a1 1 0 112 0v7.555z"
                  />
                </svg>
                <a
                  href="#"
                  class="ml-2 text-sm font-medium text-gray-500 hover:text-gray-700"
                  >Project Nero</a
                >
              </div>
            </li>
          </ol>
        </nav>
      </div>
      <div class="flex">
        <!-- Kolom Foto -->
        <div class="w-1/2 p-4">
          <img src="img/ayank.png" alt="Foto" class="w-50 h-auto" />
        </div>

        <!-- Kolom Caption -->
        <div class="w-1/2 p-4">
          <p class="text-lg font-semibold">Judul Foto</p>
          <p class="text-lg font-bold">Rp2.500</p>
          <p class="text-gray-500">Deskripsi singkat tentang foto ini.</p>
          <div class="flex pt-20">
            <button
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2"
            >
              Edit
            </button>
            <button
              class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2"
            >
              Delete
            </button>
          </div>
        </div>
      </div>
      <div class="pt-10">
        <p class="font-bold text-2xl">Rekomendasi Untuk Kamu</p>

        <div>
          <div class="grid grid-cols-5 gap-4">
            <div
              class="col-span-1 mb-4"
              v-for="(bolee, i) in perodukvillager"
              :key="i"
            >
              <div
                class="kartu p-3 rounded hover:shadow-xl transition duration-300"
              >
                <div class="aspect-w-16 aspect-h-9 h-100">
                  <img
                    :src="`img/${bolee.foto}`"
                    class="object-cover w-full h-full rounded"
                    alt=""
                  />
                </div>
                <div class="caption pt-10">
                  <p>{{ bolee.nama_brg }}</p>
                  <p class="font-extrabold text-lg">{{ bolee.harga_brg }}</p>
                  <div class="flex pt-1">
                    <svg
                      width="24px"
                      height="24px"
                      viewBox="0 0 17.00 17.00"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="#4ECB71"
                      stroke="#4ECB71"
                      stroke-width="0.374"
                      transform="matrix(1, 0, 0, 1, 0, 0)"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke="#CCCCCC"
                        stroke-width="0.17"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M11.896 1.77a.438.438 0 00-.807-.006L9.313 5.862H6.686L4.909 1.764a.438.438 0 00-.807.007l-2.97 7.206a1.751 1.751 0 00.578 2.075l5.769 4.265a.876.876 0 001.04 0l5.77-4.265a1.751 1.751 0 00.579-2.076l-2.972-7.205zm-.693 7.437a1 1 0 00-1.415-1.414l-2.293 2.293-.788-.789a1 1 0 00-1.414 1.415l1.495 1.495a1 1 0 001.415 0l3-3z"
                          fill="#4ECB71"
                        ></path>
                      </g>
                    </svg>
                    <p class="px-1">{{ bolee.toko_brg }}</p>
                  </div>

                  <div class="flex pt-1">
                    <StarRating :rating="bolee.rating_brg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import StarRating from "@/components/StarRating.vue";

export default {
  components: {
    StarRating,
  },
  data() {
    return {
      perodukvillager: [
        {
          foto: "rias-gremory-high-school-dxd.gif",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
        {
          foto: "ayank.png",
          nama_brg: "SIKATT",
          harga_brg: "Rp2.500",
          toko_brg: "Toko Official",
          rating_brg: "4.9",
        },
      ],
    };
  },
};
</script>