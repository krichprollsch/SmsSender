<?php

namespace SmsSender\Tests;

/**
 * @author Kévin Gomez <kevin_gomez@carpe-hora.com>
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \SmsSender\HttpAdapter\HttpAdapterInterface
     */
    protected function getMockAdapter($expects = null, $content = null)
    {
        if (null === $expects) {
            $expects = $this->once();
        }

        $mock = $this->getMock('\SmsSender\HttpAdapter\HttpAdapterInterface');
        $mock
            ->expects($expects)
            ->method('getContent')
            ->will($this->returnValue($content));

        return $mock;
    }
}
