<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>SHOPLIB.COM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/fontawesome-all.js"></script>
</head>
<body>
     <!-- NAVBAR  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container">
                <a class="navbar-brand text-white" href="{{route('products')}}">SHOPLIB.COM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">

                        <a href="{{route('products.add')}}" class="btn btn-info btn-lg">Add New Product <span><i class="fas fa-plus-circle"></i></span></a>
                    </li>
                    <a class="btn btn-dark" href="/"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                    </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                 </form>


                </div>
        </div>
      </nav>
      <!-- NAVABAR END -->

      <!-- SELLER VIEW BEGINS HERE -->
      <section id="seller-section">
         <div class="container">
          <div class="row mt-5">
                <div class="col">
                    <h4 class="text-center">Your Products</h4>
                
            </div>
        </div>
            <div class="row my-5 justify-content-center align-items-center">
                    @foreach($products as $product)
                        <div class="col-md-6">
                        
                            <table class="table table-dark table-hover table-bordered">
                            
                                <thead scope="col">
                                    <th>{{$product->title}}</th>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><h6><a href="product-details.html" class="product-name">
                                        {{$product->description}}
                                        {{$product->price}}
                                        {{$product->location}}
                                        {{$product->seller_contact}}
                                        </a></h6></td>

                                        <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-light"><i class="fas fa-edit"></i></a></i></td>
                                        <td>
                                            <form action="{{route('products.delete', $product->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <input class="btn btn-light" type="submit" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach   
                        </div>
                </div>   
          
        </div>
      </section>
      <!-- SELLER VIEW ENDS HERE -->


    <!-- FOOTER -->
    <footer  class="bg-primary py-2 footer">
       <p class="text-center py-2 text-white">LIBER-TECH &copy; 2020</p>
    </footer>

</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- script for toggle sidebar button -->
<script>
    // $(document).ready(function () {

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //         $('#content').toggleClass('active');
    //      });

    // });
</script>

<!--[if lt IE 9]--/>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</html>
