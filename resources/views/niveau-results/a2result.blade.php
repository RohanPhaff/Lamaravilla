@extends('common.master')

@section('content')
<div class="spacer"></div>
<?php $score = 0; ?>
@for ($i = 0; $i < 30; $i++)
   @if ($result[$i] === $correctanswer[$i])
       <?php $score += 1 ?>
   @endif
@endfor
@if ($score < 10)
    <p class="result" style="margin-top: 5%;">Leuk dat je de tweede niveautest van La Maravilla hebt gedaan. Je hebt minder dan 10 goede
        antwoorden gegeven. Dat betekent dat je aan het begin staat van niveau A2. Je kunt je misschien al
        aardig redden in de tegenwoordige tijd. Sociale gesprekjes gaan echter meestal al snel over de
        verledentijd. Om met de eerste verledentijd te leren omgaan zou je verder kunnen gaan met niveau
        A2.1. Meer informatie over deze cursus vind je hier: <a href="https://la-maravilla.nl/beginners/niveau-a21">Cursus niveau A2.1</a>
        Als je nog niet helemaal zeker bent over de uitkomst kan je ook de test van een niveautje lager maken: <a href="a1/create">Niveautest A1</a></p>
@endif
@if ($score >= 10 && $score < 25)
    <p class="result" style="margin-top: 5%;">Je hebt tussen de 10 en de 25 vragen goed beantwoord. Je kunt al aardig wat dingen zeggen in de
        eerste verledentijd. Om je gebruik van de verledentijd helemaal correct te maken heb je nog wel de
        tweede verledentijd nodig. Je kan hiervoor verder met de cursus A2.2. Meer informatie over deze
        cursus vind je hier: <a href="https://la-maravilla.nl/beginners/niveau-a22">Cursus niveau A2.2</a></p>
@endif
@if ($score >= 25)
    <p class="result" style="margin-top: 5%;">Je hebt meer dan 25 vragen goed beantwoord en daarmee het niveau A2 al aardig onder de knie. Om
        verder te gaan met het leren van Spaans zijn er voor jou twee opties:</p>
    <p class="result">A. Je kunt deelnemen aan de conversatie groep. In deze groep vol conversaties slijt
        de kennis van het beginnersniveau in en leer je het geleerde vlotter toe te passen. Meer
        informatie over deze groep vind je hier: <a href="https://la-maravilla.nl/conversatie">Conversatie Jaar</a></p>
    <p class="result">B. Probeer de niveautest van niveau B1 om te zien welke cursus bij jou aansluit. Om verder
        te gaan met de volgende niveautest kan je hier klikken: <a href="b1/create">Niveautest B1</a></p>
@endif
@endsection
