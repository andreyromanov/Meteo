
@extends('layouts.app')

@section('content')

<div id="features" class="content text-center sect-2 bg-grey">
  <h1>Можливості</h1>
  <div class="row m-0 pb-5 pt-5" >
   <div class="space"></div>
   <div class="col-md-3 text-center m-4 pt-3 div-box">
    <img src="img/icons/Notifications Icon.png"> <br>
    <label class="pt-3 h4"><b>Точний</b> прогноз погоди</label> 
    <label class="pt-2">Завдяки перевіреному алгоритму розрахунку прогнозу погоди, Ви отримуєте прогноз на кожен день.</label>
  </div>
  <div class="col-md-3 text-center m-4 pt-3 div-box">
   <img src="img/icons/Inbox Icon1.png"> <br>
   <label class="pt-3 h4"><b>Зручний</b> інтерфейс</label>
   <label class="pt-2">Сучасний інтерфейс дозволяє зручно користуватися прогнозом погоди з телефонів, комп'ютерів та планшетів.</label>
 </div>
 <div class="col-md-3 text-center m-4 pt-3 div-box">
   <img src="img/icons/Reload Icon1.png"> <br>
   <label class="pt-3 h4"><b>Зворотній</b> зв'язок</label>
   <label class="pt-2">Надсилайте свої відкуки про сайт DSP METEO UA - завдяки Вашим відгукам, ми покращуємо цей продукт.</label>
 </div>
</div>
</div>

<div class="content bg">
  <div class="row m-0 pt-3">
    <div class="col-md-3"></div>
    <div class="col-md-3 text-white m-auto text-center">
      <h4><b>Дізнайтесь</b> точний прогноз</h4>
    </div>
    <div class="col-md-3 pt-5 text-center m-auto">
      <a href="/main#forc" class="gradient-button w-button mr-3 text-white mb-5">Прогноз</a>
      
    </div>
    <div class="col-md-3"></div>
  </div>
</div>


<div id="review"  class="row ml-0 mr-0 bg-white">
  <div class="col-md-4 text-left pt-5 content">
    <img class="mt-5" src="img/icons/Stars.png">
    <h3 class="mt-5 mb-5 pb-5">Відгуки постійних користувачів</h3>

  </div>
  <div class="col-md-8 pr-5 pt-5 pb-5 bg-grey">

    <div class="p-4 mb-5 testim" >
      <img class="mr-md-4 rounded-circle float-left w-50p" src="img/photos/avatar-2.png">
      <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </p> 
      <hr>
      <label><b>Elisa Paul</b> - Web Designer</label> <img class="float-right" src="img/icons/Twitter Icon.png">
    </div>

    <div class="p-4 mb-5 text-right testim2" >
      <img class="ml-md-4 rounded-circle float-right w-50p" src="img/photos/avatar-3.png">
      <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </p> 
      <hr>
      <label><b>Juan Richards</b> - Photographer</label><img class="float-left" src="img/icons/Twitter Icon.png">
    </div>

    <div class="p-4 testim">
      <img class="mr-md-4 rounded-circle float-left w-50p" src="img/photos/avatar-4.png">
      <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red Queen. To her surprise.  </p> 
      <hr>
      <label><b>Marian McGuire</b> - Entepreneur</label> <img class="float-right" src="img/icons/Twitter Icon.png">
    </div>
  </div>
</div>


<div id="contact" class="content pb-5 bg">
  <div class="row m-0">
    <div class="col-md-8 text-white text-center mb-5 m-auto">
      <h2 class="mt-5"><b>Напишіть</b> нам</h2>
      <label class="ml-md-5 mr-md-5 pl-md-5 pr-md-5 mb-5 h5">Якщо у Вас виникли запитання або Ви маєте побажання, щодо роботи сайту - пишіть нам повідомлення і ми обов'язково відповімо.</label>

      <form class="bg-white m-auto rounded" role="form" >
        <div class="row pl-5 pr-5 pt-5" >
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" name="first_name" id="first_name" class="form-control input-sm bg-grey" placeholder="Ім'я">
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-sm bg-grey" placeholder="Електрона пошта">
            </div>
          </div>
        </div>

        <div class="form-group pl-5 pr-5 pb-3">
          <textarea class="form-control bg-grey" placeholder="Повідомлення" rows="9"></textarea>
        </div>

        <div class="text-center">           
          <a href="#" class="gradient-button w-button mr-3 text-white mb-5">Надіслати</a>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection

</body>
</html>