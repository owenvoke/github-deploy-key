<?php

declare(strict_types=1);

namespace pxgamer\GithubDeployKey;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class AddCommandTest extends TestCase
{
    /** @var string */
    const TEST_REPO = 'pxgamer/deploy-key-test-repo';

    /** @test*/
    public function itCanSuccessfullyAddARepositoryKey(): void
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
