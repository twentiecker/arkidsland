<template>
  <div class="mt-2">
    <div>
      <b-img
        src="https://cf.shopee.co.id/file/f39220cf90463bb0a6b320a448c83ea7"
        fluid
        alt="Your Favourites"
      ></b-img>
    </div>
    <h5 align="left"><strong>Your Favourites</strong></h5>
    <b-card-group deck>
      <b-card
        v-for="item in produk"
        :key="item"
        :img-src="item.gambar"
        :img-alt="item.gambar_alt"
        img-top
      >
        <b-card-text>
          <h6 align="left">
            <router-link
              :to="{ name: 'Detail', params: { kode: item.id } }"
              class="stretched-link"
            >
              <strong>{{ item.judul }}</strong>
            </router-link>
          </h6>
          <p align="left">
            Rp{{ item.harga }} <br />
            Jakarta Pusat
          </p>
        </b-card-text>
      </b-card>
    </b-card-group>
    <!-- <b-card-group deck>
      <b-card
        img-src="https://cf.shopee.co.id/file/49ffeeeb647b3be37c78e311afe15544_tn"
        img-alt="Plisket Set"
        img-top
      >
        <b-card-text>
          <h6 align="left">
            <a
              href="https://shopee.co.id/PLISKET-SET-KALUNAKU-BAJU-ANAK-SETELAN-ANAK-PEREMPUAN-i.10616643.10808611562?adsid=0&campaignid=0&position=-1"
              class="stretched-link"
            >
              <strong
                >PLISKET SET / KALUNAKU / BAJU ANAK SETELAN ANAK
                PEREMPUAN</strong
              ></a
            >
          </h6>
          <p align="left">
            Rp69.000 <br />
            Jakarta Pusat
          </p>
        </b-card-text>
      </b-card>
      <b-card
        img-src="https://cf.shopee.co.id/file/f4a1b2df0a23e1c68f425a0f8dca90d8_tn"
        img-alt="Arya & Amanda Set"
        img-top
      >
        <b-card-text>
          <h6 align="left">
            <a
              href="https://shopee.co.id/ARYA-AMANDA-SET-KALUNAKU-SETELAN-ANAK-BAJU-ANAK-i.10616643.5583229786?adsid=0&campaignid=0&position=-1"
              class="stretched-link"
            >
              <strong
                >ARYA & AMANDA SET | KALUNAKU | SETELAN ANAK BAJU ANAK</strong
              ></a
            >
          </h6>
          <p align="left">
            Rp65.000-105.000 <br />
            Jakarta Pusat
          </p>
        </b-card-text>
      </b-card>

      <b-card
        img-src="https://cf.shopee.co.id/file/bfe1d6f195eaf6ff4ac54fc016a6e06a_tn"
        img-alt="Numeric Set"
        img-top
      >
        <b-card-text>
          <h6 align="left">
            <a
              href="https://shopee.co.id/NUMERIC-SET-LITTLE-CARRA-BAJU-ANAK-SETELAN-ANAK-UNISEX-SETELAN-CELANA-PANJANG-i.10616643.9234159071?adsid=0&campaignid=0&position=-1"
              class="stretched-link"
            >
              <strong
                >NUMERIC SET | LITTLE CARRA | BAJU ANAK SETELAN ANAK UNISEX
                SETELAN CELANA PANJANG</strong
              ></a
            >
          </h6>
          <p align="left">
            Rp79.000 <br />
            Jakarta Pusat
          </p>
        </b-card-text>
      </b-card>
      <b-card
        img-src="https://cf.shopee.co.id/file/764d09d2cac7e19ea2d5f19f894df757_tn"
        img-alt="Knit Cardigan"
        img-top
      >
        <b-card-text>
          <h6 align="left">
            <a
              href="https://shopee.co.id/KNIT-CARDIGAN-JD.BABYKIDS-SWEATER-ANAK-CARDIGAN-ANAK-UNISEX-i.10616643.8520980307?adsid=0&campaignid=0&position=-1"
              class="stretched-link"
            >
              <strong
                >KNIT CARDIGAN | JD.BABYKIDS | SWEATER ANAK CARDIGAN ANAK
                UNISEX</strong
              ></a
            >
          </h6>
          <p align="left">
            Rp68.000 <br />
            Jakarta Pusat
          </p>
        </b-card-text>
      </b-card>
    </b-card-group> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      produk: [
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
};
</script>
