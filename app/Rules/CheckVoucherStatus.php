<?php

namespace App\Rules;

use App\Http\Controllers\DashboardController;
use App\Services\DashboardService;
use Illuminate\Contracts\Validation\Rule;

class CheckVoucherStatus implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->dashboardService = new DashboardService();

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
        $voucher = $this->dashboardService->checkVoucherStatusByCode($value)->fetch();
        if($voucher->bodyResponse['status'] == 200){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Voucher already used';
    }
}
