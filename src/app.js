let $ = require('jquery');

$(document).ready(function(){
    getDatabase();
});


//FUNZIONI

//chiamata ajax per elenco completo dischi su $database
function getDatabase() {
    $.ajax({
        method: 'GET',
        url: 'http://localhost/php-ajax-dischi/server.php',
        success: function(data){
            console.log(data);
            stampaRisultati(data);
        },
        error: function(error){
            alert('errore');
            console.log(error);
        },
    });
};


function stampaRisultati (array) {
    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

    for (var i = 0; i < array.length; i++) {
        var context = {
            title: array[i].title,
            author: array[i].author,
            year: array[i].year,
            poster: array[i].poster,
        };
        var html = template(context);
        $('.container-dischi').append(html);
    };

};

function stampaSelect (array) {

};
