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

        dd($data);

        return view('updateQuestion', [
            'data' => $data,
        ]);
    }

    public function manageApplication()
    {
        $datas = ApplicationForm::all();
        $answers = ApplicationDetails::all();

        return view('manageApplication', [
            'datas' => $datas,
            'answers' => $answers
        ]);
    }

    public function communityDashboard()
    {
        $datas = ApplicationForm::all();
        $answers = ApplicationDetails::all();

        return view('communityDashboard', [
            'datas' => $datas,
            'answers' => $answers
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

    public function updateAnswer(Request $request)
    {
        ApplicationDetails::find($request->id)->update($request->all());

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

    public function filterAnswerPart($Id, $filter)
    {
        $data = ApplicationForm::find($Id);

        if ($data->part == $filter) {
            return true;
        } else {
            return false;
        }
    }

    public function getAnsweredQuestions()
    {
        $dataAnswer = ApplicationDetails::all();

        $Part1Answer = [];
        $Part2Answer = [];
        $Part3Answer = [];
        $Part4Answer = [];

        foreach ($dataAnswer as $data) {
            $this->filterAnswerPart($data->question_num, 1) == true ? array_push($Part1Answer, $data) : null;
            $this->filterAnswerPart($data->question_num, 2) == true ? array_push($Part2Answer, $data) : null;
            $this->filterAnswerPart($data->question_num, 3) == true ? array_push($Part3Answer, $data) : null;
            $this->filterAnswerPart($data->question_num, 4) == true ? array_push($Part4Answer, $data) : null;
        }

        $dataQuestion = ApplicationForm::all();

        $Part1Question = [];
        $Part2Question = [];
        $Part3Question = [];
        $Part4Question = [];

        foreach ($dataQuestion as $data) {
            $this->filterAnswerPart($data->id, 1) == true ? array_push($Part1Question, $data) : null;
            $this->filterAnswerPart($data->id, 2) == true ? array_push($Part2Question, $data) : null;
            $this->filterAnswerPart($data->id, 3) == true ? array_push($Part3Question, $data) : null;
            $this->filterAnswerPart($data->id, 4) == true ? array_push($Part4Question, $data) : null;
        }

        return view('communityDashboard', [
            'Part1Answer' => $Part1Answer,
            'Part2Answer' => $Part2Answer,
            'Part3Answer' => $Part3Answer,
            'Part4Answer' => $Part4Answer,
            'Part1Question' => $Part1Question,
            'Part2Question' => $Part2Question,
            'Part3Question' => $Part3Question,
            'Part4Question' => $Part4Question
        ]);
    }
}
