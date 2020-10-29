<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airport flight</title>
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">   
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
                                <td class="titleCopy" value="title-copy">{{$airport->name}}</td>
                                <td>{{$airport->stopover}}</td>
                                <td class="dateCopy" value="date-copy">{{$airport->code}}</td>
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
                </div>
            </div>
        </div>
    </section>
</body>
</html>