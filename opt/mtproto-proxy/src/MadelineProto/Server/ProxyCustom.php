<?php

/*
Copyright 2016-2018 Daniil Gentili
(https://daniil.it)
This file is part of MadelineProto.
MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
The PWRTelegram API is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.
You should have received a copy of the GNU General Public License along with MadelineProto.
If not, see <http://www.gnu.org/licenses/>.
*/
namespace danog\MadelineProto\Server;

/*
 * Socket handler for server
 */
use danog\MadelineProto\ServerProxy;

class ProxyCustom extends Proxy
{

  /**
   * @var \danog\MadelineProto\ServerProxy
   */
  protected $server = null;

  public function __destruct()
  {
    parent::__destruct();

    if ($this->server instanceof ServerProxy) {
      $this->server->delPid(getmypid());
    }
  }

  public function setServer(ServerProxy $server) {
    $this->server = $server;
  }
}