<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransactionImport implements ToModel, WithHeadingRow
{
   /**
     * @param array $row
     *
     * @return Transaction|null
     */
    public function model(array $row)
    {
        return new Transaction([
           'customer_id'            => $row['customer_id'],
           'partner_id'             => $row['partner_id'],
           'product_id'             => $row['product_id'],
           'insured_relation'       => $row['insured_relation'],
           'insured_name'           => $row['insured_name'],
           'insured_dob'            => $row['insured_dob'],
           'insured_gender'         => $row['insured_gender'],
           'protection_duration'    => $row['protection_duration'],
           'certificate_number'     => $row['certificate_number'],
           'status'                 => $row['status'],
           'invoice_number'         => $row['invoice_number'],
           'total_paid'             => $row['total_paid'],
        ]);
    }
}
