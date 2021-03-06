# Group 5 - Health Online

## Continuous Integration & Continuous Delivery

- We're using [Travis CI](https://travis-ci.org/graduit2018/healthonline) to run the tests and automatically deploy to our server on Google Cloud. 

## Contributing

- Current Git workflow: [Gitflow by Vincent Driessen at nvie](https://nvie.com/posts/a-successful-git-branching-model/).

## Development environment

### Installing Docker

* Follow [the official guide](https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/#install-docker-ce) to install Docker CE for Ubuntu
* Follow [the official guide](https://docs.docker.com/engine/installation/linux/linux-postinstall/) to run Docker as a non-root user
* Follow [the official guide](https://docs.docker.com/compose/install/) to install Docker Compose for Ubuntu

### Configuring the application

* copy the docker-compose.yml.example file to docker-compose.yml
* change volumes mapping from ```.:/app``` to your desired path
* once you install Docker, you can start the containers using the Docker Compose

```sh
$ docker-compose up -d
```

* copy the .env.example file to .env
* ssh into app container ```docker exec -it -u 1000:1000 healthonline_app_1 bash```
    * run ```composer install```
    * run ```php artisan key:generate``` to set APP_KEY
    * run ```php artisan storage:link``` to create [public/storage] directory link
* ssh into nodejs container ```docker exec -it -u 1000:1000 healthonline_nodejs_1 bash```
    * run ```npm install``` to install dependencies
    * run ```npm run dev``` to run all Mix tasks
