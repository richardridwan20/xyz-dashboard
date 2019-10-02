<?php

namespace App\Rules;

use App\Services\DashboardService;
use Illuminate\Contracts\Validation\Rule;

class PlanChecker implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($product_id, $duration)
    {
        $this->product_id = $product_id;
        $this->duration = $duration;
        $this->service = new DashboardService;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($this->product_id != null && $this->duration != null){
            $check = $this->service->checkPlan($value, $this->product_id, $this->duration)->fetch();
        }
        else{
            return true;
        }

        if($check->bodyResponse['code'] == 101){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Plan Already Exist';
    }
}
