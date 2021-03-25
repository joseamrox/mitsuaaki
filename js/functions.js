

// Valido checkbox para programar llamada futura de la interaccion.
function callCalendar() 
{
    if (document.getElementById("checkboxLlamadaFutura").checked) {
        console.log("checked");
        var markUpFechaLlamada = '<label class="col-lg-4 form-label" id="fechaHoraLlamada1">Fecha'+
         ' Hora</label>' +
         '<div class="col-lg-12">' +
         '<input type="text" id="datetimepicker" class="form-control col-lg-4">' +
         '</div>';
        $('#fechaHoraLlamadaDefinida').html(markUpFechaLlamada);

        jQuery('#datetimepicker').datetimepicker({step: 20});
    } else {
        console.log("no checked");
        $('#fechaHoraLlamadaDefinida').html('');
    }
}