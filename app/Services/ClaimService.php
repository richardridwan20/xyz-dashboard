<?php

namespace App\Services;

use App\Services\ApiService;

class ClaimService extends ApiService
{
    public function __construct()
    {
        parent::__construct();
        $this->pageHeaderEndPoint = '';
    }

    public function getAllDataPaginated($page)
    {
        $this->endPoint = 'detail-limitation?page='.$page;

        return $this;
    }

    public function deleteDetail($id)
    {
        $this->endPoint = 'detail-limitation/destroy/'.$id;

        return $this;
    }

    public function createDetail()
    {
        $this->endPoint = 'detail-limitation/create';

        return $this;
    }

    public function getProductOfPartner()
    {
        $this->endPoint = 'productofpartner';

        return $this;
    }

    public function getClaim()
    {
        $this->endPoint = 'claim';

        return $this;
    }

    public function createClaim()
    {
        $this->endPoint = 'claim/create';

        return $this;
    }

    public function downloadReport($startDate, $endDate)
    {
        $this->endPoint = 'claim/export?start_date='.$startDate.'&end_date='.$endDate;

        return $this;
    }


}
