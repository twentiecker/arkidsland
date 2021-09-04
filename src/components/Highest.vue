<template>
  <div class="mt-2">
    <div>
      <b-img
        src="https://cf.shopee.co.id/file/1824b681401f44fb63fd8b1475f4197d"
        fluid
        alt="Hot List"
      ></b-img>
    </div>
    <h5 align="left"><strong>Highest Sales</strong></h5>
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
  </div>
</template>
<script>
export default {
  data() {
    return {
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
      ],
    };
  },
};
</script>
