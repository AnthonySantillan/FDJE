<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    function __construct()
    {
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    }

    /**
     * Display the specified resource.
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paper $paper)
    {
        $paper->delete();

        return redirect()->route('papers.index');
    }
}
