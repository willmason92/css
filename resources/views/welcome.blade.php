<!DOCTYPE html>
<html>
<head>
<title>Search Products</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 30%;
    display:inline-block;
    margin:10px;
    word-wrap: break-word;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
    width:100%;
    height:84px;
}
.container p {

  word-break: break-all;
}
</style>
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3" style="display:inline-block; padding:20px;">
      <img id="img" class="img-responsive"  style="height:34px; float:left;padding: 0 10px 0 10px;" src="images/logo-small-sq.png----">
      <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group" style="position:relative;">
          <input type="text" class="form-control" name="q"
            placeholder="Search Products"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>  
  <div class="container">
    <?php //dd($users->availability[0]); ?>
  @if(isset($products))
  <h2>Search Products</h2>
        @foreach($products as $item)

        <div class="card">
          <img src="{{$item->image_link}}" alt="{{$item->description}}" style="width:100%">
          <div class="container">
            <p><b>{{$item->name}}</b></p> 
            <p><b>£{{$item->availability->price}}</b></p> 
          </div>
          <a href="">
            <button type="submit" class="btn btn-success pull-right" value="View" style="margin:-30px 5px 5px 5px;">View
            </button>
          </a>
        </div>

        @endforeach

    {!! $products->render() !!}@endif
  </div>
    <div class="container">
      @if(isset($details))
      <p> The Search results for your query <b> {{ $query }} </b> are :</p>
      <h2>Product details</h2>
          @foreach($details as $user)
        <div class="card">
          <img src="{{$item->image_link}}" alt="{{$item->description}}" style="width:100%">
          <div class="container">
            <p><b>{{$user->name}}</b></p> 
            <p><b>£{{$user->availability->price}}</b></p> 
          </div>
          <a href="">
            <button type="submit" class="btn btn-success pull-right" value="View" style="margin:-30px 5px 5px 5px;">View
            </button>
          </a>
        </div>
          @endforeach
      
      @if($details){!! $details->render() !!}@endif
      @elseif(isset($message))
      <p>{{ $message }}</p>
      @endif
    </div>
</body>
</html>