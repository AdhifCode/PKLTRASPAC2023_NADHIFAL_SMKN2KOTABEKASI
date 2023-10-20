<template>
  <div>
    <MainNav />
    <div class="px-20">
      <div>
        <img src="/img/home-img.png" class="w-full" alt="" srcset="" />

        <button
          class="flex flex-wrap mt-8 mb-2 bg-gray-200 px-5 flex items-center rounded-full py-2 hover:bg-gray-300"
        >
          <p class="ma-0">filter</p>
          <svg
            class="h-4 w-4 text-black"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
          </svg>
        </button>
      </div>
      <div class="">
        <div>
          <p class="font-bold text-2xl">Rekomendasi Untuk Kamu</p>

          <div>
            <div class="grid grid-cols-5 gap-4">
              <div
                class="col-span-1 mb-4 hover:shadow-xl transition duration-300"
                v-for="(bolee, i) in perodukvillager"
                :key="i"
              >
                <router-link :to="'/detail'" class="kartu p-3 rounded">
                  <div class="aspect-w-16 aspect-h-9">
                    <img
                      :src="`img/${bolee.foto}`"
                      class="object-contain w-60 h-60 rounded"
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
                    </div></div
                ></router-link>
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