<?php
namespace App\Models;
use APP\Models\Simple\JSONModel;

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
class Character extends Simple\JSONModel {
    protected $origin = WRITEPATH.'data/CharacterData.json';
    protected $keyField = 'id';
    protected $validationRules = [];

}