
  @extends('layouts.app')

  @section('content')

  <div class="grid-x">
    <div class="cell small-2">@include('inc.navbar')</div>
    <div class="cell small-10">
  
             
           {!! Form::open(['url' =>'postingplans','method' =>'post','files' => true]) !!}
              
               <legend style ="background:darkblue;color:white" class="w-auto">Posting Plan Details:</legend>
               <div class="grid-container">
                    <div class="grid-x grid-padding-x">

                        <div class="cell">
                            {{ Form::Label('pdesc','Posting Plan Descriptions')}}
                            {{Form::textarea('pdescriptions')}}   
                        </div>
                        <div class="cell medium-4">
                            {{ Form::Label('type','Type ')}}
                            {{Form::select('type',['featured'=>'Featured','superfeatured'=>'SuperFeatured','brokers'=>'Brokers'])}}   
                        </div>
                        <div class="cell medium-4">
                          {{ Form::Label('cost','Posting Price')}}
                          {{Form::text('pcost')}}   
                      </div>

           <div class="cell">
              
      {{ Form::submit('SUBMIT',['class'=>'button'])}}
           </div>
          </div>
     </div>
           {!! Form::close() !!}

   </div>
   
  </div>
  
</div>
     
   @endsection