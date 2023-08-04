<?php

namespace PaulT\TestProject;

class Inspire
{
    /**
     * @return string
     */
    public function justDoIt(): string
    {
        $response = [
            'quote' => 'Eys',
            'author' => 'ich'
        ];

        return $response['quote'] . '-' . $response['author'];
    }
}
