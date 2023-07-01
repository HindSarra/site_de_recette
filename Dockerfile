FROM php:8.1.21RC1

COPY . /app/myrecipesapp

WORKDIR /app/myrecipesapp

CMD [ "php", "./index.php" ]