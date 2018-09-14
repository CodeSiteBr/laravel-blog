@extends('user/app')
@section('bg-img', Storage::disk('local')->url($post->image))
@section('head') {{-- themes: default,okaidia,coy,dark,funky,solarized-light,tomorrow-night,twilight
--}}
<link rel="stylesheet" href="{{ asset('user/plugins/prism/css/okaidia.css') }}">
@endsection

@section('title', $post->title)
@section('sub-heading', $post->subtitle)
@section('main-content')
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {{-- Categories --}}
                <small>{{ __('Created at') }} {{ $post->created_at->diffForHumans() }}</small> @foreach ($post->categories
                as $category)
                <small class="float-right" style="margin-right: 20px;">
                            <a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
                        </small> @endforeach {{--/ Categories --}} {{-- Body --}} {!! htmlspecialchars_decode($post->body)
                !!} {{-- Tag --}}
                <h3>Tag Clouds</h3>
                @foreach ($post->tags as $tag)
                <a href="{{ route('tag', $tag->slug) }}">
                            <small class="float-left" style="margin-right: 10px;border-radius: 5px;border: 1px solid gray;
                            padding: 5px;">{{ $tag->name }}</small>
                        </a> @endforeach {{--/ Tag --}}
            </div>

            {{-- Facebook comments --}}
            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;

                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1761023827329066&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="10"></div>
            </div>
            {{--/ Facebook comments --}}
        </div>
    </div>
</article>

<hr>
@endsection

@section('footer')
<script src="{{ asset('user/plugins/prism/js/prism.js') }}"></script>
@endsection
