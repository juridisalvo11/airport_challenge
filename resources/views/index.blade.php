<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport flight</title>
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>   
</head>
<body>
<section class="flight-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>
                                    <a href="">ID</a>
                                </th>
                                <th>
                                    <a href="">Name</a>
                                </th>
                                <th>
                                    <a href="">Stopover</a>
                                </th>
                                <th>
                                    <a href="">Code</a>
                                </th>
                                <th>
                                    <a href="">Actions</a>
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody class="airports-table">
                            @foreach ($airports as $airport)
                            <tr class="text-center flight-list">
                                <td>{{$airport->id}}</td>
                                <td>{{$airport->name}}</td>
                                <td>{{$airport->stopover}}</td>
                                <td>{{$airport->code}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="">Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="filters-list">
                        <div class="form-group filter-input">
                            <label for="flightDeparture">From :</label>
                            <input type="text" name="flightDeparture" class="form-control" id="departure">
                        </div>
                        <div class="form-group filter-input">
                            <label for="flightArrival">To :</label>
                            <input type="text" name="flightArrival" class="form-control" id="arrival">
                        </div>
                        <div class="buttons d-flex justify-content-flex-start">
                              <div class="text-center">
                                  <button id="price-button" class="btn btn-primary mr-3">Lowest price</button>
                              </div>
                         </div>
                    </div>
                    <div class="flight-template"></div>
                </div>
            </div>
        </div>
        <script id="event-template" type="text/x-handlebars-template">
                      <div class="flight-card" style="width: 18rem;">
                        <img class="card-img-top" src="img/flight.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">@{{name}}</h5>
                            <p class="card-text">Stopover : @{{stopover}}</p>
                            <p class="card-text">Airport code : @{{code}}</p>
                            <p class="card-text">Price : @{{price}}</p>
                            <a href="localhost:8000/events/@{{id}}" class="btn btn-primary">Details</a>
                        </div>
                      </div>
          </script>
    </section>
</body>
</html>