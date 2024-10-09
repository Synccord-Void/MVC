<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>


    <!-- Bootstrap core CSS -->
    <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <style>

    </style>


    <!-- Custom styles for this template -->
    <link href="<?= ROOT ?>/assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="neuhaeusl">

        <form class="row g-3" id="form" action="index.php?page=zusammenfassung" method="post">
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




            <h4 class="period">Reisezeitraum</h4>

            <div class="col-md-3">
                <label for="arrival" class="form-label">Anreise:</label>
                <input type="date" id="arrival" name="arrival" class="form-control">
            </div>

            <div class="col-md-3">
                <label for="departure" class="form-label">Abreise:</label>
                <input type="date" id="departure" name="departure" class="form-control">
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
                    <table class="table" id="table-Group-michlam">
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
                            <!--Paste data from js code -->
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="col-md-12">
                <button type="button" class="btn btn-primary" id="Participant">
                    Teilnehmer hinzufügen</button>
                <br>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <label for="beer" class="form-" label>Weißbier ({{weissbier_price}}€ pro Flasche)</label>
                    <input type="hidden" id="whitebeerPrice" name="whitebeerPrice" value="{{weissbier_price}}">
                    <input type="number" placeholder="Anzahl" id="beer" name="beer" class="form-control">
                    <div>Preis: <span id="priceWhiteBeer"></span> €</div>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="light" class="form-label">Helles ({{helles_price}}€ pro Flasche)</label>
                    <input type="hidden" id="lightbeerPrice" name="lightbeerPrice" value="{{helles_price}}">
                    <input type="number" placeholder="Anzahl" id="light" name="light" class="form-control">
                    <div>Preis: <span id="priceLight"></span> €</div>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="spezi" class="form-label">Spezi ({{spezi_price}}€ pro Flasche)</label>
                    <input type="hidden" id="speziPrice" name="speziPrice" value="{{spezi_price}}">
                    <input type="number" placeholder="Anzahl" id="spezi" name="spezi" class="form-control">
                    <div>Preis: <span id="priceSpezi"></span> €</div>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="limo" class="form-label">Limo ({{limo_price}}€ pro Flasche)</label>
                    <input type="hidden" id="limoPrice" name="limoPrice" value="{{limo_price}}">
                    <input type="number" placeholder="Anzahl" id="limo" name="limo" class="form-control">
                    <div>Preis: <span id="priceLimo"></span> €</div>
                    <br>
                </div>
            </div>


            <input type="hidden" id="parking" name="parking">
            <h4>KFZ</h4>

            <div id="accordionExampleKFZ" class="accordion d-none"></div>
            <div class="col-6">
                <div class="table-responsive1">
                    <table class="table" id="tableeKFZ">
                        <thead>
                            <tr>
                                <th scope="col">Parkschein</th>
                                <th scope="col">Kennzeichen</th>
                                <th scope="col">Nächte</th>
                                <th scope="col">Betrag</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="notice">*2 Euro pro KFZ pro Nacht</div>
            <!-- Button zum Öffnen des Modals -->


            <button type="button" id="addKFZ" class="btn col-4 btn-primary margBottom" data-bs-toggle="modal"
                data-bs-target="#kfzModal">
                KFZ hinzufügen
            </button>



            
            



        </form>
    </main>
    <script type="text/javascript" src="<?= ROOT ?>/assets/js/main.js"></script>

</body>

</html>