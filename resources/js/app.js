require('./bootstrap');

var $ = require('jquery');

import 'bootstrap';

$(document).ready(function() {
    
$('#price-button').click(function() {

        $(".flight-template").html("");
        $(".no-result").remove("");

    var departure = $('#departure').val();
    var arrival = $('#arrival').val();

     if($('select[name=flightDeparture] option[value=departure]').filter(':selected').val() || $('select[name=flightArrival] option[value=arrival]').filter(':selected').val()) {
        $(".flight-template").append("<h4 class='no-result'>Seleziona un aeroporto di partenza e un aeroporto di arrivo</h4>");
      } else { 
        //faccio partire una chiamata ajax per recuperare gli eventi filtrati
        $.ajax({
            "url": "http://localhost:8000/api/filter/flights",
                 "method": "GET",
                 "data": {
                     'code_departure':  departure,
                     'code_arrival' : arrival
                 },
                 "success": function(data) {
                    var source   = document.getElementById("template").innerHTML;
                    var template = Handlebars.compile(source);
                       // svuoto il contenuto della pagina

                        if (data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var current_flight = data.results[i];
                                var context = {
                                    id : current_flight.id,
                                    stopover: current_flight.stopover,
                                    code_departure: current_flight.code_departure,
                                    code_arrival: current_flight.code_arrival,
                                    price: current_flight.price
                                }

                                var html_finale = template(context);
                                $(".flight-template").append(html_finale);
                            }
                        }else{
                            $(".flight-template").append("<h3 class='no-result'>Nessun volo trovato</h3>");
                        }
                     },
                     "error": function() {
                         SpeechRecognitionAlternative('errore');
                     },
              })
       } 

})

})