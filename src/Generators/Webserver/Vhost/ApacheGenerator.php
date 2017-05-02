<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/hyn/multi-tenant
 *
 */

namespace Hyn\Tenancy\Generators\Webserver\Vhost;

use Hyn\Tenancy\Contracts\Webserver\VhostGenerator;
use Hyn\Tenancy\Models\Website;

class ApacheGenerator implements VhostGenerator
{
    /**
     * @param Website $website
     * @return string
     */
    public function generate(Website $website): string
    {
        return view('tenancy.generator::webserver.apache.vhost', compact('website'));
    }

    /**
     * @param Website $website
     * @return string
     */
    public function targetPath(Website $website): string
    {
        // TODO: Implement targetPath() method.
    }
}
