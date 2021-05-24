<?php

namespace App\Http\Controllers\back;
use App\Models\star;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class StarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagetitle = "stars";
         $stars = star::orderBy('id', 'DESC')->paginate(10);
        
        return view('back.stars.stars', compact('stars', 'pagetitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('back.stars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'description' => 'required',
            'image' => 'required',

        ]);

        $star = new Star();
     
        $msg = '';
        try {
         $star = $star->create($request->all());   

         $star->nom = $request->nom;
         $star->prenom = $request->prenom;
         $star->description = $request->description;
         
         $file = $request->file('image');

         $star->image=$file;
        


//************

    $file = $request->file('image');
     // nom d'origin de fichier
   $FileName=$file->getClientOriginalName();
    // Extension de fichier
     $FileExtension=$file->getClientOriginalExtension();
       // File Real Path 
        $FileRealPath=$file->getRealPath();
          //la taile de fichier 
          $FileSize=$file->getSize();
            // file Mime Type
            $FileMimeType=$file->getMimeType();
              //Move Uploaded File
              $destinationPath = 'uploads';
    $file->move($destinationPath,$file->getClientOriginalName());
$star->image=$file->getClientOriginalName();
$star->save();
//******
       } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case 23000:
                    $msg = "Atention! ce titre dèjà existe !!!!";
                    break;
            }
            return redirect(route('admin.stars'))->with('warning', $exception->getCode());  
        }
        $msg = "Enregistrer avec succès !"; 
            return redirect(route('admin.stars'))->with('success', $msg);
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
    public function edit(Star $star)
    
    {
        $pagetitle = 'Edit info de STAR';
        
        return view('back.stars.edit', compact('star', 'pagetitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Star $star)
    {
        $validatedData = $request->validate([
            'nom' => "required|max:50",
            'prenom' => "required|max:50",
            'description' => 'required',
           
            

        ]);
      
               try {
            $star->update($request->all());


        } catch (Exception $exception) {

                return redirect(route('admin.stars'))->with('warning', $exception->getCode());  

        }

        $msg = "Enregistrer avec succès !";
            return redirect(route('admin.stars'))->with('success', $msg);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, star $star)
    {
        try {
           
            $star->delete();
             

        } catch (Exception $exception) {
            return redirect(route('admin.stars'))->with('warning', $exception->getCode());
        }

        $msg = "Supprimer avec succès ! ";

               return redirect(route('admin.stars'))->with('success', $msg);

    }

    public function updatestatus(star $star)
    {
       
        $star->save();

       
        $msg = "Update avec succès!";

      
            return redirect(route('admin.stars'))->with('success', $msg);

    }
}
