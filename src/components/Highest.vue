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
              :to="{ name: 'Detail', params: { kode: item } }"
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
            "https://cf.shopee.co.id/file/edaa2279a314fddae4c27f0967e047e2_tn",
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
          id: 2,
          gambar:
            "https://cf.shopee.co.id/file/ac44583a388bb2ec9f1d70acd91edbc5_tn",
          gambar_alt: "Kyra Set",
          judul: "KYRA SET / HALOZEA / SETELAN BLOOMER ANAK PEREMPUAN",
          harga: "85.000",
          warna: ["Salmon", "Blue", "Lilac"],
          ukuran: ["S", "M", "L", "XL"],
          shopee_link:
            "https://shopee.co.id/KYRA-SET-HALOZEA-SETELAN-BLOOMER-ANAK-PEREMPUAN-i.10616643.9487920992?adsid=0&campaignid=0&position=-1",
          toped_link: "",
        },
        {
          id: 3,
          gambar:
            "https://cf.shopee.co.id/file/4f339f839042bafd9350c6ad9e96b546_tn",
          gambar_alt: "Archie Aubrie Set",
          judul:
            "ARCHIE AUBRIE SET / SETELAN COUPLE ANAK / BAJU SANTAI SETELAN ROK",
          harga: "75.000",
          warna: ["Salmon", "Blue", "Lilac"],
          ukuran: ["S", "M", "L", "XL"],
          shopee_link:
            "https://shopee.co.id/ARCHIE-AUBRIE-SET-SETELAN-COUPLE-ANAK-BAJU-SANTAI-SETELAN-ROK-i.10616643.9387918481?adsid=0&campaignid=0&position=-1",
          toped_link: "",
        },
        {
          id: 4,
          gambar:
            "https://cf.shopee.co.id/file/657ef3be52530692e0bb9f20ec1e7631_tn",
          gambar_alt: "Jack Set",
          judul: "JACK SET / ARKIDSLAND / BAJU ANAK SETELAN ANAK UNISEX",
          harga: "72.500",
          warna: ["Salmon", "Blue", "Lilac"],
          ukuran: ["S", "M", "L", "XL"],
          shopee_link:
            "https://shopee.co.id/JACK-SET-ARKIDSLAND-BAJU-ANAK-SETELAN-ANAK-UNISEX-i.10616643.9486347429?adsid=0&campaignid=0&position=-1",
          toped_link: "",
        },
      ],
    };
  },
};
</script>
