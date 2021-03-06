<?php

namespace App;

class BudgetItem extends CachableModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'amount', 'budget_list_id'
    ];

    /**
     * Get the budget list for this item.
     */
    public function budgetList()
    {
        return $this->belongsTo('App\BudgetList', 'budget_list_id');
    }
}
