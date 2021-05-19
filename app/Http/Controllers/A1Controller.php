<?php

namespace App\Http\Controllers;

use App\Models\a1;
use App\Models\a1answers;
use Illuminate\Http\Request;

class A1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        dd($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a1 = a1::all();

        return view('niveau-tests.a1', [
            'a1' => $a1
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $result = new a1answers();
        
        // for ($i = 1; $i < 60; $i++) {
        //     dd(request('question($i)'));

        //     $answer[$i] = request('question$i');
        // }

        $result = [];
   
        $answer1 = request('question1');
        array_push($result, $answer1);
        $answer2 = request('question2');
        array_push($result, $answer2);
        $answer3 = request('question3');
        array_push($result, $answer3);
        $answer4 = request('question4');
        array_push($result, $answer4);
        $answer5 = request('question5');
        array_push($result, $answer5);
        $answer6 = request('question6');
        array_push($result, $answer6);
        $answer7 = request('question7');
        array_push($result, $answer7);
        $answer8 = request('question8');
        array_push($result, $answer8);
        $answer9 = request('question9');
        array_push($result, $answer9);
        $answer10 = request('question10');
        array_push($result, $answer10);
        $answer11 = request('question11');
        array_push($result, $answer11);
        $answer12 = request('question12');
        array_push($result, $answer12);
        $answer13 = request('question13');
        array_push($result, $answer13);
        $answer14 = request('question14');
        array_push($result, $answer14);
        $answer15 = request('question15');
        array_push($result, $answer15);
        $answer16 = request('question16');
        array_push($result, $answer16);
        $answer17 = request('question17');
        array_push($result, $answer17);
        $answer18 = request('question18');
        array_push($result, $answer18);
        $answer19 = request('question19');
        array_push($result, $answer19);
        $answer20 = request('question20');
        array_push($result, $answer20);
        $answer21 = request('question21');
        array_push($result, $answer21);
        $answer22 = request('question22');
        array_push($result, $answer22);
        $answer23 = request('question23');
        array_push($result, $answer23);
        $answer24 = request('question24');
        array_push($result, $answer24);
        $answer25 = request('question25');
        array_push($result, $answer25);
        $answer26 = request('question26');
        array_push($result, $answer26);
        $answer27 = request('question27');
        array_push($result, $answer27);
        $answer28 = request('question28');
        array_push($result, $answer28);
        $answer29 = request('question29');
        array_push($result, $answer29);
        $answer30 = request('question30');
        array_push($result, $answer30);
        // $answer31 = request('question31');
        // $answer32 = request('question32');
        // $answer33 = request('question33');
        // $answer34 = request('question34');
        // $answer35 = request('question35');
        // $answer36 = request('question36');
        // $answer37 = request('question37');
        // $answer38 = request('question38');
        // $answer39 = request('question39');
        // $answer40 = request('question40');
        // $answer41 = request('question41');
        // $answer42 = request('question42');
        // $answer43 = request('question43');
        // $answer44 = request('question44');
        // $answer45 = request('question45');
        // $answer46 = request('question46');
        // $answer47 = request('question47');
        // $answer48 = request('question48');
        // $answer49 = request('question49');
        // $answer50 = request('question50');
        // $answer51 = request('question51');
        // $answer52 = request('question52');
        // $answer53 = request('question53');
        // $answer54 = request('question54');
        // $answer55 = request('question55');
        // $answer56 = request('question56');
        // $answer57 = request('question57');
        // $answer58 = request('question58');
        // $answer59 = request('question59');
        // $answer60 = request('question60'); 

        $correctanswer = [];

        for ($i=1; $i < 31; $i++) { 
            $a1 = a1::find($i);

            array_push($correctanswer, $a1->correctanswer);
        }

        return view('niveau-results.a1result', compact('result', 'correctanswer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\a1  $a1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);

        $result = a1answers::find($id);

        return view('niveau-results.a1result', [
            'result' => $result
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\a1  $a1
     * @return \Illuminate\Http\Response
     */
    public function edit(a1 $a1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\a1  $a1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, a1 $a1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\a1  $a1
     * @return \Illuminate\Http\Response
     */
    public function destroy(a1 $a1)
    {
        //
    }
}
