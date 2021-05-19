<?php

namespace App\Http\Controllers;

use App\Models\a2;
use Illuminate\Http\Request;

class A2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('niveau-tests.a2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a2 = a2::all();

        return view('niveau-tests.a2', [
            'a2' => $a2
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

        $correctanswer = [];

        for ($i=1; $i < 31; $i++) { 
            $a2 = a2::find($i);

            array_push($correctanswer, $a2->correctanswer);
        }

        return view('niveau-results.a2result', compact('result', 'correctanswer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\a2  $a2
     * @return \Illuminate\Http\Response
     */
    public function show(a2 $a2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\a2  $a2
     * @return \Illuminate\Http\Response
     */
    public function edit(a2 $a2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\a2  $a2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, a2 $a2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\a2  $a2
     * @return \Illuminate\Http\Response
     */
    public function destroy(a2 $a2)
    {
        //
    }
}
