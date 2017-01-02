# vue-ssr-starter-kit

> A Vue.js project with vue 2.0, vue-router, vue-meta and vuex starter kit for server side rendering.

##Deploy
1. Compile you app:
```bash
npm run build
```
2. Change settings in deploy.php (marked UpperCASE like CHANGE_IP)
3. Before deploy - install deployer (This php tool for deploy):
```bash
sudo composer install deployer -g
```
4. Commit and push your changes in to git repo
5. Run deploy
```bash
dep depploy
```

## Build Setup

``` bash
npm install
npm run build
npm start
```

## Devlopment Setup

```bash
npm install
npm run dev
```

##Nginx config
```
server {
     listen 80;
     listen 443;
     server_name your-domain.com;
     location / {
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection "upgrade";
        proxy_http_version 1.1;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header Host $host;
        proxy_pass http://127.0.0.1:3000;
     }
}
```

## Reference resources

[vue-ssr-demo](https://github.com/yyx990803/vue-ssr-demo)

[vue-hackernews-2.0](https://github.com/vuejs/vue-hackernews-2.0)

## License

[MIT](http://opensource.org/licenses/MIT)
