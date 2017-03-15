<?php

namespace Cercle\ChasseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CercleChasseBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
