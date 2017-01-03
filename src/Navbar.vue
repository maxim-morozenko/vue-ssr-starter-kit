<template>
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
        <!--<form class="form-inline float-lg-right">-->
          <!--<input class="form-control" type="text" placeholder="Search">-->
          <!--<button class="btn btn-outline-success" type="submit">Search</button>-->
        <!--</form>-->
      </div>
    </div>
  </nav>
</template>
