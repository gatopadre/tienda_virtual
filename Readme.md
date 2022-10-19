# Tienda Virutal
## Instalacion Local:
- copíar el codigo a la carpeta htdocs
- importar la base de datos
- cambiar la url en archivo de configuraciones del proyecto

## [No funciona] Instalacion Local:
- hay que modificar el archivo httpd: (/opt/lampp/apache2/conf/httpd.conf)
    <VirtualHost 127.0.0.1:80>
        DocumentRoot "/home/seba/SourceCode/Php/tienda_virtual/"
        ServerName tiendavirtual.local
        ServerAlias tiendavirtual.local
        ServerAdmin admin@tiendavirtual.local
        <Directory "/home/seba/SourceCode/Php/tienda_virtual/">
            Options FollowSymLinks
            AllowOverride None
            Order deny,allow
            Allow from all
            #ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var
            Require all granted
        </Directory>
        #ErrorLog "${APACHE_LOG_DIR}/error.log"
        #CustomLog "${APACHE_LOG_DIR}/access.log" combined
    </VirtualHost>

- modificar el archivo hosts: (/etc/hosts)
    127.0.0.1   tiendavirtual.local

- importar la base de datos

- cambiar la url en archivo de configuraciones del proyecto

## mejoras
- procesar pago, en la parte de poner la direccion de envio, que el campo comuna sea un selector con las comunas del pais
- nombre del documento pdf cambiar factura por orden de compra


