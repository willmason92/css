<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Impression CSS</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/modal.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>
    <style>

</style>
    <body>




      <div id="app">

    <!-- Page Content -->
    <div class="container">

          <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
              <input v-model="keyword" type="text" placeholder="Search Products" />
            </div>
          </div>

      <!-- Page Features -->
      <div class="row text-center" v-for="product in filteredList">

        <div class="col-lg-12 col-md-12" style="padding:50px;">
          <div class="card">
            <img class="card-img-top" :src="product.image" alt="@{{product.name}}">
            <div class="card-body">
              <h4 class="card-title">@{{product.name}}</h4>
              <p class="card-text">@{{product.price}}</p>
            </div>
            <div class="card-footer">
              <a :href="'/product/'+product.unique_identifier" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    </div>
</div>


      </div>



      <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
