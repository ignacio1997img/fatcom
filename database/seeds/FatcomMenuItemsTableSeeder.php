<?php

use Illuminate\Database\Seeder;

class FatcomMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Inicio',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dashboard',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2019-05-13 22:44:12',
                'updated_at' => '2019-05-13 20:32:34',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2019-05-13 22:44:12',
                'updated_at' => '2020-09-03 20:44:05',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 1,
                'created_at' => '2019-05-13 22:44:12',
                'updated_at' => '2019-05-13 20:33:34',
                'route' => 'voyager.users.index',
                'parameters' => 'null',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tag',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 2,
                'created_at' => '2019-05-13 22:44:13',
                'updated_at' => '2019-05-13 20:35:12',
                'route' => 'voyager.roles.index',
                'parameters' => 'null',
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Herramientas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-treasure',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2019-05-13 22:44:14',
                'updated_at' => '2020-09-11 16:58:56',
                'route' => NULL,
                'parameters' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2019-05-13 22:44:14',
                'updated_at' => '2020-09-03 20:44:05',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2019-05-13 22:44:14',
                'updated_at' => '2020-09-03 20:44:05',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2019-05-13 22:44:14',
                'updated_at' => '2020-09-03 20:44:05',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2019-05-13 22:44:14',
                'updated_at' => '2020-09-03 20:44:05',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Configuraci??n',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => 64,
                'order' => 1,
                'created_at' => '2019-05-13 22:44:14',
                'updated_at' => '2019-07-09 16:03:30',
                'route' => 'voyager.settings.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 6,
                'created_at' => '2019-05-13 22:44:44',
                'updated_at' => '2020-09-03 20:44:05',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Permisos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-certificate',
                'color' => '#000000',
                'parent_id' => 16,
                'order' => 3,
                'created_at' => '2019-05-14 00:22:05',
                'updated_at' => '2019-05-13 20:34:19',
                'route' => 'voyager.permissions.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Seguridad',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2019-05-14 00:22:31',
                'updated_at' => '2020-02-18 17:06:16',
                'route' => NULL,
                'parameters' => '',
            ),
            13 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Inventario',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2019-05-13 22:57:48',
                'updated_at' => '2020-02-18 17:06:16',
                'route' => NULL,
                'parameters' => '',
            ),
            14 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Depositos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-archive',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 2,
                'created_at' => '2019-05-13 22:59:31',
                'updated_at' => '2019-05-18 18:12:38',
                'route' => 'depositos_index',
                'parameters' => 'null',
            ),
            15 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Productos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-harddrive',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 3,
                'created_at' => '2019-05-13 22:59:31',
                'updated_at' => '2019-05-22 19:29:30',
                'route' => 'productos_index',
                'parameters' => 'null',
            ),
            16 => 
            array (
                'id' => 26,
                'menu_id' => 1,
                'title' => 'Sucursales',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-home',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 1,
                'created_at' => '2019-05-16 22:25:18',
                'updated_at' => '2019-11-28 23:18:31',
                'route' => 'sucursales_index',
                'parameters' => 'null',
            ),
            17 => 
            array (
                'id' => 30,
                'menu_id' => 1,
                'title' => 'Categorias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 8,
                'created_at' => '2019-05-18 18:42:51',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'voyager.categorias.index',
                'parameters' => 'null',
            ),
            18 => 
            array (
                'id' => 32,
                'menu_id' => 1,
                'title' => 'Unidades',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bar-chart',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 6,
                'created_at' => '2019-05-20 18:15:00',
                'updated_at' => '2020-09-03 20:44:14',
                'route' => 'voyager.unidades.index',
                'parameters' => 'null',
            ),
            19 => 
            array (
                'id' => 33,
                'menu_id' => 1,
                'title' => 'Marcas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tag',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 10,
                'created_at' => '2019-05-20 18:21:55',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'voyager.marcas.index',
                'parameters' => 'null',
            ),
            20 => 
            array (
                'id' => 34,
                'menu_id' => 1,
                'title' => 'Tallas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-ticket',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 3,
                'created_at' => '2019-05-20 18:26:56',
                'updated_at' => '2019-06-14 21:43:49',
                'route' => 'voyager.tallas.index',
                'parameters' => 'null',
            ),
            21 => 
            array (
                'id' => 35,
                'menu_id' => 1,
                'title' => 'Tama??os',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-resize-full',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 4,
                'created_at' => '2019-05-20 18:28:40',
                'updated_at' => '2020-09-03 20:44:14',
                'route' => 'voyager.tamanios.index',
                'parameters' => 'null',
            ),
            22 => 
            array (
                'id' => 36,
                'menu_id' => 1,
                'title' => 'Colores',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-paint-bucket',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 2,
                'created_at' => '2019-05-20 18:35:24',
                'updated_at' => '2019-06-14 21:43:44',
                'route' => 'voyager.colores.index',
                'parameters' => 'null',
            ),
            23 => 
            array (
                'id' => 37,
                'menu_id' => 1,
                'title' => 'Generos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 5,
                'created_at' => '2019-05-20 18:59:35',
                'updated_at' => '2020-09-03 20:44:14',
                'route' => 'voyager.generos.index',
                'parameters' => 'null',
            ),
            24 => 
            array (
                'id' => 38,
                'menu_id' => 1,
                'title' => 'Usos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lightbulb',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 7,
                'created_at' => '2019-05-20 21:02:16',
                'updated_at' => '2020-09-03 20:44:14',
                'route' => 'voyager.usos.index',
                'parameters' => 'null',
            ),
            25 => 
            array (
                'id' => 40,
                'menu_id' => 1,
                'title' => 'Monedas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dollar',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 1,
                'created_at' => '2019-05-22 22:29:41',
                'updated_at' => '2019-06-14 21:43:38',
                'route' => 'voyager.monedas.index',
                'parameters' => 'null',
            ),
            26 => 
            array (
                'id' => 42,
                'menu_id' => 1,
                'title' => 'Ofertas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-certificate',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 6,
                'created_at' => '2019-05-27 17:36:04',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'ofertas_index',
                'parameters' => 'null',
            ),
            27 => 
            array (
                'id' => 43,
                'menu_id' => 1,
                'title' => 'E-commerce',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-basket',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 7,
                'created_at' => '2019-05-28 16:39:06',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'ecommerce_index',
                'parameters' => NULL,
            ),
            28 => 
            array (
                'id' => 44,
                'menu_id' => 1,
                'title' => 'Ingresos y egresos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2019-06-14 16:32:04',
                'updated_at' => '2020-02-18 17:06:16',
                'route' => NULL,
                'parameters' => '',
            ),
            29 => 
            array (
                'id' => 45,
                'menu_id' => 1,
                'title' => 'Cajas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-treasure',
                'color' => '#000000',
                'parent_id' => 44,
                'order' => 1,
                'created_at' => '2019-06-14 16:32:26',
                'updated_at' => '2019-06-14 16:39:26',
                'route' => 'cajas_index',
                'parameters' => 'null',
            ),
            30 => 
            array (
                'id' => 46,
                'menu_id' => 1,
                'title' => 'Registros',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => 44,
                'order' => 2,
                'created_at' => '2019-06-14 19:08:23',
                'updated_at' => '2019-06-14 19:08:33',
                'route' => 'asientos_index',
                'parameters' => NULL,
            ),
            31 => 
            array (
                'id' => 47,
                'menu_id' => 1,
                'title' => 'Insumos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-puzzle',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 4,
                'created_at' => '2019-06-14 21:19:57',
                'updated_at' => '2019-06-18 18:26:15',
                'route' => 'voyager.insumos.index',
                'parameters' => NULL,
            ),
            32 => 
            array (
                'id' => 48,
                'menu_id' => 1,
                'title' => 'M??dulo de Compras',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-shop',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2019-06-14 21:34:23',
                'updated_at' => '2020-02-18 17:06:50',
                'route' => NULL,
                'parameters' => '',
            ),
            33 => 
            array (
                'id' => 49,
                'menu_id' => 1,
                'title' => 'Parametros',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-06-14 21:43:08',
                'updated_at' => '2020-09-03 20:44:18',
                'route' => NULL,
                'parameters' => '',
            ),
            34 => 
            array (
                'id' => 50,
                'menu_id' => 1,
                'title' => 'Compras',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-buy',
                'color' => '#000000',
                'parent_id' => 48,
                'order' => 1,
                'created_at' => '2019-06-18 18:26:01',
                'updated_at' => '2019-06-18 18:27:15',
                'route' => 'compras_index',
                'parameters' => 'null',
            ),
            35 => 
            array (
                'id' => 51,
                'menu_id' => 1,
                'title' => 'Proveedores',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => 48,
                'order' => 2,
                'created_at' => '2019-06-18 21:32:00',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'voyager.proveedores.index',
                'parameters' => 'null',
            ),
            36 => 
            array (
                'id' => 52,
                'menu_id' => 1,
                'title' => 'M??dulo de Ventas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-basket',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2019-06-19 15:06:09',
                'updated_at' => '2020-02-18 17:06:50',
                'route' => NULL,
                'parameters' => '',
            ),
            37 => 
            array (
                'id' => 53,
                'menu_id' => 1,
                'title' => 'Ventas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 1,
                'created_at' => '2019-06-19 15:06:50',
                'updated_at' => '2019-06-19 15:06:58',
                'route' => 'ventas_index',
                'parameters' => NULL,
            ),
            38 => 
            array (
                'id' => 56,
                'menu_id' => 1,
                'title' => 'Pasarelas de Pagos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-wallet',
                'color' => '#000000',
                'parent_id' => 64,
                'order' => 3,
                'created_at' => '2019-06-20 22:23:35',
                'updated_at' => '2019-11-29 17:31:21',
                'route' => 'voyager.pasarela-pagos.index',
                'parameters' => 'null',
            ),
            39 => 
            array (
                'id' => 58,
                'menu_id' => 1,
                'title' => 'Pedidos asignados',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => '#000000',
                'parent_id' => 68,
                'order' => 2,
                'created_at' => '2019-06-22 20:11:32',
                'updated_at' => '2019-07-26 15:07:04',
                'route' => 'delivery_index',
                'parameters' => 'null',
            ),
            40 => 
            array (
                'id' => 60,
                'menu_id' => 1,
                'title' => 'Empleados',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2019-07-05 19:24:24',
                'updated_at' => '2020-02-18 17:06:50',
                'route' => 'empleados_index',
                'parameters' => NULL,
            ),
            41 => 
            array (
                'id' => 61,
                'menu_id' => 1,
                'title' => 'Clientes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 2,
                'created_at' => '2019-07-05 22:09:46',
                'updated_at' => '2019-11-27 16:03:00',
                'route' => 'clientes_index',
                'parameters' => NULL,
            ),
            42 => 
            array (
                'id' => 63,
                'menu_id' => 1,
                'title' => 'Dosificaiones',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-key',
                'color' => '#000000',
                'parent_id' => 64,
                'order' => 4,
                'created_at' => '2019-07-09 14:47:59',
                'updated_at' => '2019-11-29 17:31:21',
                'route' => 'dosificaciones_index',
                'parameters' => 'null',
            ),
            43 => 
            array (
                'id' => 64,
                'menu_id' => 1,
                'title' => 'Ajustes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2019-07-09 16:02:33',
                'updated_at' => '2020-09-11 16:58:56',
                'route' => NULL,
                'parameters' => '',
            ),
            44 => 
            array (
                'id' => 65,
                'menu_id' => 1,
                'title' => 'Estados de la venta',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-info-circled',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 9,
                'created_at' => '2019-07-13 15:11:41',
                'updated_at' => '2020-09-03 20:44:14',
                'route' => 'voyager.ventas-estados.index',
                'parameters' => 'null',
            ),
            45 => 
            array (
                'id' => 66,
                'menu_id' => 1,
                'title' => 'Tipos de venta',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => '#000000',
                'parent_id' => 49,
                'order' => 8,
                'created_at' => '2019-07-24 21:54:55',
                'updated_at' => '2020-09-03 20:44:14',
                'route' => 'voyager.ventas-tipos.index',
                'parameters' => 'null',
            ),
            46 => 
            array (
                'id' => 67,
                'menu_id' => 1,
                'title' => 'Estados de tipos de venta',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-forward',
                'color' => NULL,
                'parent_id' => 49,
                'order' => 10,
                'created_at' => '2019-07-24 22:01:58',
                'updated_at' => '2020-09-03 20:44:14',
                'route' => 'voyager.ventas-detalle-tipo-estados.index',
                'parameters' => NULL,
            ),
            47 => 
            array (
                'id' => 68,
                'menu_id' => 1,
                'title' => 'Delivery',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2019-07-26 14:38:43',
                'updated_at' => '2020-09-03 20:44:18',
                'route' => NULL,
                'parameters' => '',
            ),
            48 => 
            array (
                'id' => 69,
                'menu_id' => 1,
                'title' => 'Administraci??n',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => 68,
                'order' => 1,
                'created_at' => '2019-07-26 14:40:42',
                'updated_at' => '2019-07-26 15:07:03',
                'route' => 'delivery_admin_index',
                'parameters' => 'null',
            ),
            49 => 
            array (
                'id' => 70,
                'menu_id' => 1,
                'title' => 'Gr??ficos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-pie-graph',
                'color' => '#000000',
                'parent_id' => 75,
                'order' => 1,
                'created_at' => '2019-08-10 20:56:26',
                'updated_at' => '2019-10-09 15:23:25',
                'route' => 'graficos_index',
                'parameters' => 'null',
            ),
            50 => 
            array (
                'id' => 72,
                'menu_id' => 1,
                'title' => 'Localidades',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-location',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 11,
                'created_at' => '2019-08-15 21:42:31',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'voyager.localidades.index',
                'parameters' => 'null',
            ),
            51 => 
            array (
                'id' => 73,
                'menu_id' => 1,
                'title' => 'Cuentas por cobrar',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dollar',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 3,
                'created_at' => '2019-08-27 22:22:56',
                'updated_at' => '2020-02-18 17:06:45',
                'route' => 'ventas_credito_index',
                'parameters' => NULL,
            ),
            52 => 
            array (
                'id' => 74,
                'menu_id' => 1,
                'title' => 'Proformas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-certificate',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 6,
                'created_at' => '2019-08-28 14:55:07',
                'updated_at' => '2020-09-03 20:44:18',
                'route' => 'proformas_index',
                'parameters' => NULL,
            ),
            53 => 
            array (
                'id' => 75,
                'menu_id' => 1,
                'title' => 'Reportes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-receipt',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2019-10-08 23:04:20',
                'updated_at' => '2020-09-03 20:44:18',
                'route' => NULL,
                'parameters' => '',
            ),
            54 => 
            array (
                'id' => 76,
                'menu_id' => 1,
                'title' => 'Reporte de ventas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'color' => '#000000',
                'parent_id' => 75,
                'order' => 2,
                'created_at' => '2019-10-08 23:05:10',
                'updated_at' => '2019-11-29 17:32:57',
                'route' => 'ventas_reporte',
                'parameters' => NULL,
            ),
            55 => 
            array (
                'id' => 77,
                'menu_id' => 1,
                'title' => 'Utilidades',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dollar',
                'color' => '#000000',
                'parent_id' => 75,
                'order' => 3,
                'created_at' => '2019-10-08 23:05:49',
                'updated_at' => '2019-11-29 17:32:57',
                'route' => 'ganancia_producto_reporte',
                'parameters' => NULL,
            ),
            56 => 
            array (
                'id' => 78,
                'menu_id' => 1,
                'title' => 'Libro de ventas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => 75,
                'order' => 4,
                'created_at' => '2019-10-08 23:06:38',
                'updated_at' => '2019-11-29 17:32:57',
                'route' => 'ventas_libro',
                'parameters' => NULL,
            ),
            57 => 
            array (
                'id' => 80,
                'menu_id' => 1,
                'title' => 'Subcategorias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list-add',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 9,
                'created_at' => '2019-10-30 15:15:23',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'voyager.subcategorias.index',
                'parameters' => 'null',
            ),
            58 => 
            array (
                'id' => 81,
                'menu_id' => 1,
                'title' => 'Cocina',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dashboard',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 7,
                'created_at' => '2019-11-27 16:01:42',
                'updated_at' => '2020-09-03 20:44:18',
                'route' => 'cocina.index',
                'parameters' => NULL,
            ),
            59 => 
            array (
                'id' => 82,
                'menu_id' => 1,
                'title' => 'Publicaciones',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => 64,
                'order' => 2,
                'created_at' => '2019-11-29 17:30:44',
                'updated_at' => '2019-11-29 17:31:21',
                'route' => 'voyager.publicaciones.index',
                'parameters' => NULL,
            ),
            60 => 
            array (
                'id' => 83,
                'menu_id' => 1,
                'title' => 'Tickets',
                'url' => '',
                'target' => '_blank',
                'icon_class' => 'voyager-ticket',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 8,
                'created_at' => '2019-11-29 17:32:44',
                'updated_at' => '2020-09-03 20:44:18',
                'route' => 'tickets_index',
                'parameters' => 'null',
            ),
            61 => 
            array (
                'id' => 84,
                'menu_id' => 1,
                'title' => 'escasez',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-warning',
                'color' => '#000000',
                'parent_id' => 75,
                'order' => 5,
                'created_at' => '2019-12-24 21:02:48',
                'updated_at' => '2019-12-24 21:02:58',
                'route' => 'productos_escasez',
                'parameters' => NULL,
            ),
            62 => 
            array (
                'id' => 85,
                'menu_id' => 1,
                'title' => 'Borrar cache',
                'url' => 'admin/clear-cache',
                'target' => '_self',
                'icon_class' => 'voyager-wand',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 7,
                'created_at' => '2019-05-13 22:44:12',
                'updated_at' => '2020-09-03 20:44:05',
                'route' => NULL,
                'parameters' => NULL,
            ),
            63 => 
            array (
                'id' => 86,
                'menu_id' => 1,
                'title' => 'Extras',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list-add',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 5,
                'created_at' => '2020-02-18 17:04:56',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'voyager.extras.index',
                'parameters' => NULL,
            ),
            64 => 
            array (
                'id' => 87,
                'menu_id' => 1,
                'title' => 'Pedidos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-calendar',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 4,
                'created_at' => '2020-09-03 20:14:35',
                'updated_at' => '2020-09-03 20:14:54',
                'route' => 'orders.index',
                'parameters' => NULL,
            ),
            65 => 
            array (
                'id' => 88,
                'menu_id' => 1,
                'title' => 'Hoja de ruta',
                'url' => 'admin/hojastrabajo',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => '#000000',
                'parent_id' => 52,
                'order' => 5,
                'created_at' => '2020-09-03 20:43:58',
                'updated_at' => '2020-09-03 20:44:18',
                'route' => NULL,
                'parameters' => '',
            ),
            66 => 
            array (
                'id' => 89,
                'menu_id' => 1,
                'title' => 'Productos Anulados',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-scissors',
                'color' => '#000000',
                'parent_id' => 75,
                'order' => 6,
                'created_at' => '2020-09-11 16:58:33',
                'updated_at' => '2020-09-11 16:58:56',
                'route' => 'productscanceled',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}