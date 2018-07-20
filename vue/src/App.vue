<template lang="pug">
  transition(name='fade' mode='out-in')
    router-view
</template>

<script>
export default {
  name: 'app',  
}
</script>

<style>
.cursor-pointer{
  cursor: pointer;
}
.fade-enter-active {
  transition: opacity .2s ease;
}
.fade-leave-active {
  transition: opacity .4s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}

</style>
