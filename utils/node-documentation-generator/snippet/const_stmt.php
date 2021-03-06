<?php

declare(strict_types=1);

use PhpParser\Node\Const_;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Const_ as ConstStmt;

$consts = [new Const_('CONSTANT_IN_CLASS', new String_('default value'))];

return new ConstStmt($consts);
