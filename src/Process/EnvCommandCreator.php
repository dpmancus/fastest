<?php

namespace Liuggio\Fastest\Process;

class EnvCommandCreator
{
    const ENV_TEST_NUMBER='TEST_ENV_NUMBER';
    const ENV_TEST_DB_NAME='ENV_TEST_DB_NAME';
    const ENV_TEST_MAX_PROCESSES='ENV_TEST_MAX_PROCESSES';
    const ENV_TEST_SUITE_NAME='ENV_TEST_SUITE_NAME';
    // create an array of env
    public function execute($i, $maxProcesses, $suite)
    {
        $a = array(
            self::ENV_TEST_NUMBER.'='.$i,
            self::ENV_TEST_DB_NAME.'=test_'.$i,
            self::ENV_TEST_MAX_PROCESSES.'='.$maxProcesses,
            self::ENV_TEST_SUITE_NAME.'='.$suite);

         return $a;
    }
}
