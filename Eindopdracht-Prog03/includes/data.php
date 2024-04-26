<?php
/**
 * @return array
 */
function getTheFinals()
{
    return [
        [
            "id" => 1,
            "name" => "Light",
            "maker" => "",
            "image" => "lightClass.jpg",
        ],
        [
            "id" => 2,
            "name" => "XP-54",
            "maker" => "",
            "image" => "xp54.jpeg",
        ],
        [
            "id" => 3,
            "name" => "Throwing Knives",
            "maker" => "",
            "image" => "throwing knives.jpeg",
        ],
        [
            "id" => 4,
            "name" => "V95",
            "maker" => "",
            "image" => "v95.jpeg",
        ],
        [
            "id" => 5,
            "name" => "Stun Gun",
            "maker" => "",
            "image" => "stun gun.jpeg",
        ],
        [
            "id" => 6,
            "name" => "M11",
            "maker" => "",
            "image" => "m11.jpeg",
        ],
        [
            "id" => 7,
            "name" => "LH1",
            "maker" => "",
            "image" => "LH1.jpeg",
        ],
        [
            "id" => 8,
            "name" => "SH1900",
            "maker" => "",
            "image" => "Sh1900.jpeg",
        ],
        [
            "id" => 9,
            "name" => "SR-84",
            "maker" => "",
            "image" => "sr-84.jpeg",
        ],
        [
            "id" => 10,
            "name" => "Dagger",
            "maker" => "",
            "image" => "dagger.jpeg",
        ],
        [
            "id" => 11,
            "name" => "93R",
            "maker" => "",
            "image" => "93r.jpeg",
        ],
        [
            "id" => 12,
            "name" => "Sword",
            "maker" => "",
            "image" => "sword.jpeg",
        ],
        [
            "id" => 13,
            "name" => "Cloacking Device",
            "maker" => "",
            "image" => "cloaking device.jpg",
        ],
        [
            "id" => 14,
            "name" => "Evasive Dash",
            "maker" => "",
            "image" => "Evasive dash.jpeg",
        ],
        [
            "id" => 15,
            "name" => "Grappling Hook",
            "maker" => "",
            "image" => "Grappling hook.jpg",
        ]
    ];
}



/**
 * @param $id
 * @return mixed
 */
function getFinalistDetails($id)
{
    $tags = [
        1 => [
            "overview" => "Exceptionally fast, but low survivability. Executes hit-and-run tactics.",
            "type" => "Stealth and Evasion"
        ],
        2 => [
            "overview" => "A Tactical submachine gun",
            "type" => "Ranged Weapon / LIGHT"
        ],
        3 => [
            "overview" => "A set of silent projectiles that can be thrown in short burst; can also be thrown in pairs",
            "type" => "Ranged Weapon / LIGHT"
        ],
        4 => [
            "overview" => "Semi-automatic pistol",
            "type" => "Ranged Weapon / LIGHT"
        ],
        5 => [
            "overview" => "Stuns and immobilizes opponents at close range",
            "type" => "Offensive / LIGHT"
        ],
        6 => [
            "overview" => "Fast-firing, fully automatic machine pistol",
            "type" => "Ranged Weapon / LIGHT"
        ],
        7 => [
            "overview" => "Semi-automatic battle rifle",
            "type" => "Marksman rifle / LIGHT"
        ],
        8 => [
            "overview" => "Double-barrel shotgun with a wide spread",
            "type" => "Ranged Weapon / LIGHT"
        ],
        9 => [
            "overview" => "Bolt-action sniper rifle",
            "type" => "Ranged Weapon / LIGHT"
        ],
        10 => [
            "overview" => "Close-range melee weapon; can also perform a secondary backstabbing attack",
            "type" => "Melee weapon / LIGHT"
        ],
        11 => [
            "overview" => "Burst-fire machine pistol",
            "type" => "Ranged weapon / LIGHT"
        ],
        12 => [
            "overview" => "High-damage melee weapon; can also perform a secondary lunging attack",
            "type" => "Melee weapon / LIGHT"
        ],
        13 => [
            "overview" => "A temporary cloak that makes you hard to see when moving, and invisible when motionless",
            "type" => "Specialization / LIGHT"
        ],
        14 => [
            "overview" => "A few quick dashes to close distance or dodge out of harm's way",
            "type" => "Specialization / LIGHT"
        ],
        15 => [
            "overview" => "A cord with a hook that you launch to scale structures and swing past walls. Also handy for quick escapes during combat",
            "type" => "Specialization / LIGHT"
        ],
    ];
    return $tags[$id];
}

