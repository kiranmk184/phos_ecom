<?php

namespace Modules\Core\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Core\App\Traits\ResponseMessage;

class BaseController extends Controller
{
    use ResponseMessage;
}
