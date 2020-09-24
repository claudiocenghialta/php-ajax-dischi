let $ = require('jquery');

$(document).ready(function(){
    getDatabase();

});


//FUNZIONI

//chiamata ajax per elenco completo dischi su $database
function getDatabase() {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8888/php-ajax-dischi/server.php',
        success: function(data){
            stampaRisultati(data);
            if ($('.select-author').children().length ==1) {
                stampaSelect(data);
            }
            filtraAuthor();

        },
        error: function(error){
            alert('errore');
            console.log(error);
        },
    });
};
//chiamata ajax per elenco filtrato per autore
function filteredData(filter) {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8888/php-ajax-dischi/server.php',
        data: {
            author: filter,
        },
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

// funzione per stampare i risultati nell'elenco dei dischi e creare le varie cards
function stampaRisultati (array) {
    svuotaRisultati();
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

// funzione per popolare la select con l'elenco degli artisti
function stampaSelect (array) {
    var source = $("#select-template").html();
    var template = Handlebars.compile(source);
    var elencoAutori = [];
    for (var i = 0; i < array.length; i++) {
        if (!elencoAutori.includes(array[i].author)) {
            var context = {
                Author: array[i].author,
            };
            var html = template(context);
            $('.select-author').append(html);
            elencoAutori.push(array[i].author)
        };

    };
};

function svuotaRisultati () {
    $('.container-dischi').empty();
}

// funzione per fare chiamata Ajax ed ottenere i risultati di tutti gli artisti oppure solo quelli relativi all'artista selezionato nella select
function filtraAuthor(){
    $('.select-author option').on('click',function(){
        var value= $(this).val();
        if (value=="All") {
            getDatabase();
        } else {
            filteredData(value);

        }
    });
}
