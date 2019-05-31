<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        Permission::create([
            'name'          => 'Dashborad de Administrador',
            'slug'          => 'admin.index',
            'description'   => 'Muestra el panel de control de un cliente',
        ]);

        //Cliente
        Permission::create([
            'name'          => 'Dashborad de Cliente',
            'slug'          => 'clientes.index',
            'description'   => 'Muestra el panel de control de un cliente',
        ]);

        //Usuarios
        Permission::create([
        	'name' 			=> 'Navegar Usuario',
        	'slug' 			=> 'users.index',
        	'description' 	=> 'Navegar Usuario',
        ]);

        Permission::create([
        	'name' 			=> 'Ver Usuario',
        	'slug' 			=> 'users.show',
        	'description' 	=> 'Ver Usuario',
        ]);

        Permission::create([
        	'name' 			=> 'Editar Usuario',
        	'slug' 			=> 'users.edit',
        	'description' 	=> 'Editar Usuario',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar Usuario',
        	'slug' 			=> 'users.destroy',
        	'description' 	=> 'Eliminar Usuario',
        ]);

        //Mesas
        Permission::create([
        	'name' 			=> 'Navegar mesas',
        	'slug' 			=> 'mesas.index',
        	'description' 	=> 'Navegar mesas',
        ]);

        Permission::create([
        	'name' 			=> 'Crear mesas',
        	'slug' 			=> 'mesas.create',
        	'description' 	=> 'Crear mesas',
        ]);

        Permission::create([
        	'name' 			=> 'Ver mesas',
        	'slug' 			=> 'mesas.show',
        	'description' 	=> 'Ver mesas',
        ]);

        Permission::create([
        	'name' 			=> 'Editar mesas',
        	'slug' 			=> 'mesas.edit',
        	'description' 	=> 'Editar mesas',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar mesas',
        	'slug' 			=> 'mesas.destroy',
        	'description' 	=> 'Eliminar mesas',
        ]);

        //Codigos
        Permission::create([
        	'name' 			=> 'Navegar codigos',
        	'slug' 			=> 'codigos.index',
        	'description' 	=> 'Navegar codigos',
        ]);

        Permission::create([
        	'name' 			=> 'Crear codigos',
        	'slug' 			=> 'codigos.create',
        	'description' 	=> 'Crear codigos',
        ]);

        Permission::create([
        	'name' 			=> 'Ver codigos',
        	'slug' 			=> 'codigos.show',
        	'description' 	=> 'Ver codigos',
        ]);

        Permission::create([
        	'name' 			=> 'Editar codigos',
        	'slug' 			=> 'codigos.edit',
        	'description' 	=> 'Editar codigos',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar codigos',
        	'slug' 			=> 'codigos.destroy',
        	'description' 	=> 'Eliminar codigos',
        ]);

        //Eventos
        Permission::create([
        	'name' 			=> 'Navegar eventos',
        	'slug' 			=> 'eventos.index',
        	'description' 	=> 'Navegar eventos',
        ]);

        Permission::create([
        	'name' 			=> 'Crear eventos',
        	'slug' 			=> 'eventos.create',
        	'description' 	=> 'Crear eventos',
        ]);

        Permission::create([
        	'name' 			=> 'Ver eventos',
        	'slug' 			=> 'eventos.show',
        	'description' 	=> 'Ver eventos',
        ]);

        Permission::create([
        	'name' 			=> 'Editar eventos',
        	'slug' 			=> 'eventos.edit',
        	'description' 	=> 'Editar eventos',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar eventos',
        	'slug' 			=> 'eventos.destroy',
        	'description' 	=> 'Eliminar eventos',
        ]);

        //Invitados
        Permission::create([
        	'name' 			=> 'Navegar invitados',
        	'slug' 			=> 'invitados.index',
        	'description' 	=> 'Navegar invitados',
        ]);

        Permission::create([
        	'name' 			=> 'Crear invitados',
        	'slug' 			=> 'invitados.create',
        	'description' 	=> 'Crear invitados',
        ]);

        Permission::create([
        	'name' 			=> 'Ver invitados',
        	'slug' 			=> 'invitados.show',
        	'description' 	=> 'Ver invitados',
        ]);

        Permission::create([
        	'name' 			=> 'Editar invitados',
        	'slug' 			=> 'invitados.edit',
        	'description' 	=> 'Editar invitados',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar invitados',
        	'slug' 			=> 'invitados.destroy',
        	'description' 	=> 'Eliminar invitados',
        ]);

        //Acompañantes
        Permission::create([
        	'name' 			=> 'Navegar acompañantes',
        	'slug' 			=> 'acompanantes.index',
        	'description' 	=> 'Navegar acompañantes',
        ]);

        Permission::create([
        	'name' 			=> 'Crear acompañantes',
        	'slug' 			=> 'acompanantes.create',
        	'description' 	=> 'Crear acompañantes',
        ]);

        Permission::create([
        	'name' 			=> 'Ver acompañantes',
        	'slug' 			=> 'acompanantes.show',
        	'description' 	=> 'Ver acompañantes',
        ]);

        Permission::create([
        	'name' 			=> 'Editar acompañantes',
        	'slug' 			=> 'acompanantes.edit',
        	'description' 	=> 'Editar acompañantes',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar acompañantes',
        	'slug' 			=> 'acompanantes.destroy',
        	'description' 	=> 'Eliminar acompañantes',
        ]);

        //Confirmación
        Permission::create([
        	'name' 			=> 'Navegar confirmaciones',
        	'slug' 			=> 'confirmaciones.index',
        	'description' 	=> 'Navegar confirmaciones',
        ]);

        Permission::create([
        	'name' 			=> 'Crear confirmaciones',
        	'slug' 			=> 'confirmaciones.create',
        	'description' 	=> 'Crear confirmaciones',
        ]);

        Permission::create([
        	'name' 			=> 'Ver confirmaciones',
        	'slug' 			=> 'confirmaciones.show',
        	'description' 	=> 'Ver confirmaciones',
        ]);

        Permission::create([
        	'name' 			=> 'Editar confirmaciones',
        	'slug' 			=> 'confirmaciones.edit',
        	'description' 	=> 'Editar confirmaciones',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar confirmaciones',
        	'slug' 			=> 'confirmaciones.destroy',
        	'description' 	=> 'Eliminar confirmaciones',
        ]);

        //Tipo de Evento
        Permission::create([
            'name'          => 'Navegar Tipo de Evento',
            'slug'          => 'tipoEvento.index',
            'description'   => 'Navegar tipoEvento',
        ]);

        Permission::create([
            'name'          => 'Crear Tipo de Evento',
            'slug'          => 'tipoEvento.create',
            'description'   => 'Crear tipoEvento',
        ]);

        Permission::create([
            'name'          => 'Ver Tipo de Evento',
            'slug'          => 'tipoEvento.show',
            'description'   => 'Ver tipoEvento',
        ]);

        Permission::create([
            'name'          => 'Editar Tipo de Evento',
            'slug'          => 'tipoEvento.edit',
            'description'   => 'Editar tipoEvento',
        ]);

        Permission::create([
            'name'          => 'Eliminar Tipo de Evento',
            'slug'          => 'tipoEvento.destroy',
            'description'   => 'Eliminar tipoEvento',
        ]);

        //lLanes
        Permission::create([
            'name'          => 'Navegar planes',
            'slug'          => 'planes.index',
            'description'   => 'Navegar planes',
        ]);

        Permission::create([
            'name'          => 'Crear planes',
            'slug'          => 'planes.create',
            'description'   => 'Crear planes',
        ]);

        Permission::create([
            'name'          => 'Ver planes',
            'slug'          => 'planes.show',
            'description'   => 'Ver planes',
        ]);

        Permission::create([
            'name'          => 'Editar planes',
            'slug'          => 'planes.edit',
            'description'   => 'Editar planes',
        ]);

        Permission::create([
            'name'          => 'Eliminar planes',
            'slug'          => 'planes.destroy',
            'description'   => 'Eliminar planes',
        ]);
    }
}
