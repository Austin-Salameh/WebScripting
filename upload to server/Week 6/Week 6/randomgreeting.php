
<?php
function randomGreeting() {
    $greeting = array(
        'Hello!',
        'Howdy Partner!',
        'Top of the Mornin to you',
        'Hola!',
        'Aloha!',
        

    );
    return $greeting[rand ( 0 , count($greeting) -1)];
}

print randomGreeting();