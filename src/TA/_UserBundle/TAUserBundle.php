<?php

namespace TA\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TAUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
