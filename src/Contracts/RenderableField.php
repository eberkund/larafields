<?php

namespace Eberkund\Larafields\Contracts;

interface RenderableField
{
    public function view(): string;

    public function getType(): string;
}
