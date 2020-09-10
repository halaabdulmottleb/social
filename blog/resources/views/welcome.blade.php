<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Long+Cang&display=swap" rel="stylesheet">
    <title></title>
    <style type="text/css">
        body{
            background: rgb(34,193,195);
            background: linear-gradient(90deg, rgba(34,193,195,1) 48%, rgba(45,253,205,1) 100%);
              font-family: "Times New Roman", Times, serif;

        }
        .currency{

  font-size:.5em;
  vertical-align:text-top; /* resembling more the tm symbol you mentioned */

}
    </style>
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg " style="background-color: white">
       <a class="navbar-brand" href="/">Home</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               {{Auth::user()->name}}
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="logout">logout</a>
             </div>
           </li>
         </ul>
       </div>
     </nav>
<!-- end nav -->
    <div class="container">

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2 text-center mt-4">
                <div class="row mt-4">
                    <div class="col-md-6 " style="">
                       <div class="card mt-4 "  style="height: 250px">
                        <div class="card-body mt-4">
                           <h5 class="card-title"> <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"  /></h5>
                           <p class="card-text" style="color: grey" ;> Select Files from  
                            <span style='font-family: "Long Cang", cursive; font-size: 25px'> <b>Instagram </b></span></p>

                           <a href="{{ url('login/instagram')}}" class="btn btn-primary">
                           Connect Instagram

                           </a>

                         </div>
                       </div>
                   </div>
                 
                   <div class="col-md-6 text-center">
                       <div class="card mt-4" style="height: 250px" >
                        <div class="card-body mt-4">
                           <h5 class="card-title" >
                                <img src="https://img.icons8.com/plasticine/48/000000/paypal.png"/>
                           </h5>
                           <div class="card-text" style="color: grey">
                               Donate with
                              <b><span style='font-family: "Long Cang", cursive; font-size: 25px'> Paypal </span></b>
                              <span class="currency">$</span>
                              <span class="price">10</span>
                           </div>
                          <br>
                           <!-- Paypal -->
                           <div id="paypal-button"></div>
                           <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                           <script>
                             paypal.Button.render({
                               // Configure environment
                               env: 'sandbox',
                               client: {
                                 sandbox: 'AdlgeNCfFcrQ40XteP8xkmo13Bkwr3bzfCDJcKdZv-aUL7lscUClZiA6GluScnu9yq2mLISI11oPBEWw',
                                 production: 'demo_production_client_id'
                               },
                               // Customize button (optional)
                               locale: 'en_US',
                               style: {
                                 size: 'medium',
                                 color: 'gold',
                                 shape: 'pill',
                               },                           

                               // Enable Pay Now checkout flow (optional)
                               commit: true,                           

                               // Set up a payment
                               payment: function(data, actions) {
                                 return actions.payment.create({
                                   transactions: [{
                                     amount: {
                                       total: '10',
                                       currency: 'USD'
                                     }
                                   }]
                                 });
                               },
                               // Execute the payment
                               onAuthorize: function(data, actions) {
                                 return actions.payment.execute().then(function() {
                                   // Show a confirmation message to the buyer
                                   window.alert('Thank you for your purchase!');
                                 });
                               }
                             }, '#paypal-button');                           

                           </script>
                                                        
                            </div>

                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>

  </body>
</html>