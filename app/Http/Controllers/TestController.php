<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SopaRequest;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SopaRequest $request)
    {        
        $fila= $request['fila'];
        $columna= $request['columna'];
        $matriz= null;
        $letra= null;
        $matriz[$fila][$columna];

        $encontrado= 0;
        echo($fila);
        echo($columna);
        echo('<br>');
        
        $vocal= array ('A', 'E', 'I', 'O', 'U');

        for ($i=0; $i < $fila; $i++) { 
            for ($j=0; $j < $columna ; $j++) { 
                $letra = array_rand($vocal, 1);
                $matriz[$i][$j]= $vocal[$letra];
            }
        }

        for ($i=1; $i <= $fila; $i++) { 
            for ($j=1; $j <= $columna ; $j++) { 
                echo($matriz[$i-1][$j-1]);
                
            }
                echo('<br>');
        }



        //Buscar OIE
        for ($i=0; $i < $fila; $i++) { 
            for ($j=0; $j < $columna ; $j++) { 
                if($matriz[$i][$j] == 'O'){
                    //Izq
                    if($j >=2 ){
                        if($matriz[$i][$j-1] == 'I' && $matriz[$i][$j-2] == 'E'){
                            ++$encontrado;
                        }
                    }

                    //der
                    if(isset($matriz[$i][$j+2])){
                        if($matriz[$i][$j+1] == 'I' && $matriz[$i][$j+2] == 'E'){
                            ++$encontrado;
                        }
                    }

                    //arr
                    if($i >=2){
                        if($matriz[$i-1][$j] == 'I' && $matriz[$i-2][$j] == 'E'){
                            ++$encontrado;
                        }
                    }

                    //aba
                    if(isset($matriz[$i+2][$j])){
                        if($matriz[$i+1][$j] == 'I' && $matriz[$i+2][$j] == 'E'){
                            ++$encontrado;
                        }
                    }


                }
            }
        }

        echo "<br> cantidad de apariciones: ".$encontrado;

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
