function SeleccionarTodo() {
    if (document.getElementById("SelectAll").checked) {
        let renglones = document.getElementById("registros").rows.length;
        for (let i = 1; i < renglones; i++) {
            document.getElementById("CheckGroup" + i).checked = true;
        }
    }
    else {
        let renglones = document.getElementById("registros").rows.length;
        for (let i = 1; i < renglones; i++) {
            document.getElementById("CheckGroup" + i).checked = false;
        }
    }
}


function DeleteUsers() {
    let simon = confirm("¿Estas seguro que quieres borrar todos los seleccionados?");
    if (simon) {
        let renglones = document.getElementById("registros").rows.length;
        let registers = [];
        let flag_check = false;
        for (let i = 1; i < renglones; i++) {
            if (document.getElementById("CheckGroup" + i).checked) {
                var x = document.getElementById("registros").rows[i].cells;
                flag_check = true;
                registers.push(x[1].innerHTML);
            }
        }
        let id_to_delete = "";
        if (registers.length > 0) {
            id_to_delete = id_to_delete + registers[0];

            for (let i = 1; i < registers.length; i++) {
                id_to_delete = id_to_delete + ", " + registers[i]
            }
        }
        if (flag_check) {
            window.location.href = "delete_selected.php" + "?id_to_delete=" + id_to_delete;
        }
    } else {
        alert("Cancelando...");
    }
}

//Funcion para enviar datos a edit.php

$(document).ready(function () {
    $(document).on('click', '#editbtn', function () {
        var id = jQuery(this).val();


        //var id=(document).getElementById("editbtn").value
        console.log(id)

        var ide = jQuery('#id' + id).text();
        //var ide=(document).getElementById("id"+id).value
        console.log(ide);
        var nombre = jQuery('#nombre' + id).text();
        var nivel = jQuery('#nivel' + id).text();
        var n2 = jQuery('#n2' + id).text();


        jQuery('#edit_tipo_usuario').modal('show')
        jQuery('#mid').val(ide);
        jQuery('#mnombre').val(nombre);
        jQuery('#mnivel').val(nivel);
        jQuery('#mn2').val(n2);
    })
})

//Funcion para pasar id a delete.php

$(document).ready(function () {
    $(document).on('click', '#deletebtn', function () {
        let confirmacion = confirm('¿Estás seguro de que quieres borrar?');
        if (confirmacion) {
            let id_to_deletear = jQuery(this).val();
            window.location.href = "delete.php" + "?id_to_deletear=" + id_to_deletear;
            console.log(id_to_deletear)
        }
        else {
            alert("Eliminacion cancelada");
        }

    })
})

