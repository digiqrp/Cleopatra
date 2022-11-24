# Cleopatra – Clean & Minimal tailwind css Admin Dashboard Template

This is the Laravel 9 implementation of Cleopatra TailWind CSS based admin panel with Laravel 9 and Laravel Breeze 
the project is based upon the work of [Mohamed Said](https://moesaid.com). The original demonstration was supplied 
as a simple flat html project this is an attempt to bridge the gap for other developers to enable them to leverage 
on the example provided with a Laravel 9 project.

Note this Project was and is best developed locally with Docker which is a great development platform, 
please ensure that that you have this installed for your target operating system. 

Docker can be used to provide a consistent environment for developer to craft their solutions, we opted for a raw docker
implementation as opposed to laravel sail so that we did not pollute the base project, this hopefully will serve as 
a fully featured starting point for a Laravel 9.X project.



# Using Npm
Ensure that npm is installed and runnable via the command line.

run the following

`npm install`

then on development, this will auto refresh using vite 

`npm run dev`

for production

`npm run build`

This will build the assets and css ready for development, the first commend does in fact provide auto updates
/ auto build as you code your css etc.

# Docker Usage
This docker implementation splits the normal nginx config used to serve the site into two containers.
php-fpm does not have xdebug loaded, but php-xdebug does, the advantage of this is that the normal ( non debug ui)
runs at full speed only when you enable the listener and the xdebug extension does the debugger get triggered.
We have supplied a sample xdebug config in /docker/php/dev note also that the server name is set in the nginx config file at 
docker nginx/default.conf, this is to enable PHPStorm to correctly pick up the server name when debugging, you should 
modify this server name to suite. however the following entry 

`fastcgi_param SERVER_NAME $host;`

should be sufficient for this purpose.

A useful start command is below this will ensure that your containers / code and config files 
are upto date.

`docker-compose up --build --force-recreate --remove-orphans`

### COMMANDS:
`docker --help`

### List the images on your local system
`docker images`

### remove one of the images
`docker rmi <IMAGE ID>`

### Parse the docker-compose.yml file and run in a detached (background) state (run a project after it's built)
`docker-compose up -d`

### Run project and force container recreation runs in background
`docker-compose up -d --force-recreate`

### Run project rebuilding as required and remove any orphaned containers ( Recommended )
`docker-compose up --force-recreate --remove-orphans --build`

### Stop the running project that was started with -d switch
`docker-compose stop`


### Hard reset environment
restart docker desktop

### clear down and remove all docker containers, networks etc
`docker system prune -a`

### List running containers
`docker ps`

### Stop a container
`docker stop [IMAGE ID]`

### Log into a container

`docker-compose exec mysql bash`

`docker-compose exec cleopatra_php_fpm_1 sh`

`docker-compose exec <container-name> sh`

### REMOVE ALL THE THINGS RM -RF
`docker system prune -a`

### FAQs:
1. Once you've run a build command, you shouldn't have to run it again (even after switching your machine off and on) unless you made changes to the .env file

2. It's advisable (for now) to run composer install via terminal before parsing (running) a project via docker

3. There's no harm in stopping or destroying and rebuilding any docker container (it just can take a bit of time).

4. At the moment we're set up to run one project at the time. If you want to run multiple ones, you can do so by changing the ports in the .env file - they need to be unique for each project.

### INSTALLATION ( contains optional steps for OSX )
This will improve docker performance on OSX.

1. Check if you have Parallels Toolbox; if you don't install it: https://kb.parallels.com/123931

2. Check if you have docker installed
   > docker -v

   If you don't, install Docker: https://docs.docker.com/docker-for-mac/install/; and then verify with the above command;

3 Check which installation of PHP you're using
> which php
