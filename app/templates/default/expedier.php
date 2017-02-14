<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>
<div class="sixteen wide column">

<h1>Expedier un colis</h1>

<form class="ui form" method="POST" action="" enctype="multipart/form-data">

  <div class="field">
    <label>Nom du colis</label>
    <input type="text" name="myform[nom]" placeholder="Nom du colis">
  </div>

  <div class="field">
    <label>Description</label>
    <textarea name="myform[description]"></textarea>
  </div>

<label>Ville de depart</label>
  <div class="ui search aeroport">
         <div class="ui left icon input">
          <input class="prompt" type="text" name="myform[ville_depart]">
          <i class="search icon"></i>
        </div>
        <div class="results"></div>
      </div>
   

<label>Ville d'arrivée</label>
    <div class="ui search">
         <div class="ui left icon input"> 
    <input class="prompt" type="text" name="myform[ville_arrivee]">
   <i class="search icon"></i>
        </div>
        <div class="results"></div>
      </div>


  <!-- Insertion calendrier -->
  <label>A livrer avant : </label>
   <div class="ui calendar" id="calendar1">
      <div class="ui input left icon">
      <i class="calendar icon"></i>
         <input type="text" name="myform[date_livraison]" placeholder="Date/Time">
     </div>
  </div>

  <div class="field">
    <label>Poids du colis</label>
      <input class="prompt" type="text" name="myform[poids]">
  </div>

  <div class="field">
    <label>Prix proposé</label>
    <input type="text" name="myform[prix]" placeholder="Estimation de votre prix en €">
  </div>

  <div class="field">
    <label>Importer une photo</label>
    <input type="file" name="myform[photo]">
  </div>



 <button class="ui green button" name="valider" type="submit">Valider</button>

 <div class="ui error message"></div>

 <!-- API Google map -->

</form>

</div>

<?php if(!empty($errors)): ?>
<div class="erreur">
<!-- <?php //print_r($errors) ?> -->

<?php if(empty($_POST['myform']['nom'])) {echo "Veuiller saisir votre nom <br>"  ;} ?>
<?php if(empty($_POST['myform']['ville_depart'])) {echo "Veuillez saisir la ville de depart <br>"  ;} ?>
<?php if(empty($_POST['myform']['ville_arrivee'])) {echo "Veuillez saisir la ville d'arrivée <br>" ;} ?>
<?php if(empty($_POST['myform']['date_livraison'])) {echo "Veuillez saisir une date <br>" ;} ?>
<?php if(empty($_POST['myform']['poids'])) {echo "Veuillez saisir le poids du colis <br>" ;} ?>
<?php if(empty($_POST['myform']['prix'])) {echo "Veuillez saisir votre prix <br>"  ;} ?>
<?php if(empty($_FILE['myform']['photo'])) {echo "Veuillez saisir une photo <br>";} ?>
</div>
<?php endif ?>  

<?php $this->stop('main_content') ?>

<?php $this->start('javascript') ?>

<script>

      var content = [
      { title: 'ABV Abuja (Nigeria)' },
       {title:'AAD Ad-Dabbah (Soudan)'},
       {title:'AAE Annaba (Algérie)'},
       {title:'AAC El-Arish International (Egypte)'},
      {title:'AAB Arrabury(Australie)'},
      { title: 'ACC Accra (Ghana)' },
      { title: 'ADD Addis-Abeba (Ethiopie)' },
      { title: 'ALG Alger (Algerie)' },
      { title: 'TNR Antananarivo (Madagascar)' },
      { title: 'ASM Asmara (Erythrée)' },
      { title: 'BKO Bamako (Mali)' },
      { title: 'BGF Bangui (République Centrafricaine' },
      { title: 'BJL Banjul (Gambie)' },
      { title: 'OXB Bissau (Guinée-Bissau)' },
      { title: 'BZV Brazzaville (République du Congo' },
      { title: 'BJM Bujumbura (Burundi)' },
      { title: 'CKY Conakry (Guinée)' },
      { title: 'CAI Le Caire (Egypte)' },
      { title: 'CPT Le Cap (Afrique du Sud)' },
      { title: 'COO Cotonou (Benin)' },
      { title: 'DKR Dakar (Senegal)' },
      { title: 'JIB Djibouti (Djibouti)' },
      { title: 'DOD Dodoma (Tanzanie)' },
      { title: 'FNA Freetown (Sierra Leone)' },
      { title: 'GBE Gaborone (Botswana)' },
      { title: 'HRE Harare (Zimbabwe' },
      { title: 'KLA Kampala (Ouganda)' },
      { title: 'KRT Khartoum (Soudan)' },
      { title: 'KGL Kigali (Rwanda)' },
      { title: 'FIH Kinshasa (République démocratique du Congo)' },
      { title: 'LBV Libreville (Gabon)' },
      { title: 'LLW Lilongwe (Malawi)' },
      { title: 'LFW Lomé (Togo)' },
      { title: 'LAD Luanda (Angola)' },
      { title: 'LUN Lusaka (Zambie)' },
      { title: 'SSG Malabo (Guinée Equatoriale)' },
      { title: 'MPM Maputo (Mozambique)' },
      { title: 'MTS Mbabane (Swaziland)' },
      { title: 'ROB Monrovia (Liberia)' },
      { title: 'HAH Moroni (Comores)' },
      { title: 'NBO Nairobi (Kenya)' },
      { title: 'NDJ Ndjamena (Tchad)' },
      { title: 'NIM Niamey (Niger)' },
      { title: 'NKC Nouakchott (Mauritanie)' },
      { title: 'OUA Ouagadougou (Burkina)' },
      { title: 'MRU Port-Louis (Maurice)' },
      { title: 'OPO Porto-Nevo (Benin)' },
      { title: 'RAI Praia (Cap Vert)' },
      { title: 'PRY Pretoria (Afrique du Sud)' },
      { title: 'RBA Rabat (Maroc)' },
      { title: 'TIP Tripoli (Lybie)' },
      { title: 'TUN Tunis (Tunisie)' },
      { title: 'SEZ Victoria (Seychelles)' },
      { title: 'WDH Windhoek (Namibie)' },
      { title: 'NSI Yaounde (Cameroun)' },
      { title: 'ASK Yamoussoukro (Côte d Ivoire)' },
    // etc
    ];
    $('.ui.search')
    .search({
      source: content
    });

    var contentbis = [
    { title: 'CDG Paris Charles de Gaulle' },
    { title: 'ORY Paris Orly' },
    { title: 'NCE Nice Côte dazur' },
    { title: 'MRS Marseille Provence' },
    { title: 'LYS Lyon-Saint-Exupery' },
    { title: 'TLS Toulouse-Blagnac' },
    { title: 'MLH Bâle-Mulhouse' },
    { title: 'MPL Montpellier-Meditarranée' },
    { title: 'CEQ Cannes-Mandelieu' },
    { title: 'NTE Nantes-Atlantique' },
    { title: 'BOD Bordeaux-Merignac' },
    
        // etc
        ];
      $('.ui.search.aeroport')
      .search({
        source: contentbis
      });
      </script>

<script type="text/javascript" src="lib/semantic-calendar/dist/calendar.js"></script>

<script>$('#calendar1').calendar();</script>




<?php $this->stop('javascript') ?>



 