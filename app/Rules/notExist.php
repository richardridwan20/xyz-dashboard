<?php

namespace App\Rules;

use App\Services\ProductOfPartnerService;
use Illuminate\Contracts\Validation\Rule;

class notExist implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($partner_id)
    {
        $this->partner_id = $partner_id;
        $this->popService = new ProductOfPartnerService;
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
        $product = $this->popService->getTransactionById($this->partner_id)->get();

        for($i = 0;$i<count($product);$i++){
            if($value == $product[$i]['id']){
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Product Already Exist in Partner';
    }
}
