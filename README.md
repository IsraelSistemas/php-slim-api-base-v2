# SLIM API Base v2

### Information

- Author:   @IsraelSistemas
- Channel:  [IsraelSistemas](https://www.youtube.com/user/IsraelSistemas1/)


### Prerequisites

```
1 - XAMPP Server
2 - Composer
```

### Installing

```
1- Move project to htdocs
2- Run: composer install
```

### Using Git
```
Clone the project from github. Change "myproject" to your project name.
git clone https://github.com/IsraelSistemas/php-slim-api-base-v2.git myproject
```

### Run
```
1 - php -S localhost:8888
```

### Composer custom commands 

Before run this commands you need to be into the root (at level of composer.json file). Note: this commands are in beta version.


|	Description		|	Command		|
|-------------------|---------------|
| Create the database and generate the structure you defined into the file generateSeed.sql | composer generateSeed |
| Update the database table with the structure you defined into the file updateSeed.sql | composer updateSeed
| Delete the database (seed) | composer dropSeed |



License ISC
