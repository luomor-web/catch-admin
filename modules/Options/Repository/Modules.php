<?php

namespace Modules\Options\Repository;

use Catch\Support\Module\ModuleRepository;

class Modules implements OptionInterface
{
    public function get(): array
    {
        $modules = [];

        app(ModuleRepository::class)->all([])

            ->each(function ($module) use (&$modules) {
                $modules[] = [
                    'label' => $module['name'],

                    'value' => $module['path']
                ];
            });

        return $modules;
    }
}
