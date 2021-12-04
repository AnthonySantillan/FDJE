<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\Users\DestroyUserRequest;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
=======
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e


class UserController extends Controller
{
    function __construct()
    {
<<<<<<< HEAD
        $this->middleware('permission:index-user|store-user|update-user|destroy-user', ['only' => ['index', ' show']]);
        $this->middleware('permission:store-user', ['only' => ['store']]);
        $this->middleware('permission:update-user', ['only' => ['update']]);
        $this->middleware('permission:destroy-user', ['only' => ['destroy', 'destroys']]);
    }

    public function index()
    {
        $users = User::get();
        return response()->json(
            [
                'data' => $users,
                'summary' => 'consulta exitosa',
                'detail' => '',
                'code' => '200'
            ]
        );
    }

=======
        $this->middleware('permission:ver-user|crear-user|editar-user|borrar-user', ['only' => ['index']]);
        $this->middleware('permission:crear-user', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-user', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-user', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =  User::paginate(5);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.crear', compact('roles'));
    }
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(StoreUserRequest $request)
    {
        $users = new User();
        $users->name = $request->input('name');
        $users->dni = $request->input('dni');
        $users->phone = $request->input('phone');
        $users->password = bcrypt($request->input('password'));
        // $users->assignRole('User');
        $users->assignRole($request->input('role'));

        $users->save();


        return (new UserResource($users))
            ->additional([
                'msg' => [
                    'summary' => 'usuario creado',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'ci' => 'required',
            'phone' => 'required',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assingRole($request->input('roles'));

        return redirect()->route('users.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }

    /**
     * Display the specified resource.
<<<<<<< HEAD

     * @param \App\Models\Client $client
     * 
     * @return ClientResource
     * 

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response



=======
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.editar', compact('user', 'roles', 'userRole'));
    }

    /**
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show(User $user)
    {
        return (new UserResource($user))
            ->additional([
                'msg' => [
                    'summary' => 'success',
                    'detail' => 'consulta exitosa',
                    'code' => '200'
                ]
            ]);
    }

    public function update(Request $request, User $user)
    {
        $user->dni = $request->input('dni');
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return (new UserResource($user))
            ->additional([
                'msg' => [
                    'summary' => 'Usuario Creado',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'ci' => 'required',
            'phone' => 'required',
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
        $input =  $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input =  Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return (new UserResource($user))
            ->additional([
                'msg' => [
                    'summary' => 'usuario eliminado',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
    }
    public function destroys(DestroyUserRequest $request)
    {
        User::destroy($request->input('ids'));

        return (new UserResource($request))
            ->additional([
                'msg' => [
                    'summary' => 'eliminado exitosa',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }
}
