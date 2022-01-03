<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Available Jerseys</h6>
                        <h2>Order what you like before it's stock out!</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)

                <form action="{{url('/addcart', $data->id)}}" method="post">

                @csrf

                    <div class="item">
                        <div style="background-image: url('/jerseyimage/{{$data->image}}');" class='card'>
                            <div class="price"><h6>{{$data->price}}$</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Book this item<i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>

                        <input type="number" name="quantity" min="1" value="1" style="width:80px; padding:5px;">
                        <input style="padding:5px;" type="submit" value="Add to Cart">



                    </div>

                    </form>

                    @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </section>