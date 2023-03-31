
Steps.

# 1. This repository must be cloned. 
Clonar repositorio

# 2 Execute the following command (Important: 8000 port must be available).
 docker-compose up

# 3 Wait a moment whilst the server is ready, and then execute the following command.
docker-compose exec myapp php artisan migrate --seed

# 4 Open in the navigator the following url: 

http://localhost:8000/subscribers/ 





