<template>
  <div>
    <div class="container px-12 overflow-hidden">
      <div class="grid grid-cols-12">
        <div class="col-span-3 flex justify-between">
          <p>produk</p>
        </div>
        <div class="col-span-2 flex justify-between">
          <p>Harga</p>
        </div>
        <div class="col-span-2 flex justify-between">
          <p>Jumlah</p>
        </div>
        <div class="col-span-2 flex justify-between">
          <p>Total</p>
        </div>
      </div>
      <div class="grid grid-cols-12 gap-12">
        <div class="col-span-8 overflow-y-auto" style="height: 70vh">
          <div class="" v-for="(dtkrj, i) in datakeranjang" :key="i">
            <hr class="my-10" />
            <div class="">
              <div class="grid grid-cols-12">
                <div class="col-span-2 mr-6">
                  <img src="~/assets/img/punyaku.jpg" alt="" srcset="" />
                </div>
                <div class="col-span-2 mr-6">
                  <p class="font-semibold">{{ dtkrj.judul }}</p>
                </div>
                <div class="col-span-2 mr-6">
                  <p class="font-semibold">{{ dtkrj.harga }}</p>
                </div>
                <div class="col-span-2 mr-6">
                  <p class="font-semibold">
                    {{ dtkrj.jumlah }}
                  </p>
                </div>
                <div class="col-span-2">
                  <p class="font-semibold">Rp. 10.000.000</p>
                </div>
                <div class="col-span-2 mr-6">
                  <img src="punyaku.jpg" alt="" srcset="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-4">
          <div class="bg-gray-400 rounded-2xl p-10">
            <p class="font-bold text-black text-full">Rincian Order</p>
            <hr />

            <div class="flex my-2 justify-between">
              <p class="text-gray">Jumlah</p>
              <p class="text-black font-bold">10</p>
            </div>
            <div class="flex my-2 justify-between">
              <p class="text-gray">harga</p>
              <p class="text-black font-bold">Rp. 10.000.000</p>
            </div>
            <!-- <p class="font-bold text-black text-xl">Rincian Order</p> -->
            <hr />
            <div class="flex my-2 justify-between">
              <p class="text-gray">Total Harga</p>
              <p class="text-black font-bold">10</p>
            </div>
            <button
              class="py-2 px-12 font-regulartext-lg border-2 border-black w-full mt-4 text-white bg-green-800 rounded-full"
            >
              CheckOut
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      datakeranjang: [
        { judul: "Xiaomi Lego ver.", harga: "1.000.000", jumlah: "10" },
        { judul: "Xiaomi Lego ver.", harga: "1.000.000", jumlah: "10" },
        { judul: "Xiaomi Lego ver.", harga: "1.000.000", jumlah: "10" },
        { judul: "Xiaomi Lego ver.", harga: "1.000.000", jumlah: "10" },
        { judul: "Xiaomi Lego ver.", harga: "1.000.000", jumlah: "10" },
        { judul: "Xiaomi Lego ver.", harga: "1.000.000", jumlah: "10" },
      ],
    };
  },
};
</script>