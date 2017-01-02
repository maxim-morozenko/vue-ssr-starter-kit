<template>
  <div id="app">
    <nav class="navbar navbar-light bg-faded navbar-fixed-top">
      <div class="container">
        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-sm" id="navbarResponsive">
          <a class="navbar-brand" href="#">Navbar</a>
          <ul class="nav navbar-nav">
            <router-link to="/" tag="li" class="nav-item" exact>
              <a class="nav-link">Главная</a>
            </router-link>
            <router-link to="/topics" tag="li" class="nav-item" exact>
              <a class="nav-link">Создать форму</a>
            </router-link>
            <router-link to="/counter" tag="li" class="nav-item" exact>
              <a class="nav-link">Создать опрос</a>
            </router-link>
            <router-link to="/about" tag="li" class="nav-item" exact>
              <a class="nav-link">Статистика</a>
            </router-link>
          </ul>
          <form class="form-inline float-lg-right">
            <input class="form-control" type="text" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <router-view class="container"></router-view>
  </div>
</template>

<style>
  body {
    padding-top: 70px;
    padding-bottom: 30px;
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

    }
  }
</script>
