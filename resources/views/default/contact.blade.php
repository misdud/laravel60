@extends('default.layouts.main_layout')


@section('content')
<div class="row">
    <div class="col-md-4">
        <h2>Arhives</h2>
        <ul style="border: 1px solid #ccc; width: 200px; list-style: none; list-style-position: outside; margin-left: -50px; ">

            <li class="nav-item"><a class="nav-link" href="#">Февраль 2019</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Январь 2019</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Декабрь 2018</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Ноябрь 2018</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Октябрь 2018</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Сентябрь 2018</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Август 2018</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Июнь 2018</a></li>

        </ul>
    </div>
    <div class="col-md-8" style="">
       <form action="{{ route('contact', ['page'=>'home']) }}" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text"  name="name" class="form-control"  value="{{ old('name') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Email address</label>
                <input type="email"  name="email" class="form-control" value="{{ old('email') }}"  id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Site</label>
                <input type="text"  name="site" class="form-control"  value="{{ old('site') }}" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter site">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Input text</label>
                <textarea name="mytext" class="form-control">{{  old('mytext') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            @method('PUT')
            @csrf
        </form>
    </div>
    <div class="col-md-8" style="float: left;">
        <pre>
            {{ print_r(Session::all()) }}
        </pre>
    </div>
</div>


<hr>



@endsection





