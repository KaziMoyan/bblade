@php
  $user = "Moyeen kazi ";  
  $fruits = ["apple","Orange","Banana"];
@endphp
<script>
    //var data =@json($fruits);

    var data ={{Js::from($fruits)}};

    data.forEach(function(entry){
        console.log(entry);
    });
</script>
@extends('layouts.masterlayout')
