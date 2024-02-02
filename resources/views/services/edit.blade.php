@extends('layout')

@section('title')
    Modify
@endsection

@section('content')
    <section class="login-body">
        <a href="{{ route('profile') }}" class="back">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="create">
            <h2>
                <img src="{{ asset('assets/logo.png') }}" alt="logo">
                HireMe
            </h2>
            <form action="{{ route('services.update',$service) }}" method="post">
                @csrf
                @method('PUT')
                <label for="title">
                    <h4>Service Title</h4>
                    <input type="text" name="title" id="title" placeholder="Enter Title" value="{{$service->title}}">
                </label>
                <label for="description">
                    <h4>Service Description</h4>
                    <textarea name="description" id="description" id="" cols="30" rows="10">{{$service->description}}</textarea>
                </label>
                <label for="price">
                    <h4>Price</h4>
                    <input type="number" name="price" id="price" placeholder="Enter Price" value="{{$service->price}}">
                </label>
                <label for="category">
                    <h4>Categories</h4>
                    <select name="category" id="category">
                        <option value="" hidden>Pick a category</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}" {{ $cat->id == $service->category_id ? 'selected' : '' }}>{{$cat->name}}</option>
                        @endforeach
                    </select>
                </label>
                <button type="submit">Update</button>
            </form>
        </div>
    </section>
@endsection
