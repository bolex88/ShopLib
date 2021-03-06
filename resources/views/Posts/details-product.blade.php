@extends('layouts.homemaster')

@section('main')

      <!-- PRODUCTS VIEW BEGINS HERE -->
      <section id="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card my-5">
                        <div class="column">
                            <img src="/storage/{{$product->images()->first()->path}}" alt="" class="card-img-top" height="300" width="750">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="pt-5">{{$product->title}}</h4>
                    <table class="table table-hover my-5">
                        <tbody>
                            <tr>
                                <td><p>Description</p></td>
                                <td><span class="description-text">
                                {{$product->description}}
                                </span></td>
                            </tr>
                            <tr>
                                <td><p>Price </p></td>
                                <td><span class="description-text">
                                {{$product->price}}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Uploaded By</p></td>
                                <td><span class="description-text">
                               {{$user->name}}
                                     </span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Location</p></td>
                                <td><span class="description-text">
                                {{$product->location}}
                                     </span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Seller Contact </p></td>
                                <td><span class="description-text">
                                {{$product->seller_contact}}
                                    </span>
                                    <a href="tel:{{$product->seller_contact}}">CLICK TO CALL</a> <br>
                                    <a href="sms:{{$product->seller_contact}}">CLICK TO TEXT</a>
                                    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('products')}}" class="btn btn-primary"> <span><i class="fas fa-chevron-circle-left"></i></span> Back to Homepage</a>     
                </div>
                
            </div>
        </div>
     <br /> <br />
@endsection
