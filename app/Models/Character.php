<?php
namespace App\Models;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Character
 *
 * @author 家驹
 */
class Character {
    //put your code here
        protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Tom',
            'description' => 'One of the main characters in the cartoon, he always has a strong desire to catch jerry, a mouse who lives in the same room with him but is difficult to catch.',
            'image' => 'Tom.png',
            'favorite' => 'Fish',
            'varireties' => 'British Shorthair',
            'country' => 'USA',
            'character' => 'Domestic cat',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Jerry',
            'description' => 'One of the main characters in the cartoon always looks at the camera provocatively and often Dally with Tom in casual moments.',
            'image' => 'Jerry.png',
            'favorite' => 'Cheese',
            'varireties' => 'Flowers of tea',
            'country' => 'USA',
            'character' => 'Domestic mouse',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Spike',
            'description' => 'A fierce bulldog, whether Tom makes fun of him, catches Jerry by accident, or jerry frames him up, Tom always gets beaten up by him..',
            'image' => 'Spike.jpg',
             'favorite' => 'Bone',
            'varireties' => 'Bulldog',
            'country' => 'USA',
            'character' => 'Guard dog',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Tyke',
            'description' => 'Spike son, often innocently implicated in Tom and Jerry fight, is one of the main reasons spike hits Tom.',
            'image' => 'Tyke.jpg',
            'favorite' => 'Bone',
            'varireties' => 'Bulldog',
            'country' => 'USA',
            'character' => 'Spike son',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Tuffy',
            'description' => 'Jerry little grey rat outcast, petite, usually dressed in white nappies, gluttonous, speaks French and spends all his time at show MOE.',
            'image' => 'Tuffy.png',
            'favorite' => 'Pudding',
            'varireties' => 'Flowers of tea',
            'country' => 'USA',
            'character' => 'Jerry nephew',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Buch',
            'description' => 'A dirty stray cat, always want to catch Jerry, so sometimes will cooperate with Tom, but more often with Tom enemy',
            'image' => 'Buch.png',
            'favorite' => 'Fish bone',
            'varireties' => 'Black cat',
            'country' => 'USA',
            'character' => 'Wild cat',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
}
