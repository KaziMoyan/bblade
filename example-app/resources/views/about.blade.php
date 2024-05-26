@extends('layouts.masterlayout')

@section('content')
    <h2>Another Page</h2>

    @verbatim
    <div id="app"> {{ message }}</div>
    @endverbatim
    
@endsection



@section('title')
    ABout
@endsection
<div>
  {{ url() -> current()}}

  {{url()-> full()}}



     {{url()-> previous()}}
     {{url('about-us',['apple ->1'])}}

</div>

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



<script>
  const { createApp, ref } = Vue

  createApp({
    data() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush