<?php

namespace AsyncAws\CodeDeploy\Exception;

use AsyncAws\Core\Exception\Http\ClientException;

/**
 * The IgnoreApplicationStopFailures value is invalid. For Lambda deployments, `false` is expected. For EC2/On-premises
 * deployments, `true` or `false` is expected.
 */
final class InvalidIgnoreApplicationStopFailuresValueException extends ClientException
{
}
