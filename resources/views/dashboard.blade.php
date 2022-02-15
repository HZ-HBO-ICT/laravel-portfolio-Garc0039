@extends('layout')

@section('title')
    Dashboard Page
@endsection

@section('content')
    <div id="div-table">

        <table>

            <thead>

                <tr>

                    <th/> Quartile

                    <th/> Course

                    <th/> EC

                    <th/> Exam

                    <th/> Grade

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td/ rowspan="3"> 1

                    <td/> {{$grades[0]->course_name}}

                    <td/> 2,5

                    <td/> {{$grades[0]->test_name}}

                    <td/> {{$grades[0]->best_grade}}

                </tr>

                <tr>

                    <td/> {{$grades[1]->course_name}}

                    <td/> 5

                    <td/> {{$grades[1]->test_name}}

                    <td/> {{$grades[1]->best_grade}}

                </tr>

                <tr>

                    <td/> {{$grades[2]->course_name}}

                    <td/> 5

                    <td/> {{$grades[2]->test_name}}

                    <td/> {{$grades[2]->best_grade}}

                </tr>

                <tr>

                    <td/ rowspan="2"> 2

                    <td/ rowspan="2"> {{$grades[3]->course_name}}

                    <td/ rowspan="2"> 10

                    <td/> {{$grades[3]->test_name}}

                    <td/> {{$grades[3]->best_grade}}

                </tr>

                <tr>
                    <td/> {{$grades[4]->test_name}}

                    <td/> {{$grades[4]->best_grade}}

                </tr>

                <tr>

                    <td/ rowspan="4"> 3

                    <td/> Framework Development

                    <td/> 5

                    <td/> Case study

                    <td/> -

                </tr>

                <tr>

                    <td/ rowspan="3"> Framework Project 1

                    <td/ rowspan="3"> 7,5

                    <td/> Project

                    <td/> -

                </tr>

                <tr>

                    <td/> Assessment

                    <td/> -

                </tr>

                <tr>

                    <td/> Report

                    <td/> -

                </tr>

                <tr>

                    <td/ rowspan="3"> 4

                    <td/ rowspan="3"> Framework Project 2

                    <td/ rowspan="3"> 10

                    <td/> Portfolio

                    <td/> -

                </tr>

                <tr>

                    <td/> Project

                    <td/> -

                </tr>

                <tr>

                    <td/> Assessment

                    <td/> -

                </tr>

                <tr>

                    <td/> Quartile "the entire year"

                    <td/> PCO

                    <td/> 12,5

                    <td/> Portfolio

                    <td/> -

                </tr>

                <tr>

                    <td/ rowspan="2"> Quartile Whenever

                    <td/> Personality 1

                    <td/> 1,25

                    <td/> Report

                    <td/> -
                </tr>

                <tr>

                    <td/> Personality 2

                    <td/> 1,25

                    <td/> Report

                    <td/> -

                </tr>

            </tbody>

        </table>

    </div>

    <div id="div-processbar">

        <label>

            EC Progressbar:

        </label>

        <progress value="{{$Ecs}}" max="60">

        </progress>

        <br>

        <label id="dashboard-progress-label">

            EC Progressbar:

        </label>

        <progress value="45" max="60">

        </progress>

        <p>

            You need 45 ECS to pass, I got 0 ECS so far!

        </p>

    </div>
@endsection
