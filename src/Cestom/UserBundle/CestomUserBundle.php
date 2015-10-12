<?php

namespace Cestom\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CestomUserBundle extends Bundle
{
	 public function getParent()
    {
      return 'FOSUserBundle';
    }
}
