<?php

declare(strict_types=1);

namespace Hurricane\Framework\Controllers;

abstract class Controller
{
  abstract public function index(): string;
}
