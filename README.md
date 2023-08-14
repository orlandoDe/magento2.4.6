Paguelofacil_Gateway
======================

Author: [ramon.olmos90@gmail.com](mailto:ramon.olmos90@gmail.com) actualizado por [orlando.depablos@outlook.com](mailto:orlando.depablos@outlook.com)

Extensión de proveedor de pagos Paguelofacil para Magento v2.

Usted podrá procesar pagos a través de PagueloFacil.

Para obtener más información visite el siguiente enlace [here](https://developers.paguelofacil.com/ecommerce/magento).

Other notes on extension: 

Install
=======

1. Vaya a la carpeta raiz de Magento desde la consola.

2. Ingrese los siguiente comandos a continuación para instalar el modulo.

    ```bash
    composer require paguelofacil-gateway/magento2.4.6
    ```
Esperar mientras las dependencias se actualizan.

3. Ingrese el siguiente comandos para limpiar archivos innecesarios:

 ```bash
    rm -rf vendor/paguelofacil-gateway/
    ```

4. Ahora ejecutamos los comandos de Magento para instalar modulos

    ```bash
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento c:f
    ```
5. Habilite y configure PagueloFacil en Magento Admin sobre Stores->Configuration->Sales->Payment Methods/PagueloFacil o Paguelofacil Link Payment


Uninstall
=======

1. Vaya a la carpeta raiz de Magento desde la consola.

2. Ingrese los siguientes comandos para desinstalar el modulo.

    ```bash
    composer remove paguelofacil-gateway/magento2.4.6
    ```
3. Ingrese el siguiente comandos para limpiar archivos innecesarios:

 ```bash
    rm -rf app/code/Paguelofacil/
    php bin/magento c:f
    ```