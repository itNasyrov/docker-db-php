# docker-db-php

    This repository for demonstration of start of the project on php, mysql, apache in docker

## Instructions

1. **Clone repo:**

   git clone https://github.com/itNasyrov/docker-db-php-example.git

2. **The following only builds the images, does not start the containers:**
   
   docker-compose build

3. **The following builds the images if the images do not exist and starts the containers:**
   
   docker-compose up

4. **If you add the --build option, it is forced to build the images even when not needed:**
   
   docker-compose up --build