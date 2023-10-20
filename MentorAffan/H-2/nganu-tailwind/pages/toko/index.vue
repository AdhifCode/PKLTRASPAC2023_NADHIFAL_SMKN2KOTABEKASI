    <template>
  <div>
     <div
      id="modaleditt"
      tabindex="-1"
      aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative bg-white w-full max-w-2xl max-h-full"> 
        <div class="relative rounded-lg shadow dark:bg-gray-700"> 
          <div
            class="flex bg-[#2F432D] items-start justify-between p-4 border-b rounded-t dark:border-gray-600"
          >
            <h3 class="text-xl font-semibold text-white">Edit Toko</h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:text-gray-100 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-hide="modaleditt"
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
            <div class="flex items-center border-b border-teal-500 py-2">
              <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="text"
                placeholder="Nama"
                aria-label="Full name"
              />
            </div>
            <div class="flex items-center border-b border-teal-500 py-2">
              <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="text"
                placeholder="Alamat"
                aria-label="Full name"
              />
            </div>
            <div class="flex items-center border-b border-teal-500 py-2">
              <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="number"
                placeholder="No Telepon"
                aria-label="Full name"
              />
            </div>
            <div class="flex items-center border-b border-teal-500 py-2">
              <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="text"
                placeholder="Deskripsi"
                aria-label="Full name"
              />
            </div>
            <div class="flex items-center border-b border-teal-500 py-2">
              <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="file"
                placeholder="Logo"
                aria-label="Full name"
              />
            </div> 
  
          </div>
          <!-- Modal footer -->
          <div
            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-lg dark:border-gray-600"
          >
            <button
              data-modal-hide="modaleditt"
              type="button"
              class="shadow-lgtext-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
            >
              Close
            </button>
            <button
              data-modal-hide="modaleditt"
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
      id="modalhapust"
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
              data-modal-hide="modalhapust"
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
              data-modal-hide="modalhapust"
              type="button"
              class="shadow-lgtext-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
            >
              Close
            </button>
            <button
              data-modal-hide="modalhapust"
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
      <LinkKu linkku="Toko" />

        <button
          class="rounded-full lg:w-auto text-center text-lg shadow-lg p-3 bg-[#2F432D] border px-8 py-2 ml-4 text-white transition duration-300 ease-in-out hover:bg-green-950"
        >
          Tambah Barang
        </button>
        <table class="table-fixed w-full mt-12">
          <thead class="border-b">
            <tr class="">
              <th class="pb-4 text-left w-32">Nama Toko</th>
              <th class="pb-4 text-left w-40">Alamat</th>
              <th class="pb-4 text-left w-32">No Telepon</th>
              <th class="pb-4 text-left">Deskripsi</th>
              <th class="pb-4 text-left w-24">Logo</th>
              <th class="pb-4 text-left">Aksi</th>
            </tr>
          </thead>
          <tbody class="">
            <tr v-for="(dt, i) in datatoko" :key="i" >
              <td>{{ dt.nama }}</td>
              <td>{{ dt.alamat }}</td>
              <td>{{ dt.telp }}</td>
              <td>{{ dt.desk }}</td>
              <td><img src="~/assets/img/punyaku.jpg" alt="" srcset="" class="w-20" /></td>
              <td>
                <div class="flex items-center">
                     <button class="mr-4 bg-gray-200 rounded-lg shadow-lg p-3 hover:bg-gray-300 py-2 px-4 text-md" @click="$router.push('/user-profil/toko/detail-barang-toko')">
                    Detail Barang
                </button>
                  <button data-modal-target="modaleditt"
                    data-modal-toggle="modaleditt" class="mr-4  rounded-full bg-gray-100  shadow-lg p-3  hover:bg-gray-300  text-white transition duration-200 ease-in-out">
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
                  <button data-modal-target="modalhapust"
                    data-modal-toggle="modalhapust" class=" rounded-full bg-red-500 mr-3  shadow-lg p-3  hover:bg-red-600 transition duration-200 ease-in-out ">
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
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
        {
          nama: "Tokoku",
          alamat: "Bekasi, Jawa Barat",
          desk: "deskrip ini deskripsi inii deskripsi",
          telp: "08282828282",
        },
      ],
    };
  },
};
</script>