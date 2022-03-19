/*metodo de busqueda*/
$(document).ready(function() {
    lista();

    function lista() {
        $.ajax({
            url: 'lista.php',
            type: 'GET',
            success: function(response) {
                let lista = JSON.parse(response);
                let template = '';
                lista.forEach(task => {
                    template += `
                    <tr taskId="${task.id_lista_precios}">
                        <td></td>
                        <td>${task.id_lista_precios}</td>
                        <td>${task.lista_precios}</td>
                        <td>${task.cod_producto}</td>
                        <td>${task.precio}</td>
                    </tr>
                    `
                });
                $('#lista').html(template);
            }
        });
    }
    $('#formulario').submit(function(e) {
        const postData = {
            pais: $('#pais').val(),
            porcentaje: $('#porcentaje').val()
        };
        let url = 'listaporcentajemodificar.php';
        $.post(url, postData, function(response) {
            $('#formulario').trigger('reset');
            lista();
        });
        e.preventDefault();

        function listatotal() {
            let pais = $('#pais').val();
            $.ajax({
                url: 'listatotal.php',
                type: 'POST',
                data: { pais },
                success: function(response) {
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `
                        ${task.total}
                        `
                    });
                    alert("Se han modificado" + template + "Precios");
                }
            });
        }
        listatotal();
    });

    /*termina el metodo*/

});

// metodo para validar formulario

$(function() {
    var pais;
    $(".btnAction").on('click', function() {
        pais = $(".pais").val();
        console.log(pais);
        if (pais.length == 0) {
            alert("No has ingresado pais")
        }
    });
});