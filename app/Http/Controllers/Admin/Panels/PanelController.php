<?php

namespace App\Http\Controllers\Admin\Panels;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Shop\Panels\Panel;
use App\Shop\Categories\Category;
use Illuminate\Support\Facades\DB;

use App\Shop\Tools\UploadableTrait;
use Illuminate\Http\UploadedFile;

class PanelController extends Controller
{    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $panels = DB::table('panels')->get();
        return view('admin.panels.list', [
            'panels' => $panels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories= DB::table('categories')->get();

        return view('admin.panels.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        if($request->hasFile('imagenName')){
            $file=  $request->file('imagenName');
            $name = time().$file->getClientOriginalName();  
            $file->move(public_path().'/images/',$name);
            //return $name;
        }

        $panel = new Panel();
        $panel->titulo= $request->input('tituloName');
        $panel->anio= $request->input('anioName');
        $panel->subtitulo= $request->input('subName');
        $panel->imagen= $name;
        $panel->descripcion= $request->input('descripcionName');
        $panel->link= $request->input('linkName');
        $panel->save();


        $panels = DB::table('panels')->get();
        return view('admin.panels.list', [
            'panels' => $panels
        ])->with('info','Panel creado con exito');

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
    public function edit(Panel $panel)
    {
        //

        //$category= Category::find($panel->link);
        $categoryName = DB::table('categories')->where('slug', $panel->link)->value('slug');
        $categories= DB::table('categories')->get();
        return view('admin.panels.edit',compact('panel','categoryName','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panel $panel)
    {
        //Implicit binding perros
        //Fill se encarga de actualizar los datos que estamos recibiendo
        $panel->fill($request->except('imagen'));
        $temporal=0;
        if($request->hasFile('imagen')){
            $temporal = 1;
            $file=  $request->file('imagen');
            $name = time().$file->getClientOriginalName();  
            $file->move(public_path().'/images/',$name);
            //return $name;
        }
        if($temporal==1){
        $panel->imagen= $name;}
        else{
            $panel->imagen= $panel->imagen;
        }
        $panel->save();

        $panels = DB::table('panels')->get();
        return view('admin.panels.list', [
            'panels' => $panels
        ])->with('info','Panel actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panel $panel)
    {
        

        $panel->delete();

        $panels = DB::table('panels')->get();
        return view('admin.panels.list', [
            'panels' => $panels
        ])->with('info','Panel eliminado con exito!');

        //Manera correcta

        //return redirect()->route('products.edit',$panels)->with('infod','Actualizado con exito');


    }
}
