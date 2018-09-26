<?php

use Musonza\Chat\Eventing\MessageWasSent;

return [
    'user_model'       => \App\Models\User::class,
    /*
     * This will allow you to broadcast an event when a message is sent
     * Example:
     * Channel: private-mc-chat-conversation.2,
     * Event: Musonza\Chat\Messages\MessageWasSent
     */
    'broadcasts'       => false,
    'broadcast_events' => [
        MessageWasSent::class => 'toConversation',
    ],
];