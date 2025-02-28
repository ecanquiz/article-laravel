<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

class ArticleDetailRepository
{
    static public function getDescriptionByArticle(Collection $articleDetails)//: Collection
    {
        $articleDescription = '';

        foreach ($articleDetails as $value) {
            $articleDescription 
                .= ($value['bar_cod'] === 'N/A' ? '' : ($value['bar_cod']) . ', ')
                . $value['category']
                . ', ' . $value['product']
                . ($value['mark'] === 'N/A' ? '' : (', '. $value['mark']))
                . ', ' . $value['packing_deployed']
                . ', Cantidad: ' . $value['quantity']
                . ' | ';
        }

        return strlen($articleDescription) ? substr($articleDescription, 0, -3) : $articleDescription;
    }    
}
