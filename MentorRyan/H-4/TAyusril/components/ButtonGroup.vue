<template>
  <div>
    <v-row>
      <v-col
        v-for="(qaPair, index) in daftarQnA"
        :key="index"
        cols="12"
        lg="6"
        md="6"
        sm="12"
        xs="12"
      >
        <v-btn
          block
          @click="selectQuestion(qaPair.question)"
          class="ma-2"
          color="#3b81f6"
          style="
            display: flex;
            justify-content: flex-start;
            align-items: center;
          "
        >
          <span class="white--text">{{ qaPair.question }}</span>
        </v-btn>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  props: {
    daftarQnA: Array,
  },
  methods: {
    selectQuestion(question) {
      this.$emit('selectQuestion', question)
      this.$emit('submitQuestion')
    },
  },
}
</script>
