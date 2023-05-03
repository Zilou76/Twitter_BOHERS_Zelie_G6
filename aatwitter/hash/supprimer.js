function confirmer(){
    var res = confirm("Êtes-vous sûr de vouloir supprimer?");
    if(res){
        $.ajax({
            type: "POST",
            url: "supprimer.php",
            data: {
                id: id
            }
        });
    }
}