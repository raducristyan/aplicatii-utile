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
      hidden: false
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
            this.$emit("close-modal", modal);
            this.hidden = true;
    },
  }
};
</script>
