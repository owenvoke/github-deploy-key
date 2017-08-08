<?php

use PHPUnit\Framework\TestCase;
use pxgamer\GithubDeployKey\AddCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * Class AddCommandTest
 */
class AddCommandTest extends TestCase
{
    /**
     * The test repository name
     */
    const TEST_REPO = 'pxgamer/deploy-key-test-repo';

    /**
     * Test for whether the repo key can be added
     */
    public function testAddRepoKey()
    {
        $application = new Application();
        $application->add(new AddCommand());

        $command = $application->find('add');
        $commandTester = new CommandTester($command);

        // Test the command with default info
        $commandTester->execute(
            [
                'command' => $command->getName(),
                'repositories' => [self::TEST_REPO],
                '--token' => getenv('GITHUB_PAT_TOKEN')
            ]
        );

        $commandBody = $commandTester->getDisplay();

        // Check that the private key was created
        $this->assertRegExp(
            '/-----BEGIN RSA PRIVATE KEY-----/',
            $commandBody
        );

        // Check that the public key was added
        $this->assertRegExp(
            '/Public key added to\: https\:\/\/github.com\/.*?\/settings\/keys/',
            $commandBody
        );
    }
}