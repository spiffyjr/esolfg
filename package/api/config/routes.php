<?php

return [
    'api.groups.get' => ['/api/groups', 'Api\Group\GroupGetAction'],
    'api.groups.post' => ['/api/groups', 'Api\Group\GroupPostAction', ['methods' => ['post']]],
    'api.events' => ['/api/events', 'Api\Event\EventGetAction'],
    'api.events/types' => ['/api/events/{id:\d+}/types', 'Api\Event\EventTypeGetAction'],
    'api.servers' => ['/api/servers', 'Api\Server\ServerGetAction']
];
