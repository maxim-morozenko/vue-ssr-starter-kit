<template>
  <div>
    <div v-for="topic in topics">
      <p>{{topic.title}}</p>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

const fetchInitialData = store => {
  return store.dispatch(`getTopics`)
}
export default {
  name: 'App',
  metaInfo: {
    title: 'Topics'
  },
  prefetch: fetchInitialData,
  computed: {
    ...mapGetters({
      topics: 'getTopics'
    })
  },
  mounted () {
    fetchInitialData(this.$store)
  }
}
</script>
