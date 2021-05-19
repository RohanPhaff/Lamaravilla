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
    <p class="result" style="margin-top: 5%;">Leuk dat je de niveautest van La Maravilla hebt gedaan. Je hebt minder dan 10 goede antwoorden
        gegeven. Dat betekent dat je aan het begin staat van het leren van de Spaanse taal. Je hebt in de
        praktijk of tijdens een eerdere cursus al wel wat opgepikt. Met handen en voeten kom je nu
        misschien al een beetje tot communiceren. Als je echt Spaans wilt leren zou je kunnen beginnen met
        het niveau A1.1. Meer informatie over deze cursus vind je hier: <a href="https://la-maravilla.nl/beginners/niveau-a11">Niveau-A1.1</a></p>
@endif
@if ($score >= 10 && $score < 25)
    <p class="result" style="margin-top: 5%;">Je hebt tussen de 10 en de 25 vragen goed beantwoord. Je kunt al best wat dingen zeggen in de
        tegenwoordige tijd. Korte zinnen in een restaurant of op de markt lukken misschien al wel. Om wat
        meer woordenschat op te bouwen en wat vlotter uit je woorden te komen zou je een cursus A1.2
        kunnen doen. Meer informatie over deze cursus vind je hier: <a href="https://la-maravilla.nl/beginners/niveau-a12">Niveau A1.2</a></p>
@endif
@if ($score >= 25)
    <p class="result" style="margin-top: 5%;">Je hebt meer dan 25 vragen goed beantwoord en daarmee het niveau A1 al aardig onder de knie.
        Probeer de niveautest van niveau A2 om te zien welke cursus bij jou aansluit. Om verder te gaan met
        de volgende niveautest kan je hier klikken: <a href="/a2/create">Niveautest A2</a></p>
@endif
@endsection