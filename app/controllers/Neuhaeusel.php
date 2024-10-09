<?php

class Neuhaeusel
{
    use Controller;

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $responsible = new Responsible(
                $_POST['first-name'] ?? '',
                $_POST['last-name'] ?? '',
                $_POST['dob'] ?? '',
                'Ja', 
                $_POST['arrival'] ?? '',
                $_POST['departure'] ?? '',
                $_POST['email'] ?? ''
            );

            $participants = [];
            if (!empty($_POST['participant'])) {
                $PD = json_decode($_POST['participant'], true);
                if (is_array($PD)) {
                    foreach ($PD as $pData) {
                        $participants[] = new Participant(
                            $pData['firstName'],
                            $pData['lastName'],
                            $pData['age'],
                            $pData['member'],
                            $pData['modal-arrival'],
                            $pData['modal-departure']
                        );
                    }
                }
            }

            var_dump($responsible);
            var_dump($participants);
            $this->view('zusammenfassung', [
                'responsiblePerson' => $responsible,
                'participants' => $participants,
            ]);
        } else {
            $this->view('neuhaeusel');
        }

    }
}
