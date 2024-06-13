<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>#1 Best Master's Assignment Help</title>
<meta name="description" content="MasterAssignmentHelp.com provides online assignment help for students. Our team of experts can help you with essays, online classes, exams, projects, and more. Get high grades and reduce stress with our affordable services. Contact us on WhatsApp today!" />
<meta name="keywords" content="assignment help, online classes, essays, exams, projects, homework help, dissertation writing, thesis writing, online tutoring, affordable assignment help" />

    <title>Home|| Master's Assignment Help</title>
    
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


<body>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/665c9fc4981b6c5647777b17/1hvct06b2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<nav class="navbar navbar-expand-md navbar-light nav-background nav-bg text-white">
    <div class=" container-fluid justify-content-center ">
        <ul class="navbar-nav pt-2">
            <li class="nav-item px-2
            pt-2">+19143174571 
</li>
            
            <li class="nav-item px-2 pt-2">Mastersassignmenth@gmail.com </li>
            <li class="nav-item px-2 rounded bg-success pt-2 pb-2 "><a href="https://wa.me/message/DX4EZYSMFHSJP1" class="text-white whatsapp-link" >Order On Whatsapp</a></li>
        </ul>
    </div>
    </nav>

    <nav class="navbar navbar-expand-md navbar-light nav-background mt-3 mb-5 pb-5 mx-5 px-4">



    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-8">
        <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo.png') }}" class="img-fluid" alt="logo"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end text-center" id="navbarSupportedContent">
        <ul class="navbar-nav mx-3">
            <li class="nav-item link">
                <a class="nav-link text-black" href="#contact">Contact</a>
            </li>
            <li class="nav-item link">
                <a class="nav-link text-black" href="#">Blog</a>
            </li>
            <li class="nav-item link">
                  <a class="nav-link text-black" href="/faqs">Faqs</a>
                </li>
            <li class="nav-item link">
                <a class="nav-link text-black" href="{{route('index')}}#about">About Us</a>
            </li>
            <li class="nav-item link">
                <a class="nav-link nav-bg text-white rounded" href="{{ route('order') }}">Order Now</a>
            </li>
        </ul>
    </div>
</nav>

<div class="row justify-content-center text-center">
<h1 class="Text-center mb-5">Payment </h1>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-8 mx-5">
    <div id="paypal-button-container"></div>
    <p id="result-message"></p>

</div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-8">
            <img src="{{asset("/images/paypal.webp")}}" alt="" height="250px">
        </div>
    </div>
    


    <script
    src="https://www.paypal.com/sdk/js?client-id=AUN6vwKZ5Vn8Qf-Y4fvnCE1TbQHEstLOJx1CWUR-Ow7EHltJLLRAdsrYWR8D47tMcnY4jXFcswZigQIi" data-sdk-integration-source="developer-studio" ></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const total_Price = {!! $total_Price !!};
    paypal.Buttons({
        createOrder: function(data, actions) {
            const amount = total_Price;
            const currency ="USD" ;

            if (!amount || isNaN(amount) || amount <= 0) {
                alert('Please enter a valid amount.');
                return;
            }

            if (!currency || currency.length !== 3) {
                alert('Please enter a valid currency code.');
                return;
            }

            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: amount,
                        currency_code: currency
                    }
                }]
            }).catch(function(err) {
                console.error('Error creating order:', err);
                alert('An error occurred while creating the order.');
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name);
            }).catch(function(err) {
                console.error('Error capturing order:', err);
                alert('An error occurred while capturing the order.');
            });
        },
        onError: function(err) {
            console.error('PayPal Button Error:', err);
            alert('An error occurred with the PayPal button.');
        }
    }).render('#paypal-button-container');
});

        </script>









</body>
</html>