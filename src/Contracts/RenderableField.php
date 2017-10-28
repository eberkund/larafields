<?php

namespace Eberkund\Larafields\Contracts;

interface RenderableField
{
    public function view();

    public function getType();
}
