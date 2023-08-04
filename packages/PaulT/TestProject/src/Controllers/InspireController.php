<?php

namespace PaulT\TestProject\Controllers;

use PaulT\TestProject\Inspire;

class InspireController
{

    public function __invoke(Inspire $inspire): string
    {
        $quote = $inspire->justDoIt();

        return view('Inspire::index', compact('quote'));
    }

}
