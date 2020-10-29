require('./bootstrap');

var $ = require('jquery');

import 'bootstrap';

$(document).ready(function() {
    
$('#price-button').click(function() {

    var departure = $('#departure').val('');
    var arrival = $('#arrival').val('');

    if($('#departure').val().length == 0 && $('#arrival').val().length == 0) {
        $(".airports-table").append("<h4 class='no-result'>Nessun volo trovato</h4>");
      } else {
        //faccio partire una chiamata ajax per recuperare gli eventi filtrati
        $.ajax({
            "url": "http://localhost:8000/api/filter/flights",
                 "method": "GET",
                 "data": {
                     'query': departure + ' - ' + arrival
                 },
                 "success": function(data) {
                   console.log(data);
                   
                    },
                     "error": function() {
                         SpeechRecognitionAlternative('errore');
                     },
              })
      }

})

})