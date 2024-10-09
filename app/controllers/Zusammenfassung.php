<?php

class Zusammenfassung
{
    use Controller;

    public function index()
    {
       $this->view('zusammenfassung', ['error' => 'No Order Found.']);
    }
}
