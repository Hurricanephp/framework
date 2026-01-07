<?php

declare(strict_types=1);

namespace Hurricane\Framework\Enums;

enum HttpMethod
{
  case GET;
  case POST;
  case PUT;
  case PATCH;
  case DELETE;
  case HEAD;
  case OPTIONS;
}

