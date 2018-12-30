@extends('layouts.app')

@section('content')
<div class="container" >
  <h2 class="text-center">Weather Forecast on 

    
    @foreach ($orders as $order)
    
    @if ($order->month==1)
    January, 2019
    @break
    
    @elseif ($order->month==2)
    February, 2019
    @break

    @elseif ($order->month==3)
    March 
    @break

    @elseif ($order->month==4)
    March 
    @break

    @elseif ($order->month==5)
    March 
    @break

    @elseif ($order->month==6)
    March 
    @break

    @elseif ($order->month==7)
    March 
    @break

    @elseif ($order->month==8)
    March 
    @break

    @elseif ($order->month==9)
    March 
    @break

    @elseif ($order->month==10)
    March 
    @break

    @elseif ($order->month==11)
    March 
    @break

    @elseif ($order->month==12)
    March 
    @break

    @endif
  @endforeach</h2>

  <div class="card text-center pt-5 pb-5 mt-3 mb-3" >

    <form role="form" action="/insert" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row mb-4">
        <div class="col-md-6 text-right">
          <select name="month" class="form-control" style="width: 200px;float: right;">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">Aughust</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
        </div>
        <div class="col-md-6 text-left">
          <button type="submit" class="btn btn-primary mb-2 pl-5 pr-5">Select</button>
        </div>
      </div>
    </form>


    <div class="row justify-content-center">
      <div class="col-md-6">
        Warm days @foreach ($orders as $order)
        @if ($order->zodiak==2 or $order->zodiak==6 or $order->zodiak==10)

        - {{$order->day}}&nbsp;

        @else
        @endif
        @endforeach <br>

        Falls @foreach ($orders as $order)
        @if ($order->zodiak==4 or $order->zodiak==8 or $order->zodiak==12)

        - {{$order->day}}&nbsp;

        @else
        @endif
        @endforeach <br>
        Old moon 23

      </div>
      <div class="col-md-6">
        Cold days @foreach ($orders as $order)
        @if ($order->zodiak==3 or $order->zodiak==7 or $order->zodiak==11)

        - {{$order->day}}&nbsp;

        @else
        @endif
        @endforeach <br>

        Wind @foreach ($orders as $order)
        @if ($order->zodiak==1 or $order->zodiak==5 or $order->zodiak==9)

        - {{$order->day}}&nbsp;

        @else
        @endif
        @endforeach<br>
        New moon 7

      </div>
    </div>
  </div>

  <div class="card text-center p-5" >
    <div class="row justify-content-center">
      <div class="col-md-3"></div>
      <div class="col-md-3 p-3">
        @foreach ($orders as $order)
        @if ($order->zodiak==12)

        - {{$order->day}}&nbsp;

        @else
        @endif
        @endforeach
        <label style="float: left;">12</label></div>

        <div class="col-md-3 p-3">
          @foreach ($orders as $order)
          @if ($order->zodiak==1)

          - {{$order->day}}&nbsp;

          @else
          @endif
          @endforeach
          <label style="float: right;">1</label></div>
          <div class="col-md-3"></div>

        </div>

        <div class="row justify-content-center">
          <div class="col-md-3 p-3 mr-5">
            @foreach ($orders as $order)
            @if ($order->zodiak==11)

            - {{$order->day}}&nbsp;

            @else
            @endif
            @endforeach
            <label style="float: left;">11</label></div>
            <div class="col-md-3 p-3 ml-5">
              @foreach ($orders as $order)
              @if ($order->zodiak==2)

              - {{$order->day}}&nbsp;

              @else
              @endif
              @endforeach
              <label style="float: right;">2</label></div>

            </div>

            <div class="row justify-content-center pl-5 pr-5">
              <div class="col-md-3 p-3">
                @foreach ($orders as $order)
                @if ($order->zodiak==10)

                - {{$order->day}}&nbsp;

                @else
                @endif
                @endforeach
                <label style="float: left;">10</label></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3 p-3">
                  @foreach ($orders as $order)
                  @if ($order->zodiak==3)

                  - {{$order->day}}&nbsp;

                  @else
                  @endif
                  @endforeach
                  <label style="float: right;">3</label></div>

                </div>
                <div class="row justify-content-center pl-5 pr-5">
                  <div class="col-md-3 p-3">
                    @foreach ($orders as $order)
                    @if ($order->zodiak==9)

                    - {{$order->day}}&nbsp;

                    @else
                    @endif
                    @endforeach
                    <label style="float: left;">9</label></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3 p-3">
                      @foreach ($orders as $order)
                      @if ($order->zodiak==4)

                      - {{$order->day}}&nbsp;

                      @else
                      @endif
                      @endforeach
                      <label style="float: right;">4</label></div>

                    </div>
                    <div class="row justify-content-center">
                      <div class="col-md-3 p-3 mr-5">
                        @foreach ($orders as $order)
                        @if ($order->zodiak==8)

                        - {{$order->day}}&nbsp;

                        @else
                        @endif
                        @endforeach
                        <label style="float: left;">8</label></div>
                        <div class="col-md-3 p-3 ml-5">
                          @foreach ($orders as $order)
                          @if ($order->zodiak==5)

                          - {{$order->day}}&nbsp;

                          @else
                          @endif
                          @endforeach
                          <label style="float: right;">5</label></div>


                        </div>
                        <div class="row justify-content-center">
                          <div class="col-md-3"></div>
                          <div class="col-md-3 p-3">
                            @foreach ($orders as $order)
                            @if ($order->zodiak==7)

                            - {{$order->day}}&nbsp;

                            @else
                            @endif
                            @endforeach
                            <label style="float: left;">7</label></div>
                            <div class="col-md-3 p-3">
                              @foreach ($orders as $order)
                              @if ($order->zodiak==6)

                              - {{$order->day}}&nbsp;

                              @else
                              @endif
                              @endforeach
                              <label style="float: right;">6</label></div>
                              <div class="col-md-3"></div>

                            </div>
                          </div>

                          <div class="card text-center pt-5 pb-5 mt-3" >
                            <div class="row justify-content-center">
                              <div class="col-md-12">
                                <h3>Notes</h3>
                                <p class="pl-5 pr-5 pt-2">
                                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                </p>

                              </div>

                            </div>
                          </div>

                        </div>
                        @endsection
