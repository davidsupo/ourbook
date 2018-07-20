<template lang="pug">
  v-app#inspire
    v-navigation-drawer(v-model='drawer', fixed='', app='')
      v-list(dense='')
        v-list-tile(@click='')
          v-list-tile-action
            v-icon home
          v-list-tile-content
            v-list-tile-title Home
        v-list-tile(@click='')
          v-list-tile-action
            v-icon contact_mail
          v-list-tile-content
            v-list-tile-title Contact
    v-toolbar(color='indigo', dark='', fixed='', app='')
      v-toolbar-side-icon(@click.stop='drawer = !drawer')
      v-toolbar-title Application
    v-content
      v-container(fluid='', fill-height='')
        v-layout(justify-center='', align-center='')
          v-flex(text-xs-center='')
            router-view

</template>

<script>
export default {
  data: () => ({
    drawer: null
  }),
  props: {
    source: String
  }
};
</script>

<style>
</style>
