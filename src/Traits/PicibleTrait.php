<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Picible.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Picible\Traits;

trait PicibleTrait
{
    public function pictures()
    {
        return $this->morphMany('BrianFaust\Picible\Models\Picture', 'picible');
    }
}
