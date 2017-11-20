<?php
/* Icinga Web 2 OSMC Module (c) 2017 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Osmc\Controllers;

use Icinga\Application\Version;
use Icinga\Web\Controller;

class EventsController extends Controller
{
    //keep the name schema, it is hard to find otherwise
    //public function IndexAction()
    public function indexAction()
    {
        //Fetch and populate events for view
        $this->view->events = [ "We", "love", "OSMC" ];

        $this->view->version = Version::get();

        //Set refresh interval
        $this->setAutorefreshInterval(10);
    }
}
