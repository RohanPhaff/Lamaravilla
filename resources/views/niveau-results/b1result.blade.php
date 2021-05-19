@extends('common.master')

@section('content')
<div class="spacer"></div>
<?php $score = 0; ?>
@for ($i = 0; $i < 40; $i++)
   @if ($result[$i] === $correctanswer[$i])
       <?php $score += 1 ?>
   @endif
@endfor
@if ($score < 12)
    <p class="result" style="margin-top: 5%;">Leuk dat je de derde niveautest van La Maravilla hebt gedaan. Je hebt minder dan 12 goede
antwoorden gegeven. Dat betekent dat je aan het begin staat van niveau B1. Je bent al bekend met
de verschillende verledentijden. Voor wat meer verdieping zou je verder kunnen gaan met niveau
B1.1 Meer informatie over deze cursus vind je hier: <a href="https://la-maravilla.nl/halfgevorderd/niveau-b11-b12">Niveau B1.1</a></p>
@endif
@if ($score >= 12 && $score < 35)
    <p class="result" style="margin-top: 5%;">Je hebt tussen de 12 en de 35 vragen goed beantwoord. Je kunt waarschijnlijk al goed overweg met
        de gebiedende wijs. Om je gesprekken te verdiepen met de toekomende tijd heb je nog wel wat
        meer kennis van de taal nodig. Je kan hiervoor verder met de cursus B1.2. Meer informatie over deze
        cursus vind je hier: <a href="https://la-maravilla.nl/halfgevorderd/niveau-b11-b12">Niveau B1.2</a></p>
@endif
@if ($score >= 35)
    <p class="result" style="margin-top: 5%;">Je hebt meer dan 35 vragen goed beantwoord en daarmee het niveau B1 al aardig onder de knie. Om
        verder te gaan met het leren van Spaans zijn er twee opties:</p>
    <p class="result">A. Je kunt deelnemen aan de conversatiegroep 1. Meer informatie over deze groep vind je
        hier: <a href="https://la-maravilla.nl/conversatie">Conversatie groep</a></p>
    <p class="result">B. Bepaal in overleg met de docente van La Maravilla welk niveau het beste bij jou aansluit
        en welke les vorm er beschikbaar is. Bij voldoende inschrijvingen kan er op dit niveau een
        groep gevormd worden, zo niet dan is er de optie van privélessen. Mail voor overleg over
        jouw niveau naar: info@la-maravilla.nl. Meer informatie over het volgen van privélessen
        vind je hier: <a href="https://la-maravilla.nl/priveles-flexles">Prive/Flexles</a></p>
@endif
@endsection