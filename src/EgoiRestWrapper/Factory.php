<?php
namespace EgoiRestWrapper;

use EgoiRestWrapper\Api\RestImpl;

abstract class Factory {

    static function getApi() {
        return new RestImpl();
        }
}