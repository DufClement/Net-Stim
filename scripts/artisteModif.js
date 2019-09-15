
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();

        $.post(
            'RefArtisteEnreg.ajax.php',
            {
                id : $("#Hid").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à RefArtisteEnreg.ajax.php
                Nom : $("#TbNom").val(),
                Prenom : $("#TbPrenom").val(),
                Age : $("#TbAge").val(),
                Groupe : $("#TbGroupe").val(),
                Agence : $("#TbAgence").val()
            },
 
            function(data){
 
                if(data == 'OK'){
                     // Les modifications ont été effectuée 
 
                     $("#ZoneAlerte").html("<blockquote style='background: rgba(212, 212, 255, 0.035);'>Les modifications ont bien été enregistrées !</blockquote>");
                }
         
            },
            'text'
         );
    });
});