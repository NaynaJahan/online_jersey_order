<section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here you order your favourite items online and get delivery at your doorstep or stop by our shop to receive.
                            All available jerseys can be provided in sizes: Extra Small, Small, Medium, Large, Extra Large, Double Extra Large, Triple Extra Large.
                            </h2>
                 
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">jerseyplanetbd@company.com</a><br><a href="#">info.jpbd@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{url('order')}}" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Order Jersey</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <input type="number" name="quantity" placeholder="Number of Jerseys">
                            </div>
                            
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                        
                                <h3 style="padding: 20px;"><b>Preferable Date & Time for Delivery</b></h3>
                                <hr>
                
                                <hr>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <input type="time" name="time">
                            </div>

                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="product" rows="6" id="message" placeholder="Enter your Desired Jersey Names with size" required=""></textarea>
                              </fieldset>
                            </div>
            
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="address" rows="6" id="message" placeholder="Enter your House Address" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                            @auth
                            <a href="{{url('/showcart', Auth::user()->id)}}">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Confirm Your Order</button>
                              </fieldset>
                              </a>

                              @endauth

                              @guest
                              <div>
                                <h4>Log in or Sign up to Order</h4>
                                <li align="center"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                              </div>
                              @endguest
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>