<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class A2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('a2s')->insert([
            [
                'question' => '● Hola Juan. ¿Conoces a mi madre',
                'secondpart' => '○ No, no la …………………',
                'thirdpart' => '',
                'a' => 'a) conozco',
                'b' => 'b) conoces',
                'c' => 'c) conoco',
                'correctanswer' => 'a'          
            ],
            [
                'question' => '◊ Wat is de juiste vertaling van “Piet wast zich.”?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) Pedro se lava',
                'b' => 'b) Se pedro lava',
                'c' => 'c) Pedro te lavas',
                'correctanswer' => 'a'          
            ],
            [
                'question' => '● ¿………………… (tú) tocar la guitarra?',
                'secondpart' => '○ Sí, un poco.',
                'thirdpart' => '',
                'a' => 'a) puedes',
                'b' => 'b) sabes',
                'c' => 'c) conoces',
                'correctanser' => 'b'            
            ],
            [
                'question' => '◊ Hoe zeg je dat Madrid groter is dan Pamplona?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) Madrid es muy grande de Pamplona.',
                'b' => 'b) Madrid es tan grande como Pamplona.',
                'c' => 'c) Madrid es más grande que Pamplona.',
                'correctanswer' => 'c'           
            ],
            [
                'question' => '● ¿Dónde está ………………… cosa?',
                'secondpart' => '○ Pues, ahí.',
                'thirdpart' => '',
                'a' => 'a) esta',
                'b' => 'b) aquella',
                'c' => 'c) esa',
                'correctanswer' => 'a'           
            ],
            [
                'question' => '● Hola. ¡Qué viento hace hoy!',
                'secondpart' => '○ Sí ¿verdad?',
                'thirdpart' => '',
                'a' => 'a) het regent',
                'b' => 'b) het waait',
                'c' => 'c) het is koud',
                'correctanswer' => 'b'           
            ],
            [
                'question' => '◊ Wat is de gerundio van “escribir”?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) escrito',
                'b' => 'b) escribido',
                'c' => 'c) escribiendo',
                'correctanswer' => 'c'          
            ],
            [
                'question' => '● ¿Tienes ganas de salir conmigo esta noche ?',
                'secondpart' => '○ ……………………………..',
                'thirdpart' => '',
                'a' => 'a) Sí, vemos una película en casa.',
                'b' => 'b) ¡Qué ilusión!',
                'c' => 'c) ¿A qué hora vamos a trabajar?',
                'correctanswer' => 'b'           
            ],
            [
                'question' => '◊ Waar vraag je naar bij “¿que hay en el mercado?”?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) Dat wat er op de markt is',
                'b' => 'b) Wat is de markt',
                'c' => 'c) Op de markt is er wat',
                'correctanswer' => 'a'           
            ],
            [
                'question' => '● ¿Qué es un austríaco?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) iemand uit Australië',
                'b' => 'b) een struisvogel',
                'c' => 'c) een Oostenrijker',
                'correctanswer' => 'c'            
            ],
            [
                'question' => '◊ ¿Qué es “el menú”?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) het menú van de dag',
                'b' => 'b) de menukaart',
                'c' => 'c) de daghap',
                'correctanswer' => 'a'           
            ],
            [
                'question' => '◊ Welke zin klopt er wel?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) ¿Me trae un otro cuchillo?',
                'b' => 'b) ¿Me trae otro cuchillo?',
                'c' => 'c) ¿Me trae otra cuchilla?',
                'correctanswer' => 'b'            
            ],
            [
                'question' => '● Estás uvas están muy dulces.',
                'secondpart' => '○ Sí, están fantásticos.',
                'thirdpart' => '',
                'a' => 'a) betekent: de druiven zijn zoet van zichzelf',
                'b' => 'b) betekent: de druiven zijn van een zoet ras',
                'c' => 'c) betekent: de druiven zijn rijp',
                'correctanswer' => 'c'            
            ],
            [
                'question' => '● ¿Qué significa “la mayoría”?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) algunos',
                'b' => 'b) (casi) todos',
                'c' => 'c) la parte más grande',
                'correctanswer' => 'c'          
            ],
            [
                'question' => '◊ Hoe vertaal je: Gister kocht ik brood.',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) Ayer compró pan.',
                'b' => 'b) Ayer compría pan.',
                'c' => 'c) Ayer compré pan.',
                'correctanswer' => 'c'          
            ],
            [
                'question' => '● Pedro ¿te gusta el vino?',
                'secondpart' => '○ No, no me gusta el vino.',
                'thirdpart' => '● Pues, ……………………………',
                'a' => 'a) a mí también',
                'b' => 'b) a mí tampoco.',
                'c' => 'c) a mí no',
                'correctanswer' => 'b'           
            ],
            [
                'question' => '◊ Wat betekent: “aprendieron hablar en alemán?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) Ze spraken Duits met elkaar.',
                'b' => 'b) Hij leerde haar Duits spreken.',
                'c' => 'c) Ze leerden Duits spreken.',
                'correctanswer' => 'c'            
            ],
            [
                'question' => '◊ Wat is de juiste vervoeging van “tener” in de indefinido?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) tenía, tenías, tenía, teníamos, teníais, tenieron',
                'b' => 'b) tuví, tuviste, tuvió, tuvimos, tuvisteis, tuvieron',
                'c' => 'c) tuve, tuviste, tuvo, tuvimos, tuvisteis, tuvieron',
                'correctanswer' => 'c'            
            ],
            [
                'question' => '● ¿Qué significa “poner la mesa”?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) de tafel dekken',
                'b' => 'b) de tafel verplaatsen',
                'c' => 'c) de tafel afruimen',
                'correctanswer' => 'a'           
            ],
            [
                'question' => '● Vivo en Alicante ……………. cuatro años.',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) desde',
                'b' => 'b) desde hace',
                'c' => 'c) hace',
                'correctanswer' => 'b'            
            ],
            [
                'question' => '◊ Hoe zeg je dat je last hebt van je buik?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) me duele la barriga',
                'b' => 'b) duele la barriga',
                'c' => 'c) tengo deule en mi barriga',
                'correctanswer' => 'a'            
            ],
            [
                'question' => '◊ Hoe zeg je dat er niemand is?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) hay nadie',
                'b' => 'b) no hay nadie',
                'c' => 'c) hay nada',
                'correctanswer' => 'b'            
            ],
            [
                'question' => '◊ Hoe zeg je dat je rustig eet?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) comer lento',
                'b' => 'b) comer tranquilamente',
                'c' => 'c) comer despacio',
                'correctanswer' => 'b'            
            ],
            [
                'question' => '◊ ¿Cómo llegas correctamente a tu destino?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) Gira a la derecha, cruza la plaza, toma la tercera calle a la izquierda, gira la segunda calle a la derecha, cruza el puente, enfrente está tu destino.',
                'b' => 'b) Gira a la derecha, cruza la plaza, toma la primera calle a la derecha, toma la primera calle a la derecha, sique todo recto, cruza la plaza y toma la primera calle a la derecha.',
                'c' => 'c) Gira a la izquierda, sigue hasta el puente, antes del puente gira a la izquierda, toma la primera calle a la izquierda, la siguiente calle a la izquierda, toma la primera calle a la derecha, después de un bloque está tu destino.',
                'correctanswer' => 'a'            
            ],
            [
                'question' => '● ¿Dónde ………………. en tu juventud?',
                'secondpart' => '○ Cuando …………. 5 años …………….. en Valladolid.',
                'thirdpart' => '',
                'a' => 'a) vivía / era / vivia',
                'b' => 'b) estabas / era / vivía',
                'c' => 'c) vivías / tenía / vivía',
                'correctanswer' => 'c'            
            ],
            [
                'question' => '● Las flores nunca me gustaban.',
                'secondpart' => '○ ………………………………….',
                'thirdpart' => '',
                'a' => 'a) A mí no.',
                'b' => 'b) A mí sí.',
                'c' => 'c) A mí también.',
                'correctanswer' => 'b'
            ],
            [
                'question' => '● Recuerdas de la moda de los noventa.',
                'secondpart' => '● ……………………………………..',
                'thirdpart' => '',
                'a' => 'a) Sí, ¡son deliciosos!',
                'b' => 'b) Bueno, ¡no pasa nada!',
                'c' => 'c) ¿No? ¡Qué suerte!',
                'correctanswer' => 'c'            
            ],
            [
                'question' => '◊ Cuando era joven ………………… poco la tele.',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) víamos',
                'b' => 'b) vimos',
                'c' => 'c) veíamos',
                'correctanswer' => 'c'          
            ],
            [
                'question' => '◊ Ayer …………….. a tu hermana.',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) busqué',
                'b' => 'b) buscé',
                'c' => 'c) buscaba',
                'correctanswer' => 'a'            
            ],
            [
                'question' => '◊ Wat is het verkleinwoord van “café”?',
                'secondpart' => '',
                'thirdpart' => '',
                'a' => 'a) cafetito',
                'b' => 'b) cafecito',
                'c' => 'c) cafecísimo',
                'correctanswer' => 'b'            
            ]
        ]);
    }
}
