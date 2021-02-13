<template>
  <div class="relative h-10 m-1">
    <div style="border-top: 1px solid #e6e6e6" class="grid grid-cols-6">
      <input
        type="text"
        v-model="message"
        placeholder="Say Something..."
        @keyup.enter="sendMessage()"
        class="col-span-5 outline-none p-1 border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
      />
      <button
        @click="sendMessage()"
        class="place-self-end rounded mt-1 p-1 text-white bg-purple-500 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50"
      >
        Send
      </button>
    </div>
  </div>
</template>
<script>
export default {
  props: ["room"],

  data() {
    return {
      message: "",
    };
  },
  methods: {
    sendMessage() {
      if (this.message == "") {
        return;
      }
      axios
        .post("/chat/room/" + this.room.id + "/message", {
          message: this.message,
        })
        .then((response) => {
          if (response.status == 201) {
            this.message = "";
            this.$emit("messagesent");
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>