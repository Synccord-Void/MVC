<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Neuhaeusel</title>


  <!-- Bootstrap core CSS -->
  <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <style>

  </style>

  <!-- Bootstrap JS and Popper.js (necessary for Bootstrap components like modals) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="<?= ROOT ?>/assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="neuhaeusl inline container logoContainer mt-5">

    <form class="row g-3" id="form" method="post">
      <h2 class="header">Angaben zur verantwortlichen Person</h2>

      <div class="col-md-6">
        <label for="first-name" class="form-label">Vorname:</label>
        <input type="text" id="first-name" name="first-name" class="form-control" minlength="2" maxlength="50">
      </div>

      <div class="col-md-6">
        <label for="last-name" class="form-label">Nachname:</label>
        <input type="text" id="last-name" name="last-name" class="form-control" minlength="2" maxlength="50">
      </div>

      <div class="col-md-12">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control">
      </div>

      <div class="col-md-3">

        <label for="dob">Alter:</label>
        <br>
        <input type="number" id="dob" name="dob" required class="form--dob form-control">
      </div>




      <!-- Reisezeitraum -->
      <h4 class="period">Reisezeitraum</h4>

      <div class="col-md-3">
        <label for="arrival" class="form-label">Anreise:</label>
        <input type="date" class="form-control" id="arrival" name="arrival">
      </div>

      <div class="col-md-3">
        <label for="departure" class="form-label">Abreise:</label>
        <input type="date" class="form-control" id="departure" name="departure">
      </div>



      <input type="hidden" id="participantData" name="participant">

      <div>
        <table class="price-table col-6 pricelist-table" style="border-collapse: collapse;">
          <thead>
            <tr>
              <th scope="col" class="pricelist-table">Jedes Kind <br>unter 6 Jahre</th>
              <th scope="col" class="pricelist-table">Mitglied Kind <br>(6-16 Jahre)</th>
              <th scope="col" class="pricelist-table">Mitglied <br>Erwachsene</th>
              <th scope="col" class="pricelist-table">Gast Kind <br>(6-16 Jahre)</th>
              <th scope="col" class="pricelist-table">Gast <br>Erwachsene</th>
              <th scope="col" class="pricelist-table">Kurtaxe <br>(ab 15 Jahre)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pricelist-table">{{child_u6}}€ </td>
              <td class="pricelist-table">{{member_6to16}}€ </td>
              <td class="pricelist-table">{{member_adult}}€ </td>
              <td class="pricelist-table">{{guest_6to16}}€ </td>
              <td class="pricelist-table">{{guest_adult}}€ </td>
              <td class="pricelist-table">{{tourist_tax}}€ pro Nacht</td>
            </tr>
          </tbody>
        </table>
      </div>


      <h4 class="Group">Gruppenliste</h4>
      <div id="accordionExample" class="accordion d-none"></div>
      <div class="col-12">
        <div class="table-responsive">
          <table class="table" id="table-Group">
            <thead>
              <tr>
                <th scope="col">Vorname</th>
                <th scope="col">Nachname</th>
                <th scope="col">Alter</th>
                <th scope="col">Mitglied</th>
                <th scope="col">Anreise</th>
                <th scope="col">Abreise</th>
                <th scope="col">Nächte</th>
                <th scope="col">Löschen</th>
              </tr>
            </thead>
            <tbody>
              <!--Hier werden die Daten aus dem JS-Code eingefügt -->
            </tbody>
          </table>
        </div>
      </div>

      <div class="col-md-12">
        <button type="button" class="btn btn-primary" id="Participant" data-bs-toggle="modal" data-bs-target="#participantModal">
          Teilnehmer hinzufügen</button>
        <br>
      </div>

      <!-- Modal -->





      <!-- Counting stands -->
      <h2 class="readings">Zählenstände</h2>
      <p>Bitte bei der Abreise ablesen und ohne Kommastellen angeben.</p>
      <!-- Electricity -->
      <div class="row">
        <div class="col-md-6">
          <label for="electricity1" class="form-label">Strom (1KFM0900559508):</label>
          <input type="number" id="electricity1" name="electricity1" class="form-control">
          <br>
        </div>
      </div>


      <!-- Electricity 1 -->
      <div class="row">
        <div class="col-md-6">
          <label for="electricity2" class="form-label">Heizung (1KFM0900559511):</label>
          <input type="number" id="electricity2" name="electricity2" class="form-control">
          <br>
        </div>
      </div>

      <!-- Water -->
      <div class="row">
        <div class="col-md-6">
          <label for="water" class="form-label">Wasser</label>
          <input type="number" id="water" name="water" class="form-control" required>
        </div>
      </div>



      <!-- Checklist -->
      <h2 class="Checklist">Checkliste</h2>
      <p>Bitte vor Abfahrt die folgende Dinge kontrollieren und markieren, falls nicht mehr ausreichend vorhanden!</p>

      <!-- Toilet paper -->
      <div class="col-md-6">
        <input type="checkbox" id="toiletpaper" name="toiletpaper">
        <label for="toiletpaper" class="form-label">Klopapier</label>
      </div>

      <!-- Kitchen paper -->
      <div class="col-md-6">
        <input type="checkbox" id="kitchenpaper" name="kitchenpaper">
        <label for="kitchenpaper" class="form-label">Küchenpapier</label>
      </div>

      <!-- Charcoal -->
      <div class="col-md-6">
        <input type="checkbox" id="Charcoal" name="Charcoal">
        <label for="Charcoal" class="form-label">Holzkohle</label>
      </div>

      <!-- Grill lighter -->
      <div class="col-md-6">
        <input type="checkbox" id="grillLighter" name="grillLighter">
        <label for="grillLighter" class="form-label">Grillanzünder</label>
      </div>

      <!-- Matches -->
      <div class="col-md-6">
        <input type="checkbox" id="matches" name="matches">
        <label for="matches" class="form-label">Streichhölzer</label>
      </div>

      <!-- Dishwashing liquid -->
      <div class="col-md-6">
        <input type="checkbox" id="dish" name="dish">
        <label for="dish" class="form-label">Spülmittel</label>
      </div>

      <!-- WC cleaner -->
      <div class="col-md-6">
        <input type="checkbox" id="wc" name="wc">
        <label for="wc" class="form-label">WC-Reiniger</label>
      </div>

      <!-- Cleaning(all-purpose) -->
      <div class="col-md-6">
        <input type="checkbox" id="allPurpose" name="allPurpose">
        <label for="allPurpose" class="form-label">Putzmittel(Allzweck)</label>
      </div>

      <!-- trash bags -->
      <div class="col-md-6">
        <input type="checkbox" id="bags" name="bags">
        <label for="bags" class="form-label">Müllbeutel</label>
      </div>

      <!-- Identified defects -->
      <div class="col-md-12">
        <label for="comments" class="form-label">Festgestellt Mängel?</label>
        <div class="col-md-6">
          <textarea class="form-control" id="comments" name="comments" placeholder="Funktioniert etwas nicht?"></textarea>
        </div>
        <button type="submit" name="next" id="next" class="btn btn-primary margTop">Zusammenfassung anzeigen</button>
      </div>

    </form>

    <div class="modal fade" id="participantModal" tabindex="-1" aria-labelledby="participantModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="participantModalLabel">Teilnehmer hinzufügen</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="participantForm">
              <div class="mb-3">
                <label for="firstName" class="form-label">Vorname</label>
                <input type="text" class="form-control" id="firstName">
              </div>
              <div class="mb-3">
                <label for="lastName" class="form-label">Nachname</label>
                <input type="text" class="form-control" id="lastName">
              </div>
              <div class="mb-3">
                <label for="age" class="form-label">Alter</label>
                <input type="number" class="form-control" id="age">
              </div>
              <div class="mb-3">
                <label for="member" class="form-label">Mitglied</label>
                <select class="form-select" id="member">
                  <option value="Ja">Ja</option>
                  <option value="Nein">Nein</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="modal-arrival" class="form-label">Anreise</label>
                <input type="date" class="form-control" id="modal-arrival" name="modal-arrival">
              </div>
              <div class="mb-3">
                <label for="modal-departure" class="form-label">Abreise</label>
                <input type="date" class="form-control" id="modal-departure" name="modal-departure">
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
            <button type="button" class="btn btn-primary" id="saveParticipant">Speichern</button>
          </div>
        </div>
      </div>
    </div>
  </main>





  <script type="text/javascript" src="<?= ROOT ?>/assets/js/main.js"></script>
</body>

</html>