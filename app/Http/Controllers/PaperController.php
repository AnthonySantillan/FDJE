<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\Papers\DestroyPaperRequest;
use App\Http\Requests\Papers\StorePaperRequest;
use App\Http\Requests\Papers\UpdatePaperRequest;
use App\Http\Resources\Papers\PaperResource;
use App\Models\Paper;
use Illuminate\Support\Facades\DB;
=======
use App\Models\Paper;
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
use Illuminate\Http\Request;

class PaperController extends Controller
{
    function __construct()
    {
<<<<<<< HEAD
        $this->middleware('permission:index-paper|store-paper|update-paper|destroy-paper', ['only' => ['index', 'show']]);
        $this->middleware('permission:store-paper', ['only' => ['store']]);
        $this->middleware('permission:update-paper', ['only' => ['update']]);
        $this->middleware('permission:destroy-paper', ['only' => ['destroy', 'destroys']]);
    }

    public function index()
    {
        //return Client::paginate();
        // $papers = Paper::get();
        $papers = DB::table('papers')
            ->orderBy('id', 'DESC')
            ->join('users', 'users.id', '=', 'papers.user_id')
            ->select(
                'papers.id',
                'papers.dia',
                'users.name',

                'papers.ayunas',
                'papers.nph_lantus',
                'papers.rapida_ultra_rap',

                'papers.media_manana',
                'papers.rapida_ultra_rap_m',

                'papers.almuerzo',
                'papers.rapida_ultra_rap_a',

                'papers.media_tarde',
                'papers.rapida_ultra_rap_t',

                'papers.merienda',
                'papers.rapida_ultra_rap_md',
                'papers.nph_lantus_md',

                'papers.dormir',
                'papers.madrugada',
                'papers.correcion_total',
            )
            ->get();
        return response()->json(
            [
                'data' => $papers,
                'summary' => 'consulta exitosa',
                'detail' => '',
                'code' => '200'
            ]
        );
    }
    ///
=======
        $this->middleware('permission:ver-paper|crear-paper|editar-paper|borrar-paper', ['only' => ['index']]);
        $this->middleware('permission:crear-paper', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-paper', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-paper', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $papers = Paper::paginate(5);
        return view('papers.index', compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('papers.crear');
    }
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(StorePaperRequest $request)
    {
        $papers = new Paper();
        $papers->dia = $request->input('dia');
        $papers->user_id = $request->input('user_id');
        $papers->ayunas = $request->input('ayunas');
        $papers->nph_lantus = $request->input('nph_lantus');
        $papers->rapida_ultra_rap = $request->input('rapida_ultra_rap');

        $papers->media_manana = $request->input('media_manana');
        $papers->rapida_ultra_rap_m = $request->input('rapida_ultra_rap');

        $papers->almuerzo = $request->input('almuerzo');
        $papers->rapida_ultra_rap_a = $request->input('rapida_ultra_rap_a');


        $papers->media_tarde = $request->input('media_tarde');
        $papers->rapida_ultra_rap_t = $request->input('rapida_ultra_rap_t');

        $papers->merienda = $request->input('merienda');
        $papers->rapida_ultra_rap_md = $request->input('rapida_ultra_rap_md');
        $papers->nph_lantus_md = $request->input('nph_lantus_md');

        $papers->dormir = $request->input('dormir');
        $papers->madrugada = $request->input('madrugada');
        $papers->correcion_total = $request->input('correcion_total');




        $papers->save();


        return (new PaperResource($papers))
            ->additional([
                'msg' => [
                    'summary' => 'hoja creada',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
    public function store(Request $request)
    {
        request()->validate([
            'dia' => 'required',

            'ayunas' => 'required',
            'nph_lantus' => 'required',
            'rapida_ultra_rap' => 'required',
            'correcion' => 'required',

            'media_mañana' => 'required',
            'rapida_ultra_rap_m' => 'required',
            'correcion_m' => 'required',

            'almuerzo' => 'required',
            'rapida_ultra_rap_a' => 'required',
            'correcion_a' => 'required',

            'media_tarde' => 'required',
            'rapida_ultra_rap_t' => 'required',
            'correcion_t' => 'required',

            'merienda' => 'required',
            'rapida_ultra_rap_md' => 'required',
            'correcion_md' => 'required',
            'nph_lantus_md' => 'required',

            'dormir' => 'required',
            'madrugada' => 'required',
        ]);
        Paper::create($request->all());
        return redirect()->route('papers.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }

    /**
     * Display the specified resource.
<<<<<<< HEAD
     * @param \App\Models\Client $client
     * 
     * @return ClientResource
     * 
     */
    public function show(Paper $paper)
    {
        // $papers = DB::table('papers')
        //     ->leftJoin('users', 'users.id', '=', 'papers.user_id')
        //     ->select(
        //         'papers.id',
        //         'papers.dia',
        //         'users.name as paciente',

        //         'papers.ayunas',
        //         'papers.nph_lantus',
        //         'papers.rapida_ultra_rap',

        //         'papers.media_manana',
        //         'papers.rapida_ultra_rap_m',

        //         'papers.almuerzo',
        //         'papers.rapida_ultra_rap_a',

        //         'papers.media_tarde',
        //         'papers.rapida_ultra_rap_t',

        //         'papers.merienda',
        //         'papers.rapida_ultra_rap_md',
        //         'papers.nph_lantus_md',

        //         'papers.dormir',
        //         'papers.madrugada',
        //         'papers.correcion_total',
        //     )
        //     ->find($paper);
        // return response()->json(
        //     [
        //         'data' => $papers,
        //         'summary' => 'consulta exitosa',
        //         'detail' => '',
        //         'code' => '200'
        //     ]
        // );
        return (new PaperResource($paper))
            ->additional([
                'msg' => [
                    'summary' => 'success',
                    'detail' => 'consulta exitosa',
                    'code' => '200'
                ]
            ]);
    }
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
    public function edit(Paper $paper)
    {
        return view('papers.editar', compact('papers'));
    }

>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(UpdatePaperRequest $request, Paper $papers)
    {
        $papers->dia = $request->input('dia');
        $papers->user_id = $request->input('user_id');
        $papers->ayunas = $request->input('ayunas');
        $papers->nph_lantus = $request->input('nph_lantus');
        $papers->rapida_ultra_rap = $request->input('rapida_ultra_rap');

        $papers->media_manana = $request->input('media_manana');
        $papers->rapida_ultra_rap_m = $request->input('rapida_ultra_rap');

        $papers->almuerzo = $request->input('almuerzo');
        $papers->rapida_ultra_rap_a = $request->input('rapida_ultra_rap_a');

        $papers->media_tarde = $request->input('media_tarde');
        $papers->rapida_ultra_rap_t = $request->input('rapida_ultra_rap_t');

        $papers->merienda = $request->input('merienda');
        $papers->rapida_ultra_rap_md = $request->input('rapida_ultra_rap_md');
        $papers->nph_lantus_md = $request->input('nph_lantus_md');

        $papers->dormir = $request->input('dormir');
        $papers->madrugada = $request->input('madrugada');
        $papers->correcion_total = $request->input('correcion_total');





        $papers->save();


        return (new PaperResource($papers))
            ->additional([
                'msg' => [
                    'summary' => 'hoja actualizada',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
    public function update(Request $request, Paper $paper)
    {
        request()->validate([
            'dia' => 'required',

            'ayunas' => 'required',
            'nph_lantus' => 'required',
            'rapida_ultra_rap' => 'required',
            'correcion' => 'required',

            'media_mañana' => 'required',
            'rapida_ultra_rap_m' => 'required',
            'correcion_m' => 'required',

            'almuerzo' => 'required',
            'rapida_ultra_rap_a' => 'required',
            'correcion_a' => 'required',

            'media_tarde' => 'required',
            'rapida_ultra_rap_t' => 'required',
            'correcion_t' => 'required',

            'merienda' => 'required',
            'rapida_ultra_rap_md' => 'required',
            'correcion_md' => 'required',
            'nph_lantus_md' => 'required',

            'dormir' => 'required',
            'madrugada' => 'required',
        ]);
        $paper->update($request->all());
        return redirect()->route('papers.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy($paper)
    {
        $paper = Paper::find($paper);
        $paper->delete();
        return (new PaperResource($paper))
            ->additional([
                'msg' => [
                    'summary' => 'Cliente eliminado',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
    }
    public function destroys(DestroyPaperRequest $request)
    {
        Paper::destroy($request->input('ids'));

        return (new PaperResource($request))
            ->additional([
                'msg' => [
                    'summary' => 'eliminado exitosa',
                    'detail' => '',
                    'code' => '200'
                ]
            ]);
=======
    public function destroy(Paper $paper)
    {
        $paper->delete();

        return redirect()->route('papers.index');
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }
}
