<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsAdSpecification;
use VkSdk\Ads\Includes\Specifications;
use VkSdk\Includes\Request;

class AdsUpdateAds extends Request
{

    private $ad_specification = [];

    private $ids = [];

    public function getIds()
    {
        return $this->ids;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function addAdSpecification()
    {
        return $this->ad_specification[] = new AdsAdSpecification($this, Specifications::UPDATE);
    }

    private function adSpecificationsToJSON()
    {
        $ad = [];

        foreach ($this->ad_specification as $as) {
            $ad[] = $as->getArray();
        }

        return json_encode($ad);
    }

    public function doRequest()
    {
        $this->setRequiredParams('account_id');

        $this->setMethod("Ads.updateAds");

        $this->setParameter("data", $this->adSpecificationsToJSON());

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response[0]) && $json->response[0] &&
            isset($json->response[0]->id) && $json->response[0]->id
        ) {
            foreach ($json->response as $rs) {
                $this->ids[] = $rs->id;
            }

            return true;
        }

        return false;
    }

}