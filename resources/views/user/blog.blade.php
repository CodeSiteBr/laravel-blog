@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'Meu blog')

@section('sub-heading', 'Aprenda Juntos e Cresça Juntos')

@section('head')
    <style>
        .fa-thumbs-up:hover {
            color:red;
        }
    </style>
@endsection


@section('main-content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <posts
            v-for='value in blog'
            :title='value.title'
            :subtitle='value.subtitle'
            :created_at='value.created_at'
            :key=value.index
            :post-id=value.id
            login= "{{ Auth::check() }}"
            :like=value.likes.length
            :slug=value.slug
            ></posts>
        <hr>

        <!-- Pager -->
        <div class="clearfix">
            {{ $posts->links() }}
            {{-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> --}}
        </div>
        </div>
    </div>
</div>

<hr>
@endsection
