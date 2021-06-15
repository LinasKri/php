<?php
session_start();

// jei nera .json failo, kuris laikytu saskaitas- sukurk
if (!file_exists(__DIR__.'/accounts.json')) {
    file_put_contents(__DIR__.'/accounts.json', json_encode([]));
}

// Saskaitu saraso atvaizdavimas GET

// Pinigu pridejimo atvaizdavimas GET

// Pinigu pridejimo vykdymas POST

// Pinigu atemimo atvaizdavimas GET

// Pinigu atemimo vykdymas POST

// Naujos saskaitos pridejimo atvaizdavimas GET

// Naujos saskaitos pridejimo vykdymas POST

// Saskaitos istrynimo vykdymas POST



