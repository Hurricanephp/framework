<?php

declare(strict_types=1);

namespace Hurricane\Framework\Models;

abstract class Model
{
  abstract public function up(): void;
}
