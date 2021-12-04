<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Resources\Role\RoleResource;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
=======
use Illuminate\Http\Request;

//agregamos roles
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

class RoleController extends Controller
{
    function __construct()
    {
<<<<<<< HEAD
        $this->middleware('permission:index-rol|store-rol|update-rol|destroy-rol', ['only' => ['index', ' show']]);
        $this->middleware('permission:store-rol', ['only' => ['store']]);
        $this->middleware('permission:update-rol', ['only' => ['update']]);
        $this->middleware('permission:destroy-rol', ['only' => ['destroy', 'destroys']]);
    }

=======
        $this->middleware('permission:ver-rol|crear-rol|editar-rol|borrar-rol', ['only' => ['index']]);
        $this->middleware('permission:crear-rol', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-rol', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-rol', ['only' => ['destroy']]);
    }
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index()
    {
        $roles = Role::get();
        return response()->json(
            [
                'data' => $roles,
                'summary' => 'consulta exitosa',
                'detail' => '',
                'code' => '200'
            ]
        );
    }

=======
    public function index(Request $request)
    {
        //Con paginación
        $roles = Role::paginate(5);
        return view('roles.index', compact('roles'));
        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $roles->links() !!} 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('roles.crear', compact('permission'));
    }
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

<<<<<<< HEAD
        //prueba en pantalla de angular para asignar los permisos de la tabla permission
        $role = new Role();
        $role->name = $request->input('name');
        $role->syncPermissions($request->input('permission'));

        $role->save();


        return (new RoleResource($role))
            ->additional([
                'msg' => [
                    'summary' => 'rol creado',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show(Role $role)
    {
        return (new RoleResource($role))
            ->additional([
                'msg' => [
                    'summary' => 'success',
                    'detail' => 'consulta exitosa',
                    'code' => '200'
                ]
            ]);
=======
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('roles.editar', compact('role', 'permission', 'rolePermissions'));
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

<<<<<<< HEAD
        return (new RoleResource($role))
            ->additional([
                'msg' => [
                    'summary' => 'rol actualizado',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
        return redirect()->route('roles.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy($role)
    {
        //prueba en pantalla de angular para asignar los permisos de la tabla permission
        $role = Role::find($role);
        $role->delete();
        return (new RoleResource($role))
            ->additional([
                'msg' => [
                    'summary' => 'rol eliminado',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }
}
