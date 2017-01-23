<?php $this->layout('layout_3') ?>

<?php $this->start('main_content') ?>
<div class="sixteen wide column">
  <h1>Publier votre trajet </h1>
  <form class="ui form">
    <div class="ui calendar" id="example1">
      <div class="ui input left icon">
        <i class="calendar icon"></i>
        <input type="text" name="[myform3]dateTrajet" placeholder="Date du trajet">
      </div>
    </div>

    <div class="ui search aeroport">
      <div class="ui icon input">
        <input type="text"  name="[myform3]villeDepart" placeholder="Lieu de départ">
        <i class="search icon"></i>
      </div>
      <div class="results"></div>
    </div>

    <div class="ui search">
      <div class="ui icon input">
        <input type="text" name="[myform3]villeArrivee" placeholder="Lieu d'arrivée">
        <i class="search icon"></i>
      </div>
      <div class="results"></div>
    </div>

    <div class="ui form trajet">
      <div class="grouped fields trajet">
        <label>Fréquence</label>
        <div class="field">
          <div class="ui radio checkbox trajet">
            <input type="radio" name="example1" checked="checked">
            <label>Je fais le trajet une fois </label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="example2">
            <label>Je fais le trajet régulièrement</label>
          </div>



          <div class="ui form kilos">
            <div class="grouped fields kilos">
              <label>Quelle capacité pouvez-vous transporter ?</label>
              <div class="field">
                <div class="ui radio checkbox kilos">
                  <input type="radio" name="example2" checked="checked">
                  <label>Entre 0 et 3 kilos</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox kilos">
                  <input type="radio" name="example2">
                  <label>Entre 3 et 6 kilos</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox kilos">
                  <input type="radio" name="example2">
                  <label>Entre 6 et 10 kilos</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox kilos">
                  <input type="radio" name="example2">
                  <label>Entre 10 et 15 kilos</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox kilos">
                  <input type="radio" name="example2">
                  <label>Entre 15 et 20 kilos</label>
                </div>
              </div>
            </div>
          </div>
          <div class="ui form">
            <div class="field">
              <label>Prix que la personne accepte par kilo</label>
              <div class="ui left icon input">
                <i class="euro icon"></i>
                <input type="text">
              </div>
            </div>

            <button class="ui button" type="submit">Valider</button>
          </form>
        </div>
      </div>
      <?php $this->stop('main_content') ?>

      <?php $this->start('javascript') ?>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script src="lib/semantic/semantic.min.js"></script>
      <script type="text/javascript" src="lib/semantic-calendar/dist/calendar.min.js"></script>
      <!-- script pris dans semantic -->
      <script>$('#example1').calendar();</script>
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