<template>
  <div>
    <h1>Hello you</h1>
    <v-footer fixed>
      <div class="text-center">
        <v-menu
          v-model="menu"
          :close-on-content-click="false"
          :nudge-width="200"
          offset-x
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn color="indigo" dark v-bind="attrs" v-on="on" icon> P</v-btn>
          </template>

          <nuxt-link to="/" class="text-decoration-none">
            <v-card tag="a">
              <v-list>
                <v-list-item>
                  <v-list-item-avatar>
                    <img src="~/assets/chatbot.png" alt="John" />
                  </v-list-item-avatar>

                  <v-list-item-content>
                    <v-list-item-title>YusrilGPT</v-list-item-title>
                    <v-list-item-subtitle
                      >Tanyakan Pertanyaanmu Disini</v-list-item-subtitle
                    >
                  </v-list-item-content>

                  <v-list-item-action>
                    <v-btn
                      :class="fav ? 'blue--text' : ''"
                      icon
                      @click="fav = !fav"
                    >
                      <v-icon>mdi-robot</v-icon>
                    </v-btn>
                  </v-list-item-action>
                </v-list-item>
              </v-list>
            </v-card>
          </nuxt-link>
        </v-menu>
      </div>
    </v-footer>
  </div>
</template>

<script>
export default {
  data: () => ({
    fav: true,
  }),
}
</script>