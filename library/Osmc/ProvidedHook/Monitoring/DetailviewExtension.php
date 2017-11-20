<?php
/* Icinga Web 2 OSMC Module (c) 2017 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Osmc\ProvidedHook\Monitoring;

use Icinga\Module\Monitoring\Hook\DetailviewExtensionHook;
use Icinga\Module\Monitoring\Object\MonitoredObject;

class DetailviewExtension extends DetailviewExtensionHook
{
  public function getHtmlForObject(MonitoredObject $object)
  {
    return '<h2>Detail View Extension Hook Demo OSMC 2017</h2><br><img src="https://www.netways.de/fileadmin/images/NETWAYS/Icons/netways_icon_100x100.png"';
  }
}
