<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior(){
        $warrior = new MarvelWarrior($GLOBALS['warriorName']);
        $warrior->imageUrl='https://www.geoado.com/wp-content/uploads/2015/02/Spider-Man-Marvel.jpg';
        $weapon = new Weapon(1, 24);
        $weapon->imageUrl='https://gear.blizzard.com/cdn/shop/files/frostmournephoto_0000_lichkingsword_0002_WOWCST000800A.jpg?v=1743436206';
        $warrior->weapon = $weapon;
        $warrior->saveNew();
    }

    public static function createOtherWarrior(){
        $otherWarrior = new StartrekWarrior('coucou');
        $otherWarrior->imageUrl='https://static01.nyt.com/images/2015/02/28/arts/28nimoy_video_hp/28nimoy_video_hp-facebookJumbo-v3.jpg';
        $weapon = new Weapon(2, 19);
        $weapon->imageUrl='https://thumbs.dreamstime.com/b/salutation-de-vulcan-589376.jpg';
        $otherWarrior->weapon = $weapon;
        $otherWarrior->saveNew();
    }

}
