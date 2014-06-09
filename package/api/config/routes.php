<?php

return [
    'api.groups.get' => ['/api/groups', 'Api\Group\GroupGetAction', ['methods' => ['get']]],
    'api.groups.post' => ['/api/groups', 'Api\Group\GroupPostAction', ['methods' => ['post']]],
    'api.events' => ['/api/events', 'Api\Event\EventGetAction', ['methods' => ['get']]],
    'api.events/types' => ['/api/events/{id:\d+}/types', 'Api\Event\EventTypeGetAction', ['methods' => ['get']]],
    'api.servers' => ['/api/servers', 'Api\Server\ServerGetAction', ['methods' => ['get']]]
];
