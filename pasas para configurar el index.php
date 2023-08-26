<!-- Paso 1: fichero App.php en CodeIgniter 4
Recordamos que este fichero de configuración está en:

/app/Config/App.php
En este fichero deberemos hacer dos cambios. Vayamos por el primero de los cambios, la variable $baseURL:

de
public $baseURL = 'http://localhost:8080';
a
public $baseURL = 'http://localhost/nombre_de_tu_proyecto/';
Ahora toca hacer el segundo cambio en el mismo fichero, que será la variable $uriProtocol

de
public $uriProtocol = 'REQUEST_URI';
a
public $uriProtocol = 'PATH_INFO';
Paso 2: htaccess e index.php
Debemos copiar el fichero .htacces e index.php de la carpeta public a la raiz de nuestro producto:

De
/public/index.php
/public/.htaccess

Moverlos a:
/index.php
/.htaccess
Paso 3: Cambiar index.php
Por último, vamos a editar el index.php que hemos movido a la raiz. Debemos cambiar la variable $pathsPath:

de
$pathsPath = FCPATH . '../app/Config/Paths.php';
a
$pathsPath = FCPATH . 'app/Config/Paths.php';
Con estos tres cambios, deberíamos poder ya visitar nuestro proyecto de forma amigable dejando la url limpia. Si lo hemos dejado en un dominio, deberíamos poder navegar poniendo sólo el dominio (sin public ni index). -->