<?php
/* Icinga Web 2 OSMC Module (c) 2017 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Osmc\ProvidedHook;

use Icinga\Application\Hook\GrapherHook;
use Icinga\Module\Monitoring\Object\MonitoredObject;

class Grapher extends GrapherHook
{
  public function has(MonitoredObject $object)
  {
     return true;
  }

  public function getPreviewHtml(MonitoredObject $object)
  {
    return '<h2>Grapher Hook Demo OSMC 2017</h2><br><img src="'
      . 'https://osmc.de/wp-content/uploads/sites/3/2017/04/osmc_logo_2018_500x212_invers.png"'
      . ' alt="OSMC Demo" height="100">';
  }
}
