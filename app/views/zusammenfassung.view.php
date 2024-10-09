<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.88.1">
  <title>mvc site</title>




  <!-- Bootstrap core CSS -->
  <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <style>

  </style>


  <!-- Custom styles for this template -->
  <link href="<?= ROOT ?>/assets/css/cover.css" rel="stylesheet">
</head>

<body class="">
<img id="logoMobile" src="/../../assets/img/working-logo.png" alt="SCS Logo">
<div class="titleLogo">
  <h1 class="margBottom">Zusammenfassung</h1>
  <img id="logo" class="logoImage" src="/../../assets/img/working-logo.png" alt="SCS Logo">
</div>
<!-- Accordion for Personen (Mobile) -->
<div class="accordion accordion-mobile " id="accordionPersonenMobile">
  <h2 class="fontH2">Personen</h2>
  <div class="accordion-item ">
    <h2 class="accordion-header " id="headingPerson{{@index}}">
      <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" aria-expanded="false"
        aria-controls="collapsePerson{{@index}}">
        {{responsiblePersonFullName}}
      </button>
    </h2>
    <div id="collapsePerson{{@index}}" class="accordion-collapse collapse" aria-labelledby="headingPerson{{@index}}"
      data-bs-parent="#accordionPersonenMobile">
      <div class="accordion-body ">
        <table class="table ">
          <thead>
          </thead>
          <tbody>
            <tr>
              <td>Alter</td>
              <td>{{responsiblePersonAge}}</td>
            </tr>
            <tr>
              <td>Mitglied</td>
              <td>{{responsiblePersonMembership}}</td>
            </tr>
            <tr>
              <td>Reisezeitraum</td>
              <td>{{responsiblePersonTimeRange}}</td>
            </tr>
            <tr>
              <td>Nächte</td>
              <td>{{responsiblePersonNights}}</td>
            </tr>

            <tr>
              <td>Kurtaxe</td>
              <td>{{responsiblePersonTouristTax}} €</td>
            </tr>
            <tr>
              <td>Übernachtungskosten</td>
              <td>{{responsiblePersonBetrag}} €</td>
            </tr>
            <tr>
              <td>Summe</td>
              <td>{{respPersAmount}} €</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {{attendeesAccordion}}
</div>

<!-- Table for Personen (Desktop) -->
<div class="accordion accordion-desktop" id="accordionPersonenDesktop">
  <div class="table-responsive">
    <h2 class="fontH2">Personen</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Alter</th>
          <th>Mitglied</th>
          <th>Zeitraum</th>
          <th>Nächte</th>
          <th>Kurtaxe</th>
          <th>Übernachtung</th>
          <th>Summe</th>
        </tr>
      </thead>
      <tbody id="data-table-body">
        <tr>
          <td>{{responsiblePersonFullName}}</td>
          <td>{{responsiblePersonAge}}</td>
          <td>{{responsiblePersonMembership}}</td>
          <td>{{responsiblePersonTimeRange}}</td>
          <td>{{responsiblePersonNights}}</td>
          <td>{{responsiblePersonTouristTax}} €</td>
          <td>{{responsiblePersonBetrag}} €</td>
          <td>{{respPersAmount}} €</td>
        </tr>
        {{allAttendees}}
      </tbody>
    </table>
  </div>
</div>

<div>
  <div class="infoContainer">
    <div class="infoRow">
      <div class="infoLabel">Gesamtpreis Übernachtungen:</div>
      <div class="infoValue">{{totalAllAmount}} €</div>
    </div>
    <div class="infoRow">
      <div class="infoLabel">Gesamtpreis Kurtaxe:</div>
      <div class="infoValue">{{totalTax}} €</div>
    </div>
    <div class="infoRow">
      <div class="infoLabel">Summe:</div>
      <div class="infoValue">{{totalAmountInclRespPers}} €</div>
    </div>
  </div>

  <!-- table 2 -->
  <div class="table-responsive">
    <h2 class="fontH2">Zählenstände </h2>
    <table class="table display">
      <thead>
        <tr>
          <th>Strom</th>
          <th>Heizung</th>
          <th>Wasser</th>
        </tr>
      </thead>
      <tbody id="numbers-table-body">
        <tr>
          <td>{{electricity1}}</td>
          <td>{{electricity2}}</td>
          <td>{{water}}</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="table-responsive">
    <h2 class="fontH2">Checkliste </h2>
    <table class="table">
      <thead>
        <tr>
          <th>Festgestellt Mängel, Fehlmengen, etc.</th>
        </tr>
      </thead>
      <tbody id="last-body">
        <tr>
          <td>{{missingItems}}</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- liability -->
  <p class="liability">Der Unterzeichner haftet für:</p>
  <form method="post" action="index.php?page=danke">
    <div class=" fontHaftung">
      <div>
        <input type="checkbox" id="one" name="one" class="custom-required" required>
        <label for="one" class="form-label liabilityInline">Richtigkeit der Angaben des Gästeblattes und Abgabe bei der
          Gemeinde. Für etwaige Folgen,
          z.B. Nachzahlung der Kurtaxe kommt der Unterzeichner selbst auf.</label>
      </div>

      <div>
        <input type="checkbox" id="two" name="two" class="custom-required" required>
        <label for="two" class="form-label">Die von ihm bzw. seiner Gruppe verursachten Schäden.</label>
      </div>

      <div>
        <input type="checkbox" id="three" name="three" class="custom-required" required>
        <label for="three" class="form-label">Richtigkeit der Zählerstände.</label>
      </div>

      <div>
        <input type="checkbox" id="four" name="four" class="custom-required" required>
        <label for="four" class="form-label">Einhaltung der Hüttenordnung.</label>
      </div>

      <div>
        <input type="checkbox" id="key" name="key" class="custom-required" required>
        <label for="key" class="form-label">Schlüssel erhalten und Hüttenordnung gelesen.</label>
      </div>

      <input type="hidden" name="hash" value="{{hash}}">
      <input type="hidden" name="email" value="{{email}}">
      <input type="hidden" name="first-name" value="{{firstName}}">
      <input type="hidden" name="last-name" value="{{lastName}}">
      <input type="hidden" name="dob" value="{{dob}}">
      <input type="hidden" name="arrival" value="{{arrival}}">
      <input type="hidden" name="departure" value="{{departure}}">
      <input type="hidden" name="electricity1" value="{{electricity1}}">
      <input type="hidden" name="electricity2" value="{{electricity2}}">
      <input type="hidden" name="water" value="{{water}}">
      <input type="hidden" name="comments" value="{{commentsText}}">
      <input type="hidden" name="toiletpaper" value="{{toiletpaper}}">
      <input type="hidden" name="kitchenpaper" value="{{kitchenpaper}}">
      <input type="hidden" name="Charcoal" value="{{Charcoal}}">
      <input type="hidden" name="grillLighter" value="{{grillLighter}}">
      <input type="hidden" name="matches" value="{{matches}}">
      <input type="hidden" name="dish" value="{{dish}}">
      <input type="hidden" name="wc" value="{{wc}}">
      <input type="hidden" name="allPurpose" value="{{allPurpose}}">
      <input type="hidden" name="bags" value="{{bags}}">
      <input type="hidden" name="enough" value="{{enough}}">
      <input type="hidden" name="bags" value="{{bags}}">
      <input type="hidden" name="participant" value="{{participant}}">
      <input type="hidden" name="huetteName" value="neuhaeusl">

      <button type="submit" class="btn line btn-primary" name="submit" id="send">Abschicken</button>
    </div>
  </form>

  <form method="post" action="index.php?page=neuhaeusl">
    <button type="submit" class="btn line btn-secondary border-only" id="change" name="changeButton">Ändern</button>
  </form>
</div>




<script src="assets/vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="assets/vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css">

</body>

</html>