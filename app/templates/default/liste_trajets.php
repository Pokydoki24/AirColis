<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>
<div class="sixteen wide column">
<!-- Filtre par recherche -->
    <h3>Rechercher un trajet pour votre colis</h3><br>
    <form class="ui form" method="POST" action="">
        <div class="fields">
 
          <div class="ui search aeroport">
           <div class="ui left icon input">
          <input class="prompt" type="text" name="myform[ville_depart]" placeholder="lieu de depart">
         <i class="search icon"></i>
         </div>
          <div class="results"></div>
           </div>
 
           <div class="ui search">
         <div class="ui left icon input"> 
          <input class="prompt" type="text" name="myform[ville_arrivee]" placeholder="lieu arrivée">
           <i class="search icon"></i>
           </div>
         <div class="results"></div>
          </div>
 
           <div class="ui calendar" id="calendar1">
      <div class="ui input left icon">
      <i class="calendar icon"></i>
    <input type="text" name="myform[date_trajet]" placeholder="Date">
       </div>
       </div>

       <div class="field">
        <input type="text" name="myform[poids]"  placeholder="Poids du colis">
      </div>
 
 
            <button class="ui button" name="rechercher" type="submit">Rechercher</button>
        </div>
    </form>


<?php if(!empty($errors)): ?>
<div class="erreur">
<!-- <?php //print_r($errors) ?> -->

<?php if(empty($_POST['myform']['ville_depart'])) {echo "Veuillez saisir la ville de depart <br>"  ;} ?>
<?php if(empty($_POST['myform']['ville_arrivee'])) {echo "Veuillez saisir la ville d'arrivée <br>" ;} ?>
<?php if(empty($_POST['myform']['date_trajet'])) {echo "Veuillez saisir une date <br>" ;} ?>
<?php if(empty($_POST['myform']['poids'])) {echo "Veuillez saisir votre poids <br>" ;} ?>
</div>
<?php endif ?>  



  
<h3>Liste de trajets</h3><br>

    <div class="column">
<table class="ui inverted teal selectable celled  right aligned  table" style="background-color: #cecece;color:black;text-align:left;">

  <!-- <thead>
    <tr>
      <th></th>
      <th>villeDepart</th>
      <th>villeArrivee</th>
      <th>dateTrajet</th>
      <th>poidsPropose</th>
      <th>prix</th> -->
    <!-- </tr> -->
  <!-- </thead> -->
  <tbody>
    <tr>
      
      <?php 
      foreach($liste_trajets as $trajet) { ?>
      <td><?=$trajet['ville_depart']?></td>
      <td><?=$trajet['ville_arrivee']?></td>
      <td><?=$trajet['date_trajet']?></td>
      <td><?=$trajet['poids']?>KG</td>
      <td><?=$trajet['prix']?>E</td>
      <td><a href="<?=$this->url('detailTrajet',['id'=>$trajet['id']]);?>">Detail</a></td>
    </tr> 

  </tbody>
  <th></th>   
<?php } ?>  
</table>
</div>
<div style="clear:both;display:block;"></div>

</div>
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
