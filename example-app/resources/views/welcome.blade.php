@extends('layouts.masterlayout')

@section('content')
    <h2>Home Page</h2>
    <p>This your hom epage ,u got all about home here </p>

@endsection

@section('content')
    <h2>just testing</h2>
@endsection

@section('title')
    Home
@endsection
<div>
<from action="{{url:: to ('/save_data')}}" method="post">
    <input type="text" placeholder="ENter your name "/>
    <button > Submit </button>
</from> 
   
    <br>
    {{URL:: full()}}
    {{url:: current()}}
     
</div>


@push('scripts')

     <script src = "/jquery.js"><script>
    <script src = "/bootstrap.js"><script>
    <script src = "/example.js"><script>
        
@endpush
  
@push('scripts')
     <script src = "/Vue.js"><script>    
@endpush

@push('style')
     <link rel="stylesheet" href= "css/bootstrap.css">  
@endpush

@prepend('style')
    <style>
     #wrapper{
        background:tan;
     }
    </style>

@endprepend