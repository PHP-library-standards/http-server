<?php
/**
 * @package   Pls\Http\Server
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Http\Server;

use Pls\Http\Message\{Response, ServerRequest};

interface Handler
{
    public function handle(ServerRequest $request): Response;
}
