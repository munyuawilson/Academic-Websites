<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Samples</title>
<meta name="description" content="MasterAssignmentHelp provides online assignment help for students. Our team of experts can help you with essays, online classes, exams, projects, and more. Get high grades and reduce stress with our affordable services. Contact us on WhatsApp today!" />
<meta name="keywords" content="assignment help, online classes, essays, exams, projects, homework help, dissertation writing, thesis writing, online tutoring, affordable assignment help" />

    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->

</head>
@include('includes.nav')

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
                    <h4>About Us</h4>
                    <p>Best online platforms to share the burden of students by delivering quality work which help them to rank higher in their studies. If you are also a student who is searching for an online educational assistance, look no further. We, team of professionals and experts of different subjects, are here to help you out, and never let you compromise on your freedom.</p>
                    <h4>Recent Posts</h4>
                    <ul class="list-unstyled">
                        @foreach ($samples as $sample)
                            <li><a href="#">{{ $sample->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </main>

</div>

]
@include('includes.footer')
</body>
<script src="{{ asset('/js/index.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js"
></script>

</html>