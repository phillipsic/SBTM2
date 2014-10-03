<?php

namespace Sbtmapp\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SbtmappUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
