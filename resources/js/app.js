require('./bootstrap');

var $ = require('jquery');

import 'bootstrap';

$(document).ready(function() {
    
$('#price-button').click(function() {

    var departure = $('#departure').val('');
    var arrival = $('#arrival').val('');

    /* if($('#departure').val().length == 0 && $('#arrival').val().length == 0) {
        $(".airports-table").append("<h4 class='no-result'>Nessun volo trovato</h4>");
      } else { */
        //faccio partire una chiamata ajax per recuperare gli eventi filtrati
        $.ajax({
            "url": "http://localhost:8000/api/filter/flights",
                 "method": "GET",
                 "data": {
                     'query': departure + ' - ' + arrival
                 },
                 "success": function(data) {
                    var source   = document.getElementById("event-template").innerHTML;
                    var template = Handlebars.compile(source);
                       // svuoto il contenuto della pagina

                        if (data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var current_flight = data.results[i];
                                var context = {
                                    id : current_flight.id,
                                    name: current_flight.name,
                                    stopover : current_flight.stopover,
                                    code: current_flight.code
                                }

                                var html_finale = template(context);
                                $(".flight-template").append(html_finale);
                            }
                        }else if($('.flight-template').length == 0){
                            $(".flight-template").append("<h3 class='no-result'>Nessun volo trovato</h3>");
                        }
                     },
                     "error": function() {
                         SpeechRecognitionAlternative('errore');
                     },
              })
      /* } */

})

})