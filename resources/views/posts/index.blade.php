@extends('layouts.app')

@section('content')
  <div class="container text center">
    <form action="{{ route('posts') }}" method="post" class="mb-4">
        @csrf
        <div class="input-group">
         <textarea name="body" id="body" cols="30" rows="4" class="form-control mb-4" aria-label="With textarea" placeholder="Post something!"></textarea>
        </div>
        @error('body')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Post</button>
        </div>
    </form>

    @if ($posts->count())
         @foreach ($posts as $post)
          <div class="mb-4">
              <a class="font-bold none">{{ $post->user->username }}</a> <span>{{ $post->created_at->diffForHumans() }}</span>
              <p class="mb-2">{{  $post->body }}</p>
              <div class="row">
                  <div class="col-1">
                    <form action="{{ route('posts.likes', $post->id)}}" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3">Like</button>
                    </form>
                   </div>
                   <div class="col-1">
                    <form action="" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3">Unlike</button>
                    </form>
                  </div>
              </div>
              <div class="row">
                <div class="col-2">
                  <span>{{$post->likes->count() }} Likes</span>
                </div>
                <div class="col-2">
                    <span>Dislikes</span>
                </div>
              </div>
          </div>
         @endforeach
         <!-- Pagination  -->
         {{$posts->links()}}
    @else
        <p>There are no posts</p>
    @endif
  </div>
@endsection
