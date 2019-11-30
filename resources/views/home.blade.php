@extends('layouts.app')


@section ('content')


<div class="container"></div>
    <div class="row">
        <div class="col-12 col-lg-6">
                <!--centrar imagen con class de bootstrap   --> 
            <img class="img-fluid- mg-2"  width="250"  src="/img/home.svg" alt="yoga">

        </div>
    </div>
</div>

<div class="container"></div>
    <div class="row">
        <div class="col-12">
        <h1 class="display-4 text-primary">Home</h1>
        <p class="leed text-secondary">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
         when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, <br>
         remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus <br>
         PageMaker including versions of Lorem Ipsum.
        </p>

        </div>

        
       
            </div>
        </div>
    </div>
</div>





@auth
{{auth()->user()->name}}
@endauth

@endsection ()