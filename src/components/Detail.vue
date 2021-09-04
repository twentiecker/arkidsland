<template>
  <b-container fluid md class="mt-2">
    <div v-for="barang in produk" :key="barang">
      <div v-if="barang.id == kode">
        <div>
          <b-card no-body class="overflow-hidden" style="max-width: 100%;">
            <b-row no-gutters>
              <b-col md="6">
                <div>
                  <b-carousel
                    id="carousel-1"
                    :interval="4000"
                    controls
                    indicators
                    background="#ababab"
                    img-width="1024"
                    img-height="480"
                    style="text-shadow: 1px 1px 2px #333;"
                  >
                    <!-- Slides with img slot -->
                    <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
                    <b-carousel-slide
                      v-for="item in barang.gambar_slide"
                      :key="item"
                    >
                      <template #img>
                        <img
                          class="d-block img-fluid w-100"
                          width="1024"
                          height="480"
                          :src="item"
                          alt="image slot"
                        />
                      </template>
                    </b-carousel-slide>
                  </b-carousel>
                </div>
                <!-- <b-card-img
              :src="kode.gambar"
              alt="Loli Dress"
              class="rounded-0"
            ></b-card-img> -->
              </b-col>
              <b-col md="6">
                <b-card-body>
                  <b-card-text>
                    <h5 align="left">
                      <strong>{{ barang.judul }}</strong>
                    </h5>
                    <h3 align="left" style="color:#FF6600;">
                      Rp{{ barang.harga }}
                    </h3>
                    <div class="pt-2">
                      <b-container fluid align="left">
                        <b-row class="mt-2">
                          <b-col><strong>Warna</strong></b-col>
                        </b-row>
                        <b-row>
                          <b-col class="ml-2">
                            <b-button
                              v-for="warna in barang.warna"
                              :key="warna"
                              variant="outline-secondary"
                              size="sm"
                              class="m-2"
                              >{{ warna }}</b-button
                            >
                          </b-col>
                        </b-row>
                        <b-row class="mt-2">
                          <b-col><strong>Ukuran</strong></b-col>
                        </b-row>
                        <b-row>
                          <b-col class="ml-2">
                            <b-button
                              v-for="ukuran in barang.ukuran"
                              :key="ukuran"
                              variant="outline-secondary"
                              size="sm"
                              class="m-2"
                              >{{ ukuran }}</b-button
                            >
                          </b-col>
                        </b-row>
                        <b-row class="mt-2">
                          <b-col><strong>Stock</strong></b-col>
                        </b-row>
                        <b-row>
                          <b-col class="ml-2">
                            <p class="m-2 ">Tersedia</p>
                          </b-col>
                        </b-row>
                        <b-row class="mt-2">
                          <b-col><strong>Pemesanan</strong></b-col>
                        </b-row>
                        <b-row>
                          <b-col class="ml-2">
                            <a
                              v-if="barang.shopee_link != ''"
                              :href="barang.shopee_link"
                              rel="noopener noreferrer"
                              target="_blank"
                              ><img
                                src="../assets/shopee.png"
                                class="rounded m-2"
                                fluid
                                alt="Responsive image"
                              />
                            </a>
                            <a
                              v-if="barang.toped_link != ''"
                              :href="barang.toped_link"
                              rel="noopener noreferrer"
                              target="_blank"
                              ><img
                                src="../assets/toped.png"
                                class="rounded m-2"
                                fluid
                                alt="Responsive image"
                              />
                            </a>
                          </b-col>
                        </b-row>
                      </b-container>
                    </div>
                  </b-card-text>
                </b-card-body>
              </b-col>
            </b-row>
          </b-card>
        </div>
        <div class="mt-3">
          <b-card no-body class="overflow-hidden" style="max-width: 100%;">
            <b-row no-gutters>
              <b-col>
                <b-card-body>
                  <b-card-text>
                    <div align="left">
                      <h5>
                        <strong>Deskripsi Produk</strong>
                      </h5>
                      <span class="pre-formatted">{{ barang.deskripsi }}</span>
                    </div>
                  </b-card-text>
                </b-card-body>
              </b-col>
            </b-row>
          </b-card>
        </div>
      </div>
    </div>
  </b-container>
</template>

<script>
export default {
  data() {
    return {
      kode: null,
      produk: [
        {
          id: 1,
          gambar:
            "https://cf.shopee.co.id/file/3dcafb6efbf1509d28ee0750def43ebc",
          gambar_alt: "HILO VEST",
          gambar_slide: [
            "https://cf.shopee.co.id/file/3dcafb6efbf1509d28ee0750def43ebc",
            "https://cf.shopee.co.id/file/e69257bcb1f8576bd5027f4af301b798",
            "https://cf.shopee.co.id/file/4b1f7a32e38d5342a61bbb837594c03f",
            "https://cf.shopee.co.id/file/b5f34a34575f5615fef0485ce6c50b07",
            "https://cf.shopee.co.id/file/a51acf20c5620ae864308f1d08c0cbf6",
            "https://cf.shopee.co.id/file/dd72057b3956ea3ba194b76588d7492d",
            "https://cf.shopee.co.id/file/2ce23fa4a9ab726e4549c1d5d4f3997e",
            "https://cf.shopee.co.id/file/372b117468a1f7db4574157604476fd2",
            "https://cf.shopee.co.id/file/df4ecb571fe08b672fc4ba7b528f9d55",
          ],
          judul: "HILO VEST / ARKIDSLAND / BAJU ANAK VEST ANAK UNISEX",
          harga: "65.000",
          warna: ["Pink", "Cream", "Teracotta", "Brown"],
          ukuran: ["XS", "S", "M", "L"],
          stock: "Tersedia",
          shopee_link:
            "https://shopee.co.id/HILO-VEST-ARKIDSLAND-BAJU-ANAK-VEST-ANAK-UNISEX-i.10616643.3070865895?adsid=0&campaignid=0&position=-1",
          toped_link: "",
          deskripsi:
            "HILO VEST (Unisex)\n\nYeiy ada koleksi terbaru. Vest Rajut anak yang bisa dipakai unisex ini, super keren loh moms buat dijadiin OOTD si kecil..\n\nHarga 65.000\n\nMaterial : Rajut\nModel : Unisex\n\nColour :\nPink\nTerracota\nArmy\nBrown\nCream\n\nSize :\nS - LD 68cm PB 36cm (1-3y)\nM - LD 72cm PB 37cm (3-4y)\nL - LD 76cm PB 41cm (4-6y)\nXL - LD 80cm PB 42cm (5-7y)\n.\n.\n#vestanak #bajuanak #setelananak #dressanak #jualbajuanak #jualdressanak #vestromperanak",
        },
        {
          id: 2,
          gambar:
            "https://cf.shopee.co.id/file/de3005bf5f6da15cb1fc0987376cc35b",
          gambar_alt: "Loli Dress",
          gambar_slide: [
            "https://cf.shopee.co.id/file/de3005bf5f6da15cb1fc0987376cc35b",
            "https://cf.shopee.co.id/file/f68ebfca673bd42f198c872ece45abf4",
            "https://cf.shopee.co.id/file/6e74e08fb12302e96e9635964f420a22",
            "https://cf.shopee.co.id/file/a6295ee2af725a61071e03aae64e9a2e",
            "https://cf.shopee.co.id/file/09e65a889cea20076228d5d5c26922f8",
            "https://cf.shopee.co.id/file/37c75a30afc3e93835911e3072aa14f3",
            "https://cf.shopee.co.id/file/7ccdc3e827486958d93c5c2bdc47675a",
            "https://cf.shopee.co.id/file/ab17ac744ee9ce2a36bb4ff1ece8f63d",
          ],
          judul: "LOLI DRESS / LITTLE.GAW / BAJU ANAK DRESS ANAK PEREMPUAN",
          harga: "82.000",
          warna: ["Salmon", "Blue", "Lilac"],
          ukuran: ["S", "M", "L", "XL"],
          stock: "Tersedia",
          shopee_link:
            "https://shopee.co.id/LOLI-DRESS-LITTLE.GAW-BAJU-ANAK-DRESS-ANAK-PEREMPUAN-i.10616643.9274408318?adsid=0&campaignid=0&position=-1",
          toped_link: "",
          deskripsi:
            "LOLI DRESS \n\nHallo mommy.. Ada koleksi dress terbaru, dress dengan desain simple dan colourfull bikin si kecil makin cantik.. Wah ini sih gak cukup untuk koleksi 1 warna aja, variasi warna pastelnya itu loh bikin kalap buat ambil semuanya 😅😅 \n\n Detail \n• Material : Katun Jepang Original (halus, lembut dan mudah menyerap keringat) \n• Ada renda di bagian leher \n• Ada resleting jepang di bagian punggung \n• Ada ruffle di bagian bawah dress \n\nColour : \nSalmon \nBlue \nLilac \n\nSize : \nS (1-2y) LD 30cm \nM (2-3y) LD 32cm \nL (4-5y) LD 34cm \nXL (5-6y) LD 36cm \n*Mohon untuk mengukur anak sebelum membeli, umur bukanlah patokan, detail size ada di slide terakhir \n. \n. \n#bajuanak #dressanak #dressanakmurah #bajuanakmurah #kidsdailywear",
        },
        {
          id: 3,
          gambar:
            "https://cf.shopee.co.id/file/98206c4a1aeee15335453a7b981af223",
          gambar_alt: "NUMERIC SET",
          gambar_slide: [
            "https://cf.shopee.co.id/file/98206c4a1aeee15335453a7b981af223",
            "https://cf.shopee.co.id/file/a09c2db7776dc423de36b8ef2ec2bdfd",
            "https://cf.shopee.co.id/file/2e2741819d588abc2297999a0d903bfc",
            "https://cf.shopee.co.id/file/5d38624c7ccc5dea38400a6fc54969b2",
            "https://cf.shopee.co.id/file/5d38624c7ccc5dea38400a6fc54969b2",
            "https://cf.shopee.co.id/file/7778fdda99c5dd9bd951293d4b24df08",
            "https://cf.shopee.co.id/file/fa46fb7790a4cdabd140fc8e5e7bd36e",
            "https://cf.shopee.co.id/file/8ff44b12be53cae6ef2684fdcdbb3157",
            "https://cf.shopee.co.id/file/ee6c9b0e9e35088764c15550b08df03c",
          ],
          judul:
            "NUMERIC SET | LITTLE CARRA | BAJU ANAK SETELAN ANAK UNISEX SETELAN CELANA PANJANG",
          harga: "79.000",
          warna: [
            "One - Dark Peach",
            "Two - Dusty Pink",
            "Three - Sage Green",
            "Four - Almond",
            "Five - Lavender",
            "Six - Olive Green",
            "Eight - Blue",
            "Nine - Honey",
          ],
          ukuran: ["S", "M", "L"],
          stock: "Tersedia",
          shopee_link:
            "https://shopee.co.id/NUMERIC-SET-LITTLE-CARRA-BAJU-ANAK-SETELAN-ANAK-UNISEX-SETELAN-CELANA-PANJANG-i.10616643.9234159071?adsid=0&campaignid=0&position=-1",
          toped_link: "",
          deskripsi:
            "NUMERIC SET\n\nSetelan Unisex dengan atasan lengan pendek dan celana panjang ini hadir dengan pilihan 9 warna yang super gemesh.. Dengan aksen angka yang berbeda-beda untuk masing2 warnanya.. Nyaman banget ini untuk dipakai santai, jalan2 dan main di rumah..\n\nHarga 79.000\n\nDetail :\n* Terbuat dari bahan katun combed\n* Ada karet di pinggang celana\n* Ada aksen sablon angka di bagian dada dan punggung belakang\n\nColour :\nOne - Dark Peach\nTwo - Dusty Pink\nThree - Sage Green\nFour - Almond\nFive - Lavender\nSix - Olive Green\nSeven - Autumn Orange\nEight - Blue\nNine - Honey\n\nSize :\nS (1-2th) - LD 32cm\nM (3-4th) - LD 35cm\nL (5-6th) - LD 37cm\n*Umur bukanlah patokan, jadi harap mengukur anak terlebih dahulu sebelum membeli, detail size ada di slide terakhir\n\nTerima kasih!",
        },
        {
          id: 4,
          gambar:
            "https://cf.shopee.co.id/file/80392d0c04d6c2c40ca8944e315e4715",
          gambar_alt: "CERIA DRESS",
          gambar_slide: [
            "https://cf.shopee.co.id/file/80392d0c04d6c2c40ca8944e315e4715",
            "https://cf.shopee.co.id/file/832389a278ffa2d933af7dddc84dc52e",
            "https://cf.shopee.co.id/file/b9113713ab3c2facf3c37bc606831198",
            "https://cf.shopee.co.id/file/d425240933cb67564e1faa79546768f1",
            "https://cf.shopee.co.id/file/4f605ec41adfb6418b6d958c44dc7309",
            "https://cf.shopee.co.id/file/2f745b8f1dd81911e70f103077509ee0",
            "https://cf.shopee.co.id/file/cfc9360d8770801b1f4c3c271bfceb38",
          ],
          judul: "CERIA DRESS / ARKIDSLAND / DRESS ANAK BAJU ANAK PEREMPUAN",
          harga: "57.000",
          warna: ["Rose", "Baby Pink", "Leaf", "Yellow"],
          ukuran: ["S", "M", "L"],
          stock: "Tersedia",
          shopee_link:
            "https://shopee.co.id/CERIA-DRESS-ARKIDSLAND-DRESS-ANAK-BAJU-ANAK-PEREMPUAN-i.10616643.11428769940?adsid=0&campaignid=0&position=-1",
          toped_link: "",
          deskripsi:
            "Hallo mommy, kenalin nih New Arrival di Arkidsland, CERIA DRESS, Bahannya super adem , pilihan motifnya keren-keren banget..\n\nBahan adem katun rayon semi Twill..\n\nUkuran 1-6tahun \n Size chart \n\nSize s (1-3 tahun) \nLingkar Dada 60 cm\nPanjang Baju 52 cm\n\nSize M (4-5tahun) \nLingkar Dada 66 cm\nPanjang Baju 55 cm\n\nSize L (6-7tahun) \nLingkar Dada 74 cm\nPanjang Baju 62 cm\n\n\n#onesetrayonanak  #onesetanakmurah  #setelanrayonanak  #setelanrayonviscose  #setelanrayonanakmurah  #rayonviscose  #rayonanakmurah  #rayonanaklucu  #bandung #bajuanak #bajuanakmurah #dailywearanak #bajumainanak  #setelancewek #bajutidurcewek #bajuanakperempuan #rayonanaklucu #rayonanakpolos #mimykids.id #piyamarayonanak #piyamaanakcewek #bajuanakadem #bajutiduranak #bajumainanak #bajurimahan #dasteranak #setpiyamaanak #dasteranak #dressrayonanak #dresspolosanak #homedressanak #dressrumahananak #bajuademanak",
        },
        {
          id: 5,
          gambar:
            "https://cf.shopee.co.id/file/72c87097c2d1a2708317633cfb32e821",
          gambar_alt: "PLISKET SET",
          gambar_slide: [
            "https://cf.shopee.co.id/file/72c87097c2d1a2708317633cfb32e821",
            "https://cf.shopee.co.id/file/a1ebeb0222fe4b08926d190659eef20f",
            "https://cf.shopee.co.id/file/ba3dc4b8155f41ba41c2cda79a469fb0",
            "https://cf.shopee.co.id/file/2185cbe2e18d756861fb2efcfe96566b",
            "https://cf.shopee.co.id/file/e5384d1c58088adb9edbca03f8b1de47",
            "https://cf.shopee.co.id/file/2530345cac152105ac963e2de3a99f85",
          ],
          judul: "PLISKET SET / KALUNAKU / BAJU ANAK SETELAN ANAK PEREMPUAN",
          harga: "69.000",
          warna: ["Hitam Cream", "Mauve"],
          ukuran: ["S", "M", "L"],
          stock: "Tersedia",
          shopee_link:
            "https://shopee.co.id/PLISKET-SET-KALUNAKU-BAJU-ANAK-SETELAN-ANAK-PEREMPUAN-i.10616643.10808611562?adsid=0&campaignid=0&position=-1",
          toped_link: "",
          deskripsi:
            "READY SOON\n\nPlisket Set by Kalunaku\n\nHalo moms, siapa yang nungguin plisket set ini, acung tangannn?? \n\nAh klo produknya Kalunaku udah pasti lucu - lucu dan auto bikin kita order ya mom 😍😍\n\nTop : Rib (stretch)\nPants : Plisket\n\nColor : \nMauve\nPink - Pink\nHitam - Cream\n\nSize : S, M, L\n⏩⏩ Next slide for size chart\n\nIdr 69.000 (BEST PRICE)\n\nThank you moms and dads 🤗❤️",
        },
        {
          id: 6,
          gambar:
            "https://cf.shopee.co.id/file/af183b24ce849a6aa8e73c8b34540927",
          gambar_alt: "ARYA & AMANDA SET",
          gambar_slide: [
            "https://cf.shopee.co.id/file/af183b24ce849a6aa8e73c8b34540927",
            "https://cf.shopee.co.id/file/1d2202216b4a38d043025d93e5f6233e",
            "https://cf.shopee.co.id/file/f50ff12df2d3cede9608101a2480557e",
            "https://cf.shopee.co.id/file/0c149e2eb03adc872cd9fdab2bfd1027",
            "https://cf.shopee.co.id/file/eb3807476b66448d2323f710628ef738",
            "https://cf.shopee.co.id/file/389cfbc7a842650a4f2eaa1c6e835b31",
            "https://cf.shopee.co.id/file/eb79ea6d937dcce3c0c87c5a80baa020",
            "https://cf.shopee.co.id/file/6db53d2cafe149b86cebe3e87a5afaea",
            "https://cf.shopee.co.id/file/19fc3efcfaf384a9083e7ef980814223",
          ],
          judul: "ARYA & AMANDA SET | KALUNAKU | SETELAN ANAK BAJU ANAK",
          harga: "65.000 - Rp105.000",
          warna: [
            "Amanda-Golden Brown",
            "Amanda-Khaki",
            "Arya-Golden Brown",
            "Arya-Terracotta",
            "Arya-Khaki",
            "Kemeja-Golden Brown",
            "Kemeja-Terracotta",
            "Kemeja-Khaki",
            "Kemeja-Lilac",
          ],
          ukuran: ["S", "M", "L", "All Size"],
          stock: "Tersedia",
          shopee_link:
            "https://shopee.co.id/ARYA-AMANDA-SET-KALUNAKU-SETELAN-ANAK-BAJU-ANAK-i.10616643.5583229786?adsid=0&campaignid=0&position=-1",
          toped_link: "",
          deskripsi:
            "BACK in STOCK !!\n\nARYA SET &\nAMANDA SET\n\nYeiy akhirnya setelan couple ini hadir kembali moms, yang uda tanyain setelan ini kemarin2, jangan sampai kehabisan lagi ya 🥰🥰\n\nMaterial : Bahan katun alina (mirip bahan linen, tenang aja adem kok moms)\n\nHarga :\nArya set - 79.000\nAmanda set - 65.000\nKemeja Mommy - 105.000\n\nColours : Choco, Cream, Terracota, Lilac (hanya untuk amanda set)\n\nSize :\nAmanda Set - S(1-2y) M(2-3y) L(3-4y)\nArya Set - S(1-2y) M(2-3y) L(4-5y)\nKemej Mommy - Lingkar dada kemeja mommy  118 cm\n panjang  70 cm\nDetail size ada di slide pic terakhir \n\n*Harap mengukur anak sebelum membeli, umur bukanlah patokan, karena kondisi tiap anak berbeda-beda",
        },
        {
          id: 8,
          gambar:
            "https://cf.shopee.co.id/file/764d09d2cac7e19ea2d5f19f894df757",
          gambar_alt: "KNIT CARDIGAN",
          gambar_slide: [
            "https://cf.shopee.co.id/file/764d09d2cac7e19ea2d5f19f894df757",
            "https://cf.shopee.co.id/file/c5349021059f4214d283da68bfaa7f21",
            "https://cf.shopee.co.id/file/26204979a8a60d9a3a36513cef5e4c67",
            "https://cf.shopee.co.id/file/5858ae43e6b38d881f30ca20b7d6f15f",
            "https://cf.shopee.co.id/file/bf82a9394445c0a6bf23201d91f8cebd",
            "https://cf.shopee.co.id/file/445419debcb83cf7850518789f312b1e",
            "https://cf.shopee.co.id/file/3c01b8a8dda277e80d8aa2e870fe0754",
            "https://cf.shopee.co.id/file/a42ae8d8151c343d71f39b32b68a410b",
          ],
          judul:
            "KNIT CARDIGAN | JD.BABYKIDS | SWEATER ANAK CARDIGAN ANAK UNISEX",
          harga: "68.000",
          warna: ["Kids Mauve", "Kids Olive", "Leaf", "Yellow"],
          ukuran: ["S (18mo+)", "M (3y)"],
          stock: "Tersedia",
          shopee_link:
            "https://shopee.co.id/KNIT-CARDIGAN-JD.BABYKIDS-SWEATER-ANAK-CARDIGAN-ANAK-UNISEX-i.10616643.8520980307?adsid=0&campaignid=0&position=-1",
          toped_link: "",
          deskripsi:
            'KNIT CARDIGAN (Unisex)\n\nYey, akhirnya "Back in stock" cardigan yang ditunggu - tunggu 😍😍 \n\nBahan : Knit\n\nSifat : premium, stretch, nyaman, lembut, tahan lama dan tidak berbulu\n\nKancing : premium\n\nsize chart :\nKids :\nS (18m+) : LD 32, P 39\nM (3-4y) : LD 36, P 42\nL (4y+) : LD 39, P 46\n*usia hanya estimasi \n\n\nWarna : Mauve, Olive, Mustard, Powder Blue, Latte\n\nHarga : \nKids : Idr 68.000\n\nThank you moms and dads ❤️',
        },
      ],
    };
  },
  created() {
    this.kode = this.$route.params.kode;
  },
};
</script>

<style>
.pre-formatted {
  white-space: pre-wrap;
  overflow-x: auto;
}
</style>
