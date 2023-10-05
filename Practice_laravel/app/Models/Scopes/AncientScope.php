<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class AncientScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('name', 'LIKE', 'D%'); ////// aita hocche amar global scopes akhane ami bole diyechi jei table ar 'name' colunm ar value D diye shuru hoyeche oi sob value amader oi 'name' column theke amader queary kore eene dekhabe...akhon amra jei jei model ar moddhe ai global scopes ta add korte chacchi oi moddle ar moddhe diye amader ai global scopes ta add kore dite hobe....jemon ami amader User model ar moddhe amader ai global scopes ta add korechi go to app/Models/User.php
    }
}
