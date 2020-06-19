# togafw-demo
Demo aparte para el sistema
Este demo debe cargarse en la carpeta APP de https://github.com/bredecl/togafw


En tu base de datos ejecuta esto para crear la primera tabla para el demo:
```
CREATE TABLE todo (
  idtodo INT NOT NULL AUTO_INCREMENT,
  nametodo VARCHAR(255),
  datecreatedtodo DATETIME,
  datedonetodo DATETIME,
  UNIQUE KEY id (idtodo)
  USING BTREE );
```

recuerda configurar las credenciales de tu base de datos en `/settings/db.php`
