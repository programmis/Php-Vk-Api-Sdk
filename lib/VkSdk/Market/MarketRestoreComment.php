<?php

namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Restores a recently deleted comment
 * Class MarketRestoreComment
 * @package VkSdk\Market
 */
class MarketRestoreComment extends Request
{

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "comment_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "market.restoreComment";
    }

    /**
     * See constants of class BoolInt
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * deleted comment id
     *
     * @return $this
     *
     * @param integer $comment_id
     */
    public function setCommentId($comment_id)
    {
        $this->vkarg_comment_id = $comment_id;

        return $this;
    }

    /**
     * identifier of an item owner community; "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }
}
