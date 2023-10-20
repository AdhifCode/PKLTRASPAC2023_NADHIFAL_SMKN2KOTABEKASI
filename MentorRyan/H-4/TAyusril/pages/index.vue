<template>
  <v-app>
    <v-main>
      <div style="height: 90vh; overflow-y: scroll" ref="messageContainer">
        <v-container>
          <v-row>
            <v-col cols="12">
              <v-card-title class="darken-1 grey--text">
                YusrilGPT
              </v-card-title>
              <div v-if="!pesan.length" class="selection">
                <h1>Welcome to YusrilGPT</h1>
                <ButtonGroup
                  :daftarQnA="daftarQnA"
                  @selectQuestion="selectQuestion"
                  @submitQuestion="takePrompt"
                />
              </div>
              <v-card-text class="pa-6">
                <div
                  v-for="(message, index) in pesan"
                  :key="index"
                  :class="messageClass(message.isBot)"
                >
                  <template v-if="message.loading && message.isBot">
                    <v-skeleton-loader
                      v-bind="attrs"
                      type="text"
                      width="200"
                    ></v-skeleton-loader>
                  </template>
                  <template v-else>
                    {{ message.text }}
                  </template>
                </div>
              </v-card-text>
            </v-col>
          </v-row>
        </v-container>
      </div>

      <v-footer fixed class="d-flex align-center pa-6">
        <v-text-field
          v-model="pesanNew"
          @keyup.enter="takePrompt"
          placeholder="Ketik pesan..."
          hide-details
          dense
          solo
          class="mr-2"
        ></v-text-field>
        <v-btn :disabled="!pesanNew.trim()" @click="takePrompt">
          <v-icon>mdi-send-variant</v-icon>
        </v-btn>
      </v-footer>
    </v-main>
  </v-app>
</template>

<script>
import ButtonGroup from '@/components/ButtonGroup.vue'
import axios from 'axios'

export default {
  components: {
    ButtonGroup,
  },
  data() {
    return {
      pesan: [],
      pesanNew: '',
      daftarQnA: [
        {
          question: 'Bagaimana cara membuat akun?',
        },
        {
          question: 'Apakah ada opsi pendaftaran akun?',
        },
        {
          question: 'Siapakah Jokowi?',
        },
        {
          question: 'Pada tahun berapakah Megawati menjabat sebagai presiden?',
        },
      ],
      promptQuestion: [
        {
          question: '',
          answer: '',
        },
      ],
    }
  },
  methods: {
    takePrompt() {
      this.pesan.push({ text: this.pesanNew, isBot: false, loading: true })
      axios
        .post('http://localhost:8000/chat2', { prompt: this.pesanNew })
        .then((respon) => {
          this.pesan.pop()

          this.promptQuestion.answer = respon.data?.prompt
          console.log(this.promptQuestion.answer)
          if (this.pesanNew.trim() !== '') {
            this.pesan.push({ text: this.pesanNew, isBot: false })
            const pertanyaanUser = this.pesanNew.toLowerCase()
            let jawabanBot =
              'Maaf, saya tidak memiliki jawaban untuk pertanyaan tersebut.'

            for (const qaPair of this.promptQuestion) {
              const question = qaPair.question.toLowerCase()
              if (pertanyaanUser.includes(question)) {
                jawabanBot = this.promptQuestion.answer
                break
              }
            }
            this.pesan.push({ text: jawabanBot, isBot: true })
            this.pesanNew = ''

            this.$nextTick(() => {
              this.scrollToBottom()
            })
          }
        })
    },
    scrollToBottom() {
      const container = this.$refs.messageContainer
      container.scrollTop = container.scrollHeight
    },
    messageClass(isBot) {
      return isBot ? 'message-bot' : 'message-user'
    },
    selectQuestion(question) {
      this.pesanNew = question
    },
  },
}
</script>

<style scoped>
.v-application {
  height: 100vh;
}
.message-bot,
.message-user {
  max-width: 80%;
  background-color: #d6e2ea;
  padding: 10px;
  border-radius: 8px;
  margin-bottom: 10px;
  overflow-y: auto;
  clear: both;
  position: relative;
}

.message-user {
  float: right;
  background-color: #3b81f6;
  color: white;
  border-bottom-right-radius: 0;
  word-break: break-all;
}

.message-bot {
  float: left;
  background-color: #d6e2ea;
  color: black;
  border-bottom-left-radius: 0;
}

.selection {
  display: grid;
  place-items: center;
  height: 85vh;
}

::-webkit-scrollbar {
  width: 0.2rem;
  scroll-behavior: smooth;
}

::-webkit-scrollbar-thumb {
  background: transparent;
}
</style>
