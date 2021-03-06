<?php

namespace VkSdk\Base;

use lib\AutoFillObject;

/**
 * Class CommentsInfo
 * @package VkSdk\Base
 */
class CommentsInfo
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $can_post;

    /**
     * @var integer
     */
    private $count;

    /**
     * Information whether current user can comment the post
     *
     * @return integer
     */
    public function getCanPost()
    {
        return $this->can_post;
    }

    /**
     * @return $this
     *
     * @param integer $can_post
     */
    public function setCanPost($can_post)
    {
        $this->can_post = $can_post;

        return $this;
    }

    /**
     * Comments number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}
