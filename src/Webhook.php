<?php
namespace TamoJuno;

use TamoJuno\Resource;

class Webhook extends Resource {

    public function endpoint(): string
    {
        return 'notifications/webhooks';
    }

    public function createWebhook(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
