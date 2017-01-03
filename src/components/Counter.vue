<template>
  <div>
    <button @click='increment'>Increment +1</button>
    <button @click='decrement'>Decrement -1</button>
    <h3>Count is {{ count }}</h3>
  </div>
</template>

<script>
  import {mapGetters, mapActions} from 'vuex'

  export default {
    name: 'App',
    metaInfo: {
      title: 'Counter'
    },
    methods: {
      ...mapActions([
        'increment',
        'decrement'
      ])
    },
    computed: {
      ...mapGetters({
        count: 'getCount'
      })
    }
  }
</script>

<style lang="scss" scoped>
  $color: #560d1a;
  h3 {
    color: $color;
  }
</style>
