<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class B1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('b1s')->insert([
            [
                'question' => '● Buenos días. ¿Usted colecciona algo?',
                'secondpart' => '○ No, ……….',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) nada',
                'b' => 'b) ninguna',
                'c' => 'c) nadie',
                'correctanswer' => 'a'
            ],
            [
                'question' => '◊ Voor wie wordt hier iets gekocht? : Se lo he comprado.',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) voor hem',
                'b' => 'b) voor jou',
                'c' => 'c) voor jullie',
                'correctanswer' => 'a'
            ],
            [
                'question' => '● ¿Qué está buscando?',
                'secondpart' => '○ ………. mueble para la casa. ',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) alguno',
                'b' => 'b) algún',
                'c' => 'c) alguna',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Welke zin hoort bij: Sigue trabajando.',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Hij is de hele dag al aan het werken.',
                'b' => 'b) Hij was gestopt met werken maar begint er weer mee.',
                'c' => 'c) Hij was al aan het werken en gaat ermee door.',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● ¿Ya limpiaste tu habitación?',
                'secondpart' => '○ Estoy ……………….',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) limpiándomela',
                'b' => 'b) me la limpiando',
                'c' => 'c) limpiándolo',
                'correctanswer' => 'a'
            ],
            [
                'question' => '● Hola. Mi hermana ha tenido un hijo. ¡Ahora soy tía!',
                'secondpart' => '○ ¡No me digas! ……………….',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) ¡Que lo pases bien!',
                'b' => 'b) enhorabuena',
                'c' => 'c) Felices fiestas',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Bij welke zin wordt je niet uitgenodigd?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) El sábado doy una fiesta.',
                'b' => 'b) El sábado celebro mi santo.',
                'c' => 'c) El sábado ya tengo una fiesta.',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● ¿………………… es su número de teléfono?',
                'secondpart' => '○ Es el 25687125',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Qué',
                'b' => 'b) Cuál',
                'c' => 'c) Cuánto',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Wat bedoelt de gastvrouw als je wijn meebrengt en ze zegt:  “¡Pero si no hacía falta!”?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) beleefdheidsvorm van dank je wel',
                'b' => 'b) het was niet nodig want ze hebben heel veel drank',
                'c' => 'c) je had beter niks mee kunnen nemen',
                'correctanswer' => 'a'
            ],
            [
                'question' => '● ¿Puedo tomar un poco más de sopa?',
                'secondpart' => '○ ¿Claro, ……………?',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) ponete',
                'b' => 'b) pongate',
                'c' => 'c) ponte',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ Wie is de zoon van je oom?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) mi primo',
                'b' => 'b) mi tío',
                'c' => 'c) mi sobrino',
                'correctanswer' => 'a'
            ],
            [
                'question' => '◊ Wat is “una anfitriona”?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) een openlucht theater',
                'b' => 'b) een gastvrouw',
                'c' => 'c) een winnares',
                'correctanswer' => 'b'
            ],
            [
                'question' => '● ¿Qué tal la fiesta?',
                'secondpart' => '○ …………………….',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) es muy difícil',
                'b' => 'b) es muy digestiva',
                'c' => 'c) es muy divertida',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ Wat is de gebiedende wijs u van de volgende woorden?',
                'secondpart' => '→ cruzar / cerrar / repetir',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) cruces / cierres / repitas',
                'b' => 'b) cruzca / cierra / repite  ',
                'c' => 'c) cruce / cierre / repita ',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● ¿Puedo sentarme aquí?',
                'secondpart' => '○ ¡Sí claro! ……………',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) sentase',
                'b' => 'b) sentate',
                'c' => 'c) siéntase',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ Wat is de absolute overtreffende trap van rico?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) ricísimo',
                'b' => 'b) riqísimo',
                'c' => 'c) riquísimo',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ Hoe noemen we een geweldig goede wijn?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) un vino grande',
                'b' => 'b) un vino muy grande',
                'c' => 'c) un gran vino',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● ¿Le importa si abro la ventana?',
                'secondpart' => '○ ¡No, porfavor no ……………!',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) abrela',
                'b' => 'b) abres',
                'c' => 'c) la abre',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● ¿Dónde está su coche?',
                'secondpart' => '○ El …………… está ahí.',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) mí',
                'b' => 'b) tuyo',
                'c' => 'c) suyo',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● ¿Cuál te gusta más?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) aquel de aquí',
                'b' => 'b) este de ahí',
                'c' => 'c) este de aquí',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● Paola ¿Qué vas a hacer en tus vacaciones?',
                'secondpart' => '○ ……….. mucho.',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) caminamos',
                'b' => 'b) caminaremos',
                'c' => 'c) caminos',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Wat is de futuro van “tener”?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) tuveré, tuverás, tuverá, tuveremos, tuveréis, tuverán',
                'b' => 'b) tengé, tengás, tengá, tengamos, tengéis, tengán',
                'c' => 'c) tendré, tendrás, tendrá, tendremos, tendréis, tendrán',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ Wat bedoelt de spreker?',
                'secondpart' => '→ Tengo ganas de dar una vuelta.',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Ik heb zin om een vuelta te eten.',
                'b' => 'b) Ik heb zin om terug te gaan. ',
                'c' => 'c) Ik heb zin om een ommetje te maken.',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ In welke van de volgende zinnen is “tanto” een bijwoord?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) La gente no sabe tanto del Covid como los expertas.',
                'b' => 'b) Portugal no tiene tanto turismo como España.',
                'c' => 'c) Ellos no hacen tanto márketing como otras empresas.',
                'correctanswer' => 'a'
            ],
            [
                'question' => '◊ Para encontrar trabajo como voluntaria se necesita ciertas cualidades. ¿En cuál de los siguientes grupos están indicados correctamente?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) ser: creativa / entusiasmo / flexible',
                'b' => 'b) tener: paciencia / responsabilidad / tolerancia',
                'c' => 'c) ser capaz de: trabajar en equipo / disciplina / improvisar',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Hoe uit je een veronderstelling?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Supongo que tendrá unos sesenta años.',
                'b' => 'b) Supongo que tiene unos sesenta años.',
                'c' => 'c) Supongo que tuve unos sesenta años.',
                'correctanswer' => 'a'
            ],
            [
                'question' => '◊ ¿Qué es un programa de tertulia?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) een kookprogramma',
                'b' => 'b) een praatprogramma',
                'c' => 'c) een kinderprogramma',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Yo que tú lo pondría en mayúscula.',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Jij en ik zetten het in hoofdletters.',
                'b' => 'b) Als ik jou was zou ik het in hoofdletters zetten.',
                'c' => 'c) Ik weet niet of jij het in hoofletters gaat zetten.',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ ¿Cuál de estas frases es la correcta?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Estoy en internet para buscar información sobre España. ',
                'b' => 'b) Está comprando un regalo por su hermano pequeño. ',
                'c' => 'c) La tarea es por mañana, tiene prisa. ',
                'correctanswer' => 'a'
            ],
            [
                'question' => '● ¿Cuándo quieres ir a visitar a tu madre?',
                'secondpart' => '○ ¿Por qué no …………. la semana próxima?',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) vayan',
                'b' => 'b) vendremos',
                'c' => 'c) iremos',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ En 2010 se cambió de trabajo porque mucha gente se lo había sugerido.',
                'secondpart' => 'Wat betekent deze zin?',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Hij wisselde van baan en veel mensen waren het met hem eens.',
                'b' => 'b) Hij wisselde van baan omdat veel mensen het hem hadden aangeraden.',
                'c' => 'c) Hij wisselde van baan en daarna suggereerden mensen het hem pas.',
                'correctanswer' => 'b'
            ],
            [
                'question' => '● Voy a comprar un regalo para Ana.',
                'secondpart' => '○ Sí, pero tendrás que preguntarle lo que desea. ',
                'thirdpart' => '● Vale, eso haré ahora mismo.',
                'fourthpart' => '→ ¿Qué pasa cuando le da el regalo?',
                'a' => 'a) La compra directamente el regalo que desea.',
                'b' => 'b) Después de comprarla el regalo pregunta lo que desea.',
                'c' => 'c) Antes de comprárselo ya había preguntado lo que deseaba.',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ ¿En cuál de estas opciones no hay un verbo?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) me hizo las fotos',
                'b' => 'b) las fotos que hice',
                'c' => 'c) las fotos hechas',
                'correctanswer' => 'c'
            ],
            [
                'question' => '● ¿Puedes empezar directamente con este trabajo?',
                'secondpart' => '○ Estoy disponible en cualquier momento.',
                'thirdpart' => '→ ¿Puede efectivamente empezar directamente o no?',
                'fourthpart' => '',
                'a' => 'a) sí, puede empezar ahora mismo',
                'b' => 'b) no, para nada',
                'c' => 'c) Pues, dentro de poco',
                'correctanswer' => 'a'
            ],
            [
                'question' => '◊ Hoe zeg je “dat je je huiswerk al hebt gemaakt?”',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Todavía hago mis deberes.',
                'b' => 'b) los deberes están acabados.',
                'c' => 'c) Estoy en ello.',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Hoe zeg je “Ik denk dat hij zo’n 50 jaar oud moet zijn”?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Tiene unos cincuenta años.',
                'b' => 'b) Por supuesto tendría unos cincuenta años.',
                'c' => 'c) Tendrá unos cincuenta años.',
                'correctanswer' => 'c'
            ],
            [
                'question' => '◊ ¿Qué podrías decir cuando te piden decir algo sobre el futuro?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) La sociedad de mi país será bastante diferente',
                'b' => 'b) En el futuro había habido muchos cambios',
                'c' => 'c) Puede ser que van a sido igual',
                'correctanswer' => 'a'
            ],
            [
                'question' => '◊ Hoe zeg je “vanzelfsprekend”?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) ¿de verdad?',
                'b' => 'b) desde luego',
                'c' => 'c) ¡Qué va!',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Op welke manier kan je iemand niet begroeten?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) ¿Qué pones?',
                'b' => 'b) ¿Qué cuentas?',
                'c' => 'c) ¿Qué tiras?',
                'correctanswer' => 'b'
            ],
            [
                'question' => '◊ Welke van deze zinnen is correct?',
                'secondpart' => '',
                'thirdpart' => '',
                'fourthpart' => '',
                'a' => 'a) Una vez estando en la tienda me doy cuenta de que dejo la puerta abierta',
                'b' => 'b) Cuando estaba en la tienda me di cuenta de que había dejado la puerta abierta',
                'c' => 'c) Todavía no estaré en la tienda cuando me estoy dando cuenta de dejaré la puerta abierta',
                'correctanswer' => 'b'
            ],
        ]);
    }
}
