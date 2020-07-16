<?php
namespace PoP\Media;

interface PostsFunctionAPI
{
    public function hasCustomPostThumbnail($post_id);
    public function getCustomPostThumbnailID($post_id);
}
