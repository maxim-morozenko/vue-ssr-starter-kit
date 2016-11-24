<template>
  <div id="app">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <router-link to="/" tag="li" exact><a>Главная</a></router-link>
              <router-link to="/topics" tag="li" exact><a>Создать форму</a></router-link>
              <router-link to="/counter" tag="li" exact><a>Создать опрос</a></router-link>
              <router-link to="/about" tag="li" exact><a>Статистика</a></router-link>
          </ul>
        </div><!-- /.navbar-collapse -->
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
