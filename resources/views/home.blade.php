@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
  <div class="card">
    <div class="card-header text-center">
      Share Your Thoughts With The World!
    </div>
    <div class="card-body">
      <label for="title">Title: </label>
      <textarea class="form-control mb-5" id="title" rows="1"></textarea>
      <label for="article">Why is Monday your favorite day of the week?</label>
      <textarea class="form-control" id="article" rows="5"></textarea>
      <a href="#" class="btn btn-primary mt-5 text-center">Go somewhere</a>
    </div>
  </div>
</div>
@endsection
