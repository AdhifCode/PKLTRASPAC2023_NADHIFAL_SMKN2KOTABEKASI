    <template>
  <div>
        <div
      id="defaultModal"
      tabindex="-1"
      aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative bg-white w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div
            class="flex bg-[#2F432D] items-start justify-between p-4 border-b rounded-t dark:border-gray-600"
          >
            <h3 class="text-xl font-semibold text-white">Tambah Foto Barang</h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent  hover:text-gray-100 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-hide="defaultModal"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <div class="p-6 space-y-6">
            <div class="flex items-center border-b border-green-900 py-2">
              <input
                class="appearance-none  bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="file"
                placeholder="Foto"
                aria-label="Full name"
              />
            </div> 
  
          </div>
          <!-- Modal footer -->
          <div
            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-lg dark:border-gray-600"
          >
            <button
              data-modal-hide="defaultModal"
              type="button"
              class="shadow-lgtext-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
            >
              Close
            </button>
            <button
              data-modal-hide="defaultModal"
              type="button"
              class="shadow-lg bg-[#2F432D] border px-8 py-2 ml-4 text-white transition duration-300 ease-in-out hover:bg-green-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center"
            >
              Tambah
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      id="modaledit"
      tabindex="-1"
      aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative bg-white w-full max-w-2xl max-h-full"> 
        <div class="relative rounded-lg shadow dark:bg-gray-700"> 
          <div
            class="flex bg-[#2F432D] items-start justify-between p-4 border-b rounded-t dark:border-gray-600"
          >
            <h3 class="text-xl font-semibold text-white">Edit Foto Barang</h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:text-gray-100 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-hide="modaledit"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <div class="p-6 space-y-6"> 
            <div class="flex items-center border-b border-green-900 py-2">
              <input
                class="appearance-none  bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="file"
                placeholder="Foto"
                aria-label="Full name"
              />
            </div> 
  
          </div>
          <!-- Modal footer -->
          <div
            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-lg dark:border-gray-600"
          >
            <button
              data-modal-hide="modaledit"
              type="button"
              class="shadow-lgtext-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
            >
              Close
            </button>
            <button
              data-modal-hide="modaledit"
              type="button"
              class="shadow-lg bg-[#2F432D] border px-8 py-2 ml-4 text-white transition duration-300 ease-in-out hover:bg-green-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center"
            >
              Simpan
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      id="modalhapus"
      tabindex="-1"
      aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full "
    >
      <div class="relative bg-white w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div
            class="flex bg-white items-start justify-between p-4 border-b rounded-t dark:border-gray-600"
          >
            <h3 class="text-xl font-semibold text-black">Yakin ingin hapus</h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent  hover:text-gray-100 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-hide="modalhapus"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div> 
          <div
            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-lg dark:border-gray-600"
          >
            <button
              data-modal-hide="modalhapus"
              type="button"
              class="shadow-lgtext-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
            >
              Close
            </button>
            <button
              data-modal-hide="modalhapus"
              type="button"
              class="shadow-lg bg-red-500 border px-8 py-2 ml-4 text-white transition duration-300 ease-in-out hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center"
            >
              Hapus
            </button>
          </div>
        </div>
      </div>
    </div>
    <NumHeader />
    <div class="container px-12">
      <NavHeader />
      <div class="mt-16">
        <div class="row-span-1 flex items-center mb-6">
          <nuxt-link to="/" class="mr-2 text-md">Home</nuxt-link> >
          <nuxt-link to="/user-profil/toko" class="m-0 text-md ml-2"
            >Toko</nuxt-link
          >
          <nuxt-link
            to="/user-profil/toko/detail-barang-toko"
            class="m-0 text-md ml-2"
            >> Barang Toko nama toko</nuxt-link
          >
          <p class="m-0 text-lg font-semibold ml-2">> Foto Barang</p>
        </div>
        <button data-modal-target="defaultModal"
                    data-modal-toggle="defaultModal"
          class="rounded-full lg:w-auto text-center shadow-lg p-3 text-lg bg-[#2F432D] border px-8 py-2 ml-4 text-white transition duration-300 ease-in-out hover:bg-green-950"
        >
          Tambah Foto Barang
        </button>
        <table class="table-fixed w-full mt-12">
          <thead class="border-b">
            <tr class="">
              <th class="pb-4 text-left">Foto</th> 
              <th class="pb-4 text-left">Aksi</th>
            </tr>
          </thead>
          <tbody class="">
            <tr v-for="(dt, i) in datatoko" :key="i">
              <td>{{ dt.img }}
                <img :src="'~/assets/img/'+dt.img" alt="" srcset="">
              </td>
              <td>
                <div class="flex items-center">
                  <button data-modal-target="modaledit"
                    data-modal-toggle="modaledit" class="mr-4  rounded-full bg-gray-100 shadow-lg p-3  hover:bg-gray-300  text-white transition duration-200 ease-in-out">
                    <svg
                      class="h-8 w-8 text-black"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <path
                        d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"
                      />
                      <path
                        d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"
                      />
                      <line x1="16" y1="5" x2="19" y2="8" />
                    </svg>
                  </button>
                  <button data-modal-target="modalhapus"
                    data-modal-toggle="modalhapus" class=" rounded-full bg-red-500 mr-3 shadow-lg p-3  hover:bg-red-600 transition duration-200 ease-in-out ">
                    <svg
                      class="h-8 w-8 text-black"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                      />
                    </svg>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
    <script>
import { initFlowbite } from 'flowbite' 
export default {
  mounted() {
      initFlowbite();
  },
  data() {
    return {
      datatoko: [
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
        {
          img: "punyaku.jpg",
        },
      ],
    };
  },
};
</script>