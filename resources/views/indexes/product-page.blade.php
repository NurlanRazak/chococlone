@include('layouts.header')

		 <link href="{{asset('css/docs.min.css')}}" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <div class="container">
  	<div class="row ">
  		<div class="col-md-1"></div>
  		<div class="col-md-10">
  			<div class="block-item">
  				<div class="panel panel-default">
  					<div class="panel-heading">Можно купить с 25 января по 31 января</div>
  					<div class="panel-body">
  					  <h3>{{$infind->name}}</h3>	
                       <div class="row">
                      	<div class="col-md-8"> 
                      	 <div class="block-img">                     		
                              <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
                               <ol class="carousel-indicators">
                                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                 <li data-target="#myCarousel" data-slide-to="1"></li>
                                 <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol>
  <!-- Wrapper for slides -->
                           <div class="carousel-inner">
                             <div class="item active">
                               <img src="/img/{{$infind->images->path}}" alt="Los Angeles">
                               
                             </div>
                         
                             <div class="item">
                               <img src="/img/{{$infind->images->path}}" alt="Chicago">
                             </div>
                         
                             <div class="item">
                               <img src="/img/{{$infind->images->path}}" alt="New York">
                             </div>
                           </div>

  <!-- Left and right controls -->
                           <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left"></span>
                             <span class="sr-only">Previous</span>
                           </a>
                           <a class="right carousel-control" href="#myCarousel" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right"></span>
                             <span class="sr-only">Next</span>
                           </a>
                         </div>
                     </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="block-desc">
                    		<h5>
                        {{$infind->description}}</h5>
                        <br>
                         <h4> Цена {{$infind->price}} тг</h4>

                    	</div>
                    </div>
                  </div>
                  
  				</div>
  			</div>
  		</div>
  		<div class="col-md-1"></div>
  	</div>
  </div>

  <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                   
                </div>

            </div>
        </div>

     
        <br><br>
        <hr>
        <br>
        
        <div class="feedback">
    @foreach($infind->comments as $commen)
    
        <div class="show-feed">
        <div class="container">
            <div class="row">                
                <div class="col-md-3">
                    <div class="name">
                     <span class="name_user"><b>{{$commen->email}}</b></span> 
                   </div>

                </div>                
                <div class="col-md-6">
                   <div class="feedbackOfUser">
                          <h4>{{$commen->comment}}</h4>
                   </div>
                   
                </div>                
            </div>
        </div>
        </div>
       
        @endforeach
  </div>

        @if(\Auth::user())
            <form method="post"  id="ajax">
                {!! csrf_field() !!}
                <input type="hidden" value="{{$infind->id_deals}}" name="prod_id">
                <input type="hidden" value="{{ Auth::user()->email }}" name="email">
                <p>Комментарий:<br>
                    <textarea class="form-control" name="comment"></textarea></p>
                <br>
                <button type="submit" class="btn btn-success feedback_submit" style="cursor:pointer;">Добавить комментарий</button>
            </form>
        @endif
        </div>
    </article>
  <!--<div class="panel panel-default">
      <div class="panel-heading">Можно купить с 25 января по 31 января</div>
      <div class="panel-body"><h3>Экстремально круто! Абсолютно новый снежный склон ждет вас! Катания на лыжах и сноуборде для взрослых и детей со скидкой до 30% в СРК Табаган!</h3>

      <div class="all">
        <input checked type="radio" name="respond" id="desktop">
          <article id="slider">
            <input checked type="radio" name="slider" id="switch1">
            <input checked type="radio" name="slider" id="switch2">
            <input checked type="radio" name="slider" id="switch3">
            <div id="slides">
              <div id="overflow">
                  <div class="image">
                    <article><img src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/40000/39969/660x305/1_201801250513815168795988173.JPG"></article>
                    <article><img src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/40000/39969/660x305/2_201801250513915168795998117.JPG"></article>
                    <article><img src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/40000/39969/660x305/2_201801250513915168795998117.JPG"></article>
                    
                  </div>
                </div>
               </div>  
               <div id="controls">
                <label for="switch1"></label> 
                <label for="switch2"></label> 
                <label for="switch3"></label> 
              </div>

          <div id="active">
                <label for="switch1"></label> 
                <label for="switch2"></label> 
                <label for="switch3"></label> 
              </div>



          </article>
      </div>
      <div class="not-all">
        <p><h1>от 1 600 тг.</h1></p>
        
        <p> экономия 400 тг.</p>
        <button class="btn btn-default btn-md">Купить</button>


      </div>

      </div>
  </div>
<br>-->
<script>
$(document).ready(function($) {
  $(document).on('click', '.feedback_submit', function(e) {
  e.preventDefault();
    $.ajax({
   type: 'POST',
   url: '/comments/add',
    data:$('#ajax').serialize(),
      success: function(data){
                    $('.feedback').append("<div class='container'><div class='row'><div class='col-md-3'><div class='name'><span class='name_user'><b>"+data.email+"</b></span></div></div><div class='col-md-6'><div class='feedbackOfUser'>"+data.comment+"</div></div</div>");}

      ,
       error: function(mas){
         alert("Please write");
      }
  
  
});




});
});
</script>


@include('layouts.footer')