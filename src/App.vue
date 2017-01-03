<template>
  <div id="app">
    <navbar></navbar>
    <transition name="fade">
      <router-view class="container"></router-view>
    </transition>
  </div>
</template>

<style>
  body {
    padding-top: 70px;
    padding-bottom: 30px;
  }

  .fade-enter-active{
    transition: opacity .4s ease;
  }
  .fade-leave-active {
    transition: opacity .1s ease;
  }
  .fade-enter, .fade-leave-active {
    opacity: 0
  }
</style>

<script>
  export default {
    name: 'App',
    metaInfo: {
      meta: [
        {charset: 'utf-8'},
        {name: 'viewport', content: 'width=device-width, initial-scale=1'},
        {vmid: 'description', name: 'description', content: 'Example description in vue ssr'},
        {vmid: 'keywords', name: 'keywords', content: 'Keywords, vue, ssr, rendering'}
      ],
      link: [
        {rel: 'stylesheet', href: 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'}
//        { rel: 'stylesheet', href: 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' }
//        { rel: 'favicon', src: 'favicon.ico' }
      ],
      script: [
        {src: 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'},
        {src: 'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js'},
        {src: 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js'}
//        { src: 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' }
      ],
      // if no subcomponents specify a metaInfo.title, this title will be used
      title: 'Default Title',
      // all titles will be injected into this template
      titleTemplate: '%s | My Awesome Webapp'
    },
    components: {
      'navbar': require('./Navbar.vue')
    }
  }
</script>
