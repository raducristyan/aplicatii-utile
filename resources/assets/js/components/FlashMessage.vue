<template></template>
<script>
export default {
  name: "FlashMessage",
  props: [
  ],
  data() {
    return {
      activeClass: true,
      fadeIn: 'fadeInDown',
      fadeOut: 'fadeOutUp',
    };
  },

mounted() {
    this.$nextTick(function (){
        this.$emit("open-flash", "flash-message");
    })
},

  methods: {
    closeModal(modal) {
        this.activeClass = false;
        setTimeout(() => {
            this.$emit("close-modal", modal);
        }, 1000);
    },
  }
};
</script>
