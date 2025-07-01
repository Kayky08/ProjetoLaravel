<?php
    namespace App\Models;

    class Listing{
        public static function all(){
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro saepe impedit iste voluptates blanditiis voluptate illum asperiores adipisci, aspernatur necessitatibus? Totam perspiciatis error optio debitis molestiae accusantium, consequatur laboriosam quaerat?'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro saepe impedit iste voluptates blanditiis voluptate illum asperiores adipisci, aspernatur necessitatibus? Totam perspiciatis error optio debitis molestiae accusantium, consequatur laboriosam quaerat?'
                ],
            ];
        }
    }