@extends('layouts.app')

@section('content')
<div class="container" >
    <h2 class="text-center">Weather Forecast on November, 2018</h2>
    <div class="card text-center p-5" >
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-3 p-3">8,10,11</div>
            <div class="col-md-3 p-3">12,13</div>
            <div class="col-md-3"></div>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-3 p-3 mr-5">6,7,8</div>
            <div class="col-md-3 p-3 ml-5">14,15</div>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-3 p-3">4,5</div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3 p-3">16,17,18</div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 p-3">23,30</div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3 p-3">19,20</div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 p-3 mr-5">1,27,28,29</div>
            <div class="col-md-3 p-3 ml-5">21,22</div>
            

        </div>
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-3 p-3">25,26</div>
            <div class="col-md-3 p-3">23,24</div>
            <div class="col-md-3"></div>

        </div>
    </div>

    <div class="card text-center pt-5 pb-5 mt-3" >
        <div class="row justify-content-center">
            <div class="col-md-6">
                Warm days 23,24 <br>
                Falls 6,7,8,16,17,18,25,26 <br>
                Old moon 23

            </div>
            <div class="col-md-6">
                Cold days 9,10,11 <br>
                Wind 11 <br>
                New moon 7

            </div>
        </div>
    </div>

</div>
@endsection
