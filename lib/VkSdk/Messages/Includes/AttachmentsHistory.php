<?php

namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Full;
use VkSdk\Base\Link;
use VkSdk\Docs\Includes\Doc;
use VkSdk\Photos\Includes\Photo;
use VkSdk\Video\Includes\Video;

/**
 * Class AttachmentsHistory
 * @package VkSdk\Messages\Includes
 */
class AttachmentsHistory
{
    use AutoFillObject;

    /**
     * @var Full
     */
    private $audio;

    /**
     * @var Doc
     */
    private $doc;

    /**
     * @var Link
     */
    private $link;

    /**
     * @var Photo
     */
    private $photo;

    /**
     * @var string
     */
    private $type;

    /**
     * @var Video
     */
    private $video;

    /**
     * @return Full
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @return $this
     *
     * @param Full $audio
     */
    public function setAudio(Full $audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * @return Doc
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * @return $this
     *
     * @param Doc $doc
     */
    public function setDoc(Doc $doc)
    {
        $this->doc = $doc;

        return $this;
    }

    /**
     * @return Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return $this
     *
     * @param Link $link
     */
    public function setLink(Link $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return $this
     *
     * @param Photo $photo
     */
    public function setPhoto(Photo $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Attachments type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return $this
     *
     * @param Video $video
     */
    public function setVideo(Video $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'photo' => 'VkSdk\Photos\Includes\Photo',
            'video' => 'VkSdk\Video\Includes\Video',
            'audio' => 'VkSdk\Audio\Includes\Full',
            'doc'   => 'VkSdk\Docs\Includes\Doc',
            'link'  => 'VkSdk\Base\Link',
        ];
    }
}
