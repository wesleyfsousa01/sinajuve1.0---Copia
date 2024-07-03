# Setup

Clone o projeto
```sh
git clone https://gitlab.com/laiane7777/sinajuve1.0
```
```sh
cd sinajuve1.0
```


Copie o arquivo .env.example para um novo arquivo chamado .env com TODO o conteúdo do .env.example
```sh
cp .env.example .env
```
Ex:

![alt text](public/imgs/image-2.png)

Com o docker aberto, rode os containers do projeto (pode demorar um pouco, aproveita e toma um café)
```sh
docker-compose up --build -d
```

Para verificar se tudo ocorreu certo, execute o comando
```sh
docker ps
```
O resultado deve ser algo assim:

![alt text](public/imgs/image.png)


Acesse a linha de comando do projeto
```sh
docker-compose exec app bash
```
Seu usuário vai ficar desse jeito

![alt text](public/imgs/image-1.png)

Execute os seguintes comandos:

```sh
composer install
```
```sh
php artisan key:generate
```
```sh
php artisan migrate
```
```sh
npm install
```

Por fim rode o vite
```sh
npm run dev
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)


Caso queria encerrar o docker
```sh
docker-compose down
```