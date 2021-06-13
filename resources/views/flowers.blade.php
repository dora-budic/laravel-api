@extends('layouts.app')

@section('head')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('main')
  <main id="root">
    <ul>
      <li v-for="flower in flowers" :key="flower.id">
        <h3>Name: @{{flower.name}}</h3>
        <span><strong>Location: </strong>@{{flower.location}}</span>
        <p><strong>Description: </strong>@{{flower.description}}</p>
      </li>
    </ul>
  </main>
@endsection

@section('foot-script')
  <script src="{{asset('js/flowers.js')}}" charset="utf-8"></script>
@endsection
