//Permet d'afficher soit la dB DA et fermer la dB DM
function DA_checkBox(){
    if (DA.checked) {
        if(DM.checked){
            document.getElementById('DM').checked = false;
            document.getElementById('DM_database').style.display = "none";
            document.getElementById('DA_database').style.display = "block";
        }else{
            document.getElementById('DA_database').style.display = "block";
      }
    }else{
        document.getElementById('DA_database').style.display = "none";
    }
}

//Permet d'afficher la dB DM et fermer la dB DA
function DM_checkBox(){
    if (DM.checked) {
        if(DA.checked){
            document.getElementById('DA').checked = false;
            document.getElementById('DA_database').style.display = "none";
            document.getElementById('DM_database').style.display = "block";
        }else{
            document.getElementById('DM_database').style.display = "block";
      }
    }else{
        document.getElementById('DM_database').style.display = "none";
    }
}

function form_end(){
    document.getElementById('div_addRequest').style.display = "none";
    document.getElementById('div_site_back').style.display = "none";
}

//Ouverture de la form pour insérer une nouvelle demande

function addRequest(){
    document.getElementById('form_addRequest').style.display = "block";
    document.getElementById('div_site_back').style.display = "block";
}