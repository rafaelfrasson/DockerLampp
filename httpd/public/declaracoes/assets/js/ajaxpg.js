function ajaxopen(pg, obj , div){
    $.ajax({
        method: "POST",
        url: "public/"+pg+".php",
        data: obj,
        beforeSend: function () {
            //Aqui adicionas o loader
            $(div).html("<div class=\"text-center\"><div class=\"spinner-border\" role=\"status\"></div><div class=\"spinner-grow text-danger\" role=\"status\"></div></div>");
        },
        success: function(result)
        {
          $(div).html(result);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(div).html(textStatus + errorThrown);
        }
    });
}

function ajaxcon(pg, acao, obj, div){
    $.ajax({
        method: "POST",
        url: "controller/"+pg+".php",
        data: { acao: acao, obj: obj },
        beforeSend: function () {
            //Aqui adicionas o loader
            $(div).html("<div class=\"text-center\"><div class=\"spinner-border\" role=\"status\"></div><div class=\"spinner-grow text-danger\" role=\"status\"></div></div>");
        },
        success: function(result)
        {
          $(div).html(result);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(div).html(textStatus + errorThrown);
        }
    });
}

function sendAX(pg, obj, div){
    $.ajax({
        method: "POST",
        url: "controller/"+pg+".php",
        data: obj,
        beforeSend: function () {
            //Aqui adicionas o loader
            $(div).html("<div class=\"text-center\"><div class=\"spinner-border\" role=\"status\"></div><div class=\"spinner-grow text-danger\" role=\"status\"></div></div>");
        },
        success: function(result)
        {
          $(div).html(result);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(div).html(textStatus + errorThrown);
        }
    });
}