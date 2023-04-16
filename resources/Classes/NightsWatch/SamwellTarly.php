<?php

namespace App\Resources\Classes\NightsWatch;

use App\POO\Ex05\IFighter;

class SamwellTarly implements IFighter
{
    public function fight(string $target = ''): void
    {
        echo '* flees, finds a girl, grows a spine, and defends her to the bitter end *' . PHP_EOL;
    }

    public function makeHisFatherProud(): bool
    {
        return false;
    }
}
