@include('layouts.includes.head')
@include('layouts.includes.nav')

<div class="container">
    <header class="blog-header text-center">
        <h1 class="blog-title">Samples</h1>
        <p class="lead">Welcome to the samples page where we share insights and research.</p>
    </header>

    <main role="main" class="pb-3">
        <div class="row pt-5">
            <div class="col-md-8">
                @foreach ($samples as $sample)
                    <div class="blog-post mb-4">
                        <h2 class="blog-post-title">{{ $sample->title }}</h2>
                        <p>{!! $sample->content !!}</p>
                       
                    </div>
                @endforeach

                <!-- Pagination -->
                {{ $samples->links('pagination::bootstrap-5') }}
            </div>

            <aside class="col-md-4">
                <div class="sidebar">
                    <h4>About Me</h4>
                    <p>Best online platforms to share the burden of students by delivering quality work which help them to rank higher in their studies. If you are also a student who is searching for an online educational assistance, look no further. We, team of professionals and experts of different subjects, are here to help you out, and never let you compromise on your freedom.</p>
                    <h4>Recent Posts</h4>
                    <ul class="list-unstyled">
                        @foreach ($samples as $sample)
                            <li><a href="#" class="text-decoration-underline text-primary">{{ $sample->title }}</a></li>
                        @endforeach
                    </ul>
                    
                </div>
            </aside>
        </div>
    </main>

</div>

@include('layouts.includes.slideshow')
@include('layouts.includes.footer')
