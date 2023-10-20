<template>
  <div>
    <BasicNav />
    <div class="flex px-20">
      <!-- Sidebar -->
      <div class="w-1/4 p-4">
        <!-- Sidebar content here -->
        <p class="text-xl font-bold">Halaman Admin</p>
        <div class="pt-10">
          <p class="flex text-lg font-semibold py-2">
            <svg
              class="px-1"
              width="34px"
              height="34px"
              viewBox="0 0 24 24"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              fill="#000000"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <title></title>
                <g
                  fill="none"
                  fill-rule="evenodd"
                  id="页面-1"
                  stroke="none"
                  stroke-width="1"
                >
                  <g
                    id="导航图标"
                    transform="translate(-325.000000, -80.000000)"
                  >
                    <g id="编组" transform="translate(325.000000, 80.000000)">
                      <polygon
                        fill="#FFFFFF"
                        fill-opacity="0.01"
                        fill-rule="nonzero"
                        id="路径"
                        points="24 0 0 0 0 24 24 24"
                      ></polygon>
                      <polygon
                        id="路径"
                        points="22 7 12 2 2 7 2 17 12 22 22 17"
                        stroke="#212121"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                      ></polygon>
                      <line
                        id="路径"
                        stroke="#212121"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        x1="2"
                        x2="12"
                        y1="7"
                        y2="12"
                      ></line>
                      <line
                        id="路径"
                        stroke="#212121"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        x1="12"
                        x2="12"
                        y1="22"
                        y2="12"
                      ></line>
                      <line
                        id="路径"
                        stroke="#212121"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        x1="22"
                        x2="12"
                        y1="7"
                        y2="12"
                      ></line>
                      <line
                        id="路径"
                        stroke="#212121"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        x1="17"
                        x2="7"
                        y1="4.5"
                        y2="9.5"
                      ></line>
                    </g>
                  </g>
                </g>
              </g></svg
            >Produk
          </p>
          <p class="flex text-lg font-semibold">
            <svg
              class="px-1"  
              width="34px"
              height="34px"
              viewBox="0 0 24 24"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              fill="#000000"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <title></title>
                <g
                  fill="none"
                  fill-rule="evenodd"
                  id="页面-1"
                  stroke="none"
                  stroke-linecap="round"
                  stroke-width="1"
                >
                  <g
                    id="导航图标"
                    stroke="#212121"
                    stroke-width="1.5"
                    transform="translate(-103.000000, -334.000000)"
                  >
                    <g id="申请" transform="translate(103.000000, 334.000000)">
                      <g id="路径" transform="translate(4.000000, 2.000000)">
                        <path
                          d="M16,14.5 L16,19 C16,19.5523 15.5523,20 15,20 L11.75,20"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M16,6 L16,1 C16,0.447715 15.5523,0 15,0 L1,0 C0.447715,0 0,0.447715 0,1 L0,19 C0,19.5523 0.447715,20 1,20 L4,20"
                          stroke-linejoin="round"
                        ></path>
                        <line x1="4" x2="11" y1="6" y2="6"></line>
                        <line x1="7.5" x2="16" y1="20" y2="9.5"></line>
                        <line x1="4" x2="8" y1="10" y2="10"></line>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
            Tambah Produk
          </p>
        </div>
      </div>

      <!-- Photo Gallery -->
      <div class="w-3/4 p-4">
        <!-- Photo gallery content here -->
        <div class="grid grid-cols-3 gap-4">
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
                  <div class="flex justify-between pt-4">
                    <button
                      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                      Edit
                    </button>
                    <button
                      class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    >
                      Delete
                    </button>
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