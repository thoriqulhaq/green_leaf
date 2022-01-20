<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationForm;

class ManageApplicationFormContorller extends Controller
{
    public function getQuestions()
    {
        $datas = ApplicationForm::all();

        return view('formManager', [
            'datas' => $datas,
        ]);
    }

    public function getQuestion($id)
    {
        $data = ApplicationForm::find($id);

        return view('updateQuestion', [
            'data' => $data,
        ]);
    }

    public function createQuestion(Request $request)
    {
        ApplicationForm::query()->create([
            'question_num' => $request->question_num,
            'part' => $request->part,
            'question' => $request->question,
            'mark' => $request->mark
        ]);

        return redirect('/');
    }

    public function updateQuestion(Request $request)
    {
        ApplicationForm::find($request->id)->update($request->all());
        return redirect('/');
    }

    public function deleteQuestion($id)
    {
        ApplicationForm::find($id)->delete();
        return back();
    }
}
