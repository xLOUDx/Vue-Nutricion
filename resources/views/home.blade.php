@extends('layouts.app')

@section('content')

          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <div id="app">
            <Myheader> </Myheader> <br>
              <router-view></router-view> <br>
            <Myfooter> </Myfooter>
          </div>

@endsection
