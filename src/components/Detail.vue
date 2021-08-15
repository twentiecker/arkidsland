<template>
  <b-container fluid md class="mt-2">
    <div>
      <b-card no-body class="overflow-hidden" style="max-width: 100%;">
        <b-row no-gutters>
          <b-col md="6">
            <div>
              <b-carousel
                id="carousel-1"
                v-model="slide"
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
                <b-carousel-slide v-for="item in kode.gambar_slide" :key="item">
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
                  <strong>{{ kode.judul }}</strong>
                </h5>
                <h3 align="left" style="color:#FF6600;">Rp{{ kode.harga }}</h3>
                <div class="pt-2">
                  <b-container fluid align="left">
                    <b-row class="mt-2">
                      <b-col><strong>Warna</strong></b-col>
                    </b-row>
                    <b-row>
                      <b-col class="ml-2">
                        <b-button
                          v-for="warna in kode.warna"
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
                          v-for="ukuran in kode.ukuran"
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
                          v-if="kode.shopee_link != ''"
                          :href="kode.shopee_link"
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
                          v-if="kode.toped_link != ''"
                          :href="kode.toped_link"
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
                  <span class="pre-formatted">{{ kode.deskripsi }}</span>
                </div>
              </b-card-text>
            </b-card-body>
          </b-col>
        </b-row>
      </b-card>
    </div>
  </b-container>
</template>

<script>
export default {
  data() {
    return {
      kode: null,
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
