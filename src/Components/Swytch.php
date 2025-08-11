<?php

namespace Mrakahaikal\Swytch\Components;

use Filament\Forms\Components\Field;
use Illuminate\Contracts\Support\Htmlable;

class Swytch extends Field
{
    protected string $view = 'swytch::components.swytch';

    protected array $options = [];

    // public string|Htmlable| Closure |null $label;
    public string $description = '';

    public string $icon = '';

    public bool $disabled = false;

    public bool $checked = false;

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
