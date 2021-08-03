<?php


namespace ApiClient\Api\ControlPanel;

use ApiClient\Api\ControlPanel\Request\PrivateAuth;
use ApiClient\Request;
use ApiClient\RequestBuilder;
use ApiClient\Services\Method;

/**
 * Class ControlPanelRequest
 * @package ApiClient\Api\ControlPanel
 */
class ControlPanelRequest extends Request
{
    public function createRequestBuilder(): RequestBuilder
    {
        return parent::createRequestBuilder()->setDomain("https://control-panel.dev.com");
    }

    /**
     * @param array|null $criteria
     */
    public function setGetAllSettings(array $criteria = null)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET());
        if ($criteria) {
            foreach ($criteria as $key => $value) {
                $this->getRequestBuilder()
                    ->addQueryParam($key, $value);
            }
        }
    }

    /**
     * @param $id
     */
    public function setGetByIdSettings($id)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->addQueryParam("id", $id);
    }
}
