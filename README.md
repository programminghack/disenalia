##Diseñalia v1.2

Diseñalia es un sistema de blog creado con el framework YOi.

El blog trata principalmente temas de diseño con una orientación a los diseñadores en busca de impulsar su trabajo.

###El sistema funciona gracias a las siguientes tecnologías:

- PHP 5.3 o superior
- Mysql
- Apache o Nginx

Para usar y clonar la plataforma seguir los siguientes comandos, claro una vez teniendo instalado Git en tu computador:

* `cd folder_app/app`
* `git init`
* `git remote add origin https://github.com/programminghack/disenalia.git`
* `git fetch origin`

Y listo tendras el proyecto en tu computador listo para utilizarlo

##Configuración

Entrar al archivo: helpers/system/config/Config.php

```
    <?php
      if (defined('start') || isset($start)) {
      	define("DB_HOST", "localhost"); //Host de la máquina virtual
      	define("DB_USER", "root"); //Usuario Mysql
      	define("DB_PASS", "root"); //Contraseña de Mysql
      	define("DB_NAME", "disenalia"); //Nombre de la base de datos
      	define("DB_CHAR", "utf8");
      }
    ?>
```

Y modificarlo según sus datos correspondientes.
