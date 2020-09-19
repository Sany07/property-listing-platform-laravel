@extends('site.base')

@section('content')
    <!-- Showcase -->
    <section id="showcase">
        <div class="container text-center">
            <div class="home-search p-5">
                <div class="overlay p-5">
                    <h1 class="display-4 mb-4">
                        Property Searching Just Got So Easy
                    </h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae quas, asperiores
                        eveniet vel nostrum magnam
                        voluptatum tempore! Consectetur, id commodi!</p>
                    <div class="search">
                        <form method="GET" action="{% url 'searchapp:search' %}">
                            <!-- Form Row 1 -->
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="sr-only">Keywords</label>
                                    <input type="text" name="keywords" class="form-control"
                                        placeholder="Keyword (Pool, Garage, etc)">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="sr-only">City</label>
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="sr-only">State</label>
                                    <select name="state" class="form-control">
                                        <option selected="true" disabled="disabled">State (All)</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Row 2 -->
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label class="sr-only">Bedrooms</label>
                                    <select name="bedrooms" class="form-control">
                                        <option selected="true" disabled="disabled">Bedrooms (All)</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select name="price" class="form-control" id="type">
                                        <option selected="true" disabled="disabled">Max Price (Any)</option>
                                        <option value="100000">$100,000</option>
                                        <option value="200000">$200,000</option>
                                        <option value="300000">$300,000</option>
                                        <option value="400000">$400,000</option>
                                        <option value="500000">$500,000</option>
                                        <option value="600000">$600,000</option>
                                        <option value="700000">$700,000</option>
                                        <option value="800000">$800,000</option>
                                        <option value="900000">$900,000</option>
                                        <option value="1000000">$1M+</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-secondary btn-block mt-4" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Listings -->
    <section id="listings" class="py-5">
        <div class="container">
            <h3 class="text-center mb-3">Latest Listings</h3>
            <div class="row">
                <!-- Listings -->
                <!-- for listing in listings -->
                @foreach ($latest_listings as $listing)
                    
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card listing-preview">
                      <img class="card-img-top" src="assets/img/homes/home-1.jpg" alt="">
                      <div class="card-img-overlay">
                        <h2>
                          <span class="badge badge-secondary text-white">{{ $listing -> price }}</span>
                        </h2>
                      </div>
                      <div class="card-body">
                        <div class="listing-heading text-center">
                          <h4 class="text-primary">{{ $listing -> title }}</h4>
                          <p>
                            <i class="fas fa-map-marker text-secondary"></i></p>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                          <div class="col-6">
                            <i class="fas fa-th-large"></i> Sqft: 2500</div>
                          <div class="col-6">
                            <i class="fas fa-car"></i> Garage: {{ $listing -> garage }}</div>
                        </div>
                        <div class="row py-2 text-secondary">
                          <div class="col-6">
                            <i class="fas fa-bed"></i> Bedrooms: {{ $listing -> bedroom }}</div>
                          <div class="col-6">
                            <i class="fas fa-bath"></i> Bathrooms: {{ $listing -> bathroom }}</div>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                          <div class="col-12">
                            <i class="fas fa-user"></i> {{ $listing -> realtor-> name }}</div>
                        </div>
                        <div class="row text-secondary pb-2">
                          <div class="col-6">
                            <i class="fas fa-clock"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                        </div>
                        <hr>
                        <a href="{{}}" class="btn btn-primary btn-block">More Info</a>
                      </div>
                    </div>
                  </div>
                
                @endforeach
 

            </div>
        </div>
    </section>

    <section id="services" class="py-5 bg-secondary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-comment fa-4x mr-4"></i>
                    <hr>
                    <h3>Consulting Services</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-home fa-4x mr-4"></i>
                    <hr>
                    <h3>Propery Management</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-suitcase fa-4x mr-4"></i>
                    <hr>
                    <h3>Renting & Selling</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, debitis nam! Repudiandae,
                        provident iste consequatur
                        hic dignissimos ratione ea quae.</p>
                </div>
            </div>
        </div>
    </section>
@endsection