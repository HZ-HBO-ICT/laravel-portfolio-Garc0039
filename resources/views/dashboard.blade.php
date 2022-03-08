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

                <td/> {{ $courses[0]->name }}

                <td/> {{ $courses[0]->credits }}

                <td/> {{ $courses[0]->grade[0]->test_name }}

                <td/> {{ $courses[0]->grade[0]->EC }}

            </tr>

            <tr>

                <td/> {{ $courses[1]->name }}

                <td/> {{ $courses[1]->credits }}

                <td/> {{ $courses[1]->grade[0]->test_name }}

                <td/> {{ $courses[1]->grade[0]->EC }}

            </tr>

            <tr>

                <td/> {{ $courses[2]->name }}

                <td/> {{ $courses[2]->credits }}

                <td/> {{ $courses[2]->grade[0]->test_name }}

                <td/> {{ $courses[2]->grade[0]->EC }}


            </tr>

            <tr>

                <td/ rowspan="2"> 2

                <td/ rowspan="2"> {{ $courses[3]->name }}

                <td/ rowspan="2"> {{ $courses[3]->credits }}

                <td/> {{ $courses[3]->grade[0]->test_name }}

                <td/> {{ $courses[3]->grade[0]->EC }}

            </tr>

            <tr>
                <td/> {{ $courses[3]->grade[1]->test_name }}

                <td/> {{ $courses[3]->grade[1]->EC }}

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

        <progress value="0" max="60">

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
