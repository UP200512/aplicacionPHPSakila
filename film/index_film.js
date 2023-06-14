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


function DeleteSelected() {
    let confirm_delete = confirm("Are you sure to delete all the films selected?");
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

//Funcion para enviar datos a edit.php

function ChangeRegister (id) {
    window.editar.showModal();
        console.log(id);
        
        
       

        //var id=(document).getElementById("editbtn").value
       
        var title = jQuery('#title' + id).text();
        var description = jQuery('#description' + id).text();
        var year = jQuery('#year' + id).text();
        console.log(year);
        var language=jQuery('#id_language' + id).text();
        var originla_language=jQuery('#original_id_language' + id).text();

        var duration = jQuery('#duration' + id).text();
        var rental_rate = jQuery('#rental-rate' + id).text();
        var length = jQuery('#length' + id).text();
        var replacement_cost = jQuery('#replacement-cost' + id).text();
        var rating = jQuery('#rating' + id).text();
       
        //var ide=(document).getElementById("id"+id).value
        console.log(title);
        document.getElementById("input_id").value = id;
        document.getElementById("title").value = title;
        document.getElementById("description").value = description;
        document.getElementById("year").value = year;
        // console.log(language);
        document.getElementById("language_id_modal").value=language;
        document.getElementById("original_language_id_modal").value=originla_language;
        document.getElementById("rental_duration").value = duration;
        document.getElementById("rental_rate").value = rental_rate;
        document.getElementById("length").value = length;
        document.getElementById("replacement_cost").value = replacement_cost;
        
        document.getElementById("rating_modal").value = rating;

        document.getElementById("1").checked = false; 
        document.getElementById("2").checked = false;
        document.getElementById("3").checked = false; 
        document.getElementById("4").checked = false; 
        
        // console.log(array_features);
        var features = jQuery('#features' + id).text();
        let array_features= features.split(",");
        // document.getElementById("trailers").checked = true;
        // document.getElementById("commentaries").checked = true;
        for (let i=0; i<array_features.length; i++) {
            // console.log(array_features[i]);
            switch(array_features[i]) {
                case "Trailers": document.getElementById("1").checked = true; break;
                case "Commentaries": document.getElementById("2").checked = true; break;
                case "Deleted Scenes": document.getElementById("3").checked = true; break;
                case "Behind the Scenes": document.getElementById("4").checked = true; break;
            }
          

            // console.log(document.getElementById(array_features[i]).checked);
        }
        // // document.getElementById("Commentaries").checked = true ;
        // for (let i=0; i<array_features.length; i++) {
        //     console.log(array_features[i]);
        // //   document.getElementById(array_features[i]).checked = true;
        //     console.log(document.getElementById(array_features[i]).checked);
        // }
        
        

        
    }


//Funcion para pasar id a delete.php

$(document).ready(function () {
    $(document).on('click', '#deletebtn', function () {
        let id_to_delete = jQuery(this).val();
        console.log(id_to_delete);
        let confirmacion = confirm('¿Estás seguro de que quieres borrar ' + id_to_delete + '?');
        if (confirmacion) {
    
            window.location.href = "delete.php" + "?id_to_delete=" + id_to_delete;
            // console.log(id_to_deletear)
        }
        else {
            alert("Eliminacion cancelada");
        }

    })
})

