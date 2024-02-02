@extends('layout')

@section('title')
    Create
@endsection

@section('content')
    <section class="login-body">
        <a href="{{ route('services.index') }}" class="back">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="create">
            <h2>
                <img src="{{ asset('assets/logo.png') }}" alt="logo">
                HireMe
            </h2>
            <form action="{{ route('services.store') }}" method="post">
                @csrf
                <label for="title">
                    <h4>Service Title</h4>
                    <input type="text" name="title" id="title" placeholder="Enter Title">
                </label>
                <label for="description">
                    <h4>Service Description</h4>
                    <textarea name="description" id="description" id="" cols="30" rows="10">Tell us more about your service <3 </textarea>
                </label>
                <label for="price">
                    <h4>Price</h4>
                    <input type="number" name="price" id="price" placeholder="Enter Price">
                </label>
                <label for="category">
                    <h4>Categories</h4>
                    <select name="category" id="category">
                        <option value="" hidden>Pick a category</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </label>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection
