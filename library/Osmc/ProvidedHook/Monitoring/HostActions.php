<?php
/* Icinga Web 2 OSMC Module (c) 2017 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Osmc\ProvidedHook\Monitoring;

use Icinga\Module\Monitoring\Web\Hook\HostActionsHook;
use Icinga\Module\Monitoring\Object\Host;
use Icinga\Web\Url;


class HostActions extends HostActionsHook
{
    public function getActionsForHost(Host $host)
    {
        return $this->createNavigation([
            mt('osmc', 'OSMC Events') => [
                'icon'        => 'doc-text',
                'permission'  => 'osmc/events',
                'url'         => Url::fromPath('osmc/events', [ 'host' => $host->getName()])
            ]
        ]);
    }
}
