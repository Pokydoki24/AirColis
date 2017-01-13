<?php $this->layout('layout') ?>

<?php $this->start('main_content') ?>
<div style="margin-top: 100px">
  <h1>Publier votre trajet </h1>
<form class="ui form">

<div class="ui search aeroport">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Lieu de départ">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>

<div class="ui search">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Lieu d'arrivée">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>

<div class="ui form">
  <div class="grouped fields">
    <label>Fréquence</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2" checked="checked">
        <label>Je fais le trajet une fois </label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2">
        <label>Je fais le trajet régulièrement</label>
      </div>



<div class="ui form">
  <div class="grouped fields">
    <label>Quelle capacité pouvez-vous transporter ?</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2" checked="checked">
        <label>Entre 0 et 3 kilos</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2">
        <label>Entre 3 et 6 kilos</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2">
        <label>Entre 6 et 10 kilos</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2">
        <label>Entre 10 et 15 kilos</label>
      </div>
       </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="example2">
        <label>Entre 15 et 20 kilos</label>
      </div>
    </div>
  </div>
</div>

  <button class="ui button" type="submit">Valider</button>
</form>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('javascript') ?>
<script>
$(function() {
    var content = [
  { title: 'Abuja (Nigeria)' },
  { title: 'Accra (Ghana)' },
  { title: 'Addis-Abeba (Ethiopie)' },
  { title: 'Alger (Algerie)' },
  { title: 'Antananarivo (Madagascar)' },
  { title: 'Asmara (Erythrée)' },
  { title: 'Bamako (Mali)' },
  { title: 'Bangui (République Centrafricaine' },
  { title: 'Banjul (Gambie)' },
  { title: 'Bissau (Guinée-Bissau)' },
  { title: 'Brazzaville (République du Congo' },
  { title: 'Bujumbura (Burundi)' },
  { title: 'Conakry (Guinée)' },
  { title: 'Le Caire (Egypte)' },
  { title: 'Le Cap (Afrique du Sud)' },
  { title: 'Cotonou (Benin)' },
  { title: 'Dakar (Senegal)' },
  { title: 'Djibouti (Djibouti)' },
  { title: 'Dodoma (Tanzanie)' },
  { title: 'Freetown (Sierra Leone)' },
  { title: 'Gaborone (Botswana)' },
  { title: 'Harare (Zimbabwe' },
  { title: 'Kampala (Ouganda)' },
  { title: 'Khartoum (Soudan)' },
  { title: 'Kigali (Rwanda)' },
  { title: 'Kinshasa (République démocratique du Congo)' },
  { title: 'Libreville (Gabon)' },
  { title: 'Lilongwe (Malawi)' },
  { title: 'Lomé (Togo)' },
  { title: 'Luanda (Angola)' },
  { title: 'Lusaka (Zambie)' },
  { title: 'Malabo (Guinée Equatoriale)' },
  { title: 'Maputo (Mozambique)' },
  { title: 'Mbabane (Swaziland)' },
  { title: 'Monrovia (Liberia)' },
  { title: 'Moroni (Comores)' },
  { title: 'Nairobi (Kenya)' },
  { title: 'Ndjamena (Tchad)' },
  { title: 'Niamey (Niger)' },
  { title: 'Nouakchott (Mauritanie)' },
  { title: 'Ouagadougou (Burkina)' },
  { title: 'Port-Louis (Maurice)' },
  { title: 'Porto-Nevo (Benin)' },
  { title: 'Praia (Cap Vert)' },
  { title: 'Pretoria (Afrique du Sud)' },
  { title: 'Rabat (Maroc)' },
  { title: 'Tripoli (Lybie)' },
  { title: 'Tunis (Tunisie)' },
  { title: 'Victoria (Seychelles)' },
  { title: 'Windhoek (Namibie)' },
  { title: 'Yaounde (Cameroun)' },
  { title: 'Yamoussoukro (Côte d Ivoire)' },
  // etc
];
$('.ui.search')
  .search({
    source: content
  });

  var contentbis = [
  { title: 'Paris Charles de Gaulle' },
  { title: 'Paris Orly' },
  { title: 'Nice Côte dazur' },
  { title: 'Marseille Provence' },
  { title: 'Lyon-Saint-Exupery' },
  { title: 'Toulouse-Blagnac' },
  { title: 'Bâle-Mulhouse' },
  { title: 'Montpellier-Meditarranée' },
  { title: 'Cannes-Mandelieu' },
  { title: 'Nantes-Atlantique' },
  { title: 'Bordeaux-Merignac' },
  
  // etc
];
$('.ui.search.aeroport')
  .search({
    source: contentbis
  });
})
</script>
<?php $this->stop('javascript') ?>