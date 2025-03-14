@extends('master')
@section('content')
    <!-- Blog Image -->
    <!-- Blog Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Blog Text -->
            <div class="col-lg-8">
                <br/>
                <a href="{{route('home')}}">Back To Portfolio</a>
                <br/>
                <br/>
                <h1>{{$article['title']}}</h1>
                <img src="{{asset('assets/images/blog-1.jpg')}}" alt="Blog Image" style="width: 100%" class="blog-image">

                <div class="social-media-sharer">
                    <a href="#" class="social-media-icon"><i class="icon-facebook2"></i></a>
                    <a href="#" class="social-media-icon"><i class="icon-twitter2"></i></a>
                    <a href="#" class="social-media-icon"><i class="icon-linkedin2"></i></a>
                    <a href="#" class="social-media-icon"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-media-icon"><i class="icon-whatsapp"></i></a>
                </div>
                <hr/>
               {!! $article['description'] !!}
                <br/>
                <hr/>
                <br/>
                <div id="disqus_thread"></div>
                <!-- Add your blog content here -->
            </div>

            <!-- Slider -->
            <div class="col-lg-4">
                <section class="colorlib-blog" data-section="blog">
                    <div>
                        <div class="row">
                            <div class="col-md-12 animate-box"
                                 data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Read</span>
                                <h2 class="colorlib-heading">Similar Posts</h2>
                            </div>
                        </div>
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="{{route('articleDetails', ['slug'=>'aaaa'])}}" class="blog-img"><img
                                        src="{{asset('assets/images/blog-1.jpg')}}" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc desc2">
                                    <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i
                                                class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="{{route('articleDetails', ['slug'=>'aaaa'])}}">Renovating National
                                            Gallery</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInRight">
                            <div class="blog-entry">
                                <a href="{{route('articleDetails', ['slug'=>'aaaa'])}}" class="blog-img"><img
                                        src="{{asset('assets/images/blog-2.jpg')}}" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc desc2">
                                    <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i
                                                class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="{{route('articleDetails', ['slug'=>'aaaa'])}}">Wordpress for a
                                            Beginner</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a href="{{route('articleDetails', ['slug'=>'aaaa'])}}" class="blog-img"><img
                                        src="{{asset('assets/images/blog-3.jpg')}}" class="img-responsive"
                                        alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                <div class="desc desc2">
                                    <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i
                                                class="icon-bubble3"></i> 4</small></span>
                                    <h3><a href="{{route('articleDetails', ['slug'=>'aaaa'])}}">Make website from
                                            scratch</a></h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                                        large language ocean.</p>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-md-12 animate-box">--}}
                        {{--                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Read All <i--}}
                        {{--                                            class="icon-reload"></i></a></p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </section>
            </div>
            <script>
                const disqus_config = function () {
                    this.page.url = '{{ url()->current() }}';
                    this.page.identifier = '{{ request()->path() }}';
                };

                (function () { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://portfolio-wvdzqg9bee.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by Disqus.</a></noscript>
        </div>
    </div>
    </div>
@endsection
