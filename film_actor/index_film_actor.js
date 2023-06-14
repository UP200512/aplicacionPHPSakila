
function SeleccionarTodo() {
    if (document.getElementById("SelectAll").checked) {
        let check_boxes = document.getElementsByName("check_cell");
        for (let i = 0; i < check_boxes.length; i++) {
            check_boxes[i].checked = true;
        }

    } else {
        let check_boxes = document.getElementsByName("check_cell");
        for (let i = 0; i < check_boxes.length; i++) {
            check_boxes[i].checked = false;
        }
    }
}


function DeleteSelected() {
    let confirm_delete = confirm("Are you sure to delete all the languages selected?");
    if (confirm_delete) {
        let id_to_delete = "";
        let check_boxes = document.getElementsByName("check_cell");
        let registers = [];
        for (var i = 0; i<check_boxes.length; i++) {
            if (check_boxes[i].checked) {
                registers.push(check_boxes[i].value);
            }
        }
        if (registers.length > 0) {
            id_to_delete = id_to_delete + registers[0];
        for (var i = 1; i<registers.length; i++) {
            id_to_delete = id_to_delete + ", " + registers[i];
        }
        }
        
        window.location.href = "delete_selected.php" + "?id_to_delete=" + id_to_delete;
    } else {
        alert("Cancel...");
    }
}
function ChangeRegister(id){
    console.log(id);
    // let nombre= document.getElementById("nombre"+ id).value;
    
    window.editar.showModal();
    var nombre = jQuery('#nombre' + id).text();
    // nombre= document.getElementById("registros");
    console.log(nombre);
    document.getElementById("input_id").value = id;
    let input_name = document.getElementById("input_name");
    input_name.value=nombre;
}
//Funcion para enviar datos a edit.php

// $(document).ready(function () {
//     $(document).on('click', '#editbtn', function () {
//         var id = jQuery(this).val();
//         //var id=(document).getElementById("editbtn").value
//         console.log(id);

//         var ide = jQuery('#id' + id).text();
//         //var ide=(document).getElementById("id"+id).value
//         console.log(ide);
//         var nombre = jQuery('#nombre' + id).text();
//         // window.editar.showModal();
//         jQuery('#edit_language').modal('show');
//         jQuery('#mid').val(ide);
//         jQuery('#mnombre').val(nombre);
//     })
// })

//Funcion para pasar id a delete.php

$(document).ready(function () {
    $(document).on('click', '#deletebtn', function () {
        let id_to_delete = jQuery(this).val();
        let confirmacion = confirm('Are you sure you want delete the register' + id_to_delete + '?');
        if (confirmacion) {

            window.location.href = "delete.php" + "?id_to_delete=" + id_to_delete;
            console.log(id_to_delete);
        }
        else {
            alert("Could not delete the register");
        }

    })
})

