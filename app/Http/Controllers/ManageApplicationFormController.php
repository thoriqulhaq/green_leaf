<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use App\Models\ApplicationDetails;

class ManageApplicationFormController extends Controller
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

    public function manageApplication()
    {
        $datas = ApplicationForm::all();
        $answersdat = ApplicationDetails::all();

        return view('manageApplication', [
            'datas' => $datas,
            'answersdat' => $answersdat
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

    public function answeringQuestion(Request $request)
    {
        ApplicationDetails::query()->create([
            'question_num' => $request->question_num,
            'answer' => $request->answer
        ]);

        return redirect('/manage-application');
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

    public function deleteApplication($app_id)
    {
        ApplicationDetails::find($app_id)->delete();
        return back();
    }
}
