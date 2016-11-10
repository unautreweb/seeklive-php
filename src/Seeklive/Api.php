<?php

namespace Seeklive;

class Api {

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->request = new Request($apiKey);
    }

    public function createConference($attributes)
    {
        return $this->request->createConference($attributes);
    }

    public function createParticipant($conferenceId, $attributes)
    {
        return $this->request->createParticipant($conferenceId, $attributes);
    }

    public function updateParticipant($token, $attributes)
    {
        return $this->request->updateParticipant($token, $attributes);
    }
}