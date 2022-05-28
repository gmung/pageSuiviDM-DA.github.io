<!-- Adresse pour modifier : http://localhost/test_php/Page suivi DA-DM/root/index.php -->

<div class="site">

<!-- Lien vers les scripts et style sheets -->
<script src="scripts/dB_scripts.js"></script>
<link rel="stylesheet" href="css/style.css"></link>



<!-- Détermine quel type de demande à afficher -->
<div class="title">
    <h>Page de suivi DA/DM</h>
</div>
    
<br><br>

<div style="display : inline-block; margin : px; border : 0px solid black">
    <span class="police">Afficher DA :</span>
        <input class="checkBox" id="DA" name="DA" type="checkbox" onclick="DA_checkBox()"> 
    <span class="police" style="margin-left : 50px">Afficher DM :</span>
        <input class="checkBox" id="DM" name="DM" type="checkbox" onclick="DM_checkBox()">
</div> 

<br><br><br>

<div class="main_container">
    <div class="demandeur">
        <span class="police">Demandeur : </span>
            <select class="police" style="width : 150px; cursor: pointer">
                <option value="null1"></option>
                <option value="User1">User1</option>
                <option value="User2">User2</option>
                <option value="User3">User3</option>
            </select>
    </div>

    <!-- Ouvrir un formulaire d'ajout de nouvelle demande-->
    <div id="div_addRequest" class="div_addRequest">
        <button class="btn_addRequest" onclick="addRequest()">Ajouter une demande</button>
    </div> 
</div>

<!-- Paramètres formulaire d'ajout de nouvelle demande-->    
<div id="form_addRequest" class="form_addRequest">
    <form action="index.php" method="POST"><br>
        <label style="font-size: 20px; margin: 10px 0px 0px 10px">Ajout d'une nouvelle demande</label><br><br>
        <label style="font-size: 14px; margin: 10px 0px 0px 10px">No. DM</label> <br>
            <input style="margin: 0px 0px 0px 10px" type="text"></input><br><br>
            <input style="margin: 0px 0px 0px 10px; padding: 5px; background-color: green; color:white; border: none" type="submit"></input>
            <button style="margin-left: 10px; padding: 5px; background-color: red; color:white; border: none" onclick="form_end()">Cancel</button>
    </form>
</div>

<br><br>

<!-- dB DA -->
<div class="DA_database" id="DA_database" name="DA_database" style="margin : auto ; width : 100%; border : 0px solid black; display : none">
    <table>
        <thead>
            <th>No. demande d'achat</th>
            <th>No. de projet</th>
            <th>Unité</th>
            <th>Modèle</th>
            <th>Date demande</th>
            <th>Date requise</th>
            <th>Processus complété</th>
        </thead>        
        <tbody>
            <tr class="colorVar1">
                <td>DA0763</td>
                <td>60355</td>
                <td>355</td>
                <td>SL250 NG</td>
                <td>2022-05-23</td>
                <td>2022-06-12</td>
                <td>
                    <input class="checkBox" id="cb_processComp" type="checkbox">
                </td>
            </tr>
            <tr class="colorVar2">
                <td>DA0764</td>
                <td>60355</td>
                <td>355</td>
                <td>SL250 NG</td>
                <td>2022-05-23</td>
                <td>2022-06-12</td>
                <td>
                    <input class="checkBox" id="cb_processComp" type="checkbox" checked>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- dB DM -->
<div class="DM_database" id="DM_database" name="DM_database" style="margin : auto ; width : 100%; border : 0px solid black; display : none">
<table>
    <thead>
        <th>No. demande manufacturière</th>
        <th>No. de projet</th>
        <th>Unité</th>
        <th>Modèle</th>
        <th>Date demande</th>
        <th>Date requise</th>
        <th>Révision actuelle</th>
        <th>Processus complété</th>
    </thead>
        <tr>
            <td>DM3801</td>
            <td>60370
            <td>370</td>
            <td>SAM550</td>
            <td>2022-05-24</td>
            <td>2022-06-13</td>
            <td>Originale</td>
            <td>
                <input class="checkBox" id="cb_processComp" type="checkbox">
            </td>
        </tr>
    </table>
</div>


</div>

<div id="div_site_back" class="div_site_Back">
</div>

