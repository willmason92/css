<!DOCTYPE html>
<html>
  <head>
    <?php #dd($ob);?>
    <?php #dd($product_availability);?>
    <title>Item {{ $product->unique_identifier }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{width:100%;border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:0px !important;}
    .container > .row{padding:0 !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0 ;    
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
        
    }            
    .section{width:104%;}
    .menu-items{padding-left:0;}
}
</style>
  </head>
  <body>

  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3" style="display:inline-block; padding:20px;">
      <img id="img" class="img-responsive"  style="height:34px; float:left;padding: 0 10px 0 10px;" src="../images/logo-small-sq.png">
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
<div class="container" style="">
          <div class="row">
              <div id="image">
                  <div class="col-xs-4 col-xs-offset-1">

                    <div class="row">
                      <div class="col-xs-12">
                        <img id="img" class="img-responsive"  style="max-height:250px" v-bind:src="source" @click="copySrc">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-3">
                        <img class="img-responsive" @click="copySrc" src="{{$product->image_link}}">
                      </div>
                        @foreach($images as $image)
                      <div class="col-xs-3">
                        <img class="img-responsive" @click="copySrc" src="{{$image->image_link}}" />
                      </div>
                      @endforeach
                    </div>

                  </div>

                </div>



                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$product->name}}</h3>    
                    <h3 style="color:#337ab7">View on the <a href="{{$product->link}}}">company</a> website</h3>
        
                    <div class="section">
                        <small>
                            @if(isset($product_identifiers->brand))
                               Brand: {{ $product_identifiers->brand }}
                            @endif
                        </small>
                    </div>
                    <div class="section">
                        {{$product_availability->availability}}
                    </div>
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>{{$product->category}}</small></h6>
                    </div>

                    <!-- Precios -->
                    @if($product_availability->sale_price == NULL)
                    <h6 class="title-price"><small>Price</small></h6>
                    <h3 style="margin-top:0px;">£{{$product_availability->price}}</h3>
                    @else
                    <h3 style="margin-top:0px;">Was <span style="text-decoration:line-through; color:red;">£{{$product_availability->price}}</span></h3>
                    <h6 class="title-price"><small>Sale Price</small></h6>
                    <h3 style="margin-top:0px;">£{{$product_availability->sale_price}}</h3>
                    @endif
                    <!-- Detalles especificos del producto -->
                    <!--<div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>Attributes</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>-->
                    <!--<div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>CAPACIDAD</small></h6>                    
                        <div>
                            <div class="attr2">16 GB</div>
                            <div class="attr2">32 GB</div>
                        </div>
                    </div>-->  
                    <!-- Botones de compra -->
                    <!--<div class="section" style="padding-bottom:20px;">
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Favourite this item</a></h6>
                    </div> -->                                      
                </div>                              
        
                <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active">Description</li>
                        <li>Additional Info</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <p><small>
                                @if(isset($product_details->condition))
                                   Condition: {{ $product_details->condition }}
                                @endif
                            </small></p>
                            <p><small>
                                @if(isset($product_details->color))
                                   Colour: {{ $product_details->color }}
                                @endif
                            </small></p>
                            <p><small>
                                @if(isset($product_details->gender))
                                   Gender: {{ $product_details->gender }}
                                @endif
                            </small></p>
                            <p><small>
                                @if(isset($product_details->material))
                                    Material: {{ $product_details->material }}
                                @endif
                            </small></p>
                            <p><small>
                                @if(isset($product_details->pattern))
                                    Pattern: {{ $product_details->pattern }}
                                @endif
                            </small></p>
                            <p><small>
                                @if(isset($product_details->size))
                                    Size: {{ $product_details->size }}
                                @endif
                            </small></p>
                            <p><small>
                                @if(isset($product_details->size_type))
                                    Size-Type: {{ $product_details->size_type }}
                                @endif
                            </small></p>

                           {{$product->description}}
                        </p>
                        <small>
                            <ul>
                            </ul>  
                        </small>
                    </div>
                </div>    
            </div>
        </div>        

<script>

   $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
</script>
<script type="text/javascript">

var image = "{{$product->image_link}}";

// NOTE: I've added a comma which will be needed to delimit each array within the array.
//       Quotes will also be needed since lat and long are not integers.

</script>

<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>

  </body>
</html>