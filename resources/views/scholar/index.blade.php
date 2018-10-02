@extends('scholar.master')

@section('js')
<script src="{{url('js/scholar.js')}}"></script>
@endsection

@section('content')
<br/>
  <div id="list-area"></div>
    <script>
      $(function(){
        listScholar();
      });
    </script>
@endsection
