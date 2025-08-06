<?php

namespace Mrakahaikal\Swytch\Components;

use Filament\Forms\Components\Field;

class Swytch extends Field
{
    protected string $view = 'swytch::components.swytch';

    protected array $options = [];

    public function options(array $options): static
    {
        $this->options = $options;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
