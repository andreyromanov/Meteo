@extends('layouts.app')

@section('content')
<div id="forc" class="container" >
  <h2 class="text-center text-white h1">Прогноз погоди на 


    @foreach ($orders as $order)
    
    @if ($order->month==1)
    Січень, 2019
    @break
    
    @elseif ($order->month==2)
    Лютий, 2019
    @break

    @elseif ($order->month==3)
    Березень 
    @break

    @elseif ($order->month==4)
    Квітень 
    @break

    @elseif ($order->month==5)
    Травень 
    @break

    @elseif ($order->month==6)
    Липень 
    @break

    @elseif ($order->month==7)
    Червень 
    @break

    @elseif ($order->month==8)
    Серпень 
    @break

    @elseif ($order->month==9)
    Вересень 
    @break

    @elseif ($order->month==10)
    Жовтень 
    @break

    @elseif ($order->month==11)
    Листопад 
    @break

    @elseif ($order->month==12)
    Грудень 
    @break

    @endif
  @endforeach</h2>

  <div class="card text-center pt-5 pb-5 mt-3 mb-3" >

    <form role="form" action="/insert" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row mb-3 ">
       <div class="col-md-4"></div>
       <div class="col-md-2 mb-2 text-center">
        <select name="month" class="form-control text-center m-auto" style="width: 155px;">
          <option value="1">Січень</option>
          <option value="2">Лютий</option>
          <option value="3">Березень</option>
          <option value="4">Квітень</option>
          <option value="5">Травень</option>
          <option value="6">Липень</option>
          <option value="7">Червень</option>
          <option value="8">Серпень</option>
          <option value="9">Вересень</option>
          <option value="10">Жовтень</option>
          <option value="11">Листопад</option>
          <option value="12">Грудень</option>
        </select>
      </div>
      <div class="col-md-2 mb-2 text-center">
        <button type="submit" class="btn btn-primary mb-2 pl-5 pr-5 m-auto">Показати</button>
      </div>
      <div class="col-md-4"></div>
    </div>
  </form>


  <div class="row justify-content-center h5" style="line-height: 2">
    <div class="col-md-6">
      Теплі дні @foreach ($orders as $order)
      @if ($order->zodiak==2 or $order->zodiak==6 or $order->zodiak==10)

      - {{$order->day}}&nbsp;

      @else
      @endif
      @endforeach <br>

      Опади @foreach ($orders as $order)
      @if ($order->zodiak==4 or $order->zodiak==8 or $order->zodiak==12)

      - {{$order->day}}&nbsp;

      @else
      @endif
      @endforeach <br>
      Старий місяць - 23

    </div>
    <div class="col-md-6">
      Холодні дні @foreach ($orders as $order)
      @if ($order->zodiak==3 or $order->zodiak==7 or $order->zodiak==11)

      - {{$order->day}}&nbsp;

      @else
      @endif
      @endforeach <br>

      Вітер @foreach ($orders as $order)
      @if ($order->zodiak==1 or $order->zodiak==5 or $order->zodiak==9)

      - {{$order->day}}&nbsp;

      @else
      @endif
      @endforeach<br>
      Новий місяць - 7

    </div>
  </div>
</div>

<div class="card text-center p-5" >
  <div class="row justify-content-center">
    <div class="col-md-3"></div>
    <div class="col-md-3 p-3">
      <label class="pt-3">
        @foreach ($orders as $order)
        @if ($order->zodiak==12)

        - {{$order->day}}&nbsp;

        @else
        @endif
        @endforeach
      </label>
      <label style="float: left;"><img src="img/signs/fish.png" style="width: 50px"></label></div>

      <div class="col-md-3 p-3">
        <label class="pt-3">
          @foreach ($orders as $order)
          @if ($order->zodiak==1)

          - {{$order->day}}&nbsp;

          @else
          @endif
          @endforeach
        </label>
        <label style="float: right;"><img src="img/signs/oven.png" style="width: 50px"></label></div>
        <div class="col-md-3"></div>

      </div>

      <div class="row justify-content-center">
        <div class="col-md-3 p-3 mr-5">
          <label class="pt-3">
            @foreach ($orders as $order)
            @if ($order->zodiak==11)

            - {{$order->day}}&nbsp;

            @else
            @endif
            @endforeach
          </label>
          <label style="float: left;"><img src="img/signs/vodoley.png" style="width: 50px"></label>
        </div>
        <div class="col-md-3 p-3 ml-5">
         <label class="pt-3">
          @foreach ($orders as $order)
          @if ($order->zodiak==2)

          - {{$order->day}}&nbsp;

          @else
          @endif
          @endforeach
        </label>
        <label style="float: right;"><img src="img/signs/bull.png" style="width: 50px"></label></div>

      </div>

      <div class="row justify-content-center pl-5 pr-5">
        <div class="col-md-3 p-3">
          <label class="pt-3">
            @foreach ($orders as $order)
            @if ($order->zodiak==10)

            - {{$order->day}}&nbsp;

            @else
            @endif
            @endforeach
          </label>
          <label style="float: left;"><img src="img/signs/goat.png" style="width: 50px"></label></div>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
          <div class="col-md-3 p-3">
            <label class="pt-3">
              @foreach ($orders as $order)
              @if ($order->zodiak==3)

              - {{$order->day}}&nbsp;

              @else
              @endif
              @endforeach
            </label>
            <label style="float: right;"><img src="img/signs/twins.png" style="width: 50px"></label></div>

          </div>
          <div class="row justify-content-center pl-5 pr-5">
            <div class="col-md-3 p-3">
              <label class="pt-3">
                @foreach ($orders as $order)
                @if ($order->zodiak==9)

                - {{$order->day}}&nbsp;

                @else
                @endif
                @endforeach
              </label>
              <label style="float: left;"><img src="img/signs/sniper.png" style="width: 50px"></label></div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
              <div class="col-md-3 p-3">
                <label class="pt-3">
                  @foreach ($orders as $order)
                  @if ($order->zodiak==4)

                  - {{$order->day}}&nbsp;

                  @else
                  @endif
                  @endforeach
                </label>
                <label style="float: right;"><img src="img/signs/crab.png" style="width: 50px"></label></div>

              </div>
              <div class="row justify-content-center">
                <div class="col-md-3 p-3 mr-5">
                  <label class="pt-3">
                    @foreach ($orders as $order)
                    @if ($order->zodiak==8)

                    - {{$order->day}}&nbsp;

                    @else
                    @endif
                    @endforeach
                  </label>
                  <label style="float: left;"><img src="img/signs/scorpion.png" style="width: 50px"></label></div>
                  <div class="col-md-3 p-3 ml-5">
                    <label class="pt-3">
                      @foreach ($orders as $order)
                      @if ($order->zodiak==5)

                      - {{$order->day}}&nbsp;

                      @else
                      @endif
                      @endforeach
                    </label>
                    <label style="float: right;"><img src="img/signs/lion.png" style="width: 50px"></label></div>


                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 p-3">
                      <label class="pt-3">
                        @foreach ($orders as $order)
                        @if ($order->zodiak==7)

                        - {{$order->day}}&nbsp;

                        @else
                        @endif
                        @endforeach
                      </label>
                      <label style="float: left;"><img src="img/signs/terezi.png" style="width: 50px"></label></div>
                      <div class="col-md-3 p-3">
                        <label class="pt-3">
                          @foreach ($orders as $order)
                          @if ($order->zodiak==6)

                          - {{$order->day}}&nbsp;

                          @else
                          @endif
                          @endforeach
                        </label>
                        <label style="float: right;"><img src="img/signs/deva.png" style="width: 50px"></label></div>
                        <div class="col-md-3"></div>

                      </div>
                    </div>

                    <div class="card text-center pt-5 pb-5 mt-3" >
                      <div class="row justify-content-center">
                        <div class="col-md-12">
                          <h3>Додаткова інформація</h3>
                          <p class="pl-5 pr-5 pt-2">
                            Це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. 
                          </p>

                        </div>

                      </div>
                    </div>

                  </div>
                  @endsection
