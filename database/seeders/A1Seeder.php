<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class A1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('a1s')->insert([
            [
                'question' => '● Buenos días. ¿Cómo …………………?',
                'secondpart' => '○ Muy bien, ¿y usted?',
                'a' => 'a) está',
                'b' => 'b) estás',
                'c' => 'c) estoy',
                'correctanswer' => 'a'            
            ],
            [
                'question' => '◊ Wat is het meervoud van “la cruz”?',
                'secondpart' => '',
                'a' => 'a) las cruces',
                'b' => 'b) las cruzes',
                'c' => 'c) los crucces',
                'correctanswer' => 'a'           
            ],
            [
                'question' => '● ¿………………… (ustedes) español?',
                'secondpart' => '○ Sí, un poco ¿y usted?',
                'a' => 'a) hablas',
                'b' => 'b) hablan',
                'c' => 'c) habla',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '◊ Welke persoonlijke voornaamwoorden hoort bij “cantáis”?',
                'secondpart' => '',
                'a' => 'a) ellos',
                'b' => 'b) nosotros',
                'c' => 'c) vosotros',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '● ¿Qué ………………… “la palabra”?',
                'secondpart' => '○ Het woord',
                'a' => 'a) significa',
                'b' => 'b) se escribe',
                'c' => 'c) dice',
                'correctanswer' => 'a'             
            ],
            [
                'question' => '● Hola. ¿Cómo …………………?',
                'secondpart' => '○ Carmen, ¿y tú?',
                'a' => 'a) se llama',
                'b' => 'b) te llamas',
                'c' => 'c) nos llamamos',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '◊ Wat is de juiste vervoeging van “jij eet”?',
                'secondpart' => '',
                'a' => 'a) come',
                'b' => 'b) comen',
                'c' => 'c) comes',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '● ¿………………… es su número de teléfono?',
                'secondpart' => '○ Es el 25687125',
                'a' => 'a) Qué',
                'b' => 'b) Cuál',
                'c' => 'c) Cuánto',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '◊ Waar vraag je naar bij  “¿Tienes correo electrónico?”?',
                'secondpart' => '',
                'a' => 'a) het emailadres',
                'b' => 'b) het huisadres',
                'c' => 'c) het faxnummer',
                'correctanswer' => 'a'             
            ],
            [
                'question' => '● ¿Qué es un recepcionista?',
                'secondpart' => '○ ¿Es hombre o mujer?',
                'a' => 'a) vertegenwoordiger / man',
                'b' => 'b) receptioniste / vrouw',
                'c' => 'c) receptionist / man of vrouw',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '◊ Wie is de zoon van je oom?',
                'secondpart' => '',
                'a' => 'a) mi primo',
                'b' => 'b) mi tío',
                'c' => 'c) mi sobrino',
                'correctanswer' => 'a' 
            ],
            [
                'question' => '◊ Hoe schrijf je de datum?',
                'secondpart' => '',
                'a' => 'a) es la dos de febrero',
                'b' => 'b) es el dos de febrero',
                'c' => 'c) son el segundo de febrero',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '● ………………… los perros.',
                'secondpart' => '○ Sí, son fantásticos.',
                'a' => 'a) me gusta',
                'b' => 'b) te gusta',
                'c' => 'c) me gustan',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '◊ Ana es baja y gordita, tiene los ojos azules y es rubia.',
                'secondpart' => '→ ¿Cómo es Ana?',
                'a' => 'a) Lang, dik, blauwe ogen en rood haar.',
                'b' => 'b) Klein, dun, groene ogen en een rond gezicht.',
                'c' => 'c) Kort, mollig, blauwe ogen en blond haar.',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '● Mira, allí está ……………. Marido.  ',
                'secondpart' => '○ ¡Qué hombre más guapo!',
                'a' => 'a) quién',
                'b' => 'b) yo',
                'c' => 'c) mi',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '● Pedro ¿te gusta el vino?',
                'secondpart' => '○ No, ……….. me gusta el vino.',
                'a' => 'a) nunca',
                'b' => 'b) no',
                'c' => 'c) siempre',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '◊ Welk boodschappen lijstje is correct?',
                'secondpart' => '',
                'a' => 'a) Un kilo y medio de patatas, doscientos gramos jamón y un paquete de café.',
                'b' => 'b) Un medio kilo de patatas, doscientos gramos de jamón y un paquete de café.',
                'c' => 'c) Un kilo de patatas, doscientos gramos de jamón y un paquete de café.',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '◊ Met welk voornaamwoord kan je terug verwijzen naar het lijdend voorwerp in deze zin?',
                'secondpart' => '→ ¿Dónde están mis libros?',
                'a' => 'a) lo',
                'b' => 'b) las',
                'c' => 'c) los',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '● ¿Qué …………… las croquetas?',
                'secondpart' => '○ Jamón y queso. Son muy buenas.',
                'a' => 'a) llevan',
                'b' => 'b) hay',
                'c' => 'c) dan',
                'correctanswer' => 'a'             
            ],
            [
                'question' => '● ¿Te gustan las gambas?',
                'secondpart' => '○ ……………. las albóndigas. ',
                'a' => 'a) prefero',
                'b' => 'b) prefiero',
                'c' => 'c) preferimos',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '◊ Hoe schrijf je 567?',
                'secondpart' => '',
                'a' => 'a) quinientos sesenta y siete',
                'b' => 'b) cincocientos setenta y siete',
                'c' => 'c) cinco cientos seisenta y sete',
                'correctanswer' => 'a'             
            ],
            [
                'question' => '● ¿Cómo vais a A Coruña?',
                'secondpart' => '○ Vamos ……………………… . ',
                'a' => 'a) con coche',
                'b' => 'b) en coche',
                'c' => 'c) por coche',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '◊ Si hoy es lunes y nos vemos el día después de mañana, ¿cuándo nos vemos?',
                'secondpart' => '',
                'a' => 'a) el lunes',
                'b' => 'b) el miércoles',
                'c' => 'c) el jueves',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '◊ ¿Cómo llegas correctamente a tu destino?',
                'secondpart' => '',
                'a' => 'a) Gira a la derecha, después tienes que cruzar la plaza y luego toma la tercera calle a la izquierda, después de dos bloques gira a la derecha y cruza el puente. allí, enfrente está tu destino.',
                'b' => 'b) Gira a la derecha, después tienes que cruzar la plaza y tomar la primera calle a la derecha, luego toma la primera calle a la derecha y sique todo recto, cruza la plaza y toma la primera calle a la derecha, allí está tu destino.',
                'c' => 'c) Gira a la izquierda, sigue dos bloques hasta el puente, antes del puente gira a la izquierda, toma la primera calle a la izquierda y la siguiente calle a la izquierda, después toma la primera calle a la derecha, después de un bloque está tu destino.',
                'correctanswer' => 'a'             
            ],
            [
                'question' => '● ¿Cuándo vamos ………….. piscina?',
                'secondpart' => '○ Primero quiero ir …………. cine.',
                'a' => 'a) a la / a el',
                'b' => 'b) al / a la',
                'c' => 'c) a la / al',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '● No me gusta la lluvia.',
                'secondpart' => '○ ………………………………….',
                'a' => 'a) A mí no.',
                'b' => 'b) A mí tampoco.',
                'c' => 'c) A mí también.',
                'correctanswer' => 'b'             
            ],
            [
                'question' => '● Lo siento, me he equivocado. ',
                'secondpart' => '○ ……………………………………..',
                'a' => 'a) Está bien. Gracias.',
                'b' => 'b) Gracias. Muy amable.',
                'c' => 'c) No pasa nada.',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '◊ Últimamente tenemos ………………… problemas con el internet.',
                'secondpart' => '',
                'a' => 'a) muchas',
                'b' => 'b) muy',
                'c' => 'c) muchos',
                'correctanswer' => 'c'             
            ],
            [
                'question' => '◊ Mañana …………….. para España.',
                'secondpart' => '',
                'a' => 'a) salgo',
                'b' => 'b) traigo',
                'c' => 'c) vengo',
                'correctanswer' => 'a'             
            ],
            [
                'question' => '◊ Hoe vertaal je “Heb je je huiswerk al gemaakt?”',
                'secondpart' => '',
                'a' => 'a) ¿Has hacido los deberes ya?',
                'b' => 'b) ¿Ya has hecho los deberes?',
                'c' => 'c) ¿Ya has hazido los deberes?',
                'correctanswer' => 'b'             
            ]
        ]);
    }
}
